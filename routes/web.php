<?php

use App\Http\Controllers\articulos_controller;
use App\Http\Controllers\articulosController;
use App\Http\Controllers\departamentoController;
use Illuminate\Support\Facades\Route;




Route::view('/', 'inicio')->name('inicio');
//Route::view('/catalogo', 'usuario/catalogo')->name('catalogo');
Route::view('/por_revisar', 'admin/por_revisar')->name('revisar');
Route::view('/perfil_usuario', 'usuario/perfil')->name('perfil_usuario');
Route::view('/aprobando', 'admin.aprobando')->name('aprobando');
Route::view('/reporte_departamento', 'admin.reporte_departamento')->name('reporte_departamento');
Route::view('/reporte_general', 'admin.reporte_general')->name('reporte_general');



//Rutas que se van a utilizar para el administrrador
Route::get('/perfil_admin', [articulosController::class, 'obtener'])->name('perfil_admin');
Route::post('/perfil_admin', [articulosController::class, 'crear'])->name('create.articulos');
Route::patch('/perfil_admin/{id}', [articulosController::class, 'agregar'])->name('articulo.agregar');


//Rutas que se van a utilizar para el los departamentos
Route::get('/catalogo', [departamentoController::class, 'obtener_catalogo'])->name('catalogo');
Route::post('/catalogo', [departamentoController::class, 'pedido'])->name('pedido');