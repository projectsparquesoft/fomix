@extends('layouts.main')


@section('titulo', "Listado de Solicitantes")

@section('css-extra')
<link rel="stylesheet" href="{{asset('plugins/sweetalert/sweetalert2.min.css')}}">
@endsection

@section('title_module')

<div class="page-title-icon">
    <i class="pe-7s-graph text-success">
    </i>
</div>
<div>Solicitante
    <div class="page-title-subheading">Modulo de Solicitantes y Solicitudes.
    </div>
</div>
@endsection

@section('link_module')
<li class="nav-item">
    <a role="tab" class="nav-link active" id="tab-0" data-toggle="tab" href="#tab-content-0">
        <span>Listado de Solicitantes</span>
    </a>
</li>
<li class="nav-item">
    <a role="tab" class="nav-link" id="tab-1" data-toggle="tab" href="#tab-content-1">
        <span>Registro del Solicitante</span>
    </a>
</li>


@endsection

@section('content_module')

<div class="tab-pane tabs-animation fade show active" id="tab-content-0" role="tabpanel">

    <div class="main-card mb-3 card">
        <div class="card-body">
            <div class="col-lg-12">
                <div class="main-card mb-3 card">
                    <div class="card-body"><h5 class="card-title">Listado de Solicitantes</h5>

                        <div class="col-md-6">
                        <form id="form_search" action = "{{route('solicitante.index')}}" method="GET">
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
                            @include('ajax.table-solicitantes')
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

</div>


<div class="tab-pane tabs-animation fade" id="tab-content-1" role="tabpanel">

    <div class="main-card mb-3 card">
        <div class="card-body">
            <form id="form" action="{{route('solicitante.store')}}" method="POST">

                @csrf

                <div class="form-row">
                    <div class="col-md-4">
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

                    <div class="col-md-4">
                        <div class="position-relative form-group">
                            <label for="razon"><strong>Razón Social*:</strong></label>
                            <input name="razon_social" id="razon" placeholder="Razón Social" type="text"
                                class="form-control" required>
                        </div>

                    </div>

                    <div class="col-md-4">
                        <div class="position-relative form-group">
                            <label for="nid"><strong>NIT / CC*:</strong></label>
                            <input name="nid" id="nit_cc" placeholder="Nit / CC" type="number" class="form-control"
                                required>
                        </div>
                    </div>

                    <div class="col-md-4">
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

                    <div class="col-md-4">
                        <div class="position-relative form-group">
                            <label for="municipio"><strong>Municipio*:</strong></label>
                            <select name="municipio_id" id="municipio" class="form-control" required>
                                <option value="">-- Escoger Municipio --</option>
                            </select>
                        </div>
                    </div>

                    <div class="col-md-4">
                        <div class="position-relative form-group">
                            <label for="email"><strong>Correo Electrónico*:</strong></label>
                            <input name="email" id="email" placeholder="Correo Electrónico" type="email"
                                class="form-control" required>
                        </div>
                    </div>

                    <div class="col-md-4">
                        <div class="position-relative form-group">
                            <label for="direccion"><strong>Dirección*:</strong></label>
                            <input name="direccion" id="direccion" placeholder="Dirección" type="text"
                                class="form-control" required>
                        </div>
                    </div>
                    <div class="col-md-4">
                        <div class="position-relative form-group">
                            <label for="telefono"><strong>Telefono:</strong></label>
                            <input name="telefono" id="telefono" placeholder="Telefono" type="number"
                                class="form-control">
                        </div>
                    </div>
                    <div class="col-md-4">
                        <div class="position-relative form-group">
                            <label for="celular"><strong>Celular:</strong></label>
                            <input name="celular" id="celular" placeholder="Celular" type="number" class="form-control">
                        </div>
                    </div>

                    <div class="col-md-4">
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

                    <div class="col-md-8">
                        <div class="position-relative form-group">
                            <label for="representante_legal"><strong>Representante Legal*:</strong></label>
                            <input name="representante_legal" id="representante_legal" placeholder="Representante Legal"
                                type="text" class="form-control" required>
                        </div>
                    </div>
                </div>
                <button id="btnsave" class="mt-2 btn btn-primary">GUARDAR</button>
            </form>
        </div>
    </div>

</div>

@endsection


@section('scripts-extra')
<script src="{{asset('plugins/sweetalert/sweetalert2.min.js')}}"></script>
<script src="{{asset('js/solicitante.js')}}"></script>
@endsection
