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
        $this->call([
            // only seeding my team --> lamar jackson as a person --> only his points for wk1 and wk2
            fantasySeeder::class,
            playerSeeder::class,
            weekSeeder::class,
        ]);
    }
}
