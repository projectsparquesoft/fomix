<table id="tabla" class="table table-bordered table-hover text-nowrap">
    <thead>
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
                <a href="" class="btn btn-info btn-md">  <i class="fas fa-pencil-alt"></i>Editar</a>
                <a href="" class="btn btn-primary btn-md"> <i class="fas fa-folder"></i>Detalle</a>
            </td>
            </tr>
        @endforeach
    </tbody>

</table>
