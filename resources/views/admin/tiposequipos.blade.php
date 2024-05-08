<title>Tipos Equipos</title>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">


<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
<link rel="stylesheet" href="{{ asset('static/css/main.css') }}">
<link rel="stylesheet" href="{{ asset('static/css/style.css') }}">
<link rel="stylesheet" href="{{ asset('static/css/admin.css') }}">

@include('./admin/menusecundario')


    <div class="tablas">
        <p>Tipos De Equipos</p>
    </div>

    <table class="table" id=table style="margin-top: 20px;">
    <tr>
        <th scope="col">NO. Lista</th>
      <th scope="col">Nombre Equipo</th>
      <th scope="col">Etiqueta Equipo</th>
      <th scope="col">Opción</th>
    </tr>
  </thead>
  <tbody>
    <tr>
      <th scope="row">1</th>
      <td>Mark</td>
      <td>Mark</td>
      <td><button class="btn btn-warning" data-bs-toggle="modal" data-bs-target="#nombreEquipoModal">Modificar Equipo</button></td>
    </tr>
    <tr>
      <th scope="row">2</th>
      <td>Jacob</td>
      <td>Mark</td>
      <td><button class="btn btn-warning" data-bs-toggle="modal" data-bs-target="#nombreEquipoModal">Modificar Equipo</button></td>
    </tr>
    <tr>
      <th scope="row">3</th>
      <td>Larry</td>
      <td>Mark</td>
      <td><button class="btn btn-warning" data-bs-toggle="modal" data-bs-target="#nombreEquipoModal">Modificar Equipo</button></td>
    </tr>
  </tbody>
</table>

<div class="modal fade" id="nombreEquipoModal" tabindex="-1" aria-labelledby="nombreEquipoModalLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="nombreEquipoModalLabel">Cambiar Nombre Del Equipo</h5>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
      <div class="modal-body">
        <form id="nombreEquipoForm">
          <div class="mb-3">
            <label for="nuevoNombreEquipo" class="form-label">Nuevo Nombre Del Equipo:</label>
            <input type="text" class="form-control" id="nuevoNombreEquipo" name="nuevoNombreEquipo" placeholder="Ingrese el nuevo nombre del equipo">
          </div>
        </form>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-warning" data-bs-dismiss="modal">Cerrar</button>
        <button type="button" class="btn btn-warning" id="guardarCambiosNombreEquipo">Guardar Cambios</button>
      </div>
    </div>
  </div>
</div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>


@include('./diseño/footer')
