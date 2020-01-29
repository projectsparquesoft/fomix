<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class EmpleadosRequest extends FormRequest
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
            'nid' => 'required|min:3|integer',
            'nombre' => 'required|min:3',
            'apellido' => 'required|min:3',
            'email' => 'required|min:3',
            'celular' => 'required|min:3',
            'is_jefe'=> 'required',
        ];
    }
    public function attributes()
    {
        return [
            'nid' => 'Nit|Cedula',
            'nombre' => 'Nombre',
            'apellido' => 'Apellido',
            'email' => 'Correo Electronico',
            'is_jefe' => 'Cargo'
        ];
        }
}
