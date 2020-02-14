<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class EjesRequest extends FormRequest
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
            'nombre_eje' => 'required|min:3',
            'nombre_programa' => 'required|min:3'
        ];
    }

    public function attributes()
    {
        return [
            'nombre_eje' => 'Nombre del Eje',
            'nombre_programa' => 'Nombre del Programa'
        ];
    }
}
