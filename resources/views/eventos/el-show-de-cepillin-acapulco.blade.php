@extends('layouts.main')

@section('title', 'El Show de Cepillin ¡La Gira del Adiós! Acapulco')

@section('description', 'El Show de Cepillin ¡La Gira del Adiós! en Acapulco, 10 de masrzo 2019, 16:00 y 19:00 hrs')

@section('styles')
<script src="https://use.fontawesome.com/9b9c9dc667.js"></script>
@endsection

@section('content')

<div class="image-header bg-4 overlay overlay-5">

	<div class="row white-text">
		<h4>El Show de Cepillin <br> <small>¡La Gira del Adiós!</small></h4>
		<div class="divider"></div>
		<p><i>Acapulco - Hotel Calinda Beach</i></p>
		<p><i>16:00 y 19:00 hrs.</i></p>
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
			<div class="col s12 mb-30">
				<h4 class="mt-0 raleway quote">PRECIOS</h4>
				{{-- <div class="divider"></div> --}}
			</div>

			<div class="col s8 offset-s2 m4 offset-m1 mb-30">
				<img src="{{ asset('img/cepillin-acapulco.jpg') }}" alt="" class="responsive-img">
			</div>
			
			<div class="col s12 m5 offset-m1">				

				<div class="row">

					<div class="qcPricing col s12 center-align mb-10">
						<div class="box col s12">
							<header>
								<div class="col s12 teal accent-4">Diamante</div>
								{{-- <div class="col m4 btn-buy nopadding hide-on-small-only"><a href="#compra" class="page-scroll"><b>Comprar</b> <i class="fa fa-ticket" aria-hidden="true"></i></a></div> --}}
							</header>
							<div class="price col s12"><span>$350</span> Por entrada</div>
							{{-- <div class="col s12 btn-buy nopadding hide-on-med-and-up"><a href="#compra" class="page-scroll"><b>Comprar</b> <i class="fa fa-ticket" aria-hidden="true"></i></a></div> --}}
						</div>
					</div>

					<div class="qcPricing col s12 center-align mb-10">
						<div class="box col s12">
							<header>
								<div class="col s12 amber darken-1">Oro</div>
								{{-- <div class="col m4 btn-buy nopadding hide-on-small-only"><a href="#compra" class="page-scroll"><b>Comprar</b> <i class="fa fa-ticket" aria-hidden="true"></i></a></div> --}}
							</header>
							<div class="price col s12"><span>$300</span> Por entrada</div>
							{{-- <div class="col s12 btn-buy nopadding hide-on-med-and-up"><a href="#compra" class="page-scroll"><b>Comprar</b> <i class="fa fa-ticket" aria-hidden="true"></i></a></div> --}}
						</div>
					</div>

				</div>

				<div class="row">
					<div class="divider"></div>
					
						<div class="col s10 offset-s1">
							<p> * Venta de boletos exclusivamente en el lugar del evento.</p>
						</div>
						{{-- <li>Informes:</b> <a href="tel:4431880358" style="background: #4caf50; color: #fff; padding: 5px 10px;"> 443-188-0358</a></li> --}}
					
				</div>
			</div>
		</div>

		<div id="biografia" class="col s12 tab-content">
			<div class="col s8 offset-s2 hide-on-med-and-up">
				<img src="{{ asset('img/cepillin-bio.jpg') }}" class="responsive-img">
			</div>
			<div class="col s12 m7">
				<h4 class="mt-0 raleway quote">BIOGRAFÍA</h4>		
		        <p> <strong>45 años</strong> de trayecotria.</p>
		        <p>Más de 30 discos, 3000 programas de TV, más de 90000 funciones de circo, películas, cómics, caricaturas y mucho más.</p>
				<p>Sabías que las mañanitas de Cepillín son las más tocadas en YouTube por los mexicanos, los niños que cautivo Cepillín en 1978 ahora son los papás que llevan a sus propios hijos a recordar la maravillosa infancia que vivieron.</p>
				<p>El Show de Cepillín; se llegó a transmitir en 18 países de Latino América con bastante éxito. El programa era de corte educativo, cómico con artistas invitados, incluyendo algunos de talla internacional. Sus emisiones permanecieron 3 años continuos al aire de 1977 a 1980.</p>
				
			</div>
			<div class="col m5 hide-on-small-only">
				<img src="{{ asset('img/cepillin-bio.jpg') }}" class="responsive-img">
			</div>
			<div class="clearfix"></div>
			<p>Fuente:</p>
			<p><small>http://www.cepillin.tv/#tayectoria</small></p>
			
		</div>

		<div id="lugares" class="col s12 tab-content">
			<div class="row">
				<h4 class="mt-0 raleway quote">LUGARES DE VENTA</h4>
			</div>
			<div class="col s12">									
				<!-- ## VENUE MAP ## -->
				<div class="white z-depth-2">
					<iframe src="https://www.google.com/maps/embed?pb=!1m14!1m8!1m3!1d15273.65162081165!2d-99.861045!3d16.855457!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x0%3A0x121a0b1baaf27ced!2sHotel+Calinda+Beach+Acapulco!5e0!3m2!1ses!2smx!4v1550594831928" width="100%" height="450" frameborder="0" style="border:0" allowfullscreen></iframe>
				
				<!-- ## ADDRESS LIST ## -->
					<div class=" p-30">
						<h5 class="raleway"><b>Hotel Calinda Beach</b></h5>
						<ul class="qcAddress">
							<li><div class="divider"></div></li>
							<li><i class="fa fa-map-marker"></i> <p>Av Costera Miguel Alemán 1260, Deportivo, 39690 Acapulco, Gro.</p></li>
							<li><i class="fa fa-phone"></i><p> 01 744 435 0600</p></li>
							<li><i class="fa fa-globe"></i><p><a title="website" href="hotelcalindabeach.com" target="_blank">hotelcalindabeach.com</a></p></li>
						</ul>
					</div>
				</div>

			</div>			

		</div>

	</div>
</section>
<section class="section-video overlay overlay-5" style="background-image: url('https://img.youtube.com/vi/_yNRCjMpTNg/maxresdefault.jpg');">
	<div class="row center-align">
		<a class="white-text" id="modal-video-open" href="#modal-video" data-video="https://www.youtube.com/embed/_yNRCjMpTNg"><i class="material-icons">play_circle_filled</i></a>
		<p class="white-text"><i>Cepillín - La Feria de Cepillin</i></p>
	</div>
</section>

<section id="compra" class="section-comprar">
	
	<div class="row mt-30">
		<h5 class="center-align raleway">Boletos de venta en Hotel Calinda Beach.</h5>
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
		<p><b>Hotel Calinda Beach</b></p>
		<p><i class="material-icons">location_on</i>Av Costera Miguel Alemán 1260, Deportivo, 39690 Acapulco, Gro.</p>
		<p><i class="material-icons">call</i> 01 744 435 0600</p>
		<p><i class="fa fa-globe"></i> hotelcalindabeach.com</p>
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
		        var uluru = {lat: 16.855457, lng: -99.861045};
		        var map = new google.maps.Map(document.getElementById('map'), {
		          zoom: 17,
		          scrollwheel: false,
		          navigationControl: true,
		          draggable: true,
		          center: {lat: 16.855457, lng: -99.861045}
		        });
		        var marker = new google.maps.Marker({
		          position: uluru,
		          map: map
		        });
		      }
	</script>

      <script async defer src="https://maps.googleapis.com/maps/api/js?key=AIzaSyBOOT9N6QdDeq0bnmSb1bw2SKw5CXQmOeA&callback=initMap"></script>
@endsection