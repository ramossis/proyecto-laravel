<?php

use App\Http\Controllers\CategoriaController;
use App\Http\Controllers\ProductoController;
use App\Http\Controllers\UsuarioController;
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
    return view('welcome');
});
Route::get('/usuarios/crear',[UsuarioController::class,'create'])->name('usuarios.crear');

Route::get('/productos/index',[ProductoController::class,'show'])->name('productos.show');
Route::get('/productos/gestion',[ProductoController::class,'index'])->name('productos.gestion');
Route::get('/productos/crear',[ProductoController::class,'create'])->name('productos.crear');
Route::post('/productos',[ProductoController::class,'store'])->name('productos.store');
Route::delete('/productos/{id}',[ProductoController::class,'destroy'])->name('productos.destroy');

Route::get('/categorias/gestion',[CategoriaController::class,'index'])->name('categorias.gestion');
Route::get('/categorias/crear',[CategoriaController::class,'create'])->name('categorias.crear');
Route::post('/categorias',[CategoriaController::class,'store'])->name('categorias.store');
Route::delete('/categoria/{id}',[CategoriaController::class,'destroy'])->name('categoria.destroy');