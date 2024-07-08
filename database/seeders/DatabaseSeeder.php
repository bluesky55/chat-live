<?php

namespace Database\Seeders;

use App\Models\User;
// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        // User::factory(10)->create();

        User::factory()->create([
            'name' => 'blue',
            'username' => 'blue',
            'password' => Hash::make('@reface123')
        ]);
        User::factory()->create([
            'name' => 'blue2',
            'username' => 'blue2',
            'password' => Hash::make('@reface123')
        ]);
    }
}
