<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class DependenciasCreateRequest extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     *
     * @return bool
     */
    public function authorize()
    {
        return true;
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array
     */
    public function rules()
    {
        return [
            'nombre_dependencia' => 'required|min:3',
            'descripcion' => 'required|min:5'
        ];
    }

/*
    public function messages()
    {
        return [
            'nombre_dependencia.required' => 'Este campo es obligatorio',
            'nombre_dependencia.min' => 'El nombre debe ser mínimo de 3 caracteres',
            'descripcion.required' => 'Este campo es obligatorio',
            'descripcion.min' => 'la descripcion debe ser mínimo de 5 caracteres'
        ];
    }
*/

public function attributes()
{
    return [
        'nombre_dependencia' => 'Nombre de la Dependencia',
        'descripcion' => 'Descripción'
    ];
}
}
