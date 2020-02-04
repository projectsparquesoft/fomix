@extends('layouts.main')


@section('titulo', "Solicitud")

@section('css-extra')
    <link rel="stylesheet" href="{{asset('plugins/sweetalert/sweetalert2.min.css')}}">
    <link rel="stylesheet" href="{{asset('plugins/bootstrap-select/css/bootstrap-select.min.css')}}">
@endsection

@section('title_module')

<div class="page-title-icon">
    <i class="pe-7s-graph text-success">
    </i>
</div>
<div>Solicitudes
    <div class="page-title-subheading">Aqui se podrá registrar la solicitud que ingresará.
    </div>
</div>
@endsection

@section('link_module')
<li class="nav-item">
    <a role="tab" class="nav-link" id="tab-1" data-toggle="tab" href="#tab-content-1">
        <span>Creación de las Solicitudes</span>
    </a>
</li>
@endsection

@section('content_module')
<!-----solicitudes-->
<div id="accordion" class="accordion-wrapper mb-3">
    <div class="card">
        <div id="headingOne" class="card-header">
            <button type="button" data-toggle="collapse" data-target="#collapseOne1" aria-expanded="false" aria-controls="collapseOne" class="text-left m-0 p-0 btn btn-link btn-block collapsed">
                <h5 class="m-0 p-0">Registro de Solicitudes</h5>
            </button>
        </div>
        <div data-parent="#accordion" id="collapseOne1" aria-labelledby="headingOne" class="collapse" style="">
            <div class="card-body">
            <form id="form_solicitud" action="{{route('solicitud.store')}}" method="POST" enctype="multipart/form-data">
                @csrf
            <div class="form-row">
                <div class="col-md-4">
                    <label for="solicitud" ><strong>Tipo de Solicitud:</strong></label>
                        <select name="categoria_id" id="categoria_id" class="form-control" required>
                            <option value="">-- Escoger Tipo Solicitud --</option>
                            @foreach ($categorias as $categoria)
                            <option value="{{$categoria->id_categoria}}">{{$categoria->tipo_solicitud}}</option>
                            @endforeach
                        </select>
                </div>
                <div class="col-md-4">
                    <label for="solicitud" ><strong>Solicitante:</strong></label>
                        <select name="solicitante_id" id="solicitante_id" class="form-control selectpicker show-tick" data-live-search="true" required>
                                @foreach ($solicitantes as $solicitante)
                                <option value=" {{$solicitante->id_solicitante}}">{{$solicitante->razon_social}}
                            </option>
                                @endforeach
                        </select>
                </div>
                <div class="col-md-4">
                            <label for="archivo"><strong>Archivo:</strong></label>
                            <input name="archivo" id="archivo" type="file" class="form-control" required>
                </div>
                <div class="col-md-1">
                            <button id="btnsave" class="btn btn-lg btn-primary mt-2">Guadar</button>
                </div>
            </div>
                </form>
        </div>
    </div>
</div>

<!-----lineas-->
<div class="card">
        <div id="headingThree" class="card-header">
            <button type="button" data-toggle="collapse" data-target="#collapseOne3" aria-expanded="false" aria-controls="collapseThree" class="text-left m-0 p-0 btn btn-link btn-block"><h5 class="m-0 p-0">Líneas</h5></button>
        </div>
        <div data-parent="#accordion" id="collapseOne3" class="collapse">
            <div class="card-body">
            <div class="col-md-12 col-lg-12" >

              <div class="form-group">
                    <select  id="id_linea" class="form-control selectpicker show-tick" data-live-search="true" data-width="auto" required  multiple>
                           @foreach ($lineas as $linea)
                                <option data-subtext="{{$linea->descripcion}}" value="{{$linea->id_linea}}">{{$linea->nombre_linea}}</option>
                            @endforeach
                    </select>
                </div>
            </div>

            </div>
        </div>
</div>

<!-----proyectos-->
<div class="card">
        <div id="headingTwo" class="b-radius-0 card-header">
            <button type="button" data-toggle="collapse" data-target="#collapseOne2" aria-expanded="false" aria-controls="collapseTwo" class="text-left m-0 p-0 btn btn-link btn-block"><h5 class="m-0 p-0">Proyectos</h5></button>
        </div>
        <div data-parent="#accordion" id="collapseOne2" class="collapse">
            <div class="card-body">
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
                         <center>  <label for="metas"><strong >METAS (RESULTADOS O PRODUCTOS ESPERADOS DEL PROYECTO):</strong></label></center>
                            <textarea class="form-control" name="metas" rows="5" cols="15" placeholder="(Estas deben ser cuantitativas (medibles); Son el resultado de lo que se quiere lograr y están relacionados con los objetivos formulados). Se estructuran así:
                                1.Proceso o acción [verbo en infinitivo medible]
                                2.Cantidad
                                3.Descripción del proceso)" ></textarea>
                        </div>
                        <input type="hidden" name="solicitud_id" value="1">
                    </div>
                    <div class="col-md-4">
                        <button id="boton" class="btn btn-lg btn-primary mt-2">Guadar</button>
                    </div>
                </div>
            </form>
            </div>
        </div>
</div>

<!-----Anexos-->
<div class="card">
    <div id="headingTwo" class=" card-header">
        <button type="button" data-toggle="collapse" data-target="#collapseOne4" aria-expanded="false" aria-controls="collapseTwo" class="text-left m-0 p-0 btn btn-link btn-block"><h5 class="m-0 p-0">Anexos</h5></button>
    </div>
    <div data-parent="#accordion" id="collapseOne4" class="collapse">
        <div class="card-body">
            <div style="float:right">
                <button class="btn btn-primary">Añadir Más</button>
            </div>
          <br>
            <div class="form-row">
                    <div class="col-md-4">
                        <label for="">Cedula:</label>
                        <input type="file" class="form-control" name="">
                    </div>
                    <div class="col-md-4">
                        <label for="">Fotocopia Rut:</label>
                        <input type="file" class="form-control" name="">
                    </div>
                    <div class="col-md-4">
                        <label for="">Camara de comercio:</label>
                        <input type="file" class="form-control" name="">
                    </div>
            </div>
        </div>
    </div>
</div>
 <!-----presupuesto-->
 <div class="card">
    <div id="headingTwo" class="b-radius-0 card-header">
        <button type="button" data-toggle="collapse" data-target="#collapseOne5" aria-expanded="false" aria-controls="collapseTwo" class="text-left m-0 p-0 btn btn-link btn-block"><h5 class="m-0 p-0">Presupuesto General</h5></button>
    </div>
    <div data-parent="#accordion" id="collapseOne5" class="collapse">
            <div class="card-body">
                <form action="{{route('presupuesto.index')}}" method="POST">
                @csrf
                    <div class="table-responsive">
                        <div style="float:right">
                            <button type="button" class="btn mr-2 mb-2 btn-primary" data-toggle="modal" data-target=".modal">Large modal</button>
                        </div>

                    <br><br>
                        <table class="table table-light">
                            <thead class="thead-light">
                                <tr>
                                    <th>PRESUPUESTO DE EGRESOS (Gastos)</th>
                                    <th>INGRESOS (Fuentes de Financiación)</th>
                                </tr>
                            </thead>
                        </table>
                    </div>
                </form>
            </div>
    </div>
</div>

 <!-----Poblacion-->
 <div class="card">
    <div id="headingTwo" class="b-radius-0 card-header">
        <button type="button" data-toggle="collapse" data-target="#collapseOne6" aria-expanded="false" aria-controls="collapseTwo" class="text-left m-0 p-0 btn btn-link btn-block"><h5 class="m-0 p-0">Población</h5></button>
    </div>
    <div data-parent="#accordion" id="collapseOne6" class="collapse">
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
    </div>
</div>

 <!-----Actividades-->
 <div class="card">
    <div id="headingTwo" class="b-radius-0 card-header">
        <button type="button" data-toggle="collapse" data-target="#collapseOne7" aria-expanded="false" aria-controls="collapseTwo" class="text-left m-0 p-0 btn btn-link btn-block"><h5 class="m-0 p-0">Actividades</h5></button>
    </div>
    <div data-parent="#accordion" id="collapseOne7" class="collapse">
        <div class="card-body">
            <div style="float:right">
                <button class="btn btn-primary">Añadir Más</button>
            </div>
                 <br><br>
            <div class="table-responsive">
            <table class="table table-light">
                <thead class="thead-light">
                    <tr>
                        <th>FECHA DE INICIO DEL PROYECTO</th>
                        <th>FECHA DE REALIZACION DE LAS ACTIVIDADES</th>
                    </tr>
                    <tr>
                        <th>ACTIVIDADES</th>
                        <th>FECHA DE INICIO</th>
                        <th>FECHA DE FINALIZACION</th>
                    </tr>
                </thead>
                <tbody>
                    <tr>
                        <td><textarea name="" id=""  class="form-control"></textarea></td>
                        <td><input type="date" class="form-control"></td>
                        <td><input type="date" class="form-control"></td>
                    </tr>
                    <tr>
                        <td><textarea name="" id=""  class="form-control"></textarea></td>
                        <td><input type="date" class="form-control"></td>
                        <td><input type="date" class="form-control"></td>
                    </tr>
                </tbody>
            </table>
            </div>
        </div>
    </div>
</div>

</div>


@endsection

@section('scripts-extra')
    <script src="{{asset('plugins/sweetalert/sweetalert2.min.js')}}"></script>
     <script src="{{asset('plugins/bootstrap-select/js/bootstrap-select.min.js')}}"></script>
     <script>
     $(function () {
        $('#id_linea').selectpicker({
            noneSelectedText: 'Selecciona',
        });
    });


     </script>
    <script src="{{asset('js/proyecto.js')}}"></script>

@endsection




