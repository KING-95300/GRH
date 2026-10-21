<?php

namespace Database\Seeders;

use App\Models\JobOffer;
use Illuminate\Database\Seeder;

class JobOfferSeeder extends Seeder
{
    public function run(): void
    {
        $offers = [
            [
                'title' => 'Développeur Fullstack Senior',
                'department' => 'Ingénierie & R&D',
                'contract_type' => 'CDI',
                'status' => 'open',
                'location' => 'Tunis — Les Berges du Lac',
                'salary_min' => 2800,
                'salary_max' => 3800,
                'description' => "Conception et développement de la plateforme HRM Pro (Laravel, React, PostgreSQL). Encadrement de deux développeurs juniors et revue de code.",
            ],
            [
                'title' => 'Data Engineer',
                'department' => 'Ingénierie & R&D',
                'contract_type' => 'CDI',
                'status' => 'open',
                'location' => 'Tunis — Les Berges du Lac',
                'salary_min' => 3000,
                'salary_max' => 4200,
                'description' => "Construction des pipelines ETL et du lac de données RH. Stack Python, Airflow, dbt et Snowflake.",
            ],
            [
                'title' => 'Product Designer Senior',
                'department' => 'Produit & Design',
                'contract_type' => 'CDI',
                'status' => 'pending_validation',
                'location' => 'Tunis — Centre Ville',
                'salary_min' => 2400,
                'salary_max' => 3200,
                'description' => "Pilotage du design system et des parcours collaborateurs. Maquettes Figma, tests utilisateurs et accessibilité.",
            ],
            [
                'title' => 'Key Account Manager',
                'department' => 'Commercial & Marketing',
                'contract_type' => 'CDI',
                'status' => 'open',
                'location' => 'Tunis — Les Berges du Lac',
                'salary_min' => 1900,
                'salary_max' => 2600,
                'description' => "Développement du portefeuille grands comptes en Tunisie et à l'international. Négociation et suivi CRM.",
            ],
            [
                'title' => 'Stagiaire Marketing Digital',
                'department' => 'Commercial & Marketing',
                'contract_type' => 'SIVP',
                'status' => 'open',
                'location' => 'Tunis — Les Berges du Lac',
                'salary_min' => 500,
                'salary_max' => 700,
                'description' => "Animation des réseaux sociaux, création de contenus et campagnes SEO pour le site carrières.",
            ],
            [
                'title' => 'Contrôleur de Gestion',
                'department' => 'Finance & Opérations RH',
                'contract_type' => 'CDI',
                'status' => 'pending_validation',
                'location' => 'Tunis — Les Berges du Lac',
                'salary_min' => 2600,
                'salary_max' => 3400,
                'description' => "Reporting mensuel, budget et analyse des écarts. Maîtrise d'Excel avancé et Power BI.",
            ],
            [
                'title' => 'Consultant SIRH',
                'department' => 'Finance & Opérations RH',
                'contract_type' => 'Consulting',
                'status' => 'closed',
                'location' => 'Tunis — Mission 6 mois',
                'salary_min' => 3500,
                'salary_max' => 4500,
                'description' => "Mission d'accompagnement au déploiement du module paie et des processus CNSS.",
            ],
        ];

        foreach ($offers as $offer) {
            JobOffer::updateOrCreate(['title' => $offer['title']], $offer);
        }
    }
}
