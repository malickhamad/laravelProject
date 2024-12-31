<?php

namespace Database\Seeders;

use App\Models\User;
// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        // User::factory(10)->create();

        User::factory()->create([
            'name' => 'Test User',
            'email' => 'user@user.com',
        ]);

        User::factory()->create([
            'name' => 'Admin',
            'email' => 'admin@admin.com',
            'password' => bcrypt('password1'),
            'is_admin' => 1
        ]);
        User::factory()->create([
            'name' => 'hamad',
            'email' => 'hamad@hamad.com',
            'password' => bcrypt('hamad'),
            'is_admin' => 0
        ]);

    }
}
