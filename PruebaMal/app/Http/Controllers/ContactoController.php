<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use App\http\Requests\ContactoRequest;

class ContactoController extends Controller
{
    public function show()
    {
        return view('contacto.formulario');
    }

    public function procesar(ContactoRequest $request) {
        //validar
        $request->validate([
            'name' => 'required|string|min:3',
            'email' => 'email',
            'password' => 'required|integer|min:2|max:4'
        ]);
        
        return redirect ()-> route ('form.show')-> with('success', 'Formulario enviado OK');
    }
}