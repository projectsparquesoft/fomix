<table id="tabla" class="table table-hover table-sm">
    <thead class="thead-right">
        <tr>
            <th>Item</th>
            <th>Clasificacion</th>
            <th>Detalle</th>
            <th style="width:20%" class="text-center">Acciones</th>
        </tr>
    </thead>
    <tbody>
        @foreach ($poblaciones as $poblacion)
            <tr>
                <td>{{$loop->iteration}}</td>
            <td>

                @if($poblacion->clasificacion_id == 1)
                    <span class="badge bg-gradient-primary">{{$poblacion->clasificacion->tipo_poblacion}}</span>
                @endif

                @if($poblacion->clasificacion_id == 2)
                    <span class="badge bg-warning">{{$poblacion->clasificacion->tipo_poblacion}}</span>
                @endif

                @if($poblacion->clasificacion_id == 3)
                    <span class="badge bg-primary">{{$poblacion->clasificacion->tipo_poblacion}}</span>
                @endif

                @if($poblacion->clasificacion_id == 4)
                    <span class="badge bg-dark">{{$poblacion->clasificacion->tipo_poblacion}}</span>
                @endif

                @if($poblacion->clasificacion_id > 4)
                    <span class="badge bg-danger">{{$poblacion->clasificacion->tipo_poblacion}}</span>
                @endif

            </td>
            <td>{{$poblacion->detalle}}</td>
            <td class="text-center">
                <a data-toggle="modal" data-target="#modalEdit"  data-id="{{$poblacion->id}}" data-item="{{$poblacion->item}}" data-clasificacion_id="{{$poblacion->clasificacion_id}}" data-detalle="{{$poblacion->detalle}}" class="btn btn-warning btn-sm">
                <i class="fas fa-pencil-alt"></i>Editar</a>
            </td>
            </tr>
        @endforeach
    </tbody>

</table>
