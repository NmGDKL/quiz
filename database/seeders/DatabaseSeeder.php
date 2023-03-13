<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Str;


class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    
    public function run(): void
    {
        \App\Models\User::insert([
            'name'=>'Naim Gedikli',
            'email'=>'naimgedikli01@gmail.com',
            'email_verified_at' => now(),
            'password' => '$2y$10$92IXUNpkjO0rOQ5byMi.Ye4oKoEa3Ro9llC/.og/at2.uheWG/igi', // password
            'type' => 'admin',
            'remember_token' => Str::random(10),
            // 'two_factor_secret' => null,
            // 'two_factor_recovery_codes' => null,
            
            // 'profile_photo_path' => null,
            // 'current_team_id' => null,
            
        ]);
         \App\Models\User::factory(5)->create();

        // \App\Models\User::factory()->create([
        //     'name' => 'Test User',
        //     'email' => 'test@example.com',
        // ]);
    }
}
