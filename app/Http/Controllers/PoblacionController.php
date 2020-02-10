<?php

namespace App\Http\Controllers;
use App\Models\Poblacion;
use App\Models\clasificacion;
use App\Http\Requests\PoblacionRequest;
use Illuminate\Http\Request;

class PoblacionController extends Controller
{

    public function index()
    {
        $clasificaciones = clasificacion::all(['id','tipo_poblacion']);

        $poblaciones = Poblacion::with('clasificacion')->get();
        if (request()->ajax()) {
            $poblaciones = poblacion::all();
            /*si los campos estan vacios mostrar mj de error, sino retornar vista. */
            if (count($poblaciones) == 0) {
                return response()->json(['warning' => 'Error en el servidor']);
            } else {
                return response()->view('ajax.table-poblacion', compact('poblaciones'));
            }
        }
                return view('poblacion.index', compact('poblaciones', 'clasificaciones'));
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
    public function store(PoblacionRequest $request)
    {
        $poblaciones = new  Poblacion();
        $poblaciones->clasificacion_id  = $request->clasificacion_id;
        $poblaciones->detalle = $request->detalle;
        $poblaciones->item=1;
        $exito= $poblaciones->save();
        if ($exito) {
           return response()->json(['success' =>'POBLACION CREADA CORRECTAMENTE' ]);
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
    public function update(PoblacionRequest $request, $id)
    {

        if (request()->ajax()) {
            Poblacion::findOrFail($request->id_row)->update($request->all());
            return response()->json(['success' => 'POBLACION ACTUALIZADA CORRECTAMENTE']);
        }
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

