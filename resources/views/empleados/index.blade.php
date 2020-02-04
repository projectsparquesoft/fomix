@extends('layouts.main')


@section('titulo', "Creación de Empleados")

@section('css-extra')
    <link rel="stylesheet" href="{{asset('plugins/sweetalert/sweetalert2.min.css')}}">
@endsection

@section('title_module')

<div class="page-title-icon">
    <i class="pe-7s-graph text-success">
    </i>
</div>
<div>Empleados
    <div class="page-title-subheading">Modulo de Creación de Empleados y Listado.
    </div>
</div>
@endsection

@section('link_module')
<li class="nav-item">
    <a role="tab" class="nav-link active" id="tab-0" data-toggle="tab" href="#tab-content-0">
        <span>Listado de Empleados</span>
    </a>
</li>
<li class="nav-item">
    <a role="tab" class="nav-link" id="tab-1" data-toggle="tab" href="#tab-content-1">
        <span>Creación de Empleados</span>
    </a>
</li>


@endsection

@section('content_module')

<!---TABLA DE LAS empleados--->
<div class="tab-pane tabs-animation fade {{!Route::is('empleados.index') ?: 'show active'}}" id="tab-content-0" role="tabpanel">

    <div class="main-card mb-3 card">
        <div class="card-body">
            <div class="col-lg-12">
                <div class="main-card mb-3 card">
                    <div class="card-body"><h5 class="card-title">Listado de Empleados</h5>
                        <div class="col">
                            <button id="btnlistar" class="btn btn-primary" style="float:right;">Listar Nuevamente</button>
                        </div>
                        <div class="col-md-6">
                        <form id="form_search" action = "{{route('empleados.index')}}" method="GET">
                                @csrf
                                <div class="input-group"><input type="text" class="form-control" name="text_search" id="text_search">
                                    <div class="input-group-append">
                                        <button class="btn btn-secondary" name="search" id="search"><li class="pe-7s-search"></li></button>
                                    </div>
                                </div>
                            </form>
                        </div>
                    <br>
                        <div class="table-responsive" id="table">
                            @include('ajax.table-empleados')
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<!---FORMULARIO DE CREACION DE empleados--->
<div class="tab-pane tabs-animation fade {{!Route::is('empleados.create') ?: 'show active'}}" id="tab-content-1" role="tabpanel">
    <div class="main-card mb-3 card">
        <div class="card-body">
            <form id="form_empleados" action="{{route('empleados.store')}}" method="POST">
                @csrf
                <h4 class="card-title">Registro de Empleados</h4>
                <div class="form-row">
                    <div class="col-md-4">
                        <label for="nid">Nit/Cedula:</label>
                        <input type="text" class="form-control" name="nid" required>
                    </div>
                    <div class="col-md-4">
                        <label for="nombre">Nombres:</label>
                        <input type="text" class="form-control" name="nombre" required>
                    </div>
                    <div class="col-md-4">
                        <label for="apellido">Apellidos:</label>
                        <input type="text" class="form-control" name="apellido" required>
                    </div>
                    <div class="col-md-4">
                        <label for="celular">Celular:</label>
                        <input type="text" class="form-control" name="celular" required>
                    </div>
                    <div class="col-md-4">
                        <label for="email">Correo Electrónico:</label>
                        <input type="email" class="form-control" name="email" required>
                    </div>
                    <div class="col-md-4">
                        <label for="is_jefe">Jefe:</label>
                        <div class="position-relative form-check"><label class="form-check-label"><input name="is_jefe" type="radio" class="form-check-input" value="1"> Si </label></div>
                        <div class="position-relative form-check"><label class="form-check-label"><input name="is_jefe" type="radio" class="form-check-input" value="0"> No </label></div>
                    </div>
                    <div class="col-md-4">
                        <button id="botonsave" class="mt-2 btn btn-primary">GUARDAR</button>
                    </div>
                </div>
            </form>
        </div>
    </div>

</div>


@endsection


@section('scripts-extra')
    <script src="{{asset('plugins/sweetalert/sweetalert2.min.js')}}"></script>
    <script src="{{asset('js/empleados.js')}}"></script>



@endsection
