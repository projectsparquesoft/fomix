<div class="modal fade" id="modalActividades" data-backdrop="static">
    <div class="modal-dialog modal-lg">
      <div class="modal-content">
        <div class="modal-header" style="background:#fcd846">
          <h4 class="modal-title">Actividades  <i class="fas fa-network-wired"></i></h4>
          <button type="button" class="close" data-dismiss="modal" aria-label="Close">
            <span aria-hidden="true">&times;</span>
          </button>
        </div>
        <div class="modal-body" style="background:whitesmoke">
                    <div class="form-row">

                            <div class="col-md-10 col-sm-10"></div>
                            <div class="col-md-2 col-sm-2">
                                <button style="float:right" type="button" id="btnAddActividad" class="btn btn-info btn-md btn-group-vertical" > <i class="fas fa-plus-circle"></i></button>
                            </div>

                            <div class="col-md-12">
                                <label for="nombre_actividad-999">Actividades</label>
                                <textarea  id="nombre_actividad-999" class="form-control"></textarea>
                            </div>
                            <div class="col-md-6">
                                <label for="fecha_inicio-999">Fecha de Inicio</label>
                                <input type="date" class="form-control" id="fecha_inicio-999">
                            </div>
                            <div class="col-md-6">
                                <label for="fecha_final-999">Fecha de Finalización</label>
                                <input type="date" class="form-control" id="fecha_final-999">
                            </div>

                    </div>

                    <div id="clonar_actividad"></div>

                    <br>

                    <div class="table-responsive">
                        <table id="table_actividad" class="table table-hover table-sm ">
                            <thead class="thead-light">
                                <tr>
                                    <th>#</th>
                                    <th>Actividades</th>
                                    <th>Inicio</th>
                                    <th>Finalización</th>
                                    <th style="width:20%" class="text-center">Acciones</th>
                                </tr>
                            </thead>
                            <tbody>
    
                                
                            </tbody>
                        </table>
                    </div>

                    <input type="hidden" id="table_actividad_empty" value="1">


        </div>
        <div class="modal-footer justify-content-between">
          <button type="button" class="btn btn-dark" onclick="validateActividad('{{route('validate.actividad')}}')">Completado <i class="fas fa-times-circle"></i></button>
        </div>
      </div>
    </div>
</div>
