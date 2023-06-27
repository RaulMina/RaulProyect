<?php

use App\Http\Controllers\UsuarioController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\DsitritoController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\CircuitoController;
/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/
// RUTA GET *****************************

Route::get('/', [HomeController::class, 'Index'])->name('home');
Route::get('/register', [HomeController::class, 'Register'])->name('register');
Route::get('/login', [HomeController::class, 'Login'])->name('login');
Route::get('/dashboard', [HomeController::class, 'Dashboard'])->name('dashboard');
Route::get('/salir', [HomeController::class, 'Salir'])->name('salir');
// RUTAS POST
Route::post('/registrar_usuario', [UsuarioController::class, 'Registrar_usuario'])->name('registrar_usuario');
Route::post('/login', [UsuarioController::class, 'Login'])->name('loginuser');

//RUTAS RESOURCE

Route::resource('/usuarios', UsuarioController::class);
Route::resource('/distritos', DsitritoController::class);
Route::resource('/circuitos', CircuitoController::class);
