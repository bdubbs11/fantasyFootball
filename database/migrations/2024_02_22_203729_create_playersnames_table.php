<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void
    { // this will be for every nfl player in the system and their respective team
        
        Schema::create('playersnames', function (Blueprint $table) {
            $table->id(); // this is linked to the weekly performance
            $table->string('name');
            $table->string('team');
            // added after the fact??
            $table->string('position');
            $table->timestamps();
           
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('playersnames');
    }
};
