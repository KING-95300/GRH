<?php

namespace Database\Seeders;

use App\Models\Candidate;
use App\Models\Interview;
use Illuminate\Database\Seeder;

class InterviewSeeder extends Seeder
{
    public function run(): void
    {
        $candidates = Candidate::whereIn('email', [
            'yassine.guesmi@gmail.com',
            'ines.benyoussef@gmail.com',
            'rania.ammar@gmail.com',
            'hamza.ferchichi@gmail.com',
            'dorra.sassi@gmail.com',
        ])->get()->keyBy('email');

        $interviews = [
            [
                'email' => 'yassine.guesmi@gmail.com',
                'type' => 'technical',
                'scheduled_at' => now()->setTime(15, 30),
                'interviewer' => 'Mehdi Zghal',
                'notes' => 'Test technique Laravel / React — durée 90 minutes.',
            ],
            [
                'email' => 'ines.benyoussef@gmail.com',
                'type' => 'rh',
                'scheduled_at' => now()->addDay()->setTime(11, 30),
                'interviewer' => 'Sonia Mezghani',
                'notes' => 'Entretien RH — préavis et vérification des références.',
            ],
            [
                'email' => 'rania.ammar@gmail.com',
                'type' => 'technical',
                'scheduled_at' => now()->addDay()->setTime(14, 0),
                'interviewer' => 'Mehdi Zghal',
                'notes' => 'Étude de cas contrôle de gestion (45 min).',
            ],
            [
                'email' => 'hamza.ferchichi@gmail.com',
                'type' => 'rh',
                'scheduled_at' => now()->addDays(2)->setTime(9, 0),
                'interviewer' => 'Sonia Mezghani',
                'notes' => 'Entretien RH — recommandation interne à valider.',
            ],
            [
                'email' => 'dorra.sassi@gmail.com',
                'type' => 'rh',
                'scheduled_at' => now()->addDays(3)->setTime(14, 0),
                'interviewer' => 'Sonia Mezghani',
                'notes' => 'Entretien RH — mobilité et prétentions salariales.',
            ],
        ];

        foreach ($interviews as $data) {
            $candidate = $candidates->get($data['email']);

            if (! $candidate) {
                continue;
            }

            Interview::updateOrCreate(
                ['candidate_id' => $candidate->id, 'type' => $data['type']],
                [
                    'scheduled_at' => $data['scheduled_at'],
                    'interviewer' => $data['interviewer'],
                    'status' => 'planned',
                    'notes' => $data['notes'],
                ]
            );
        }
    }
}
