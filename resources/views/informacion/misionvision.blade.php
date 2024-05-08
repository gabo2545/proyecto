<title>Misión y Visión</title>
	<meta charset="utf-8">
	<meta name=viewport content="width=device-width, height=device-height, initial-scale=1.0"/>

	<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
	<link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Material+Symbols+Outlined:opsz,wght,FILL,GRAD@24,400,0,0" />
    <link rel="stylesheet" href="{{ asset('static/css/misionvision.css') }}">
    <link rel="stylesheet" href="{{ asset('static/css/main.css') }}">
    <link rel="stylesheet" href="{{ asset('static/css/style.css') }}">


@include('./diseño/menu')


<div class="textocompleto">
	<div class="Contenedor">

		<div class="BoxInfo BoxWidth100" style="float:left;">
		<span class="material-symbols-outlined">emoji_people</span>
			<span class="Titulo">Objetivo</span>
			<span class="Info">
				Una Empresa cuyo único objetivo y compromiso es el tener los conocimientos de las necesidades vanguardistas por medio de las
				impresiones que nos comunican, crean, forman y fortalecen en la industria nacional e internacional con el objetivo de poder
				desarrollar y proveer las herramientas y tecnología de última generación para cubrir las necesidades tecnológicas de empresas
				públicas, privadas y del sector industrial.<br><br>
			</span>
		</div>
		<div class="BoxInfo BoxWidth50" style="float:right;height:519px">
		<span class="material-symbols-outlined">wc</span>
			<span class="Titulo">Valores</span>
			<img src="{{asset('static/imagen/valores.jpeg')}}" width="100%'">
		</div>


		<div class="BoxInfo BoxWidth50 BoxHeightInicio" style="float:left;">
		<span class="material-symbols-outlined">pan_tool</span>
		<span class="Titulo" >Misión</span>
			<span class="Info">
				Ofrecer siempre productos y servicios de calidad y de alto valor
				para el cliente. Es por esto que manejamos las mejores marcas
				en equipo de cómputo y electrónica, tenemos soluciones con
				tecnología de punta y de última generación para empresas
				pequeñas, medianas, grandes e industrias, ofrecemos sistemas
				a la medida que hagan que su empresa tenga el rendimiento
				deseado, a través de la aplicación de nuestros servicios,
				mediante profesionales altamente capacitados en la
				implementación de nuevas tecnologías
				<br><br><br><br>
			</span>
		</div>

		<div class="BoxInfo BoxWidth50" style="float:left;">
		<span class="material-symbols-outlined">target</span>
			<span class="Titulo">Visión</span>
			<span class="Info">
				Es consolidarse como una empresa 100% mexicana en la
				creación y provisión de soluciones innovadoras y servicios que
				permitan a nuestros clientes la automatización de todos sus
				procesos en el mundo laboral, esto con ayuda de nuevas
				tecnologías y la adecuada orientación al personal.
				<br><br><br><br><br>
			</span>
		</div>
	</div>
</div>

@include('./diseño/footer')

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>


