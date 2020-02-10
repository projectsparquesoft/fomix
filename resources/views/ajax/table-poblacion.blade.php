<table id="tabla" class="table table-bordered table-hover text-nowrap">
    <thead class="thead-right">
        <tr>
            <th>Item</th>
            <th>Clasificacion</th>
            <th>Detalle</th>
            <th>Acciones</th>
        </tr>
    </thead>
    <tbody>
        @foreach ($poblaciones as $poblacion)
            <tr>
            <td>{{$poblacion->item}}</td>
            <td>{{$poblacion->clasificacion_id}}</td>
            <td>{{$poblacion->detalle}}</td>
            <td>
                <a data-toggle="modal" data-target="#editModals"  data-id="{{$poblacion->id_poblacion}}" data-item="{{$poblacion->item}}" data-clasificacion_id="{{$poblacion->clasificacion_id}}" data-detalle="{{$poblacion->detalle}}" class="btn btn-warning btn-md">
                <i class="fas fa-pencil-alt"></i>Editar</a>
                <a href="" class="btn btn-dark btn-md disabled color-palette"> <i class="fas fa-folder"></i>Detalle</a>
            </td>
            </tr>
        @endforeach
    </tbody>

</table>
