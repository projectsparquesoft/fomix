<?php

namespace App\Http\Controllers;
use App\Models\Empleado;
use App\Http\Requests\EmpleadosRequest;
use App\Models\Dependencia;
use Illuminate\Http\Request;

class EmpleadoController extends Controller
{

    public function __construct()
    {
        $this->middleware('auth');
    }

    public function index(Request $request)
    {
        $empleados = Empleado::all(['id', 'nombre', 'apellido', 'email']);
        $dependencias = Dependencia::all(['id','nombre_dependencia']);

        if (request()->ajax()) {
            $empleados = Empleado::all(['id', 'nombre', 'apellido', 'email']);
            /*si los campos estan vacios mostrar mj de error, sino retornar vista. */
            if (count($empleados) == 0) {
                return response()->json(['warning' => 'ERROR EN EL SERVIDOR']);
            } else {
                return response()->view('ajax.table-empleados', compact('empleados'));
            }
        }
        return view('empleados.index', compact('empleados', 'dependencias'));
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
