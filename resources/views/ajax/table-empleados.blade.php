<table id="tabla" class="table table-hover table-sm">
    <thead class="thead-light">
        <tr>
            <th>#</th>
            <th>Empleado</th>
            <th>Email</th>
            <th>Celular</th>
            <th>Dependencia</th>
            <th>Jefe</th>
            <th>Accion</th>
        </tr>
    </thead>
    <tbody>
        @foreach ($empleados as $empleado)
        <tr>
            <td>{{$loop->iteration}}</td>
            <td>{{$empleado->name_complete}}</td>
            <td>{{$empleado->email}}</td>
            <td>{{$empleado->celular}}</td>
            <td>{{$empleado->currentDependencia->first()->nombre_dependencia}}</td>
            <td>
                @if($empleado->is_jefe)
                    <button class="btn badge bg-gradient-primary sm" onclick="changeBoss('{{ route('empleados.status', $empleado->id) }}');">SI</button>
                 @else
                    <button class="btn badge bg-gradient-info sm" onclick="changeBoss('{{ route('empleados.status', $empleado->id) }}');">NO</button>
                @endif
            </td>
            <td class="text-center">
            <button type="button" class="btn btn-warning btn-sm" data-toggle="modal" data-id="{{$empleado->id}}" data-nid="{{$empleado->nid}}" data-nombre="{{$empleado->nombre}}" data-apellido="{{$empleado->apellido}}" data-email="{{$empleado->email}}" data-celular="{{$empleado->celular}}" data-jefe="{{$empleado->is_jefe}}" data-dependencia="{{$empleado->currentDependencia->first()->id}}" data-target="#modalEdit" class="btn btn-warning btn-sm"> <i class="fas fa-pencil-alt"></i>Editar</button>
            </td>
        </tr>
        @endforeach
    </tbody>

</table>
