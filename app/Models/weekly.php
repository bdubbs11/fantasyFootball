<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Weekly extends Model
{
    // protected $fillable = [
    //     'wk1win',
    //     'wk1points',
    //     'wk2win',
    //     'wk2points',
    //     'wk3win',
    //     'wk3points',
    //     'wk4win',
    //     'wk4points',
    // ];

    protected $guarded = []; // opposite of fililable so its better 
    protected $table = 'weekly_performance'; // had to add the team name bc it was comming  back goofy asf

    public function playerName()
    {
        return $this->belongsTo(Player::class, 'player_id');
    }
    use HasFactory;
}
