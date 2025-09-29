<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Pelicula;

class PeliculaController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        return Pelicula::all();
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $request->validate([
            'titulo' => 'required|string|max:255',
            'director' => 'required|string|max:255',
            'publicacion' => 'required|digits:4|integer',
            'genero' => 'nullable|string|max:255'
        ]);

        $Pelicula = Pelicula::create($request->all());
        return response()->json(['id' => $Pelicula->id], 201);
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        $Pelicula = Pelicula::find($id);

        if (!$Pelicula){
            return response()->json(['message' => 'Pelicula no encontrado'], 404);
        }
        return response()->json($Pelicula);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        $Pelicula = Pelicula::find($id);

        if(!$Pelicula) {
            return response()->json(['message' => 'Pelicula no encontrado'], 404);
        }

        $request->validate([
            'titulo' => 'sometimes|string|max:255', //Ponemos sometimes para poder hacer actualizaciones parciales. Pej; solo actualizar el titulo
            'director' => 'sometimes|string|max:255',
            'publicacion' => 'sometimes|digits:4|integer',
            'genero' => 'nullable|string|max:255'
        ]);

        $Pelicula->update($request->all());
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        $Pelicula = Pelicula::find($id);

        if(!$Pelicula) {
            return response()->json(['message' => 'Pelicula no encontrado'], 404);
        }

        $Pelicula->delete();
        return response()->json(['message' => 'Pelicula borrado correctamente', 200]);
    }
}
