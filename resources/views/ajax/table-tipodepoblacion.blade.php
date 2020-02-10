 <table id="tabla" class="table table-hover table-sm">
        <thead class="thead-light">
            <tr>
                <th>Item</th>
                <th>Tipo de Población</th>
                <th>Estado</th>
                <th class="text-center">Acciones</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($tipopoblaciones as $tipopoblacion)
                <tr>
                    <td>{{$loop->iteration}}</td>
                <td>{{$tipopoblacion->tipo_poblacion}}</td>
                <td>
                    @if($tipopoblacion->status)

                    <button class="btn badge bg-gradient-primary sm" onclick="changeStatus('{{ route('tipopoblacion.status', $tipopoblacion->id) }}');">Activo</button>
                    @else
                    <button class="btn badge bg-gradient-info sm" onclick="changeStatus('{{ route('tipopoblacion.status', $tipopoblacion->id) }}');">Inactivo</button>
                    @endif
                </td>
                <td class="text-center">
                    <a data-toggle="modal" data-target="#modalEdit"  data-id="{{$tipopoblacion->id}}" data-tipo_poblacion="{{$tipopoblacion->tipo_poblacion}}" class="btn btn-warning btn-sm">
                        <i class="fas fa-pencil-alt"></i>Editar</a>
                </td>
                </tr>
            @endforeach
        </tbody>

    </table>

