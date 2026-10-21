<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class JobOffer extends Model
{
    use HasFactory;

    const CONTRACT_TYPES = ['CDI', 'CDD', 'SIVP', 'Karama', 'Consulting'];

    const STATUSES = [
        'open' => 'Ouverte',
        'pending_validation' => 'Validation DG',
        'closed' => 'Clôturée',
    ];

    protected $fillable = [
        'title',
        'department',
        'contract_type',
        'status',
        'location',
        'salary_min',
        'salary_max',
        'description',
    ];

    protected $casts = [
        'salary_min' => 'decimal:2',
        'salary_max' => 'decimal:2',
    ];

    public function candidates()
    {
        return $this->hasMany(Candidate::class);
    }
}
