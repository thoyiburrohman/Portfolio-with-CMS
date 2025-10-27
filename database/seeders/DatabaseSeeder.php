<?php

namespace Database\Seeders;

use App\Models\Profile;
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

        // User::factory()->create([
        //     'name' => 'Test User',
        //     'email' => 'test@example.com',
        // ]);

        Profile::create([
            'name' => 'Thoyiburrohman',
            'short_bio' => 'Test',
            'long_bio' => 'Test',
            'phone' => 'Test',
            'email' => 'Test',
            'address' => 'Test',
        ]);
    }
}
