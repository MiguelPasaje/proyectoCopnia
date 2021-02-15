<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\capituloController;
use App\Http\Controllers\tituloController;
use App\Http\Controllers\CatalogController;
use App\Http\Controllers\leyController;
use App\Http\Controllers\articuloController;

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

/*donde se muestran todas las leyes*/
Route::get('/leyes', [CatalogController::class,'getIndex'])->name('indice');

/*donde se muestra toda la ley*/
Route::get('/ley/titulos/{id}', [tituloController::class,'getLey'])->name('homLey');



Auth::routes();

//Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

Route::group(['middleware' => 'auth'], function() {
    /* URL editar ley */
    Route::get('/leyEdit{id}',[tituloController::class,'getEdit'])->name('leyEdit');
    Route::put('/leyEdit{id}',[tituloController::class,'putEdit'])->name('putEdit');

    /* URL editar titulos */
    Route::get('/tituloEdit/{id}/{idl}',[tituloController::class,'getEditTitulo'])->name('getEditTitulo');
    Route::put('/tituloEdit/{id}/{idl}',[tituloController::class,'putEditTitulo'])->name('putEditTitulo');

    /* URL editar capitulos */
    Route::get('/capituloEdit/{id}/{idl}',[capituloController::class,'getEdit'])->name('getEditCapitulo');
    Route::put('/capituloEdit/{id}/{idl}',[capituloController::class,'putEdit'])->name('putEditCapitulo');


    /* URL editar articulo */
    Route::get('/articuloEdit/{id}/{idl}',[articuloController::class,'getEdit'])->name('getEditArticulo');
    Route::put('/articuloEdit/{id}/{idl}',[articuloController::class,'putEdit'])->name('putEditArticulo');

    Route::get('/leyCreate',[tituloController::class,'getCreate'])->name('leyCreate');

    Route::get('/leyCapCreate', [capituloController::class, 'getCreate' ])->name('capCreate');
    Route::get('/leyCapEdit/{idCap}', [capituloController::class, 'getEdit' ])->name('capEdit');
    
    Route::post('PostCap', [capituloController::class, 'postCreate' ])->name('PostCapCreate');
    Route::put('PutCap', [capituloController::class, 'putEdit' ])->name('putCapEdit');
// ...
});
/* campos select  */
Route::get('leyCapCreate', [leyController::class,'getConsultaName'] )->name('leyCreate.getConsultaName');

Route::get('/ley/download',[tituloController::class,'download'])->name('download');

/* crear */
Route::post('leyCreate', [leyController::class,'getCreate'] )->name('leyCreate.getCreate');
Route::post('titleCreate', [leyController::class,'tituloCreate'] )->name('titleCreate.tituloCreate');
Route::post('capituloCreate', [leyController::class,'capiCreate'] )->name('capituloCreate.capiCreate');
Route::post('articuloCreate', [leyController::class,'artiCreate'] )->name('articuloCreate.artiCreate');
Route::post('paragrafoCreate', [leyController::class,'paragCreate'] )->name('paragrafoCreate.paragCreate');




/* about */

Route::get('/about',[HomeController::class,'about'])->name('about');






//Route::get('leyCapCreate', [leyController::class,'getConsultaNameTitle'] )->name('titleCreate.getConsultaNameTitle');


//Route::get('CapCreate', [leyController::class,'getConsultaNameCapi'] )->name('CapCreate.getConsultaNameCapi');
