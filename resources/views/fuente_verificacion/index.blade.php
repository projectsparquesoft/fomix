@extends('layouts.main')


@section('titulo', "Fuente de Verificación")

@section('extra-css')
<!-- DataTables -->
<link rel="stylesheet" href="{{ asset('plugins/datatables-bs4/css/dataTables.bootstrap4.min.css')}}">
<!-- SweetAlert2 -->
<link rel="stylesheet" href="{{ asset('plugins/sweetalert2-theme-bootstrap-4/bootstrap-4.min.css')}}">
@stop

@section('link')

<div class="row mb-2">
  <div class="col-sm-12 text-center">
    <h1>Modulo Fuente de Verificación</h1>
  </div>
</div>

@endsection

@section('content')
<div class="container-fluid">

  <div class="card card" style="background:whitesmoke">
    <div class="card-header">
      <button type="button" class="btn btn-warning" data-toggle="modal" data-target="#modalCreate">Crear Fuente de Verificación <i class="fab fa-artstation"></i></button>
            <!----Modals-->
      <div class="card-tools">
        <button type="button" class="btn btn-tool" data-card-widget="collapse"><i class="fas fa-minus"></i></button>
      </div>
    </div>
    <!-- /tabla -->
    <div class="card-body table-responsive" id="id_table">
        @include('ajax.table-fuenteverificacion')
    </div>
    <!-- /fin tabla-->
    <div class="card-footer">
      Listado Fuente de Verificación.
    </div>
  </div>
</div>
<form id="form_hidden" style="display:none" action="{{route('fuente_verificacion.index')}}" method="GET"><input type="hidden" name="opcion" value="ok"></form>

@include('modals.create-fuenteverificacion')
@include('modals.edit-fuenteverificacion')
@endsection


@section('extra-script')
<!-- DataTables -->
<script src="{{ asset('plugins/datatables/jquery.dataTables.min.js')}}"></script>
<script src="{{ asset('plugins/datatables-bs4/js/dataTables.bootstrap4.min.js')}}"></script>
<!-- SweetAlert2 -->
<script src="{{asset('plugins/sweetalert2/sweetalert2.min.js')}}"></script>

<!--Data tables y script de lineas-->
<script src="{{asset('js/datatable.js')}}"></script>
 <script src="{{asset('js/fuentes.js')}}"></script>

@stop




