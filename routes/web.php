<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ClienteController; //importanto a la clase controlador

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

Route::get('/inicio', function () {
    return view('welcome');
});

Route::get('/saludo', function () {
    return "Saludos Gustavo";
});

Route::get('/indexClienteController/{nombre}', function ($nombre) {
    return "Saludos ". $nombre;
});

//*****Llegando al Controlador del Cliente ***************
Route::get('/indexClienteController',[ClienteController::class, 'index']);

Route::get('/insertar', [ClienteController::class, 'insertar']);
Route::get('/eliminar', [ClienteController::class, 'eliminar']);
Route::get('/actualizar', [ClienteController::class, 'actualizar']);
//Auth::routes();

//Creando formularios ...
Route::get('/verFormularioCliente', [ClienteController::class, 'verFormulario']);

Route::get('/crearFormularioClienteController', [ClienteController::class, 'crearRegistro']);
Route::get('/verTablaClienteController', [ClienteController::class, 'verTabla']);
Route::get('/editarTablaClienteController/{id}', [ClienteController::class, 'editarTabla']);
Route::get('/guardarEdicionClienteController', [ClienteController::class, 'guardarEdicion']);
Route::get('/formularioeliminar/{id_cliente}', [ClienteController::class, 'eliminarCliente'])->name('eliminar');


// ******** Pantalla de logueo**************//
Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
