<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Player extends Model
{

    // protected $fillable = [
    //     'name',
    //     'team',
    // ];

    protected $guarded = []; // opposite of fililable so its better 
    protected $table = 'playersnames';// had to add the team name bc it was comming  back goofy asf

    public function fantasyTeam()
    {
        return $this->belongsTo(Fantasy::class);
    }

    public function weeklyPerformance()
    {
        return $this->hasOne(Weekly::class, 'player_id');
    }


    use HasFactory;
}
