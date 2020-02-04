@extends('layouts.main')


@section('titulo', "Creacion de dependencias ")

@section('css-extra')
    <link rel="stylesheet" href="{{asset('plugins/sweetalert/sweetalert2.min.css')}}">
@endsection

@section('title_module')

<div class="page-title-icon">
    <i class="pe-7s-graph text-success">
    </i>
</div>
<div>Dependencias
    <div class="page-title-subheading">Modulo de Creación de Dependencias y Listado.
    </div>
</div>
@endsection

@section('link_module')
<li class="nav-item">
    <a role="tab" class="nav-link active" id="tab-0" data-toggle="tab" href="#tab-content-0">
        <span>Listado de Dependencias</span>
    </a>
</li>
<li class="nav-item">
    <a role="tab" class="nav-link" id="tab-1" data-toggle="tab" href="#tab-content-1">
        <span>Creación de Depedencias</span>
    </a>
</li>


@endsection

@section('content_module')

<!---TABLA DE LAS DEPENDENCIAS--->
<div class="tab-pane tabs-animation fade {{!Route::is('dependencia.index') ?: 'show active'}}" id="tab-content-0" role="tabpanel">

    <div class="main-card mb-3 card">
        <div class="card-body">
            <div class="col-lg-12">
                <div class="main-card mb-3 card">
                    <div class="card-body"><h5 class="card-title">Listado de las Dependencias</h5>
                        <div class="col">
                            <button id="btnlistar" class="btn btn-primary" style="float:right;">Listar Nuevamente</button>

                        </div>

                        <!----BOTON DE BUSQUEDA--->
                        <div class="col-md-6">
                            <form id="form_search" action = "{{route('dependencia.index')}}" method="GET">
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
                            @include('ajax.table-dependencias')
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>


</div>
<!---FORMULARIO DE CREACION DE DEPENDENCIAS--->
<div class="tab-pane tabs-animation fade {{!Route::is('dependencia.create') ?: 'show active'}}" id="tab-content-1" role="tabpanel">
    <div class="main-card mb-3 card">
        <div class="card-body">
            <form id="form_dependencia" action="{{route('dependencia.store')}}" method="POST">
                @csrf
                <h4 class="card-title">Registro de dependencias</h4>
                    <div class="form-row">
                        <div class="col-md-4">
                            <label for="nombre">Nombre de la dependencia</label>
                            <input type="text" class="form-control" name="nombre_dependencia" required>
                        </div>
                        <div class="col-md-4">
                            <label for="descripcion">Descripción</label>
                            <textarea name="descripcion"  placeholder="descripcion" class="form-control"></textarea>
                        </div>
                        <div class="col-md-4">
                            <button id="btnsave" class="mt-5 btn btn-primary">GUARDAR</button>
                        </div>
                    </div>
            </form>
        </div>
    </div>

</div>

@endsection


@section('scripts-extra')
    <script src="{{asset('plugins/sweetalert/sweetalert2.min.js')}}"></script>
    <script src="{{asset('js/dependencia.js')}}"></script>

@endsection

