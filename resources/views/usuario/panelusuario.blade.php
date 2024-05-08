<title>Panel Usuario</title>
    <meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Material+Symbols+Outlined:opsz,wght,FILL,GRAD@24,400,0,0" />
	<script src="../js/prueba.js" defer></script>
<link rel="stylesheet" href="{{ asset('static/css/main.css') }}">
<link rel="stylesheet" href="{{ asset('static/css/style.css') }}">
<link rel="stylesheet" href="{{ asset('static/css/admin.css') }}">


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
              <a class="nav-link" data-target="#crearsolicitud">Crear Una Solicitud</a>
            </li>
          <li class="nav-item">
              <a class="nav-link" data-target="#misolicitud">Mis Solicitudes</a>
            </li>
            <li class="nav-item dropdown">
          <a class="nav-link dropdown-toggle " href="#" id="navbarScrollingDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false">
            Configuración
          </a>
          <ul class="dropdown-menu text-center" aria-labelledby="navbarScrollingDropdown">
            <li><a class="dropdown-item" data-target="#perfil" >Perfil</a></li>
            <li><a class="dropdown-item" href="Login.php">Salir</a></li>
          </ul>
        </li>
          </ul>
        </div>
      </div>
    </nav>
	</div>

	<div class="content">
		<div data-content id="perfil" class="active">
			<h1>Perfil Usuario</h1>
            <div class="d-flex justify-content-center align-items-center ">
                <div class="bg-white p-4 rounded-4 text-secondary shadow" style="width: 25rem">
                <div class="d-flex justify-content-center">
                    <img src="{{asset('static/imagen/person.svg')}}" alt="login-icon" style="height: 10rem"/>
                </div>
              <form action="../../controladores/iniciar.php" method="POST"> <!-- Agregamos el formulario -->
                <div class="input-group mt-3">
                  <div class="input-group-text bg-warning">
                    <img src="{{asset('static/imagen/Usuario.svg')}}" alt="username-icon" style="height: 1rem" />
                  </div>
                  <input class="form-control bg-light" type="text" name="usuario" placeholder="usuario"> <!-- Campo de usuario con atributo name -->
                </div>
              <div class="input-group mt-3">
                <div class="input-group-text bg-warning">
                  <img src="{{asset('static/imagen/Contraseña.svg')}}" alt="password-icon" style="height: 1rem" />
                </div>
                <input class="form-control bg-light" type="correo" name="contraseña" placeholder="contraseña"> <!-- Campo de contraseña con atributo name -->
               </div>
               <div class="input-group mt-3">
                <div class="input-group-text bg-warning">
                <span class="material-symbols-outlined">mail</span>
                </div>
                <input class="form-control bg-light" type="correo" name="correo electronico" placeholder="correo electronico">
               </div>
               <div class="input-group mt-3">
                <div class="input-group-text bg-warning">
                <span class="material-symbols-outlined">work_history</span>
                </div>
                <input class="form-control bg-light" type="Permiso" name="Permiso" placeholder="Permiso">
               </div>
            </div>
        </div>
        </div>
        <div data-content id="misolicitud">
			<h1>Mis Solicitudes</h1>

                <table class="table" id=table style="margin-top: 20px;">
                <tr>
                <th scope="col">Folio</th>
                <th scope="col">Fecha Y Hora</th>
                <th scope="col">Descripción Del Problema</th>
                <th scope="col">Equipo</th>
                <th scope="col">Tipo De Equipo</th>
                <th scope="col">Estado</th>
                </tr>
            </thead>
            <tbody>
                <tr>
                <th scope="row">1</th>
                <td>Mark</td>
                <td>Otto</td>
                <td>@mdo</td>
                <td>Otto</td>
                <td>@mdo</td>
                </tr>
                <tr>
                <th scope="row">2</th>
                <td>Jacob</td>
                <td>Thornton</td>
                <td>@fat</td>
                <td>Otto</td>
                <td>@mdo</td>
                </tr>
                <tr>
                <th scope="row">3</th>
                <td>Larry</td>
                <td>the Bird</td>
                <td>@twitter</td>
                <td>Otto</td>
                <td>@mdo</td>
                </tr>
            </tbody>
            </table>
        </div>

        <div data-content id="crearsolicitud">
			<h1>Cree Su Solicitud</h1>
            <div class="d-flex justify-content-center align-items-center ">
                <div class="bg-white p-5 rounded-5 text-secondary shadow" style="width: 50rem;">
              <form action="../../controladores/iniciar.php" method="POST"> <!-- Agregamos el formulario -->
                <div class="input-group mt-3">
                  <div class="input-group-text bg-warning">
                  <span class="material-symbols-outlined" style="font-size: 1.5rem;">chat</span>
                  </div>
                  <input class="form-control bg-light " type="text" name="folio" placeholder="folio" style="height: 3rem"> <!-- Campo de usuario con atributo name -->
                </div>
              <div class="input-group mt-3">
                <div class="input-group-text bg-warning">
                <span class="material-symbols-outlined" style="font-size: 1.5rem;">farsight_digital</span>
                </div>
                <input class="form-control bg-light" type="fechahora" name="fechahora" placeholder="fecha y hora" style="height: 3rem"> <!-- Campo de contraseña con atributo name -->
               </div>
               <div class="input-group mt-3">
                <div class="input-group-text bg-warning">
                <span class="material-symbols-outlined" style="font-size: 1.5rem;">mail</span>
                </div>
                <input class="form-control bg-light" type="descripción_problema" name="descripción_problema" placeholder="descripción problema" style="height: 3rem">
               </div>
               <div class="input-group mt-3">
                <div class="input-group-text bg-warning">
                <span class="material-symbols-outlined" style="font-size: 1.5rem;">desktop_windows</span>
                </div>
                <input class="form-control bg-light" type="equipo" name="equipo" placeholder="equipo" style="height: 3rem">
               </div>
               <div class="input-group mt-3">
                <div class="input-group-text bg-warning">
                <span class="material-symbols-outlined" style="font-size: 1.5rem;">laptop_chromebook</span>
                </div>
                <input class="form-control bg-light" type="tipoequipo" name="tipoequipo" placeholder="tipoequipo" style="height: 3rem">
               </div>
               <div class="text-center mt-3 mb-3">
             <button type="submit" class="btn btn-warning">Guarda Solicitud</button>
            </div>
            </div>
        </div>
        </div>
</div>


    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>


@include('./diseño/footer')
