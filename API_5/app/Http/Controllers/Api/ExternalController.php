<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Http;
use App\Models\Personaje;

class ExternalController extends Controller
{

    private $apiUrl = 'https://rickandmortyapi.com/api/character';
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $response = Http::get($this->apiUrl);
        $data = $response->json();

        $filtrado = array_map(function($personaje) {
            return new Personaje(
                $personaje['name'],
                $personaje['status'],
                $personaje['gender']
            );
        }, $data['results']);
        
        return $response()->json($filtrado);
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        $response = Http::get("$this->apiUrl/$id");

        $data = $response->json();

        return response()->json([
            'nombre' => $data['name'],
            'estado' => $data['status'],
            'genero' => $data['gender']
        ]);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
    }
}
