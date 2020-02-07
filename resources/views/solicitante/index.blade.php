@extends('layouts.main')


@section('titulo', "Solicitantes")

@section('extra-css')
<!-- DataTables -->
<link rel="stylesheet" href="{{ asset('plugins/datatables-bs4/css/dataTables.bootstrap4.min.css')}}">
<!-- SweetAlert2 -->
<link rel="stylesheet" href="{{ asset('plugins/sweetalert2-theme-bootstrap-4/bootstrap-4.min.css')}}">
@stop

@section('link')

<div class="row mb-2">
  <div class="col-sm-10 text-center ">
    <h3>Modulo del Solicitante</h3>
  </div>
  <div class="col-sm-2">
    <ol class="breadcrumb float-sm-right">
      <li class="breadcrumb-item"><a href="javascript:void(0)">Recepción</a></li>
      <li class="breadcrumb-item active">Solicitante</li>
    </ol>
  </div>
</div>

@endsection

@section('content')
<div class="container-fluid">

  <div class="card card">
    <div class="card-header" style="background:whitesmoke">
      <button type="button" class="btn btn-warning" data-toggle="modal" data-target="#solicitante">Crear Solicitante <i class="fas fa-user-plus"></i></button>
            <!----Modals-->
            <div class="modal fade" id="solicitante">
                <div class="modal-dialog modal-lg">
                  <div class="modal-content">
                    <div class="modal-header" style="background:#fcd846">
                      <h4 class="modal-title">Crear Solicitante  <i class="fas fa-user-plus"></i> </h4>
                      <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                      </button>
                    </div>
                    <div class="modal-body" style="background:whitesmoke">
                        <form id="form" action="{{route('solicitante.store')}}" method="POST">
                            @csrf
                            <div class="form-row">
                                <div class="col-md-6">
                                    <div class="position-relative form-group">
                                        <label for="persona_id"><strong>Tipo de persona*:</strong></label>
                                        <select name="persona_id" id="tipopersona" class="form-control" required>
                                            <option value="">-- Escoger Tipo Persona --</option>
                                            @foreach ($personas as $persona)
                                            <option value="{{$persona->id_persona}}">{{$persona->tipo_persona}}</option>
                                            @endforeach
                                        </select>
                                    </div>
                                </div>

                                <div class="col-md-6">
                                    <div class="position-relative form-group">
                                        <label for="razon"><strong>Razón Social*:</strong></label>
                                        <input name="razon_social" id="razon" placeholder="Razón Social" type="text"
                                            class="form-control" required>
                                    </div>

                                </div>

                                <div class="col-md-6">
                                    <div class="position-relative form-group">
                                        <label for="nid"><strong>NIT / CC*:</strong></label>
                                        <input name="nid" id="nit_cc" placeholder="Nit / CC" type="number" class="form-control"
                                            required>
                                    </div>
                                </div>

                                <div class="col-md-6">
                                    <div class="position-relative form-group">
                                        <label for="departamento"><strong>Departamento*:</strong></label>
                                        <select name="departamento" id="departamento" class="form-control" required>
                                            <option value="">-- Escoger Departamento --</option>
                                            @foreach ($departamentos as $departamento)
                                            <option value="{{$departamento->id_departamento}}">
                                                {{$departamento->nombre_departamento}}</option>
                                            @endforeach
                                        </select>
                                    </div>
                                </div>

                                <div class="col-md-6">
                                    <div class="position-relative form-group">
                                        <label for="municipio"><strong>Municipio*:</strong></label>
                                        <select name="municipio_id" id="municipio" class="form-control" required>
                                            <option value="">-- Escoger Municipio --</option>
                                        </select>
                                    </div>
                                </div>

                                <div class="col-md-6">
                                    <div class="position-relative form-group">
                                        <label for="email"><strong>Correo Electrónico*:</strong></label>
                                        <input name="email" id="email" placeholder="Correo Electrónico" type="email"
                                            class="form-control" required>
                                    </div>
                                </div>

                                <div class="col-md-6">
                                    <div class="position-relative form-group">
                                        <label for="direccion"><strong>Dirección*:</strong></label>
                                        <input name="direccion" id="direccion" placeholder="Dirección" type="text"
                                            class="form-control" required>
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="position-relative form-group">
                                        <label for="telefono"><strong>Telefono:</strong></label>
                                        <input name="telefono" id="telefono" placeholder="Telefono" type="number"
                                            class="form-control">
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="position-relative form-group">
                                        <label for="celular"><strong>Celular:</strong></label>
                                        <input name="celular" id="celular" placeholder="Celular" type="number" class="form-control">
                                    </div>
                                </div>

                                <div class="col-md-6">
                                    <div class="position-relative form-group">
                                        <label for="proponente_id"><strong>Tipo de Proponente*:</strong></label>
                                        <select name="proponente_id" id="proponente" class="form-control" required>
                                            <option value="">-- Escoger Proponente --</option>
                                            @foreach ($proponentes as $proponente)
                                            <option value="{{$proponente->id_proponente}}">{{$proponente->nombre_proponente}}
                                            </option>
                                            @endforeach
                                        </select>
                                    </div>
                                </div>

                                <div class="col-md-6">
                                    <div class="position-relative form-group">
                                        <label for="representante_legal"><strong>Representante Legal*:</strong></label>
                                        <input name="representante_legal" id="representante_legal" placeholder="Representante Legal"
                                            type="text" class="form-control" required>
                                    </div>
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
    <!-- /.card-header -->
    <div class="card-body table-responsive" id="section_table">

        <table id="tabla" class="table table-bordered table-hover text-nowrap">
            <thead class="thead-light">
                <tr>
                    <th>#</th>
                    <th>Solicitante</th>
                    <th>Celular</th>
                    <th>Representante Legal</th>
                    <th>Acciones</th>
                </tr>
            </thead>
            <tbody>

                @foreach($solicitantes as $solicitante)
                <tr>
                    <th scope="row">{{$loop->iteration}}</th>
                    <td>{{$solicitante->razon_social}}</td>
                    <td>{{$solicitante->celular}}</td>
                    <td>{{$solicitante->representante_legal}}</td>
                    <td>
                        <a href="" class="btn btn-warning btn-md ">  <i class="fas fa-pencil-alt"></i>Editar</a>
                        <a href="" class="btn btn-dark btn-md disabled color-palette"> <i class="fas fa-folder"></i>Detalle</a>

                     </td>
                </tr>
                @endforeach
            </tbody>

        </table>
    </div>
    <!-- /.card-body -->
    <div class="card-footer">
      Listado de solicitantes.

    </div>
  </div>
</div>

<form id="form_tabla" style="display:none" action="{{route('solicitante.index')}}" method="GET"><input type="hidden" name="opcion" value="ok"></form>
@endsection

@section('extra-script')

<!-- DataTables -->
<script src="{{ asset('plugins/datatables/jquery.dataTables.min.js')}}"></script>
<script src="{{ asset('plugins/datatables-bs4/js/dataTables.bootstrap4.min.js')}}"></script>
<!-- SweetAlert2 -->
<script src="{{asset('plugins/sweetalert2/sweetalert2.min.js')}}"></script>
<script src="{{asset('js/datatable.js')}}"></script>
<script src="{{asset('js/solicitante.js')}}"></script>


@stop
