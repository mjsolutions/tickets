@extends('layouts.main')

@section('title', 'Santiago Cruz Tijuana')

@section('description', 'Santiago Cruz en Tijuana, 10 de Junio, 8:30 pm boletos en Teatro Zaragoza')

@section('content')

<div class="image-header bg-4 overlay overlay-5">

	<div class="row white-text">
		<h4>Santiago Cruz</h4>
		<div class="divider"></div>
		<p><i>Tijuana - Teatro Zaragoza</i></p>
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
				<img src="{{ asset('img/santiago-tijuana.jpg') }}" alt="Santiago Cruz Tijuana" class="responsive-img">
			</div>
			
			<div class="col s12 m8 offset-m1">				

				<div class="row mt-30">
					
					<div class="qcPricing col s12 center-align mb-10">
						<div class="box col s12">
							<header>
								<div class="col s12 m12 grey lighten-1">Zona plata</div>
								{{-- <div class="col m4 btn-buy nopadding hide-on-small-only"><a href="#compra" class="page-scroll"><b>Comprar</b></a></div> --}}
							</header>
							<div class="price col s12"><span>$350</span> Por entrada</div>
							{{-- <div class="filas col s6">Filas: Y - Z</div> --}}
							{{-- <div class="col s12 btn-buy nopadding hide-on-med-and-up"><a href="#compra" class="page-scroll"><b>Comprar</b></a></div> --}}
						</div>
					</div>

					<div class="qcPricing col s12 center-align mb-10">
						<div class="box col s12">
							<header>
								<div class="col s12 m12 light-blue accent-2">Zona preferente</div>
								{{-- <div class="col m4 btn-buy nopadding hide-on-small-only"><a href="#compra" class="page-scroll"><b>Comprar</b></a></div> --}}
							</header>
							<div class="price col s12"><span>$550</span> Por entrada</div>
							{{-- <div class="filas col s6">Filas: Y - Z</div> --}}
							{{-- <div class="col s12 btn-buy nopadding hide-on-med-and-up"><a href="#compra" class="page-scroll"><b>Comprar</b></a></div> --}}
						</div>
					</div>
					
					<div class="qcPricing col s12 center-align mb-10">
						<div class="box col s12">
							<header>
								<div class="col s12 m12 amber accent-4">Zona oro</div>
								{{-- <div class="col m4 btn-buy nopadding hide-on-small-only"><a href="#compra" class="page-scroll"><b>Comprar</b></a></div> --}}
							</header>
							<div class="price col s12"><span>$650</span> Por entrada</div>
							{{-- <div class="filas col s6">Filas: Y - Z</div> --}}
							{{-- <div class="col s12 btn-buy nopadding hide-on-med-and-up"><a href="#compra" class="page-scroll"><b>Comprar</b></a></div> --}}
						</div>
					</div>

					<div class="qcPricing col s12 center-align mb-10">
						<div class="box col s12">
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
					<p class="center-align mt-30">Venta de boletos a partir del 17 de mayo en Deco</p>
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
					<h5>Deco</h5>
				</div>
				<div class="col s12 m6">									
					<!-- ## VENUE MAP ## -->
					<div class="qcEventlayout">
						<iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d107648.69463823391!2d-117.08867126680884!3d32.52556719256526!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x80d948450997f0a1%3A0xe25a7867f1dc2cfb!2sDECO!5e0!3m2!1ses!2smx!4v1494638989844" width="100%" height="320" frameborder="0" style="border:2px solid #aaa" allowfullscreen></iframe>
					</div>

				</div>

				<!-- ## ADDRESS LIST ## -->
				<div class="col s12 m6">
					<ul class="qcAddress">
						<li><i class="medium material-icons">location_on</i><p><strong>DIRECCIÓN:</strong> Paseo de los Héroes, Zona Urbana Rio Tijuana, 22010 Tijuana, B.C.</p></li>
						<li><i class="medium material-icons">call</i><p><strong>TELÉFONO:</strong> 664 123 0412</p></li>
						<li><i class="medium material-icons">schedule</i><p><strong>HORARIO:</strong> Miércoles a Sábado de 2pm a 10pm</p></li>
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
	<h5 class="mt-50 center-align raleway">Venta de boletos a partir del 17 de mayo en Deco</h5>
	<div class="row">
		<div class="col s6 offset-s3 mt-30">
			<div class="divider"></div>
		</div>
	</div>
	<p class="center-align mb-30">Mayores informes al 664 123 0412 o WhatsApp 443 227 4979</p>
	{{-- <div class="row center-align">
		<a href="{{ route('contacto') }}" class="btn waves-light waves-effect green center-align ls-1">CONTACTO</a>
	</div> --}}
</section>

<section class="section-lugar">
	<div id="map"></div>
	
	<div class="info-lugar">
		<h5 class="raleway quote mb-30">Lugar del evento</h5>
		<div class="divider mb-30"></div>
		<p><b>Teatro Zaragoza</b></p>
		<p><i class="material-icons">location_on</i>Salvador Díaz Mirón 4ta. 1600, Centro, 22000 Tijuana, B.C.</p>
		<p><i class="material-icons">call</i> 01 664 685 8860</p>
		<p><i class="material-icons">email</i> No disponible</p>
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
		        var uluru = {lat: 32.5320495, lng: -117.0432551};
		        var map = new google.maps.Map(document.getElementById('map'), {
		          zoom: 17,
		          scrollwheel: false,
		          navigationControl: true,
		          draggable: true,
		          center: {lat: 32.5320495, lng: -117.0422551}
		        });
		        var marker = new google.maps.Marker({
		          position: uluru,
		          map: map
		        });
		      }
	</script>

      <script async defer src="https://maps.googleapis.com/maps/api/js?key=AIzaSyBOOT9N6QdDeq0bnmSb1bw2SKw5CXQmOeA&callback=initMap"></script>
@endsection