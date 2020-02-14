<div class="modal fade" id="modalActividades">
    <div class="modal-dialog modal-lg">
      <div class="modal-content">
        <div class="modal-header" style="background:#fcd846">
          <h4 class="modal-title">Actividades  <i class="fas fa-network-wired"></i></h4>
          <button type="button" class="close" data-dismiss="modal" aria-label="Close">
            <span aria-hidden="true">&times;</span>
          </button>
        </div>
        <div class="modal-body" style="background:whitesmoke">
            <form id="form_create" action="" method="POST" onkeypress="return disableEnterKey(event);">
                @csrf
                    <div class="form-row">
                        <div class="col-md-10 col-sm-10"></div>
                        <div class="col-md-2 col-sm-2">
                            <button style="float:right" id="añadir" type="button" class="btn btn-info btn-md btn-group-vertical" > <i class="fas fa-plus-circle"></i></button>
                        </div>
                            <div class="col-md-12">
                                <label for="">Actividades</label>
                                <textarea name="nombre_actividad" class="form-control" id="nombre_actividad"></textarea>
                            </div>
                            <div class="col-md-6">
                                <label for="">Fecha de Inicio</label>
                                <input type="date" class="form-control" name="fecha_inicio" id="fecha_inicio">
                            </div>
                            <div class="col-md-6">
                                <label for="">Fecha de Finalización</label>
                                <input type="date" class="form-control" name="fecha_final" id="fecha_final">
                            </div>
                            <br>
                            <br>
                            <br>
                            <br>
                            <div class="table-responsive">
                            <table id="tabla" class="table table-hover table-sm ">
                                <thead class="thead-light">
                                    <tr>
                                        <th>#</th>
                                        <th>Actividades</th>
                                        <th>Fecha de Inicio</th>
                                        <th>Fecha de Finalización</th>
                                        <th style="width:20%" class="text-center">Acciones</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @foreach ($actividades as $actividad)
                                        <tr>
                                            <td>{{$loop->iteration}}</td>
                                            <td>{{$actividad->nombre_actividad}}</td>
                                            <td>{{$actividad->fecha_inicio}}</td>
                                            <td>{{$actividad->fecha_final}}</td>
                                            <td class="text-center">
                                                <button type="button" class="btn btn-warning btn-sm" data-toggle="modal"  data-target="#modalEdit" ><i class="fas fa-pencil-alt"></i></button>
                                                <button type="button" class="btn btn-danger btn-sm" ><i class="fas fa-trash-alt"></i></button>
                                            </td>
                                        </tr>
                                    @endforeach
                                </tbody>
                         </table>
                        </div>
                    </div>
            </form>
        </div>
        <div class="modal-footer justify-content-between">
          <button type="button" class="btn btn-dark" data-dismiss="modal">Cerrar <i class="fas fa-times-circle"></i></button>
          <button id="guardar" type="button" class="btn btn-dark">Guardar <i class="fas fa-save"></i></button>
        </div>
      </div>
    </div>
</div>
