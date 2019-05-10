@extends('layouts.main')

@section('title', 'Juan Solo')

@section('description', 'Juan Solo, Morelia Mich., 01 de junio, 21:00 hrs boletos en RS Viajes Centro y bolematico.com')

@section('styles')
<meta property="og:url"  content="http://bolematico.mx/eventos/juan-solo-morelia" />
<meta property="og:title" content="Juan Solo" />
<meta property="og:description" content="Juan Solo, Morelia Mich., 01 de junio, 21:00 hrs boletos en RS Viajes Centro y bolematico.com" />
<meta property="og:image" content="http://bolematico.mx/img/juan-solo-morelia.jpg" />

<script src="https://use.fontawesome.com/9b9c9dc667.js"></script>
@endsection

@section('content')

<div class="image-header bg-del-olmo overlay overlay-5">

	<div class="row white-text">
		<h4>Juan Solo</h4>
		<div class="divider"></div>
		<p class="mb-0"><i>Café del Olmo - Morelia, Mich.</i></p>
		<p class="m-0"><i>01 de junio - 21:00 hrs.</i></p>
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
		<div id="precios" class="col s12 tab-content">

			<div class="col s8 offset-s2 m4 offset-m1 mb-30 card-flyer">
				<img src="{{ asset('img/juan-solo-morelia.jpg') }}" alt="" class="responsive-img">
			</div>
			
			<div class="col s12 m5 offset-m1">				

				<div class="row">

					<div class="qcPricing col s12 center-align mb-10">
						<div class="box col s12">
							<header>
								<div class="col s12 teal accent-4">Preventa</div>
							</header>
							<div class="price col s12"><span>$280</span> MXN</div>
						</div>
					</div>

{{-- 					<div class="qcPricing col s12 center-align mb-10">
						<div class="box col s12">
							<header>
								<div class="col s12 blue darken-4">General</div>
							</header>
							<div class="price col s12"><span>$330</span> MXN</div>
						</div>
					</div> --}}

				</div>

				<div class="row">
					<div class="divider"></div>
					<div class="col s10 offset-s1">
						<p>* Al realizar tu compra en línea se realiza un cargo extra de <b>10%</b> por concepto de servicio.</p>
						<p> * Informes y confirmación de tu reservación (una vez realizada tu compra) <br> <a href="tel:4431880358" style="background: #4caf50; color: #fff; padding: 5px 10px;">443-188-0358</a> / <a href="tel:4434369615" style="background: #4caf50; color: #fff; padding: 5px 10px;"> 443-436-9615</a></p>
					</div>
				</div>
			</div>
		</div>

		<div id="detalles" class="col s12 tab-content">
			<div class="col s8 offset-s2 hide-on-med-and-up">
				<img src="{{ asset('img/juan-solo-bio.jpg') }}" class="responsive-img">
			</div>
				
			<div class="col s12 m9">	
				<p><strong>Juan Solo</strong> es un cantante de Puebla (México) famoso por sus canciones románticas y tiernas</p>
				<p>Juan Luis Guerra, Rubén Blades, Poncho Sánchez, Bee Gees, Earth Wind & Fire y demás grupos fueron la semilla que marcó el gusto musical de este mexicano</p>
				<p>Creció amando la música, el baile, el fútbol, el rancho y los amigos, así que a los 18 años decidió comenzar en teatro musical en Puebla, donde actuó y cantó en 2 obras musicales: GODSPELL y FAME. Después de esas participaciones, Juan Solo empezó a cantar en diferentes lugares de la ciudad, tocando de todo: rock, pop, son cubano, salsa, siendo esta última su preferida. Para Juan Solo la carrera de medicina parecía predeterminada en su vida, pero a 2 años de cursar la misma, decidió que era momento de hacer lo que realmente le apasionaba, y fue así que ingresó a la carrera de música. Entra a estudiar Música Clásica por 6 meses. Luego se muda a la Ciudad de México donde estudia la carrera de Producción Musical.</p>
				<p>Juan Solo compuso en esta faceta canciones para películas como "La Leyenda de la Nahuala" que le significó 2 premios Ariel y para "Nikté" donde las canciones que hizo fueron interpretadas por Sherlyn.</p>
				<p>Paralelamente Juan Solo comenzó a buscar escenarios donde mostrarse, pero es en el DF mientras daba un show en la discoteque “La Casona” conoce a Rafa Rodríguez quien le ayudaría a dar un vuelco en su carrera.</p>

			</div>
			<div class="col s3 hide-on-small-only">
				<img src="{{ asset('img/juan-solo-bio.jpg') }}" class="responsive-img">
			</div>
			<div class="clearfix"></div>
			<p>Fuente: <small>www.buenamusica.com/juan-solo/biografia</small></p>	
			
		</div>

		<div id="lugares" class="col s12 tab-content">
			<div class="col s12">
				<h5 class="mb-30 quote">Además de Bolematico, puedes adquirir tus entradas en:</h5>
			</div>

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
<section class="section-video overlay overlay-5" style="background-image: url('https://img.youtube.com/vi/kh_EFl_-1oI/maxresdefault.jpg');">
	<div class="row center-align">
		<a class="white-text" id="modal-video-open" href="#modal-video" data-video="https://www.youtube.com/embed/kh_EFl_-1oI"><i class="material-icons">play_circle_filled</i></a>
		<p class="white-text"><i>Juan Solo - Ámame</i></p>
	</div>
</section>

<section id="compra" class="section-comprar">
	<div class="row mb-30">
		<div class="col s12 m4 offset-m4">
			<h5 class="mt-30 raleway quote">¡Aparta tus lugares!</h5>
		</div>
	</div>

	<div class="row mb-30">
		@if(Auth()->check())
		<div class="col s12 m4 offset-m4">
				
			{!! Form::open(['route' => 'payment.details', 'method' => 'POST', 'id' => 'paymentForm'])!!}
		
			<div class="row">
				<div class="input-field col s12">
					{!! Form::select('asiento', ['1' => '1', '2' => '2', '3' => '3', '4' => '4', '5' => '5', '6' => '6', '7' => '7', '8' => '8', '9' => '9', '10' => '10'], '', ['class' => 'select-dropdown', 'id' => 'asiento', 'placeholder' => 'Seleccione numero de asientos', 'required']) !!}
					{!! Form::label('asiento', 'Asientos') !!}
				</div>					
			
			</div>
		
			{!! Form::hidden('img', 'img/juan-solo-morelia.jpg') !!}
			{!! Form::hidden('evento', 'Juan Solo') !!}
			{!! Form::hidden('fecha', '01 de junio 2019') !!}
			{!! Form::hidden('lugar', 'Café del Olmo') !!}
			{!! Form::hidden('ciudad', 'Morelia, Mich.') !!}
			{!! Form::hidden('hora', '21:00 hrs') !!}
			{!! Form::hidden('event_type', 'general') !!}
			{!! Form::hidden('impresion_boleto', true) !!}
			{!! Form::hidden('zona', 'Preventa') !!}
			{!! Form::hidden('db_table', 'juan_solo_morelia_01jun') !!}
			{!! Form::hidden('info', 'Favor de comunicarte al numero 4431880358 o 4434369615 para completar tu reservación.') !!}
			{!! Form::hidden('precio', '280') !!}
			{!! Form::hidden('url', url('eventos/juan-solo-morelia')) !!}
			
			<div class="input-field center-align">
				{!! Form::submit('Siguiente',['class'=>'btn waves-effect waves-light orange accent-3']) !!}
			</div>	
			
			{!! Form::close() !!}
			
		</div>
		<div class="clearfix"></div>
		@else
		<p class="center-align raleway">Debes iniciar sesión para poder realizar la compra</p>
		<div class="col s12 m4 offset-m4 center-align">
			<a href="#modal-login" class="modal-login-open btn waves-light orange accent-3">Login</a>
		</div>
		@endif
		<div class="col s12 m4 offset-m4 mt-30">
			<p>
				<i>* Puedes seleccionar un máximo de 10 lugares.</i><br>
				<i>* Se cobrara un cargo adicional por concepto de servicio.</i>
			</p>
		</div>
	</div>

	
	<div class="row">
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
		<p><b>Café del Olmo</b></p>
		<p><i class="material-icons">location_on</i> Benito Juárez 95, Centro Histórico, 58000 Morelia, Mich.</p>
		<p><i class="material-icons">language</i>https://www.facebook.com/cafedelolmooficial</p>
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
		        var uluru = {lat: 19.7037127, lng: -101.1923985};
		        var map = new google.maps.Map(document.getElementById('map'), {
		          zoom: 17,
		          scrollwheel: false,
		          navigationControl: true,
		          draggable: true,
		          center: {lat: 19.7037127, lng: -101.1916985}
		        });
		        var marker = new google.maps.Marker({
		          position: uluru,
		          map: map
		        });
		      }

	</script>

    <script async defer src="https://maps.googleapis.com/maps/api/js?key=AIzaSyBOOT9N6QdDeq0bnmSb1bw2SKw5CXQmOeA&callback=initMap"></script>
@endsection