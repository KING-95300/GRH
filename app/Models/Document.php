<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Document extends Model
{
    use HasFactory;

    const CATEGORIES = [
        'contrats' => 'Contrats de Travail (CDI/CDD/SIVP)',
        'identite' => 'Copies CIN & Passeport',
        'paie' => 'Fiches de Paie signées',
        'diplomes' => 'Diplômes & Certificats',
        'attestations' => 'Attestations & B3',
    ];

    const STATUSES = [
        'actif' => 'Actif',
        'en_attente_signature' => 'En attente de signature',
        'cloture' => 'Clôturé',
        'conforme' => 'Conforme',
    ];

    protected $fillable = [
        'employee_id',
        'name',
        'original_name',
        'path',
        'size',
        'mime_type',
        'category',
        'status',
        'expires_at',
        'notes',
    ];

    protected $casts = [
        'expires_at' => 'date',
    ];

    public function employee()
    {
        return $this->belongsTo(Employee::class);
    }
}
