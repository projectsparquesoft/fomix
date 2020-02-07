<?php

namespace App\Http\Controllers;

use App\Models\Documento;
use App\Models\categoria;
use App\Http\Requests\DocumentoRequest;
use Illuminate\Http\Request;

class DocumentoController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $categorias = categoria::all(['id_categoria', 'tipo_solicitud']);
        $documentos = Documento::all();
        if (request()->ajax()) {
            $documentos = Documento::all();
            /*si los campos estan vacios mostrar mj de error, sino retornar vista. */
            if (count($documentos) == 0) {
                return response()->json(['warning' => 'Error en el servidor']);
            } else {
                return response()->view('ajax.table-documentos', compact('documentos', 'categorias'));
            }
        }
        return view('documentos.index', compact('documentos', 'categorias'));
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
    public function store(DocumentoRequest $request)
    {
        if (request()->ajax()) {
            Documento::create($request->all());
            return response()->json(['success' => 'DOCUMENTO GUARDADO CORRECTAMENTE']);
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
