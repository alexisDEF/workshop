<?php

use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {
    return view('play');
});
Route::get('/game/{pseudo}', [\App\Http\Controllers\EscapeController::class, 'index'])->name('game');
Route::get('/end/{timer}', [\App\Http\Controllers\EscapeController::class, 'create'])->name('game.create');

