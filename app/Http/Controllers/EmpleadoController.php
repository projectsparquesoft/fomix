<?php

namespace App\Http\Controllers;

use App\Http\Requests\ChangeDependenciaRequest;
use App\Http\Requests\EmpleadosRequest;
use App\Http\Requests\EmpleadoUpdateRequest;
use App\Models\Dependencia;
use App\Models\DependenciaEmpleado;
use App\Models\Empleado;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;

class EmpleadoController extends Controller
{

    public function __construct()
    {
        $this->middleware('auth');
    }

    public function index(Request $request)
    {
        $empleados = Empleado::with('currentDependencia')->get(['id', 'nombre', 'apellido', 'email', 'celular', 'is_jefe', 'nid']);
        $dependencias = Dependencia::all(['id', 'nombre_dependencia']);

        if (request()->ajax()) {
            $empleados = Empleado::with('currentDependencia')->get(['id', 'nombre', 'apellido', 'email', 'celular', 'is_jefe', 'nid']);

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
        if (request()->ajax()) {

            $empleado = new Empleado();

            $empleado = $this->createObjectEmpleado($request, $empleado);

            DB::beginTransaction();
            try {

                $empleado->save();

                $this->storeUserEmpleado($empleado);

                $empleado->dependencias()->attach($request->dependencia_id, ['status' => 1]);

                DB::commit();

                return response()->json(['success' => 'EMPLEADO CREADO CON EXITO!']);

            } catch (\Exception $ex) {
                DB::rollback();
                return response()->json(['warning' => 'ERROR AL GUARDAR DATOS']);
            }

        }
    }

    public function createObjectEmpleado($request, $empleado)
    {

        $empleado->nid = $request->nid;
        $empleado->nombre = $request->nombre;
        $empleado->apellido = $request->apellido;
        $empleado->celular = $request->celular;
        $empleado->email = $request->email;
        $empleado->is_jefe = $request->is_jefe;

        return $empleado;

    }

    public function storeUserEmpleado($empleado)
    {
        $empleado->user()->create([
            'email' => $empleado->email,
            'password' => Hash::make('secreto123'),
            'is_password' => 0,
        ]);
    }

    public function show($id)
    {
        if (request()->ajax()) {
            $empleado = Empleado::where('id', $id)->with('currentDependencia', 'user')->first();
            return response()->view('ajax.detail-empleado', compact('empleado'));
        }
    }

    public function update(EmpleadoUpdateRequest $request, $id)
    {
        if (request()->ajax()) {
            Empleado::findOrFail($request->id_row)->update($request->all());
            return response()->json(['success' => 'EMPLEADO ACTUALIZADO CON EXITO!']);
        }

    }

    public function changeBoss($id)
    {
        $empleado = Empleado::findOrFail($id);

        if ($empleado->is_jefe) {
            $empleado->update(['is_jefe' => 0]);
        } else {
            $empleado->update(['is_jefe' => 1]);
        }

        return response()->json(['success' => 'ESTADO DE EMPLEADO ACTUALIZADO CON EXITO!']);
    }

    public function storeChangeDependencia(ChangeDependenciaRequest $request)
    {
        if (request()->ajax()) {

            $puesto = DependenciaEmpleado::where('empleado_id', $request->id_change)->orderBy('id', 'DESC')->first();

            $puesto->fecha_salida = $request->fecha_salida;
            $puesto->motivo = $request->motivo;
            $puesto->save();

            $empleado = Empleado::where('id', $request->id_change)->with('historyDependencias')->first();

            foreach ($empleado->historyDependencias as $history) {
                $empleado->dependencias()->updateExistingPivot($history->id, ['status' => 0]);
            }

            $empleado->dependencias()->attach($request->dependencia_change_id, ['status' => 1]);

            return response()->json(['success' => 'CAMBIO DE EMPLEADO CON EXITO!']);

        }
    }

}
