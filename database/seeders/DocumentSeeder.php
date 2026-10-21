<?php

namespace Database\Seeders;

use App\Models\Document;
use App\Models\Employee;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Str;

class DocumentSeeder extends Seeder
{
    public function run(): void
    {
        $employeeIds = Employee::pluck('id', 'email');

        $documents = [
            [
                'name' => 'Contrat CDI — Mohamed Ben Salem.pdf',
                'employee_email' => 'm.bensalem@carthagetech.tn',
                'category' => 'contrats',
                'status' => 'conforme',
                'size' => 1_482_000,
                'created_days' => 420,
                'notes' => "Contrat signé le 15 janvier 2020 — période d'essai de 3 mois.",
            ],
            [
                'name' => 'Avenant Télétravail — Yasmine Trabelsi.pdf',
                'employee_email' => 'y.trabelsi@carthagetech.tn',
                'category' => 'contrats',
                'status' => 'en_attente_signature',
                'size' => 620_000,
                'created_days' => 6,
                'notes' => 'Avenant télétravail 2 jours par semaine — relance envoyée au collaborateur.',
            ],
            [
                'name' => 'Contrat CDI — Karim Chaabane.pdf',
                'employee_email' => 'k.chaabane@carthagetech.tn',
                'category' => 'contrats',
                'status' => 'en_attente_signature',
                'size' => 890_000,
                'created_days' => 3,
                'notes' => 'Contrat à contresigner par le collaborateur avant le 31/10/2026.',
            ],
            [
                'name' => 'CIN — Mohamed Ben Salem.pdf',
                'employee_email' => 'm.bensalem@carthagetech.tn',
                'category' => 'identite',
                'status' => 'actif',
                'size' => 340_000,
                'created_days' => 300,
                'expires_days' => 560,
                'notes' => 'CIN recto-verso — validité jusqu’en 2028.',
            ],
            [
                'name' => 'Passeport — Yasmine Trabelsi.pdf',
                'employee_email' => 'y.trabelsi@carthagetech.tn',
                'category' => 'identite',
                'status' => 'actif',
                'size' => 1_120_000,
                'created_days' => 240,
                'expires_days' => 340,
                'notes' => 'Passeport — copie certifiée conforme.',
            ],
            [
                'name' => 'Fiche de Paie Septembre 2026 — Mehdi Zghal.pdf',
                'employee_email' => 'm.zghal@carthagetech.tn',
                'category' => 'paie',
                'status' => 'conforme',
                'size' => 210_000,
                'created_days' => 18,
                'notes' => 'Bulletin de paie de septembre 2026 — signé.',
            ],
            [
                'name' => 'Fiche de Paie Septembre 2026 — Nour El Houda Karray.pdf',
                'employee_email' => 'n.karray@carthagetech.tn',
                'category' => 'paie',
                'status' => 'conforme',
                'size' => 198_000,
                'created_days' => 18,
                'notes' => 'Bulletin de paie de septembre 2026 — signé.',
            ],
            [
                'name' => 'Diplôme Ingénieur — Anis Mansour.pdf',
                'employee_email' => 'a.mansour@carthagetech.tn',
                'category' => 'diplomes',
                'status' => 'actif',
                'size' => 760_000,
                'created_days' => 380,
                'notes' => "Diplôme d'ingénieur — copie légalisée.",
            ],
            [
                'name' => 'Certificat Angular Avancé — Mehdi Zghal.pdf',
                'employee_email' => 'm.zghal@carthagetech.tn',
                'category' => 'diplomes',
                'status' => 'actif',
                'size' => 480_000,
                'created_days' => 210,
                'expires_days' => 860,
                'notes' => 'Certification Angular avancé — validité 3 ans.',
            ],
            [
                'name' => 'Attestation B3 — Fatma Ghorbel.pdf',
                'employee_email' => 'f.ghorbel@carthagetech.tn',
                'category' => 'attestations',
                'status' => 'actif',
                'size' => 250_000,
                'created_days' => 60,
                'expires_days' => 18,
                'notes' => 'Attestation B3 pour démarches administratives — à renouveler avant échéance.',
            ],
            [
                'name' => 'Attestation CNSS — Sonia Mezghani.pdf',
                'employee_email' => 's.mezghani@carthagetech.tn',
                'category' => 'attestations',
                'status' => 'actif',
                'size' => 230_000,
                'created_days' => 90,
                'notes' => 'Attestation CNSS de la collaboratrice.',
            ],
            [
                'name' => 'Certificat Médical — Anis Mansour.pdf',
                'employee_email' => 'a.mansour@carthagetech.tn',
                'category' => 'attestations',
                'status' => 'actif',
                'size' => 150_000,
                'created_days' => 5,
                'expires_days' => 9,
                'notes' => 'Certificat médical annuel — échéance proche.',
            ],
            [
                'name' => 'Attestation B3 — Karim Chaabane.pdf',
                'employee_email' => 'k.chaabane@carthagetech.tn',
                'category' => 'attestations',
                'status' => 'cloture',
                'size' => 240_000,
                'created_days' => 120,
                'expires_days' => -45,
                'notes' => 'Ancienne attestation B3 — dossier clôturé.',
            ],
        ];

        $pdf = $this->demoPdf();

        foreach ($documents as $data) {
            $path = 'documents/seed/' . Str::slug(pathinfo($data['name'], PATHINFO_FILENAME)) . '.pdf';

            Storage::disk('local')->put($path, $pdf);

            $document = Document::updateOrCreate(
                ['original_name' => $data['name']],
                [
                    'employee_id' => $employeeIds[$data['employee_email']] ?? null,
                    'name' => $data['name'],
                    'path' => $path,
                    'size' => $data['size'],
                    'mime_type' => 'application/pdf',
                    'category' => $data['category'],
                    'status' => $data['status'],
                    'expires_at' => isset($data['expires_days']) ? now()->addDays($data['expires_days'])->toDateString() : null,
                    'notes' => $data['notes'],
                ]
            );

            $createdAt = now()->subDays($data['created_days'])->setTime(10, 0);

            Document::whereKey($document->id)->update([
                'created_at' => $createdAt,
                'updated_at' => $createdAt,
            ]);
        }
    }

    private function demoPdf(): string
    {
        return "%PDF-1.4\n"
            ."1 0 obj\n<< /Type /Catalog /Pages 2 0 R >>\nendobj\n"
            ."2 0 obj\n<< /Type /Pages /Kids [3 0 R] /Count 1 >>\nendobj\n"
            ."3 0 obj\n<< /Type /Page /Parent 2 0 R /MediaBox [0 0 595 842] /Contents 4 0 R /Resources << /Font << /F1 5 0 R >> >> >>\nendobj\n"
            ."4 0 obj\n<< /Length 78 >>\nstream\nBT /F1 16 Tf 72 760 Td (Document de demonstration - HRM Pro) Tj ET\nendstream\nendobj\n"
            ."5 0 obj\n<< /Type /Font /Subtype /Type1 /BaseFont /Helvetica >>\nendobj\n"
            ."trailer\n<< /Root 1 0 R >>\n%%EOF\n";
    }
}
