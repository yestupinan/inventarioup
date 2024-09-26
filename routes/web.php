<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\SalonesController;
use App\Http\Controllers\OrdenadoresController;
use App\Http\Controllers\CaracteristicasController;
use App\Http\Controllers\ObservacionesController;

Auth::routes(['register'=>false]);


Route::get('/', function () {
    return view('welcome');
});
Route::get('/', [SalonesController::class, 'welcome']);

Route::get('/ListOrdenadores/{id_salon}', [OrdenadoresController::class, 'ListOrdenadores']);

Route::get('/ReseñaHistorica', function () {
    return view('ReseñaHistorica');
});
Route::get('/MisionVision', function () {
    return view('MisionVision');
});


Route::get('/ordenadores/{id_ordenador}/observaciones', [ObservacionesController::class, 'index']);


Route::resource('salones', SalonesController::class);

// Ruta para actualizar el salón
Route::patch('/salones/{id_salon}', [SalonesController::class, 'update'])->name('salones.update')->middleware('auth');

// Ruta para editar los ordenadores (asumiendo que estás pasando el id_salon)
Route::get('/ordenadores/index/{id_salon}', [OrdenadoresController::class, 'index'])->name('ordenadores.index')->middleware('auth');

// Ruta para actualizar un ordenador
Route::patch('/ordenadores/{id_ordenador}', [OrdenadoresController::class, 'update'])->name('ordenadores.update')->middleware('auth');

Route::get('/ordenadores/{id_ordenador}/edit', [OrdenadoresController::class, 'edit'])->name('ordenadores.edit')->middleware('auth');

Route::patch('/caracteristicas/{id_ordenador}', [CaracteristicasController::class, 'update'])->name('caracteristicas.update')->middleware('auth');

Route::get('/caracteristicas/{id_ordenador}/edit', [CaracteristicasController::class, 'edit'])->name('caracteristicas.edit')->middleware('auth');

Route::patch('/observaciones/{id_ordenador}', [ObservacionesController::class, 'update'])->name('observaciones.update')->middleware('auth');

Route::get('/observaciones/{id_ordenador}/edit', [ObservacionesController::class, 'edit'])->name('observaciones.edit')->middleware('auth');

Route::get('/salones', [SalonesController::class, 'index'])->name('salones')->middleware('auth');



Route::get('/ordenadores/create/{id_salon}', [OrdenadoresController::class, 'create'])->name('ordenadores.create')->middleware('auth');
Route::post('/ordenadores/index/{id_salon}', [OrdenadoresController::class, 'store'])->name('ordenadores.store')->middleware('auth');

Route::get('/caracteristicas/create/{id_ordenador}/{id_salon}', [CaracteristicasController::class, 'create'])->name('caracteristicas.create')->middleware('auth');
Route::post('/caracteristicas/store/{id_salon}', [CaracteristicasController::class, 'store'])->name('caracteristicas.store')->middleware('auth');

Route::get('/observaciones/create/{id_ordenador}/{id_salon}', [ObservacionesController::class, 'create'])->name('observaciones.create')->middleware('auth');
Route::post('/observaciones/store/{id_salon}', [ObservacionesController::class, 'store'])->name('observaciones.store')->middleware('auth');


Route::get('/home', [SalonesController::class, 'index'])->name('home')->middleware('auth');

Route::get('/ordenadores/{id_ordenador}/edit', [OrdenadoresController::class, 'edit'])->name('ordenadores.edit')->middleware('auth');

Route::delete('/ordenadores/index/{id_salon}', [OrdenadoresController::class, 'destroy'])->middleware('auth');

Route::get('/ordenadores/{id_ordenador}/caracteristicas', [CaracteristicasController::class, 'index']);