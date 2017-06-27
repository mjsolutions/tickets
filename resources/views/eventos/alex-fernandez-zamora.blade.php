@extends('layouts.main')

@section('title', 'Alex Fernandez en Zamora')

@section('description', 'Alex Fernandez en Zamora, Diablos Wings 29 de Junio, 9:30 pm.')

@section('content')

<div class="image-header bg-4 overlay overlay-5">

	<div class="row white-text">
		<h4>Alex Fernandez</h4>
		<div class="divider"></div>
		<p><i>Zamora - Diablos Wings</i></p>
	</div>
	{{-- <button class="btn waves-light waves-effect red">COMPRAR BOLETOS</button> --}}
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
			<div class="col s8 mb-30">
				<img src="{{ asset('img/alex-banner-zamora.jpeg') }}" alt="" class="responsive-img">
			</div>
			
			<div class="col s12 m4">

				<div class="row">
					<div class="qcPricing col s12 center-align mb-10">
						<h4 class="mt-0 raleway quote left-align">PRECIOS</h4>
						<div class="box col s12">
							<header>
								<div class="col s12 m12 teal accent-4">General</div>
							</header>
							<div class="price col s12"><span>$160</span> Por entrada</div>
						</div>
					</div>

				</div>

				<div class="row">
					<div class="divider"></div>
					<p class="center-align mt-30">Venta de boletos en Diablos Wings</p>
				</div>
			</div>
		</div>

		<div id="biografia" class="col s12 tab-content">
			<div class="col s8 offset-s2 hide-on-med-and-up">
				<img src="{{ asset('img/alex-bio.jpg') }}" class="responsive-img">
			</div>
				
			<div class="col s12 m9">
				<h4 class="mt-0 raleway quote">BIOGRAFÍA</h4>		
				<p>Alex Fernández cree firmemente que todos tienen derecho a reír. Hace stand-up, escribe y en sus ratos libres piensa que sería maravilloso adoptar un niño albino, pero después se da cuenta que al niño lo van a molestar mucho en la escuela y entonces decide ya no adoptarlo. No cree en la fama, pero si llega, está dispuesto a negociar con ella.</p>
				<p>Es una de las estrellas Mexicanas de Comedy Central, la mecca de los comediantes y es todo un experto en el arte de llevar sus propias experiencias a otros enfoques, logrando así la total identificación con el público. Pero sobretodo manteniendo la línea del respeto y de no caer en lo vulgar. Sin embargo, Alex Fernández sabe que en este medio se necesita de disciplina, constancia y perseverancia, pero sobretodo, el tomar cada experiencia como un aprendizaje para tener crecimiento tanto personal como profesional, lo cual aprendió desde sus primeros shows donde paso por altas y bajas.</p>
				<p>Fuente:</p>
				<p><small>http://standupia.com/index.php/standuperos/item/51-alexfernandez <br>https://www.smartspeakers.mx/comicos-y-stand-up/alex-fernandez.html</small></p>
			</div>
			<div class="col s3 hide-on-small-only">
				<img src="{{ asset('img/alex-bio.jpg') }}" class="responsive-img">
			</div>
		</div>

		<div id="lugares" class="col s12 tab-content">
			<div class="row">
				<h4 class="mt-0 raleway quote">LUGARES DE VENTA</h4>
			</div>
			<div class="row">
				<div class="col s12">
					<h5>Diablos Wings</h5>
				</div>
				<div class="col s12 m6">									
					<!-- ## VENUE MAP ## -->
					<div class="qcEventlayout">
						<iframe src="https://www.google.com/maps/embed?pb=!1m14!1m8!1m3!1d14998.649612371011!2d-102.290882!3d19.980695!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x0%3A0x6dad7dee7bbb895e!2sDiablo+Wings!5e0!3m2!1ses!2smx!4v1498577976677" width="100%" height="320" frameborder="0" style="border:0" allowfullscreen></iframe>
					</div>

				</div>

				<!-- ## ADDRESS LIST ## -->
				<div class="col s12 m6">
					<ul class="qcAddress">
						<li><i class="medium material-icons">location_on</i><p><strong>DIRECCIÓN</strong>: Martínez de Navarrete 20, Col. Nueva Luneta, Centro, 59675 Zamora, Mich.</p></li>
						<li><i class="medium material-icons">schedule</i><p><strong>HORARIO</strong>: Todos los días de 2 pm a 1 am</p></li>
						<li><i class="medium material-icons">call</i><p><strong>TELÉFONO</strong>: 01 351 136 2432</p></li>
						<li><i class="medium material-icons">language</i><p><strong>Website</strong>: <a title="website" href="https://www.facebook.com/diablohotwings/" target="_blank">https://www.facebook.com/diablohotwings/</a></p></li>
					</ul>
				</div>
			</div>

		</div>

	</div>
</section>
<section class="section-video overlay overlay-5" style="background-image: url('https://img.youtube.com/vi/HH6E_Z2YDWI/maxresdefault.jpg');">
	<div class="row center-align">
		<a class="white-text" id="modal-video-open" href="#modal-video" data-video="https://www.youtube.com/embed/HH6E_Z2YDWI"><i class="material-icons">play_circle_filled</i></a>
		<p class="white-text"><i>Alex Fernández @ #StandUpEnComedy</i></p>
	</div>
</section>

<section class="section-comprar">
	<h5 class="mt-50 center-align raleway">Venta de boletos en Diablos Wings</h5>
	<div class="row">
		<div class="col s6 offset-s3 mt-30">
			<div class="divider"></div>
		</div>
	</div>
	<p class="center-align">Si tienes alguna duda sobre este evento no dudes en contactarnos</p>
	<div class="row center-align">
		<a href="{{ route('contacto') }}" class="btn waves-light waves-effect green center-align ls-1">CONTACTO</a>
	</div>
</section>

<section class="section-lugar">
	<div id="map"></div>
	
	<div class="info-lugar">
		<h5 class="raleway quote mb-15">Lugar del evento</h5>
		<div class="divider mb-15"></div>
		<p><b>Diablos Wings</b></p>
		<p><i class="material-icons">location_on</i> Martínez de Navarrete 20, Col. Nueva Luneta, Centro, 59675 Zamora, Mich.</p>
		<p><i class="material-icons">call</i> 01 351 136 2432</p>
		<p><i class="material-icons">language</i> <a title="website" href="https://www.facebook.com/diablohotwings/" target="_blank">fb/diablohoteings</a></p>
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
		        var uluru = {lat: 19.980695, lng: -102.290882};
		        var map = new google.maps.Map(document.getElementById('map'), {
		          zoom: 18,
		          scrollwheel: false,
		          navigationControl: true,
		          draggable: true,
		          center: {lat: 19.980695, lng: -102.290282}
		        });
		        var marker = new google.maps.Marker({
		          position: uluru,
		          map: map
		        });
		      }
	</script>

      <script async defer src="https://maps.googleapis.com/maps/api/js?key=AIzaSyBOOT9N6QdDeq0bnmSb1bw2SKw5CXQmOeA&callback=initMap"></script>
@endsection