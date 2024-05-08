<title>Soporte Tecnico</title>


<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
<link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Material+Symbols+Outlined:opsz,wght,FILL,GRAD@24,400,0,0" />
<link rel="stylesheet" href="{{ asset('static/css/main.css') }}">
<link rel="stylesheet" href="{{ asset('static/css/soporte.css') }}">
<link rel="stylesheet" href="{{ asset('static/css/style.css') }}">




@include('./diseño/menu')

<div class="textocompleto">
    <div class="Contenedor">

        <div class="row row-cols-1 row-cols-md-3 g-3">
            <div class="col">
                <div class="card">
                    <img src="{{asset('static/imagen/soporte.webp')}}" class="card-img-top" alt="...">
                    <div class="card-body">
                        <span class="material-symbols-outlined">engineering</span>
                        <h5 class="card-title">Objetivo</h5>
                        <p class="card-text card-text-limit">Resolución de problemas: Identificar y solucionar cualquier problema técnico que los usuarios puedan enfrentar con el producto o servicio,
                            ya sea a través de diagnóstico remoto, asistencia telefónica o soporte en persona.<br><br>
                            Atención al cliente: Brindar un servicio amable, cortés y profesional a los usuarios, ayudándoles a comprender y utilizar eficazmente el producto o servicio.<br><br>
                            Mantenimiento preventivo: Realizar actividades de mantenimiento proactivo para prevenir problemas futuros y garantizar un funcionamiento óptimo del producto o servicio..</p>
                    </div>
                </div>
            </div>
            <div class="col">
                <div class="card">
                    <img src="{{asset('static/imagen/sop.jpg')}}" class="card-img-top" alt="...">
                    <div class="card-body">
                        <span class="material-symbols-outlined">person_play</span>
                        <h5 class="card-title">Razón</h5>
                        <p class="card-text card-text-limit">Satisfacción del cliente: Los clientes esperan que los productos o servicios que adquieren funcionen correctamente y cumplan con sus expectativas.<br><br>
                            Minimización del tiempo de inactividad: En entornos comerciales y personales, el tiempo de inactividad causado por problemas técnicos puede resultar costoso y frustrante.<br><br>
                            Fomento de la confianza y lealtad: Cuando los usuarios saben que pueden confiar en un sólido respaldo de soporte técnico, están más inclinados a invertir en productos o servicios
                            tecnológicos y mantener relaciones continuas con la empresa.<br><br>
                        </p>
                    </div>
                </div>
            </div>
            <div class="col">
                <div class="card">
                    <img src="{{asset('static/imagen/tec.webp')}}" class="card-img-top" alt="...">
                    <div class="card-body">
                        <span class="material-symbols-outlined">precision_manufacturing</span>
                        <h5 class="card-title">Materiales</h5>
                        <p class="card-text card-text-limit">Herramientas de diagnóstico: Estas son aplicaciones o programas de software diseñados para ayudar a identificar y resolver problemas técnicos.<br><br>
                            Base de conocimientos: Una base de conocimientos es una colección organizada de información sobre problemas comunes, preguntas frecuentes y soluciones para ayudar a los
                            usuarios a resolver problemas por sí mismos.<br><br>
                            Herramientas de asistencia remota: Estas herramientas permiten a los técnicos acceder remotamente a los dispositivos de los usuarios para diagnosticar y solucionar problemas.<br><br>
                        </p>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>

@include('./diseño/footer')
