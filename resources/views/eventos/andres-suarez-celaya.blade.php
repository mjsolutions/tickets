@extends('layouts.main')

@section('title', 'Andrés Suárez')

@section('description', 'Andrés Suárez, Celaya Gto., 31 de mayo, 21:00 hrs boletos en bolematico.com')

@section('styles')
<meta property="og:url"  content="http://bolematico.mx/eventos/andres-suarez-celaya" />
<meta property="og:title" content="Andrés Suárez" />
<meta property="og:description" content="Andrés Suárez, Celaya Gto., 31 de mayo, 21:00 hrs boletos en bolematico.com" />
<meta property="og:image" content="http://bolematico.mx/img/andres-suarez-celaya.jpg" />

<script src="https://use.fontawesome.com/9b9c9dc667.js"></script>
<link rel="stylesheet" type="text/css" href="{{ asset('css/event-select-manual.css') }}">
@endsection

@section('content')

<div class="image-header bg-4 overlay overlay-5">

	<div class="row white-text">
		<h4>Andrés Suárez</h4>
		<div class="divider"></div>
		<p class="mb-0"><i>Hotel Hyatt Place - Celaya, Gto.</i></p>
		<p class="m-0"><i>31 de mayo - 21:00 hrs.</i></p>
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
				<img src="{{ asset('img/andres-suarez-celaya.jpg') }}" alt="" class="responsive-img">
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
							<div class="price col s12"><span>$450</span> MXN</div>
						</div>
					</div>

				</div>

				<div class="row">
					<div class="divider"></div>
					<div class="col s10 offset-s1">
						<p>* Al realizar tu compra en línea se realiza un cargo extra de <b>10%</b> por concepto de servicio.</p>
						{{-- <p> * Una vez completada tu compra es importante que te comuniques a los telefonos: <br> <a href="tel:4431880358" style="background: #4caf50; color: #fff; padding: 5px 10px;">443-188-0358</a> / <a href="tel:4432274979" style="background: #4caf50; color: #fff; padding: 5px 10px;"> 443-227-4979</a> para confirmar tu reservación.</p> --}}
					</div>
				</div>
			</div>
		</div>

		<div id="detalles" class="col s12 tab-content">
			<div class="col s8 offset-s2 hide-on-med-and-up">
				<img src="{{ asset('img/andres-suarez-bio.jpg') }}" class="responsive-img">
			</div>
				
			<div class="col s12 m9">	
				<p>La historia de <strong>Andrés Suárez</strong> es un ejemplo de hasta dónde puede llevar la combinación de constancia y talento. Le puede llevar, por ejemplo, de los pasillos del Metro al Wizink Center de Madrid, dos referencias que marcan el punto de partida y de llegada de un cantautor que llegó a la capital como un músico callejero y que hoy es uno de los artistas más queridos por el público, que agota las localidades de sus conciertos ya sea en un teatro o en el antiguo Palacio de los Deportes de la capital, según opte por su lado íntimo o por su vertiente de gran banda de rock.</p>
				<p>Aquella primera vez que Andrés tocó su guitarra en el Metro, hace ya una década, la recaudación no le alcanzó para sufragar el billete. Pero este gallego de Ferrol no es de los que se arrugan fácilmente, y de la calle pasó a las terrazas de La Latina, de ahí a bares con encanto como el mítico Libertad 8 y, en un abrir y cerrar de ojos, ya estaba llenando a reventar el Palacio Vistalegre en un concierto histórico.</p>
				<p>Los resultados de todo lo que le ocurrió después están a la vista. Las presentaciones que ha tenido que ofrecer en Madrid, un lleno detrás de otro en teatros que abarrota como lo hizo en el Wizink Center. En momentos así, Andrés no puede evitar que le venga a la memoria la primera vez que tocó la guitarra en el Metro. Mente en ebullición, repleto de pasión interior, amante de la vida y preocupado por sus fans y por darles lo mejor de sí mismo en cada momento; así es Andrés Suárez, un artista apasionado.</p>

			</div>
			<div class="col s3 hide-on-small-only">
				<img src="{{ asset('img/andres-suarez-bio.jpg') }}" class="responsive-img">
			</div>
			<div class="clearfix"></div>
			<p>Fuente: <small>www.andressuarez.es</small></p>	
			
		</div>

		<div id="lugares" class="col s12 tab-content">

			<div class="col s12">									
				<!-- ## VENUE MAP ## -->
				<div class="white z-depth-2">
					<iframe src="https://www.google.com/maps/embed?pb=!1m14!1m8!1m3!1d14945.733664339117!2d-100.7796015!3d20.5294401!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x0%3A0x3edd1d74c4435f35!2sHyatt+Place+Celaya!5e0!3m2!1ses!2smx!4v1553350637074" width="100%" height="450" frameborder="0" style="border:0" allowfullscreen></iframe>
				
				<!-- ## ADDRESS LIST ## -->
					<div class=" p-30">
						<h5><b>Hyatt Place Celaya</b></h5>
						<ul class="qcAddress">
							<li><div class="divider"></div></li>
							<li><i class="fa fa-map-marker"></i> <strong>DIRECCIÓN</strong>: <p>Av. La Cano #124, Santa Rosalía, Celaya, Gto.</p></li>
							<li><i class="fa fa-phone"></i> <strong>TELÉFONO</strong>: <p> 01 461 159 1234</p></li>
							<li><i class="fa fa-globe"></i> <strong>Website</strong>: <p><a title="website" href="https://www.hyatt.com/es-ES/hotel/mexico/hyatt-place-celaya/qrozc" target="_blank">www.hyatt.com/es-ES/hotel/mexico/hyatt-place-celaya/qrozc</a></p></li>
						</ul>
					</div>
				</div>

			</div>

		</div>

	</div>
</section>
<section class="section-video overlay overlay-5" style="background-image: url('https://img.youtube.com/vi/GuE8JgULP5s/maxresdefault.jpg');">
	<div class="row center-align">
		<a class="white-text" id="modal-video-open" href="#modal-video" data-video="https://www.youtube.com/embed/GuE8JgULP5s"><i class="material-icons">play_circle_filled</i></a>
		<p class="white-text"><i>Andrés Suárez - No Saben de Ti</i></p>
	</div>
</section>

<section id="compra" class="row section-comprar">
	<div class="col s12 mt-30">
	@if(Auth()->check())
		<div class="col s12 mb-15">
			<h5 class="mt-30 raleway quote">Da clic en el bloque que deseas para mostrar los asientos disponibles</h5>
		</div>
		<div class="col s12 m5 white div-border">
			@include('maps.hyatt-place')
		</div>
		<div class="col s12 m7">
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
					{!! Form::hidden('img', 'img/andres-suarez-celaya.jpg') !!}
					{!! Form::hidden('evento', 'Andrés Suárez') !!}
					{!! Form::hidden('fecha', '31 de mayo 2019') !!}
					{!! Form::hidden('lugar', 'Hotel Hyatt Place') !!}
					{!! Form::hidden('ciudad', 'Celaya') !!}
					{!! Form::hidden('hora', '21:00 hrs') !!}
					{!! Form::hidden('event_type', 'numerado') !!}
					{!! Form::hidden('impresion_boleto', true) !!}
					{!! Form::hidden('db_table', 'andres_suarez_celaya_31may') !!}
					{!! Form::hidden('info', '--') !!}
					{!! Form::hidden('select_type', 'manual') !!}
					{!! Form::hidden('url', url('eventos/andres-suarez-celaya')) !!}
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
			{{-- <h5 class="center-align raleway">Venta de boletos también en </h5> --}}
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
		<p><b>Hyatt Place Celaya</b></p>
		<p><i class="material-icons">location_on</i> Av. La Cano #124, Santa Rosalía, Celaya, Gto.</p>
		<p><i class="material-icons">language</i> https://www.hyatt.com/es-ES/hotel/mexico/hyatt-place-celaya/qrozc</p>
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
		var table = 'andres_suarez_celaya_31may';
		var base_path = '{{ url('/') }}';
		var precios = {'Diamante': 650, 'Oro': 450};
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
		function initMap() {
		        var uluru = {lat: 20.5294401, lng: -100.7796015};
		        var map = new google.maps.Map(document.getElementById('map'), {
		          zoom: 17,
		          scrollwheel: false,
		          navigationControl: true,
		          draggable: true,
		          center: {lat: 20.5294401, lng: -100.7796015}
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