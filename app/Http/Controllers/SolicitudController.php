<?php

namespace App\Http\Controllers;
use App\Models\solicitud;
use App\Models\categoria;
use App\Models\solicitante;
use App\Models\linea;

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
        $categorias = Categoria::all(['id_categoria','tipo_solicitud']);
        $solicitantes = solicitante::all(['id_solicitante','razon_social']);
        $lineas = Linea::all(['id_linea','nombre_linea','descripcion']);
        $solicitud = solicitud::all();
        return view('solicitud.index', compact('categorias', 'solicitud', 'solicitantes', 'lineas'));
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
            $file->move(public_path().'/images/', $name);
        }
        $solicitud = new Solicitud();
        $solicitud->categoria_id=$request->get('categoria_id');
        $solicitud->solicitante_id=$request->get('solicitante_id');
        $solicitud->archivo= $name;
        $solicitud->save();

        return redirect()->route('solicitud.index');


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
