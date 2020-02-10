<div class="modal fade" id="editModals">
    <div class="modal-dialog modal-lg">
      <div class="modal-content">
        <div class="modal-header" style="background:#fcd846">
          <h4 class="modal-title">Editar Documentos <i class="fas fa-user-plus"></i></h4>
          <button type="button" class="close" data-dismiss="modal" aria-label="Close">
            <span aria-hidden="true">&times;</span>
          </button>
        </div>
        <div class="modal-body" style="background:whitesmoke">
            <form id="form_update" action="{{route('documentos.update', 'documento')}}" method="POST">
                @csrf
                @method('PATCH')
                <input type="hidden" name="id_documento" id="id_documento">
                <div class="form-row">
                    <div class="col-md-6">
                        <label for="">Nombre del Documento:</label>
                        <input type="text" name="tipo_documento" id="tipo_documento" class="form-control">
                    </div>
                    <div class="col-md-6">
                        <label for="">Categoria:</label>
                        <select name="categoria" id="categoria" class="form-control">
                            <option value="">-- Escoger --</option>
                            <option value="1">Juridico</option>
                            <option value="3">Natural</option>
                        </select>
                    </div>
                </div>
            </form>
        </div>
        <div class="modal-footer justify-content-between">
          <button type="button" class="btn btn-dark" data-dismiss="modal">Cerrar <i class="fas fa-times-circle"></i></button>
          <button id="btn_update" type="button" class="btn btn-dark">Actualizar <i class="fas fa-save"></i></button>
        </div>
      </div>
    </div>
</div>
