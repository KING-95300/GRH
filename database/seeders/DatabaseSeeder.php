<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        $this->call(AdminSeeder::class);
        $this->call(EmployeeSeeder::class);
        $this->call(DepartmentSeeder::class);
        $this->call(AttendanceSeeder::class);
        $this->call(PayslipSeeder::class);
        $this->call(CongesSeeder::class);
        $this->call(JobOfferSeeder::class);
        $this->call(CandidateSeeder::class);
        $this->call(InterviewSeeder::class);
        $this->call(DocumentSeeder::class);
    }
}
