<table id="tabla" class="table table-hover table-sm">
    <thead class="thead-light">
        <tr>
            <th>#</th>
            <th>Indicador</th>
            <th>Meta</th>
            <th>Acciones</th>
        </tr>
    </thead>
    <tbody>
        @foreach ($indicadores as $indicador)
        <tr>
            <td>{{$loop->iteration}}</td>
            <td>{{$indicador->nombre_indicador}}</td>
            <td>{{$indicador->meta}}</td>
            <td style="width: 20%" class="text-center">
                
            <button type="button" class="btn btn-warning btn-sm" data-toggle="modal" data-id="{{$indicador->id}}" data-nombre="{{$indicador->nombre_indicador}}" data-eje="{{$indicador->eje_id}}" data-meta="{{$indicador->meta}}" data-target="#modalEdit" class="btn btn-warning btn-sm"> <i class="fas fa-pencil-alt"></i>Editar</button>
                <button type="button" class="btn btn-outline-success btn-sm"> <i class="fas fa-eye">Activo</i></button>
                
             </td>
        </tr>
        @endforeach
    </tbody>

</table>