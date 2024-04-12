<?php

namespace Database\Seeders;

use Illuminate\Support\Facades\DB;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class playerSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        // seeder for just my team specifically just for lamar jackson
        DB::table('playersnames')->insert([
            'name' => 'Lamar Jackson',
            'team' => 'Ravens',
            'position' => 'QB',

        ]);
    }
}
