<title>Reportes</title>


<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
<link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Material+Symbols+Outlined:opsz,wght,FILL,GRAD@24,400,0,0" />
<link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Material+Symbols+Outlined:opsz,wght,FILL,GRAD@24,400,0,0" />
<link rel="stylesheet" href="{{ asset('static/css/main.css') }}">
<link rel="stylesheet" href="{{ asset('static/css/style.css') }}">
<link rel="stylesheet" href="{{ asset('static/css/soporte.css') }}">

@include('./diseño/menu')


<div class="textocompleto">
    <div class="Contenedor">

        <div class="row row-cols-1 row-cols-md-3 g-3">
            <div class="col">
                <div class="card">
                    <img src="{{asset('static/imagen/reportescorec.png')}}" class="card-img-top" alt="...">
                    <div class="card-body">
                        <span class="material-symbols-outlined">priority_high</span>
                        <h5 class="card-title">Mantenimiento Preventivo</h5>
                        <p class="card-text card-text-limit">Inspección regular: Se realizan inspecciones periódicas para detectar posibles problemas o desgastes en los componentes del sistema.<br><br>
                            Limpieza y lubricación: Se lleva a cabo la limpieza de componentes y la aplicación de lubricantes donde sea necesario para prevenir la acumulación de suciedad, polvo o residuos que puedan afectar el rendimiento del equipo. <br><br>
                            Actualización de software y firmware: Se instalan regularmente actualizaciones de software y firmware proporcionadas por el fabricante para corregir errores, mejorar el rendimiento y añadir nuevas funcionalidades al sistema.</p>
                    </div>
                </div>
            </div>
            <div class="col">
                <div class="card">
                    <img src="{{asset('static/imagen/Fondore.png')}}" class="card-img-top" alt="...">
                    <div class="card-body">
                        <span class="material-symbols-outlined">order_approve</span>
                        <h5 class="card-title">Reportes</h5>
                        <p class="card-text card-text-limit">Registro de actividades: El reporte de mantenimiento sirve como un registro oficial de todas las actividades realizadas durante el período de mantenimiento, incluyendo inspecciones, reparaciones, reemplazos de piezas, ajustes y cualquier otra intervención realizada en el sistema o equipo.<br><br>
                            Documentación de problemas: Se utiliza para documentar cualquier problema o anomalía encontrada durante el mantenimiento, incluyendo su naturaleza, causa raíz y las acciones tomadas para resolverlo.<br><br>
                            Seguimiento de recursos: El reporte de mantenimiento puede incluir detalles sobre los recursos utilizados durante las actividades de mantenimiento, como materiales, herramientas, mano de obra y tiempo dedicado.
                        </p>
                    </div>
                </div>
            </div>
            <div class="col">
                <div class="card">
                    <img src="{{asset('static/imagen/Fondoprev.webp')}}" class="card-img-top" alt="...">
                    <div class="card-body">
                        <span class="material-symbols-outlined">feedback</span>
                        <h5 class="card-title">Mantenimiento Correctivo</h5>
                        <p class="card-text card-text-limit">Diagnóstico de problemas: El primer paso en el mantenimiento correctivo es identificar y diagnosticar el problema específico que ha ocurrido en el sistema.<br><br>
                            Intervención inmediata: Una vez que se ha identificado el problema, se toman medidas inmediatas para corregirlo y restaurar el funcionamiento normal del sistema.<br><br>
                            Priorización de tareas: En situaciones donde hay múltiples problemas o fallos, es importante priorizar las tareas de mantenimiento correctivo según su impacto en el funcionamiento del sistema y la criticidad de las operaciones afectadas.
                        </p>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>



<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>

@include('./diseño/footer')
