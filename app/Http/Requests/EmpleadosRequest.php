<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class EmpleadosRequest extends FormRequest
{
    
    public function authorize()
    {
        return true;
    }

    
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
