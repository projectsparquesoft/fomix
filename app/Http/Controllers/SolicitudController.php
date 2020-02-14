<?php

namespace App\Http\Controllers;

use App\Http\Requests\SolicitudRequest;
use App\Models\categoria;
use App\Models\Clasificacion;
use App\Models\Fuente;
use App\Models\linea;
use App\Models\Poblacion;
use App\Models\solicitante;
use App\Models\solicitud;
use Illuminate\Http\Request;

class SolicitudController extends Controller
{

    public function index()
    {
        $clasificaciones = Clasificacion::with('poblaciones:id,clasificacion_id,detalle')->get(['id', 'tipo_poblacion']);
        $poblaciones = Poblacion::get(['id', 'detalle', 'clasificacion_id']);
        $categorias = Categoria::all(['id', 'tipo_solicitud']);
        $lineas = Linea::all(['id', 'nombre_linea', 'descripcion']);
        $solicitantes = Solicitante::all(['id', 'razon_social', 'nombre', 'apellido']);
        $solicitudes = Solicitud::with('categoria', 'solicitante')->get();
        $fuentes = Fuente::all();

        if (request()->ajax()) {
            $solicitudes = Solicitud::all();
            if (count($solicitudes) == 0) {
                return response()->json(['warning' => 'Error en el servidor']);
            } else {
                return response()->view('ajax.table-solicitudes', compact('solicitudes'));
            }

        }
        return view('solicitud.index', compact('categorias', 'solicitudes', 'solicitantes', 'lineas', 'poblaciones', 'clasificaciones', 'fuentes'));
    }

    
    public function create()
    {
        //
    }

    
    public function store(SolicitudRequest $request)
    {
        if ($request->file('archivo')) {
            $file = $request->file('archivo');
            $name = time() . $file->getClientOriginalName();
            $file->move(public_path() . '/imagenes', $name);
        }
        $solicitud = new Solicitud();
        $solicitud->categoria_id = $request->get('categoria_id');
        $solicitud->solicitante_id = $request->get('solicitante_id');
        $solicitud->archivo = $name;

        $exito = $solicitud->save();
        if ($exito) {
            return response()->json(['success' => 'SOLICITUD CREADA CORRECTAMENTE']);
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

    public function destroy($id)
    {
        //
    }
}
