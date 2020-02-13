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

            <form id="form_create" action="{{route('solicitud.store')}}" method="POST" onkeypress="return disableEnterKey(event);" enctype="multipart/form-data">
                @csrf
                <div class="form-row">
                    <div class="col-md-6">
                        <label for="">Categoria:</label>
                        <select name="categoria_id" id="" class="form-control">
                            @foreach ($categorias as $categoria)
                            <option value="{{$categoria->id}}">{{$categoria->tipo_solicitud}}</option>
                            @endforeach
                        </select>
                    </div>
                    <div class="col-md-6">
                        <label for="">Solicitante:</label>
                        <select name="solicitante_id" id="" class="form-control">
                        @foreach ($solicitantes as $solicitante)
                        <option value="{{$solicitante->id}}">{{$solicitante->razon_social}}</option>
                        @endforeach
                        </select>

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
          <button type="button" class="btn btn-dark" data-dismiss="modal">Cerrar <i class="fas fa-times-circle"></i></button>
      {{--<button id="guardar" type="button" class="btn btn-dark">Guardar <i class="fas fa-save"></i></button>--}}
        </div>
      </div>
    </div>
</div>
