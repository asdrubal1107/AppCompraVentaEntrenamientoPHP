<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\CategoriaController;
use App\Http\Controllers\ArticuloController;

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
    return view('contenido');
});

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
Route::get('/categorias', [CategoriaController::class, 'index']);
Route::post('/categorias/registrar', [CategoriaController::class, 'store']);
Route::put('/categorias/actualizar', [CategoriaController::class, 'update']);
Route::put('/categorias/activar', [CategoriaController::class, 'activar']);
Route::put('/categorias/desactivar', [CategoriaController::class, 'desactivar']);
Route::get('/categorias/selectCategoria', [CategoriaController::class, 'selectCategoria']);


Route::get('/articulos', [ArticuloController::class, 'index']);
Route::post('/articulos/registrar', [ArticuloController::class, 'store']);
Route::put('/articulos/actualizar', [ArticuloController::class, 'update']);
Route::put('/articulos/activar', [ArticuloController::class, 'activar']);
Route::put('/articulos/desactivar', [ArticuloController::class, 'desactivar']);
