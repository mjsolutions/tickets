@extends('layouts.main')

@section('title', 'Los Mejorcitos Córdoba Veracruz')

@section('description', 'Los Mejorcitos en Córdoba Veracruz, 29 de Junio, 09:30 pm boletos en Sabina y en bolematico.mx')

@section('styles')
<script src="https://use.fontawesome.com/9b9c9dc667.js"></script>
@endsection

@section('content')

<div class="image-header bg-4 overlay overlay-5">

	<div class="row white-text">
		<h4>Los Mejorcitos</h4>
		<div class="divider"></div>
		<p><i>Córdoba Ver. - Sabina</i></p>
	</div>
	<a href="#compra" class="btn waves-light waves-effect page-scroll"><b>Comprar</b> <i class="fa fa-ticket" aria-hidden="true"></i></a>
</div>

<section class="container">
	<div class="row">
		<div class="col s12">
			<ul class="tabs">
				<li class="tab "><a class="active" href="#descripcion">Descripción</a></li>
				<li class="tab "><a href="#biografia">Biografía</a></li>
				<li class="tab "><a href="#lugares">Boletos</a></li>
			</ul>
		</div>
		<div id="descripcion" class="col s12 tab-content">
			<div class="row">
				<h4 class="mt-0 raleway quote">PRECIOS</h4>
				{{-- <div class="divider"></div> --}}
			</div>

			<div class="col s8 offset-s2 m5 mb-30">
				<img src="{{ asset('img/mejorcitos-banner.jpg') }}" alt="" class="responsive-img">
			</div>
			
			<div class="col s12 m5 offset-m1">				

				<div class="row">

					<div class="qcPricing col s12 center-align mb-10">
						<div class="box col s12">
							<header>
								<div class="col s12 m8 teal accent-4">Zona general</div>
								<div class="col m4 btn-buy nopadding hide-on-small-only"><a href="#compra" class="page-scroll"><b>Comprar</b> <i class="fa fa-ticket" aria-hidden="true"></i></a></div>
							</header>
							<div class="price col s12"><span>$220</span> Por entrada</div>
							{{-- <div class="filas col s6">Filas: A - Ñ</div> --}}
							<div class="col s12 btn-buy nopadding hide-on-med-and-up"><a href="#compra" class="page-scroll"><b>Comprar</b> <i class="fa fa-ticket" aria-hidden="true"></i></a></div>
						</div>
					</div>

				</div>

				<div class="row">
					<div class="divider"></div>
					<p class="center-align mt-30">Al realizar tu compra en línea se realiza un cargo extra por concepto de servicio.</p>
					<p class="center-align"><b>Informes:</b> <a href="tel:2717105159" style="background: #4caf50; color: #fff; padding: 5px 10px;">271 710 5159</a></p>
				</div>
			</div>
		</div>

		<div id="biografia" class="col s12 tab-content">
			<div class="col s8 offset-s2 hide-on-med-and-up">
				<img src="{{ asset('img/mejorcitos-cor.jpg') }}" class="responsive-img">
			</div>
			<div class="col s12 m7">
				<h4 class="mt-0 raleway quote">BIOGRAFÍA</h4>		
				<p>Show de Stand Up, comandado por <b>Tio Rober</b>, <b>Alex Salazar</b> y <b>El Cojo Feliz</b>.</p>
				<p>Roberto Andrade <b>“Tío Rober”</b> es egresado del Centro de Capacitación Cinematográfica de la carrera de Guionismo Cinematográfico.</p>
				<p>Hugo, <b>El cojo feliz</b>, describe su trayectoria de la siguiente manera: <i>"Mi mayor logro en la vida es que sobreviví al cáncer y que una vez me salieron tres tazos en la misma bolsa de doritos.  Soy un comediante de tiempo completo y amo hacer reír de todas las maneras posibles pero mi pasión son los shows en vivo"</i>. Entre sus logros están el ser parte de la Diablo Squad de Franco Escamilla, escritor en "Es de noche y ya llegué", Hector Suarez Roast, entre otros.</p>
				<p>¿Cómo definiría <b>Alex Salazar</b> su propio humor?, "todos manejamos un tipo de humor un tanto observacional, en mi caso es más vivencial, hablo de cosas que me pasan, de mis vivencias. Siento que mi humor no es tan vulgar", comenta y aprovecha para remarcar: "Una de las reglas entre comillas del Stand up es que tu escribas tu material".</p>
				
			</div>
			<div class="col m5 hide-on-small-only">
				<img src="{{ asset('img/mejorcitos-cor.jpg') }}" class="responsive-img">
			</div>
			<div class="clearfix"></div>
			
		</div>

		<div id="lugares" class="col s12 tab-content">
			<div class="row">
				<h4 class="mt-0 raleway quote">LUGARES DE VENTA</h4>
			</div>
			<div class="row">
				<div class="col s12">
					<h5>Sabina Cordoba</h5>
				</div>
				<div class="col s12 m6">									
					<!-- ## VENUE MAP ## -->
					<div class="qcEventlayout">
						<iframe src="https://www.google.com/maps/embed?pb=!1m14!1m8!1m3!1d30198.396044422017!2d-96.92529282584229!3d18.89597370771115!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x0%3A0x2982c742ee38da54!2sSabina+Live+Bar!5e0!3m2!1ses!2smx!4v1528417296067" width="100%" height="320" frameborder="0" style="border:0" allowfullscreen></iframe>
					</div>

				</div>

				<!-- ## ADDRESS LIST ## -->
				<div class="col s12 m6">
					<ul class="qcAddress">
						<li><i class="medium material-icons">location_on</i><p><strong>DIRECCIÓN</strong>: Av 1 410d, Centro, 94500 Córdoba, Ver.</p></li>
						<li><i class="medium material-icons">call</i><p><strong>TELÉFONO</strong>: 01 271 710 5159</p></li>
						<li><i class="medium material-icons">email</i><p><strong>EMAIL</strong>: No disponible</p></li>
						<li><i class="medium material-icons">language</i><p><strong>Website</strong>: <a title="website" href="https://www.facebook.com/sabinalivebar/" target="_blank">https://www.facebook.com/sabinalivebar/</a></p></li>
					</ul>
				</div>
			</div>			

		</div>

	</div>
</section>
<section class="section-video overlay overlay-5" style="background-image: url('https://img.youtube.com/vi/ntVd2rQRC7Q/maxresdefault.jpg');">
	<div class="row center-align">
		<a class="white-text" id="modal-video-open" href="#modal-video" data-video="https://www.youtube.com/embed/ntVd2rQRC7Q"><i class="material-icons">play_circle_filled</i></a>
		<p class="white-text"><i>Alex Salazar “El Chaparro” | @ #StandupEnComedy</i></p>
	</div>
</section>

<section id="compra" class="section-comprar">
	<div class="row">

		<div class="col m4 offset-m4 mt-30">
			@if(Auth()->check())
				{!! Form::open(['route'=>'payment.details', 'method'=>'POST']) !!}
					<div class="row">
						<h5 class="quote">Elija sus boletos</h5>
						<div class="input-field col s12">
							{!! Form::select('asiento', ['1' => '1', '2' => '2', '3' => '3', '4' => '4', '5' => '5', '6' => '6', '7' => '7', '8' => '8', '9' => '9', '10' => '10'], '', ['class' => 'select-dropdown', 'required', 'id' => 'asiento', 'placeholder' => 'Seleccione numero de asientos']) !!}
							{!! Form::label('asiento', 'Asientos') !!}
						</div>

						
						{!! Form::hidden('img', 'img/mejorcitos-cordoba.jpg') !!}
						{!! Form::hidden('evento', 'Los Mejorcitos en Cordoba') !!}
						{!! Form::hidden('fecha', '29 de Junio 2018') !!}
						{!! Form::hidden('lugar', 'Sabina') !!}
						{!! Form::hidden('hora', '09:30 pm') !!}
						{!! Form::hidden('zona', 'N/A') !!}
						{!! Form::hidden('fila', 'N/A') !!}
						{!! Form::hidden('event_type', 'general') !!}
						{!! Form::hidden('db_table', 'mejorcitos_cordoba') !!}
						{!! Form::hidden('info', '2717105159') !!}
						{!! Form::hidden('precio', '220') !!}

						<div class="input-field col s12">
							<p><em>* Puedes seleccionar un máximo de 10 lugares</em></p>
						</div>
						
					</div>

					<div class="row">
					
						<div class="input-field center-align">
							{!! Form::submit('Confirmar',['class'=>'btn waves-effect waves-light  orange accent-3']) !!}
						</div>	
					
					</div>
						
				{!! Form::close() !!}
			@else
				<p class="center-align raleway">Debes iniciar sesion para poder realizar la compra</p>
				<div class="col s6 col-center">
					<a href="#modal-login" class="modal-login-open btn btn-block waves-light orange accent-3">Login</a>
				</div>
			@endif
			
		</div>
		<div class="clearfix"></div>
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
</section>

<section class="section-lugar">
	<div id="map"></div>
	
	<div class="info-lugar">
		<h5 class="raleway quote mb-30">Lugar del evento</h5>
		<div class="divider mb-30"></div>
		<p><b>Sabina</b></p>
		<p><i class="material-icons">location_on</i>Av 1 410d, Centro, 94500 Córdoba, Ver.</p>
		<p><i class="material-icons">call</i> 01 271 710 5159</p>
		<p><i class="material-icons">email</i> No disponible</p>
		
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
	{{-- <script type="text/javascript" src="{{asset('js/jquery.elevatezoom.js')}}"></script> --}}
	<script>
		// $("#zoom_01").elevateZoom({
		// 	scrollZoom : true,
		// 	zoomType: "inner"
		// });
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
		        var uluru = {lat: 18.8959346, lng: -96.9364029};
		        var map = new google.maps.Map(document.getElementById('map'), {
		          zoom: 18,
		          scrollwheel: false,
		          navigationControl: true,
		          draggable: true,
		          center: {lat: 18.8959346, lng: -96.9364029}
		        });
		        var marker = new google.maps.Marker({
		          position: uluru,
		          map: map
		        });
		      }

	</script>

      <script async defer src="https://maps.googleapis.com/maps/api/js?key=AIzaSyBOOT9N6QdDeq0bnmSb1bw2SKw5CXQmOeA&callback=initMap"></script>
@endsection