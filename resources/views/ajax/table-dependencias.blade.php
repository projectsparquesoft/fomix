<table class="mb-0 table table-hover">
    <thead >
        <tr>
            <th>Nombre de la Dependencia</th>
            <th>Descripción</th>
            <th>Acciones</th>
        </tr>
    </thead>
<tbody>
    @if ($dependencias->count() > 0)

    @foreach ($dependencias as $dependencia)
        <tr>
            <td>{{ $dependencia->nombre_dependencia }}</td>
            <td>{{ $dependencia->descripcion}}</td>
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

<!--RENDER PAGINATION-->
<hr>
<nav aria-label="Page navigation example">
    {!!$dependencias->render()!!}
</nav>
