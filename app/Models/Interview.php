<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Interview extends Model
{
    use HasFactory;

    const TYPES = [
        'rh' => 'RH',
        'technical' => 'Technique',
        'final' => 'Final',
    ];

    const STATUSES = [
        'planned' => 'Planifié',
        'done' => 'Terminé',
        'cancelled' => 'Annulé',
    ];

    protected $fillable = [
        'candidate_id',
        'scheduled_at',
        'interviewer',
        'type',
        'status',
        'notes',
    ];

    protected $casts = [
        'scheduled_at' => 'datetime',
    ];

    public function candidate()
    {
        return $this->belongsTo(Candidate::class);
    }
}
