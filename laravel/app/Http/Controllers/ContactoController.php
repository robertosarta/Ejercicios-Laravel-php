<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use App\Http\Requests\ContactoRequest;

class ContactoController extends Controller
{
    public function show()
    {
        return view('contacto.formulario');
    }

    public function procesar(ContactoRequest $request) {
        return redirect ()-> route ('form.show')-> with('success', 'Formulario enviado OK');
    }
}