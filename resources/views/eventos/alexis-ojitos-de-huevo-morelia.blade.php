@extends('layouts.main')

@section('title', 'Alexis ojitos de huevo - Morelia')

@section('description', 'Alexis ojitos de huevo en Morelia, 13 de julio, 21:00 hrs boletos en RS Viajes Centro y Bolematico.com')

@section('styles')
<meta property="og:url"  content="https://www.bolematico.com/eventos/alexis-ojitos-de-huevo-morelia" />
<meta property="og:title" content="Alexis ojitos de huevo en Morelia" />
<meta property="og:description" content="Alexis ojitos de huevo en Morelia, 13 de julio, 21:00 hrs boletos en RS Viajes Centro y Bolematico.com" />
<meta property="og:image" content="https://www.bolematico.com/img/alexis-morelia.jpg" />

<script src="https://use.fontawesome.com/9b9c9dc667.js"></script>
<link rel="stylesheet" type="text/css" href="{{ asset('css/event-select-manual.css') }}">
@endsection

@section('content')

<div class="image-header bg-4 overlay overlay-5">

	<div class="row white-text">
		<h4>Alexis ojitos de huevo</h4>
		<div class="divider"></div>
		<p><i>Teatro Stella Inda - Morelia</i></p>
		<p><i>13 de julio - 21:00 hrs.</i></p>
	</div>
	<a href="#compra" class="btn waves-light waves-effect page-scroll"><b>Comprar</b> <i class="fa fa-ticket" aria-hidden="true"></i></a>
</div>

<section class="container">
	<div class="row">
		<div class="col s12">
			<ul class="tabs">
				<li class="tab "><a class="active" href="#precios">Precios</a></li>
				<li class="tab "><a href="#biografia">Biografía</a></li>
				<li class="tab "><a href="#lugares">Lugares de venta</a></li>
			</ul>
		</div>
		<div id="precios" class="col s12 tab-content">

			<div class="col s8 offset-s2 m5 mb-30 card-flyer">
				<img src="{{ asset('img/alexis-morelia.jpg') }}" alt="" class="responsive-img">
			</div>
			
			<div class="col s12 m6 offset-m1">

				<div class="row">

					<div class="qcPricing col s12 center-align mb-10">
						<div class="box col s12">
							<header>
								<div class="col s12 teal accent-4">Diamante</div>
							</header>
							<div class="price col s12"><span>$270</span> MXN</div>
						</div>
					</div>

					<div class="qcPricing col s12 center-align mb-10">
						<div class="box col s12">
							<header>
								<div class="col s12 amber darken-1">Oro</div>
							</header>
							<div class="price col s12"><span>$170</span> MXN</div>
						</div>
					</div>

				</div>

				<div class="row">
					<div class="divider"></div>
					<div class="col s10 offset-s1">
						<p>* Al realizar tu compra en línea se realiza un cargo extra de <b>10%</b> por concepto de servicio.</p>
						{{-- <p>* Informes al: <a href="tel:4431880358" style="background: #4caf50; color: #fff; padding: 5px 10px;"> 443 188 0358</a> / <a href="tel:4432274979" style="background: #4caf50; color: #fff; padding: 5px 10px;"><i class="fa fa-whatsapp"></i> 443 227 4979</a></p> --}}
					</div>
				</div>
			</div>
		</div>

		<div id="biografia" class="col s12 tab-content">	
			<div class="col s8 offset-s2 hide-on-med-and-up">
				<img src="{{ asset('img/alexis-bio.jpg') }}" class="responsive-img">
			</div>
			<div class="col s12 m8 text-justify">
		    <p>Su nombre es Alexis Arroyo nació ciego hace 24 años en Querétaro. Es periodista, escritor y comediante de Stand Up y ha demostrado ser un gran talento sobre el escenario.</p>
				<p>Desde niño se interesó por la comedia, a los seis años escuchaba canciones de comedia y admiraba a la gente que se dedicaba hacer reír como Polo Polo. Siempre le gustó la idea de ser el centro de atención y divertir a la gente; además le gusta cantar y el teatro.</p>
        <p>Empezó en el mundo del Stand Up, luego de acompañar a un amigo que en aquél momento era DJ de un bar, le dijeron que podía subir al escenario como aficionado y lo hizo. Desde entonces no ha soltado el micrófono y posteriormente tuvo su primera aparición en televisión, de ahí surgieron los primeros shows.</p>
        <p>Una de las personas que apoyó a Alexis para iniciar como Standopero fue Hugo Alberto Pérez Acevedo, el Cojo Feliz.</p>
        <p>Ha destacado por hacer reír al público en 'Beer Hall' un bar de la Condesa donde tienen lugar los tradicionales ?Open Mic?, sesiones en las que los comediantes acuden a probar material nuevo delante del público.</p>
        <p>En 2015 participó en el  canal de televisión Comedy Central y recientemente fue ganador del 'Stand wars' de Telehit 2017, lo cual lo hizo merecedor de un programa especial transmitido a todo Hispanoamérica.</p>
        <p>Fuera del escenario Alexis Arroyo es activista a favor de la inclusión de personas con discapacidades y hace llegar su trabajo a través de su canal en YouTube.</p>				
			</div>
			<div class="col m4 hide-on-small-only">
				<img src="{{ asset('img/alexis-bio.jpg') }}" class="responsive-img">
			</div>
			<div class="clearfix"></div>
			
		</div>

		<div id="lugares" class="col s12 tab-content">

			<div class="col s12">									
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

		</div>

	</div>
</section>
<section class="section-video overlay overlay-5" style="background-image: url('https://img.youtube.com/vi/BlQxduueVTw/maxresdefault.jpg');">
	<div class="row center-align">
		<a class="white-text" id="modal-video-open" href="#modal-video" data-video="https://www.youtube.com/embed/BlQxduueVTw"><i class="material-icons">play_circle_filled</i></a>
		<p class="white-text"><i>Alexis Ojitos De Huevo | Stand Up | Comedy Central México</i></p>
	</div>
</section>

<section id="compra" class="row section-comprar">
	<div class="col s12 mt-30">
		@if(Auth()->check())
			<div class="col s12 mb-15">
				<h5 class="mt-30 raleway quote">Da clic en el bloque que deseas para mostrar los asientos disponibles</h5>
			</div>
			<div class="col s12 m6 white div-border" style="padding-top:10px;">
				@include('maps.teatro-stella-inda')
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
						{!! Form::hidden('img', 'img/alexis-morelia.jpg') !!}
						{!! Form::hidden('evento', 'Alexis Ojitos de Huevo') !!}
						{!! Form::hidden('fecha', '13 de julio 2019') !!}
						{!! Form::hidden('lugar', 'Teatro Stella Inda') !!}
						{!! Form::hidden('ciudad', 'Morelia') !!}
						{!! Form::hidden('hora', '21:00 hrs') !!}
						{!! Form::hidden('event_type', 'numerado') !!}
						{!! Form::hidden('impresion_boleto', true) !!}
						{!! Form::hidden('db_table', 'alexis_morelia_13jul') !!}
						{!! Form::hidden('info', '--') !!}
						{!! Form::hidden('select_type', 'manual') !!}
						{!! Form::hidden('url', url('eventos/alexis-ojitos-de-huevo-morelia')) !!}
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
			<h5 class="center-align raleway">Venta de boletos también en RS Viajes Centro</h5>
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
		var table = 'alexis_morelia_13jul';
		var base_path = '{{ url('/') }}';
		var precios = {'Diamante': 270, 'Oro': 170};
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