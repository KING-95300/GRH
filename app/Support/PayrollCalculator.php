<?php

namespace App\Support;

use App\Models\Employee;

class PayrollCalculator
{
    public const EMPLOYEE_CNSS_RATE = 0.0918;
    public const EMPLOYER_CNSS_RATE = 0.1737;
    public const TRANSPORT_ALLOWANCE = 100.0;

    public static function forEmployee(Employee $employee, float $base, float $prime): array
    {
        $cnss = round(($base + $prime) * self::EMPLOYEE_CNSS_RATE, 3);
        $taxable = round($base + $prime - $cnss, 3);
        $irpp = self::monthlyIrpp($taxable, self::familyParts($employee));
        $css = round($taxable * 0.01, 3);
        $transport = self::TRANSPORT_ALLOWANCE;
        $net = round($base + $prime + $transport - $cnss - $irpp - $css, 3);

        return [
            'base_salary' => round($base, 3),
            'prime' => round($prime, 3),
            'transport_allowance' => $transport,
            'cnss' => $cnss,
            'taxable_base' => $taxable,
            'irpp' => $irpp,
            'css' => $css,
            'net' => $net,
        ];
    }

    public static function familyParts(Employee $employee): float
    {
        $parts = 1.0;

        if ($employee->family_status === 'marie') {
            $parts += 0.5;
        }

        $parts += min(3, (int) $employee->children) * 0.5;

        return $parts;
    }

    public static function monthlyIrpp(float $monthlyTaxable, float $parts = 1.0): float
    {
        $annual = max(0, $monthlyTaxable * 12 - 5000 * $parts);

        $limits = [5000, 20000, 30000, 40000, 50000, 70000];
        $rates = [0.0, 0.26, 0.28, 0.32, 0.34, 0.36];

        $tax = 0.0;
        $previous = 0.0;

        foreach ($limits as $index => $limit) {
            $slice = min($annual, $limit) - $previous;

            if ($slice > 0) {
                $tax += $slice * $rates[$index];
            }

            $previous = $limit;

            if ($annual <= $limit) {
                break;
            }
        }

        if ($annual > 70000) {
            $tax += ($annual - 70000) * 0.38;
        }

        return round($tax / 12, 3);
    }
}
