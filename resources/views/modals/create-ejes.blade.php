<div class="modal fade" id="modalCreate" data-backdrop="static">
    <div class="modal-dialog modal-lg">
      <div class="modal-content">
        <div class="modal-header" style="background:#A2ECB4">
          <h4 class="modal-title">Crear Eje <i class="fas fa-check-double"></i></h4>
          <button type="button" class="close" data-dismiss="modal" aria-label="Close">
            <span aria-hidden="true">&times;</span>
          </button>
        </div>
        <div class="modal-body" style="background:#D5DBDB">
            <form id="form_create" action="{{route('ejes.store')}}" method="POST" onkeypress="return disableEnterKey(event);">
                @csrf
                <div class="form-row">
                    <div class="col-md-6">
                        <label for="">Nombre del Eje:</label>
                        <input type="text" name="nombre_eje" class="form-control">
                    </div>
                    <div class="col-md-6">
                        <label for="">Nombre del Programa:</label>
                        <input type="text" class="form-control" name="nombre_programa">
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
