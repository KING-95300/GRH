<?php

namespace App\Http\Controllers;

use App\Models\Candidate;
use App\Models\Conges;
use App\Models\Document;
use App\Models\Employee;
use App\Models\JobOffer;
use App\Models\ReportSchedule;
use Carbon\Carbon;
use Illuminate\Http\Request;
use Illuminate\Validation\Rule;

class ReportsController extends Controller
{
    const PERIODS = [
        'current_month' => 'Mois en cours',
        'last_month' => 'Mois dernier',
        'current_quarter' => 'Trimestre en cours',
        'current_year' => 'Année en cours',
        'all' => 'Tout l\'historique',
    ];

    public function index(Request $request)
    {
        $period = $request->query('period', 'current_year');
        if (! array_key_exists($period, self::PERIODS)) {
            $period = 'current_year';
        }

        [$start, $end] = match ($period) {
            'current_month' => [now()->startOfMonth(), now()->endOfMonth()],
            'last_month' => [now()->subMonth()->startOfMonth(), now()->subMonth()->endOfMonth()],
            'current_quarter' => [now()->startOfQuarter(), now()->endOfQuarter()],
            'current_year' => [now()->startOfYear(), now()->endOfYear()],
            default => [null, null],
        };

        // Effectifs (lecture seule du module Collaborateurs)
        $employees = Employee::all();
        $totalEmployees = $employees->count();
        $employeesByPosition = $employees->groupBy('position')->map->count()->sortDesc();
        $cnssRegistered = $employees->whereNotNull('cnss_number')->count();

        // Congés (lecture seule du module Leaves)
        $congesInPeriod = Conges::when($start, fn ($q) => $q->whereBetween('start_date', [$start, $end]))->get();
        $congesCount = $congesInPeriod->count();
        $congesDays = $congesInPeriod->sum(function ($conge) {
            $startDate = Carbon::parse($conge->start_date);
            $endDate = Carbon::parse($conge->end_date);

            return max(1, (int) $startDate->diffInDays($endDate) + 1);
        });

        // Recrutement (nos propres tables)
        $recruitment = [
            'active_candidates' => Candidate::where('stage', '!=', 'hired')->count(),
            'hired_in_period' => Candidate::where('stage', 'hired')
                ->when($start, fn ($q) => $q->whereBetween('hired_at', [$start, $end]))
                ->count(),
            'open_offers' => JobOffer::where('status', 'open')->count(),
            'pending_offers' => JobOffer::where('status', 'pending_validation')->count(),
        ];

        // Documents (nos propres tables)
        $documents = [
            'total' => Document::count(),
            'bytes' => Document::sum('size'),
        ];

        $schedules = ReportSchedule::orderBy('id')->get();

        return view('admin.reports', compact(
            'period',
            'totalEmployees',
            'employeesByPosition',
            'cnssRegistered',
            'congesCount',
            'congesDays',
            'recruitment',
            'documents',
            'schedules'
        ));
    }

    public function storeSchedule(Request $request)
    {
        ReportSchedule::create($this->scheduleRules($request));

        return redirect()->route('admin.reports')->with('success', 'Planification créée avec succès.');
    }

    public function updateSchedule(Request $request, ReportSchedule $schedule)
    {
        $schedule->update($this->scheduleRules($request));

        return redirect()->route('admin.reports')->with('success', 'Planification mise à jour.');
    }

    public function destroySchedule(ReportSchedule $schedule)
    {
        $schedule->delete();

        return redirect()->route('admin.reports')->with('success', 'Planification supprimée.');
    }

    public function sendNow(ReportSchedule $schedule)
    {
        $schedule->update(['last_sent_at' => now()]);

        return redirect()->route('admin.reports')->with('success', '« ' . $schedule->title . ' » marqué comme envoyé maintenant.');
    }

    public function exportCsv(string $dataset)
    {
        $exporters = [
            'employees' => [
                'headers' => ['ID', 'Nom', 'Poste', 'Email', 'CIN', 'N° CNSS', 'Statut'],
                'rows' => fn () => Employee::orderBy('name')->get()
                    ->map(fn ($e) => [$e->id, $e->name, $e->position, $e->email, $e->cin, $e->cnss_number, $e->status]),
            ],
            'conges' => [
                'headers' => ['Employé', 'Début', 'Fin', 'Motif'],
                'rows' => fn () => Conges::orderBy('start_date')->get()
                    ->map(fn ($c) => [$c->employee_name, $c->start_date, $c->end_date, $c->reason]),
            ],
            'candidates' => [
                'headers' => ['Nom', 'Poste', 'Étape', 'Canal', 'Offre liée', 'Match %'],
                'rows' => fn () => Candidate::with('jobOffer')->orderBy('name')->get()
                    ->map(fn ($c) => [
                        $c->name,
                        $c->position,
                        Candidate::STAGES[$c->stage] ?? $c->stage,
                        $c->source,
                        $c->jobOffer?->title ?? '',
                        $c->match_percentage,
                    ]),
            ],
            'documents' => [
                'headers' => ['Libellé', 'Catégorie', 'Statut', 'Taille (o)', 'Collaborateur', 'Ajouté le'],
                'rows' => fn () => Document::with('employee')->orderBy('created_at')->get()
                    ->map(fn ($d) => [
                        $d->name,
                        Document::CATEGORIES[$d->category] ?? $d->category,
                        Document::STATUSES[$d->status] ?? $d->status,
                        $d->size,
                        $d->employee?->name ?? '',
                        $d->created_at?->format('d/m/Y'),
                    ]),
            ],
        ];

        if (! isset($exporters[$dataset])) {
            abort(404);
        }

        $filename = $dataset . '_' . now()->format('Ymd_His') . '.csv';

        return response()->streamDownload(function () use ($exporters, $dataset) {
            $out = fopen('php://output', 'w');
            fwrite($out, "\xEF\xBB\xBF"); // BOM UTF-8 pour Excel
            fputcsv($out, $exporters[$dataset]['headers'], ';');
            foreach ($exporters[$dataset]['rows']() as $row) {
                fputcsv($out, $row, ';');
            }
            fclose($out);
        }, $filename, ['Content-Type' => 'text/csv; charset=UTF-8']);
    }

    private function scheduleRules(Request $request): array
    {
        return $request->validate([
            'title' => ['required', 'string', 'max:255'],
            'description' => ['nullable', 'string'],
            'recipients' => ['required', 'string', 'max:255'],
            'frequency' => ['required', Rule::in(array_keys(ReportSchedule::FREQUENCIES))],
            'schedule_detail' => ['nullable', 'string', 'max:255'],
            'format' => ['required', Rule::in(['CSV', 'PDF', 'XLSX'])],
            'status' => ['required', Rule::in(array_keys(ReportSchedule::STATUSES))],
        ]);
    }
}
