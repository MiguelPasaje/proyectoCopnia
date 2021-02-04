<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\capituloController;

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


Route::get('/', HomeController::class);

Route::get('/leyConsulta', [HomeController::class,'getLey'])->name('homLey');

Route::get('/leyIndex', [capituloController::class, 'getIndex' ])->name('capIndex');

//Route::get('ley', [capituloController::class, 'getShow' ])->name();

Route::get('/leyCapCreate', [capituloController::class, 'getCreate' ])->name('capCreate');

Route::get('/leyCapEdit', [capituloController::class, 'getEdit' ])->name('capEdit');

Route::post('PostCap', [capituloController::class, 'postCreate' ])->name('PostCapCreate');

Route::put('PutCap', [capituloController::class, 'putEdit' ])->name('putCapEdit');