<div class="modal fade" id="modalCreate" data-backdrop="static">
    <div class="modal-dialog modal-lg">
      <div class="modal-content">
        <div class="modal-header" style="background:#fcd846">
          <h4 class="modal-title">Fuente de Verificación <i class="fab fa-artstation"></i></h4>
          <button type="button" class="close" data-dismiss="modal" aria-label="Close">
            <span aria-hidden="true">&times;</span>
          </button>
        </div>
        <div class="modal-body" style="background:whitesmoke">
            <form id="form_create" action="{{route('fuente_verificacion.store')}}" method="POST" onkeypress="return disableEnterKey(event);">
                @csrf
                <div class="form-row">
                    <div class="col-md-12">
                        <label for="">Nombre de la Fuente de Verificación:</label>
                        <input type="text" name="fuente_verificacion" class="form-control">
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
