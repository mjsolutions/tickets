@extends('layouts.main')

@section('title', 'Oxígeno - Edgar Oceransky/Diego Ojeda')

@section('description', 'Oxígeno - Edgar Oceransky/Diego Ojeda, Morelia Mich., 28 de febrero, 20:30 hrs boletos en RS Viajes Centro y bolematico.com')

@section('styles')
<meta property="og:url"  content="https:www//bolematico.com/eventos/oceransky-ojeda-morelia" />
<meta property="og:title" content="Oxígeno - Edgar Oceransky/Diego Ojeda" />
<meta property="og:description" content="Oxígeno - Edgar Oceransky/Diego Ojeda, Morelia Mich., 28 de febrero, 20:30 hrs boletos en RS Viajes Centro y bolematico.com" />
<meta property="og:image" content="https://www.bolematico.com/img/oceransky-ojeda-morelia.jpg" />

<script src="https://use.fontawesome.com/9b9c9dc667.js"></script>
<link rel="stylesheet" type="text/css" href="{{ asset('css/event-select-manual.css') }}">
@endsection

@section('content')

@php
	$preventa = false;
	if(\Carbon\Carbon::now() < '2020-01-14 23:59:59'){
		$preventa = true;
	}
@endphp

<div class="image-header bg-4 overlay overlay-5">

	<div class="row white-text">
		<h4>Oxígeno - Edgar Oceransky/Diego Ojeda</h4>
		<div class="divider"></div>
		<p class="mb-0"><i>Teatro Stella Inda - Morelia Mich.</i></p>
		<p class="m-0"><i>28 de febrero - 20:30 hrs.</i></p>
	</div>
	<a href="#compra" class="btn waves-light waves-effect page-scroll"><b>Comprar</b> <i class="fa fa-ticket" aria-hidden="true"></i></a>
</div>

<section class="container">
	<div class="row">
		<div class="col s12">
			<ul class="tabs">
				<li class="tab "><a class="active" href="#precios">Precios</a></li>
				<li class="tab "><a href="#detalles">Detalles</a></li>
				<li class="tab "><a id="tab_link-lugares" href="#lugares">Lugares de venta</a></li>
			</ul>
		</div>
		<div id="precios" class="col s12 tab-content" style="padding: 40px 0.75rem!important;">

			<div class="col s8 offset-s2 m4 offset-m1 mb-30 card-flyer">
				<img src="{{ asset('img/oceransky-ojeda-morelia.jpg') }}" alt="" class="responsive-img">
			</div>
			
			<div class="col s12 offset-m1 m5">				
				
				@if($preventa)
				<div class="row">
					<div class=" qcPricing col s12 mb-15">
						<h5 class="quote raleway">Precios de preventa.</h5>
					</div>
					<div class="qcPricing col s12 center-align mb-10">
						<div class="box col s12">
							<header>
								<div class="col s12 teal accent-4">Diamante</div>
							</header>
							<div class="price col s12"><span>$600</span> MXN</div>
						</div>
					</div>

					<div class="qcPricing col s12 center-align mb-10">
						<div class="box col s12">
							<header>
								<div class="col s12 amber darken-1">Oro</div>
							</header>
							<div class="price col s12"><span>$500</span> MXN</div>
						</div>
					</div>

					<div class="qcPricing col s12 center-align mb-10">
						<div class="box col s12">
							<header>
								<div class="col s12 grey">Plata</div>
							</header>
							<div class="price col s12"><span>$350</span> MXN</div>
						</div>
					</div>

				</div>
				@else
				<div class="row">
					<div class="qcPricing col s12 center-align mb-10">
						<div class="box col s12">
							<header>
								<div class="col s12 teal accent-4">Diamante</div>
							</header>
							<div class="price col s12"><span>$650</span> MXN</div>
						</div>
					</div>

					<div class="qcPricing col s12 center-align mb-10">
						<div class="box col s12">
							<header>
								<div class="col s12 amber darken-1">Oro</div>
							</header>
							<div class="price col s12"><span>$550</span> MXN</div>
						</div>
					</div>

					<div class="qcPricing col s12 center-align mb-10">
						<div class="box col s12">
							<header>
								<div class="col s12 grey">Plata</div>
							</header>
							<div class="price col s12"><span>$400</span> MXN</div>
						</div>
					</div>

				</div>
				@endif

			</div>

			<div class="row">
				<div class="divider"></div>
				<div class="col s10 offset-s1 center-align">
					<p><i>* Al realizar tu compra en línea se realiza un cargo extra de <b>10%</b> por concepto de servicio.</i></p>
					{{-- <p><i>* Preventa válida hasta el 15 de noviembre del 2019.</i></p> --}}
					<p>* Informes al:</p>
					<p><a href="tel:4431880358" style="background: #4caf50; color: #fff; padding: 5px 10px;"><i class="fa fa-phone"></i> 443-188-0358 </a> / <a href="tel:4432274979" style="background: #4caf50; color: #fff; padding: 5px 10px;"><i class="fa fa-phone"></i> 443-227-4979</a></p>
				</div>
			</div>

		</div>

		<div id="detalles" class="col s12 tab-content">
			<div class="col s8 offset-s2 hide-on-med-and-up">
				<img src="{{ asset('img/oceransky-bio.jpg') }}" class="responsive-img">
			</div>
				
			<div class="col s12 m8">
				<h5 class="raleway quote">Edgar Oceransky</h5>
				<p>Cantautor nacido en la Ciudad de México en el año de 1975. Inicia su carrera artística en 1993. En el 2000 participa con Mario Domm como co-productor y arreglista en el disco “Títeres de tu” del poeta mexicano Edel Juárez e incluye su canción “La recuerdo así”.</p>
        <p>En el año 2001 lanza su primer material discográfico llamado “Estoy aquí” bajo el sello Sony Music, en el 2002 forma parte del disco “El que la hace la canta” al lado de Reyli y Natalia Lafourcade entre ótros, bajo el mismo sello y el disco “Reflejos Acústicos” de Kirty Music, así como del Sound Track de la película “Corazones Rotos”.</p>
        <p>Ha compartido escenario con grandes de la música como Tania Libertad, Hernaldo Zuñiga , Ismael Serrano, Pedro Guerra, Santiago Cruz, Francisco Céspedes, Alberto Plaza, José Cantoral, Armando Manzanero, Franco de Vita, Rossana, Alberto Cortés Y Reyli éste último lo tuvo como invitado especial en su concierto del Auditorio Nacional en noviembre del 2007.</p>
        <p>Teniendo claro que la música no solo es una pasión si no su modo de vida, en 2014 arriesga todo y presenta, con el apoyo de la Comisión de Cultura de la H. Cámara de Diputados, CONACULTA, Secretaría de Turismo del Estado de Querétaro , el festival más grande habla hispana llamado “Trovafest” el cual ha reunido a más de 100 cantautores de diferentes nacionalidades contando en su última edición (2016) con una semana completa de conciertos, tres escenarios y una afluencia de miles de personas de varios países convirtiendo a dicha ciudad en “La capital de la Trova”.</p>
        <p>Gracias a este festival comprobando una vez mas que la música rompe fronteras se une Pedro Guerra de España, Santiago Cruz de Colombia y Edgar Oceransky México en un disco único llamado “Pedro Santiago Edgar” donde reúnen sus mayores éxitos y los comparten teniendo una aceptación maravillosa dentro del publico de dichos cantautores el cual los lleva a hacer una gira dentro del territorio Nacional con localidades totalmente vendidas.</p>

			</div>
			<div class="col m4 hide-on-small-only">
				<img src="{{ asset('img/oceransky-bio.jpg') }}" class="responsive-img">
			</div>
			<div class="col s10 offset-s1 mb-30 mt-30">
				<div class="divider"></div>
			</div>
			<div class="clearfix"></div>
			<div class="col m4 s12">
				<img src="{{ asset('img/diego-ojeda-bio.jpg') }}" class="responsive-img">
			</div>
			<div class="col s12 m8">
				<h5 class="raleway quote">Diego Ojeda</h5>
				<p>¿Quién es Diego Ojeda? Diego Ojeda (1985) es un creador: cantautor, escritor y empresario canario que lleva 10  años recorriendo el mundo con sus canciones y poemas.</p>
				<p>España, México, Colombia, Ecuador, Perú y Cuba han sido, de momento, los escenarios donde ha recibido el cariño de miles y miles de personas convirtiéndose así en uno de los artistas referencia del panorama musical y literario español.</p>
				<p>Es CEO de la editorial MueveTuLengua, editorial cuyo eje fundamental es la poesía, abriéndose recientemente a otros géneros literarios.</p>
				<p>Ahora mismo comercializa sus tres últimos discos: "Amerizaje" (2015), "Diego Ojeda a solas en Fnac", (2017) y "Manhattan" (2018).Pero cuenta otros 6 discos anteriores.</p>
				<p>En cuanto a su carrera literaria cuenta con 4 libros: "A pesar de los aviones" (2012), "Mi chica revolucionaria" (2014), "Siempre donde quieras" (2015), "Compañera Galáctica" (2017), "Manhattan" (2018). De estos 5 libros ha vendido aproximadamente 100.000 ejemplares.</p>
				<p>Fuente: <small>https://diegoojeda.com/</small></p>

			</div>		
			<div class="clearfix"></div>
		</div>

		<div id="lugares" class="col s12 tab-content">
			<div class="col s12">
				<h5 class="mb-30 quote">Además de Bolematico, puedes adquirir tus entradas en:</h5>
			</div>

			<div class="col s12">
				<div class="white z-depth-2">
					<iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3756.1943227085408!2d-101.18477128552061!3d19.704349286730476!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x842d0e0d6bca646b%3A0x1b0a3a981724216f!2sRS+Viajes+Centro!5e0!3m2!1ses!2smx!4v1501091355750" width="100%" height="320" frameborder="0" style="border:0" allowfullscreen></iframe>

					<div class=" p-30">
						<h5><b>RS Viajes Centro</b></h5>
						<ul class="qcAddress">
							<li><div class="divider"></div></li>
							<li><i class="fa fa-map-marker"></i> <strong>DIRECCIÓN</strong>: <p>20 de Noviembre 917, Centro Histórico, 58000 Morelia, Mich.</p></li>
							<li><i class="fa fa-phone"></i> <strong>TELÉFONO</strong>: <p> 01 443 312 4639</p></li>
							<li><i class="fa fa-calendar"></i> <strong>HORARIO</strong>: <p>10:00 a 19:00 hrs. Lunes a Viernes y 10:30 a 14:00 hrs. los Sabados.</p></li>
							<li><i class="fa fa-globe"></i> <strong>Website</strong>: <p><a title="website" href="https://www.facebook.com/RsViajesCentro/" target="_blank">https://www.facebook.com/RsViajesCentro/</a></p></li>
						</ul>
					</div>
				</div>

			</div>

		</div>

	</div>
</section>
<section class="section-video overlay overlay-5" style="background-image: url('https://img.youtube.com/vi/gLpqqUqlo7g/maxresdefault.jpg');">
	<div class="row center-align">
		<a class="white-text" id="modal-video-open" href="#modal-video" data-video="https://www.youtube.com/embed/gLpqqUqlo7g"><i class="material-icons">play_circle_filled</i></a>
		<p class="white-text"><i>Guapa - Oxígeno (Oceransky - Ojeda)</i></p>
	</div>
</section>
<section>
	
	<div class="row">
		<p class="center-align mt-50">Si tienes alguna duda sobre este evento no dudes en contactarnos</p>
		<div class="row center-align">
			<a href="{{ route('contacto') }}" class="btn waves-light waves-effect green center-align ls-1">CONTACTO</a>
		</div>
	</div>
</section>

<section id="compra" class="row section-comprar">
	<div class="col s12 mt-30">

		@if(Auth()->check())
			<div class="col s12 mb-15">
				<h5 class="mt-30 raleway quote">Da clic en el bloque que deseas para mostrar los asientos disponibles</h5>
			</div>
			<div class="col s12 m6 white div-border" id="svg-container" style="padding-top:10px;">
				@include('maps.teatro-stella-inda-3s')
			</div>
			<div class="col s12 m6">
				<div class="col s12 mb-15">
					<div class="col s1 grey darken-4" style="height: 25px;"></div>
					<div class="col s11">
						<div class="col s5">Escenario</div>
						<div class="col s7 right-align" id="info-title-section"></div>
					</div>
				</div>
				<div class="col s12 bloque-container">
					
					<div id="mapa-escenario" class=""></div>
					<div id="mapa-asientos" class="col s12"></div>
				</div>
				<div class="col s12 mt-15">
					<p id="ticket-message"></p>
				</div>
				<div class="col s12 center-align mt-15">
					<a href="javascript:;" id="checkout" class="btn waves-effect waves-light orange accent-3 hide">SIGUIENTE</a>
					{!! Form::open(['route'=>'payment.details', 'method'=>'POST', 'id' => 'checkout-form', 'style' => 'display:none;']) !!}

						{!! Form::hidden('asiento', '', ['id' => 'form_asiento']) !!}
						{!! Form::hidden('zona', '', ['id' => 'form_zona']) !!}
						{!! Form::hidden('precio', '', ['id' => 'form_precio']) !!}
						{!! Form::hidden('img', 'img/oceransky-ojeda-morelia.jpg') !!}
						{!! Form::hidden('evento', 'Oxígeno - Edgar Oceransky/Diego Ojeda') !!}
						{!! Form::hidden('fecha', '28 de febrero 2020') !!}
						{!! Form::hidden('lugar', 'Teatro Stella Inda') !!}
						{!! Form::hidden('ciudad', 'Morelia Mich.') !!}
						{!! Form::hidden('hora', '20:30 hrs') !!}
						{!! Form::hidden('event_type', '', ['id' => 'form_type']) !!}
						{!! Form::hidden('impresion_boleto', true) !!}
						@if($preventa)
						{!! Form::hidden('db_table', 'oceransky_ojeda_morelia_28feb_prev') !!}
						@else
						{!! Form::hidden('db_table', 'oceransky_ojeda_morelia_28feb') !!}
						@endif
						{!! Form::hidden('info', '--') !!}
						{!! Form::hidden('select_type', 'manual') !!}
						{!! Form::hidden('url', url('eventos/oceransky-ojeda-morelia')) !!}
					{!! Form::close() !!}
				</div>
			</div>
		

		@else

			<p class="center-align raleway">Debes iniciar sesion para poder realizar la compra</p>
			<div class="col s12 center-align">
				<a href="#modal-login" class="modal-login-open btn waves-light orange accent-3">Login</a>
			</div>
		@endif

	</div>
	<div class="row mt-30">
		<div class="col m8 offset-m2">
			<div class="row">
				<div class="col s6 offset-s3 mt-30">
					<div class="divider"></div>
				</div>
			</div>
			<p class="center-align">Si tienes alguna duda sobre este evento no dudes en contactarnos</p>
			<div class="row center-align">
				<a href="{{ route('contacto') }}" class="btn waves-light waves-effect green center-align ls-1">CONTACTO</a>
			</div>
		</div>
	</div>
</section>

<section class="section-lugar">
	<div class="row">
		<div class="col m9">
			<iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3756.226523920035!2d-101.20462088561376!3d19.7029777370859!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x842d0e7ceda102dd%3A0xabc0bd49d698666b!2sTeatro+Stella+Inda!5e0!3m2!1ses!2smx!4v1559066242672!5m2!1ses!2smx" width="100%" height="450" frameborder="0" style="border:0" allowfullscreen></iframe>
		</div>
		<div class="col m3">
			<h5 class="quote raleway">Lugar del evento</h5>
			
			<h5 class="mt-30">Teatro Stella Inda</h5>
			<div class="col s10">
				<div class="divider"></div>
			</div>
			<ul class="fa-ul" style="margin-top: 30px;">
				<li class="mb-10"><i class="fa-li fa fa-map-marker"></i> Av Francisco I. Madero Pte 1200, <br>Centro Histórico, 58000 <br>Morelia, Mich.</li>
				{{-- <li><i class="fa-li fa fa-phone"></i> 01 461 174 3456</li> --}}
			</ul>

		</div>
	</div>
</section>

<div id="modal-video" class="modal modal-large">
	<a href="#!" class="modal-close btn-flat"><i class="material-icons white-text">close</i></a>
	<div class="modal-content black no-padding">
		<iframe id="iframe" width="100%" height="420" src="" frameborder="0" allowfullscreen></iframe>
	</div>
</div>

@endsection

@section('scripts')
	<script>
		@if($preventa)
		var table = 'oceransky_ojeda_morelia_28feb_prev';
		var precios = {'Diamante': 600, 'Oro': 500, 'Plata': 350};
		@else
		var table = 'oceransky_ojeda_morelia_28feb';
		var precios = {'Diamante': 650, 'Oro': 550, 'Plata': 400};
		@endif
		var base_path = '{{ url('/') }}';
		var special_char_n = 'N-';

		$('#modal-video-open').leanModal({
			opacity: .8,
			ready: function() {
				var videoSCR = $('#modal-video-open').attr("data-video");
				var videoSCRPlay = videoSCR + "?modestbranding=1&rel=0&controls=1&showinfo=0&html5=1&autoplay=1";
				$("#iframe").attr('src', videoSCRPlay);
			},
		        complete: function() { 
		           $("#iframe").attr('src', $('#modal-video-open').attr("data-video"));
		        }
		    });
	</script>
	<script src="{{asset('js/event_manual_v3.js')}}"></script>
@endsection