<table id="tabla" class="table table-hover table-sm">
    <thead class="thead-light">
        <tr>
            <th>#</th>
            <th>Nombre de la Fuente de Verificación</th>
            <th class="text-center">Acciones</th>
        </tr>
    </thead>
    <tbody>
        @foreach ($fuentes as $fuente)
        <tr>
            <td>{{$loop->iteration}}</td>
            <td> {{$fuente->fuente_verificacion}}</td>
            <td class="text-center">
                <button type="button" class="btn btn-warning btn-sm" data-toggle="modal" data-id="{{$fuente->id}}" data-fuente_verificacion="{{$fuente->fuente_verificacion}}"  data-target="#modalEdit" class="btn btn-warning btn-sm"> <i class="fas fa-pencil-alt"></i>Editar</button>
            </td>

        </tr>
        @endforeach

    </tbody>
</table>

