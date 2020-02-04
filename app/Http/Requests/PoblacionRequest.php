<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class PoblacionRequest extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     *
     * @return bool
     */
    public function authorize()
    {
        return false;
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array
     */
    public function rules()
    {
        return [
            'numero_persona' => 'required|min:3',
            'fuente_verificacion' => 'required|min:3'
        ];
    }

    public function attribute(){
        return [
            'numero_persona' => 'Número de personas',
            'fuente_verificacion' => 'Fuente de verificación'

        ];

    }
}
