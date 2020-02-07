<table id="id_tabla_indicadores" class="table table-bordered table-hover text-nowrap">
    <thead>
        <tr>
            <th>Nombre del Indicador</th>
            <th>Estado</th>
            <th>Acciones</th>
        </tr>
    </thead>
    <tbody>
        @foreach ($indicadores as $indicador)
            <tr>
            <td>{{$indicador->nombre_indicador}}</td>
            <td>{{$indicador->status}}</td>
            <td>
                <a href="" class="btn btn-info btn-md">  <i class="fas fa-pencil-alt"></i>Editar</a>
                <a href="" class="btn btn-primary btn-md"> <i class="fas fa-folder"></i>Detalle</a>
            </td>
            </tr>
        @endforeach
    </tbody>

</table>
