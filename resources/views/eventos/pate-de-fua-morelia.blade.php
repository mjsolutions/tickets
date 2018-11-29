@extends('layouts.main')

@section('title', 'Paté de Fua Morelia')

@section('description', 'Paté de Fua en Morelia, 22 de noviembre, 19:30 hrs boletos en bolematico.mx')

@section('styles')

<!-- Metas Facebook -->
<meta property="og:url"  content="http://bolematico.mx/eventos/pate-de-fua-morelia" />
<meta property="og:title" content="Paté de Fua en Morelia" />
<meta property="og:description" content="Paté de Fua en Morelia, 22 de noviembre, 19:30 hrs, Anden Food Unit" />
<meta property="og:image" content="http://bolematico.mx/img/pate-morelia.jpg" />

<script src="https://use.fontawesome.com/9b9c9dc667.js"></script>
@endsection

@section('content')

<div class="image-header bg-4 overlay overlay-5">

	<div class="row white-text">
		<h4>Paté de fua</h4>
		<div class="divider"></div>
		<p><i>Morelia - Anden Food Unit 22 de noviembre, 19:30 hrs.</i></p>
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
				<img src="{{ asset('img/pate-morelia.jpg') }}" alt="" class="responsive-img">
			</div>
			
			<div class="col s12 m5 offset-m1">				

				<div class="row">

					<div class="qcPricing col s12 center-align mb-10">
						<div class="box col s12">
							<header>
								<div class="col s12 m8 teal accent-4">General</div>
								<div class="col m4 btn-buy nopadding hide-on-small-only"><a href="#compra" class="page-scroll"><b>Comprar</b> <i class="fa fa-ticket" aria-hidden="true"></i></a></div>
							</header>
							<div class="price col s12"><span>$420</span> Por entrada</div>
							<div class="col s12 btn-buy nopadding hide-on-med-and-up"><a href="#compra" class="page-scroll"><b>Comprar</b> <i class="fa fa-ticket" aria-hidden="true"></i></a></div>
						</div>
					</div>

				</div>

				<div class="row">
					<div class="divider"></div>
					<p class="center-align mt-30">Al realizar tu compra en línea se realiza un cargo extra por concepto de servicio.</p>
					{{-- <p class="center-align"><b>Informes:</b> <a href="tel:4422184200" style="background: #4caf50; color: #fff; padding: 5px 10px;"> 442 218 4200</a></p> --}}
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
						<iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d120211.6619702815!2d-101.25805704708628!3d19.686448121413147!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x842d0ddc39c82a4b%3A0xc3f0eba6b883e1c1!2sAnd%C3%A9n+Food+Units!5e0!3m2!1ses!2smx!4v1516875471275" width="100%" height="450" frameborder="0" style="border:0" allowfullscreen></iframe>
					
					<!-- ## ADDRESS LIST ## -->
						<div class=" p-30">
							<h5><b>Anden Food Units</b></h5>
							<ul class="qcAddress">
								<li><div class="divider"></div></li>
								<li><i class="fa fa-map-marker"></i> <strong>DIRECCIÓN</strong>: <p>Vicente Sta. María #1679, Felix Ireta Morelia.</p></li>
								<li><i class="fa fa-phone"></i> <strong>TELÉFONO</strong>: <p> 443 315 9243</p></li>
								<li><i class="fa fa-calendar"></i> <strong>HORARIO</strong>: <p>--</p></li>
								<li><i class="fa fa-globe"></i> <strong>Website</strong>: <p><a title="website" href="https://www.facebook.com/AndenMorelia/" target="_blank">https://www.facebook.com/AndenMorelia/</a></p></li>
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
		
			{!! Form::hidden('img', 'img/pate-morelia.jpg') !!}
			{!! Form::hidden('evento', 'Paté de Fua') !!}
			{!! Form::hidden('fecha', '22 de noviembre 2018') !!}
			{!! Form::hidden('lugar', 'Anden Food Units') !!}
			{!! Form::hidden('ciudad', 'Morelia') !!}
			{!! Form::hidden('hora', '19:30 hrs') !!}
			{!! Form::hidden('event_type', 'general') !!}
			{!! Form::hidden('zona', 'Fase III') !!}
			{!! Form::hidden('db_table', 'pate_de_fua_morelia_22nov') !!}
			{!! Form::hidden('info', 'Favor de comunicarte al numero 452 174 1255 para reservar tu lugar.') !!}
			{!! Form::hidden('precio', '420') !!}
			{!! Form::hidden('url', url('eventos/pate-de-fua-morelia')) !!}
			
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
		<p><b>Anden Food Units</b></p>
		<p><i class="material-icons">location_on</i>Vicente Sta. María #1679, Felix Ireta Morelia.</p>
		<p><i class="material-icons">call</i> 443 315 9243</p>
		<p><i class="material-icons">email</i> --</p>
		<p><i class="material-icons">language</i> <a title="website" href="https://www.facebook.com/AndenMorelia/" target="_blank">https://www.facebook.com/AndenMorelia/</a></p>
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
		        var uluru = {lat: 19.686459, lng: -101.188016};
		        var map = new google.maps.Map(document.getElementById('map'), {
		          zoom: 16,
		          scrollwheel: false,
		          navigationControl: true,
		          draggable: true,
		          center: {lat: 19.686459, lng: -101.187016}
		        });
		        var marker = new google.maps.Marker({
		          position: uluru,
		          map: map
		        });
		      }

	</script>

      <script async defer src="https://maps.googleapis.com/maps/api/js?key=AIzaSyBOOT9N6QdDeq0bnmSb1bw2SKw5CXQmOeA&callback=initMap"></script>
@endsection