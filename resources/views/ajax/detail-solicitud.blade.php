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

      </div>
      <!-- /.card-body -->
    </div>
    <!-- /.card -->
</div>