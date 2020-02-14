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
                                <button style="float:right" type="button" class="btn btn-info btn-md btn-group-vertical" > <i class="fas fa-plus-circle"></i></button>
                            </div>
                        
                            <div class="col-md-12">
                                <label for="">Actividades</label>
                                <textarea name="nombre_actividad" class="form-control"></textarea>
                            </div>
                            <div class="col-md-6">
                                <label for="">Fecha de Inicio</label>
                                <input type="date" class="form-control" name="fecha_inicio">
                            </div>
                            <div class="col-md-6">
                                <label for="">Fecha de Finalización</label>
                                <input type="date" class="form-control" name="fecha_final">
                            </div>

                    </div>

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
                            
                                    <tr>
                                        <td>1</td>
                                        <td>Abir puesto de empanadas</td>
                                        <td>13/02/2020</td>
                                        <td>20/02/2020</td>
                                        <td class="text-center">
                                            <button type="button" class="btn btn-warning btn-sm" data-toggle="modal"  data-target="#modalEdit" ><i class="fas fa-pencil-alt"></i></button>
                                            <button type="button" class="btn btn-danger btn-sm" ><i class="fas fa-trash-alt"></i></button>
                                        </td>
                                    </tr>
                                
                            </tbody>
                        </table>
                    </div>
        
        </div>
        <div class="modal-footer justify-content-between">
          <button type="button" class="btn btn-dark" data-dismiss="modal">Cerrar <i class="fas fa-times-circle"></i></button>
          <button id="guardar" type="button" class="btn btn-dark">Guardar <i class="fas fa-save"></i></button>
        </div>
      </div>
    </div>
</div>
