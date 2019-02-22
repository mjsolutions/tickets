@extends('layouts.main')

@section('title', 'Roberto Tapia Mexicali')

@section('description', 'Roberto Tapia, Mexicali 23 de marzo, 21:00 hrs boletos en Hotel Araiza y bolematico.com')

@section('styles')
<meta property="og:url"  content="http://bolematico.mx/eventos/roberto-tapia-mexicali" />
<meta property="og:title" content="Roberto Tapia Mexicali" />
<meta property="og:description" content="Roberto Tapia, Mexicali 23 de marzo, 21:00 hrs boletos en Hotel Araiza y bolematico.com" />
<meta property="og:image" content="http://bolematico.mx/img/roberto-mexicali.jpg" />

<script src="https://use.fontawesome.com/9b9c9dc667.js"></script>
<link rel="stylesheet" type="text/css" href="{{ asset('css/event-select-manual.css') }}">
<style type="text/css">
	.flex {
		margin: 0 auto;
		width: 80%;
		padding: 10px 0;
		display: flex;
		justify-content: space-around;
		align-items: flex-start;
		/*border-bottom: 1px solid #ddd;*/
	}
	.flex a {
		font-size: 1.3rem;
	}
</style>
@endsection

@section('content')

<div class="image-header bg-4 overlay overlay-5">

	<div class="row white-text">
		<h4>Roberto Tapia</h4>
		<div class="divider"></div>
		<p class="mb-0"><i>Palenque del FEX - Mexicali</i></p>
		<p class="m-0"><i>23 de marzo, 21:00 hrs.</i></p>
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
				<img src="{{ asset('img/roberto-mexicali.jpg') }}" alt="" class="responsive-img">
			</div>
			
			<div class="col s12 m6 offset-m1">				

				<div class="row">

					<div class="qcPricing col s12 center-align mb-10">
						<div class="box col s12">
							<header>
								<div class="col s12 m8 teal accent-4">VIP</div>
								<div class="col m4 btn-buy nopadding hide-on-small-only"><a href="#compra" class="page-scroll"><b>Comprar</b> <i class="fa fa-ticket" aria-hidden="true"></i></a></div>
							</header>
							<div class="price col s12"><span>$970</span> Por entrada</div>
							<div class="col s12 btn-buy nopadding hide-on-med-and-up"><a href="#compra" class="page-scroll"><b>Comprar</b> <i class="fa fa-ticket" aria-hidden="true"></i></a></div>
						</div>
					</div>

					<div class="qcPricing col s12 center-align mb-10">
						<div class="box col s12">
							<header>
								<div class="col s12 m8 amber darken-1">Numerado</div>
								<div class="col m4 btn-buy nopadding hide-on-small-only"><a href="#compra" class="page-scroll"><b>Comprar</b> <i class="fa fa-ticket" aria-hidden="true"></i></a></div>
							</header>
							<div class="price col s12"><span>$650</span> Por entrada</div>
							<div class="col s12 btn-buy nopadding hide-on-med-and-up"><a href="#compra" class="page-scroll"><b>Comprar</b> <i class="fa fa-ticket" aria-hidden="true"></i></a></div>
						</div>
					</div>

					<div class="qcPricing col s12 center-align mb-10">
						<div class="box col s12">
							<header>
								<div class="col s12 m8 grey lighten-1">General</div>
								<div class="col m4 btn-buy nopadding hide-on-small-only"><a href="#compra" class="page-scroll"><b>Comprar</b> <i class="fa fa-ticket" aria-hidden="true"></i></a></div>
							</header>
							<div class="price col s12"><span>$270</span> Por entrada</div>
							<div class="col s12 btn-buy nopadding hide-on-med-and-up"><a href="#compra" class="page-scroll"><b>Comprar</b> <i class="fa fa-ticket" aria-hidden="true"></i></a></div>
						</div>
					</div>

				</div>

				<div class="row">
					<div class="divider"></div>
					
						<div class="col s10 offset-s1">
							<p> * Al realizar tu compra en línea se realiza un cargo extra por concepto de servicio.</p>
							<p> * Informes: <a href="tel:6673070254" style="background: #4caf50; color: #fff; padding: 5px 10px;"> 667 307 0254</a> </p>
						</div>
											
				</div>
			</div>
		</div>

		<div id="biografia" class="col s12 tab-content">
			<div class="col s12"><h4 class="mt-0 raleway quote">BIOGRAFIA</h4></div>	
			<div class="col s8 offset-s2 hide-on-med-and-up">
				<img src="{{ asset('img/roberto-tapia-bio.jpg') }}" class="responsive-img">
				<div class="flex">
					<a href="https://www.facebook.com/RobertoTapiaMusic" target="_blank"><i class="fa fa-facebook" aria-hidden="true"></i></a>
					<a href="https://www.instagram.com/robertotapia/" target="_blank"><i class="fa fa-instagram" aria-hidden="true"></i></a>
					<a href="https://twitter.com/roberto__tapia" target="_blank"><i class="fa fa-twitter" aria-hidden="true"></i></a>
					<a href="https://www.youtube.com/user/RobertoTapiaVEVO" target="_blank"><i class="fa fa-youtube" aria-hidden="true"></i></a>
				</div>
			</div>
			<div class="col m8 text-justify">
				<p>Nacido en San Diego y criado en Culiacán, hoy por hoy se ha destacado como uno de los intérpretes de música norteña y de banda con un estilo muy especial convirtiéndose en uno de los exponentes del género más cotizados no sólo en México y Estados Unidos.</p>
				<p>Desde que comenzó su carrera artística, piso con pie derecho los escenarios de México y Estados Unidos para complacer y deleitar a un público muy exigente que  hoy por hoy lo ha llevado a ser uno de los artistas más cotizados en el mundo del entretenimiento, por tener un estilo muy especial para interpretar sus canciones.</p>
				<p>En su album "Mi Niña" por primera vez grabó boleros y banda con un toque internacional, lleno de romance y de desamor, sobre las experiencias que ha tenido el cantante. Esta producción discográfica se produjo bajo el sello Universal Music Latino/Fonovisa. “Mi Niña” cuenta con un total de 13 temas: “El Dolor”, “Mi Consentida”, “El Juego”, “El Compadre”, “No Sentí Nada”,  “Mi Niña”, “Esta Vez Me Canse”, “La Cosecha Del Chapo”, “Después De Ti”, “El Desamor”, “El Moreno”, “El Amor Duele”, “Loco” un tema con la colaboración de Enrique Iglesias y Romeo Santos. También hizo un dueto con Prince Roy para cantar “Soy el Mismo”.</p>
				<p>A esto se le suma su exitosa participación como juez en el programa La Voz Kids, donde vivió una experiencia única aprendiendo con los niños más que como juez, como instructor. “Soy un coach que ayudo a los niños a realizar sus sueños”  y que estará también en la segunda temporada de este programa que es uno de los más vistos en Estados Unidos.</p>
				<p>Sitio web Oficial: <a href="http://www.universalmusica.com/robertotapia/" target="_blank">www.universalmusica.com/robertotapia/</a></p>
			</div>
			<div class="col m4 hide-on-small-only">
				<img src="{{ asset('img/roberto-tapia-bio.jpg') }}" class="responsive-img">
				<div class="flex">
					<a href="https://www.facebook.com/RobertoTapiaMusic" target="_blank"><i class="fa fa-facebook" aria-hidden="true"></i></a>
					<a href="https://www.instagram.com/robertotapia/" target="_blank"><i class="fa fa-instagram" aria-hidden="true"></i></a>
					<a href="https://twitter.com/roberto__tapia" target="_blank"><i class="fa fa-twitter" aria-hidden="true"></i></a>
					<a href="https://www.youtube.com/user/RobertoTapiaVEVO" target="_blank"><i class="fa fa-youtube" aria-hidden="true"></i></a>
				</div>
			</div>
			<div class="clearfix"></div>
			
			
		</div>

		<div id="lugares" class="col s12 tab-content">
			<div class="col s12 mb-30">
				<h4 class="mt-0 raleway quote">LUGARES DE VENTA</h4>
			</div>
			<div class="col s12">

				<div class="col s12">									
					<!-- ## VENUE MAP ## -->
					<div class="white z-depth-2">
						<iframe src="https://www.google.com/maps/embed?pb=!1m14!1m8!1m3!1d13438.461714619756!2d-115.4516523!3d32.6430633!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x0%3A0x60dcf34874a0f030!2sHotel+Araiza!5e0!3m2!1ses!2smx!4v1549753202183" width="100%" height="450" frameborder="0" style="border:0" allowfullscreen></iframe>
					
					<!-- ## ADDRESS LIST ## -->
						<div class=" p-30">
							<h5><b>Hotel Araiza</b></h5>
							<ul class="qcAddress">
								<li><div class="divider"></div></li>
								<li><i class="fa fa-map-marker"></i> <strong>DIRECCIÓN</strong>: <p>Bv. Bénito Juárez 2220, Jardines del Valle, 21270 Mexicali, B.C.</p></li>
								<li><i class="fa fa-phone"></i> <strong>TELÉFONO</strong>: <p> 01 686 564 1100</p></li>
								<li><i class="fa fa-globe"></i> <strong>Website</strong>: <p><a title="website" href="http://araizahoteles.com" target="_blank">araizahoteles.com</a></p></li>
							</ul>
						</div>
					</div>

				</div>
				
			</div>			

		</div>

	</div>
</section>
<section class="section-video overlay overlay-5" style="background-image: url('https://img.youtube.com/vi/zqNKaVWYYeg/maxresdefault.jpg');">
	<div class="row center-align">
		<a class="white-text" id="modal-video-open" href="#modal-video" data-video="https://www.youtube.com/embed/zqNKaVWYYeg"><i class="material-icons">play_circle_filled</i></a>
		<p class="white-text"><i>Roberto Tapia - No valoraste</i></p>
	</div>
</section>

<section id="compra" class="section-comprar">
	<div class="row mt-30">
	@if(Auth()->check())
		<div class="col s12 mb-15">
			<h5 class="mt-30 raleway quote">Da clic en el bloque que deseas para mostrar los asientos disponibles</h5>
		</div>
		<div class="col s12 m6">
			@include('maps.palenque-del-fex')
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
					{!! Form::hidden('img', 'img/roberto-mexicali.jpg') !!}
					{!! Form::hidden('evento', 'Roberto Tapia') !!}
					{!! Form::hidden('fecha', '23 de marzo 2019') !!}
					{!! Form::hidden('lugar', 'Palenque del FEX') !!}
					{!! Form::hidden('ciudad', 'Mexicali') !!}
					{!! Form::hidden('hora', '21:00 hrs') !!}
					{!! Form::hidden('event_type', 'numerado') !!}
					{!! Form::hidden('impresion_boleto', true) !!}
					{!! Form::hidden('db_table', 'roberto_tapia_mexicali_23mar') !!}
					{!! Form::hidden('info', '--') !!}
					{!! Form::hidden('select_type', 'manual') !!}
					{!! Form::hidden('url', url('eventos/roberto-tapia-mexicali')) !!}
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
			<h5 class="center-align raleway">Venta de boletos también en Hotel Araiza</h5>
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
		<p><b>Palenque del FEX</b></p>
		<p><i class="material-icons">location_on</i>Río Nuevo 955, Agualeguas, 21090 Mexicali, B.C.</p>
		<p><i class="material-icons">call</i> 01 686 210 8242</p>
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
		var get_map_seat = '{{url('/api/getMapAsientos')}}/roberto_tapia_mexicali_23mar';
		var base_path = '{{ url('/') }}';
		var precios = {'VIP': 970, 'Numerado': 650, 'General': 270};

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
		        var uluru = {lat: 32.6488821, lng: -115.4807395};
		        var map = new google.maps.Map(document.getElementById('map'), {
		          zoom: 17,
		          scrollwheel: false,
		          navigationControl: true,
		          draggable: true,
		          center: {lat: 32.6488821, lng: -115.4807395}
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