<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Player;
use App\Models\Weekly;

class UpdateScoresController extends Controller
{
    public function view(){
        $searchablePlayers = request('searchablePlayers');
    
        if (!empty($searchablePlayers)) {
            $players = Player::where('name', 'like', "%$searchablePlayers%")
                             ->orWhere('position', 'like', "%$searchablePlayers%")
                             ->orWhere('team', 'like', "%$searchablePlayers%")
                             ->paginate(10);
        } else {
            $players = Player::all();
        }
        
        return view('updatescores', compact('players'));
    }

    public function store(){
        request()->validate([
            'searchablePlayers' => 'required',
            'round' => 'required',
            'teamwin' => 'required',
        ]);
    }
}
