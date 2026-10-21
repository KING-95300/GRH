<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\AttendanceRecord;
use App\Models\Employee;
use Carbon\Carbon;
use Illuminate\Http\Request;
use Illuminate\Validation\Rule;
use Symfony\Component\HttpFoundation\StreamedResponse;

class AttendanceController extends Controller
{
    private const MOTIFS = [
        'forgot' => 'Oubli de badge physique',
        'failure' => 'Panne terminal biométrique',
        'mission' => 'Mission externe / Chantier',
        'other' => 'Autre justification autorisée',
    ];

    public function index(Request $request)
    {
        $date = $this->resolveDate($request->query('date'));
        $employeeId = $request->integer('employee') ?: null;
        $filters = $this->filters($request);

        $records = $this->filteredQuery($date, $employeeId, $filters)
            ->orderByDesc('work_date')
            ->orderBy(Employee::select('name')->whereColumn('employees.id', 'attendance_records.employee_id'))
            ->paginate(8)
            ->appends(array_filter([
                'date' => $date->toDateString(),
                'employee' => $employeeId,
                'q' => $filters['q'],
                'department' => $filters['department'],
                'status' => $filters['status'],
            ]));

        $dayRecords = AttendanceRecord::query()
            ->whereDate('work_date', $date->toDateString())
            ->get();

        $activeEmployees = Employee::where('status', '!=', 'inactif')->count();
        $presentCount = $dayRecords->whereIn('status', ['present', 'late', 'remote'])->count();
        $presenceRate = $activeEmployees > 0 ? round($presentCount / $activeEmployees * 100, 1) : 0.0;

        $lateRecords = $dayRecords->where('status', 'late');
        $lateCount = $lateRecords->count();
        $averageLate = $lateCount > 0
            ? (int) round($lateRecords->avg(fn (AttendanceRecord $record) => $record->lateMinutes()))
            : 0;

        $absenceCount = $dayRecords->where('status', 'absent')->count();
        $syncedModes = $dayRecords->pluck('mode')->filter(fn ($mode) => $mode !== 'none')->unique()->count();

        $monthRecords = AttendanceRecord::query()
            ->whereBetween('work_date', [
                $date->copy()->startOfMonth()->toDateString(),
                $date->copy()->endOfMonth()->toDateString(),
            ])
            ->get();

        $overtimeMinutes = (int) $monthRecords->sum(
            fn (AttendanceRecord $record) => max(0, $record->workedMinutes() - 480)
        );
        $overtimeAgents = $monthRecords
            ->filter(fn (AttendanceRecord $record) => $record->workedMinutes() > 480)
            ->pluck('employee_id')
            ->unique()
            ->count();

        $weekDays = $this->weekBreakdown($date, $activeEmployees);

        $anomalies = $this->anomalies($dayRecords);

        $employees = Employee::orderBy('name')->get(['id', 'name', 'status']);
        $historyEmployee = $employeeId ? Employee::find($employeeId) : null;

        return view('admin.attendance', [
            'records' => $records,
            'selectedDate' => $date,
            'dateLabel' => ucfirst($date->copy()->locale('fr')->translatedFormat('l j F Y')),
            'previousDate' => $date->copy()->subDay(),
            'nextDate' => $date->copy()->addDay(),
            'filters' => $filters,
            'employeeId' => $employeeId,
            'historyEmployee' => $historyEmployee,
            'employees' => $employees,
            'activeEmployees' => $activeEmployees,
            'presentCount' => $presentCount,
            'presenceRate' => $presenceRate,
            'lateCount' => $lateCount,
            'averageLate' => $averageLate,
            'absenceCount' => $absenceCount,
            'syncedModes' => $syncedModes,
            'overtimeHours' => round($overtimeMinutes / 60, 1),
            'overtimeAgents' => $overtimeAgents,
            'weekDays' => $weekDays,
            'anomalies' => $anomalies,
            'motifs' => self::MOTIFS,
        ]);
    }

    public function punch(Request $request)
    {
        $validated = $request->validate([
            'employee_id' => ['required', 'integer', 'exists:employees,id'],
            'date' => ['required', 'date'],
            'time' => ['required', 'date_format:H:i'],
            'direction' => ['required', Rule::in(['in', 'out', 'pause_in', 'pause_out'])],
            'motif' => ['nullable', Rule::in(array_keys(self::MOTIFS))],
            'comment' => ['nullable', 'string', 'max:500'],
        ]);

        $date = Carbon::parse($validated['date'])->toDateString();
        $time = $validated['time'].':00';

        $record = AttendanceRecord::firstOrNew([
            'employee_id' => $validated['employee_id'],
            'work_date' => $date,
        ]);

        if (! $record->exists) {
            $record->mode = 'manual';
            $record->status = 'present';
        }

        $record->mode = 'manual';

        switch ($validated['direction']) {
            case 'in':
                $record->check_in = $time;
                if ($record->status !== 'remote') {
                    $record->status = $record->lateMinutes() > 15 ? 'late' : 'present';
                }
                break;
            case 'out':
                $record->check_out = $time;
                break;
            case 'pause_in':
                $record->break_start = $time;
                break;
            case 'pause_out':
                $record->break_end = $time;
                if ($record->break_start) {
                    $start = Carbon::createFromFormat('H:i:s', $record->break_start);
                    $end = Carbon::createFromFormat('H:i:s', $time);
                    $record->break_minutes = max(0, $start->diffInMinutes($end, false));
                }
                break;
        }

        $noteParts = ['Pointage manuel du '.now()->format('d/m/Y H:i')];
        if (! empty($validated['motif'])) {
            $noteParts[] = 'Motif : '.self::MOTIFS[$validated['motif']];
        }
        if (! empty($validated['comment'])) {
            $noteParts[] = trim($validated['comment']);
        }

        $record->notes = trim(implode(' — ', array_filter([
            $record->notes,
            implode(' • ', $noteParts),
        ])));
        $record->anomaly_ignored = false;
        $record->save();

        $employee = Employee::find($validated['employee_id']);

        return redirect()
            ->route('admin.attendance', ['date' => $date])
            ->with('success', 'Pointage enregistré pour '.($employee?->name ?? 'le collaborateur').'.');
    }

    public function resolveAnomaly(AttendanceRecord $record)
    {
        if ($record->hasMissingCheckout()) {
            $record->check_out = '17:30:00';
            $record->notes = trim(($record->notes ? $record->notes.' — ' : '').'Départ régularisé à 17:30 par RH.');
        }

        $record->anomaly_ignored = true;
        $record->save();

        return back()->with('success', 'Anomalie régularisée pour '.($record->employee?->name ?? 'le collaborateur').'.');
    }

    public function justifyAnomaly(AttendanceRecord $record)
    {
        $record->anomaly_ignored = true;
        $record->notes = trim(($record->notes ? $record->notes.' — ' : '').'Bon de sortie joint par RH.');
        $record->save();

        return back()->with('success', 'Justificatif enregistré pour '.($record->employee?->name ?? 'le collaborateur').'.');
    }

    public function ignoreAnomaly(AttendanceRecord $record)
    {
        $record->anomaly_ignored = true;
        $record->save();

        return back()->with('success', 'Anomalie ignorée pour '.($record->employee?->name ?? 'le collaborateur').'.');
    }

    public function resolveAll(Request $request)
    {
        $date = $this->resolveDate($request->input('date'));

        $records = AttendanceRecord::query()
            ->whereDate('work_date', $date->toDateString())
            ->where('anomaly_ignored', false)
            ->get()
            ->filter(fn (AttendanceRecord $record) => $record->hasMissingCheckout() || $record->hasEarlyExit() || $record->isLateArrival());

        foreach ($records as $record) {
            if ($record->hasMissingCheckout()) {
                $record->check_out = '17:30:00';
                $record->notes = trim(($record->notes ? $record->notes.' — ' : '').'Départ régularisé à 17:30 par RH.');
            }
            $record->anomaly_ignored = true;
            $record->save();
        }

        return back()->with(
            'success',
            $records->count() > 0
                ? $records->count().' anomalie(s) de pointage traitée(s).'
                : 'Aucune anomalie à traiter pour cette date.'
        );
    }

    public function export(Request $request): StreamedResponse
    {
        $date = $this->resolveDate($request->query('date'));
        $employeeId = $request->integer('employee') ?: null;
        $filters = $this->filters($request);

        $records = $this->filteredQuery($date, $employeeId, $filters)
            ->orderByDesc('work_date')
            ->orderBy('employee_id')
            ->get();

        return response()->streamDownload(function () use ($records) {
            $handle = fopen('php://output', 'w');
            fwrite($handle, "\xEF\xBB\xBF");
            fputcsv($handle, [
                'Date',
                'Collaborateur',
                'Matricule',
                'Département',
                'Arrivée',
                'Départ',
                'Pause (min)',
                'Total effectué',
                'Mode de pointage',
                'Statut',
                'Notes',
            ], ';');

            foreach ($records as $record) {
                fputcsv($handle, [
                    $record->work_date?->format('d/m/Y'),
                    $record->employee?->name,
                    'MAT-'.str_pad((string) $record->employee_id, 4, '0', STR_PAD_LEFT),
                    $record->employee?->departmentLabel(),
                    $record->checkInShort() ?? '—',
                    $record->checkOutShort() ?? '—',
                    $record->break_minutes,
                    $record->workedLabel(),
                    $record->modeLabel(),
                    $record->statusLabel(),
                    $record->notes,
                ], ';');
            }

            fclose($handle);
        }, 'pointages-'.$date->format('Y-m-d').'.csv', [
            'Content-Type' => 'text/csv; charset=UTF-8',
        ]);
    }

    private function filteredQuery(Carbon $date, ?int $employeeId, array $filters)
    {
        return AttendanceRecord::query()
            ->with('employee')
            ->when(
                $employeeId,
                fn ($query) => $query
                    ->where('employee_id', $employeeId)
                    ->whereBetween('work_date', [
                        $date->copy()->startOfMonth()->toDateString(),
                        $date->copy()->endOfMonth()->toDateString(),
                    ]),
                fn ($query) => $query->whereDate('work_date', $date->toDateString())
            )
            ->when($filters['q'] !== '', function ($query) use ($filters) {
                $term = '%'.$filters['q'].'%';

                $query->whereHas('employee', function ($query) use ($term) {
                    $query->where('name', 'like', $term)
                        ->orWhere('cin', 'like', $term)
                        ->orWhere('cnss_number', 'like', $term)
                        ->orWhere('position', 'like', $term);
                });
            })
            ->when(
                array_key_exists($filters['department'], Employee::DEPARTMENTS),
                fn ($query) => $query->whereHas(
                    'employee',
                    fn ($query) => $query->where('department', $filters['department'])
                )
            )
            ->when($filters['status'] !== '' && $filters['status'] !== 'all', function ($query) use ($filters) {
                $status = $filters['status'] === 'ontime' ? 'present' : $filters['status'];
                $query->where('status', $status);
            });
    }

    private function weekBreakdown(Carbon $date, int $activeEmployees): array
    {
        $start = $date->copy()->startOfWeek(Carbon::MONDAY);
        $labels = ['Lun', 'Mar', 'Mer', 'Jeu', 'Ven'];

        return collect(range(0, 4))->map(function (int $index) use ($start, $labels, $activeEmployees) {
            $day = $start->copy()->addDays($index);
            $records = AttendanceRecord::whereDate('work_date', $day->toDateString())->get();
            $isFuture = $day->isAfter(today());
            $present = $records->whereIn('status', ['present', 'late', 'remote'])->count();
            $late = $records->where('status', 'late')->count();

            $rate = ! $isFuture && $activeEmployees > 0
                ? round($present / $activeEmployees * 100, 1)
                : null;
            $lateRate = ! $isFuture && $activeEmployees > 0
                ? round($late / $activeEmployees * 100, 1)
                : 0.0;

            return [
                'label' => $labels[$index].' '.$day->day,
                'date' => $day,
                'rate' => $rate,
                'primaryHeight' => $rate !== null ? max(0, (int) round($rate - $lateRate)) : 0,
                'lateHeight' => $rate !== null ? (int) round($lateRate) : 0,
                'isToday' => $day->isSameDay(today()),
                'isFuture' => $isFuture,
            ];
        })->all();
    }

    private function anomalies($dayRecords): array
    {
        return $dayRecords
            ->reject(fn (AttendanceRecord $record) => $record->anomaly_ignored)
            ->filter(fn (AttendanceRecord $record) => $record->hasMissingCheckout() || $record->hasEarlyExit() || $record->isLateArrival())
            ->sortByDesc(fn (AttendanceRecord $record) => $record->hasMissingCheckout() ? 2 : ($record->isLateArrival() ? 1 : 0))
            ->take(3)
            ->map(function (AttendanceRecord $record) {
                if ($record->hasMissingCheckout()) {
                    return [
                        'record' => $record,
                        'title' => 'Oubli de badge départ',
                        'icon' => 'logout',
                        'tone' => 'bg-error-container text-error',
                        'action' => 'resolve',
                        'actionLabel' => 'Régulariser 17:30',
                        'subtitle' => $record->employee?->name.' • '.$record->work_date?->format('d/m/Y'),
                    ];
                }

                if ($record->isLateArrival()) {
                    return [
                        'record' => $record,
                        'title' => 'Retard non justifié',
                        'icon' => 'schedule',
                        'tone' => 'bg-secondary-container text-secondary',
                        'action' => 'ignore',
                        'actionLabel' => 'Ignorer',
                        'subtitle' => $record->employee?->name.' • +'.$record->lateMinutes().' min',
                    ];
                }

                return [
                    'record' => $record,
                    'title' => 'Sortie anticipée sans bon',
                    'icon' => 'hourglass_top',
                    'tone' => 'bg-secondary-container text-secondary',
                    'action' => 'justify',
                    'actionLabel' => 'Joindre Bon de Sortie',
                    'subtitle' => $record->employee?->name.' • '.($record->checkOutShort() ?? '—'),
                ];
            })
            ->values()
            ->all();
    }

    private function filters(Request $request): array
    {
        return [
            'q' => trim((string) $request->query('q', '')),
            'department' => (string) $request->query('department', ''),
            'status' => (string) $request->query('status', ''),
        ];
    }

    private function resolveDate(?string $value): Carbon
    {
        if (! $value) {
            return today();
        }

        try {
            return Carbon::parse($value)->startOfDay();
        } catch (\Throwable) {
            return today();
        }
    }
}
