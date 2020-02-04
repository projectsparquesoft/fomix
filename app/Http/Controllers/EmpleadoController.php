<?php

namespace App\Http\Controllers;
use App\Models\Empleado;
use App\Http\Requests\EmpleadosRequest;

use Illuminate\Http\Request;

class EmpleadoController extends Controller
{

    public function __construct()
    {
        $this->middleware('auth');
    }

    public function index(Request $request)
    {
        $empleados = empleado::paginate(2);
        if ($request->ajax()) {
            $opcion = $request->opcion;
            if ($opcion == 1) {
                $buscar = $request->text_search;

                if ($buscar) {
                    $empleados = empleado::search($request->text_search)->paginate(3);
                    return response()->view('ajax.table-empleados', compact('empleados'));
                } else {
                    return response()->view('ajax.table-empleados', compact('empleados'));
                }

            }

                if ($opcion == 2) {
                    $empleados = empleado::search($request->text_search)->paginate(3);
                    return response()->view('ajax.table-empleados', compact('empleados'));
                }
        }
                    return view('empleados.index', compact('empleados'));
    }

    public function create()
    {

    }


    public function store(EmpleadosRequest $request)
    {
        if (request()->ajax()){

        $empleados = new Empleado();
        $empleados->nid = $request->get('nid');
        $empleados->nombre = $request->get('nombre');
        $empleados->apellido = $request->get('apellido');
        $empleados->celular = $request->get('celular');
        $empleados->email = $request->get('email');
        $empleados->is_jefe = $request->get('is_jefe');
        $empleados->save();
        //return redirect()->route('empleados.index');
        if ($empleados->save())
        {
            return response()->json(['success' => 'Empleado Creado con Exito!']);
        } else {
            return response()->json(['warning' => 'Error al guardar!']);
        }
    }
    }

    public function show($id)
    {
        //
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
