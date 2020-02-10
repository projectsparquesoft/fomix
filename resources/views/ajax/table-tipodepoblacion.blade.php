<div class="card-body table-responsive" id="id_table_tipopoblacion">
    <table id="tabla" class="table table-bordered table-hover">
        <thead class="thead-light">
            <tr>
                <th>Tipo de Población</th>
                <th>Estado</th>
                <th>Accion</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($tipopoblaciones as $tipopoblacion)
                <tr>
                <td>{{$tipopoblacion->tipo_poblacion}}</td>
                <td>{{$tipopoblacion->status}}</td>
                <td class="text-center">
                    <a data-toggle="modal" data-target="#editModals"  data-id="{{$tipopoblacion->id_clasificacion}}" data-tipo_poblacion="{{$tipopoblacion->tipo_poblacion}}" class="btn btn-warning btn-md">
                        <i class="fas fa-pencil-alt"></i>Editar</a>
                    <a href="" class="btn btn-dark btn-md disabled color-palette"> <i class="fas fa-folder"></i>Detalle</a>
                </td>
                </tr>
            @endforeach
        </tbody>

    </table>
</div>
