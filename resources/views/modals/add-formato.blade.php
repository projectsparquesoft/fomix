<div class="modal fade" id="modalFormato">
    <div class="modal-dialog modal-lg">
      <div class="modal-content">
        <div class="modal-header" style="background:#fcd846">
          <h4 class="modal-title">Añadir Formato <i class="fas fa-user-plus"></i></h4>
          <button type="button" class="close" data-dismiss="modal" aria-label="Close">
            <span aria-hidden="true">&times;</span>
          </button>
        </div>
        <div class="modal-body" style="background:whitesmoke">
                <div class="">
                    <form id="form_create" action="{{route('proyecto.store')}}" method="POST" onkeypress="return disableEnterKey(event);">
                        @csrf
                        <div class="form-row">
                            <div class="col-md-6">
                                <label for="">Título</label>
                                <input type="text" class="form-control">
                            </div>
                            <div class="col-md-6">
                                <label for="descripcion" ><strong>Descripción del proyecto:</strong></label>
                                <textarea class="form-control" name="descripcion" placeholder="(Describa en que consiste el proyecto, máximo 10 lineas)" class="form-control"></textarea>
                            </div>
                            <div class="col-md-6">
                                <label for="">Fecha de Inicio</label>
                                <input type="date" class="form-control">
                            </div>
                            <div class="col-md-6">
                                <label for="">Fecha Final</label>
                                <input type="date" class="form-control">
                            </div>
                            <div class="col-md-12">
                                <label for="">Proponentes:</label>
                                <select name="proponente_id" id="" class="form-control">
                                    @foreach ($proponentes as $proponente)
                                <option value="{{$proponente->id}}">{{$proponente->nombre_proponente}}</option>
                                    @endforeach
                                </select>
                            </div>
                        </div>
                    </form>
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
