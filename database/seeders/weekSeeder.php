<?php

namespace Database\Seeders;

use Illuminate\Support\Facades\DB;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class weekSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        // seeder for just my team specificlaly lamar jackson if he played 2 weeks

        DB::table('weekly_performance')->insert([
            'player_id' => '1', // this better get rewritten
            'name' =>'Lamar Jackson',
            'wk1win' => 'yes',
            'wk1points' => '0',
            'wk2win' => 'yes',
            'wk2points' => '38',
        ]);
    }
}
