<?php

use App\Http\Controllers\articulos_controller;
use App\Http\Controllers\articulosController;
use Illuminate\Support\Facades\Route;




Route::view('/', 'inicio')->name('inicio');
Route::view('/catalogo', 'usuario/catalogo')->name('catalogo');
Route::view('/por_revisar', 'admin/por_revisar')->name('revisar');
Route::view('/perfil_usuario', 'usuario/perfil')->name('perfil_usuario');
Route::view('/aprobando', 'admin.aprobando')->name('aprobando');
Route::view('/perfil_admin', 'admin.perfil')->name('perfil_admin');
Route::view('/reporte_departamento', 'admin.reporte_departamento')->name('reporte_departamento');
Route::view('/reporte_general', 'admin.reporte_general')->name('reporte_general');



//Rutas que se van a utilizar
Route::post('/', [homeController::class, 'buscar'])->name('home.buscar');

Route::post('perfil_admin', [articulosController::class, 'agregar'])->name('create.articulos');