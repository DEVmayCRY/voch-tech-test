<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\UnidadeController;
use App\Http\Controllers\ColaboradoresController;
use App\Http\Controllers\CargoColaboradorController;


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

Route::resource('unidade', UnidadeController::class);
Route::resource('colaboradores', ColaboradoresController::class);
Route::get('/cargoColaborador/rank', [CargoColaboradorController::class,'rank'])->name('cargoColaborador.rank');
Route::resource('cargoColaborador', CargoColaboradorController::class);
Route::view('/', 'home');
