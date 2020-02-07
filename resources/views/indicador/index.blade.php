@extends('layouts.main')


@section('titulo', "Indicadores")

@section('extra-css')
<!-- DataTables -->
<link rel="stylesheet" href="{{ asset('plugins/datatables-bs4/css/dataTables.bootstrap4.min.css')}}">
<!-- SweetAlert2 -->
<link rel="stylesheet" href="{{ asset('plugins/sweetalert2-theme-bootstrap-4/bootstrap-4.min.css')}}">
@stop

@section('link')

<div class="row mb-2">
  <div class="col-sm-12 text-center">
    <h1>Modulo de Indicadores</h1>
  </div>
</div>

@endsection

@section('content')
<div class="container-fluid">

  <div class="card card" style="background:whitesmoke">
    <div class="card-header">
      <button type="button" class="btn btn-warning" data-toggle="modal" data-target="#indicadores">Crear Indicadores <i class="fas fa-user-plus"></i></button>
            <!----Modals-->
            <div class="modal fade" id="indicadores">
                <div class="modal-dialog modal-lg">
                  <div class="modal-content">
                    <div class="modal-header" style="background:#fcd846">
                      <h4 class="modal-title">Crear Indicadores  <i class="fas fa-user-plus"></i></h4>
                      <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                      </button>
                    </div>
                    <div class="modal-body" style="background:whitesmoke">
                        <form id="form_indicador" action="{{route('indicadores.store')}}" method="POST">
                            @csrf
                            <div class="form-row">
                                <div class="col-md-12">
                                    <label for="">Nombre del Indicador:</label>
                                    <input type="text" name="nombre_indicador" class="form-control">
                                </div>
                            </div>
                        </form>
                    </div>
                    <div class="modal-footer justify-content-between">
                      <button type="button" class="btn btn-dark" data-dismiss="modal">Cerrar <i class="fas fa-times-circle"></i></button>
                      <button id="btnsave" type="button" class="btn btn-dark">Guardar <i class="fas fa-save"></i></button>
                    </div>
                  </div>
                </div>
              </div>


      <div class="card-tools">
        <button type="button" class="btn btn-tool" data-card-widget="collapse"><i class="fas fa-minus"></i></button>
      </div>
    </div>
    <!-- /tabla -->
    <div class="card-body table-responsive" id="id_tabla_indicadores">

        <table id="tabla" class="table table-bordered table-hover text-nowrap">
            <thead class="thead-light">
                <tr>
                    <th>Nombre del Indicador</th>
                    <th>Estado</th>
                    <th>Acciones</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($indicadores as $indicador)
                    <tr>
                    <td>{{$indicador->nombre_indicador}}</td>
                    <td>{{$indicador->status}}</td>
                    <td>
                        <a href="" class="btn btn-warning btn-md">  <i class="fas fa-pencil-alt"></i>Editar</a>
                        <a href="" class="btn btn-dark btn-md disabled color-palette"> <i class="fas fa-folder"></i>Detalle</a>
                    </td>
                    </tr>
                @endforeach
            </tbody>

        </table>
    </div>
    <!-- /fin tabla-->
    <div class="card-footer">
      Listado de los Indicadores.
    </div>
  </div>
</div>
<form id="form_hidden_indicadores" style="display:none" action="{{route('indicadores.index')}}" method="GET"><input type="hidden" name="opcion" value="ok"></form>
@endsection

@section('extra-script')
<!-- DataTables -->
<script src="{{ asset('plugins/datatables/jquery.dataTables.min.js')}}"></script>
<script src="{{ asset('plugins/datatables-bs4/js/dataTables.bootstrap4.min.js')}}"></script>
<!-- SweetAlert2 -->
<script src="{{asset('plugins/sweetalert2/sweetalert2.min.js')}}"></script>
<!--Script Datatables--->
<script src="{{asset('js/datatable.js')}}"></script>
<script src="{{asset('js/indicador.js')}}"></script>
@stop


