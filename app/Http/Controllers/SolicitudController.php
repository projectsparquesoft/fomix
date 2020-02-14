<?php

namespace App\Http\Controllers;
use App\Models\solicitud;
use App\Models\categoria;
use App\Models\solicitante;
use App\Models\linea;
use App\Models\Poblacion;
use App\Models\Proponente;
use App\Models\Actividad;
use App\Models\Presupuesto;
use App\Models\Documento;
use App\Http\Requests\SolicitudRequest;
use Illuminate\Http\Request;

class SolicitudController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $documentos = Documento::all(['id', 'tipo_documento']);
        $presupuestos = presupuesto::all(['id', 'solicitud_id', 'rubro', 'recurso_municipio', 'fondo_mixto', 'ministerio_cultura', 'ingreso_propio']);
        $actividades = Actividad::all(['id', 'proyecto_id', 'nombre_actividad', 'fecha_inicio', 'fecha_final']);
        $proponentes = Proponente::all(['id', 'nombre_proponente']);
        $poblaciones= Poblacion::with('clasificacion:id,tipo_poblacion')->get(['id', 'item', 'clasificacion_id', 'detalle']);
        $categorias = Categoria::all(['id','tipo_solicitud']);
        $lineas = Linea::all(['id', 'nombre_linea', 'descripcion']);
        $solicitantes = solicitante::all(['id','razon_social']);
        $solicitudes = solicitud::with('categoria', 'solicitante')->get();

        if (request()->ajax()) {
        $solicitudes = solicitud::all();
        if (count($solicitudes) == 0) {
            return response()->json(['warning' => 'Error en el servidor']);
        } else {
            return response()->view('ajax.table-solicitudes', compact('categorias', 'solicitudes', 'solicitantes', 'lineas', 'poblaciones', 'proponentes', 'actividades','presupuestos', 'documentos'));
        }

        }
        return view('solicitud.index', compact('categorias', 'solicitudes', 'solicitantes', 'lineas', 'poblaciones', 'proponentes', 'actividades', 'presupuestos', 'documentos'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(SolicitudRequest $request)
    {
        if ($request->file('archivo')) {
            $file = $request->file('archivo');
            $name = time().$file->getClientOriginalName();
            $file->move(public_path().'/imagenes', $name);
        }
        $solicitud = new Solicitud();
        $solicitud->categoria_id=$request->get('categoria_id');
        $solicitud->solicitante_id=$request->get('solicitante_id');
        $solicitud->archivo= $name;

        $exito = $solicitud->save();
        if ($exito) {
           return response()->json(['success' =>'SOLICITUD CREADA CORRECTAMENTE' ]);
        }

    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
