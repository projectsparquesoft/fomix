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

    public function index(Request $request)
    {

        $dependencias = Dependencia::paginate(3);

        if ($request->ajax()) {
            $opcion = $request->opcion;
            if ($opcion == 1) {
                $buscar = $request->text_search;

                if ($buscar) {
                    $dependencias = dependencia::search($request->text_search)->paginate(3);
                    return response()->view('ajax.table-dependencias', compact('dependencias'));
                } else {
                    return response()->view('ajax.table-dependencias', compact('dependencias'));
                }

            }

                if ($opcion == 2) {
                    $dependencias = dependencia::search($request->text_search)->paginate(3);
                    return response()->view('ajax.table-dependencias', compact('dependencias'));
                }
        }
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
