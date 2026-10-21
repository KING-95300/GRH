<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Department;
use App\Models\Employee;
use App\Models\Payslip;
use Illuminate\Http\Request;
use Illuminate\Support\Str;
use Illuminate\Validation\Rule;
use Symfony\Component\HttpFoundation\StreamedResponse;

class DepartmentController extends Controller
{
    private const PALETTE = [
        ['dot_color' => 'bg-primary-container', 'text_color' => 'text-primary', 'bar_color' => 'bg-primary-container'],
        ['dot_color' => 'bg-secondary', 'text_color' => 'text-secondary', 'bar_color' => 'bg-secondary'],
        ['dot_color' => 'bg-tertiary', 'text_color' => 'text-tertiary', 'bar_color' => 'bg-tertiary'],
        ['dot_color' => 'bg-outline', 'text_color' => 'text-on-surface-variant', 'bar_color' => 'bg-tertiary-container'],
        ['dot_color' => 'bg-primary', 'text_color' => 'text-primary', 'bar_color' => 'bg-primary'],
    ];

    public function index()
    {
        $period = now()->format('Y-m');
        $activeEmployees = Employee::where('status', '!=', 'inactif')->get();

        $departments = Department::query()
            ->with([
                'manager',
                'employees' => fn ($query) => $query->where('status', '!=', 'inactif')->orderBy('name'),
            ])
            ->orderBy('name')
            ->get();

        $grossByEmployee = Payslip::where('period', $period)
            ->get()
            ->mapWithKeys(fn (Payslip $payslip) => [
                $payslip->employee_id => (float) $payslip->base_salary + (float) $payslip->prime,
            ]);

        $totalGross = (float) $grossByEmployee->sum();
        $totalBudget = 0.0;
        $conforming = 0;

        foreach ($departments as $department) {
            $gross = (float) $department->employees->sum(
                fn (Employee $employee) => (float) ($grossByEmployee[$employee->id] ?? 0)
            );
            $budget = (float) $department->monthly_budget;
            $withinBudget = $budget <= 0 || $gross <= $budget;

            $department->setAttribute('team_count', $department->employees->count());
            $department->setAttribute('gross_total', $gross);
            $department->setAttribute('cnss_total', round($gross * 0.1657, 3));
            $department->setAttribute('within_budget', $withinBudget);

            $totalBudget += $budget;

            if ($withinBudget) {
                $conforming++;
            }
        }

        $departments = $departments->sortByDesc('team_count')->values();
        $managerCount = $departments->filter(fn (Department $department) => $department->manager_id !== null)->count();
        $cnssAffiliated = $activeEmployees->filter(fn (Employee $employee) => $employee->hasCompleteCnssProfile())->count();
        $affiliationRate = $activeEmployees->count() > 0
            ? round($cnssAffiliated / $activeEmployees->count() * 100)
            : 0;

        return view('admin.departments', [
            'departments' => $departments,
            'employees' => Employee::orderBy('name')->get(['id', 'name', 'position', 'email', 'avatar_url']),
            'departmentCount' => $departments->count(),
            'activeCount' => $activeEmployees->count(),
            'managerCount' => $managerCount,
            'leadCoverage' => $departments->count() > 0 ? round($managerCount / $departments->count() * 100) : 0,
            'cnssAffiliationRate' => $affiliationRate,
            'leadershipRatio' => $managerCount > 0
                ? round($activeEmployees->count() / $managerCount, 1)
                : null,
            'totalGross' => $totalGross,
            'totalBudget' => $totalBudget,
            'budgetComplianceRate' => $departments->count() > 0
                ? round($conforming / $departments->count() * 100, 1)
                : 100.0,
            'period' => $period,
        ]);
    }

    public function store(Request $request)
    {
        $validated = $this->validateDepartment($request);
        $slug = $this->uniqueSlug(Str::slug($validated['name']) ?: 'departement');

        $palette = self::PALETTE[Department::count() % count(self::PALETTE)];

        Department::create(array_merge($palette, [
            'slug' => $slug,
            'name' => $validated['name'],
            'tag' => 'Nouvelle Structure',
            'description' => $validated['description'] ?? null,
            'manager_id' => $validated['manager_id'] ?? null,
            'code' => $validated['code'] ?? null,
            'monthly_budget' => $validated['monthly_budget'] ?? 0,
            'occupancy' => 0,
            'occupancy_label' => "Taux d'occupation",
            'metric_value' => '0%',
            'metric_color' => 'text-on-surface',
            'specialties_label' => 'Spécialisations',
            'specialties' => [],
            'tags' => [],
            'sub_teams' => [],
        ]));

        return redirect()
            ->route('admin.departments')
            ->with('success', 'Le département « '.$validated['name'].' » a été créé.');
    }

    public function update(Request $request, Department $department)
    {
        $validated = $this->validateDepartment($request, $department);

        $department->update([
            'name' => $validated['name'],
            'description' => $validated['description'] ?? $department->description,
            'manager_id' => $validated['manager_id'] ?? null,
            'code' => $validated['code'] ?? $department->code,
            'monthly_budget' => $validated['monthly_budget'] ?? $department->monthly_budget,
        ]);

        return redirect()
            ->route('admin.departments')
            ->with('success', 'Le département « '.$department->name.' » a été mis à jour.');
    }

    public function export(): StreamedResponse
    {
        $period = now()->format('Y-m');
        $grossByEmployee = Payslip::where('period', $period)
            ->get()
            ->mapWithKeys(fn (Payslip $payslip) => [
                $payslip->employee_id => (float) $payslip->base_salary + (float) $payslip->prime,
            ]);

        $departments = Department::with(['manager', 'employees'])->orderBy('name')->get();

        return response()->streamDownload(function () use ($departments, $grossByEmployee) {
            $handle = fopen('php://output', 'w');
            fwrite($handle, "\xEF\xBB\xBF");
            fputcsv($handle, [
                'Département',
                'Responsable',
                'Effectif',
                'Salaire brut total',
                'Cotisations CNSS patronales',
                'Budget mensuel',
                'Statut conformité',
            ], ';');

            foreach ($departments as $department) {
                $gross = (float) $department->employees->sum(
                    fn (Employee $employee) => (float) ($grossByEmployee[$employee->id] ?? 0)
                );
                $budget = (float) $department->monthly_budget;

                fputcsv($handle, [
                    $department->name,
                    $department->manager?->name ?? 'Non assigné',
                    $department->employees->count(),
                    number_format($gross, 3, '.', ''),
                    number_format(round($gross * 0.1657, 3), 3, '.', ''),
                    number_format($budget, 3, '.', ''),
                    $budget <= 0 || $gross <= $budget ? 'Conforme' : 'Dépassement',
                ], ';');
            }

            fclose($handle);
        }, 'departements-'.now()->format('Y-m-d').'.csv', [
            'Content-Type' => 'text/csv; charset=UTF-8',
        ]);
    }

    private function validateDepartment(Request $request, ?Department $department = null): array
    {
        return $request->validate([
            'name' => [
                'required',
                'string',
                'max:120',
                Rule::unique('departments', 'name')->ignore($department?->id),
            ],
            'manager_id' => ['nullable', 'integer', 'exists:employees,id'],
            'code' => ['nullable', 'string', 'max:50'],
            'monthly_budget' => ['nullable', 'numeric', 'min:0', 'max:99999999'],
            'description' => ['nullable', 'string', 'max:1000'],
        ]);
    }

    private function uniqueSlug(string $base): string
    {
        $slug = $base;
        $suffix = 2;

        while (Department::where('slug', $slug)->exists()) {
            $slug = $base.'-'.$suffix;
            $suffix++;
        }

        return $slug;
    }
}
