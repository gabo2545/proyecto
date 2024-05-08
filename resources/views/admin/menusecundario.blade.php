
<nav class="navbar navbar-expand-lg  p-md-3">
      <div class="container">
        <a class="navbar-brand" href="inicio.php">Reportes Mantenimiento</a>
        <img src="{{asset('static/imagen/Logoinicio.png')}}">
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false"aria-label="Toggle navigation">
          <span class="navbar-toggler-icon"></span>

        </button>
        <div class="collapse navbar-collapse" id="navbarNav">
          <div class="mx-auto"></div>
          <ul class="navbar-nav">
          <li class="nav-item">
              <a class="nav-link" href="{{ url('admines') }}">Pendientes</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="{{ url('seguidos') }}">Seguimientos</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="{{ url('final') }}">Finalizados</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="{{ url('tipo') }}">Tipo De Equipos</a>
            </li>
            <li class="nav-item dropdown">
          <a class="nav-link dropdown-toggle " href="#" id="navbarScrollingDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false">
            Configuración
          </a>
          <ul class="dropdown-menu text-center" aria-labelledby="navbarScrollingDropdown">
            <li><a class="dropdown-item" href="{{ url('perfil') }}">Perfil</a></li>
            <li><a class="dropdown-item" href="{{ url('perfil') }}">Agregar</a></li>
            <li><a class="dropdown-item" href="#">Modificar</a></li>
            <li><a class="dropdown-item" href="#">Eliminar</a></li>
            <li>
                @if(session('isLoggedIn'))
                    <div class="mt-auto fondo rounded">
                        <form id="logout-form" action="{{ route('logout') }}" method="POST">
                            @csrf
                                <button type="submit" class="btn-custom btn d-flex align-items-center rounded" style="width: 100%">
                                    <span class="text-center flex-grow-1">Salir</span>
                                </button>
                        </form>
                    </div>
                @endif
            </li>
          </ul>
        </li>
          </ul>
        </div>
      </div>
    </nav>
