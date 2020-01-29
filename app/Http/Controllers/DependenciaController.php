<?php

namespace App\Http\Controllers;
use App\Models\dependencia;
use Illuminate\Http\Request;
use App\Http\Requests\DependenciasCreateRequest;

class DependenciaController extends Controller
{

    public function __construct()
    {
        $this->middleware('auth');
    }

    public function index()
    {
        $dependencias = Dependencia::all();
        return view('dependencias.index', compact('dependencias'));
    }


    public function create()
    {

    }
    public function store(DependenciasCreateRequest $request)
    {
        if (request()->ajax()){

        $dependencias = new Dependencia();
        $dependencias->nombre_dependencia = $request->get('nombre_dependencia');
        $dependencias->descripcion= $request->get('descripcion');
        $dependencias->save();

        if ($dependencias->save())
        {
            return response()->json(['success' => 'Dependencia Creada con Exito!']);
        } else {
            return response()->json(['warning' => 'Error al guardar!']);
        }

        }
    }


    public function edit($id)
    {
        //
    }

    public function update(Request $request, $id)
    {
        //
    }

}
