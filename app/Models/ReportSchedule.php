<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ReportSchedule extends Model
{
    use HasFactory;

    const FREQUENCIES = [
        'mensuel' => 'Mensuelle',
        'trimestriel' => 'Trimestrielle',
        'hebdomadaire' => 'Hebdomadaire',
        'sur_evenement' => 'Sur Événement',
    ];

    const STATUSES = [
        'actif' => 'Actif',
        'en_veille' => 'En veille',
    ];

    protected $fillable = [
        'title',
        'description',
        'recipients',
        'frequency',
        'schedule_detail',
        'format',
        'last_sent_at',
        'status',
    ];

    protected $casts = [
        'last_sent_at' => 'datetime',
    ];
}
