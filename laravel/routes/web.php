<?php

use App\Http\Controllers\DocumentosController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ContactoController;
use App\Http\Controllers\JuegoController;
use App\Http\Controllers\TagController;

Route::get('/', function() {
    return view(('welcome'));
});

Route::get('/contacto', [ContactoController::class, 'show'])->name('form.show');
Route::post('/contacto', [ContactoController::class, 'procesar'])->name('form.make');

Route::post('/documentos/subir', [DocumentosController::class, 'subir'])->name('documentos.subir');
Route::delete('/documentos/borrar/{id}', [DocumentosController::class, 'borrar'])->name('documentos.borrar');
Route::get('/documentos/descargar/{id}', [DocumentosController::class, 'descargar'])->name('documentos.descargar');
Route::get('/documentos/index', [DocumentosController::class, 'show'])->name('documentos.index');

Route::prefix('juegos')->group(function () {
    Route::get('/', [JuegoController::class, 'index'])->name('juegos.index');
    Route::get('/create', [JuegoController::class, 'create'])->name('juegos.create');
    Route::post('/', [JuegoController::class, 'store'])->name('juegos.store');
    Route::delete('/{juego}', [JuegoController::class, 'destroy'])->name('juegos.delete');
});

Route::prefix('tags')->group(function () {
    Route::get('/', [TagController::class, 'index'])->name('tags.index');
    Route::get('/create', [TagController::class, 'create'])->name('tags.create');
    Route::post('/', [TagController::class, 'store'])->name('tags.store');
    Route::delete('/{tag}', [TagController::class, 'destroy'])->name('tags.delete');
});