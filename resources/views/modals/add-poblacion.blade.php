<div class="modal fade" id="modalPoblacion">
    <div class="modal-dialog modal-lg">
      <div class="modal-content">
        <div class="modal-header" style="background:#fcd846">
          <h4 class="modal-title">Añadir Población <i class="fas fa-user-plus"></i></h4>
          <button type="button" class="close" data-dismiss="modal" aria-label="Close">
            <span aria-hidden="true">&times;</span>
          </button>
        </div>
        <div class="modal-body" style="background:whitesmoke">
            <form id="form_create" action="{{route('poblacion.store')}}" method="POST" onkeypress="return disableEnterKey(event);">
                @csrf
                <div class="form-row">
                    <div class="table-responsive">
                        <table class="table table-light">
                            <thead class="thead-light">
                                <tr>
                                    <th>Item</th>
                                    <th>Clasificación</th>
                                    <th>Detalle</th>
                                    <th>Número de personas</th>
                                    <th>Fuente de verificación</th>

                                </tr>
                            </thead>
                            <tbody>
                                @foreach ($poblaciones as $poblacion)
                                <tr>
                                        <td>{{$loop->iteration}}</td>
                                        <td>{{$poblacion->clasificacion->tipo_poblacion}}</td>
                                        <td>{{$poblacion->detalle}}</td>
                                        <td><input type="text" class="form-control"></td>
                                        <td><input type="text" class="form-control"></td>
                                </tr>
                                @endforeach
                            </tbody>
                        </table>
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
