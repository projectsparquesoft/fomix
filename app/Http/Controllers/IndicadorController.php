<?php

namespace App\Http\Controllers;
use App\Models\indicador;
use App\Http\Requests\IndicadorRequest;
use Illuminate\Http\Request;

class IndicadorController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $indicadores = Indicador::all();

        if (request()->ajax()) {
            $indicadores = Indicador::all();
            /*si los campos estan vacios mostrar mj de error, sino retornar vista. */
            if (count($indicadores) == 0) {
                return response()->json(['warning' => 'Error en el servidor']);
            } else {
                return response()->view('ajax.table-indicadores', compact('indicadores'));
            }
        }
                return view('indicador.index', compact('indicadores'));
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
    public function store(IndicadorRequest $request)
    {
        if (request()->ajax()) {
        $indicadores = new Indicador();
        $indicadores->nombre_indicador= $request->nombre_indicador;
        $indicadores->orden_indicador=1;
        $indicadores->status=1;
        $exito= $indicadores->save();

        if ($exito) {
            return response()->json(['success' => 'INDICADOR CREADO CON EXITO!']);
        }
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
