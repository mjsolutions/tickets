@extends('layouts.main')

@section('title', 'Raúl Ornelas')

@section('description', 'Raúl Ornelas, Celaya 04 de abril, 20:30 hrs boletos en Hyatt Place Celaya y bolematico.com')

@section('styles')
<meta property="og:url"  content="http://bolematico.mx/eventos/raul-ornelas-celaya" />
<meta property="og:title" content="Raúl Ornelas" />
<meta property="og:description" content="Raúl Ornelas, Celaya 04 de abril, 20:30 hrs boletos en Hyatt Place Celaya y bolematico.com" />
<meta property="og:image" content="http://bolematico.mx/img/ornelas-celaya.jpg" />

<script src="https://use.fontawesome.com/9b9c9dc667.js"></script>
<link rel="stylesheet" type="text/css" href="{{ asset('css/event-select-manual.css') }}">
@endsection

@section('content')

<div class="image-header bg-4 overlay overlay-5">

	<div class="row white-text">
		<h4>Raúl Ornelas</h4>
		<div class="divider"></div>
		<p class="mb-0"><i>Auditorio Tres Guerras - Celaya</i></p>
		<p class="m-0"><i>04 de abril - 20:30 hrs.</i></p>
	</div>
	<a href="#compra" class="btn waves-light waves-effect page-scroll"><b>Comprar</b> <i class="fa fa-ticket" aria-hidden="true"></i></a>
</div>

<section class="container">
	<div class="row">
		<div class="col s12">
			<ul class="tabs">
				<li class="tab "><a class="active" href="#descripcion">Descripción</a></li>
				<li class="tab "><a href="#biografia">Biografía</a></li>
				<li class="tab "><a href="#lugares">Lugares de venta</a></li>
			</ul>
		</div>
		<div id="descripcion" class="col s12 tab-content">
			<div class="row">
				<h4 class="mt-0 raleway quote">PRECIOS</h4>
				{{-- <div class="divider"></div> --}}
			</div>

			<div class="col s8 offset-s2 m3 offset-m1 mb-30 card-flyer">
				<img src="{{ asset('img/ornelas-celaya.jpg') }}" alt="" class="responsive-img">
			</div>
			
			<div class="col s12 m6 offset-m1">				

				<div class="row">

					<div class="qcPricing col s12 center-align mb-10">
						<div class="box col s12">
							<header>
								<div class="col s12 m8 teal accent-4">Diamante</div>
								<div class="col m4 btn-buy nopadding hide-on-small-only"><a href="#compra" class="page-scroll"><b>Comprar</b> <i class="fa fa-ticket" aria-hidden="true"></i></a></div>
							</header>
							<div class="price col s12"><span>$750</span> Por entrada</div>
							<div class="col s12 btn-buy nopadding hide-on-med-and-up"><a href="#compra" class="page-scroll"><b>Comprar</b> <i class="fa fa-ticket" aria-hidden="true"></i></a></div>
						</div>
					</div>

					<div class="qcPricing col s12 center-align mb-10">
						<div class="box col s12">
							<header>
								<div class="col s12 m8 amber darken-1">Oro</div>
								<div class="col m4 btn-buy nopadding hide-on-small-only"><a href="#compra" class="page-scroll"><b>Comprar</b> <i class="fa fa-ticket" aria-hidden="true"></i></a></div>
							</header>
							<div class="price col s12"><span>$550</span> Por entrada</div>
							<div class="col s12 btn-buy nopadding hide-on-med-and-up"><a href="#compra" class="page-scroll"><b>Comprar</b> <i class="fa fa-ticket" aria-hidden="true"></i></a></div>
						</div>
					</div>

					<div class="qcPricing col s12 center-align mb-10">
						<div class="box col s12">
							<header>
								<div class="col s12 m8 grey lighten-1">General</div>
								<div class="col m4 btn-buy nopadding hide-on-small-only"><a href="#compra" class="page-scroll"><b>Comprar</b> <i class="fa fa-ticket" aria-hidden="true"></i></a></div>
							</header>
							<div class="price col s12"><span>$380</span> Por entrada</div>
							<div class="col s12 btn-buy nopadding hide-on-med-and-up"><a href="#compra" class="page-scroll"><b>Comprar</b> <i class="fa fa-ticket" aria-hidden="true"></i></a></div>
						</div>
					</div>

				</div>

				<div class="row">
					<div class="divider"></div>
					<div class="col s10 offset-s1">
						<p>* Al realizar tu compra en línea se realiza un cargo extra de <b>10%</b> por concepto de servicio.</p>
						<p>* Informes al: <a href="tel:4611249255" style="background: #4caf50; color: #fff; padding: 5px 10px;"> 461 124 9255</a> / <a href="tel:4521741255" style="background: #4caf50; color: #fff; padding: 5px 10px;"> 452 174 1255</a></p>
					</div>
				</div>
			</div>
		</div>

		<div id="biografia" class="col s12 tab-content">
			<div class="col s12"><h4 class="mt-0 raleway quote">BIOGRAFIA</h4></div>	
			<div class="col s8 offset-s2 hide-on-med-and-up">
				<img src="{{ asset('img/ornelas-bio.jpg') }}" class="responsive-img">
			</div>
			<div class="col s12 m9 text-justify">
		        <p>Raúl Ornelas, originario de Arriaga, Chiapas, aprendió a tocar guitarra desde la secundaria. Deseaba cursar la carrera de administración de empresas turísticas, pero se dio cuenta de que lo suyo en realidad era la música, así que decidió ir a la Ciudad de México para probar suerte.</p>
				<p>Y grabó su primera canción, Alguien Está Entre los Dos. De inmediato le surgió un contrato como cantautor y grabó su primer disco en Barcelona, España: “Ornelas en el Exilio”, que incluía la canción con la que representó a México en el Festival Viña del Mar, Chile, en 1998: Gato y Pantera.</p>
				<p>Con su segundo disco, Manual de lo Prohibido, se dio a conocer en la mayor parte de la República Mexicana, gracias a su exitosa canción Las Cartas Sobre la Mesa, que escribió en coautoría con Roberto Ruiz.</p>				
			</div>
			<div class="col m3 hide-on-small-only">
				<img src="{{ asset('img/ornelas-bio.jpg') }}" class="responsive-img">
			</div>
			<div class="clearfix"></div>
			<div class="col s8 offset-s2 m4">
				<img src="{{ asset('img/ornelas-bio2.jpg') }}" class="responsive-img">
			</div>
			<div class="col s12 m8">
				<p class="mt-0">Desde el 2004, Raúl Ornelas forma parte del grupo Tres de Copas, con sus grandes amigos Jaime Flores y Luis Carlos Monroy, con quienes ha compuesto un sinfín de canciones, como Se Me Hace, interpretada por Pandora, y Vete, por Rocío Dúrcal. Este grupo empezó con el pie derecho al tener la oportunidad de abrir los conciertos de Juan Gabriel y Alejandro Fernández.</p>
				<p>Tres de Copas alcanzó la fama a nivel nacional con el tema Amor Mío, que hizo Raúl en coautoría con Jaime Flores y José Juan Monroy, y que se utilizó como tema principal de la telenovela “Belinda”.</p>
				
			</div>
			<div class="clearfix"></div>
			<p class="mb-0">Sitio Oficial: <a href="hhttps://www.facebook.com/raulornelas/" target="_blank">hhttps://www.facebook.com/raulornelas/</a></p>
			<p class="m-0">Fuente:<small>http://www.sacm.org.mx/biografias/biografias-interior.asp?txtSocio=27287</small></p>	
			
		</div>

		<div id="lugares" class="col s12 tab-content">
			<div class="col s12 mb-30">
				<h4 class="mt-0 raleway quote">LUGARES DE VENTA</h4>
			</div>
			<div class="col s12">

				<div class="col s12">									
					<!-- ## VENUE MAP ## -->
					<div class="white z-depth-2">
						<iframe src="https://www.google.com/maps/embed?pb=!1m14!1m8!1m3!1d14945.733664339117!2d-100.7796015!3d20.5294401!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x0%3A0x3edd1d74c4435f35!2sHyatt+Place+Celaya!5e0!3m2!1ses!2smx!4v1551255130689" width="100%" height="320" frameborder="0" style="border:0" allowfullscreen></iframe>
					
					<!-- ## ADDRESS LIST ## -->
						<div class=" p-30">
							<h5><b>Hyatt Place Celaya</b></h5>
							<ul class="qcAddress">
								<li><div class="divider"></div></li>
								<li><i class="fa fa-map-marker"></i> <strong>DIRECCIÓN</strong>: <p>Av. La Cano #124, Col. Santa Rosalia</p></li>
								<li><i class="fa fa-phone"></i> <strong>TELÉFONO</strong>: <p> 4611249255 / 452 174 1255 (WhatsApp)</p></li>
								<li><i class="fa fa-calendar"></i> <strong>HORARIO</strong>: <p>Lunes a viernes de 14:30 a 17:30 hrs y sábados de 09:00 a 13:00 hrs</p></li>
							</ul>
						</div>
					</div>

				</div>
				
			</div>			

		</div>

	</div>
</section>
<section class="section-video overlay overlay-5" style="background-image: url('https://img.youtube.com/vi/4zlrLpAo-vg/hqdefault.jpg');">
	<div class="row center-align">
		<a class="white-text" id="modal-video-open" href="#modal-video" data-video="https://www.youtube.com/embed/4zlrLpAo-vg"><i class="material-icons">play_circle_filled</i></a>
		<p class="white-text"><i>Raúl Ornelas - Por extrañarte tanto</i></p>
	</div>
</section>

<section id="compra" class="section-comprar">
	{{-- <div class="row mt-30">
	@if(Auth()->check())
		<div class="col s12 mb-15">
			<h5 class="mt-30 raleway quote">Da clic en el bloque que deseas para mostrar los asientos disponibles</h5>
		</div>
		<div class="col s12 m6">
			@include('maps.auditorio-tres-guerras')
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
					{!! Form::hidden('img', 'img/ornelas-celaya.jpg') !!}
					{!! Form::hidden('evento', 'Raúl Ornelas') !!}
					{!! Form::hidden('fecha', '04 de abril 2019') !!}
					{!! Form::hidden('lugar', 'Auditorio Tres Guerras') !!}
					{!! Form::hidden('ciudad', 'Celaya') !!}
					{!! Form::hidden('hora', '20:30 hrs') !!}
					{!! Form::hidden('event_type', '', ['id' => 'form_type']) !!}
					{!! Form::hidden('impresion_boleto', true) !!}
					{!! Form::hidden('db_table', 'ornelas_celaya_04abr') !!}
					{!! Form::hidden('info', '--') !!}
					{!! Form::hidden('select_type', 'manual') !!}
					{!! Form::hidden('url', url('eventos/raul-ornelas-celaya')) !!}
				{!! Form::close() !!}
			</div>
		</div>
	

	@else

		<p class="center-align raleway">Debes iniciar sesion para poder realizar la compra</p>
		<div class="col s12 center-align">
			<a href="#modal-login" class="modal-login-open btn waves-light orange accent-3">Login</a>
		</div>
	@endif
	</div> --}}
	<div class="row mt-30">
		<div class="col m8 offset-m2">
			<h5 class="center-align raleway">Venta de boletos en Hyatt Place Celaya</h5>
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
	<div id="map"></div>
		
	<div class="info-lugar">
		<h5 class="raleway quote mb-30">Lugar del evento</h5>
		<div class="divider mb-30"></div>
		<p><b>Auditorio Tres Guerras</b></p>
		<p><i class="material-icons">location_on</i>Av. El Sauz y Av. Torres Landa s/n. Col. Laureles, Celaya, Gto.</p>
		<p><i class="material-icons">call</i> 01 461 174 3456</p>
		{{-- <p><i class="material-icons">language</i> <a title="website" href="http://ceconexpo.com/" target="_blank">http://ceconexpo.com</a></p> --}}
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
		var table = 'ornelas_celaya_04abr';
		var base_path = '{{ url('/') }}';
		var precios = {'Diamante': 750, 'Oro': 550, 'General': 380};

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
		function initMap() {
		        var uluru = {lat: 20.5360705, lng: -100.8285575};
		        var map = new google.maps.Map(document.getElementById('map'), {
		          zoom: 17,
		          scrollwheel: false,
		          navigationControl: true,
		          draggable: true,
		          center: {lat: 20.5360705, lng: -100.8275575}
		        });
		        var marker = new google.maps.Marker({
		          position: uluru,
		          map: map
		        });
		      }

	</script>
	<script src="{{asset('js/event_manual.js')}}"></script>

    <script async defer src="https://maps.googleapis.com/maps/api/js?key=AIzaSyBOOT9N6QdDeq0bnmSb1bw2SKw5CXQmOeA&callback=initMap"></script>
@endsection