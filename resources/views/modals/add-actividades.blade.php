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
                    <div class="form-row">

                            <div class="col-md-10 col-sm-10"></div>
                            <div class="col-md-2 col-sm-2">
                                <button style="float:right" type="button" id="btnAddActividad" class="btn btn-info btn-md btn-group-vertical" > <i class="fas fa-plus-circle"></i></button>
                            </div>

                            <div class="col-md-12">
                                <label for="">Actividades</label>
                                <textarea name="nombre_actividad" id="nombre_actividad-999" class="form-control"></textarea>
                            </div>
                            <div class="col-md-6">
                                <label for="">Fecha de Inicio</label>
                                <input type="date" class="form-control" name="fecha_inicio" id="fecha_inicio-999">
                            </div>
                            <div class="col-md-6">
                                <label for="">Fecha de Finalización</label>
                                <input type="date" class="form-control" name="fecha_final" id="fecha_final-999">
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
                                    <th>Fecha de Inicio</th>
                                    <th>Fecha de Finalización</th>
                                    <th style="width:20%" class="text-center">Acciones</th>
                                </tr>
                            </thead>
                            <tbody>
    
                                
                            </tbody>
                        </table>
                    </div>

        </div>
        <div class="modal-footer justify-content-between">
          <button type="button" class="btn btn-dark" data-dismiss="modal">Completado <i class="fas fa-times-circle"></i></button>
        </div>
      </div>
    </div>
</div>
