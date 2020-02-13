@extends('layouts.main')


@section('titulo', "Solicitud")

@section('extra-css')
    <!--select-->
    <link rel="stylesheet" href="{{asset('plugins/select2/css/select2.min.css')}}">
    <link rel="stylesheet" href="{{asset('plugins/select2-bootstrap4-theme/select2-bootstrap4.min.css')}}">
    <!-- SweetAlert2 -->
    <link rel="stylesheet" href="{{ asset('plugins/sweetalert2-theme-bootstrap-4/bootstrap-4.min.css')}}">
@endsection

@section('link')
<div class="row mb-2">
    <div class="col-sm-6">
      <h1>Solicitudes</h1>
    </div>
</div>
@endsection


@section('content')
<div class="container-fluid">

<!--solicitud--->
@include('ajax.table-solicitudes')

<!---lineas---->
<div class="card card-default collapsed-card">
    <div class="card-header">
        <h3 class="card-title">Lineas</h3>
            <!---boton-min-max-->
            <div class="card-tools">
                <button type="button" class="btn btn-tool" data-card-widget="collapse"><i class="fas fa-minus"></i></button>
            </div>
    </div>
        <div class="card-body">
            <div class="row">
                <div class="col-md-12">
                    <div class="form-group">
                    <label>Líneas</label>
                        <select name="id_linea" class="form-control select2bs4" style="width: 100%;" multiple data-placeholder="Escoger Líneas">
                            @foreach ($lineas as $linea)
                                <option  value="{{$linea->id_linea}}">{{$linea->descripcion}}</option>
                            @endforeach
                        </select>
                    </div>
                </div>
            </div>
        </div>
        <!-- footer-body -->
        <div class="card-footer">
        Listado de Líneas.
        </div>
</div>

<!---Proyectos--->
<div class="card card-default collapsed-card">
    <div class="card-header">
        <h3 class="card-title">Formato</h3>
            <!---boton-min-max-->
            <div class="card-tools">
                <button type="button" class="btn btn-tool" data-card-widget="collapse"><i class="fas fa-minus"></i></button>
            </div>
    </div>
 <div class="card-body">
    <div class="row">
        <form action="{{route('proyecto.store')}}" method="POST" id="form_proyecto">
        @csrf
            <div class="form-row">
                <div class="col-md-6">
                    <div class="position-relative form-group">
                        <label for="descripcion" ><strong>Descripción del proyecto:</strong></label>
                        <textarea class="form-control" name="descripcion" rows="5" cols="15" placeholder="(Describa en que consiste el proyecto, máximo 10 lineas)" ></textarea>
                    </div>
                </div>
                <div class="col-md-6">
                    <div class="position-relative form-group">
                        <label for="antecedente" ><strong>Antecedentes y trayectoria del proyecto:</strong></label>
                        <textarea class="form-control" name="antecedente" rows="5" cols="15" placeholder="(Indique años de realización, número de ediciones, resultados cuantitativos y cualitativos de las fases anteriores del proyecto)" ></textarea>
                    </div>
                </div>
                <div class="col-md-6">
                    <div class="position-relative form-group">
                        <label for="justificacion" ><strong>Justificación del proyecto:</strong></label>
                        <textarea class="form-control" name="justificacion" rows="5" cols="15" placeholder="(Argumente por qué es importante la realización del proyecto y la relación del proyecto con el plan de desarrollo departamental)" ></textarea>
                    </div>
                </div>
                <div class="col-md-6">
                    <div class="position-relative form-group">
                        <label for="metodologia" ><strong>Metodología:</strong></label>
                        <textarea class="form-control" name="metodologia" rows="5" cols="15" placeholder="(Señale en qué consiste el proyecto, sus diferentes etapas o fases, cómo va a ser organizado y qué actividades de seguimiento y evaluación se adelantarán de acuerdo con los objetivos y metas propuestos, porque es importante)" ></textarea>
                    </div>
                </div>
                <div class="col-md-6">
                    <div class="position-relative form-group">
                        <label for="objetivo_general" ><strong>Objetivo General:</strong></label>
                        <textarea class="form-control" name="objetivo_general" rows="5" cols="15" placeholder="(Describa que se quiere lograr con el proyecto, es decir, cual es el propósito que se pretende alcanzar, debe estar relacionado con la justificación)" ></textarea>
                    </div>
                </div>
                <div class="col-md-6">
                    <div class="position-relative form-group">
                        <label for="objetivo_especifico" ><strong>Objetivos Especificos:</strong></label>
                        <textarea class="form-control" name="objetivo_especifico" rows="5" cols="15" placeholder="(Corresponde a los propósitos más puntuales que contribuyan a lograr el objetivo general, señale tres objetivos específicos)" ></textarea>
                    </div>
                </div>
                <div class="col-md-12">
                    <div class="position-relative form-group">
                        <center><label for="metas"><strong >METAS (RESULTADOS O PRODUCTOS ESPERADOS DEL PROYECTO):</strong></label></center>
                        <textarea class="form-control" name="metas" rows="5" cols="15" placeholder="(Estas deben ser cuantitativas (medibles); Son el resultado de lo que se quiere lograr y están relacionados con los objetivos formulados). Se estructuran así:
                                    1.Proceso o acción [verbo en infinitivo medible]
                                    2.Cantidad
                                    3.Descripción del proceso)" ></textarea>
                    </div>
                        <input type="hidden" name="solicitud_id" value="1">
                </div>
                <div class="col-md-12">
                        <button id="boton" class="btn btn-primary" style="float:right">Guadar</button>
                </div>
            </div>
        </form>
    </div>
  </div>
  <!-- footer-body -->
    <div class="card-footer">
        Listado de Formato.
    </div>
</div>

<!--Anexos---->
<div class="card card-default collapsed-card">
    <div class="card-header">
      <h3 class="card-title">Anexos</h3>
      <!---boton-min-max-->
      <div class="card-tools">
        <button type="button" class="btn btn-tool" data-card-widget="collapse"><i class="fas fa-minus"></i></button>
      </div>
    </div>
    <div class="card-body">
        <div style="float:right">
        <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#anexos" style="float:right">Añadir Más</button>
        </div>
        <br><br>
        <div class="row">
            <div class="col-md-4">
                <label for="">Cedula:</label>
                <input type="file" class="form-control" name="">
            </div>
            <div class="col-md-4">
                <label for="">Fotocopia Rut:</label>
                <input type="file" class="form-control" name="">
            </div>
            <div class="col-md-4">
                <label for="">Cámara de comercio:</label>
                <input type="file" class="form-control" name="">
            </div>
        </div>
        <!----Modals-->
        <div class="modal fade" id="anexos">
            <div class="modal-dialog modal-lg">
              <div class="modal-content">
                <div class="modal-header">
                  <h4 class="modal-title">Anexos</h4>
                  <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                  </button>
                </div>
                <div class="modal-body">
                    <div class="row">
                       hola mundo
                    </div>
                </div>
                <div class="modal-footer justify-content-between">
                  <button type="button" class="btn btn-default" data-dismiss="modal">Cerrar</button>
                  <button type="button" class="btn btn-primary">Guardar</button>
                </div>
              </div>
            </div>
          </div>

    </div>
    <!-- footer-body -->
    <div class="card-footer">
      Listado de Anexos.
    </div>
</div>

 <!--presupuestos-->
  <div class="card card-default collapsed-card">
    <div class="card-header">
      <h3 class="card-title">Presupuestos</h3>
      <!---boton-min-max-->
      <div class="card-tools">
        <button type="button" class="btn btn-tool" data-card-widget="collapse"><i class="fas fa-minus"></i></button>
      </div>
    </div>
    <div class="card-body">
        <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#modal-lg" style="float:right">Añadir Más</button>
          <br><br>
        <form action="{{route('presupuesto.index')}}" method="POST">
        @csrf
            <div class="table-responsive">
            <table class="table table-light">
                <thead class="thead-light">
                    <tr>
                        <th>PRESUPUESTO DE EGRESOS (Gastos)</th>
                        <th>INGRESOS (Fuentes de Financiación)</th>
                    </tr>
                </thead>
            </table>
            <!----Modals-->
            <div class="modal fade" id="modal-lg">
                <div class="modal-dialog modal-lg">
                  <div class="modal-content">
                    <div class="modal-header">
                      <h4 class="modal-title">Presupuesto General</h4>
                      <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                      </button>
                    </div>
                    <div class="modal-body">
                        <div class="row">
                            <form action="">
                                <div class="col-md-12">
                                    <label for="">Rubro(Valor Total)</label>
                                    <input type="number" class="form-control" name="rubro">
                                </div>
                                <div class="col-md-12">
                                    <label for="">Recursos del municipio</label>
                                    <input type="number" class="form-control" name="recurso_municipio">
                                </div>
                                <div class="col-md-12">
                                    <label for="">Fondo mixto de promoción de la cultura y las artes de sucre($)</label>
                                    <input type="number" class="form-control" name="fondo_mixto">
                                </div>
                                <div class="col-md-12">
                                    <label for="">Recursos solicitados al Ministerio de Cultura ($)</label>
                                    <input type="number" class="form-control" name="ministerio_cultura">
                                </div>
                                <div class="col-md-12">
                                    <label for="">Ingresos Propios</label>
                                    <input type="number" class="form-control" name="ingreso_propio">
                                </div>
                            </form>
                        </div>
                    </div>
                    <div class="modal-footer justify-content-between">
                      <button type="button" class="btn btn-default" data-dismiss="modal">Cerrar</button>
                      <button type="button" class="btn btn-primary">Guardar</button>
                    </div>
                  </div>
                </div>
              </div>

            </div>
        </form>
    </div>
    <!-- footer-body -->
    <div class="card-footer">
      Listado de Presupuestos.
    </div>
  </div>

  <!-----Poblacion-->
  <div class="card card-default collapsed-card">
    <div class="card-header">
      <h3 class="card-title">Población</h3>
      <!---boton-min-max-->
      <div class="card-tools">
        <button type="button" class="btn btn-tool" data-card-widget="collapse"><i class="fas fa-minus"></i></button>
      </div>
    </div>
    <div class="card-body">
        <div class="table-responsive">
            <table class="table table-light">
                <thead class="thead-light">
                    <tr>
                        <th>Item</th>
                        <th>Clasificación</th>
                        <th>Detalle</th>
                        <th>Número de personas</th>
                        <th>Fuente de verificación</th>

                    </tr>
                </thead>
                <tbody>
                    <tr>
                        <td>1</td>
                        <td>Etaria (Edad)</td>
                        <td>0 a 14 años</td>
                        <td><input type="number" class="form-control"></td>
                        <td><input type="text" class="form-control"></td>
                    </tr>
                    <tr>
                        <td>2</td>
                        <td>Etaria (Edad)</td>
                        <td>15 a 19 años</td>
                        <td><input type="number" class="form-control"></td>
                        <td><input type="text" class="form-control"></td>
                    </tr>
                    <tr>
                      <td>3</td>
                      <td>Etaria (Edad)</td>
                      <td>20 a 59 años</td>
                      <td><input type="number" class="form-control"></td>
                      <td><input type="text" class="form-control"></td>
                    </tr>
                    <tr>
                      <td>4</td>
                      <td>Etaria (Edad)</td>
                      <td>Mayor de 60 años</td>
                      <td><input type="number" class="form-control"></td>
                      <td><input type="text" class="form-control"></td>
                    </tr>
                    <tr>
                      <td>5</td>
                      <td>Grupos étnicos</td>
                      <td>Población Indígena</td>
                      <td><input type="number" class="form-control"></td>
                      <td><input type="text" class="form-control"></td>
                    </tr>
                    <tr>
                      <td>6</td>
                      <td>Grupos étnicos</td>
                      <td>Población Afrocolombiana</td>
                      <td><input type="number" class="form-control"></td>
                      <td><input type="text" class="form-control"></td>
                    </tr>
                    <tr>
                      <td>7</td>
                      <td>Grupos étnicos</td>
                      <td>Población Raizal</td>
                      <td><input type="number" class="form-control"></td>
                      <td><input type="text" class="form-control"></td>
                    </tr>
                    <tr>
                      <td>8</td>
                      <td>Grupos étnicos</td>
                      <td>Pueblo Rom</td>
                      <td><input type="number" class="form-control"></td>
                      <td><input type="text" class="form-control"></td>
                    </tr>
                    <tr>
                      <td>9</td>
                      <td>Grupos étnicos</td>
                      <td>Población Mestiza</td>
                      <td><input type="number" class="form-control"></td>
                      <td><input type="text" class="form-control"></td>
                    </tr>
                    <tr>
                      <td>10</td>
                      <td>Grupos étnicos</td>
                      <td>Población Palenquera</td>
                      <td><input type="number" class="form-control"></td>
                      <td><input type="text" class="form-control"></td>
                    </tr>
                    <tr>
                      <td>11</td>
                      <td>Género</td>
                      <td>Masculino</td>
                      <td><input type="number" class="form-control"></td>
                      <td><input type="text" class="form-control"></td>
                    </tr>
                    <tr>
                      <td>12</td>
                      <td>Género</td>
                      <td>Femenino</td>
                      <td><input type="number" class="form-control"></td>
                      <td><input type="text" class="form-control"></td>
                    </tr>
                    <tr>
                      <td>13</td>
                      <td>Población Vulnerable</td>
                      <td>Desplazados</td>
                      <td><input type="number" class="form-control"></td>
                      <td><input type="text" class="form-control"></td>
                    </tr>
                    <tr>
                      <td>14</td>
                      <td>Población Vulnerable</td>
                      <td>Discapacitados</td>
                      <td><input type="number" class="form-control"></td>
                      <td><input type="text" class="form-control"></td>
                    </tr>
                    <tr>
                      <td>15</td>
                      <td>Población Vulnerable</td>
                      <td>Víctimas</td>
                      <td><input type="number" class="form-control"></td>
                      <td><input type="text" class="form-control"></td>
                    </tr>
                    <tr>
                        <td></td>
                        <td></td>
                        <td></td>
                        <td style="float: right"><h5>Total población beneficiada</h5></td>
                        <td><input type="text" class="form-control"></td>

                    </tr>

                </tbody>
            </table>
        </div>
    </div>
    <!-- footer-body -->
    <div class="card-footer">
      Listado de Población.
    </div>
  </div>


  <!---Actividades--->
  <div class="card card-default collapsed-card">
    <div class="card-header">
      <h3 class="card-title">Actividades</h3>
      <!---boton-min-max-->
      <div class="card-tools">
        <button type="button" class="btn btn-tool" data-card-widget="collapse"><i class="fas fa-minus"></i></button>
      </div>
    </div>
    <div class="card-body">
        <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#actividades" style="float:right">Añadir Más</button>
            <br><br>
        <div class="table-responsive">
        <table class="table table-light">
            <thead class="thead-light">
                <tr>
                    <th>FECHA DE INICIO DEL PROYECTO</th>
                    <th></th>
                    <th>FECHA DE REALIZACION DE LAS ACTIVIDADES</th>
                </tr>
                <tr>
                    <th>ACTIVIDADES</th>
                    <th>FECHA DE INICIO</th>
                    <th>FECHA DE FINALIZACION</th>
                </tr>
            </thead>
        </table>

      <!----Modals-->
      <div class="modal fade" id="actividades">
        <div class="modal-dialog modal-lg">
          <div class="modal-content">
            <div class="modal-header">
              <h4 class="modal-title">Actividades</h4>
              <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                <span aria-hidden="true">&times;</span>
              </button>
            </div>
            <div class="modal-body">
                <div class="">
                    <form action="">
                        <div class="col-md-12">
                            <label for="">Actividades</label>
                            <textarea name="nombre_actividad" class="form-control"></textarea>
                        </div>
                        <div class="col-md-12">
                            <label for="">Fecha de Inicio</label>
                            <input type="date" class="form-control" name="fecha_inicio">
                        </div>
                        <div class="col-md-12">
                            <label for="">Fecha de Finalización</label>
                            <input type="date" class="form-control" name="fecha_final">
                        </div>
                    </form>
                </div>
            </div>
            <div class="modal-footer justify-content-between">
              <button type="button" class="btn btn-default" data-dismiss="modal">Cerrar</button>
              <button type="button" class="btn btn-primary">Guardar</button>
            </div>
          </div>
        </div>
      </div>
        </div>
    </div>
    <!-- footer-body -->
    <div class="card-footer">
     Cronograma de Actividades.
    </div>
  </div>


 </div>
@endsection
@section('extra-script')

{{-- <scriptsrc="asset('js/proyecto.js')"></script>--}}

<!---select-->
<script src="{{asset('plugins/select2/js/select2.full.min.js')}}"></script>
<script>
    $(function () {
      //Initialize Select2 Elements
      $('.select2').select2()

      //Initialize Select2 Elements
      $('.select2bs4').select2({
        theme: 'bootstrap4'
      })

    })
  </script>

@endsection




