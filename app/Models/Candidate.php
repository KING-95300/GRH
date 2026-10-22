<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Candidate extends Model
{
    use HasFactory;

    const STAGES = [
        'received' => 'Reçues / Tri Initial',
        'rh_evaluation' => 'Évaluation RH',
        'test_technical' => 'Test & Technique',
        'offer' => "Offre d'Embauche",
        'hired' => 'Recruté / Clôturé',
    ];

    const SOURCES = [
        'LinkedIn',
        'Recommandation interne',
        'Site Carrières',
        'Keejob / Tanitjobs',
    ];

    protected $fillable = [
        'job_offer_id',
        'name',
        'email',
        'phone',
        'position',
        'avatar_url',
        'match_percentage',
        'experience_years',
        'skills',
        'source',
        'salary_claim',
        'availability',
        'contract_type_target',
        'stage',
        'hired_at',
        'onboarded_at',
        'notes',
    ];

    protected $casts = [
        'hired_at' => 'date',
        'onboarded_at' => 'datetime',
        'salary_claim' => 'decimal:2',
    ];

    public function jobOffer()
    {
        return $this->belongsTo(JobOffer::class);
    }

    public function interviews()
    {
        return $this->hasMany(Interview::class);
    }
}
