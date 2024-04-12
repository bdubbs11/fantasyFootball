<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Fantasy extends Model
{
    // need protected??
    // protected $fillable=[
    //     'yourName',
    //     'teamName',
    //     'qb1',
    //     'qb2',
    //     'rb1',
    //     'wr1',
    //     'te1',
    //     'flex1',
    //     'flex2',
    //     'flex3',
    //     'flex4',
    //     'kicker1',
    //     'defense1',
    //     'sb1',
    //     'points',
    // ];

    protected $guarded = []; // opposite of fililable so its better 
    protected $table = 'fantasyteams'; // had to add the team name bc it was comming  back goofy asf
    public function playerNames()
    {
        return $this->hasMany(Player::class);
    }

    public function weeklyPerformances()
    {
        return $this->hasMany(Weekly::class);
    }


    use HasFactory;
}
