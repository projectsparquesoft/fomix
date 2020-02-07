@extends('layouts.main')


@section('titulo', "Tipo de población")

@section('extra-css')
<!-- DataTables -->
<link rel="stylesheet" href="{{ asset('plugins/datatables-bs4/css/dataTables.bootstrap4.min.css')}}">
<!-- SweetAlert2 -->
<link rel="stylesheet" href="{{ asset('plugins/sweetalert2-theme-bootstrap-4/bootstrap-4.min.css')}}">
@stop

@section('link')

<div class="row mb-2">
  <div class="col-sm-12 text-center">
    <h1> Modulo Tipo de Población</h1>
  </div>
</div>

@endsection

@section('content')
<div class="container-fluid">

  <div class="card card" style="background:whitesmoke">
    <div class="card-header">
      <button type="button" class="btn btn-warning" data-toggle="modal" data-target="#proponentes">Crear Tipo de población <i class="fas fa-user-plus"></i></button>
            <!----Modals-->
            <div class="modal fade" id="proponentes">
                <div class="modal-dialog modal-lg">
                  <div class="modal-content">
                    <div class="modal-header" style="background:#fcd846">
                      <h4 class="modal-title">Crear Tipo de población <i class="fas fa-user-plus"></i></h4>
                      <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                      </button>
                    </div>
                    <div class="modal-body"style="background:whitesmoke">
                        <form id="form_tipopoblacion" action="{{route('tipopoblacion.store')}}" method="POST">
                            @csrf
                            <div class="form-row">
                                <div class="col-md-12">
                                    <label for="">Nombre del Tipo de población:</label>
                                    <input type="text" name="tipo_poblacion" class="form-control">
                                </div>
                            </div>
                        </form>
                    </div>
                    <div class="modal-footer justify-content-between">
                      <button type="button" class="btn btn-dark" data-dismiss="modal">Cerrar</button>
                      <button id="botontpoblacion"  type="button" class="btn btn-dark">Guardar <i class="fas fa-save"></i></button>
                    </div>
                  </div>
                </div>
              </div>


      <div class="card-tools">
        <button type="button" class="btn btn-tool" data-card-widget="collapse"><i class="fas fa-minus"></i></button>
      </div>
    </div>
    <!-- /tabla -->
    <div class="card-body table-responsive" id="id_table_tipopoblacion">
        <table id="tabla" class="table table-bordered table-hover">
            <thead class="thead-light">
                <tr>
                    <th>Tipo de Población</th>
                    <th>Estado</th>
                    <th>Accion</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($tipopoblaciones as $tipopoblacion)
                    <tr>
                    <td>{{$tipopoblacion->tipo_poblacion}}</td>
                    <td>{{$tipopoblacion->status}}</td>
                    <td class="text-center">
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
      Lista de los tipos de proponentes.
    </div>
  </div>
</div>
<form id="form_hidden_tipopoblacion" style="display:none" action="{{route('tipopoblacion.index')}}" method="GET"><input type="hidden" name="opcion" value="ok"></form>

@endsection

@section('extra-script')

<!-- DataTables -->
<script src="{{ asset('plugins/datatables/jquery.dataTables.min.js')}}"></script>
<script src="{{ asset('plugins/datatables-bs4/js/dataTables.bootstrap4.min.js')}}"></script>
<!-- SweetAlert2 -->
<script src="{{asset('plugins/sweetalert2/sweetalert2.min.js')}}"></script>
<!--Script Datatables y js de tipopoblacion--->
<script src="{{asset('js/datatable.js')}}"></script>
<script src="{{asset('js/tipodepoblacion.js')}}"></script>


@stop

