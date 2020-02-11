<?php

namespace App\Http\Controllers;
use App\Models\proponente;
use App\Http\Requests\ProponenteRequest;
use Illuminate\Http\Request;

class ProponenteController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $proponentes = Proponente::all();

        if (request()->ajax()) {
            $proponentes = Proponente::all();
            /*si los campos estan vacios mostrar mj de error, sino retornar vista. */
            if (count($proponentes) == 0) {
                return response()->json(['warning' => 'Error en el servidor']);
            } else {
                return response()->view('ajax.table-proponente', compact('proponentes'));
            }
        }
                return view('proponente.index', compact('proponentes'));

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
    public function store(ProponenteRequest $request)
    {

        if (request()->ajax()) {
            $proponentes = Proponente::create($request->all());
            if ($proponentes) {
                return response()->json(['success' => 'PROPONENTE CREADO CON EXITO!']);
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