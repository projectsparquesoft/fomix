<div class="modal fade" id="modalEdit">
    <div class="modal-dialog modal-lg">
      <div class="modal-content">
        <div class="modal-header" style="background:#fcd846">
          <h4 class="modal-title">Editar Líneas  <i class="fas fa-user-plus"></i></h4>
          <button type="button" class="close" data-dismiss="modal" aria-label="Close">
            <span aria-hidden="true">&times;</span>
          </button>
        </div>
        <div class="modal-body" style="background:whitesmoke">
            <form id="form_edit" action="{{route('lineas.update', 'lineas')}}" method="POST" onkeypress="return disableEnterKey(event);">
                @csrf
                @method('PATCH')
                <input type="hidden" name="id_row" id="id_row">
                <div class="form-row">
                    <div class="col-md-12">
                        <label for="">Nombre de la Línea:</label>
                        <input type="text" name="nombre_linea" id="nombre_linea" class="form-control">
                    </div>
                    <div class="col-md-12">
                        <label for="">Descripción:</label>
                        <textarea name="descripcion" id="descripcion" class="form-control"></textarea>
                    </div>
                </div>
            </form>
        </div>
        <div class="modal-footer justify-content-between">
          <button type="button" class="btn btn-dark" data-dismiss="modal">Cerrar <i class="fas fa-times-circle"></i></button>
          <button id="actualizar" type="button" class="btn btn-dark">Actualizar <i class="fas fa-pencil-alt"></i></button>
        </div>
      </div>
    </div>
</div>
