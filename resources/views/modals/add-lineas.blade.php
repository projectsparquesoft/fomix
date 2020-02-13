<div class="modal fade" id="modalAddLineas">
    <div class="modal-dialog modal-lg">
      <div class="modal-content">
        <div class="modal-header" style="background:#fcd846">
          <h4 class="modal-title">Añadir Líneas <i class="fas fa-user-plus"></i></h4>
          <button type="button" class="close" data-dismiss="modal" aria-label="Close">
            <span aria-hidden="true">&times;</span>
          </button>
        </div>
        <div class="modal-body" style="background:whitesmoke">
                <div class="form-row">
                  <div class="col-md-12">
                        <div class="form-group">
                        <label>Líneas</label>
                            <select name="id_linea" class="form-control select2bs4 show-tick" style="width: 100%;" multiple data-placeholder="Escoger Líneas">
                                <option value="">---Escoger Líneas---</option>
                                @foreach ($lineas as $linea)
                                    <option  value="{{$linea->id}}">{{$linea->descripcion}}</option>
                                @endforeach
                            </select>
                        </div>
                    </div>
                </div>
        </div>
        <div class="modal-footer justify-content-between">
          <button type="button" class="btn btn-dark" data-dismiss="modal">Añadir <i class="fas fa-times-circle"></i></button>
        </div>
      </div>
    </div>
</div>
