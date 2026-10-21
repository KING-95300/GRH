<?php

namespace Database\Seeders;

use App\Models\Department;
use App\Models\Employee;
use Illuminate\Database\Seeder;

class DepartmentSeeder extends Seeder
{
    public function run(): void
    {
        $departments = [
            [
                'slug' => 'it',
                'name' => 'Ingénierie & Tech',
                'tag' => 'Pôle Technique',
                'description' => 'Conception logicielle, plateformes SaaS, infrastructure cloud AWS et intégrations monétiques.',
                'manager_email' => 'm.bensalem@carthagetech.tn',
                'specialties_label' => "3 Pôles d'expertise",
                'specialties' => ['Frontend', 'Backend', 'DevOps'],
                'tags' => ['Node.js', 'React / Next.js', 'AWS Cloud', 'PostgreSQL'],
                'sub_teams' => ['DevOps', 'Arch', 'Devs'],
                'monthly_budget' => 62400,
                'occupancy' => 92,
                'occupancy_label' => "Taux d'occupation",
                'metric_value' => '92%',
                'metric_color' => 'text-on-surface',
                'code' => 'CC-TECH-001',
                'dot_color' => 'bg-primary-container',
                'text_color' => 'text-primary',
                'bar_color' => 'bg-primary-container',
            ],
            [
                'slug' => 'produit',
                'name' => 'Produit & Design',
                'tag' => 'Expérience & Conception',
                'description' => 'Recherche utilisateurs, Design System multiplateforme, roadmap fonctionnelle et discovery continue.',
                'manager_email' => 'y.trabelsi@carthagetech.tn',
                'specialties_label' => 'Spécialisations',
                'specialties' => ['UI/UX', 'Product Management'],
                'tags' => ['Figma', 'Design Tokens', 'User Research', 'Agile PO'],
                'sub_teams' => ['UI/UX', 'Product Leads'],
                'monthly_budget' => 28100,
                'occupancy' => 84,
                'occupancy_label' => "Taux d'occupation",
                'metric_value' => '84%',
                'metric_color' => 'text-on-surface',
                'code' => 'CC-PROD-002',
                'dot_color' => 'bg-secondary',
                'text_color' => 'text-secondary',
                'bar_color' => 'bg-secondary',
            ],
            [
                'slug' => 'commerce',
                'name' => 'Commercial & Marketing',
                'tag' => 'Développement Marché',
                'description' => 'Prospection B2B Tunisie & Export (MENA/Europe), partenariats stratégiques et acquisition digitale.',
                'manager_email' => 'k.chaabane@carthagetech.tn',
                'specialties_label' => "3 Pôles d'activité",
                'specialties' => ['Sales B2B', 'Growth', 'Support'],
                'tags' => ['Hubspot CRM', 'Grands Comptes', 'SaaS Sales', 'Growth Inbound'],
                'sub_teams' => ['Account Execs', 'B2B'],
                'monthly_budget' => 31500,
                'occupancy' => 100,
                'occupancy_label' => 'Objectif T1 Atteint',
                'metric_value' => '104%',
                'metric_color' => 'text-tertiary',
                'code' => 'CC-SALES-003',
                'dot_color' => 'bg-tertiary',
                'text_color' => 'text-tertiary',
                'bar_color' => 'bg-tertiary',
            ],
            [
                'slug' => 'finance',
                'name' => 'Finance, Comptabilité & Juridique',
                'tag' => 'Conformité Légale',
                'description' => 'Supervision de la paie tunisienne, déclarations trimestrielles CNSS, fiscalité et conformité contractuelle.',
                'manager_email' => 'n.karray@carthagetech.tn',
                'specialties_label' => 'Périmètres',
                'specialties' => ['Paie', 'CNSS & Fiscalité'],
                'tags' => ['Code Travail TN', 'Déclaration CNSS', 'Audit Fiscal', 'Sage / IFRS'],
                'sub_teams' => ['Paie', 'CNSS', 'Audit'],
                'monthly_budget' => 17200,
                'occupancy' => 100,
                'occupancy_label' => 'Audit Conformité',
                'metric_value' => '100% à jour',
                'metric_color' => 'text-tertiary',
                'code' => 'CC-FIN-004',
                'dot_color' => 'bg-outline',
                'text_color' => 'text-on-surface-variant',
                'bar_color' => 'bg-tertiary-container',
            ],
            [
                'slug' => 'rh',
                'name' => 'Ressources Humaines & Opérations',
                'tag' => 'Capital Humain',
                'description' => 'Recrutement des talents tech, onboarding, gestion des congés, climat social et plans de formation continue.',
                'manager_email' => 's.mezghani@carthagetech.tn',
                'specialties_label' => 'Focus Stratégique',
                'specialties' => ['Rétention & Recrutement'],
                'tags' => ['Recrutement Tech', 'Législation CNSS', 'Évaluations 360', 'Wellbeing'],
                'sub_teams' => ['Recrutement', 'Ops'],
                'monthly_budget' => 13650,
                'occupancy' => 60,
                'occupancy_label' => 'Postes Ouverts',
                'metric_value' => '3 En cours',
                'metric_color' => 'text-primary',
                'code' => 'CC-HR-005',
                'dot_color' => 'bg-primary',
                'text_color' => 'text-primary',
                'bar_color' => 'bg-primary',
            ],
        ];

        foreach ($departments as $data) {
            $managerEmail = $data['manager_email'];
            unset($data['manager_email']);

            $data['manager_id'] = Employee::where('email', $managerEmail)->value('id');

            Department::updateOrCreate(['slug' => $data['slug']], $data);
        }
    }
}
