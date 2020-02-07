<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class ProponenteRequest extends FormRequest
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
          'nombre_proponente' =>'required|min:3'
        ];
    }

    public function attributes()
    {
        return [
            'nombre_proponente'=> 'Nombre del Proponente'
        ];
    }
}
