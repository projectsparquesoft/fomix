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
                            <button style="float:right" type="button" class="btn btn-info btn-md btn-group-vertical" > <i class="fas fa-plus-circle"></i></button>
                      </div>

                  <div class="col-md-4">
                    <div class="form-group">
                      <label for="">Tipo de Poblacion:</label>
                      <select name="clasificacion_id" id="" class="form-control">
                        <option selected>-- Escoger Opcion --</option>
                        @foreach ($clasificaciones as $clasificacion)
                      <option value="{{$clasificacion->id}}">{{$clasificacion->tipo_poblacion}}</option>
                        @endforeach
                      </select>
                    </div>
                  </div>

                  <div class="col-md-4">
                    <div class="form-group">
                      <label for="">Poblacion:</label>
                      <select name="poblacion_id" id="" class="form-control">
                        <option selected>-- Escoger Opcion --</option>
                        
                      </select>
                    </div>
                  </div>

                  <div class="col-md-4">
                    <div class="form-group">
                      <label for="">Total:</label>
                      <input type="number" class="form-control" name="total">
                    </div>
                  </div>

                  <div class="col-md-12">
                    <div class="form-group">
                    <label>Fuente Verificacion</label>
                        <select name="fuente_verificacion" class="form-control select2bs4 show-tick" style="width: 100%;" multiple data-placeholder="Escoger Fuente Verificacion">
                            <option value="">---Escoger Opcion---</option>
                                <option  value="1">Videos</option>
                                <option  value="1">Fotografias</option>
                                <option  value="1">Encuestas</option>

                        </select>
                    </div>
                </div>

                  <br>

                    <div class="table-responsive">
                        <table id="tabla" class="table table-hover table-sm ">
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
                            
                                    <tr>
                                        <td>1</td>
                                        <td>Etaria (Edad)</td>
                                        <td>Niños de 4 a 8 años</td>
                                        <td>100</td>
                                        <td class="text-center">
                                            <button type="button" class="btn btn-warning btn-sm" data-toggle="modal"  data-target="#modalEdit" ><i class="fas fa-pencil-alt"></i></button>
                                            <button type="button" class="btn btn-danger btn-sm" ><i class="fas fa-trash-alt"></i></button>
                                        </td>
                                    </tr>
                                
                            </tbody>
                        </table>
                    </div>



                    <input id="list_poblaciones" type="hidden" value='@json($poblaciones)'>

                </div>
            
        </div>
        <div class="modal-footer justify-content-between">
          <button type="button" class="btn btn-dark" data-dismiss="modal">Cerrar <i class="fas fa-times-circle"></i></button>
          <button id="guardar" type="button" class="btn btn-dark">Guardar <i class="fas fa-save"></i></button>
        </div>
      </div>
    </div>
</div>
