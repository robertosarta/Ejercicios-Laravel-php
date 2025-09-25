<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class ContactoRequest extends FormRequest
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
            'name'=>'required|string|min:3', // requerido, string, mínimo 3 caracteres
            'lastName'=>'required|string|min:3', // requerido, string, mínimo 3 caracteres
            'age'=>'required|integer|min:1|max:3' // requerido, int, mínimo 1, máximo 3
        ];
    }

    public function messages(): array
    {
        return [
            'name.required' => 'El nombre es obligatorio',
            'name.min' => 'Mínimo 3 caracteres',
            'lastName.required' => 'El apellido es obligatorio',
            'lastName.min' => 'Mínimo 3 caracteres',
            'age.required' => 'La edad es obligatoria',
            'age.min' => 'Mínimo 1 caracteres',
            'age.max' => 'Máximo 3 caracteres'
        ];
    }
}