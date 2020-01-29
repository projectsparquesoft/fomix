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
            <table class="table table-light">
                <thead class="thead-light">
                    <tr>
                        <th>Nombre de la Dependencia</th>
                        <th>Descripción</th>

                    </tr>
                </thead>
                <tbody>
                   @foreach ($dependencias as $dependencia)
                   <tr>
                       <td>
                           {{ $dependencia->nombre_dependencia }}
                       </td>
                       <td>
                        {{ $dependencia->descripcion}}
                       </td>
                   </tr>

                   @endforeach
                </tbody>
            </table>

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
