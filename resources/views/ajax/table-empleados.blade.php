<table class="mb-0 table table-hover">
    <thead>
        <tr>
            <th>Nombre</th>
            <th>Apellido</th>
            <th>Nid|CC</th>
            <th>Acciones</th>

        </tr>
    </thead>
    <tbody>
        @if ($empleados->count() > 0)

        @foreach ($empleados as $empleado)
            <tr>
                <td>{{$empleado->nombre}}</td>
                <td>{{$empleado->apellido}}</td>
                <td>{{$empleado->nid}}</td>
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
    {!!$empleados->render()!!}
</nav>

