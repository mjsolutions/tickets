@extends('layouts.main')

@section('title', 'Santiago Cruz Pachuca')

@section('description', 'Santiago Cruz en Pachuca, 02 de Junio, 9:30 pm boletos en Barceló Concert live')

@section('content')

<div class="image-header bg-4 overlay overlay-5">

	<div class="row white-text">
		<h4>Santiago Cruz</h4>
		<div class="divider"></div>
		<p><i>Pachuca - Barceló</i></p>
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
			<div class="row">
				<h4 class="mt-0 raleway quote">PRECIOS</h4>
				{{-- <div class="divider"></div> --}}
			</div>

			<div class="col s8 offset-s2 m3 mb-30">
				<img src="{{ asset('img/santiago-pachuca.jpg') }}" alt="Santiago Cruz Pachuca" class="responsive-img">
			</div>
			
			<div class="col s12 m8 offset-m1">				

				<div class="row mt-30">
					<div class="qcPricing col s12 center-align mb-10">
						<div class="box ">
							<header>
								<div class="col s12 m12 grey lighten-5 black-text" style="border: 1px solid #ccc;">Zona general</div>
								{{-- <div class="col m4 btn-buy nopadding hide-on-small-only"><a href="#compra" class="page-scroll"><b>Comprar</b></a></div> --}}
							</header>
							<div class="price col s12"><span>$350</span> Por entrada</div>
							{{-- <div class="filas col s6">Filas: Y - Z</div> --}}
							{{-- <div class="col s12 btn-buy nopadding hide-on-med-and-up"><a href="#compra" class="page-scroll"><b>Comprar</b></a></div> --}}
						</div>
					</div>

					<div class="qcPricing col s12 center-align mb-10">
						<div class="box ">
							<header>
								<div class="col s12 m12 grey lighten-1">Zona plata</div>
								{{-- <div class="col m4 btn-buy nopadding hide-on-small-only"><a href="#compra" class="page-scroll"><b>Comprar</b></a></div> --}}
							</header>
							<div class="price col s12"><span>$500</span> Por entrada</div>
							{{-- <div class="filas col s6">Filas: Y - Z</div> --}}
							{{-- <div class="col s12 btn-buy nopadding hide-on-med-and-up"><a href="#compra" class="page-scroll"><b>Comprar</b></a></div> --}}
						</div>
					</div>
					
					<div class="qcPricing col s12 center-align mb-10">
						<div class="box ">
							<header>
								<div class="col s12 m12 amber accent-4">Zona oro</div>
								{{-- <div class="col m4 btn-buy nopadding hide-on-small-only"><a href="#compra" class="page-scroll"><b>Comprar</b></a></div> --}}
							</header>
							<div class="price col s12"><span>$700</span> Por entrada</div>
							{{-- <div class="filas col s6">Filas: Y - Z</div> --}}
							{{-- <div class="col s12 btn-buy nopadding hide-on-med-and-up"><a href="#compra" class="page-scroll"><b>Comprar</b></a></div> --}}
						</div>
					</div>

					<div class="qcPricing col s12 center-align mb-10">
						<div class="box ">
							<header>
								<div class="col s12 m12 light-blue accent-2">Zona platino (sillas)</div>
								{{-- <div class="col m4 btn-buy nopadding hide-on-small-only"><a href="#compra" class="page-scroll"><b>Comprar</b></a></div> --}}
							</header>
							<div class="price col s12"><span>$650</span> Por entrada</div>
							{{-- <div class="filas col s6">Filas: Y - Z</div> --}}
							{{-- <div class="col s12 btn-buy nopadding hide-on-med-and-up"><a href="#compra" class="page-scroll"><b>Comprar</b></a></div> --}}
						</div>
					</div>

					<div class="qcPricing col s12 center-align mb-10">
						<div class="box ">
							<header>
								<div class="col s12 m12 orange accent-4">Zona diamante</div>
								{{-- <div class="col m4 btn-buy nopadding hide-on-small-only"><a href="#compra" class="page-scroll"><b>Comprar</b></a></div> --}}
							</header>
							<div class="price col s12"><span>$850</span> Por entrada</div>
							{{-- <div class="filas col s6">Filas: Y - Z</div> --}}
							{{-- <div class="col s12 btn-buy nopadding hide-on-med-and-up"><a href="#compra" class="page-scroll"><b>Comprar</b></a></div> --}}
						</div>
					</div>

				</div>

				<div class="row">
					<div class="divider"></div>
					<p class="center-align mt-30">Venta de boletos en Café Galería "Puerta Niebla"</p>
				</div>
			</div>
		</div>

		<div id="biografia" class="col s12 tab-content">
			<div class="col s8 offset-s2 hide-on-med-and-up">
				<img src="{{ asset('img/santiago-bio.jpg') }}" class="responsive-img">
			</div>
				
			<div class="col s12 m9">
				<h4 class="mt-0 raleway quote">BIOGRAFÍA</h4>		
				<p>El cantautor colombiano Santiago Cruz, es ya un nombre indispensable en el panorama de la música pop internacional. Con sus cinco álbumes, cuatro de ellos producidos en estudio, ha obtenido paso a paso un reconocimiento tanto en Colombia como en varios países de la región que lo proyecta como uno de los más importantes artistas de la escena musical hispanohablante.</p>
				<p>Con múltiples reconocimientos en los últimos años, entre ellos dos nominaciones al Latin Grammy en el 2010 y 2013 en las categorías Mejor Álbum Cantautor y Grabación del año por Desde lejos y varios premios Nuestra Tierra, Shock y 40 Principales, varios Discos de oro y platino por ventas de sus álbumes, Cruz sigue transitando con éxito el camino que soñaba, vivir haciendo lo que más le gusta, componer y cantar.</p>
				<p>Desde 2011 es Embajador de Buena Voluntad de Naciones Unidas por los Objetivos del Milenio, un honroso nombramiento que le permite trabajar de cerca con el equipo de la ONU para encontrar formas concretas de lograr algunos de los cambios que se necesitan para un mundo mejor.</p>
			</div>
			<div class="col s3 hide-on-small-only">
				<img src="{{ asset('img/santiago-bio.jpg') }}" class="responsive-img">
			</div>
			<div class="clearfix"></div>
			<div class="col s8 offset-s2 m4">
				<img src="{{ asset('img/santiago-bio2.jpg') }}" class="responsive-img">
			</div>
			<div class="col s12 m8">
				<p class="mt-0">Su canción Una y otra vez le dió la oportunidad de entrar al mercado colombiano. Ese sencillo formó parte de su primer álbum titulado SOLO HASTA HOY, lanzado en 2003. Tres años mas tarde, en 2006, salió su segundo álbum, SENTIDOS un disco bien logrado y producido en forma independiente. Canciones de esta producción como "Acabado" y "Tus Regalos" quedaron grabadas en el alma de la gente.</p>
				<p>2009 marcó el camino irreversible para posicionarse como un gran cantautor de talla internacional. Ese año, en España, de la mano del reconocido productor musical Nacho Mañó (el mismo que ha trabajado con Armando Manzanero, Alejandro Sanz, Niña Pastori, entre otros, y quien ademas es miembro y alma de Presuntos Implicados), Santiago materializó su tercer album CRUCE DE CAMINOS a partir del cual contó con el acompañamiento de Sony Music.</p>
				<p>Baja la guardia, Cuando regreses, Y si te quedas, ¿qué?, 6 am y 10.000 batallas, son las 5 canciones de ese álbum que ya forman parte fundamental del repertorio del pop colombiano. Tras el éxito obtenido, en diciembre de 2011 CRUCE DE CAMINOS recibió Doble Disco de Platino por ventas en Colombia, y Disco de Platino en Venezuela.
</p>
			</div>
			<div class="clearfix"></div>
			<p>El pasado 7 de septiembre Cruz sale a la luz, TRENES, AVIONES Y VIAJES INTERPLANETARIOS, un disco producido por el brasileño Mario Caldato Jr. el hombre detrás de la mayoría de la discografía de los BeastieBoys, productor de Jack Johnson, Seu Jorge entre otros. Caldato sumó a Alexandre Kassin al equipo de producción, y juntos trabajaron con Santiago las 11 canciones escritas por él y elegidas para este nuevo disco grabado en Rio de Janeiro. El disco cuenta también con un BonusTrack, producido por el talentoso productor colombiano Juan Pablo Vega. Cruz contó con varios colegas y amigos compositores para co-escribir algunas de las canciones del disco y cuenta con dos colaboraciones muy especiales, una con Elsa Carbajal (Elsa y Elmar) y otra con el portorriqueño Pedro Capó.</p>
			<p>Trenes, aviones y viajes interplanetarios, distinto, arriesgado, algo vintage y con un sonido muy especial se perfila como uno de los discos más importantes de la carrera de Santiago Cruz.</p>
			<p>Fuente:</p>
			<p><small>http://www.santiagocruz.net/bio.php/</small></p>
			
		</div>

		<div id="lugares" class="col s12 tab-content">
			<div class="row">
				<h4 class="mt-0 raleway quote">LUGARES DE VENTA</h4>
			</div>
			<div class="row">
				<div class="col s12">
					<h5>Café Galería "Puerta Niebla"</h5>
				</div>
				<div class="col s12 m6">									
					<!-- ## VENUE MAP ## -->
					<div class="qcEventlayout">
						<iframe src="https://www.google.com/maps/embed?pb=!1m14!1m8!1m3!1d14985.316181449147!2d-98.7321878!3d20.1203156!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x0%3A0x3e8165c8571979db!2sPuerta+Niebla+Caf%C3%A9!5e0!3m2!1ses!2smx!4v1493429242940" width="100%" height="320" frameborder="0" style="border:0" allowfullscreen></iframe>
					</div>

				</div>

				<!-- ## ADDRESS LIST ## -->
				<div class="col s12 m6">
					<ul class="qcAddress">
						<li><i class="medium material-icons">location_on</i><p><strong>DIRECCIÓN</strong>: Parque Hidalgo 174, Ex Hacienda de Guadalupe, 42050 Pachuca de Soto, Hgo.</p></li>
						<li><i class="medium material-icons">call</i><p><strong>TELÉFONO</strong>: 01 771 718 6073</p></li>
						<li><i class="medium material-icons">email</i><p><strong>EMAIL</strong>: No disponible</p></li>
						<li><i class="medium material-icons">language</i><p><strong>Website</strong>: <a title="website" href="https://www.facebook.com/puertaniebla/" target="_blank">https://www.facebook.com/puertaniebla</a></p></li>
					</ul>
				</div>
			</div>

		</div>

	</div>
</section>
<section class="section-video overlay overlay-5" style="background-image: url('https://img.youtube.com/vi/geFJZW9vpSM/maxresdefault.jpg');">
	<div class="row center-align">
		<a class="white-text" id="modal-video-open" href="#modal-video" data-video="https://www.youtube.com/embed/geFJZW9vpSM"><i class="material-icons">play_circle_filled</i></a>
		<p class="white-text"><i>Santiago Cruz - Y Si Te Quedas, ¿qué?</i></p>
	</div>
</section>

<section class="section-comprar">
	<h5 class="mt-50 center-align raleway">Venta de boletos en Café Galería "Puerta Niebla"</h5>
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
		<p><b>Barceló Concert live</b></p>
		<p><i class="material-icons">location_on</i>Blvd. Everardo Márquez S/N 42080 Pachuca de Soto</p>
		<p><i class="material-icons">call</i> 01 771 709 0020</p>
		<p><i class="material-icons">email</i> No disponible</p>
		<p><i class="material-icons">language</i> <a title="website" href="https://www.facebook.com/Barceló-Pachuca-1640544489581641/" target="_blank">https://www.facebook.com/Barceló...</a></p>
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
		        var uluru = {lat: 20.1131757, lng: -98.7493329};
		        var map = new google.maps.Map(document.getElementById('map'), {
		          zoom: 17,
		          scrollwheel: false,
		          navigationControl: true,
		          draggable: true,
		          center: {lat: 20.1131757, lng: -98.7493329}
		        });
		        var marker = new google.maps.Marker({
		          position: uluru,
		          map: map
		        });
		      }
	</script>

      <script async defer src="https://maps.googleapis.com/maps/api/js?key=AIzaSyBOOT9N6QdDeq0bnmSb1bw2SKw5CXQmOeA&callback=initMap"></script>
@endsection