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


                            <div class="table-responsive">
                                <br>
                                <table id="tabla" class="table table-hover table-sm">
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
                                        <td>1</td>
                                        <td>$10000</td>
                                        <td>$10000</td>
                                        <td>$10000</td>
                                        <td>$10000</td>
                                        <td>$10000</td>
                                        <td class="text-center">
                                            <button type="button" class="btn btn-warning btn-sm" data-toggle="modal"  data-target="#modalEdit" ><i class="fas fa-pencil-alt"></i></button>
                                            <button type="button" class="btn btn-danger btn-sm" ><i class="fas fa-trash-alt"></i></button>
                                        </td>
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
