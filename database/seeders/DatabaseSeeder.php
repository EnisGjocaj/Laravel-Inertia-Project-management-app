<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Project;
use App\Models\User;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        User::factory()->create([
            'id' => 1,
            'name' => 'Enis',
            'email' => 'enis@example.com',
            'password' => bcrypt('123.321E'),
            'email_verified_at' => time()
        ]);
        User::factory()->create([
            'id' => 2,
            'name' => 'John Smith',
            'email' => 'john@example.com',
            'password' => bcrypt('123.321A'),
            'email_verified_at' => time()
        ]);

        Project::factory()
            ->count(30)
            ->hasTasks(30)
            ->create();
    
    }
}
