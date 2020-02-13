<table id="tabla" class="table table-hover table-sm">
    <thead class="thead-light">
        <tr>
            <th>#</th>
                <th>Categoria</th>
                <th>Solicitante</th>
                <th>Descripción</th>
                <th>Archivo</th>
                <th class="text-center">Acciones</th>
            </tr>
    </thead>
    <tbody>
        @foreach ($solicitudes as $solicitud)
        <tr>
            <td>{{$loop->iteration}}</td>
            <td>{{$solicitud->categoria->tipo_solicitud}}}</td>
            <td>{{$solicitud->solicitante->razon_social}}</td>
            <td>{{$solicitud->descripcion}}</td>
            <td>{{$solicitud->archivo}}</td>
            <td>hola</td>
        </tr>

        @endforeach

    </tbody>
</table>
