<nav class="navbar navbar-expand-lg  p-md-3">
      <div class="container">
        <a class="navbar-brand" href="/">CECSA Citas Mantenimiento</a>
          <img src="{{asset('static/imagen/Logoinicio.png')}}">
          <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false"aria-label="Toggle navigation">
          <span class="navbar-toggler-icon"></span>

        </button>
        <div class="collapse navbar-collapse" id="navbarNav">
          <div class="mx-auto"></div>
          <ul class="navbar-nav">
            <li class="nav-item">
              <a class="nav-link" href="{{ url('sesion') }}">Inicio De Sesión</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="{{ url('registrar') }}">Registrate</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="{{ url('acerca') }}">Acerca De</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="{{ url('contacto') }}">Contactos</a>
            </li>
          </ul>
        </div>
      </div>
    </nav>
