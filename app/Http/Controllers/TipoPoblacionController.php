<?php

namespace App\Http\Controllers;
use App\Models\Clasificacion;
use Illuminate\Http\Request;
use App\Http\Requests\TipoDePoblacionRequest;

class TipoPoblacionController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
            $tipopoblaciones = Clasificacion::all();
        if (request()->ajax()) {
            $tipopoblaciones = Clasificacion::all();
            /*si los campos estan vacios mostrar mj de error, sino retornar vista. */
            if (count($tipopoblaciones) == 0) {
                return response()->json(['warning' => 'Error en el servidor']);
            } else {
                return response()->view('ajax.table-tipodepoblacion', compact('tipopoblaciones'));
            }
        }
        return view('tipopoblacion.index', compact('tipopoblaciones'));
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
    public function store(TipoDePoblacionRequest $request)
    {
        $tipopoblaciones = new  Clasificacion();
        $tipopoblaciones->tipo_poblacion = $request->tipo_poblacion;
        $tipopoblaciones->status=1;
        $exito = $tipopoblaciones->save();
        if ($exito) {
           return response()->json(['success' => 'TIPO DE POBLACION CREADA CON EXITO']);
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
