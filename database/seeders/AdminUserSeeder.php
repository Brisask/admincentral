<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;
use App\Models\User;

class AdminUserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        // Create admin user if it doesn't exist
        User::firstOrCreate(
            ['email' => 'admin@admincentral.com'],
            [
                'name' => 'Administrator',
                'email' => 'admin@admincentral.com',
                'password' => Hash::make('AdminCentral2024!'),
                'email_verified_at' => now(),
            ]
        );

        $this->command->info('Admin user created successfully:');
        $this->command->info('Email: admin@admincentral.com');
        $this->command->info('Password: AdminCentral2024!');
    }
}
