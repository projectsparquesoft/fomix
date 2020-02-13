<table id="tabla" class="table table-hover table-sm">
    <thead class="thead-light">
        <tr>
            <th>#</th>
            <th>Nombre</th>
            <th>Razon Social</th>
            <th>Representante legal</th>
            <th class="text-center">Acciones</th>
        </tr>
    </thead>
    <tbody>
        @foreach ($solicitantes as $solicitante)
            <tr>
                <td>{{$loop->iteration}}</td>
                <td>{{$solicitante->nombre}}</td>
                <td>{{$solicitante->razon_social}}</td>
                <td>{{$solicitante->representante_legal}}</td>
                <td class="text-center">
                   <button type="button" class="btn btn-warning btn-sm" data-toggle="modal" data-target="#modalEdit" data-id="{{$solicitante->id}}"   data-persona_id="{{$solicitante->persona_id}}"  data-proponente_id="{{$solicitante->proponente_id}}"
                     data-nid="{{$solicitante->nid}}" data-nombre="{{$solicitante->nombre}}" data-apellido="{{$solicitante->apellido}}" data-razon_social="{{$solicitante->razon_social}}" data-email="{{$solicitante->email}}"
                   data-direccion="{{$solicitante->direccion}}" data-celular="{{$solicitante->celular}}" data-id_departamento="{{$solicitante->municipio->departamento->id}}" data-municipio_id="{{$solicitante->municipio_id}}"
                     data-representante_legal="{{$solicitante->representante_legal}}"   class="btn btn-warning btn-sm"> <i class="fas fa-pencil-alt"></i>Editar</button>
                </td>
            </tr>
        @endforeach
    </tbody>
</table>

