@extends('layouts.main')

@section('title', 'Manu NNa en Morelia')

@section('description', 'Manu NNa en Morelia, Cocktail Live Altozano 01 de septiembre, 10:00 pm.')

@section('content')

<div class="image-header bg-4 overlay overlay-5">

	<div class="row white-text">
		<h4>Manu NNa</h4>
		<div class="divider"></div>
		<p><i>Morelia - Cocktail Live Altozano</i></p>
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
				<img src="{{ asset('img/manu-nna.jpg') }}" alt="" class="responsive-img">
			</div>
			
			<div class="col s12 m8">

				<div class="row">
					<div class="qcPricing col s12 center-align mb-10">
						<h4 class="mt-0 raleway quote left-align">PRECIOS</h4>
						{{-- <div class="box col s12">
							<header>
								<div class="col s12 m12 teal accent-4">General</div>
							</header>
							<div class="price col s12"><span>$180</span> Por entrada</div>
						</div> --}}
						<div class="divider"></div>
						<p class="center-align mt-30">Mayores informes en Cocktail Live Altozano</p>
					</div>

				</div>

				{{-- <div class="row">
					<div class="divider"></div>
					<p class="center-align mt-30">Venta de boletos en Cocktail Live Altozano</p>
				</div> --}}
			</div>
		</div>

		<div id="biografia" class="col s12 tab-content">
			<div class="col s8 offset-s2 hide-on-med-and-up">
				<img src="{{ asset('img/manunna-bio.jpg') }}" class="responsive-img">
			</div>
				
			<div class="col m12">
				<h4 class="mt-0 raleway quote">BIOGRAFÍA</h4>		
				<img src="{{ asset('img/manunna-bio.jpg') }}" class="responsive-img hide-on-small-only" style="float: left; margin-right: 30px;">
				<p>Comediante, actor, cabaretero y ex-sexoservidor. Manunna hace de todas las tragedias una comedia para sobrevir. Fanático de las telenovelas mexicanas y amante del mezcal, encontró en el stand up el medio para opinar, reír y, en algunas ocaciones, llorar. Tan ecléctico como su comedia, hoy satisface a las personas desde el escenario con su arrolladoramente sensual presencia (segun él)</p>
				<p>Inició a sus 15 años espiando a Regina Orozco por una ventana del entonces bar El Hábito (ahora el Vicio). No tenía dinero para pagar la entrada al show La muñequita del pastel, pero sí muchas ganas de saber qué cosa era eso del cabaret. Allí descubrió qué quería hacer. Encontró en el cabaret un campo divertido para contar historias con una carga política.</p>
				<p>Pero Manu NNa quería ser él, no un personaje de ficción, para así contar las historias desde sus experiencias. Entonces, halló en el stand up un espacio para hablar de la homofobia. Estudió actuación, dramaturgia, cabaret, burlesque, stand up, todo lo necesario para crear un discurso contundente que utilizara la risa para burlarse irónicamente del ser gay.</p>
				<p>Fuente:</p>
				<p><small>http://www.comedycentral.la/tv/destacado/stand-up-olimpico/personajes/eduardo-talavera/ <br>https://www.timeoutmexico.mx/ciudad-de-mexico/gay-y-lesbico/entrevista-con-manu-nna</small></p>
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
					<h5>Cocktail Live Altozano</h5>
				</div>
				<div class="col s12 m6">									
					<!-- ## VENUE MAP ## -->
					<div class="qcEventlayout">
						<iframe src="https://www.google.com/maps/embed?pb=!1m14!1m8!1m3!1d15027.98842948285!2d-101.1706844!3d19.6701288!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x0%3A0xf42f9ad8634df860!2sCocktail+Live!5e0!3m2!1ses!2smx!4v1496295365504" width="100%" height="320" frameborder="0" style="border:0" allowfullscreen></iframe>
					</div>

				</div>

				<!-- ## ADDRESS LIST ## -->
				<div class="col s12 m6">
					<ul class="qcAddress">
						<li><i class="medium material-icons">location_on</i><p><strong>DIRECCIÓN</strong>: Blvrd. Juan Pablo II 1735, Morelia, Mich</p></li>
						<li><i class="medium material-icons">schedule</i><p><strong>HORARIO</strong>: Martes a Domingo de 12pm a 11pm</p></li>
						<li><i class="medium material-icons">call</i><p><strong>TELÉFONO</strong>: 6901120</p></li>
						<li><i class="medium material-icons">language</i><p><strong>Website</strong>: <a title="website" href="https://www.facebook.com/CocktaiLiveMariscosBar/" target="_blank">https://www.facebook.com/CocktaiLiveMariscosBar/</a></p></li>
					</ul>
				</div>
			</div>

		</div>

	</div>
</section>
<section class="section-video overlay overlay-5" style="background-image: url('https://img.youtube.com/vi/v32MfVshdIQ/maxresdefault.jpg');">
	<div class="row center-align">
		<a class="white-text" id="modal-video-open" href="#modal-video" data-video="https://www.youtube.com/embed/v32MfVshdIQ"><i class="material-icons">play_circle_filled</i></a>
		<p class="white-text"><i>Manu NNa @ #StandUpEnComedy</i></p>
	</div>
</section>

<section class="section-comprar">
	<h5 class="mt-50 center-align raleway">Venta de boletos en Cocktail Live Altozano</h5>
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
		<p><b>Cocktail Live Altozano</b></p>
		<p><i class="material-icons">location_on</i> Blvrd. Juan Pablo II 1735, Morelia, Mich.</p>
		<p><i class="material-icons">schedule</i><strong>HORARIO</strong>: Martes a Domingo de 12pm a 11pm</p>
		<p><i class="material-icons">call</i> 6901120</p>
		<p><i class="material-icons">language</i> <a title="website" href="https://www.facebook.com/CocktaiLiveMariscosBar/" target="_blank">fb/CocktaiLiveMariscosBar</a></p>
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
		        var uluru = {lat: 19.6701288, lng: -101.1706844};
		        var map = new google.maps.Map(document.getElementById('map'), {
		          zoom: 18,
		          scrollwheel: false,
		          navigationControl: true,
		          draggable: true,
		          center: {lat: 19.6701288, lng: -101.1700844}
		        });
		        var marker = new google.maps.Marker({
		          position: uluru,
		          map: map
		        });
		      }
	</script>

      <script async defer src="https://maps.googleapis.com/maps/api/js?key=AIzaSyBOOT9N6QdDeq0bnmSb1bw2SKw5CXQmOeA&callback=initMap"></script>
@endsection