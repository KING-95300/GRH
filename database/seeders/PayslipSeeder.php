<?php

namespace Database\Seeders;

use App\Models\Employee;
use App\Models\Payslip;
use App\Support\PayrollCalculator;
use Carbon\Carbon;
use Illuminate\Database\Seeder;

class PayslipSeeder extends Seeder
{
    private const BASE_SALARIES = [
        'm.bensalem@carthagetech.tn' => 4200,
        'y.trabelsi@carthagetech.tn' => 3600,
        'k.chaabane@carthagetech.tn' => 3100,
        'n.karray@carthagetech.tn' => 3400,
        'm.zghal@carthagetech.tn' => 3200,
        's.mezghani@carthagetech.tn' => 2850,
        'a.mansour@carthagetech.tn' => 3800,
        'f.ghorbel@carthagetech.tn' => 2600,
    ];

    private const PRIMES = [
        'm.bensalem@carthagetech.tn' => 350,
        'y.trabelsi@carthagetech.tn' => 180,
        'k.chaabane@carthagetech.tn' => 600,
        'n.karray@carthagetech.tn' => 250,
        'm.zghal@carthagetech.tn' => 150,
        's.mezghani@carthagetech.tn' => 120,
        'a.mansour@carthagetech.tn' => 400,
        'f.ghorbel@carthagetech.tn' => 200,
    ];

    public function run(): void
    {
        $current = now()->format('Y-m');
        $previous = now()->subMonthNoOverflow()->format('Y-m');

        $this->seedPeriod($current, true);
        $this->seedPeriod($previous, false);
    }

    private function seedPeriod(string $period, bool $isCurrent): void
    {
        $employees = Employee::where('status', '!=', 'inactif')->get();

        foreach ($employees as $employee) {
            $email = strtolower((string) $employee->email);
            $base = (float) (self::BASE_SALARIES[$email] ?? $this->defaultBase($employee));
            $prime = (float) (self::PRIMES[$email] ?? 0);
            $amounts = PayrollCalculator::forEmployee($employee, $base, $prime);
            [$bank, $rib] = $this->bankDetails($employee->bank_account);

            $status = 'ready';

            if (! $isCurrent) {
                $status = 'paid';
            } elseif ($email === 'f.ghorbel@carthagetech.tn') {
                $status = 'review';
            } elseif ($email === 'jane@example.com') {
                $status = 'paid';
            }

            Payslip::updateOrCreate(
                ['employee_id' => $employee->id, 'period' => $period],
                array_merge($amounts, [
                    'status' => $status,
                    'paid_at' => $status === 'paid'
                        ? Carbon::createFromFormat('Y-m', $period)->endOfMonth()
                        : null,
                    'bank' => $bank,
                    'rib' => $rib,
                ])
            );
        }
    }

    private function defaultBase(Employee $employee): int
    {
        return match ($employee->department) {
            'it' => 3400,
            'finance' => 3200,
            'produit' => 3100,
            'commerce' => 2900,
            'rh' => 2800,
            default => 2800,
        };
    }

    private function bankDetails(?string $account): array
    {
        $account = trim((string) $account);

        if ($account === '' || strtolower($account) === 'non renseigné') {
            return ['—', '—'];
        }

        $parts = preg_split('/\s+/', $account, 2);
        $short = strtoupper($parts[0] ?? '');
        $bank = match ($short) {
            'AMEN' => 'Amen Bank',
            'BIAT' => 'BIAT',
            'UIB' => 'UIB',
            'ATB' => 'ATB',
            'BH' => 'BH Bank',
            'STB' => 'STB',
            default => $parts[0] ?? '—',
        };

        return [$bank, $parts[1] ?? '—'];
    }
}
