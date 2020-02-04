<table class="mb-0 table table-hover">
    <thead>
        <tr>
            <th>#</th>
            <th>Solicitante</th>
            <th>Celular</th>
            <th>Representante Legal</th>
            <th>Acciones</th>
        </tr>
    </thead>
    <tbody>
        @if ($solicitantes->count() > 0)

        @foreach($solicitantes as $solicitante)
        <tr>
            <th scope="row">{{$loop->iteration}}</th>
            <td>{{$solicitante->razon_social}}</td>
            <td>{{$solicitante->celular}}</td>
            <td>{{$solicitante->representante_legal}}</td>
            <td class="text-center">
                <a data-toggle="tooltip" title="" data-placement="bottom" class="btn-transition btn btn-outline-info"
                    data-original-title="Editar"><i class="pe-7s-pen height-icon"></i></a>
                <a data-toggle="tooltip" title="" data-placement="bottom" class="btn-transition btn btn-outline-info"
                    data-original-title="Ver Detalle"><i class="pe-7s-note2 height-icon"></i></a>
            </td>
        </tr>
        @endforeach

        @else
        <tr>
            <td scope="row" colspan="5">Resultados no encontrados...</td>
        </tr>

        @endif


    </tbody>
</table>
<hr>
<nav aria-label="Page navigation example">
    {!!$solicitantes->render()!!}
</nav>