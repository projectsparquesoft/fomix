<table id="tabla" class="table table-hover table-sm">
        <thead class="thead-light">
            <tr>
                <th>#</th>
                <th>Línea</th>
                <th>Descripción</th>
                <th>Estado</th>
                <th style="width:20%" class="text-center">Acciones</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($lineas as $linea)
                <tr>
                    <td>{{$loop->iteration}}</td>    
                    <td>{{$linea->nombre_linea}}</td>
                    <td>{{$linea->descripcion}}</td>
                    <td>
                        @if($linea->status)
                        <button class="btn badge bg-gradient-primary sm" onclick="changeLinea('{{ route('lineas.status', $linea->id) }}'); ">Activo</button>
                        @else
                        <button class="btn badge bg-gradient-info sm" onclick="changeLinea('{{ route('lineas.status', $linea->id) }}'); ">Inactivo</button>
                        @endif
                    </td>
                    <td class="text-center">
                        <button type="button" class="btn btn-warning btn-sm" data-toggle="modal" data-id="{{$linea->id}}" data-nombre_linea="{{$linea->nombre_linea}}" data-descripcion="{{$linea->descripcion}}" data-target="#modalEdit" class="btn btn-warning btn-sm"> <i class="fas fa-pencil-alt"></i>Editar</button>
                    </td>
                </tr>
            @endforeach
        </tbody>
 </table>

