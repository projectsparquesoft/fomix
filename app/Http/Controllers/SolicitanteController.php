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
        $solicitantes = Solicitante::paginate(2);
        //$personas = Persona::all(['id_persona', 'tipo_persona']);
        //$departamentos = Departamento::all(['id_departamento', 'nombre_departamento']);
        //$proponentes = Proponente::all(['id_proponente', 'nombre_proponente']);

    
        return view('solicitante.index2', compact('solicitantes'));
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

    public function action(Request $request)
    {
        if ($request->ajax()) {
            $solicitantes = Solicitante::search($request->text_search)->paginate(2);
            return response()->view('ajax.table-solicitantes', compact('solicitantes'));
        }
    }

}
