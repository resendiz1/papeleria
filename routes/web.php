<?php

use App\Http\Controllers\articulos_controller;
use App\Http\Controllers\articulosController;
use App\Http\Controllers\departamentoController;
use Illuminate\Support\Facades\Route;




Route::view('/', 'inicio')->name('inicio');
//Route::view('/catalogo', 'usuario/catalogo')->name('catalogo');
Route::view('/perfil_usuario', 'usuario/perfil')->name('perfil_usuario');
Route::view('/aprobando', 'admin.aprobando')->name('aprobando');
Route::view('/reporte_departamento', 'admin.reporte_departamento')->name('reporte_departamento');
Route::view('/reporte_general', 'admin.reporte_general')->name('reporte_general');
Route::view('/pedido', 'admin.pedido')->name('pedido');
Route::view('/registro_usuarios', 'admin.registro')->name('registro');
// Route::view('/por_revisar', 'admin/por_revisar')->name('revisar');


//Rutas que se van a utilizar para el administrrador
Route::get('/perfil_admin', [articulosController::class, 'obtener'])->name('perfil_admin');
Route::post('/perfil_admin', [articulosController::class, 'crear'])->name('create.articulos');
Route::patch('/perfil_admin/{id}', [articulosController::class, 'agregar'])->name('articulo.agregar');
Route::get('/por_revisar', [departamentoController::class, 'departamentos'])->name('revisar');
Route::get('/pedido_departamento/{id}', [departamentoController::class, 'pedido_departamento'])->name('departamento.pedido');



//Rutas que se van a utilizar para el los departamentos
Route::get('/catalogo', [departamentoController::class, 'obtener_catalogo'])->name('catalogo');
Route::post('/catalogo/lanzado', [departamentoController::class, 'catalogo'])->name('lanza_pedido');



//Ritas del login
Route::post('/', [departamentoController::class, 'login'])->name('login');




//Ruta de la alta de los usuarios
Route::post('/registro_usuarios', [departamentoController::class, 'registro_usuarios'])->name('alta_usuarios'); 