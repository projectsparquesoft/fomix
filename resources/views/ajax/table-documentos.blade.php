<table id="tabla" class="table table-bordered table-hover table-md">
    <thead class="thead-light">
        <tr>
            <th>Nombre del Documento</th>
            <th>Categoria</th>
            <th>Acciones</th>
        </tr>
    </thead>
    <tbody>
        @foreach ($documentos as $documento)
            <tr>
            <td>{{$documento->tipo_documento}}</td>
            <td>{{$documento->categoria}}</td>

            <td>
            <a data-toggle="modal" data-target="#editModals"  data-id="{{$documento->id_documento}}" data-tipo_documento="{{$documento->tipo_documento}}" data-categoria="{{$documento->categoria}}" class="btn btn-warning btn-md">
                <i class="fas fa-pencil-alt"></i>Editar</a>
            </td>
            </tr>
        @endforeach
    </tbody>

</table>
