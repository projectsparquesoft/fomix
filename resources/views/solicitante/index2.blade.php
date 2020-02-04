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
  <div class="col-sm-6">
    <h1>Solicitantes</h1>
  </div>
  <div class="col-sm-6">
    <ol class="breadcrumb float-sm-right">
      <li class="breadcrumb-item"><a href="javascript:void(0)">Recepcion</a></li>
      <li class="breadcrumb-item active">Solicitante</li>
    </ol>
  </div>
</div>

@endsection

@section('content')
<div class="container-fluid">

  <div class="card card-default">
    <div class="card-header">
      <h3 class="card-title">Solcitante</h3>

      <div class="card-tools">
        <button type="button" class="btn btn-tool" data-card-widget="collapse"><i class="fas fa-minus"></i></button>
      </div>
    </div>
    <!-- /.card-header -->
    <div class="card-body table-responsive">

        <table id="tabla" class="table table-bordered table-hover text-nowrap">
            <thead>
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
                        <a href="{{route('solicitante.edit', $solicitante->id_solicitante)}}" class="btn btn-block btn-outline-success btn-sm">Editar</a>
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
@endsection

@section('extra-script')

<!-- DataTables -->
<script src="{{ asset('plugins/datatables/jquery.dataTables.min.js')}}"></script>
<script src="{{ asset('plugins/datatables-bs4/js/dataTables.bootstrap4.min.js')}}"></script>
<!-- SweetAlert2 -->
<script src="{{asset('plugins/sweetalert2/sweetalert2.min.js')}}"></script>


<script>
   $(function () {
      $('#tabla').DataTable({
         responsive: true,
         language: {
            "url": "https://cdn.datatables.net/plug-ins/1.10.19/i18n/Spanish.json"
         }
      })
   })
</script>


@stop