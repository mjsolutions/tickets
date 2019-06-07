@extends('layouts.main')

@section('title', 'Santiago Cruz')

@section('description', 'Santiago Cruz, Morelia 30 de mayo, 20:30 hrs boletos en RS Viajes Centro, taquillas del Planetario y bolematico.com')

@section('styles')
<meta property="og:url"  content="http://bolematico.mx/eventos/santiago-cruz-morelia" />
<meta property="og:title" content="Santiago Cruz" />
<meta property="og:description" content="Santiago Cruz, Morelia 30 de mayo, 20:30 hrs boletos en RS Viajes Centro, taquillas del Planetario y bolematico.com" />
<meta property="og:image" content="http://bolematico.mx/img/santiago-cruz-morelia.jpg" />

<script src="https://use.fontawesome.com/9b9c9dc667.js"></script>
<link rel="stylesheet" type="text/css" href="{{ asset('css/event-select-manual.css') }}">
@endsection

@section('content')

<div class="image-header bg-4 overlay overlay-5">

	<div class="row white-text">
		<h4>Santiago Cruz</h4>
		<div class="divider"></div>
		<p class="mb-0"><i>Teatro Stella Inda - Morelia</i></p>
		<p class="m-0"><i>30 de mayo - 20:30 hrs.</i></p>
	</div>
	<a href="#compra" class="btn waves-light waves-effect page-scroll"><b>Comprar</b> <i class="fa fa-ticket" aria-hidden="true"></i></a>
</div>

<section class="container">
	<div class="row">
		<div class="col s12">
			<ul class="tabs">
				<li class="tab "><a class="active" href="#precios">Precios</a></li>
				<li class="tab "><a href="#detalles">Detalles</a></li>
				<li class="tab "><a href="#lugares">Lugares de venta</a></li>
			</ul>
		</div>
		<div id="precios" class="col s12 tab-content">

			<div class="col s8 offset-s2 m4 offset-m1 mb-30 card-flyer">
				<img src="{{ asset('img/santiago-cruz-morelia.jpg') }}" alt="" class="responsive-img">
			</div>
			
			<div class="col s12 m5 offset-m1">				

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
							<div class="price col s12"><span>$500</span> MXN</div>
						</div>
					</div>

					<div class="qcPricing col s12 center-align mb-10">
						<div class="box col s12">
							<header>
								<div class="col s12 grey lighten-1">Plata</div>
							</header>
							<div class="price col s12"><span>$400</span> MXN</div>
						</div>
					</div>

				</div>

				<div class="row">
					<div class="divider"></div>
					<div class="col s10 offset-s1">
						<p>* Al realizar tu compra en línea se realiza un cargo extra de <b>10%</b> por concepto de servicio.</p>
						{{-- <p>* Informes al: <a href="tel:4432324400" style="background: #4caf50; color: #fff; padding: 5px 10px;"> 443 232 4400 ext. 160</a> / <a href="tel:4521741255" style="background: #4caf50; color: #fff; padding: 5px 10px;"><i class="fa fa-whatsapp"></i> 452 174 1255</a></p> --}}
					</div>
				</div>
			</div>
		</div>

		<div id="detalles" class="col s12 tab-content">
			<div class="col s8 offset-s2 hide-on-med-and-up">
				<img src="{{ asset('img/santiago-bio.jpg') }}" class="responsive-img">
			</div>
				
			<div class="col s12 m9">	
				<p>El cantautor colombiano <strong>Santiago Cruz</strong>, es ya un nombre indispensable en el panorama de la música pop internacional. Con sus cinco álbumes, cuatro de ellos producidos en estudio, ha obtenido paso a paso un reconocimiento tanto en Colombia como en varios países de la región que lo proyecta como uno de los más importantes artistas de la escena musical hispanohablante.</p>
				<p>Con múltiples reconocimientos en los últimos años, entre ellos dos nominaciones al Latin Grammy en el 2010 y 2013 en las categorías Mejor Álbum Cantautor y Grabación del año por Desde lejos y varios premios Nuestra Tierra, Shock y 40 Principales, varios Discos de oro y platino por ventas de sus álbumes, Cruz sigue transitando con éxito el camino que soñaba, vivir haciendo lo que más le gusta, componer y cantar.</p>
				<p>Desde 2011 es Embajador de Buena Voluntad de Naciones Unidas por los Objetivos del Milenio, un honroso nombramiento que le permite trabajar de cerca con el equipo de la ONU para encontrar formas concretas de lograr algunos de los cambios que se necesitan para un mundo mejor.</p>
			</div>
			<div class="col s3 hide-on-small-only">
				<img src="{{ asset('img/santiago-bio.jpg') }}" class="responsive-img">
			</div>
			<div class="clearfix"></div>
			<div class="col s8 offset-s2 m4">
				<img src="{{ asset('img/santiago-bio2.jpg') }}" class="responsive-img">
			</div>
			<div class="col s12 m8">
				<p class="mt-0">Su canción Una y otra vez le dió la oportunidad de entrar al mercado colombiano. Ese sencillo formó parte de su primer álbum titulado SOLO HASTA HOY, lanzado en 2003. Tres años mas tarde, en 2006, salió su segundo álbum, SENTIDOS un disco bien logrado y producido en forma independiente. Canciones de esta producción como "Acabado" y "Tus Regalos" quedaron grabadas en el alma de la gente.</p>
				<p>2009 marcó el camino irreversible para posicionarse como un gran cantautor de talla internacional. Ese año, en España, de la mano del reconocido productor musical Nacho Mañó (el mismo que ha trabajado con Armando Manzanero, Alejandro Sanz, Niña Pastori, entre otros, y quien ademas es miembro y alma de Presuntos Implicados), Santiago materializó su tercer album CRUCE DE CAMINOS a partir del cual contó con el acompañamiento de Sony Music.</p>
				<p>Baja la guardia, Cuando regreses, Y si te quedas, ¿qué?, 6 am y 10.000 batallas, son las 5 canciones de ese álbum que ya forman parte fundamental del repertorio del pop colombiano. Tras el éxito obtenido, en diciembre de 2011 CRUCE DE CAMINOS recibió Doble Disco de Platino por ventas en Colombia, y Disco de Platino en Venezuela.</p>
			</div>
			<div class="clearfix"></div>
			<p>Fuente: <small>http://www.santiagocruz.net/bio.php/</small></p>	
			
		</div>

		<div id="lugares" class="col s12 tab-content">

			<div class="col s12 m6">									
				<!-- ## VENUE MAP ## -->
				<div class="white z-depth-2">
					<iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3756.1943227085408!2d-101.18477128552061!3d19.704349286730476!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x842d0e0d6bca646b%3A0x1b0a3a981724216f!2sRS+Viajes+Centro!5e0!3m2!1ses!2smx!4v1501091355750" width="100%" height="320" frameborder="0" style="border:0" allowfullscreen></iframe>
				
				<!-- ## ADDRESS LIST ## -->
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

			<div class="col s12 m6">									
				<!-- ## VENUE MAP ## -->
				<div class="white z-depth-2">
					<iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3756.6546912563167!2d-101.18560468584354!3d19.68473203767239!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x842d0de79c733455%3A0x2bb6c9a37c54bca5!2sPlanetario+de+Morelia!5e0!3m2!1ses!2smx!4v1499195093931" width="100%" height="320" frameborder="0" style="border:0" allowfullscreen></iframe>
				
				<!-- ## ADDRESS LIST ## -->
					<div class=" p-30">
						<h5><b>Taquillas del planetario</b></h5>
						<ul class="qcAddress">
							<li><div class="divider"></div></li>
							<li><i class="fa fa-map-marker"></i> <strong>DIRECCIÓN</strong>: <p>Av. Ventura Puente s/n, Félix Ireta, 58070 Morelia, Mich.</p></li>
							<li><i class="fa fa-phone"></i> <strong>TELÉFONO</strong>: <p> 443 232 4400 ext. 160</p></li>
							<li><i class="fa fa-calendar"></i> <strong>HORARIO</strong>: <p>11:00 a 19:00 hrs. Lunes a Sabado. </p></li>
							<li><i class="fa fa-globe"></i> <strong>Website</strong>: <p><a title="website" href="http://ceconexpo.com" target="_blank"></a>http://ceconexpo.com</p></li>
						</ul>
					</div>
				</div>

			</div>	

		</div>

	</div>
</section>
<section class="section-video overlay overlay-5" style="background-image: url('https://img.youtube.com/vi/geFJZW9vpSM/maxresdefault.jpg');">
	<div class="row center-align">
		<a class="white-text" id="modal-video-open" href="#modal-video" data-video="https://www.youtube.com/embed/geFJZW9vpSM"><i class="material-icons">play_circle_filled</i></a>
		<p class="white-text"><i>Santiago Cruz - Y Si Te Quedas, ¿qué?</i></p>
	</div>
</section>

<section id="compra" class="section-comprar">
	<div class="row mt-30">
	@if(Auth()->check())
		<div class="col s12 mb-15">
			<h5 class="mt-30 raleway quote">Da clic en el bloque que deseas para mostrar los asientos disponibles</h5>
		</div>
		<div class="col s12 m6">
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
			<div class="col s11 bloque-container">
				
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
					{!! Form::hidden('img', 'img/santiago-cruz-morelia.jpg') !!}
					{!! Form::hidden('evento', 'Santiago Cruz') !!}
					{!! Form::hidden('fecha', '30 de mayo 2019') !!}
					{!! Form::hidden('lugar', 'Teatro Stella Inda') !!}
					{!! Form::hidden('ciudad', 'Morelia') !!}
					{!! Form::hidden('hora', '20:30 hrs') !!}
					{!! Form::hidden('event_type', 'numerado') !!}
					{!! Form::hidden('impresion_boleto', true) !!}
					{!! Form::hidden('db_table', 'santiago_cruz_morelia_30may') !!}
					{!! Form::hidden('info', '--') !!}
					{!! Form::hidden('select_type', 'manual') !!}
					{!! Form::hidden('url', url('eventos/santiago-cruz-morelia')) !!}
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
			<h5 class="center-align raleway">Venta de boletos también en RS Viajes Centro y Taquillas del Planetario</h5>
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
		var table = 'santiago_cruz_morelia_30may';
		var base_path = '{{ url('/') }}';
		var precios = {'Diamante': 650, 'Oro': 500, 'Plata': 400};
		var special_char_n = 'NN';

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
	<script src="{{asset('js/event_manual_v2.js')}}"></script>
@endsection