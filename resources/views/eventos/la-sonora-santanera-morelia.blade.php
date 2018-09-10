@extends('layouts.main')

@section('title', 'Sonora Santanera Morelia')

@section('description', 'La Sonora Santanera en Morelia, 29 de septiembre, boletos en RS Viajes centro, bolematico.mx y taquillas del planetario de Morelia')

@section('styles')

<!-- Metas Facebook -->
<meta property="og:url"  content="http://bolematico.mx/eventos/la-sonora-santanera-morelia" />
<meta property="og:title" content="La Sonora Santanera en Morelia" />
<meta property="og:description" content="La Sonora Santanera en Morelia, acompañados de Los Terricolas, Los Pasteles Verdes y Los Solitarios." />
<meta property="og:image" content="http://bolematico.mx/img/sonora-morelia.jpg" />

<script src="https://use.fontawesome.com/9b9c9dc667.js"></script>
@endsection

@section('content')

<div class="image-header bg-4 overlay overlay-5">

	<div class="row white-text">
		<h4>La Sonora Santanera</h4>
		<div class="divider"></div>
		<p><i>Morelia - Palacio del Arte 29 de Septiembre</i></p>
	</div>
	{{-- <a href="#compra" class="btn waves-light waves-effect page-scroll"><b>Comprar</b> <i class="fa fa-ticket" aria-hidden="true"></i></a> --}}
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
				<img src="{{ asset('img/sonora-morelia.jpg') }}" alt="" class="responsive-img">
			</div>
			
			<div class="col s12 m5 offset-m1">				

				<div class="row">

					<div class="qcPricing col s12 center-align mb-10">
						<div class="box col s12">
							<header>
								<div class="col s12 m8 teal accent-4">Zona ruedo</div>
								<div class="col m4 btn-buy nopadding hide-on-small-only"><a href="#compra" class="page-scroll"><b>Comprar</b> <i class="fa fa-ticket" aria-hidden="true"></i></a></div>
							</header>
							<div class="price col s12"><span>$750</span> Por entrada</div>
							<div class="col s12 btn-buy nopadding hide-on-med-and-up"><a href="#compra" class="page-scroll"><b>Comprar</b> <i class="fa fa-ticket" aria-hidden="true"></i></a></div>
						</div>
					</div>
					
					<div class="qcPricing col s12 center-align mb-10">
						<div class="box col s12">
							<header>
								<div class="col s12 m8 purple lighten-1">Zona butacas</div>
								<div class="col m4 btn-buy nopadding hide-on-small-only"><a href="#compra" class="page-scroll"><b>Comprar</b> <i class="fa fa-ticket" aria-hidden="true"></i></a></div>
							</header>
							<div class="price col s12"><span>$550</span> Por entrada</div>
							<div class="col s12 btn-buy nopadding hide-on-med-and-up"><a href="#compra" class="page-scroll"><b>Comprar</b> <i class="fa fa-ticket" aria-hidden="true"></i></a></div>
						</div>
					</div>

					<div class="qcPricing col s12 center-align mb-10">
						<div class="box col s12">
							<header>
								<div class="col s12 m8">General preferente</div>
								<div class="col m4 btn-buy nopadding hide-on-small-only"><a href="#compra" class="page-scroll"><b>Comprar</b> <i class="fa fa-ticket" aria-hidden="true"></i></a></div>
							</header>
							<div class="price col s12"><span>$380</span> Por entrada</div>
							<div class="col s12 btn-buy nopadding hide-on-med-and-up"><a href="#compra" class="page-scroll"><b>Comprar</b> <i class="fa fa-ticket" aria-hidden="true"></i></a></div>
						</div>
					</div>

					<div class="qcPricing col s12 center-align mb-10">
						<div class="box col s12">
							<header>
								<div class="col s12 m8 grey lighten-1">Zona general</div>
								<div class="col m4 btn-buy nopadding hide-on-small-only"><a href="#compra" class="page-scroll"><b>Comprar</b> <i class="fa fa-ticket" aria-hidden="true"></i></a></div>
							</header>
							<div class="price col s12"><span>$170</span> Por entrada</div>
							<div class="col s12 btn-buy nopadding hide-on-med-and-up"><a href="#compra" class="page-scroll"><b>Comprar</b> <i class="fa fa-ticket" aria-hidden="true"></i></a></div>
						</div>
					</div>

					<div class="qcPricing col s12 center-align mb-10">
						<div class="box col s12">
							<header>
								<div class="col s12 m8 green lighten-1">Periqueras</div>
								<div class="col m4 btn-buy nopadding hide-on-small-only"><a href="#compra" class="page-scroll"><b>Comprar</b> <i class="fa fa-ticket" aria-hidden="true"></i></a></div>
							</header>
							<div class="price col s12"><span>$3,700</span> Por mesa</div>
							<div class="col s12 btn-buy nopadding hide-on-med-and-up"><a href="#compra" class="page-scroll"><b>Comprar</b> <i class="fa fa-ticket" aria-hidden="true"></i></a></div>
						</div>
					</div>

				</div>

			</div>
		</div>

		<div id="biografia" class="col s12 tab-content">
			<div class="col s8 offset-s2 hide-on-med-and-up">
				<img src="{{ asset('img/sonora-bio.jpg') }}" class="responsive-img">
			</div>
			<div class="col s12 m9">
				<h4 class="mt-0 raleway quote">BIOGRAFÍA</h4>		
				<p>La Sonora Santanera, se ha consolidado mediante un estilo singular influenciado por el danzón, el mambo, el bolero, la rumba, el chachachá, la guaracha y la cumbia, así como canciones que son parte de la memoria colectiva de México .</p>
				<p>Inicialmente, en mayo de 1955 formaron la agrupación llamada "Tropical Santanera", que se deriva del lugar de nacimiento de su líder fundador, Carlos Colorado.</p>
				<p>En abril de 1960, fue lanzado como sencillo su más famoso tema La Boa. La canción se convirtió en un hit nacional al poco tiempo de su lanzamiento. El éxito no se hizo esperar y los temas se colocaron en las principales radiodifusoras. </p>
				<p>Actualmente y con más de 60 años de carrera, <strong>La Única Internacional Sonora Santanera</strong> ha obtenido varios reconocimientos de los mas importantes es la Estrella en el Paseo de la Fama de Las Vegas Nevada, así como fueron acreedores de 2 Grammy Latino y la Nominación al Grammy Americano por sus últimos discos grabados con Sony Music los cuales son Grandes éxitos de las Sonoras, con la más grande, la Sonora Santanera y el disco 60 Aniversario</p>
			</div>
			<div class="col s3 hide-on-small-only">
				<img src="{{ asset('img/sonora-bio.jpg') }}" class="responsive-img">
			</div>
			<div class="clearfix"></div>
			
		</div>

		<div id="lugares" class="col s12 tab-content">
			<div class="row">
				<h4 class="mt-0 raleway quote">LUGARES DE VENTA</h4>
			</div>

			<div class="row">
				<div class="col s12">
					<h5>Palacio del Arte</h5>
				</div>
				<div class="col s12 m6">									
					<!-- ## VENUE MAP ## -->
					<div class="qcEventlayout">
						<iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3756.5473056448977!2d-101.15272218584347!3d19.6893096375255!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x842d121b6fffffdd%3A0x6be1c56a052e6bbb!2sPalacio+Del+Arte!5e0!3m2!1ses-419!2smx!4v1536559317441" width="100%" height="320" frameborder="0" style="border:0" allowfullscreen></iframe>
					</div>

				</div>

				<!-- ## ADDRESS LIST ## -->
				<div class="col s12 m6">
					<ul class="qcAddress">
						<li><i class="medium material-icons">location_on</i><p><strong>DIRECCIÓN</strong>: Libramiento Oriente 3118, Jardines del Rincón, 58270 Morelia, Mich.</p></li>
						<li><i class="medium material-icons">call</i><p><strong>TELÉFONO</strong>:  </p></li>
						<li><i class="medium material-icons">schedule</i><p><strong>HORARIO</strong>: 11:00 a 19:00 hrs. Lunes a Sabado</p></li>
						<li><i class="medium material-icons">language</i><p><strong>Website</strong>: <a title="website" href="" target="_blank"></a></p></li>
					</ul>
				</div>
			</div>

			<div class="row">
				<div class="col s12">
					<h5>RS Viajes Centro</h5>
				</div>
				<div class="col s12 m6">									
					<!-- ## VENUE MAP ## -->
					<div class="qcEventlayout">
						<iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3756.1943227085408!2d-101.18477128552061!3d19.704349286730476!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x842d0e0d6bca646b%3A0x1b0a3a981724216f!2sRS+Viajes+Centro!5e0!3m2!1ses!2smx!4v1501091355750" width="100%" height="320" frameborder="0" style="border:0" allowfullscreen></iframe>
					</div>

				</div>

				<!-- ## ADDRESS LIST ## -->
				<div class="col s12 m6">
					<ul class="qcAddress">
						<li><i class="medium material-icons">location_on</i><p><strong>DIRECCIÓN</strong>: 20 de Noviembre 917, Centro Histórico, 58000 Morelia, Mich</p></li>
						<li><i class="medium material-icons">call</i><p><strong>TELÉFONO</strong>: 01 443 312 4639</p></li>
						<li><i class="medium material-icons">schedule</i><p><strong>HORARIO</strong>: 10:00 a 19:00 hrs. Lunes a Viernes y 10:30 a 14:00 hrs. los Sabados.</p></li>
						<li><i class="medium material-icons">language</i><p><strong>Website</strong>: <a title="website" href="https://www.facebook.com/RsViajesCentro/" target="_blank">https://www.facebook.com/RsViajesCentro/</a></p></li>
					</ul>
				</div>
			</div>

			<div class="row">
				<div class="col s12">
					<h5>RS Viajes Periodismo</h5>
				</div>
				<div class="col s12 m6">									
					<!-- ## VENUE MAP ## -->
					<div class="qcEventlayout">
						<iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d1878.3461125835147!2d-101.2256908688827!3d19.68313181288793!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x842d0c23bc1216f1%3A0xc16b3ac2516592fb!2sAv.+Periodismo+Jos%C3%A9+Tocaven+Lav%C3%ADn+1927%2C+Jardines+de+Torremolinos%2C+58197+Morelia%2C+Mich.!5e0!3m2!1ses!2smx!4v1533228065053" width="100%" height="320" frameborder="0" style="border:0" allowfullscreen></iframe>
					</div>

				</div>

				<!-- ## ADDRESS LIST ## -->
				<div class="col s12 m6">
					<ul class="qcAddress">
						<li><i class="medium material-icons">location_on</i><p><strong>DIRECCIÓN</strong>: Av. Periodismo 1927-1, Fracc Jardines de Torremolinos Ote (Frente a la Farmacia Guadalajara).</p></li>
						<li><i class="medium material-icons">call</i><p><strong>TELÉFONO</strong>: </p></li>
						<li><i class="medium material-icons">schedule</i><p><strong>HORARIO</strong>: 10:00 a 19:00 hrs. Lunes a Viernes y 11:00 a 14:00 hrs. los Sabados.</p></li>
						<li><i class="medium material-icons">language</i><p><strong>Website</strong>: </p></li>
					</ul>
				</div>
			</div>	

		</div>

	</div>
</section>
<section class="section-video overlay overlay-5" style="background-image: url('https://img.youtube.com/vi/X-Xqqwa4o-E/maxresdefault.jpg');">
	<div class="row center-align">
		<a class="white-text" id="modal-video-open" href="#modal-video" data-video="https://www.youtube.com/embed/X-Xqqwa4o-E"><i class="material-icons">play_circle_filled</i></a>
		<p class="white-text"><i>La Sonora Santanera - La Boa</i></p>
	</div>
</section>

<section id="compra" class="section-comprar">

	<div class="row">
		<h5 class="mt-50 center-align raleway">Boletos disponibles en Rs Viajes Centro, RS Viajes Periodismo y taquillas del palacio del arte.</h5>
	</div>

	<div class="row">
		<div class="col s6 offset-s3 mt-30">
			<div class="divider"></div>
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
		<p><b>Palacio del arte</b></p>
		<p><i class="material-icons">location_on</i>Libramiento Oriente 3118, Jardines del Rincón, 58270 Morelia, Mich.</p>
		<p><i class="material-icons">call</i></p>
		<p><i class="material-icons">email</i> No disponible</p>
		<p><i class="material-icons">language</i> <a title="website" href="" target="_blank"></a></p>
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
		        var uluru = {lat: 19.6893096, lng: -101.1527222};
		        var map = new google.maps.Map(document.getElementById('map'), {
		          zoom: 17,
		          scrollwheel: false,
		          navigationControl: true,
		          draggable: true,
		          center: {lat: 19.6893096, lng: -101.1527222}
		        });
		        var marker = new google.maps.Marker({
		          position: uluru,
		          map: map
		        });
		      }

	</script>

      <script async defer src="https://maps.googleapis.com/maps/api/js?key=AIzaSyBOOT9N6QdDeq0bnmSb1bw2SKw5CXQmOeA&callback=initMap"></script>
@endsection