@extends('layouts.main')


@section('titulo', "Proponentes")

@section('extra-css')
<!-- DataTables -->
<link rel="stylesheet" href="{{ asset('plugins/datatables-bs4/css/dataTables.bootstrap4.min.css')}}">
<!-- SweetAlert2 -->
<link rel="stylesheet" href="{{ asset('plugins/sweetalert2-theme-bootstrap-4/bootstrap-4.min.css')}}">
@stop

@section('link')

<div class="row mb-2">
    <div class="col-sm-12 text-center ">
      <h3>Modulo Proponentes</h3>
    </div>
  </div>

@endsection

@section('content')
<div class="container-fluid">

  <div class="card card">
    <div class="card-header" style="background:whitesmoke">
      <button type="button" class="btn btn-warning" data-toggle="modal" data-target="#proponentes">Crear Proponentes  <i class="fas fa-user-plus"></i></button>
            <!----Modals-->
            <div class="modal fade" id="proponentes" >
                <div class="modal-dialog modal-lg">
                  <div class="modal-content">
                    <div class="modal-header" style="background:#fcd846">
                      <h4 class="modal-title">Crear Proponentes  <i class="fas fa-user-plus"></i></h4>
                      <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                      </button>
                    </div>
                    <div class="modal-body" style="background:whitesmoke">
                        <form id="form_proponente" action="{{route('proponente.store')}}" method="POST">
                            @csrf
                            <div class="form-row">
                                <div class="col-md-12">
                                    <label for="">Nombre del proponente:</label>
                                    <input type="text" name="nombre_proponente" class="form-control">
                                </div>
                            </div>
                        </form>
                    </div>
                    <div class="modal-footer justify-content-between">
                      <button type="button" class="btn btn-dark" data-dismiss="modal">Cerrar <i class="fas fa-times-circle"></i></button>
                      <button id="btnsave"  type="button" class="btn btn-dark">Guardar   <i class="fas fa-save"></i></button>
                    </div>
                  </div>
                </div>
              </div>


      <div class="card-tools">
        <button type="button" class="btn btn-tool" data-card-widget="collapse"><i class="fas fa-minus"></i></button>
      </div>
    </div>
    <!-- /tabla -->
    <div class="card-body table-responsive" id="id_tabla_proponente">

        <table id="tabla" class="table table-bordered table-hover text-nowrap">
            <thead class="thead-light">
                <tr>
                    <th>#</th>
                    <th>Nombre del proponente</th>
                    <th>Acciones</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($proponentes as $proponente)
                    <tr>
                    <th scope="row">{{$loop->iteration}}</th>
                    <td>{{$proponente->nombre_proponente}}</td>
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
      Listado de los proponentes.
    </div>
  </div>
</div>
<form id="form_hidden_proponente" style="display:none" action="{{route('proponente.index')}}" method="GET"><input type="hidden" name="opcion" value="ok"></form>

@endsection

@section('extra-script')

<!-- DataTables -->
<script src="{{ asset('plugins/datatables/jquery.dataTables.min.js')}}"></script>
<script src="{{ asset('plugins/datatables-bs4/js/dataTables.bootstrap4.min.js')}}"></script>
<!-- SweetAlert2 -->
<script src="{{asset('plugins/sweetalert2/sweetalert2.min.js')}}"></script>

<!---Data table-->
<script src="{{asset('js/datatable.js')}}"></script>
<script src="{{asset('js/proponente.js')}}"></script>




@stop

