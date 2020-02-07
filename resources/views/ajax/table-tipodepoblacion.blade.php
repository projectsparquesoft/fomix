<table id="tabla" class="table table-bordered table-hover">
    <thead>
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
                <a href="" class="btn btn-info btn-sm">  <i class="fas fa-pencil-alt"></i>Editar</a>
                <a href="" class="btn btn-primary btn-sm"> <i class="fas fa-folder"></i>Detalle</a>
            </td>
            </tr>
        @endforeach
    </tbody>

</table>
