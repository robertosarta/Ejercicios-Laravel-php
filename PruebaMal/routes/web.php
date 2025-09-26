<?php

use App\Http\Controllers\DocumentosController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AboutController;
use App\Http\Controllers\ContactoController;

Route::get('/', function() {
    return view(('welcome'));
});

Route::get('/contacto', [ContactoController::class, 'show'])->name('form.show');
Route::post('/contacto', [ContactoController::class, 'procesar'])->name('form.make');

Route::post('/documentos/subir', [DocumentosController::class, 'subir'])->name('documentos.subir');
Route::get('/documentos/descargar/{id}', [DocumentosController::class, 'descargar'])->name('documentos.descargar');
Route::get('/documentos/index', [DocumentosController::class, 'show'])->name('documentos.index');