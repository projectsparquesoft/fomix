<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class ProyectoRequest extends FormRequest
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
            'descripcion'=> 'required|min:3',
            'antecedente' => 'required|min:3',
            'justificacion' => 'required|min:3',
            'metodologia' => 'required|min:3',
            'objetivo_general' => 'required|min:3',
            'objetivo_especifico' => 'required|min:3',
            'metas'=> 'required|min:3'

        ];
    }

    public function attributes(){
        return[
            'descripcion' => 'Descripción',
            'antecedente' => 'Antecedentes',
            'justificacion' => 'Justificación',
            'metodologia' => 'metodología',
            'objetivo_general' => 'Objetivo General',
            'objetivo_especifico' => 'Objetivos Específico',
            'metas'=> 'Resultados'
        ];

    }
}
