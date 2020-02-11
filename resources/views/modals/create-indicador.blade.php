<div class="modal fade" id="modalCreate">
    <div class="modal-dialog modal-lg">
      <div class="modal-content">
        <div class="modal-header" style="background:#fcd846">
          <h4 class="modal-title">Crear Indicadores <i class="fas fa-user-plus"></i></h4>
          <button type="button" class="close" data-dismiss="modal" aria-label="Close">
            <span aria-hidden="true">&times;</span>
          </button>
        </div>
        <div class="modal-body" style="background:whitesmoke">
          <form id="form_create" action="{{route('indicadores.store')}}" method="POST">
            @csrf

            <div class="form-row">

              <div class="col-lg-12 col-md-12 col-sm-12 col-xl-12">
                <label for="">Nombre del Indicador:</label>
                <input type="text" name="nombre_indicador"  id="nombre_indicador" class="form-control">
              </div>

              <div class="col-lg-8 col-md-8 col-sm-12 col-xl-12">
                <label for="">Eje:</label>
                <select class="form-control" name="eje_id" id="eje_id">
                  <option value="">-- Escoger Opcion --</option>
                  @foreach ($ejes as $eje)
                    <option value="{{$eje->id_eje}}">{{$eje->nombre_programa}}</option>
                  @endforeach
                </select>
              </div>

              <div class="col-lg-4 col-md-4 col-sm-12 col-xl-12">
                <label for="">Meta:</label>
                <input type="number" name="meta" id="meta" class="form-control">
              </div>

            </div>
          </form>
        </div>
        <div class="modal-footer justify-content-between">
          <button type="button" class="btn btn-dark" data-dismiss="modal">Cerrar <i
              class="fas fa-times-circle"></i></button>
          <button id="guardar" type="button" class="btn btn-dark">Guardar <i class="fas fa-save"></i></button>
        </div>
      </div>
    </div>
  </div>