<?php

namespace App\Http\Controllers;

use App\Http\Requests\IndicadorRequest;
use App\Models\Eje;
use App\Models\indicador;
use Illuminate\Http\Request;

class IndicadorController extends Controller
{

    public function index()
    {
        $indicadores = Indicador::all();
        $ejes = Eje::all();

        if (request()->ajax()) {
            $indicadores = Indicador::all();
            /*si los campos estan vacios mostrar mj de error, sino retornar vista. */
            if (count($indicadores) == 0) {
                return response()->json(['warning' => 'Error en el servidor']);
            } else {
                return response()->view('ajax.table-indicadores', compact('indicadores'));
            }
        }
        return view('indicador.index', compact('indicadores', 'ejes'));
    }

    public function store(IndicadorRequest $request)
    {
        if (request()->ajax()) {
            $indicadores = new Indicador();
            $indicadores->nombre_indicador = $request->nombre_indicador;
            $indicadores->orden_indicador = 1;
            $indicadores->status = 1;
            $exito = $indicadores->save();

            if ($exito) {
                return response()->json(['success' => 'INDICADOR CREADO CON EXITO!']);
            }
        }
    }

    public function update(Request $request, $id)
    {
        //
    }

}
