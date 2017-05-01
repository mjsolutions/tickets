@extends('layouts.main')

@section('title', 'Edgar Oceransky Puerto')

@section('description', 'Edgar Oceransky en Puerto Veracruz, 17 de Mayo, 9:30 pm boletos en La Puerta de Alcalá')

@section('content')

<div class="image-header bg-4 overlay overlay-5">

	<div class="row white-text">
		<h4>Edgar Oceransky</h4>
		<div class="divider"></div>
		<p><i>Puerto Veracruz - La Puerta de Alcalá</i></p>
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
			<div class="col s8 offset-s2 m3 mb-30">
				<img src="{{ asset('img/oceransky-veracruz.jpg') }}" alt="Edgar oceransky Puerto Veracruz" class="responsive-img">
			</div>
			
			<div class="col s12 m8 offset-m1">
				<div class="row">
					<h4 class="mt-0 raleway quote">PRECIOS</h4>
					{{-- <div class="divider"></div> --}}
				</div>
				

				<div class="row mt-30">
					<div class="qcPricing col s12 center-align mb-10">
						<div class="box ">
							<header>
								<div class="col s12 m12 orange accent-4">Entrada general</div>
								{{-- <div class="col m4 btn-buy nopadding hide-on-small-only"><a href="#compra" class="page-scroll"><b>Comprar</b></a></div> --}}
							</header>
							<div class="price col s12"><span>$470</span> Por entrada</div>
							{{-- <div class="filas col s6">Filas: Y - Z</div> --}}
							{{-- <div class="col s12 btn-buy nopadding hide-on-med-and-up"><a href="#compra" class="page-scroll"><b>Comprar</b></a></div> --}}
						</div>
					</div>
				</div>

				<div class="row">
					<div class="divider"></div>
					<p class="center-align mt-30">Venta de boletos exlusivamente en el lugar del evento</p>
				</div>
			</div>
		</div>

		<div id="biografia" class="col s12 tab-content">
			<div class="col s8 offset-s2 hide-on-med-and-up">
				<img src="{{ asset('img/oceransky-bio.jpg') }}" class="responsive-img">
			</div>
				
			<div class="col s12 m9">
				<h4 class="mt-0 raleway quote">BIOGRAFÍA</h4>		
				<p>Cantautor nacido en la Ciudad de México en el año de 1975. Inicia su carrera artística en 1993. En el 2000 participa con Mario Domm como co-productor y arreglista en el disco “Títeres de tu” del poeta mexicano Edel Juárez e incluye su canción “La recuerdo así”.</p>
				<p>En el año 2001 lanza su primer material discográfico llamado “Estoy aquí” bajo el sello Sony Music, en el 2002 forma parte del disco “El que la hace la canta” al lado de Reyli y Natalia Lafourcade entre ótros, bajo el mismo sello y el disco “Reflejos Acústicos” de Kirty Music, así como del Sound Track de la película “Corazones Rotos”.</p>
				<p>Ha compartido escenario con grandes de la música como Tania Libertad, Hernaldo Zuñiga , Ismael Serrano, Pedro Guerra, Santiago Cruz, Francisco Céspedes, Alberto Plaza, José Cantoral, Armando Manzanero, Franco de Vita, Rossana, Alberto Cortés Y Reyli éste último lo tuvo como invitado especial en su concierto del Auditorio Nacional en noviembre del 2007. Debido al éxito logrado en Costa Rica en 2009 graba en ese país un concierto en DVD, invitando importantes artistas como Bernardo Quesada y Master Key de ese país y Perrozomppopo de Nicaragua en México y Estados Unidos su canción “Obra Maestra” con la Banda Pequeños Musical sonó por varias semanas en la radio.</p>
			</div>
			<div class="col s3 hide-on-small-only">
				<img src="{{ asset('img/oceransky-bio.jpg') }}" class="responsive-img">
			</div>
			<div class="clearfix"></div>
			<div class="col s8 offset-s2 m4">
				<img src="{{ asset('img/oceransky-bio2.jpg') }}" class="responsive-img">
			</div>
			<div class="col s12 m8">
				<p class="mt-0">Teniendo claro que la música no solo es una pasión si no su modo de vida, en ese mismo año arriesga todo y presenta, con el apoyo de la Comisión de Cultura de la H. Cámara de Diputados, CONACULTA, Secretaría de Turismo del Estado de Querétaro , el festival más grande habla hispana llamado “Trovafest” el cual ha reunido a más de 100 cantautores de diferentes nacionalidades contando en su última edición (2016) con una semana completa de conciertos, tres escenarios y una afluencia de miles de personas de varios países convirtiendo a dicha ciudad en “La capital de la Trova”.</p>
				<p>Gracias a este festival comprobando una vez mas que la música rompe fronteras se une Pedro Guerra de España, Santiago Cruz de Colombia y Edgar Oceransky México en un disco único llamado “Pedro Santiago Edgar” donde reúnen sus mayores éxitos y los comparten teniendo una aceptación maravillosa dentro del publico de dichos cantautores el cual los lleva a hacer una gira dentro del territorio Nacional con localidades totalmente vendidas.</p>
				<p>Actualmente se encuentra de gira la cual lo ha llevado a países como Guatemala, Suiza, Munich, Estados Unidos, Perú, Costa Rica, España, en la cual ha tenido gran aceptación y también en varias ciudades de la Republica Mexicana donde se ha presentado más de 2 ocasiones en el Lunario de la Ciudad de México con llenos totales.</p>
			</div>
			<div class="clearfix"></div>
			<p>Fuente:</p>
			<p><small>http://edgaroceransky.com/biografia/</small></p>
			
		</div>

		<div id="lugares" class="col s12 tab-content">
			<div class="row">
				<h4 class="mt-0 raleway quote">LUGARES DE VENTA</h4>
			</div>
			<div class="row">
				<div class="col s12">
					<h5>La Puerta de Alcalá</h5>
				</div>
				<div class="col s12 m6">									
					<!-- ## VENUE MAP ## -->
					<div class="qcEventlayout">
						<iframe src="https://www.google.com/maps/embed?pb=!1m14!1m8!1m3!1d15077.503268759914!2d-96.1044851!3d19.1350198!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x0%3A0x91d78812fff22676!2sLa+Puerta+de+Alcal%C3%A1+Veracruz!5e0!3m2!1ses!2smx!4v1493422476087" width="100%" height="320" frameborder="0" style="border:0" allowfullscreen></iframe>
					</div>

				</div>

				<!-- ## ADDRESS LIST ## -->
				<div class="col s12 m6">
					<ul class="qcAddress">
						<li><i class="medium material-icons">location_on</i><p><strong>DIRECCIÓN</strong>:  Blvd. Adolfo Ruiz Cortinez S/N, Interior 313-1316, Zona Hotelera, 94293 Boca del Río, VER</p></li>
						<li><i class="medium material-icons">call</i><p><strong>TELÉFONO</strong>:  01 229 179 2532</p></li>
						<li><i class="medium material-icons">email</i><p><strong>EMAIL</strong>: No disponible</p></li>
						<li><i class="medium material-icons">language</i><p><strong>Website</strong>: <a title="website" href="https://www.facebook.com/lpdaveracruz/" target="_blank">https://www.facebook.com/lpdaveracruz</a></p></li>
					</ul>
				</div>
			</div>

		</div>

	</div>
</section>
<section class="section-video overlay overlay-5" style="background-image: url('https://img.youtube.com/vi/KOb0vNKfmSk/hqdefault.jpg');">
	<div class="row center-align">
		<a class="white-text" id="modal-video-open" href="#modal-video" data-video="https://www.youtube.com/embed/KOb0vNKfmSk"><i class="material-icons">play_circle_filled</i></a>
		<p class="white-text"><i>Edgar Oceransky - N Otra Vida (Acústica)</i></p>
	</div>
</section>

<section class="section-comprar">
	<h5 class="mt-50 center-align raleway">Venta de boletos exlusivamente en el lugar del evento</h5>
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
		<h5 class="raleway quote mb-30">Lugar del evento</h5>
		<div class="divider mb-30"></div>
		<p><i class="material-icons">location_on</i>  Blvd. Adolfo Ruiz Cortinez S/N, Interior 313-1316, Zona Hotelera, 94293 Boca del Río, VER</p>
		<p><i class="material-icons">call</i>  01 229 179 2532</p>
		<p><i class="material-icons">email</i> No disponible</p>
		<p><i class="material-icons">language</i> <a title="website" href="https://www.facebook.com/lpdaveracruz/" target="_blank">https://www.facebook.com/lpdaveracruz</a></p>
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
		        var uluru = {lat: 19.1350198, lng: -96.1044851};
		        var map = new google.maps.Map(document.getElementById('map'), {
		          zoom: 19,
		          scrollwheel: false,
		          navigationControl: true,
		          draggable: true,
		          center: {lat: 19.1350198, lng: -96.1044851}
		        });
		        var marker = new google.maps.Marker({
		          position: uluru,
		          map: map
		        });
		      }
	</script>

      <script async defer src="https://maps.googleapis.com/maps/api/js?key=AIzaSyBOOT9N6QdDeq0bnmSb1bw2SKw5CXQmOeA&callback=initMap"></script>
@endsection