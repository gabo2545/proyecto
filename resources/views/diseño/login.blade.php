<title>Login</title>

<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
<link rel="stylesheet" href="{{ asset('static/css/main.css') }}">


<body class="d-flex justify-content-center align-items-center vh-100">
    <div class="bg-white p-5 rounded-5 text-secondary shadow" style="width: 25rem">
      <div class="d-flex justify-content-center">
        <img src="{{asset('static/imagen/Logoinicio.png')}}" alt="login-icon" style="height: 10rem"/>
      </div>
            <div class="text-center fs-1 fw-bold">Login</div>
              <form action="{{ route('login') }}" method="POST"><!-- Agregamos el formulario -->
                  @csrf
                <div class="input-group mt-4">
                  <div class="input-group-text bg-warning">
                    <img src="{{asset('static/imagen/Usuario.svg')}}" alt="username-icon" style="height: 1rem" />
                  </div>
                  <input id="usuario" class="form-control bg-light" type="text" name="usuario" placeholder="usuario"> <!-- Campo de usuario con atributo name -->
                </div>
              <div class="input-group mt-1">
                <div class="input-group-text bg-warning">
                  <img src="{{asset('static/imagen/Contraseña.svg')}}" alt="password-icon" style="height: 1rem" />
                </div>
                <input id="contraseña" class="form-control bg-light" type="password" name="contraseña" placeholder="contraseña"> <!-- Campo de contraseña con atributo name -->
               </div>
        <!-- Resto del código del formulario -->
        <!-- Botón de inicioasdadfasfaff de sesión -->
              <button type="submit" class="btn btn-warning text-white w-100 mt-4 fw-semibold shadow-sm" href="../../controladores/iniciar.php">Iniciar</button>
              </form>
        <div class="d-flex gap-1 justify-content-center mt-1">
            <div>No tienes cuenta?</div>
               <a href="{{ url('registrar') }}" class="text-decoration-none text-warning fw-semibold">Registrate</a>
            </div>
            <div class="p-3">
               <div class="border-bottom text-center" style="height: 0.9rem">
                  <span class="bg-white px-3">BIENVENIDO A CECSA!</span>
               </div>
            </div>
    </div>
</body>

  @include('./diseño/footer')
