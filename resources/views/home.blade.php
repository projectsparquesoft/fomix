@extends('layouts.main')


@section('titulo', "Home")


@section('link')

<div class="row mb-2">
  <div class="col-sm-6">
    <h1>Entradas</h1>
  </div>
  <div class="col-sm-6">
    <ol class="breadcrumb float-sm-right">
      <li class="breadcrumb-item"><a href="#">Home</a></li>
      <li class="breadcrumb-item active">Entradas</li>
    </ol>
  </div>
</div>

@endsection

@section('content')
<div class="container-fluid">

  <div class="card card-default">
    <div class="card-header">
      <h3 class="card-title">Entradas</h3>

      <div class="card-tools">
        <button type="button" class="btn btn-tool" data-card-widget="collapse"><i class="fas fa-minus"></i></button>
      </div>
    </div>
    <!-- /.card-header -->
    <div class="card-body">

      <div class="row">
        <div class="col-lg-3 col-6">
          <!-- small card -->
          <div class="small-box bg-info">
            <div class="inner">
              <h3>10</h3>

              <p>Solicitantes</p>
            </div>
            <div class="icon">
              <i class="fas fa-chalkboard-teacher"></i>
            </div>
            <a href="javascript:void(0)" class="small-box-footer">
              More info <i class="fas fa-arrow-circle-right"></i>
            </a>
          </div>
        </div>
        <!-- ./col -->
        <div class="col-lg-3 col-6">
          <!-- small card -->
          <div class="small-box bg-danger">
            <div class="inner">
              <h3>800</h3>

              <p>Solicitudes</p>
            </div>
            <div class="icon">
              <i class="fas fa-school"></i>
            </div>
            <a href="javascript:void(0)" class="small-box-footer">
              More info <i class="fas fa-arrow-circle-right"></i>
            </a>
          </div>
        </div>
        <!-- ./col -->
        <div class="col-lg-3 col-6">
          <!-- small card -->
          <div class="small-box bg-success">
            <div class="inner">
              <h3>40</h3>

              <p>Proyectos</p>
            </div>
            <div class="icon">
              <i class="fas fa-laptop-code"></i>
            </div>
            <a href="javascript:void(0)" class="small-box-footer">
              More info <i class="fas fa-arrow-circle-right"></i>
            </a>
          </div>
        </div>

      </div>
      <!-- /.row -->

    </div>
    <!-- /.card-body -->
    <div class="card-footer">
      Esto es un texto para el pie de cada card layout.
    </div>
  </div>




</div>
@endsection