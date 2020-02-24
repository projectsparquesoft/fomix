<?php

namespace App\Http\Controllers;

use App\Http\Requests\ProyectoRequest;
use App\Http\Requests\ValidateActividadRequest;
use App\Http\Requests\ValidatePoblacionRequest;
use App\Http\Requests\ValidateSolicitudRequest;
use App\Models\categoria;
use App\Models\Clasificacion;
use App\Models\Documento;
use App\Models\Fuente;
use App\Models\linea;
use App\Models\Poblacion;
use App\Models\solicitante;
use App\Models\solicitud;
use Illuminate\Http\Request;

class SolicitudController extends Controller
{

    public function __construct()
    {
        $this->middleware('auth');
    }

    public function index()
    {
        $documentos = Documento::all(['id', 'tipo_documento', 'categoria']);
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
        return view('solicitud.index', compact('categorias', 'solicitudes', 'solicitantes', 'lineas', 'poblaciones', 'clasificaciones', 'fuentes', 'documentos'));
    }

    public function store(Request $request)
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

    public function update(Request $request, $id)
    {
        //
    }

    public function validateSolicitud(ValidateSolicitudRequest $request)
    {
        return response()->json(['success' => 'OK']);
    }

    public function validateFormato(ProyectoRequest $request)
    {
        return response()->json(['success' => 'OK']);
    }

    public function validatePoblacion(ValidatePoblacionRequest $request)
    {
        return response()->json(['success' => 'OK']);
    }

    public function validateActividad(ValidateActividadRequest $request)
    {
        return response()->json(['success' => 'OK']);
    }

}
