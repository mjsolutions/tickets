@extends('layouts.main')

@section('title', 'Paté de Fua Aguascalientes')

@section('description', 'Paté de Fua en Aguascalientes, 16 de noviembre, 9:00 pm boletos en bolematico.mx y Patio Outdoor Disco Aguascalientes')

@section('styles')

<!-- Metas Facebook -->
<meta property="og:url"  content="http://bolematico.mx/eventos/pate-de-fua-aguascalientes" />
<meta property="og:title" content="Paté de Fua en Aguascalientes" />
<meta property="og:description" content="Regresa Paté de Fua en Aguascalientes, 16 de noviembre, 9:00 pm, Patio Outdoor Disco" />
<meta property="og:image" content="http://bolematico.mx/img/pate-de-fua-ags.jpg" />

<script src="https://use.fontawesome.com/9b9c9dc667.js"></script>
@endsection

@section('content')

<div class="image-header bg-4 overlay overlay-5">

	<div class="row white-text">
		<h4>Paté de fua</h4>
		<div class="divider"></div>
		<p><i>Aguascalientes - Outdoor Disco 16 de noviembre, 21 hrs.</i></p>
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
			<div class="col s12 mb-30">
				<h4 class="mt-0 raleway quote">PRECIOS</h4>
				{{-- <div class="divider"></div> --}}
			</div>

			<div class="col s8 offset-s2 m4 offset-m1 mb-30">
				<img src="{{ asset('img/pate-ags.jpg') }}" alt="" class="responsive-img">
			</div>
			
			<div class="col s12 m5 offset-m1">				

				<div class="row">

					<div class="qcPricing col s12 center-align mb-10">
						<div class="box col s12">
							<header>
								<div class="col s12 m8 teal accent-4">General</div>
								<div class="col m4 btn-buy nopadding hide-on-small-only"><a href="#compra" class="page-scroll"><b>Comprar</b> <i class="fa fa-ticket" aria-hidden="true"></i></a></div>
							</header>
							<div class="price col s12"><span>$450</span> Por entrada</div>
							<div class="col s12 btn-buy nopadding hide-on-med-and-up"><a href="#compra" class="page-scroll"><b>Comprar</b> <i class="fa fa-ticket" aria-hidden="true"></i></a></div>
						</div>
					</div>

				</div>

				<div class="row">
					<div class="divider"></div>
					<p class="center-align mt-30">Al realizar tu compra en línea se realiza un cargo extra por concepto de servicio.</p>
					<p class="center-align"><b>Informes:</b> <a href="tel:4491285028" style="background: #4caf50; color: #fff; padding: 5px 10px;"> 449 128 5028</a></p>
				</div>
			</div>
		</div>

		<div id="biografia" class="col s12 tab-content">
			<div class="col s12 mb-30">
				<h4 class="mt-0 raleway quote">BIOGRAFÍA</h4>
			</div>
			<div class="col s8 offset-s2 hide-on-med-and-up">
				<img src="{{ asset('img/pate-de-fua-bio.jpg') }}" class="responsive-img">
			</div>
			<div class="col s12 m9">
				<p>Con aires renovadores y de madurez musical, la agrupación mexico-argentina Paté de Fuá reúne ritmos que van del jazz al bolero, el norteño y el tango en su más reciente disco "Película muda, Primera parte".</p>
				<p>Con más de ocho años de trayectoria, la banda integrada por Yayo González (guitarra y voz principal), Guillermo Perata (banjo, trompeta), Jorge “Luri” Molina (contrabajo, coros), Víctor Madariaga (acordeón y bandoneón), Alexis Ruiz (vibráfono), Dan Mazor (saxofón y Clarinete) y Demián Cantilo (batería), aseguró que este nuevo álbum es el mejor hasta el momento en su carrera.</p>
				<p>“Película muda” incluye un total de 15 canciones, entre las que se encuentran “Nubes de Ubeda”, “El extranjero”, “Te conozco mascarita”, “Lista negra”, “Tienda de abarrotes”, “Mi corazón”, “Princesita” y “Vamos a morir”, entre otros.</p>
			</div>
			<div class="col m3 hide-on-small-only">
				<img src="{{ asset('img/pate-de-fua-bio.jpg') }}" class="responsive-img">
			</div>
			
		</div>

		<div id="lugares" class="col s12 tab-content">
			<div class="col s12 mb-30">
				<h4 class="mt-0 raleway quote">LUGARES DE VENTA</h4>
			</div>
			<div class="col s12">

				<div class="col s12">									
					<!-- ## VENUE MAP ## -->
					<div class="white z-depth-2">
						<iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d1851.207279768507!2d-102.301346743878!3d21.88010645450911!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x8429ee7d609b1599%3A0xbb0db6234e8cda18!2sVenustiano+Carranza+208%2C+Zona+Centro%2C+20000+Aguascalientes%2C+Ags.!5e0!3m2!1ses!2smx!4v1540677753425" width="100%" height="450" frameborder="0" style="border:0" allowfullscreen></iframe>
					
					<!-- ## ADDRESS LIST ## -->
						<div class=" p-30">
							<h5><b>Patio Outdoor Disco</b></h5>
							<ul class="qcAddress">
								<li><div class="divider"></div></li>
								<li><i class="fa fa-map-marker"></i> <strong>DIRECCIÓN</strong>: <p>Carranza #208, Centro Historico, Aguascalientes.</p></li>
								<li><i class="fa fa-phone"></i> <strong>TELÉFONO</strong>: <p> --</p></li>
								<li><i class="fa fa-calendar"></i> <strong>HORARIO</strong>: <p>--</p></li>
								<li><i class="fa fa-globe"></i> <strong>Website</strong>: <p><a title="website" href="https://www.facebook.com/VmasionSociale/" target="_blank">https://www.facebook.com/VmasionSociale/</a></p></li>
							</ul>
						</div>
					</div>

				</div>
				
			</div>
	

		</div>

	</div>
</section>
<section class="section-video overlay overlay-5" style="background-image: url('https://img.youtube.com/vi/Q7XKU8HQKmc/maxresdefault.jpg');">
	<div class="row center-align">
		<a class="white-text" id="modal-video-open" href="#modal-video" data-video="https://www.youtube.com/embed/Q7XKU8HQKmc"><i class="material-icons">play_circle_filled</i></a>
		<p class="white-text"><i>Paté De Fuá - Película Muda</i></p>
	</div>
</section>

<section id="compra" class="section-comprar">
	
	<div class="row mb-30">
		<div class="col s12 m4 offset-m4">
			<h5 class="mt-30 raleway quote">Selecciona los lugares para tu evento.</h5>
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
		
			{!! Form::hidden('img', 'img/pate-de-fua-ags.jpg') !!}
			{!! Form::hidden('evento', 'Paté de Fua Aguscalientes') !!}
			{!! Form::hidden('fecha', '16 de noviembre 2018') !!}
			{!! Form::hidden('lugar', 'Patio Outdoor Disco') !!}
			{!! Form::hidden('ciudad', 'Aguscalientes') !!}
			{!! Form::hidden('hora', '21:00 hrs') !!}
			{!! Form::hidden('event_type', 'general') !!}
			{!! Form::hidden('db_table', 'pate_de_fua_ags_16nov') !!}
			{!! Form::hidden('info', 'Favor de comunicarte al numero 449 128 5028 para reservar tu lugar.') !!}
			{!! Form::hidden('precio', '450') !!}
			{!! Form::hidden('url', url('eventos/pate-de-fua-aguascalientes')) !!}
			
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
		<p><b>Patio Outdoor Disco</b></p>
		<p><i class="material-icons">location_on</i>Carranza #208, Centro Historico, Aguascalientes</p>
		<p><i class="material-icons">call</i> --</p>
		<p><i class="material-icons">email</i> --</p>
		<p><i class="material-icons">language</i> <a title="website" href="https://www.facebook.com/VmasionSociale/" target="_blank">https://www.facebook.com/VmasionSociale/</a></p>
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
		        var uluru = {lat: 21.8801065, lng: -102.3003567};
		        var map = new google.maps.Map(document.getElementById('map'), {
		          zoom: 18,
		          scrollwheel: false,
		          navigationControl: true,
		          draggable: true,
		          center: {lat: 21.8801065, lng: -102.3003567}
		        });
		        var marker = new google.maps.Marker({
		          position: uluru,
		          map: map
		        });
		      }

	</script>

      <script async defer src="https://maps.googleapis.com/maps/api/js?key=AIzaSyBOOT9N6QdDeq0bnmSb1bw2SKw5CXQmOeA&callback=initMap"></script>
@endsection