<?php

namespace Database\Seeders;

use App\Models\Conges;
use App\Models\Employee;
use App\Models\User;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Storage;

class CongesSeeder extends Seeder
{
    public function run(): void
    {
        $employees = Employee::all()->keyBy(fn (Employee $employee) => strtolower($employee->email));
        $reviewerId = User::where('role', 'admin')->value('id');
        $reviewedAt = now()->subDays(2);
        $today = now()->startOfDay();

        $this->normalizeLegacyRows($employees, $reviewerId);
        $this->ensureDemoAttachments();

        $team = [
            'mohamed' => 'm.bensalem@carthagetech.tn',
            'yasmine' => 'y.trabelsi@carthagetech.tn',
            'karim' => 'k.chaabane@carthagetech.tn',
            'nour' => 'n.karray@carthagetech.tn',
            'mehdi' => 'm.zghal@carthagetech.tn',
            'sonia' => 's.mezghani@carthagetech.tn',
            'anis' => 'a.mansour@carthagetech.tn',
            'fatma' => 'f.ghorbel@carthagetech.tn',
            'jane' => 'jane@example.com',
        ];

        $certificat = [
            'path' => 'leave-documents/certificat-medical-demo.pdf',
            'name' => 'Certificat_Dr_Ayadi.pdf',
        ];
        $mariage = [
            'path' => 'leave-documents/acte-mariage-demo.pdf',
            'name' => 'Acte_Mariage_Demo.pdf',
        ];

        $entries = [];

        $add = function (
            string $employeeKey,
            string $type,
            string $status,
            $start,
            $end,
            string $reason,
            ?array $attachment = null,
            ?string $decisionNote = null
        ) use (&$entries, $team, $employees) {
            $employee = $employees[$team[$employeeKey]] ?? null;

            if (! $employee) {
                return;
            }

            $entries[] = [
                'employee_id' => $employee->id,
                'employee_name' => $employee->name,
                'type' => $type,
                'status' => $status,
                'start_date' => $start,
                'end_date' => $end,
                'reason' => $reason,
                'attachment_path' => $attachment['path'] ?? null,
                'attachment_name' => $attachment['name'] ?? null,
                'decision_note' => $decisionNote,
            ];
        };

        $monthDate = function (int $offset, int $day, int $length = 1) use ($today): array {
            $start = $today->copy()->startOfMonth()->addMonthsNoOverflow($offset)->addDays($day - 1);

            return [$start, $start->copy()->addDays($length - 1)];
        };

        // Current month: five approved leaves covering today, three pending, one rejected.
        $add('mohamed', 'annuel', 'approved', $today->copy()->subDay(), $today->copy()->addDays(3), 'Vacances familiales annuelles.');
        $add('anis', 'annuel', 'approved', $today->copy()->subDays(2), $today->copy()->addDays(2), 'Repos annuel — retour prévu cette semaine.');
        $add('nour', 'maladie', 'approved', $today->copy()->subDay(), $today->copy()->addDay(), 'Certificat médical — repos prescrit.', $certificat);
        $add('sonia', 'recup', 'approved', $today->copy(), $today->copy(), 'Récupération heures supplémentaires.');
        $add('fatma', 'annuel', 'approved', $today->copy()->subDay(), $today->copy()->addDays(2), 'Congé annuel — obligations familiales.');

        [$start, $end] = $monthDate(0, 26, 5);
        $add('yasmine', 'annuel', 'pending', $start, $end, 'Vacances familiales annuelles.');

        [$start, $end] = $monthDate(0, 23, 1);
        $add('karim', 'sans-solde', 'pending', $start, $end, 'Démarche administrative (Permis).');

        [$start, $end] = $monthDate(0, 27, 3);
        $add('mehdi', 'maladie', 'pending', $start, $end, 'Arrêt maladie — grippe saisonnière.', $certificat);

        [$start, $end] = $monthDate(0, 5, 2);
        $add('jane', 'annuel', 'rejected', $start, $end, 'Congé annuel — demande hors période de référence.', null, 'Solde insuffisant sur la période demandée.');

        // July: 3 approved + 1 rejected.
        [$start, $end] = $monthDate(-3, 6, 5);
        $add('yasmine', 'annuel', 'approved', $start, $end, 'Congé annuel planifié.');
        [$start, $end] = $monthDate(-3, 13, 3);
        $add('fatma', 'annuel', 'approved', $start, $end, 'Repos annuel en famille.');
        [$start, $end] = $monthDate(-3, 20, 1);
        $add('karim', 'recup', 'approved', $start, $end, 'Récupération trimestrielle.');
        [$start, $end] = $monthDate(-3, 8, 2);
        $add('mehdi', 'sans-solde', 'rejected', $start, $end, 'Congé personnel sans solde.', null, 'Demande hors délai de prévenance.');

        // August: 4 approved + 1 rejected.
        [$start, $end] = $monthDate(-2, 3, 5);
        $add('mohamed', 'annuel', 'approved', $start, $end, 'Vacances d\'été en famille.');
        [$start, $end] = $monthDate(-2, 10, 5);
        $add('nour', 'annuel', 'approved', $start, $end, 'Congé annuel — repos et famille.');
        [$start, $end] = $monthDate(-2, 17, 3);
        $add('sonia', 'famille', 'approved', $start, $end, 'Mariage — acte civil.', $mariage);
        [$start, $end] = $monthDate(-2, 24, 4);
        $add('anis', 'annuel', 'approved', $start, $end, 'Congé annuel planifié.');
        [$start, $end] = $monthDate(-2, 12, 3);
        $add('karim', 'annuel', 'rejected', $start, $end, 'Vacances familiales annuelles.', null, 'Chevauchement avec une période de forte activité.');

        // September: 5 approved + 1 rejected.
        [$start, $end] = $monthDate(-1, 2, 3);
        $add('yasmine', 'maladie', 'approved', $start, $end, 'Consultation et repos médical.', $certificat);
        [$start, $end] = $monthDate(-1, 8, 5);
        $add('karim', 'annuel', 'approved', $start, $end, 'Congé annuel — obligations familiales.');
        [$start, $end] = $monthDate(-1, 14, 2);
        $add('sonia', 'annuel', 'approved', $start, $end, 'Repos annuel.');
        [$start, $end] = $monthDate(-1, 21, 1);
        $add('nour', 'recup', 'approved', $start, $end, 'Récupération heures supplémentaires.');
        [$start, $end] = $monthDate(-1, 25, 4);
        $add('mehdi', 'annuel', 'approved', $start, $end, 'Congé annuel planifié.');
        [$start, $end] = $monthDate(-1, 17, 1);
        $add('fatma', 'sans-solde', 'rejected', $start, $end, 'Congé personnel sans solde.', null, 'Justificatif incomplet.');

        // November: 6 approved + 2 pending.
        [$start, $end] = $monthDate(1, 2, 5);
        $add('jane', 'annuel', 'approved', $start, $end, 'Annual leave.');
        [$start, $end] = $monthDate(1, 9, 5);
        $add('mohamed', 'annuel', 'approved', $start, $end, 'Congé annuel planifié.');
        [$start, $end] = $monthDate(1, 16, 5);
        $add('yasmine', 'annuel', 'approved', $start, $end, 'Vacances familiales annuelles.');
        [$start, $end] = $monthDate(1, 20, 3);
        $add('nour', 'famille', 'approved', $start, $end, 'Naissance — congé maternité.', $mariage);
        [$start, $end] = $monthDate(1, 23, 4);
        $add('sonia', 'annuel', 'approved', $start, $end, 'Repos annuel en famille.');
        [$start, $end] = $monthDate(1, 27, 2);
        $add('anis', 'recup', 'approved', $start, $end, 'Récupération heures supplémentaires.');
        [$start, $end] = $monthDate(1, 12, 3);
        $add('karim', 'annuel', 'pending', $start, $end, 'Congé annuel — obligations familiales.');
        [$start, $end] = $monthDate(1, 18, 5);
        $add('mehdi', 'annuel', 'pending', $start, $end, 'Congé annuel planifié.');

        // December: 6 approved + 1 pending.
        [$start, $end] = $monthDate(2, 24, 5);
        $add('mohamed', 'annuel', 'approved', $start, $end, 'Fêtes de fin d\'année.');
        [$start, $end] = $monthDate(2, 21, 3);
        $add('fatma', 'annuel', 'approved', $start, $end, 'Congé annuel — fêtes de fin d\'année.');
        [$start, $end] = $monthDate(2, 7, 5);
        $add('yasmine', 'annuel', 'approved', $start, $end, 'Vacances familiales annuelles.');
        [$start, $end] = $monthDate(2, 14, 5);
        $add('karim', 'annuel', 'approved', $start, $end, 'Congé annuel planifié.');
        [$start, $end] = $monthDate(2, 3, 1);
        $add('nour', 'recup', 'approved', $start, $end, 'Récupération heures supplémentaires.');
        [$start, $end] = $monthDate(2, 10, 4);
        $add('sonia', 'annuel', 'approved', $start, $end, 'Repos annuel.');
        [$start, $end] = $monthDate(2, 28, 4);
        $add('anis', 'annuel', 'pending', $start, $end, 'Congé annuel — obligations familiales.');

        // January: 2 approved + 1 pending.
        [$start, $end] = $monthDate(3, 5, 5);
        $add('mohamed', 'annuel', 'approved', $start, $end, 'Congé annuel planifié.');
        [$start, $end] = $monthDate(3, 12, 2);
        $add('yasmine', 'maladie', 'approved', $start, $end, 'Arrêt maladie — repos prescrit.', $certificat);
        [$start, $end] = $monthDate(3, 19, 5);
        $add('nour', 'annuel', 'pending', $start, $end, 'Vacances familiales annuelles.');

        foreach ($entries as $entry) {
            $reviewed = in_array($entry['status'], ['approved', 'rejected'], true);

            Conges::updateOrCreate(
                [
                    'employee_id' => $entry['employee_id'],
                    'start_date' => $entry['start_date']->toDateString(),
                    'type' => $entry['type'],
                ],
                [
                    'employee_name' => $entry['employee_name'],
                    'status' => $entry['status'],
                    'end_date' => $entry['end_date']->toDateString(),
                    'working_days' => Conges::workingDaysFor($entry['start_date'], $entry['end_date']),
                    'reason' => $entry['reason'],
                    'attachment_path' => $entry['attachment_path'],
                    'attachment_name' => $entry['attachment_name'],
                    'reviewed_at' => $reviewed ? $reviewedAt : null,
                    'reviewed_by' => $reviewed ? $reviewerId : null,
                    'decision_note' => $entry['decision_note'],
                ]
            );
        }
    }

    private function normalizeLegacyRows($employees, ?int $reviewerId): void
    {
        Conges::whereNull('employee_id')->get()->each(function (Conges $leave) use ($employees, $reviewerId) {
            $employee = $employees->first(fn (Employee $employee) => $employee->name === $leave->employee_name);

            if (! $employee) {
                return;
            }

            $leave->update([
                'employee_id' => $employee->id,
                'type' => $leave->type ?: 'annuel',
                'status' => $leave->status === 'pending' ? 'approved' : $leave->status,
                'working_days' => Conges::workingDaysFor($leave->start_date, $leave->end_date),
                'reviewed_at' => $leave->reviewed_at ?? now()->subDays(3),
                'reviewed_by' => $leave->reviewed_by ?? $reviewerId,
            ]);
        });
    }

    private function ensureDemoAttachments(): void
    {
        $pdf = "%PDF-1.4\n"
            ."1 0 obj\n<< /Type /Catalog /Pages 2 0 R >>\nendobj\n"
            ."2 0 obj\n<< /Type /Pages /Kids [3 0 R] /Count 1 >>\nendobj\n"
            ."3 0 obj\n<< /Type /Page /Parent 2 0 R /MediaBox [0 0 595 842] /Contents 4 0 R /Resources << /Font << /F1 5 0 R >> >> >>\nendobj\n"
            ."4 0 obj\n<< /Length 78 >>\nstream\nBT /F1 16 Tf 72 760 Td (Document de demonstration - HRM Pro) Tj ET\nendstream\nendobj\n"
            ."5 0 obj\n<< /Type /Font /Subtype /Type1 /BaseFont /Helvetica >>\nendobj\n"
            ."trailer\n<< /Root 1 0 R >>\n%%EOF\n";

        Storage::disk('local')->put('leave-documents/certificat-medical-demo.pdf', $pdf);
        Storage::disk('local')->put('leave-documents/acte-mariage-demo.pdf', $pdf);
    }
}
