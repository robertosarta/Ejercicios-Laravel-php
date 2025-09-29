<?php

use App\Http\Controllers\Api\ExternalController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Api\PeliculaController;

// Route::get('/', function () {
//     return view('welcome');
// });


// Route::get('/libros', function() {
//     return response()->json();
// });
// Route::post('/libros', function() {
//     return response()->json();
// });
// Route::get('/libros/{id}', function() {
//     return response()->json();
// });
// Route::put('/libros', function() {
//     return response()->json();
// });
// Route::delete('/libros', function() {
//     return response()->json();
// });

//Otra forma que crea automaticamente todo lo anterior (Resultado final exactamente el mismo)

Route::apiResource('peliculas', PeliculaController::class);
Route::apiResource('external', ExternalController::class);


