<title>Perfil</title>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
<link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Material+Symbols+Outlined:opsz,wght,FILL,GRAD@24,400,0,0" />

<script src="{{ asset('static/js/prueba.js') }}"></script>

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
                    <a class="nav-link" href="{{ url('admines') }}">Pendientes</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" data-target="#usuariostable">Usuarios</a>
                </li>
                <li class="nav-item dropdown">
                    <a class="nav-link dropdown-toggle " href="#" id="navbarScrollingDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                        Configuración
                    </a>
                    <ul class="dropdown-menu text-center" aria-labelledby="navbarScrollingDropdown">
                        <li><a class="dropdown-item" data-target="#perfil" >Perfil</a></li>
                        <li><a class="dropdown-item" data-target="#agregar" >Agregar</a></li>
                        <li><a class="dropdown-item" data-target="#modificar" >Modificar</a></li>
                        <li><a class="dropdown-item" data-target="#eliminar" >Eliminar</a></li>
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


<div class="content">

    <div data-content id="usuariostable" class="active">
        <h1>Empleados Usuarios</h1>


        <table class="table table-responsive" id=table style="margin-top: 20px;">
            <thead>
                <th>Nombre</th>
                <th>Apellido Paterno</th>
                <th>Apellido Materno</th>
                <th>Teléfono</th>
                <th>Cargo</th>
                <th>Área</th>
                <th>Usuario</th>
                <th>Contraseña</th>
                <th>Correo Electrónico</th>
            </thead>
            <tbody>
            @foreach($empleados as $item)
            <tr>
                <td>{{ $item->nombre_empleado }}</td>
                <td>{{ $item->apellido_paterno }}</td>
                <td>{{ $item->apellido_materno }}</td>
                <td>{{ $item->telefono }}</td>
                <td>{{ $item->nombrecargo }}</td>
                <td>{{ $item->nombrearea }}</td>
                <td>{{ $item->usuario }}</td>
                <td>{{ $item->contraseña }}</td>
                <td>{{ $item->correo_electronico }}</td>
            </tr>
            @endforeach
            </tbody>
        </table>
    </div>
    </div>



    <div data-content id="perfil">
        <h1>Perfil</h1>
        <div class="d-flex justify-content-center align-items-center ">
            <div class="bg-white p-4 rounded-4 text-secondary shadow" style="width: 25rem">
                <div class="d-flex justify-content-center">
                    <img src="{{asset('static/imagen/person.svg')}}" alt="login-icon" style="height: 10rem"/>
                </div>
                <form action="../../controladores/iniciar.php" method="POST"> <!-- Agregamos el formulario -->
                    <div class="input-group mt-2">
                        <div class="input-group-text bg-warning">
                            <img src="{{asset('static/imagen/Usuario.svg')}}" alt="username-icon" style="height: 1rem" />
                        </div>
                        <input class="form-control bg-light" type="text" name="usuario" placeholder="usuario"> <!-- Campo de usuario con atributo name -->
                    </div>
                    <div class="input-group mt-2">
                        <div class="input-group-text bg-warning">
                            <img src="{{asset('static/imagen/contraseña.svg')}}" alt="password-icon" style="height: 1rem" />
                        </div>
                        <input class="form-control bg-light" type="correo" name="contraseña" placeholder="contraseña"> <!-- Campo de contraseña con atributo name -->
                    </div>
                    <div class="input-group mt-2">
                        <div class="input-group-text bg-warning">
                            <span class="material-symbols-outlined">mail</span>
                        </div>
                        <input class="form-control bg-light" type="correo" name="correo electronico" placeholder="correo electronico">
                    </div>
                    <div class="input-group mt-2">
                        <div class="input-group-text bg-warning">
                            <span class="material-symbols-outlined">work_history</span>
                        </div>
                        <input class="form-control bg-light" type="Permiso" name="Permiso" placeholder="Permiso">
                    </div>
                    </form>
            </div>
        </div>
    </div>


    <div data-content id="agregar">
        <h1>Agregar Usuario</h1>
        <div class="d-flex justify-content-center align-items-center ">
            <div class="bg-white p-4 rounded-4 text-secondary shadow" style="width: 25rem">
                <div class="d-flex justify-content-center">
                    <img src="{{asset('static/imagen/person.svg')}}" alt="login-icon" style="height: 10rem"/>
                </div>
                <form action="../../controladores/iniciar.php" method="POST"> <!-- Agregamos el formulario -->
                    <div class="input-group mt-2">
                        <div class="input-group-text bg-warning">
                            <img src="{{asset('static/imagen/Usuario.svg')}}" alt="username-icon" style="height: 1rem" />
                        </div>
                        <input class="form-control bg-light" type="text" name="usuario" placeholder="usuario"> <!-- Campo de usuario con atributo name -->
                    </div>
                    <div class="input-group mt-2">
                        <div class="input-group-text bg-warning">
                            <img src="{{asset('static/imagen/contraseña.svg')}}" alt="password-icon" style="height: 1rem" />
                        </div>
                        <input class="form-control bg-light" type="correo" name="contraseña" placeholder="contraseña"> <!-- Campo de contraseña con atributo name -->
                    </div>
                    <div class="input-group mt-2">
                        <div class="input-group-text bg-warning">
                            <span class="material-symbols-outlined">mail</span>
                        </div>
                        <input class="form-control bg-light" type="correo" name="correo electronico" placeholder="correo electronico">
                    </div>
                    <div class="input-group mt-2 d-flex justify-content-center align-items-center ">
                        <select class="form-select texto-pequeno" id="new-user-permissions" aria-label="Selecciona un permiso">
                            <option selected>Seleccionar un permiso</option>
                            <option value="1">Administrador</option>
                            <option value="2">Usuario</option>
                        </select>
                    </div>
                    <div class="text-center mt-3 mb-3">
                        <button type="submit" class="btn btn-warning">Guardar Usuario</button>
                    </div>
                    </form>
                </div>
            </div>
        </div>


    <div data-content id="modificar">
        <h1>Modificar Usuario</h1>
        <div class="d-flex justify-content-center align-items-center ">
            <div class="bg-white p-4 rounded-4 text-secondary shadow" style="width: 25rem">
                <div class="d-flex justify-content-center">
                    <img src="{{asset('static/imagen/person.svg')}}" alt="login-icon" style="height: 10rem"/>
                </div>
                <form action="../../controladores/iniciar.php" method="POST"> <!-- Agregamos el formulario -->
                    <div class="input-group mt-2">
                        <div class="input-group-text bg-warning">
                            <img src="{{asset('static/imagen/Usuario.svg')}}" alt="username-icon" style="height: 1rem" />
                        </div>
                        <input class="form-control bg-light" type="text" name="usuario" placeholder="usuario"> <!-- Campo de usuario con atributo name -->
                    </div>
                    <div class="input-group mt-2">
                        <div class="input-group-text bg-warning">
                            <img src="{{asset('static/imagen/contraseña.svg')}}" alt="password-icon" style="height: 1rem" />
                        </div>
                        <input class="form-control bg-light" type="correo" name="contraseña" placeholder="contraseña"> <!-- Campo de contraseña con atributo name -->
                    </div>
                    <div class="input-group mt-2">
                        <div class="input-group-text bg-warning">
                            <span class="material-symbols-outlined">mail</span>
                        </div>
                        <input class="form-control bg-light" type="correo" name="correo electronico" placeholder="correo electronico">
                    </div>
                    <div class="input-group mt-2 d-flex justify-content-center align-items-center ">
                        <select class="form-select texto-pequeno" id="new-user-permissions" aria-label="Selecciona un permiso">
                            <option selected>Seleccionar un permiso</option>
                            <option value="1">Administrador</option>
                            <option value="2">Usuario</option>
                        </select>
                    </div>
                    <div class="text-center mt-3 mb-3">
                        <button type="submit" class="btn btn-warning">Guardar Modificación</button>
                    </div>
                </form>
                </div>
            </div>
            </div>


    <div data-content id="eliminar">
        <h1>Eliminar Usuario</h1>
        <div class="d-flex justify-content-center align-items-center ">
            <div class="bg-white p-4 rounded-4 text-secondary shadow" style="width: 25rem">
                <div class="d-flex justify-content-center">
                    <img src="{{asset('static/imagen/person.svg')}}" alt="login-icon" style="height: 10rem"/>
                </div>
                <form action="../../controladores/iniciar.php" method="POST"> <!-- Agregamos el formulario -->
                    <div class="input-group mt-2">
                        <div class="input-group-text bg-warning">
                            <img src="{{asset('static/imagen/Usuario.svg')}}" alt="username-icon" style="height: 1rem" />
                        </div>
                        <input class="form-control bg-light" type="text" name="usuario" placeholder="usuario"> <!-- Campo de usuario con atributo name -->
                    </div>
                    <div class="input-group mt-2">
                        <div class="input-group-text bg-warning">
                            <img src="{{asset('static/imagen/contraseña.svg')}}" alt="password-icon" style="height: 1rem" />
                        </div>
                        <input class="form-control bg-light" type="correo" name="contraseña" placeholder="contraseña"> <!-- Campo de contraseña con atributo name -->
                    </div>
                    <div class="input-group mt-2">
                        <div class="input-group-text bg-warning">
                            <span class="material-symbols-outlined">mail</span>
                        </div>
                        <input class="form-control bg-light" type="correo" name="correo electronico" placeholder="correo electronico">
                    </div>
                    <div class="input-group mt-2 d-flex justify-content-center align-items-center ">
                        <select class="form-select texto-pequeno" id="new-user-permissions" aria-label="Selecciona un permiso">
                            <option selected>Seleccionar un permiso</option>
                            <option value="1">Administrador</option>
                            <option value="2">Usuario</option>
                        </select>
                    </div>
                    <div class="text-center mt-3 mb-3">
                        <button type="submit" class="btn btn-warning">Eliminar Usuario</button>
                    </div>
                    </form>
        </div>
    </div>
</div>


<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>


@include('./diseño/footer')




