<title>Finalizados</title>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">


<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
<link rel="stylesheet" href="{{ asset('static/css/main.css') }}">
<link rel="stylesheet" href="{{ asset('static/css/style.css') }}">
<link rel="stylesheet" href="{{ asset('static/css/admin.css') }}">

@include('./admin/menusecundario')

<div class="tablas">
        <p>Finalizados Mantenimiento</p>
    </div>

    <table class="table" id=table style="margin-top: 20px;">
    <tr>
      <th scope="col">Fecha Hora Final</th>
      <th scope="col">Tipo De Mantenimiento</th>
      <th scope="col">Observación Del Equipo</th>
      <th scope="col">Tecnico</th>
      <th scope="col">Folio</th>
      <th scope="col">Estado</th>
      <th scope="col">Opcion</th>
    </tr>
  </thead>
  <tbody>
    <tr>
      <th scope="row">1</th>
      <td>Mark</td>
      <td>Otto</td>
      <td>@mdo</td>
      <td>@mdo</td>
      <td>@mdo</td>
      <td><button class="btn btn-warning" data-bs-toggle="modal" data-bs-target="#statusModal">Cambiar Status</button></td>
    </tr>
    <tr>
      <th scope="row">2</th>
      <td>Jacob</td>
      <td>Thornton</td>
      <td>@fat</td>
      <td>@mdo</td>
      <td>@mdo</td>
      <td><button class="btn btn-warning" data-bs-toggle="modal" data-bs-target="#statusModal">Cambiar Status</button></td>
    </tr>
    <tr>
      <th scope="row">3</th>
      <td>Larry</td>
      <td>the Bird</td>
      <td>@twitter</td>
      <td>@mdo</td>
      <td>@mdo</td>
      <td><button class="btn btn-warning" data-bs-toggle="modal" data-bs-target="#statusModal">Cambiar Status</button></td>
    </tr>
  </tbody>
</table>

<!-- Modal -->
<div class="modal fade" id="statusModal" tabindex="-1" aria-labelledby="statusModalLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="statusModalLabel">Cambiar Status</h5>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
      <div class="modal-body">
        <select class="form-select" aria-label="Default select example">
          <option selected>Seleccione el nuevo estado</option>
          <option value="1">Pendiente</option>
          <option value="2">En Proceso</option>
          <option value="3">Completado</option>
        </select>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-warning" data-bs-dismiss="modal">Cerrar</button>
        <button type="button" class="btn btn-warning">Guardar Cambios</button>
      </div>
    </div>
  </div>
</div>

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>


@include('./diseño/footer')

