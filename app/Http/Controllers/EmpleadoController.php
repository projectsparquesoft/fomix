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

    public function index()
    {
        //$empleados = Empleado::all();
        $empleados = empleado::orderBy('id_empleado', 'ASC')->paginate(2);
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
