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
                    <div class="form-row">
                        <div class="col-md-10 col-sm-10"><h6 style="float:left"><b> PRESUPUESTO DE EGRESOS</b> (Gastos)</h6> <h6 style="float:right"><b> INGRESOS </b>(Fuentes de Financiación)</h6>  </div>
                        <div class="col-md-2 col-sm-2">
                            <button style="float:right" type="button" id="btnAddPresupuesto" class="btn btn-info btn-md btn-group-vertical" > <i class="fas fa-plus-circle"></i></button>
                        </div>
                        <br> <br>
                            <div class="col-md-4">
                                <label for="">Rubro</label>
                                <input type="number" class="form-control" name="rubro" id="rubro-999">
                            </div>

                            <div class="col-md-4">
                                <label for="">Recursos del Municipio</label>
                                <input type="number" class="form-control" name="recurso_municipio" id="recurso_municipio-999">
                            </div>

                            <div class="col-md-4">
                                <label for="">Fondo Mixto</label>
                                <input type="number" class="form-control" name="fondo_mixto" id="fondo_mixto-999">
                            </div>

                            <div class="col-md-6">
                                <label for="">Ministerio de Cultura</label>
                                <input type="number" class="form-control" name="ministerio_cultura" id="ministerio_cultura-999">
                            </div>

                            <div class="col-md-6">
                                <label for="">Ingresos Propios</label>
                                <input type="number" class="form-control" name="ingreso_propio" id="ingreso_propio-999">
                            </div>

                            <div id="clonar_presupuesto"></div>

                            
                            <div class="table-responsive">
                                <br>
                                <table id="table_presupuesto" class="table table-hover table-sm">
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

        </div>
        <div class="modal-footer justify-content-between">
          <button type="button" class="btn btn-dark" data-dismiss="modal">Completado <i class="fas fa-times-circle"></i></button>
        </div>
      </div>
    </div>
</div>
