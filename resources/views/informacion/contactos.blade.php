<title>Contactos</title>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">


    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Material+Symbols+Outlined:opsz,wght,FILL,GRAD@24,400,0,0" />
    <link rel="stylesheet" href="{{ asset('static/css/main.css') }}">
    <link rel="stylesheet" href="{{ asset('static/css/contactos.css') }}">
    <link rel="stylesheet" href="{{ asset('static/css/style.css') }}">

@include('./diseño/menu')

<div class="textofin">

<div class="Contenedor">

    <div class="BoxInfos BoxWidthi50 BoxHeightConctatos" style="float:left;">
        <span class="material-symbols-outlined">location_on</span>
        <span class="Titulos">Dirección</span>
        <span class="Infos">
			Carretera Villahermosa la Isla Km 4.5. #157 <br>
			Col. Miguel Hidalgo III Etapa, C.P. 86127<br>
			Villahermosa, Tabasco, México<br>
			</span>
    </div>

    <div class="BoxInfos BoxWidthi25 BoxHeightConctatos" style="">
        <span class="material-symbols-outlined">ring_volume</span>
        <span class="Titulos">Teléfonos</span>
        <span class="Infos">
			<b>Administración</b><br>
			993 312 6975 Ext.516 <br>
			<b>Operaciones</b><br>
			993 141 2996<br>
			</span>
    </div>

    <div class="BoxInfos BoxWidthi25 BoxHeightConctatos" style="float:right;">
       <span class="material-symbols-outlined">stacked_email</span>
        <span class="Titulos">Correos</span>
        <span class="Infos">
			bolsadetrabajo@cecsa.mx<br>
			sugerencias@cecsa.mx<br>
			informes@cecsa.mx<bt>
			anticorrupcion@cecsa.mx
			</span>
    </div>
    <span class="Titulos">Ubicación</span>
    <div class="maps">
        <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d946.4359451645253!2d-93.01100419453871!3d17.962557053290766!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x85edd69b0bb6585b%3A0x5f1b525a77abd1d8!2sCECSA%20Base%20Operativa!5e1!3m2!1ses-419!2smx!4v1714939316179!5m2!1ses-419!2smx" width="940" height="600" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
    </div>
</div>
</div>

@include('./diseño/footer')

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>


