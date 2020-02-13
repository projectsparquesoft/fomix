<div class="modal fade" id="modalPresupuesto">
    <div class="modal-dialog modal-lg">
      <div class="modal-content">
        <div class="modal-header" style="background:#fcd846">
          <h4 class="modal-title">Presupuesto General <i class="fas fa-hand-holding-usd"></i></h4>
          <button type="button" class="close" data-dismiss="modal" aria-label="Close">
            <span aria-hidden="true">&times;</span>
          </button>
        </div>
        <div class="modal-body" style="background:whitesmoke">
            <form id="form_create" action="" method="POST" onkeypress="return disableEnterKey(event);">
                @csrf
                    <div class="form-row">
                        <div class="col-md-10 col-sm-10"><h6 style="float:left"><b> PRESUPUESTO DE EGRESOS</b> (Gastos)</h6> <h6 style="float:right"><b> INGRESOS </b>(Fuentes de Financiación)</h6>  </div>
                        <div class="col-md-2 col-sm-2">
                            <button style="float:right" type="button" class="btn btn-info btn-md btn-group-vertical" > <i class="fas fa-plus-circle"></i></button>
                        </div>
                        <br> <br>
                            <div class="col-md-4">
                                <label for="">Rubro</label>
                                <input type="number" class="form-control">
                            </div>
                            <div class="col-md-4">
                                <label for="">Recursos del Municipio</label>
                                <input type="number" class="form-control">
                            </div>
                            <div class="col-md-4">
                                <label for="">Fondo Mixto</label>
                                <input type="number" class="form-control">
                            </div>
                            <div class="col-md-6">
                                <label for="">Ministerio de Cultura</label>
                                <input type="number" class="form-control">
                            </div>
                            <div class="col-md-6">
                                <label for="">Ingresos Propios</label>
                                <input type="number" class="form-control">
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
                                        <th>Rubro</th>
                                        <th>Recursos_Municipio</th>
                                        <th>Fondo Mixto</th>
                                        <th>Ministerio_Cultura</th>
                                        <th>Ingresos Propios</th>
                                        <th style="width:20%" class="text-center">Acciones</th>
                                    </tr>
                                </thead>
                                <tbody>

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
