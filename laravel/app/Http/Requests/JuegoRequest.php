<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class JuegoRequest extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     */
    public function authorize(): bool
    {
        return true; // hay que ponerlo a true para que se ejecute la validación
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array<string, \Illuminate\Contracts\Validation\ValidationRule|array<mixed>|string>
     */
    public function rules(): array
    {
        return [
            'titulo' => 'required|string|max:255',
            'descripcion' => 'required|string|max:255',
            'anio_lanzamiento' => 'required|integer',
            'tags' => 'array',
        ];
    }

    public function messages(): array
    {
        return [
            'titulo.required' => 'El título es obligatorio',
            'titulo.string' => 'El título debe ser una cadena de caracteres',
            'titulo.max' => 'El título no puede superar los 255 caracteres',
            'descripcion.required' => 'La descripción es obligatoria',
            'descripcion.string' => 'La descripción debe ser una cadena de caracteres',
            'descripcion.max' => 'La descripción no puede superar los 255 caracteres',
            'anio_lanzamiento.required' => 'El año de lanzamiento es obligatorio',
            'anio_lanzamiento.int' => 'El año de lanzamiento debe ser un entero',
            'tags.array' => 'Las etiquetas deben ser un array'
        ];
    }
}