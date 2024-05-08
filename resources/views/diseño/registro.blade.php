<title>Registro</title>

<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
<link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Material+Symbols+Outlined:opsz,wght,FILL,GRAD@24,400,0,0" />
<link rel="stylesheet" href="{{ asset('static/css/main.css') }}">


<body class="d-flex justify-content-center align-items-center vh-100">
<div class="bg-white p-5 rounded-5 text-secondary shadow" style="width: 25rem">
    <div class="d-flex justify-content-center">
        <img src="{{asset('static/imagen/Logoinicio.png')}}" alt="login-icon" style="height: 10rem"/>
    </div>
    <div class="text-center fs-1 fw-bold">Registrate</div>
    <form action="../../controladores/iniciar.php" method="POST"> <!-- Agregamos el formulario -->
        <div class="input-group mt-4">
            <div class="input-group-text bg-warning">
                <img src="{{asset('static/imagen/Usuario.svg')}}" alt="username-icon" style="height: 1rem" />
            </div>
            <input class="form-control bg-light" type="text" name="usuario" placeholder="usuario"> <!-- Campo de usuario con atributo name -->
        </div>
        <div class="input-group mt-1">
            <div class="input-group-text bg-warning">
                <img src="{{asset('static/imagen/Contraseña.svg')}}" alt="password-icon" style="height: 1rem" />
            </div>
            <input class="form-control bg-light" type="password" name="contraseña" placeholder="contraseña"> <!-- Campo de contraseña con atributo name -->
        </div>
        <div class="input-group mt-1">
            <div class="input-group-text bg-warning">
               <span class="material-symbols-outlined">mail</span>
            </div>
            <input class="form-control bg-light" type="correo" name="correo" placeholder="Correo Electronico"> <!-- Campo de contraseña con atributo name -->
        </div>
        <!-- Resto del código del formulario -->
        <!-- Botón de inicioasdadfasfaff de sesión -->
        <button type="submit" class="btn btn-warning text-white w-100 mt-4 fw-semibold shadow-sm" href="{{ url('sesion') }}">Registrarse</button>
    </form>

    <div class="p-3">
        <div class="border-bottom text-center" style="height: 0.9rem">
            <span class="bg-white px-3">CECSA !</span>
        </div>
    </div>
</div>
</body>

@include('./diseño/footer')
