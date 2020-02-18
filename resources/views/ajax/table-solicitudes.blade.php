<table id="tabla" class="table table-hover table-sm">
    <thead class="thead-light">
        <tr>
            <th>#</th>
                <th>Categoria</th>
                <th>Solicitante</th>
                <th>Descripción</th>
                <th>Archivo</th>
                <th class="text-center">Acciones</th>
            </tr>
    </thead>
    <tbody>
        @foreach ($solicitudes as $solicitud)
        <tr>
            <td>{{$loop->iteration}}</td>
            <td>{{$solicitud->categoria->tipo_solicitud}}</td>
            <td>
                @if ($solicitud->solicitante->razon_social)
                {{$solicitud->solicitante->razon_social}}
                @else 
                {{$solicitud->solicitante->nombre}} {{$solicitud->solicitante->apellido}}
                @endif
            </td>
            <td>{{$solicitud->descripcion}}</td>
            <td>{{$solicitud->archivo}}</td>
            <td class="text-center">
                <button type="button" id="btn_show_detail" class="btn btn-warning btn-sm" data-toggle="modal" data-href="{{route('solicitud.show', $solicitud->id)}}" data-target="#modalShow" data-content="Ver detalle de solicitud" rel="popover" data-placement="top" data-trigger="hover"><i class="fas fa-eye"></i></button>
                <button type="button" id="btn_document_detail" class="btn btn-success btn-sm" data-content="Anexar Documentos" rel="popover" data-placement="top" data-trigger="hover"><i class="fas fa-file-alt"></i></button>
                <button type="button" id="btn_gerencia_detail" class="btn btn-info btn-sm" data-content="Enviar a Gerencia" rel="popover" data-placement="top" data-trigger="hover"><i class="fas fa-share-square"></i></button>
            </td>
        </tr>

        @endforeach

    </tbody>
</table>
