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
    {// i think it will also have if they won each week and how many points did they score
        Schema::create('weekly_performance', function (Blueprint $table) {
            // connecting this table to the players name
            $table->id();
            $table->unsignedBigInteger('player_id'); // this gets rewritten with the id from playersname
            $table->foreign('player_id')->references('id')->on('playersnames');
            // added name as well
            $table->string('name');
            $table->string('wk1win')->nullable();
            $table->Integer('wk1points')->nullable(); // i am going to make null
            $table->string('wk2win')->nullable(); // so if null make it 0 / then cant make it green or red/black 
            $table->Integer('wk2points')->nullable();
            $table->string('wk3win')->nullable();
            $table->Integer('wk3points')->nullable();
            $table->string('wk4win')->nullable();
            $table->Integer('wk4points')->nullable();
            $table->timestamps();

        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('weekly_performance');
    }
};
