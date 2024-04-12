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
    { // this is for all tlhe fantasy teams
        Schema::create('fantasyteams', function (Blueprint $table) {
            $table->id();
            $table->string('yourName');
            $table->string('teamName');
            $table->string('qb1');
            $table->string('qb2');
            $table->string('rb1');
            $table->string('wr1');
            $table->string('te1');
            $table->string('flex1');
            $table->string('flex2');
            $table->string('flex3');
            $table->string('flex4');
            $table->string('kicker1');
            $table->string('defense1');
            $table->string('sb1');
            $table->Integer('points')->default('0');
            $table->Integer('rank')->default('0');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('fantasyteams');
    }
};
