<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Requests\ProyectoRequest;
use App\Models\Proyecto;


class ProyectoController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
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
    public function store(ProyectoRequest $request)
    {

        if (request()->ajax()){

        $proyecto = new Proyecto();
        $proyecto->descripcion= $request->get('descripcion');
        $proyecto->antecedente= $request->get('antecedente');
        $proyecto->justificacion= $request->get('justificacion');
        $proyecto->metodologia= $request->get('metodologia');
        $proyecto->objetivo_general= $request->get('objetivo_general');
        $proyecto->objetivo_especifico=$request->get('objetivo_especifico');
        $proyecto->metas=$request->get('metas');
        $proyecto->solicitud_id = 1;
        $proyecto->save();
        if ($proyecto->save())
        {
            return response()->json(['success' => 'Proyecto Creado con Exito!']);
        } else {
            return response()->json(['warning' => 'Error al guardar!']);
        }
        return redirect()->route('solicitud.index');
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
