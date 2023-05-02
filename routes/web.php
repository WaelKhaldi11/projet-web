<?php


use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\VoitureController;

use App\Http\Controllers\ReclamationController;


/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and a ll of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/', function () {
    return view('layouts.modals');
});


Route::get("/home",[HomeController::class,"index"]);
Route::get("/add_reclamation",[ReclamationController::class,"create"]);

Route::resource("voitures",VoitureController::class);
