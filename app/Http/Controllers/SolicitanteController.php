<?php

namespace App\Http\Controllers;

use App\Http\Requests\SolicitanteRequest;
use App\Models\Departamento;
use App\Models\Persona;
use App\Models\Proponente;
use App\Models\Solicitante;
use Illuminate\Http\Request;

class SolicitanteController extends Controller
{

    public function __construct()
    {
        $this->middleware('auth');
    }

    public function index(Request $request)
    {
        $solicitantes = Solicitante::all();
        $personas = Persona::all(['id_persona', 'tipo_persona']);
        $departamentos = Departamento::all(['id_departamento', 'nombre_departamento']);
        $proponentes = Proponente::all(['id_proponente', 'nombre_proponente']);

        if (request()->ajax()) {
            $solicitantes = Solicitante::all();
            /*si los campos estan vacios mostrar mj de error, sino retornar vista. */
            if (count($solicitantes) == 0) {
                return response()->json(['warning' => 'Error en el servidor']);
            } else {
                return response()->view('ajax.table-solicitantes', compact('solicitantes'));
            }
        }


        return view('solicitante.index', compact('solicitantes', 'personas', 'departamentos', 'proponentes'));
    }


    public function store(SolicitanteRequest $request)
    {

        if (request()->ajax()) {
            $solicitante = Solicitante::create($request->except(['departamento']));
            if ($solicitante) {
                return response()->json(['success' => 'SOLICITANTE CREADO CON EXITO!']);
            }
        }
    }
}
