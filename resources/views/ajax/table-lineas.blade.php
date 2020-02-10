<div class="card-body table-responsive" id="id_table_lineas">

    <table id="tabla" class="table table-bordered table-hover text-nowrap">
        <thead class="thead-light">
            <tr>
                <th>Nombre de la Línea</th>
                <th>Descripción</th>
                <th>Estado</th>
                <th>Acciones</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($lineas as $linea)
                <tr>
                <td>{{$linea->nombre_linea}}</td>
                <td>{{$linea->descripcion}}</td>
                <td>{{$linea->status}}</td>
                <td>
                    <a href="" class="btn btn-warning btn-md">  <i class="fas fa-pencil-alt"></i>Editar</a>
                    <a href="" class="btn btn-dark btn-md disabled color-palette"> <i class="fas fa-folder"></i>Detalle</a>
                </td>
                </tr>
            @endforeach
        </tbody>

    </table>

</div>
