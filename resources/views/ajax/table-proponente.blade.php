<table id="tabla" class="table table-bordered table-hover text-nowrap">
    <thead>
        <tr>
            <th>Nombre del proponente</th>
            <th>Acciones</th>
        </tr>
    </thead>
    <tbody>
        @foreach ($proponentes as $proponente)
            <tr>
            <td>{{$proponente->nombre_proponente}}</td>
            <td>
                <a href="" class="btn btn-info btn-md">  <i class="fas fa-pencil-alt"></i>Editar</a>
                <a href="" class="btn btn-primary btn-md"> <i class="fas fa-folder"></i>Detalle</a>
            </td>
            </tr>
        @endforeach
    </tbody>

</table>
