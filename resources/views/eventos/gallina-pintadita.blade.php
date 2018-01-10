@extends('layouts.main')

@section('title', 'Gallina Pintadita en Morelia')

@section('description', 'Gallina Pintadita en Morelia, Auditorio DIMO 10 de Diciembre, 1:30 pm y 5:00 pm.')

@section('content')

<div class="image-header bg-4 overlay overlay-5">

	<div class="row white-text">
		<h4>Gallina Pintadita</h4>
		<div class="divider"></div>
		<p><i>Aguascalientes - Auditorio DIMO</i></p>
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
			<div class="col s10 offset-s1 m4 mb-30">
				<img src="{{ asset('img/gallina-pintadita.jpg') }}" alt="" class="responsive-img">
			</div>
			
			<div class="col s12 m8">

				<div class="row">
					<div class="qcPricing col s12 center-align mb-10">
						<h4 class="mt-0 raleway quote left-align">PRECIOS</h4>
						<div class="box col s12">
							<header>
								<div class="col s12 m12 teal accent-4">VIP</div>
							</header>
							<div class="price col s12"><span>$260</span> Por entrada</div>
						</div>
						<div class="box col s12">
							<header>
								<div class="col s12 m12 purple lighten-1">Preferente</div>
							</header>
							<div class="price col s12"><span>$210</span> Por entrada</div>
						</div>
						{{-- <div class="divider"></div>
						<p class="center-align mt-30">Mayores informes en Cocktail Live Altozano</p> --}}
					</div>

				</div>

				<div class="row">
					<div class="divider"></div>
					<p class="center-align mt-30">Venta de boletos en Taquillas del Palenque de la Feria.</p>
				</div>
			</div>
		</div>

		<div id="biografia" class="col s12 tab-content">
			<div class="col s8 offset-s2 hide-on-med-and-up">
				<img src="{{ asset('img/gallina-pintadita-bio.jpg') }}" class="responsive-img">
			</div>
				
			<div class="col m12">
				<h4 class="mt-0 raleway quote">BIOGRAFÍA</h4>		
				<img src="{{ asset('img/gallina-pintadita-bio.jpg') }}" class="responsive-img hide-on-small-only" style="float: left; margin-right: 30px;">
				<p>El día 28 de diciembre de 2006, Juliano Prado y Marcos Luporini inocentemente subieron al Youtube desde Brasil un vídeo infantil llamado “Galinha Pintadinha”. Esta fue la solución encontrada para presentar el vídeo en una reunión de productores, a la cual ellos no podrían asistir personalmente.</p><p>Los productores no se interesaron por el proyecto y el vídeo quedó allá olvidado. Seis meses  después, la sorpresa: el vídeo se había convertido en un hit y ya sobrepasaba las 500.000 reproducciones, número muy expresivo para la época.</p><p>Con fe en el proyecto y muy animados por el suceso del vídeo, en 2008, ambos metieron las  manos en los bolsillos y finalizaron el proyecto, envolviendo artistas, familiares, amigos y todos aquellos que pudiesen ayudar. Fundaron la Bromelia Producciones y lanzaron el primer DVD de forma independiente a través de una modesta tienda virtual.</p>
				<p>El éxito del DVD fue inmediato y el canal “Galinha Pintadinha” en el Youtube pasó a ser el más visto del país, abriendo el camino para que el proyecto buscase vuelos más altos. Hoy, la “Galinha Pintadinha” es una verdadera fiebre, con productos, presentaciones en vivo, aplicativos para celulares y más de 800 millones de reproducciones en el Youtube.</p>
				<p>Fuente:</p>
				<p><small>http://www.gallinapintadita.com/sobre-nosotros/quienes-somos/</small></p>
			</div>
			{{-- <div class="col m5 l3 hide-on-small-only">
			</div> --}}
		</div>

		<div id="lugares" class="col s12 tab-content">
			<div class="row">
				<h4 class="mt-0 raleway quote">LUGARES DE VENTA</h4>
			</div>
			<div class="row">
				<div class="col s12">
					<h5>Taquillas del palenque de la feria</h5>
				</div>
				<div class="col s12 m6">									
					<!-- ## VENUE MAP ## -->
					<div class="qcEventlayout">
						<iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d925.6144584278218!2d-102.30395967085808!3d21.878438843610546!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x8429ee86fe8caba5%3A0xa67935ef5998e6bf!2sPalenque+de+la+Feria+Nacional+de+San+Marcos!5e0!3m2!1ses-419!2smx!4v1505903821107" width="100%" height="450" frameborder="0" style="border:0" allowfullscreen></iframe>
					</div>

				</div>

				<!-- ## ADDRESS LIST ## -->
				<div class="col s12 m6">
					<ul class="qcAddress">
						<li><i class="medium material-icons">location_on</i><p><strong>DIRECCIÓN</strong>: Esq., Calle Nieto, Barrio de San Marcos, 20070 Aguascalientes, Ags.</p></li>
						<li><i class="medium material-icons">schedule</i><p><strong>HORARIO</strong>: Lunes a Sabado 11:00 am - 7:00 pm</p></li>
						<li><i class="medium material-icons">call</i><p><strong>TELÉFONO</strong>: 449 980 6747</p></li>
						<li><i class="medium material-icons">language</i><p><strong>Website</strong>:<a title="website" href="http://www.gallinapintadita.com" target="_blank">www.gallinapintadita.com</a></p></li>
					</ul>
				</div>
			</div>

		</div>

	</div>
</section>
<section class="section-video overlay overlay-5" style="background-image: url('https://img.youtube.com/vi/z1gFMujtH-o/maxresdefault.jpg');">
	<div class="row center-align">
		<a class="white-text" id="modal-video-open" href="#modal-video" data-video="https://www.youtube.com/embed/z1gFMujtH-o"><i class="material-icons">play_circle_filled</i></a>
		<p class="white-text"><i>Gallina Pintadita - Pollito Amarillito</i></p>
	</div>
</section>

<section class="section-comprar">
	<h5 class="mt-50 center-align raleway">Venta de boletos en Taquillas del Palenque de la Feria</h5>
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
		<p><b>Auditorio DIMO</b></p>
		<p><i class="material-icons">location_on</i> Profr. A. Topete del Valle 108, Barrio de San Marcos, 20070 Aguascalientes, Ags.</p>
		<p><i class="material-icons">call</i> 449 915 7353</p>
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
		        var uluru = {lat: 21.877827, lng: -102.302682};
		        var map = new google.maps.Map(document.getElementById('map'), {
		          zoom: 18,
		          scrollwheel: false,
		          navigationControl: true,
		          draggable: true,
		          center: {lat: 21.877827, lng: -102.302122}
		        });
		        var marker = new google.maps.Marker({
		          position: uluru,
		          map: map
		        });
		      }
	</script>

      <script async defer src="https://maps.googleapis.com/maps/api/js?key=AIzaSyBOOT9N6QdDeq0bnmSb1bw2SKw5CXQmOeA&callback=initMap"></script>
@endsection