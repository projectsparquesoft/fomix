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
            'clasificacion_id' => 'required',
            'detalle' => 'required'
        ];
    }

    public function attributes(){
        return [
            'clasificacion_id' => 'Clasificación',
            'detalle' => 'Detalle'

        ];

    }
}
