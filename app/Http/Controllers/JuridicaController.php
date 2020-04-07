<?php

namespace App\Http\Controllers;

use App\Repositories\SolicitudRepository;


class JuridicaController extends Controller
{

    protected $repository;

    public function __construct(SolicitudRepository $repository)
    {
        $this->repository = $repository;
        $this->middleware('auth');
    }

    public function index()
    {

        $solicitudes = $this->repository->buildQuery('Recepcion Juridica')->get();

        if (request()->ajax()) {

            $solicitudes = $this->repository->buildQuery('Recepcion Juridica')->get();

            if (count($solicitudes) == 0) {
                return response()->json(['warning' => 'ERROR EN EL SERVIDOR']);
            } else {
                return response()->view('ajax.table-solicitudes-juridica', compact('solicitudes'));
            }
        }

        return view('juridica.index', compact('solicitudes'));

    }

    public function show($id)
    {
        if (request()->ajax()) {

            $solicitud = $this->repository->findSolicitudNormal($id);

            if ($solicitud->categoria->tipo_solicitud == 'Proyecto') {

                $solicitud = $this->repository->findSolicitudProject($id);

            }

            return response()->view('ajax.detail-management', compact('solicitud'));
        }


    }

}
