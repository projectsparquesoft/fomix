<table id="tabla" class="table table-hover table-sm">
    <thead class="thead-light">
        <tr>
            <th>#</th>
            <th>Indicador</th>
            <th>Meta</th>
            <th>Estado</th>
            <th>Acciones</th>
        </tr>
    </thead>
    <tbody>
        @foreach ($indicadores as $indicador)
        <tr>
            <td>{{$loop->iteration}}</td>
            <td>{{$indicador->nombre_indicador}}</td>
            <td>{{$indicador->meta}}</td>
            <td>
                @if($indicador->status)
                    <button class="btn badge bg-gradient-primary sm" onclick="changeStatus('{{ route('indicador.status', $indicador->id) }}');">Activo</button>
                 @else
                    <button class="btn badge bg-gradient-info sm" onclick="changeStatus('{{ route('indicador.status', $indicador->id) }}');">Inactivo</button>
                @endif
            </td>
            <td style="width: 20%" class="text-center">
                <button type="button" class="btn btn-warning btn-sm" data-toggle="modal" data-id="{{$indicador->id}}" data-nombre="{{$indicador->nombre_indicador}}" data-eje="{{$indicador->eje_id}}" data-meta="{{$indicador->meta}}" data-target="#modalEdit" class="btn btn-warning btn-sm"> <i class="fas fa-pencil-alt"></i>Editar</button>
             </td>
        </tr>
        @endforeach
    </tbody>

</table>