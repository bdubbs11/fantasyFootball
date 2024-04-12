<?php

use Illuminate\Support\Facades\Route;
use App\Models\Fantasy;
use App\Http\Controllers\EnterTeamController;
use App\Http\Controllers\UpdateScoresController;
use App\Http\Controllers\SessionController;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

// main page
// Route::get('/', function () {
//     return view('index'); 
//     // , ['fantasy_teams' => Fantasy::all()]
// }) -> name('home');
// main page updated
Route::get('/', function () {
    $fantasyTeams = Fantasy::all();
    // $playerNames = Player::all();

    return view('index', compact('fantasyTeams'));
})->name('home');

// rules page
Route::get('/rules', function () {
    return view('rules');
}) -> name('rules');

// enter team page
Route::get('/enterteam', function () {
    return view('enterteam');
}) -> name('enterteam');// ->middleware('admin');

// submitting to the database
Route::post('/enterteam/submit', [EnterTeamController::class, 'store']);


//update scores page 
Route::get('/updatescores', [UpdateScoresController::class, 'view'])->name('updatescores');// ->middleware('admin');
Route::post('updatescores/submit', [UpdateScoresController::class, 'store']);

// need a controller for updating scores 
// Route::post("/updatescores/submit" , [UpdateScoresController::class, 'store]);

// controllers for logging in and out and create accounts
// create accounts
Route::get('/createaccount', [SessionController::class, 'createaccountView'])->middleware('guest');
Route::post('/createaccount', [SessionController::class, 'store'])->middleware('guest');

// logout
Route::get('/logout', [SessionController::class, 'destroy']); // ->middleware('auth');

// login
Route::get('/login', [SessionController::class, 'loginView'])->middleware('guest');
Route::post('/login', [SessionController::class, 'create'])->middleware('guest');



   // dd(request()->all());
