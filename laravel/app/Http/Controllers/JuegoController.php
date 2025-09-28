<?php

namespace App\Http\Controllers;

use App\Http\Requests\JuegoRequest;
use App\Models\Juego;
use App\Models\Tag;
use App\Http\Controllers\Controller;

class JuegoController extends Controller
    {
    public function index() {
        $juegos = Juego::all();
        return view('juegos.index', compact('juegos'));
    }

    public function create() {
        $tags = Tag::all();
        return view('juegos.create', compact(('tags')));
    }


    public function store(JuegoRequest $request) {
        $juego = Juego::create([
            'titulo' => $request->titulo,
            'descripcion' => $request->descripcion,
            'anio_lanzamiento' => $request->anio_lanzamiento,
            'tags' => $request->tags,
        ]);

        return redirect()->route('juegos.index')->with('success','Juego creado con éxito');
    }

    public function destroy(Juego $juego) {
        $juego->delete();
        return redirect()->route('juegos.index')->with('success','Juego eliminado con éxito');
    }
}
