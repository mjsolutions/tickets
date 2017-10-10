@extends('layouts.main')

@section('title', 'JNS Aguascalientes')

@section('description', 'JNS en Aguascalientes, Palenque de la feria de Aguascalientes 02 de Diciembre, 9:00 pm.')

@section('content')

<div class="image-header bg-4 overlay overlay-5">

	<div class="row white-text">
		<h4>JNS</h4>
		<div class="divider"></div>
		<p><i>Aguascalientes - Palenque de la feria</i></p>
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
		
			<div class="col s12 l8 mb-30">
				<img src="{{ asset('img/jeans.jpeg') }}" alt="" class="responsive-img">
			</div>
			
			<div class="col s12 l4">
			
				<div class="row">
					<div class="qcPricing col s12 mb-10">
						<h4 class="mt-0 raleway quote left-align">PRECIOS</h4>
						<div class="box col s12">
							
							<div class="price col s12">
								<div class="col s6 right-align">
									<b>VIP:</b>
								</div>
								<div class="col s6 align-right">
									<b>$ 1,500</b>
								</div>
							</div>
							<div class="price col s12">
								<div class="col s6 right-align">
									<b>DIAMANTE:</b>
								</div>
								<div class="col s6 align-right">
									<b>$ 1,050</b>
								</div>
							</div>
							<div class="price col s12">
								<div class="col s6 right-align">
									<b>ORO:</b>
								</div>
								<div class="col s6 align-right">
									<b>$ 735</b>
								</div>
							</div>
							<div class="price col s12">
								<div class="col s6 right-align">
									<b>PLATA:</b>
								</div>
								<div class="col s6 align-right">
									<b>$ 525</b>
								</div>
							</div>
							<div class="price col s12">
								<div class="col s6 right-align">
									<b>BRONCE:</b>
								</div>
								<div class="col s6 align-right">
									<b>$ 315</b>
								</div>
							</div>
							
						</div>
						
					</div>
			
				</div>
			
			</div>
			
			<div class="col s12">
				<div class="divider"></div>
				<p class="center-align mt-30">Venta de boletos en las taquillas del palenque de la feria</p>
			</div>
		</div>

		<div id="biografia" class="col s12 tab-content">
			<div class="col s12 hide-on-med-and-up">
				<img src="{{ asset('img/jeans-bio.jpeg') }}" class="responsive-img">
			</div>
				
		
			<div class="row">
				<div class="col m8 l9 hide-on-small-only" style="padding-right: 20px;">
					<img src="{{ asset('img/jeans-bio.jpeg') }}" class="responsive-img">
				</div>
				<div class="col s12 m4 l3 no-padding">
					<h4 class="mt-0 raleway quote">BIOGRAFÍA</h4>
				</div>
				<p class="hide-on-small-only">Después de haber finalizado su contrato con el nombre de Jeans a finales del 2016, las chicas junto con su manager deciden cambiar de nombre para tener libertad creativa y volver al concepto de una nueva agrupación.</p>
				<p class="hide-on-small-only">A inicios de este año, el grupo cambia oficialmente de nombre convirtiendo lo que de principio era un reencuentro en un regreso a los escenarios, con nombre propio y un nuevo rumbo, ahora la agrupación conformada por Angie, Melissa, Karla y Regina está promocionando su nuevo material discográfico bajo la produccion de Sony Music.</p>
				<p class="hide-on-small-only">Fuente:</p>
				<p class="hide-on-small-only"><small>https://es.wikipedia.org/wiki/Jeans_(banda)#JNS </small></p>
				<div class="col s12 hide-on-med-and-up">
					<p>Después de haber finalizado su contrato con el nombre de Jeans a finales del 2016, las chicas junto con su manager deciden cambiar de nombre para tener libertad creativa y volver al concepto de una nueva agrupación.</p>
					<p>A inicios de este año, el grupo cambia oficialmente de nombre convirtiendo lo que de principio era un reencuentro en un regreso a los escenarios, con nombre propio y un nuevo rumbo, ahora la agrupación conformada por Angie, Melissa, Karla y Regina está promocionando su nuevo material discográfico bajo la produccion de Sony Music.</p>
					<p>Fuente:</p>
					<p><small>https://es.wikipedia.org/wiki/Jeans_(banda)#JNS </small></p>
				</div>
			</div>
		</div>

		<div id="lugares" class="col s12 tab-content">
			<div class="row">
				<h4 class="mt-0 raleway quote">LUGARES DE VENTA</h4>
			</div>
			<div class="row">
				<div class="col s12">
					<h5>Taquillas del palenque de la feria</h5>
				</div>
				<div class="col s12 ">									
					<!-- ## VENUE MAP ## -->
					<div class="qcEventlayout">
						<iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d925.6144584278218!2d-102.30395967085808!3d21.878438843610546!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x8429ee86fe8caba5%3A0xa67935ef5998e6bf!2sPalenque+de+la+Feria+Nacional+de+San+Marcos!5e0!3m2!1ses-419!2smx!4v1505903821107" width="100%" height="450" frameborder="0" style="border:0" allowfullscreen></iframe>
					</div>

				</div>

				<!-- ## ADDRESS LIST ## -->
				<div class="col s12">
					<ul class="qcAddress">
						<li><i class="medium material-icons">location_on</i><p><strong>DIRECCIÓN</strong>: Esq., Calle Nieto, Barrio de San Marcos, 20070 Aguascalientes, Ags.</p></li>
						<li><i class="medium material-icons">schedule</i><p><strong>HORARIO</strong>: Lunes a Sabado 11:00 am - 7:00 pm</p></li>
						<li><i class="medium material-icons">call</i><p><strong>TELÉFONO</strong>: 449 980 6747</p></li>
						<li><i class="medium material-icons">language</i><p><strong>Website</strong>:<a title="website" href="https://www.facebook.com/events/520002365011856" target="_blank">fb/events/520002365011856/</a></p></li>
					</ul>
				</div>
			</div>

		</div>

	</div>
</section>
<section class="section-video overlay overlay-5" style="background-image: url('https://img.youtube.com/vi/ffPwKaYbWGQ/maxresdefault.jpg');">
	<div class="row center-align">
		<a class="white-text" id="modal-video-open" href="#modal-video" data-video="https://www.youtube.com/embed/ffPwKaYbWGQ"><i class="material-icons">play_circle_filled</i></a>
		<p class="white-text"><i>JNS - Aun Sin Ti</i></p>
	</div>
</section>

<section class="section-comprar">
	<div class="row">
		<div class="col s12 m7">
			<img src="{{asset('img/palenque-aguascalientes.jpg')}}" alt="Teatro Morelos" class="responsive-img" id="zoom_01" data-zoom-image="{{asset('img/palenque-aguascalientes.jpg')}}">
			<p class="center-align"><i>*Scroll sobre la imagen para hacer zoom</i></p>
		</div>
		<div class="col m3 offset-m1">
			<h5 class="mt-50 center-align raleway">Venta de boletos en las taquillas del palenque de la feria</h5>
			<div class="row">
				<div class="col s6 offset-s3 mt-30">
					<div class="divider"></div>
				</div>
			</div>
			<p class="center-align">Si tienes alguna duda sobre este evento puedes llamar al 449 980 6747 o contactarnos por este sitio</p>
			<div class="row center-align">
				<a href="{{ route('contacto') }}" class="btn waves-light waves-effect green center-align ls-1">CONTACTO</a>
			</div>
		</div>
	</div>
	
</section>

<section class="section-lugar">
	<div id="map"></div>
	
	<div class="info-lugar">
		<h5 class="raleway quote mb-15">Lugar del evento</h5>
		<div class="divider mb-15"></div>
		<p><b>Palenque de la feria, Aguascalientes</b></p>
		<p><i class="material-icons">location_on</i>Esq., Calle Nieto, Barrio de San Marcos, 20070 Aguascalientes, Ags.</p>
		<p><i class="material-icons">schedule</i><strong>HORARIO</strong>: Lunes a Sabado 11:00 am - 7:00 pm</p>
		<p><i class="material-icons">call</i> 449 980 6747</p>
		<p><i class="medium material-icons">language</i><a title="website" href="https://www.facebook.com/events/520002365011856" target="_blank">fb/events/520002365011856/</a></p>
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
	<script type="text/javascript" src="{{asset('js/jquery.elevatezoom.js')}}"></script>
	<script>
		$("#zoom_01").elevateZoom({
			scrollZoom : true,
			zoomType: "inner"
		});

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
		        var uluru = {lat: 21.878439, lng: -102.303412};
		        var map = new google.maps.Map(document.getElementById('map'), {
		          zoom: 19,
		          scrollwheel: false,
		          navigationControl: true,
		          draggable: true,
		          center: {lat: 21.878436, lng: -102.302947}
		        });
		        var marker = new google.maps.Marker({
		          position: uluru,
		          map: map
		        });
		      }
	</script>

      <script async defer src="https://maps.googleapis.com/maps/api/js?key=AIzaSyBOOT9N6QdDeq0bnmSb1bw2SKw5CXQmOeA&callback=initMap"></script>
@endsection