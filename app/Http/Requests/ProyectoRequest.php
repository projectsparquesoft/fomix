<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class ProyectoRequest extends FormRequest
{

    public function authorize()
    {
        return true;
    }

    public function rules()
    {
        return [
            'titulo' => 'required|min:3',
            'fecha_ini' => 'required|date',
            'fecha_fin' => 'required|date',
            'descripcion_proyecto' => 'required|min:3',
            'id_linea' => 'required',
            'id_linea.*' => 'required',
            'antecedentes' => 'required|min:3',
            'justificacion' => 'required|min:3',
            'metodologia' => 'required|min:3',
            'objetivo_general' => 'required|min:3',
            'objetivo_especifico' => 'required|min:3',
            'metas' => 'required|min:3',
        ];
    }

    public function attributes()
    {
        return [
            'titulo' => 'Titulo',
            'fecha_ini' => 'Fecha Inicio',
            'fecha_fin' => 'Fecha Final',
            'descripcion_proyecto' => 'Descripción',
            'id_linea' => 'Lineas',
            'antecedente' => 'Antecedentes',
            'justificacion' => 'Justificación',
            'metodologia' => 'metodología',
            'objetivo_general' => 'Objetivo General',
            'objetivo_especifico' => 'Objetivos Específico',
            'metas' => 'Resultados',
        ];

    }
}
