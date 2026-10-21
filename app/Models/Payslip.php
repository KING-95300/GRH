<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Payslip extends Model
{
    use HasFactory;

    public const STATUSES = [
        'ready' => 'Virement Prêt',
        'review' => 'En Révision',
        'paid' => 'Payé',
    ];

    protected $fillable = [
        'employee_id',
        'period',
        'base_salary',
        'prime',
        'transport_allowance',
        'cnss',
        'taxable_base',
        'irpp',
        'css',
        'net',
        'status',
        'paid_at',
        'bank',
        'rib',
    ];

    protected $casts = [
        'base_salary' => 'decimal:3',
        'prime' => 'decimal:3',
        'transport_allowance' => 'decimal:3',
        'cnss' => 'decimal:3',
        'taxable_base' => 'decimal:3',
        'irpp' => 'decimal:3',
        'css' => 'decimal:3',
        'net' => 'decimal:3',
        'paid_at' => 'datetime',
    ];

    public function employee()
    {
        return $this->belongsTo(Employee::class);
    }

    public function statusLabel(): string
    {
        return self::STATUSES[$this->status] ?? $this->status;
    }

    public function matricule(): string
    {
        return 'MAT-'.str_pad((string) $this->employee_id, 4, '0', STR_PAD_LEFT);
    }

    public function gross(): float
    {
        return (float) $this->base_salary + (float) $this->prime;
    }

    public function employerCnss(): float
    {
        return round($this->gross() * 0.1737, 3);
    }
}
