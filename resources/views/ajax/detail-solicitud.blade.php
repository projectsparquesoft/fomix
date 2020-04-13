<div class="col-md-12 col-sm-12">
    <div class="card">
      <div class="card-header">
        <h3 class="card-title">
          <i class="fas fa-text-width"></i>
          Informacion Solicitud:
        </h3>
        <div class="card-tools">
            <button type="button" class="btn btn-tool" data-card-widget="collapse"><i class="fas fa-minus"></i></button>
          </div>
      </div>
      <!-- /.card-header -->
      <div class="card-body">
        <dl class="row">
            <dt class="col-sm-4">Categoria:</dt>
            <dd class="col-sm-8">{{$solicitud->categoria->tipo_solicitud}}</dd>

            <dt class="col-sm-4">Solicitante:</dt>
            <dd class="col-sm-8">
                @if ($solicitud->solicitante->razon_social)
                {{$solicitud->solicitante->razon_social}}
                @else
                {{$solicitud->solicitante->nombre}} {{$solicitud->solicitante->apellido}}
                @endif
            </dd>

            <dt class="col-sm-4">Descripcion</dt>
            <dd class="col-sm-8">
                {{$solicitud->descripcion}}
            </dd>

            <dt class="col-sm-4">Archivo</dt>
        <dd class="col-sm-8">@if($solicitud->archivo) <a target="_blank" href="{{asset('documentos/solicitudes')}}/{{$solicitud->archivo}}">PDF</a> @else No se cargo archivo @endif</dd>
        </dl>

        <button type="button" id="btn_gerencia_send-{{$solicitud->id}}" class="btn btn-info btn-sm send-gerencia" onclick="sendManagement(this);" data-href="{{route('solicitud.management', $solicitud->id)}}" data-toggle="tooltip" data-placement="top" title="ENVIAR A GERENCIA"><i class="fas fa-share-square"></i></button>


      </div>
      <!-- /.card-body -->
    </div>
    <!-- /.card -->
</div>

@if($solicitud->categoria->tipo_solicitud == 'Proyecto')
<div class="col-md-12 col-sm-12">
    <div class="card">
      <div class="card-header">
        <h3 class="card-title">
          <i class="fas fa-text-width"></i>
          Proyecto:
        </h3>
        <div class="card-tools">
            <button type="button" class="btn btn-tool" data-card-widget="collapse"><i class="fas fa-minus"></i></button>
          </div>
      </div>
      <!-- /.card-header -->
      <div class="card-body">
        <dl class="row">
            <dt class="col-sm-4">Titulo:</dt>
            <dd class="col-sm-8">{{$solicitud->proyecto->titulo}}</dd>

            <dt class="col-sm-4">Fechas de Realizacion:</dt>
            <dd class="col-sm-8">
                Fecha Inicio: {{$solicitud->proyecto->fecha_inicio}} -
                Fecha Final: {{$solicitud->proyecto->fecha_final}}
            </dd>

            <dt class="col-sm-4">Descripcion</dt>
            <dd class="col-sm-8">
                {{$solicitud->proyecto->descripcion}}
            </dd>

        </dl>

      </div>
      <!-- /.card-body -->
    </div>
    <!-- /.card -->
</div>

<div class="col-md-12 col-sm-12">
    <div class="card">
      <div class="card-header">
        <h3 class="card-title">
          <i class="fas fa-text-width"></i>
          Poblacion Afectada:
        </h3>
        <div class="card-tools" >
            <button type="button" class="btn btn-tool" data-card-widget="collapse"><i class="fas fa-minus"></i></button>
          </div>
      </div>
      <!-- /.card-header -->
      <div class="card-body" >

        <div class="table-responsive">
            <table class="table table-hover table-sm mejoratb">
                <thead class="thead-light">
                    <tr>
                        <th>#</th>
                        <th>Categoria</th>
                        <th>Poblacion</th>
                        <th>Total</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach ($solicitud->poblaciones as $poblacion)
                     <tr>
                        <td>{{$loop->iteration}}</td>
                        <td>{{$poblacion->clasificacion->tipo_poblacion}}</td>
                        <td>{{$poblacion->detalle}}</td>
                        <td>{{$poblacion->pivot->numero_persona}}</td>
                     </tr>
                    @endforeach
                </tbody>
            </table>
        </div>


      </div>
      <!-- /.card-body -->
    </div>
    <!-- /.card -->
</div>

<div class="col-md-12 col-sm-12">
    <div class="card">
      <div class="card-header">
        <h3 class="card-title">
          <i class="fas fa-text-width"></i>
          Actividades:
        </h3>
        <div class="card-tools">
            <button type="button" class="btn btn-tool" data-card-widget="collapse"><i class="fas fa-minus"></i></button>
          </div>
      </div>
      <!-- /.card-header -->
      <div class="card-body">
        <div class="table-responsive">
            <table class="table table-hover table-sm mejoratb">
                <thead class="thead-light">
                    <tr>
                        <th>#</th>
                        <th>Actividad</th>
                        <th>Inicio</th>
                        <th>Fin</th>
                    </tr>
                </thead>
                <tbody >
                    @foreach ($solicitud->proyecto->actividades as $actividad)
                     <tr>
                        <td>{{$loop->iteration}}</td>
                        <td>{{$actividad->nombre_actividad}}</td>
                        <td>{{$actividad->fecha_inicio}}</td>
                        <td>{{$actividad->fecha_final}}</td>
                     </tr>
                    @endforeach
                </tbody>
            </table>
        </div>

      </div>
      <!-- /.card-body -->
    </div>
    <!-- /.card -->
</div>

<div class="col-md-12 col-sm-12">
    <div class="card">
      <div class="card-header">
        <h3 class="card-title">
          <i class="fas fa-text-width"></i>
          Presupuestos:
        </h3>
        <div class="card-tools">
            <button type="button" class="btn btn-tool" data-card-widget="collapse"><i class="fas fa-minus"></i></button>
          </div>
      </div>
      <!-- /.card-header -->
      <div class="card-body">
        <div class="table-responsive">
            <table class="table table-hover table-sm mejoratb">
                <thead class="thead-light">
                    <tr>
                        <th>#</th>
                        <th>Rubro</th>
                        <th>Recurso Municipio</th>
                        <th>Fondo Mixto</th>
                        <th>Ingreso Cultura</th>
                        <th>Ingreso Propio</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach ($solicitud->proyecto->presupuestos as $presupuesto)
                     <tr>
                        <td class="text-center">{{$loop->iteration}}</td>
                        <td class="text-center">${{number_format($presupuesto->rubro, 0)}}</td>
                        <td class="text-center">${{number_format($presupuesto->recurso_municipio, 0)}}</td>
                        <td class="text-center">${{number_format($presupuesto->fondo_mixto, 0)}}</td>
                        <td class="text-center">${{number_format($presupuesto->ministerio_cultura, 0)}}</td>
                        <td class="text-center">${{number_format($presupuesto->ingreso_propio, 0)}}</td>
                     </tr>
                    @endforeach
                </tbody>
            </table>
        </div>

      </div>
      <!-- /.card-body -->
    </div>
    <!-- /.card -->
</div>
@endif
