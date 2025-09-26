<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Storage;
use Illuminate\Http\Request;

class DocumentosController extends Controller
{
    public function show()
    {
        $archivos = Storage::disk('public')->files('documentos');
        return view ('documentos.index', compact('archivos'));
    }

    public function subir(Request $request) {
        $request->validate (['archivo' => 'required|file|max:5120|mimes:pdf,txt']); // es requerido, de tipo archivo y 5120 bytes. solo pdf y txt

        $archivo = $request->file('archivo'); //archivo contiene el fichero
        $fileName = $archivo->getClientOriginalName(); //se guarda el nombre original

        $archivo->storeAs('documentos', $fileName, 'public');
        return redirect()->route('documentos.index')->with('success', 'Archivo subido correctamnte');
    }

/*
    Me decia que download era un undefined method y no hubo manera de que funcionase
    public function descargar($archivo) {
        return Storage::disk('public')->download('documentos/' .$archivo);
    }
*/
}