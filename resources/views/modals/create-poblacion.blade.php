   <!----Modals create-->
   <div class="modal fade" id="poblacion">
    <div class="modal-dialog modal-lg">
      <div class="modal-content">
        <div class="modal-header" style="background:#fcd846">
          <h4 class="modal-title">Crear Población <i class="fas fa-user-plus"></i></h4>
          <button type="button" class="close" data-dismiss="modal" aria-label="Close">
            <span aria-hidden="true">&times;</span>
          </button>
        </div>
        <div class="modal-body" style="background:whitesmoke">
            <form id="form_poblacion" action="{{route('poblacion.store')}}" method="POST">
                @csrf
                <div class="form-row">
                    <div class="col-md-6">
                        <label for="">Clasificación:</label>
                        <select name="clasificacion_id" id="" class="form-control">
                            <option value="">--Escoger Clasificación</option>
                            @foreach ($clasificaciones as $clasificacion)
                            <option value="{{$clasificacion->id_clasificacion}}">{{$clasificacion->tipo_poblacion}}</option>
                            @endforeach
                        </select>
                    </div>
                    <div class="col-md-6">
                        <label for="">Detalle:</label>
                       <input type="text" class="form-control" name="detalle" >
                    </div>

                </div>
            </form>
        </div>
        <div class="modal-footer justify-content-between">
          <button type="button" class="btn btn-dark" data-dismiss="modal">Cerrar <i class="fas fa-times-circle"></i></button>
          <button id="botonpoblacion" type="button" class="btn btn-dark">Guardar <i class="fas fa-save"></i></button>
        </div>
      </div>
    </div>
</div>
