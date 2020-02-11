<table id="tabla" class="table table-bordered table-hover text-nowrap">
    <thead class="thead-light">
        <tr>
            <th>#</th>
            <th>Solicitante</th>
            <th>Celular</th>
            <th>Representante Legal</th>
            <th>Acciones</th>
        </tr>
    </thead>
    <tbody>

        @foreach($solicitantes as $solicitante)
        <tr>
            <th scope="row">{{$loop->iteration}}</th>
            <td>{{$solicitante->razon_social}}</td>
            <td>{{$solicitante->celular}}</td>
            <td>{{$solicitante->representante_legal}}</td>
            <td>
                <a href="" class="btn btn-warning btn-md"><i class="fas fa-pencil-alt"></i>Editar</a>
                <a href="" class="btn btn-dark btn-md disabled color-palette"> <i class="fas fa-folder"></i>Detalle</a>
            </td>
        </tr>
        @endforeach
    </tbody>

</table>
