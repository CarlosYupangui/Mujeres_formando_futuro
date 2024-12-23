<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PaginaController;
use App\Http\Controllers\CategoriaController;
use App\Http\Controllers\MisVisController;


/*use App\Http\Controllers\MisionVisionController;
use App\Http\Controllers\objetivoController;*/


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

/*Route::get('/', function () {
    return view('sitioWeb/index');
});*/

//Route::get('/', [objetivoController::class, 'ViewObjetivos']);
Route::get('/', [PaginaController::class, 'inicio']);


/////////////////RUTAS PARA LAS CATEGORIAS///////////
Route::get('/InfoCate', [CategoriaController::class, 'informacionCategoria']);


/////////////RUTAS PARA LA MISON Y VISION////////////////////
Route::get('/InfoMisVis', [MisVisController::class, 'informacionMisVis']);


