@extends('layouts.main')


@section('titulo', "Solicitudes")

@section('extra-css')
<!-- DataTables -->
<link rel="stylesheet" href="{{ asset('plugins/datatables-bs4/css/dataTables.bootstrap4.min.css')}}">
<!-- SweetAlert2 -->
<link rel="stylesheet" href="{{ asset('plugins/sweetalert2-theme-bootstrap-4/bootstrap-4.min.css')}}">
 <!--select-->
 <link rel="stylesheet" href="{{asset('plugins/select2/css/select2.min.css')}}">
 <link rel="stylesheet" href="{{asset('plugins/select2-bootstrap4-theme/select2-bootstrap4.min.css')}}">
@stop

@section('link')

<div class="row mb-2">
  <div class="col-sm-12 text-center">
    <h1>Modulo de Solicitudes</h1>
  </div>
</div>

@endsection

@section('content')
<div class="container-fluid">

  <div class="card card" style="background:whitesmoke">
    <div class="card-header">
      <button type="button" class="btn btn-warning" data-toggle="modal" data-target="#modalCreate">Añadir Solicitud <i class="fas fa-user-plus"></i></button>
      <button type="button" class="btn btn-warning" data-toggle="modal" data-target="#modalAddLineas">Añadir Líneas <i class="fas fa-user-plus"></i></button>
      <button type="button" class="btn btn-warning" data-toggle="modal" data-target="#modalFormato">Añadir Formato <i class="fas fa-user-plus"></i></button>
      <button type="button" class="btn btn-warning" data-toggle="modal" data-target="#modalPoblacion">Añadir Población <i class="fas fa-user-plus"></i></button>



            <!----Modals-->
      <div class="card-tools">
        <button type="button" class="btn btn-tool" data-card-widget="collapse"><i class="fas fa-minus"></i></button>
      </div>
    </div>
    <!-- /tabla -->
    <div class="card-body table-responsive" id="id_table">
        @include('ajax.table-solicitudes')
    </div>
    <!-- /fin tabla-->
    <div class="card-footer">
      Listado de los solicitudes.
    </div>
  </div>
</div>
<form id="form_hidden" style="display:none" action="{{route('solicitud.index')}}" method="GET"><input type="hidden" name="opcion" value="ok"></form>

<form id="form_create" action="{{route('solicitud.store')}}" method="POST" onkeypress="return disableEnterKey(event);" enctype="multipart/form-data">
  @csrf

@include('modals.create-solicitudes')
@include('modals.add-lineas')
@include('modals.add-formato')
@include('modals.add-poblacion')

</form>

 {{--@include('modals.edit-solicitante')--}}
@endsection


@section('extra-script')
<!-- DataTables -->
<script src="{{ asset('plugins/datatables/jquery.dataTables.min.js')}}"></script>
<script src="{{ asset('plugins/datatables-bs4/js/dataTables.bootstrap4.min.js')}}"></script>
<!-- SweetAlert2 -->
<script src="{{asset('plugins/sweetalert2/sweetalert2.min.js')}}"></script>

<!---select-->
<script src="{{asset('plugins/select2/js/select2.full.min.js')}}"></script>


<!--Data tables y script de lineas-->
<script src="{{asset('js/datatable.js')}}"></script>
<script src="{{asset('js/solicitud.js')}}"></script>

@stop


