<div class="modal fade" id="modalPoblacion">
    <div class="modal-dialog modal-lg">
      <div class="modal-content">
        <div class="modal-header" style="background:#fcd846">
          <h4 class="modal-title">Añadir Población <i class="fas fa-user-plus"></i></h4>
          <button type="button" class="close" data-dismiss="modal" aria-label="Close">
            <span aria-hidden="true">&times;</span>
          </button>
        </div>
        <div class="modal-body" style="background:whitesmoke">
                <div class="form-row">

                  <div class="col-md-10 col-sm-10"></div>
                      <div class="col-md-2 col-sm-2">
                            <button style="float:right" id="btnAddPoblacion" type="button" class="btn btn-info btn-md btn-group-vertical" > <i class="fas fa-plus-circle"></i></button>
                      </div>

                  <div class="col-md-4">
                    <div class="form-group">
                      <label for="">Tipo de Poblacion:</label>
                      <select name="clasificacion_id" id="clasificacion_id-999" class="form-control clasificaciones">
                        <option selected value="0">-- Escoger Opcion --</option>
                        @foreach ($clasificaciones as $clasificacion)
                      <option value="{{$clasificacion->id}}">{{$clasificacion->tipo_poblacion}}</option>
                        @endforeach
                      </select>
                    </div>
                  </div>

                  <div class="col-md-4">
                    <div class="form-group">
                      <label for="">Poblacion:</label>
                      <select name="poblacion_id" id="poblacion_id-999" class="form-control poblaciones">
                        <option value="0" selected>-- Escoger Opcion --</option>
                        
                      </select>
                    </div>
                  </div>

                  <div class="col-md-4">
                    <div class="form-group">
                      <label for="">Total:</label>
                      <input type="number" class="form-control" name="total" id="total-999">
                    </div>
                  </div>

                  <div class="col-md-12">
                    <div class="form-group">
                    <label>Fuente Verificacion</label>
                        <select name="fuente_verificacion" class="form-control select2bs4 show-tick" style="width: 100%;" multiple data-placeholder="Escoger Fuente Verificacion">
                            @foreach ($fuentes as $fuente)
                              <option  value="{{$fuente->id}}">{{$fuente->fuente_verificacion}}</option>
                            @endforeach
                        </select>
                    </div>
                </div>

                <div id="clonar_poblacion"></div>
	

                  <br>

                    <div class="table-responsive">
                        <table class="table table-hover table-sm " id="table_poblacion">
                            <thead class="thead-light">
                                <tr>
                                    <th>#</th>
                                    <th>Tipo Poblacion</th>
                                    <th>Poblacion</th>
                                    <th>Total</th>
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
