<aside class="main-sidebar sidebar-dark-primary elevation-4">
  <!-- Brand Logo -->
  <a href="javascript:void(0)" class="brand-link">
    <img src="{{asset('img/fonmix.jpg')}}" alt="AdminLTE Logo" class="brand-image img-circle elevation-3" style="">
    <span class="brand-text font-weight-light">Fondo Mixto</span>
  </a>

  <!-- Sidebar -->
  <div class="sidebar">
    <!-- Sidebar user (optional) -->
    <div class="user-panel mt-3 pb-3 mb-3 d-flex">
      <div class="image">
        <img src="{{asset('img/user2-160x160.jpg')}}" class="img-circle elevation-2" alt="Fondo Mixto">
      </div>
      <div class="info">
        <a href="javascript:void(0)" class="d-block">{{Auth::user()->email}}</a>
      </div>
    </div>

    @php
      function activeMenu(array $urls)
      {
        foreach ($urls as $url)
        {
          if (Route::is($url)){
            return 'menu-open';
            break;
          }
        }
      }

      function activeSubMenu($url)
      {
      return Route::is($url) ? 'active' : '';
      }
    @endphp

    <!-- Sidebar Menu -->
    <nav class="mt-2">
      <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu" data-accordion="false">
        <!-- Add icons to the links using the .nav-icon class
               with font-awesome or any other icon font library -->
        <li class="nav-item has-treeview">
          <a href="#" class="nav-link">
            <i class="nav-icon fas fa-users"></i>
            <p>
              Recepción
              <i class="right fas fa-angle-left"></i>
            </p>
          </a>
          <ul class="nav nav-treeview">
            <li class="nav-item">
              <a href="{{route('solicitante.index')}}" class="nav-link">
                <i class="far fa-user nav-icon"></i>
                <p>Solicitantes</p>
              </a>
            </li>
            <li class="nav-item">
              <a href="{{route('solicitud.index')}}" class="nav-link">
                <i class="far fa-file-alt nav-icon"></i>
                <p>Solicitudes</p>
              </a>
            </li>
          </ul>
        </li>

        <li class="nav-item has-treeview">
          <a href="#" class="nav-link">
            <i class="fas fa-male nav-icon"></i>
            <p>
              Gerencia
              <i class="right fas fa-angle-left"></i>
            </p>
          </a>
          <ul class="nav nav-treeview">
            <li class="nav-item">
              <a href="javascript:void(0)" class="nav-link">
                <i class="far fa-file nav-icon"></i>
                <p>Proyectos</p>
              </a>
            </li>
            <li class="nav-item">
              <a href="javascript:void(0)" class="nav-link">
                <i class="far fa-users-cog nav-icon"></i>
                <p>Atencion de Solicitudes</p>
              </a>
            </li>
            <li class="nav-item">
              <a href="javascript:void(0)" class="nav-link">
                <i class="far fa-user-friends nav-icon"></i>
                <p>Dependencias</p>
              </a>
            </li>
            <li class="nav-item">
              <a href="javascript:void(0)" class="nav-link">
                <i class="far fa-users nav-icon"></i>
                <p>Empleados</p>
              </a>
            </li>
            <li class="nav-item">
              <a href="javascript:void(0)" class="nav-link">
                <i class="far fa-exchange-alt nav-icon"></i>
                <p>Cambio de empleados</p>
              </a>
            </li>
          </ul>
        </li>

        <li class="nav-item has-treeview">
          <a href="#" class="nav-link">
            <i class="nav-icon fas fa-tachometer-alt"></i>
            <p>
              Juridica
              <i class="right fas fa-angle-left"></i>
            </p>
          </a>
          <ul class="nav nav-treeview">

            <li class="nav-item">
              <a href="javascript:void(0)" class="nav-link">
                <i class="far fa-circle nav-icon"></i>
                <p>Atencion de Peticiones</p>
              </a>
            </li>
          </ul>
        </li>

        <li
          class="nav-item has-treeview {{activeMenu(['proponente*', 'indicador.*', 'linea.*', 'tipo_poblacion*', 'poblacion*', 'documentos*'])}}">
          <a href="" class="nav-link">
            <i class="nav-icon fas fa-cogs"></i>
            <p>
              Parametros
              <i class="right fas fa-angle-left"></i>
            </p>
          </a>
          <ul class="nav nav-treeview">
            <li class="nav-item">
              <a href="{{route('proponente.index')}}" class="nav-link">
                <i class="far fa-circle nav-icon"></i>
                <p>Proponentes</p>
              </a>
            </li>
            <li class="nav-item">
              <a href="{{route('indicadores.index')}}" class="nav-link">
                <i class="far fa-circle nav-icon"></i>
                <p>Indicadores</p>
              </a>
            </li>
            <li class="nav-item">
              <a href="{{route('lineas.index')}}" class="nav-link">
                <i class="far fa-circle nav-icon"></i>
                <p>Lineas</p>
              </a>
            </li>
            <li class="nav-item">
              <a href="{{route('tipopoblacion.index')}}" class="nav-link">
                <i class="far fa-circle nav-icon"></i>
                <p>Tipo de Población</p>
              </a>
            </li>
            <li class="nav-item">
              <a href="{{route('poblacion.index')}}" class="nav-link">
                <i class="far fa-circle nav-icon"></i>
                <p>Poblacion</p>
              </a>
            </li>
            <li class="nav-item">
              <a href="{{route('documentos.index')}}" class="nav-link {{activeSubMenu('documentos*')}}">
                <i class="fas fa-file-pdf nav-icon"></i>
                <p>Documentos</p>
              </a>
            </li>

          </ul>
        </li>





      </ul>
    </nav>
    <!-- /.sidebar-menu -->
  </div>
  <!-- /.sidebar -->
</aside>