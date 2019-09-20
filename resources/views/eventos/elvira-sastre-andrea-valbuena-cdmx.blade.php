@extends('layouts.main')

@section('title', 'Elvira Sastre y Andrea Valbuena - CDMX')

@section('description', 'Elvira Sastre y Andrea Valbuena en CDMX, 12 de septiembre, 21:00 hrs boletos Bolematico.com')

@section('styles')
<meta property="og:url"  content="https://www.bolematico.com/eventos/elvira-sastre-andrea-valbuena-cdmx" />
<meta property="og:title" content="Elvira Sastre y Andrea Valbuena en CDMX" />
<meta property="og:description" content="Elvira Sastre y Andrea Valbuena en CDMX, 12 de septiembre, 21:00 hrs boletos en Bolematico.com" />
<meta property="og:image" content="https://www.bolematico.com/img/elvira-andrea-mexico.jpg" />

<script src="https://use.fontawesome.com/9b9c9dc667.js"></script>
<link rel="stylesheet" type="text/css" href="{{ asset('css/event-select-manual.css') }}">
<style type="text/css">
	.label-new-section {
		padding: 5px 10px;
	    background: #EF5350;
	    border-radius: 25px;
	    color: #FFF;
	    position: absolute;
	    left: 15px;
	    top: -7px;
	    box-shadow: 1px 1px 0px 1px #d2b500;
	}
</style>
@endsection

@section('content')

<div class="image-header bg-4 overlay overlay-5">

	<div class="row white-text">
		<h4>Elvira Sastre y Andrea Valbuena</h4>
		<div class="divider"></div>
		<p><i>Teatro Silvia Pinal - CDMX</i></p>
		<p><i>12 de septiembre - 21:00 hrs.</i></p>
	</div>
	<a href="#compra" class="btn waves-light waves-effect page-scroll"><b>Comprar</b> <i class="fa fa-ticket" aria-hidden="true"></i></a>
</div>

<section class="container">
	<div class="row">
		<div class="col s12">
			<ul class="tabs">
				<li class="tab "><a class="active" href="#precios">Precios</a></li>
				<li class="tab "><a href="#detalles">Detalles</a></li>
				{{-- <li class="tab "><a href="#lugares">Lugares de venta</a></li> --}}
			</ul>
		</div>
		<div id="precios" class="col s12 tab-content">

			<div class="col s8 offset-s2 m5 mb-30 card-flyer">
				<img src="{{ asset('img/elvira-andrea-mexico.jpg') }}" alt="" class="responsive-img">
			</div>
			
			<div class="col s12 m6 offset-m1">

				<div class="row">

					<div class="qcPricing col s12 center-align mb-10">
						<div class="box col s12">
							<header>
								<div class="col s12 teal accent-4">Diamante <small>(Incluye Meet&Greet)</small></div>
							</header>
							<div class="price col s12"><span>$ 850</span> MXN.</div>
						</div>
					</div>

					<div class="qcPricing col s12 center-align mb-10" style="position: relative">
						<span class="label-new-section">NUEVO</span>
						<div class="box col s12">
							<header>
								<div class="col s12 red lighten-1">Oro plus <small>(Incluye Meet&Greet)</small></div>
							</header>
							<div class="price col s12"><span>$ 850</span> MXN.</div>
						</div>
					</div>

					<div class="qcPricing col s12 center-align mb-10">
						<div class="box col s12">
							<header>
								<div class="col s12 amber darken-1">Oro</div>
							</header>
							<div class="price col s12"><span>$ 550</span> MXN.</div>
						</div>
					</div>

					<div class="qcPricing col s12 center-align mb-10">
						<div class="box col s12">
							<header>
								<div class="col s12 grey lighten-1">Plata</div>
							</header>
							<div class="price col s12"><span>$ 400</span> MXN.</div>
						</div>
					</div>

				</div>

				<div class="row">
					<div class="divider"></div>
					<h5 class="center-align raleway blue-text">IMPORTANTE</h5>
					<p class="center-align underline">El boleto de zona Diamante, incluye Meet&Greet.</p>
					<div class="col s10 offset-s1">
						<p>* Al realizar tu compra en línea se realiza un cargo extra de <b>10%</b> por concepto de servicio.</p>
						{{-- <p>* Informes al: <a href="tel:4431880358" style="background: #4caf50; color: #fff; padding: 5px 10px;"> 443 188 0358</a> / <a href="tel:4432274979" style="background: #4caf50; color: #fff; padding: 5px 10px;"><i class="fa fa-whatsapp"></i> 443 227 4979</a></p> --}}
					</div>
				</div>
			</div>
		</div>

		<div id="detalles" class="col s12 tab-content">	
			<div class="col s12">
				<h5 class="raleway quote">Elvira Sastre</h5>
			</div>
			<div class="col s8 offset-s2 hide-on-med-and-up">
				<img src="{{ asset('img/elvira-sastre-bio.jpg') }}" class="responsive-img">
			</div>
			<div class="col s12 m8">
				<p><strong>Elvira Sastre</strong> nace en Segovia el verano de 1992 y ya desde muy pequeña, gracias a la influencia de su padre, muestra su amor por la lectura. A los doce años escribe su primer poema y tres años más tarde abre un blog, «Relocos y Recuerdos», que a día de hoy mantiene activo. Poco tiempo después, gana el premio de poesía “Emiliano Barral” con el relato corto Saudade</p>
				<p>Unos años más tarde, se instala en Madrid para cursar el grado universitario de Estudios Ingleses, sin saber que ese cambio lanzaría su carrera poética al cielo de la capital. En Madrid, Elvira continúa escribiendo y comienza a participar en eventos poéticos acompañada de cantautores consagrados como Adriana Moragues, Manu Míguez y Diego Ojeda e importantes poetas como Carlos Salem y Escandar Algeet. Con mucho trabajo y gracias a su talento, llegará con los años a compartir escenario con artistas como Andrés Suárez, Luis García Montero, Raquel Lanseros, Marwan o Benjamín Prado</p>
				<p>En el presente, Elvira Sastre continúa presentando sus obras por España y por América Latina mientras trabaja en la traducción de un poemario y prepara su primera novela. Acaba de publicar su quinto libro, «Aquella orilla nuestra», una obra ilustrada por Emiliano Batista (EMBA) y editada por Alfaguara.</p>
				
			</div>
			<div class="col m4 hide-on-small-only">
				<img src="{{ asset('img/elvira-sastre-bio.jpg') }}" class="responsive-img">
			</div>
			<div class="col s10 offset-s1">
				<div class="divider"></div>
			</div>
			<div class="clearfix"></div>
			<div class="col s12">
				<h5 class="raleway quote">Andrea Valbuena</h5>	
			</div>
			<div class="col s12 m4">
				<img src="{{ asset('img/andrea-valbuena-bio.jpg') }}" class="responsive-img">
			</div>
			<div class="col s12 m8">
				<p>Andrea Valbuena Rodríguez nació en Barcelona en 1992, pero reside en Segovia desde 2006. Estudia un Grado en Estudios Ingleses en la Universidad Complutense de Madrid. Desde 2010 publica poemas en el blog conlopuestoypalabras.blogspot.com y en 2014 escribió y autoeditó el poemario 'Una tormenta tropical lleva mi nombre'.</p>
			</div>
			
		</div>


{{-- 		<div id="lugares" class="col s12 tab-content">

			<div class="col s12">									
				<div class="white z-depth-2">
					<iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3756.1943227085408!2d-101.18477128552061!3d19.704349286730476!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x842d0e0d6bca646b%3A0x1b0a3a981724216f!2sRS+Viajes+Centro!5e0!3m2!1ses!2smx!4v1501091355750" width="100%" height="320" frameborder="0" style="border:0" allowfullscreen></iframe>
				
					<div class=" p-30">
						<h5><b>RS Viajes Centro</b></h5>
						<ul class="qcAddress">
							<li><div class="divider"></div></li>
							<li><i class="fa fa-map-marker"></i> <strong>DIRECCIÓN</strong>: <p>20 de Noviembre 917, Centro Histórico, 58000 CDMX, Mich.</p></li>
							<li><i class="fa fa-phone"></i> <strong>TELÉFONO</strong>: <p> 01 443 312 4639</p></li>
							<li><i class="fa fa-calendar"></i> <strong>HORARIO</strong>: <p>10:00 a 19:00 hrs. Lunes a Viernes y 10:30 a 14:00 hrs. los Sabados.</p></li>
							<li><i class="fa fa-globe"></i> <strong>Website</strong>: <p><a title="website" href="https://www.facebook.com/RsViajesCentro/" target="_blank">https://www.facebook.com/RsViajesCentro/</a></p></li>
						</ul>
					</div>
				</div>

			</div>
		</div> --}}

	</div>
</section>
<section class="section-video overlay overlay-5" style="background-image: url('https://img.youtube.com/vi/ElFfaG65ros/maxresdefault.jpg');">
	<div class="row center-align">
		<a class="white-text" id="modal-video-open" href="#modal-video" data-video="https://www.youtube.com/embed/ElFfaG65ros"><i class="material-icons">play_circle_filled</i></a>
		<p class="white-text"><i>Elvira Sastre - Una cien veces</i></p>
	</div>
</section>

<section id="compra" class="row section-comprar">
	{{-- <div class="col s12 mt-30">
		@if(Auth()->check())
			<div class="col s12 mb-15">
				<h5 class="mt-30 raleway quote">Da clic en el bloque que deseas para mostrar los asientos disponibles</h5>
			</div>
			<div class="col s12 m6 white div-border" style="padding-top:10px;">
				@include('maps.teatro-silvia-pinal-4s')
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
						{!! Form::hidden('img', 'img/elvira-andrea-mexico.jpg') !!}
						{!! Form::hidden('evento', 'Elvira Sastre y Andrea Valbuena') !!}
						{!! Form::hidden('fecha', '12 de septiembre 2019') !!}
						{!! Form::hidden('lugar', 'Teatro Silvia Pinal') !!}
						{!! Form::hidden('ciudad', 'CDMX') !!}
						{!! Form::hidden('hora', '21:00 hrs') !!}
						{!! Form::hidden('event_type', 'numerado') !!}
						{!! Form::hidden('impresion_boleto', true) !!}
						{!! Form::hidden('db_table', 'elvira_andrea_mexico_12sep') !!}
						{!! Form::hidden('info', '--') !!}
						{!! Form::hidden('select_type', 'manual') !!}
						{!! Form::hidden('url', url('eventos/elvira-sastre-andrea-valbuena-cdmx')) !!}
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
			<iframe src="https://www.google.com/maps/embed?pb=!1m14!1m8!1m3!1d15050.259552033524!2d-99.1546549!3d19.4311971!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x0%3A0xdfbf736c87c77b05!2sTeatro+Silvia+Pinal!5e0!3m2!1ses!2smx!4v1562883371310!5m2!1ses!2smx" width="100%" height="450" frameborder="0" style="border:0" allowfullscreen></iframe>
		</div>
		<div class="col m3">
			<h5 class="quote raleway">Lugar del evento</h5>
			
			<h5 class="mt-30">Teatro Silvia Pinal</h5>
			<div class="col s10">
				<div class="divider"></div>
			</div>
			<ul class="fa-ul" style="margin-top: 30px;">
				<li class="mb-10"><i class="fa-li fa fa-map-marker"></i> Calle Versalles 27, <br> Juárez, 06600 <br>Ciudad de México, CDMX</li>
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
		var table = 'elvira_andrea_mexico_12sep';
		var base_path = '{{ url('/') }}';
		var precios = {'Diamante': 850, 'Oro Plus': 850, 'Oro': 550, 'Plata': 400};
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