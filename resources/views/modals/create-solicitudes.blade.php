<div class="modal fade" id="modalCreate">
    <div class="modal-dialog modal-lg">
      <div class="modal-content">
        <div class="modal-header" style="background:#fcd846">
          <h4 class="modal-title">Añadir Solicitudes <i class="fas fa-user-plus"></i></h4>
          <button type="button" class="close" data-dismiss="modal" aria-label="Close">
            <span aria-hidden="true">&times;</span>
          </button>
        </div>
        <div class="modal-body" style="background:whitesmoke">

                <div class="form-row">

                    <div class="col-md-6">
                        <label for="">Categoria:</label>
                        <select name="categoria_id" id="" class="form-control">
                          <option selected>-- Escoger Opcion --</option>
                            @foreach ($categorias as $categoria)
                            <option value="{{$categoria->id}}">{{$categoria->tipo_solicitud}}</option>
                            @endforeach
                        </select>
                    </div>

                    <div class="col-md-6">
                      <div class="form-group">
                        <label for="">Solicitante:</label>
                        <select name="solicitante_id" id="" class="form-control select2" style="width: 100%;">
                          <option selected>-- Escoger Opcion --</option>
                          @foreach ($solicitantes as $solicitante)
                        <option value="{{$solicitante->id}}">@if($solicitante->razon_social) {{$solicitante->razon_social}} ({{$solicitante->name_complete}})</span> @else {{$solicitante->name_complete}}@endif</option>
                          @endforeach
                        </select>
                      </div>
                    </div>
                    <div class="col-md-6">
                        <label for="">Descripción:</label>
                        <textarea name="descripcion" class="form-control"></textarea>
                    </div>
                    <div class="col-md-6">
                        <label for="">Archivo:</label>
                        <input name="archivo" type="file" class="form-control">
                    </div>
                </div>
            </form>
        </div>
        <div class="modal-footer justify-content-between">
          <button type="button" class="btn btn-dark" data-dismiss="modal">Añadir <i class="fas fa-times-circle"></i></button>
        </div>
      </div>
    </div>
</div>
