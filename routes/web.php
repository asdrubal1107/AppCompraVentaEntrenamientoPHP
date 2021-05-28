<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\CategoriaController;
use App\Http\Controllers\ArticuloController;
use App\Http\Controllers\ClienteController;
use App\Http\Controllers\ProveedorController;
use App\Http\Controllers\RolController;
use App\Http\Controllers\UserController;

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

Route::get('/clientes', [ClienteController::class, 'index']);
Route::post('/clientes/registrar', [ClienteController::class, 'store']);
Route::put('/clientes/actualizar', [ClienteController::class, 'update']);

Route::get('/proveedores', [ProveedorController::class, 'index']);
Route::post('/proveedores/registrar', [ProveedorController::class, 'store']);
Route::put('/proveedores/actualizar', [ProveedorController::class, 'update']);

Route::get('/roles', [RolController::class, 'index']);
Route::get('/roles/selectRol', [RolController::class, 'selectRol']);

Route::get('/usuarios', [UserController::class, 'index']);
Route::post('/usuarios/registrar', [UserController::class, 'store']);
Route::put('/usuarios/actualizar', [UserController::class, 'update']);
Route::put('/usuarios/activar', [UserController::class, 'activar']);
Route::put('/usuarios/desactivar', [UserController::class, 'desactivar']);
