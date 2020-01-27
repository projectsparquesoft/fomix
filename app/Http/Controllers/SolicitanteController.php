<?php

namespace App\Http\Controllers;

use App\Http\Requests\SolicitanteRequest;
use App\Models\Departamento;
use App\Models\Persona;
use App\Models\Proponente;
use App\Models\Solicitante;

class SolicitanteController extends Controller
{

    public function __construct()
    {
        $this->middleware('auth');
    }

    public function index()
    {
        $solicitantes = Solicitante::all();
        $personas = Persona::all(['id_persona', 'tipo_persona']);
        $departamentos = Departamento::all(['id_departamento', 'nombre_departamento']);
        $proponentes = Proponente::all(['id_proponente', 'nombre_proponente']);
        return view('solicitante.index', compact('solicitantes', 'personas', 'departamentos', 'proponentes'));
    }

    public function store(SolicitanteRequest $request)
    {
        if (request()->ajax()) {
            $solicitante = Solicitante::create($request->except(['departamento']));
            if ($solicitante) {
                return response()->json(['success' => 'SOLICITANTE CREADO CON EXITO!']);
            } else {
                return response()->json(['warning' => 'ERROR AL GUARDAR DATOS']);
            }
        }
    }
    
}
