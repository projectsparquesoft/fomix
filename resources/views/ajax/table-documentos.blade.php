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
                <a href="" class="btn btn-info btn-md">  <i class="fas fa-pencil-alt"></i>Editar</a>
                <a href="" class="btn btn-primary btn-md"> <i class="fas fa-folder"></i>Detalle</a>
            </td>
            </tr>
        @endforeach
    </tbody>

</table>
