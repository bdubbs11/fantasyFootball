<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Fantasy;
use App\Models\Player;

class EnterTeamController extends Controller
{
    public function store(){
        //validate the input
        request()->validate([
             // form one fantasy team
             'yname' => 'required|string|max:255',
             'tname' => 'required|string|max:255',
             'qb1' => 'required|string|max:255',
             'qb2' => 'required|string|max:255',
             'rb1' => 'required|string|max:255',
             'wr1' => 'required|string|max:255',
             'te1' => 'required|string|max:255',
             'flex1' => 'required|string|max:255',
             'flex2' => 'required|string|max:255',
             'flex3' => 'required|string|max:255',
             'flex4' => 'required|string|max:255',
             'kicker1' => 'required|string|max:255',
             'defense1' => 'required|string|max:255',
             'sb1' => 'required|string|max:255',

             // form two players name
             'qb1team' => 'required|string|max:255',
             'qb2team' => 'required|string|max:255',
             'rb1team' => 'required|string|max:255',
             'wr1team' => 'required|string|max:255',
             'te1team' => 'required|string|max:255',
             'flex1team' => 'required|string|max:255',
             'flex2team' => 'required|string|max:255',
             'flex3team' => 'required|string|max:255',
             'flex4team' => 'required|string|max:255',
             'kicker1team' => 'required|string|max:255',
             'defense1team' => 'required|string|max:255',
             'sb1team' => 'required|string|max:255',
        ]);
        
        // create fantasy team
        $fantasy = Fantasy::create([
            'yourName' => request('yname'),
            'teamName' => request('tname'),
            'qb1' => request('qb1'),
            'qb2' => request('qb2'),
            'rb1' => request('rb1'),
            'wr1' => request('wr1'),
            'te1' => request('te1'),
            'flex1' => request('flex1'),
            'flex2' => request('flex2'),
            'flex3' => request('flex3'),
            'flex4' => request('flex4'),
            'kicker1' => request('kicker1'),
            'defense1' => request('defense1'),
            'sb1' => request('sb1'),
        ]);

        // for loop for create

        $positions = ['qb1', 'qb2', 'rb1', 'wr1', 'te1', 'flex1', 'flex2', 'flex3', 'flex4', 'kicker1', 'defense1', 'sb1'];
        $positionsTeam = ['qb1team', 'qb2team', 'rb1team', 'wr1team', 'te1team', 'flex1team', 'flex2team', 'flex3team', 'flex4team', 'kicker1team', 'defense1team', 'sb1team'];
        $positionsCap = ['QB', 'QB', 'RB', 'WR', 'TE', 'FLEX', 'FLEX', 'FLEX', 'FLEX', 'KICKER', 'DEF', 'SB'];
    
    
    
    
    foreach($positions as $index => $pos){

        $truePosition = $positionsCap[$index] == 'FLEX' ? strtoupper(request($pos . '_true_position')) : $positionsCap[$index];

        Player::firstOrCreate([
            'team' => request($positionsTeam[$index]),
            'name' => request($pos),
            'position' => $truePosition,
        ]);
    }



    return redirect('/');
        
    }
}
