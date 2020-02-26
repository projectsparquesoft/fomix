<?php

namespace App\Http\Controllers;

use App\Models\Proyecto;
use App\Models\Solicitud;
use App\Repositories\SolicitudRepository;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class ManagementController extends Controller
{

    protected $repository;

    public function __construct(SolicitudRepository $repository)
    {
        $this->repository = $repository;
        $this->middleware('auth');
    }

    public function index()
    {

        $solicitudes = $this->repository->buildQuery('Verificacion Gerencia')->get();

        if (request()->ajax()) {

            $solicitudes = $this->repository->buildQuery('Verificacion Gerencia')->get();

            if (count($solicitudes) == 0) {
                return response()->json(['warning' => 'ERROR EN EL SERVIDOR']);
            } else {
                return response()->view('ajax.table-solicitudes-management', compact('solicitudes'));
            }

        }

        return view('management.index', compact('solicitudes'));

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

    public function approveSolicitud($id)
    {
        if (request()->ajax()) {

            $solicitud = Solicitud::findOrFail($id);

            $proyecto = Proyecto::find($solicitud->proyecto->id);

            if ($this->repository->validateProcesos($proyecto->historiales, 'Proceso de Aprobacion') && !$this->repository->validateProcesos($proyecto->historiales, 'Aprobado')) {

                DB::beginTransaction();
                try {

                    $this->repository->updateProcesos($proyecto, 'Aprobado', 'Proyecto Aprobado');

                    DB::commit();

                    return response()->json(['success' => 'PROYECTO APROBADO CON EXITO!', 'status' => 'Aprobado', 'solicitud' => $id]);
                } catch (\Exception $ex) {
                    DB::rollback();
                    return response()->json(['warning' => 'OOPS! ERROR DEL SERVIDOR']);
                }

            } else {
                return response()->json(['warning' => 'ESTE PROYECTO YA FUE APROBADO']);
            }
        }

    }

    /*
    public function denyOrder($id)
    {

        if (request()->ajax()) {

            $order = Order::where('id_order', $id)->with('historyOrders.orderStatus')->first(['id_order']);

            if (!$this->validateStatus($order->historyOrders, 'Aprobado') and !$this->validateStatus($order->historyOrders, 'Rechazado')) {
                DB::beginTransaction();
                try {

                    $this->updateStatusOrder($order, 'Rechazado');

                    DB::commit();
                    return response()->json(['success' => 'ESTE PEDIDO HA SIDO RECHAZADO!', 'status' => 'Rechazado', 'order' => $order->id_order]);
                } catch (\Exception $ex) {
                    DB::rollback();
                    return response()->json(['warning' => 'OOPS! ERROR DEL SERVIDOR']);
                }
            } else {
                return response()->json(['warning' => 'ESTA ORDEN YA FUE RECHAZADA']);
            }
        }

    }
    */

}
