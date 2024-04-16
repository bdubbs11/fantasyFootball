<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Player;
use App\Models\Weekly;
use Illuminate\Support\Facades\Log;

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
        Log::info('Store method accessed');
        $attributes = request()->validate([
            // base screen
             'searchablePlayers' => 'required|string',
             'testData' => 'required',
             'selectedPlayers' => 'required',
             // I can't figure out how to save one of the first 3 and then input it into the syste
             'round' => 'required|string',
             'teamwin' => 'required',
             'sbteamwin' => 'required',

             // offense screen
             'passyards' => 'required_if:selectedPosition,QB,RB,WR,TE|int', // required_if:selectedPosition,QB,RB,WR,TE|int',
             'passtds' => 'required_if:selectedPosition,QB,RB,WR,TE|int',
             'intsO' => 'required_if:selectedPosition,QB,RB,WR,TE|int',
             'receivingyards' => 'required_if:selectedPosition,QB,RB,WR,TE|int',
             'receivingtds' => 'required_if:selectedPosition,QB,RB,WR,TE|int',
             'rushingyards' => 'required_if:selectedPosition,QB,RB,WR,TE|int',
             'rushingtds' => 'required_if:selectedPosition,QB,RB,WR,TE|int',
             'fumbleso' => 'required_if:selectedPosition,QB,RB,WR,TE|int',

             // defense screen
             'intd' => 'required_if:selectedPosition,DEF|int',  // 'required_if:selectedPosition,DEF|int',
             'fumblesd' => 'required_if:selectedPosition,DEF|int',
             'sacks' => 'required_if:selectedPosition,DEF|int',
             'Safety' => 'required_if:selectedPosition,DEF|int',
             'touchdowndef' => 'required_if:selectedPosition,DEF|int',
             'pointsallow' => 'required_if:selectedPosition,DEF|int',
             // special teams screen
            'fgmake' => 'required_if:selectedPosition,KICKER|int',
            'fgdistancemake' => 'required_if:selectedPosition,KICKER|string', // or is it int... need to seperate by commmas
            'xpmake' => 'required_if:selectedPosition,KICKER|int',
            'fgmiss' => 'required_if:selectedPosition,KICKER|int',
            'fgdistancemiss' => 'required_if:selectedPosition,KICKER|string', // or is it int... need to seperate by commmas
            'xpmiss' => 'required_if:selectedPosition,KICKER|int',

        ]);
        Log::info('should dd now');
        // You can include additional data here if it's generated dynamically or available in the request
        //$attributes['testData'] = request('testData');
    
        dd($attributes);
    }
}
