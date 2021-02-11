<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\capituloController;
use App\Http\Controllers\tituloController;
use App\Http\Controllers\CatalogController;

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


Route::get('/', [HomeController::class,'getHome'])->name('home');
Route::get('/leyes', [CatalogController::class,'getIndex'])->name('indice');

Route::get('/ley/titulos/{id}', [tituloController::class,'getLey'])->name('homLey');
Route::get('/leyEdit{id}',[tituloController::class,'getEdit'])->name('leyEdit');

Route::get('/ley', [capituloController::class,'getIndex']);



Route::get('/leyCapCreate', [capituloController::class, 'getCreate' ])->name('capCreate');
Route::get('/leyCapEdit/{idCap}', [capituloController::class, 'getEdit' ])->name('capEdit');
Route::post('PostCap', [capituloController::class, 'postCreate' ])->name('PostCapCreate');
Route::put('PutCap', [capituloController::class, 'putEdit' ])->name('putCapEdit');
Auth::routes();

//Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

