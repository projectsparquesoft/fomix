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
                <button type="button" id="btn_show_detail-{{$solicitud->id}}" class="botones show-details" data-toggle="modal" data-href="{{route('solicitud.show', $solicitud->id)}}" data-target="#modalShow"><i class="fas fa-eye" data-toggle="tooltip" data-placement="top" title="VER DETALLE"></i></button>
                @if ($solicitud->categoria->tipo_solicitud == 'Proyecto')<button type="button" id="btn_document_detail-{{$solicitud->id}}" class="botones add-documents" data-toggle="tooltip" data-placement="top" title="ANEXAR DOCUMENTOS"><i class="fas fa-file-alt"></i></button> @endif
            </td>
        </tr>

        @endforeach

    </tbody>
</table>
