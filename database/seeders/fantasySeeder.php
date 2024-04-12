<?php

namespace Database\Seeders;

use Illuminate\Support\Facades\DB;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class fantasySeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        // seeder for just my team 

        DB::table('fantasyteams')->insert([
            'yourName' => 'Brandon Wilson',
            'teamName' => 'I\'m Just Mediocre',
            'qb1' => 'Lamar Jackson',
            'qb2' => 'Brock Purdy',
            'rb1' => 'Christian McCaffery',
            'wr1' => 'CeeDee Lamb',
            'te1' => 'Sam Laporta',
            'flex1' => 'Puka Nacua',
            'flex2' => 'Travis Kelce',
            'flex3' => 'Mike Evans',
            'flex4' => 'Isaiah Pacheco',
            'kicker1' => 'Justin Tucker',
            'defense1' => 'Ravens',
            'sb1' => '49ers',
            'points' => '0',
            'rank' => '1',
        ]);
    }
}
