<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class FuentesRequest extends FormRequest
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
         'fuente_verificacion' => 'required|min:3'
        ];
    }

    public function attributes(){
        return [
            'fuente_verificacion' => 'Fuente de Verificación'
        ];
    }
}
