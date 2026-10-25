<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;

class AdminSeeder extends Seeder
{
    public function run(): void
    {
        User::updateOrCreate(
            ['email' => 'admin@hometech.com'],
            [
                'name' => 'Admin HRM Pro',
                'password' => Hash::make('hometech123'),
                'role' => 'admin',
                'email_verified_at' => now(),
            ]
        );
    }
}
