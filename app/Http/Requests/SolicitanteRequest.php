<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class SolicitanteRequest extends FormRequest
{

    public function authorize()
    {
        return true;
    }

    public function rules()
    {
        return [
            'persona_id' => 'required|integer|exists:personas,id_persona',
            'razon_social' => 'required',
            'nid' => 'required|integer|unique:solicitantes,nid',
            'municipio_id' => 'required|integer|exists:municipios,id_municipio',
            'email' => 'required|email',
            'direccion' => 'required|min:3',
            'telefono' => 'integer|min:7|nullable',
            'celular' => 'integer|min:10|nullable',
            'proponente_id' => 'required|integer|exists:proponentes,id_proponente',
            'representante_legal' => 'required',
        ];
    }

    public function attributes()
    {
        return [
            'persona_id' => 'Tipo Persona',
            'razon_social' => 'Razon Social',
            'nid' => 'CC/NIT',
            'municipio_id' => 'Municipio',
            'email' => 'Email',
            'first_name' => 'Nombres',
            'direccion' => 'Direccion',
            'telefono' => 'Telefono',
            'celular' => 'Celular',
            'proponente_id' => 'Tipo Proponente',
            'representante_legal' => 'Representante Legal',
        ];
    }
}
