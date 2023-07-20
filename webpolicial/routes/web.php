<?php

use App\Http\Controllers\UsuarioController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\DsitritoController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\CircuitoController;
use App\Http\Controllers\SubcircuitoController;
use App\Http\Controllers\VehiculoController;
use App\Http\Controllers\DependenciaController;
use App\Http\Controllers\Reportes_eventosController;
use App\Http\Controllers\ParroquiaController;
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
Route::get('/reportes', [Reportes_eventosController::class, 'reportes'])->name('reportes');
Route::get('/generarreportes', [Reportes_eventosController::class, 'generarreportes'])->name('generarreportes');
// RUTAS POST
Route::post('/registrar_usuario', [UsuarioController::class, 'Registrar_usuario'])->name('registrar_usuario');
Route::post('/login', [UsuarioController::class, 'Login'])->name('loginuser');

//BUSCAR

Route::post('/buscarvehiculo', [VehiculoController::class, 'buscar'])->name('buscarvh');
Route::post('/buscarusuario', [UsuarioController::class, 'buscar'])->name('buscarus');
Route::post('/buscardistrito', [DsitritoController::class, 'buscar'])->name('buscardis');
Route::post('/buscarcircuito', [CircuitoController::class, 'buscar'])->name('buscarcir');
Route::post('/buscarsubcircuito', [SubcircuitoController::class, 'buscar'])->name('buscarsubc');
Route::post('/buscardependencia', [DependenciaController::class, 'buscar'])->name('buscardep');
Route::post('/buscarreporte_eventos', [Reportes_eventosController::class, 'buscar'])->name('buscarreport');
Route::post('/buscarrreportefe', [Reportes_eventosController::class, 'reportes'])->name('buscarrepfech');
Route::post('/buscarparroquias', [Reportes_eventosController::class, 'reportes'])->name('buscarparroq');
//RUTAS RESOURCE

Route::resource('/usuarios', UsuarioController::class);
Route::resource('/distritos', DsitritoController::class);
Route::resource('/parroquias',ParroquiaController::class);
Route::resource('/circuitos', CircuitoController::class);
Route::resource('/subcircuitos', SubcircuitoController::class);
Route::resource('/vehiculos', VehiculoController::class);
Route::resource('/dependencias',DependenciaController::class);
Route::resource('/reporte_eventos',Reportes_eventosController::class);


