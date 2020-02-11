<table id="tabla" class="table table-hover table-sm">
    <thead class="thead-light">
        <tr>
            <th>#</th>
            <th>Nombre del proponente</th>
            <th>Acciones</th>
        </tr>
    </thead>
    <tbody>
        @foreach ($proponentes as $proponente)
            <tr>
            <td>{{$loop->iteration}}</td>
            <td>{{$proponente->nombre_proponente}}</td>
            <td>
                <button type="button" class="btn btn-warning btn-sm" data-toggle="modal" data-id="{{$proponente->id}}" data-nombre_proponente="{{$proponente->nombre_proponente}}"  data-target="#modalEdit" class="btn btn-warning btn-sm"> <i class="fas fa-pencil-alt"></i>Editar</button>
            </td>
            </tr>
        @endforeach
    </tbody>

</table>
