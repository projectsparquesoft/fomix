@extends('layouts.main')


@section('titulo', "Home")

@section('title_module')

<div class="page-title-icon">
    <i class="pe-7s-graph text-success">
    </i>
</div>
<div>Home
    <div class="page-title-subheading">Ejemplos de uso de imagenes y tablas en Laravel + AJAX.
    </div>
</div>
@endsection

@section('link_module')
<li class="nav-item">
    <a role="tab" class="nav-link active" id="tab-0" data-toggle="tab" href="#tab-content-0">
        <span>Items</span>
    </a>
</li>

@endsection

@section('content_module')
<div class="tab-pane tabs-animation fade show active" id="tab-content-0" role="tabpanel">
    <div class="row">
     
        <div class="col-md-4">
    
            <div class="main-card mb-3 card">
                <div class="card-body">
                    <h5 class="card-title">Ejemplo # 1</h5>
                    <div class="card-shadow-success border mb-3 card card-body border-success">
                        <h5 class="card-title">Crop And Upload Image</h5>Cortar y cargar imagen, util para img de perfil.
                    </div>
                </div>
            </div>

        </div>

        <div class="col-md-4">
    
            <div class="main-card mb-3 card">
                <div class="card-body">
                    <h5 class="card-title">Ejemplo #2</h5>
                    <div class="card-shadow-success border mb-3 card card-body border-success">
                        <h5 class="card-title">Store Image BLOB</h5>Guardar Imagen con campo Tipo BLOB
                    </div>
                </div>
            </div>

        </div>

        <div class="col-md-4">
    
            <div class="main-card mb-3 card">
                <div class="card-body">
                    <h5 class="card-title">Ejemplo #3</h5>
                    <div class="card-shadow-success border mb-3 card card-body border-success">
                        <h5 class="card-title">Table SimplePagination Ajax</h5>Paginar datos de una tabla con simplepagination usando AJAX 
                    </div>
                </div>
            </div>

        </div>

        <div class="col-md-4">
    
            <div class="main-card mb-3 card">
                <div class="card-body">
                    <h5 class="card-title">Ejemplo #4</h5>
                    <div class="card-shadow-success border mb-3 card card-body border-success">
                        <h5 class="card-title">AutoComplete TextBox Multiple</h5>Auto Completar Con Plugin TokenFields + JQueryUI Con AJAX 
                    </div>
                </div>
            </div>

        </div>




    </div>

</div>

@endsection


