@extends('layouts.main')

@section('titulo', "Reporte de Proyectos")

@section('extra-css')
<!-- DataTables -->
<link rel="stylesheet" href="{{ asset('plugins/datatables-bs4/css/dataTables.bootstrap4.min.css')}}">
<!-- SweetAlert2 -->
<link rel="stylesheet" href="{{ asset('plugins/sweetalert2-theme-bootstrap-4/bootstrap-4.min.css')}}">
@stop

@section('link')
<div class="row mb-2">
  <div class="col-sm-12 text-center">
    <h1>Reporte de Proyectos</h1>
  </div>
</div>
@endsection

@section('content')
<div class="container-fluid">
  <div class="card card" style="background:whitesmoke">
    <div class="card-header">
<small>Filtro Por:</small>
      <div class="card-tools">
        <button type="button" class="btn btn-tool" data-card-widget="collapse"><i class="fas fa-minus"></i></button>
      </div>
    </div>
    <div class="card-body table-responsive" id="id_table">
        <div class="row">
            <div class="col-sm-6">
                <label for="">Líneas:</label>
                <select name="nombre_linea" id="nombre_linea" class="form-control">
                    @foreach ($lineas  as $linea)
                    <option value="{{$linea->id}}">{{$linea->descripcion}}</option>
                    @endforeach
                </select>
            </div>
            <div class="col-sm-2">
                <label for="">Población:</label>
                <select name="detalle" id="detalle" class="form-control">
                    @foreach ($poblaciones  as $poblacion)
                    <option value="{{$poblacion->id}}">{{$poblacion->detalle}}</option>
                    @endforeach
                </select>
            </div>
            <div class="col-sm-2">
                <label for="">Presupuesto:</label>
                <input type="text" class="form-control">
            </div>
            <div class="col-sm-2">
                <label for="">Proceso:</label>
                    <select name="nombre_proceso" id="nombre_proceso" class="form-control">
                    @foreach ($procesos  as $proceso)
                    <option value="{{$proceso->id}}">{{$proceso->nombre_proceso}}</option>
                    @endforeach
                </select>
            </div>
            </div>
            <br>
            <br>
            <br>
            <!-- /tabla -->
    @include('ajax.table-reporteProyecto')
    </div>
    <!-- /fin tabla-->
    <div class="card-footer">
      Listado de los reportes.
    </div>
  </div>
</div>
<form id="form_hidden" style="display:none" action="{{route('indicadores.index')}}" method="GET"><input type="hidden" name="opcion" value="ok"></form>
@endsection

@section('extra-script')
<!-- DataTables -->
<script src="{{ asset('plugins/datatables/jquery.dataTables.min.js')}}"></script>
<script src="{{ asset('plugins/datatables-bs4/js/dataTables.bootstrap4.min.js')}}"></script>
<!-- SweetAlert2 -->
<script src="{{asset('plugins/sweetalert2/sweetalert2.min.js')}}"></script>
<!--data tables y js de documentos--->
<script src="{{asset('js/datatable.js')}}"></script>
@stop





