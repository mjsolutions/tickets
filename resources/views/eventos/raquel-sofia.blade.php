@extends('layouts.main')

@section('title', 'Raquel Sofia Gira 2:00 am')

@section('description', 'Raquel Sofia en su gira 2:00 am 2018, boletos en bolematico.mx')

@section('styles')
<script src="https://use.fontawesome.com/9b9c9dc667.js"></script>
<style type="text/css">
	.flex {
		margin: 0 auto;
		width: 80%;
		padding: 10px 0;
		display: flex;
		justify-content: space-around;
		align-items: flex-start;
		/*border-bottom: 1px solid #ddd;*/
	}
	.flex a {
		font-size: 1.3rem;
	}
	.text-justify {
		text-align: justify;
	}
	.event-date-card {
		position: relative;
		height: 100px;
		border: 1px solid #ccc;
		background-color: #FFF;
		margin-bottom: 20px;
	}
	.event-date-card-calendar {
		width: 100px;
		height: 100%;
		color: #FFF;
		float: left;
		border-right: 1px solid #ccc;
	}
	.event-date-card-month {
		width: 100%;
		height: 30%;
		background-color: #004040;
		display: flex;
		flex-flow: row wrap;
		align-items: center;
		justify-content: center;
	}
	.event-date-card-number {
		width: 100%;
		height: 70%;
		background-color: #008080;
		display: flex;
		flex-flow: row wrap;
		align-items: center;
		justify-content: center;
	}
	.event-date-details {
		position: relative;
		float: left;
		padding-top: 10px;
		padding-left: 15px;
	}
	.event-date-details h5 {
		margin-top: 0;
	}
	.event-date-details p {
		margin: 0;
	}

	@media screen and (max-width: 650px) {
		.event-date-card {
			height: 150px;
			margin-bottom: 40px;
		}

		.event-date-details{
			width: calc( 100% - 100px );
		}

		.event-date-card > a {
			position: absolute;
		    bottom: -20px;
		    right: 0;
		}
	}
</style>
@endsection

@section('content')

<div class="image-header overlay" style="background-attachment: initial; background-image: url('{{asset('img/raquel-banner.jpg')}}') ">

	<div class="row">
		<h4 class="wow flipInX" data-wow-delay="0.5s">Raquel Sofía</h4>
		<div class="divider wow fadeInLeft" data-wow-delay="0.8s" style="height: 2px; background-color: #0b529e;"></div>
		<p class="wow flipInX" data-wow-delay="0.5s"><i>Gira 2:00am</i></p>
	</div>
	{{-- <a href="#compra" class="btn waves-light waves-effect page-scroll"><b>Comprar</b> <i class="fa fa-ticket" aria-hidden="true"></i></a> --}}
</div>

<section class="container">
	<div class="row">
		<div class="col s12">
			<ul class="tabs">
				<li class="tab "><a class="active" href="#tour">GIRA 2:00</a></li>
				<li class="tab "><a href="#fechas">BOLETOS</a></li>
				{{-- <li class="tab "><a href="#lugares">Boletos</a></li> --}}
			</ul>
		</div>
		<div id="tour" class="col s12 tab-content">
			<div class="row mb-50">
				<div class="col s12">
					{{-- <img src="{{ asset('img/roberto-tapia-banner.jpg') }}" alt="" class="responsive-img wow fadeIn"> --}}
				</div>
			</div>
			<div class="row">
				<div class="col s12">
					<h4 class="mt-0 mb-30 raleway quote">BIOGRAFIA</h4>
				</div>
				<div class="col s12 m8 wow fadeIn" data-wow-delay="0.5s">
					<div class="text-justify">
						<p>La nominada al GRAMMY latino Raquel Sofia, es el fenómeno indie que surgió en esta década. Antes de lanzar un álbum, ya había escrito y colaborado con algunos de los artistas más populares e influyentes del mercado latino, incluidos Shakira y Juanes. Las habilidades de Raquel Sofía se extienden más allá de su música.</p>
						<p>Ella habla y canta tres idiomas diferentes; Español, inglés y portugués. Se graduó de la reconocida Universidad de Miami Frost School of Music.</p>
						<p>En 2014, Raquel Sofia lanzó su NPR "Tiny Desk Concert" y también fue elegida como la primera artista latina en participar en el programa original de VEVO "Vevo DSCVR" y obtuvo más de 100,000 visitas en las primeras 2 semanas. El segundo sencillo de Raquel "Agridulce" ha recaudado más de 8.5 millones de transmisiones en Spotify. Agridulce también fue elegido como una de las mejores canciones de Beats Music "Best of 2014 Pop".</p>
						<p>Raquel Sofia escribió e interpretó en la cinta de videojuegos Game Of Thrones de HBO para 2015. En febrero de 2015, Raquel lanzó su primer EP "Te Odio Los Sabados" con su exitoso single "Te Amo Idiota", que obtuvo más de 9 millones de transmisiones en Spotify en 4 meses.</p>
					</div>
					<p>Sitio web Oficial: <a href="https://www.raquelsofia.com/" target="_blank">raquelsofia.com/</a></p>
				</div>

				<div class="col s12 m4">
					<img src="{{ asset('img/raquel-bio.jpg') }}" class="responsive-img materialboxed wow fadeInRight" data-wow-delay="0.5s">
					<div class="flex">
						<a href="https://www.facebook.com/raquelsofiamusic" target="_blank"><i class="fa fa-facebook" aria-hidden="true"></i></a>
						<a href="https://www.instagram.com/raquelsofia/" target="_blank"><i class="fa fa-instagram" aria-hidden="true"></i></a>
						<a href="https://twitter.com/raquelsofia" target="_blank"><i class="fa fa-twitter" aria-hidden="true"></i></a>
						<a href="https://www.youtube.com/channel/UCleqjA-xt7OKt7dgtIEE-RQ" target="_blank"><i class="fa fa-youtube" aria-hidden="true"></i></a>
						<a href="https://play.spotify.com/artist/0J9JLJmiTXJFvvyHS3Qzn4" target="_blank"><i class="fa fa-spotify" aria-hidden="true"></i></a>

					</div>
				</div>
				<div class="clearfix"></div>
			</div>
			
		</div>

		<div id="fechas" class="col s12 tab-content">
			<div class="row">
				
				<div class="col s10 offset-s1">
					<h5 class="mt-0 mb-50 raleway quote"><B>FECHAS CONFIRMADAS</B> <br><small>¡No pierdas tu lugar y compra tus boletos ya!</small></h5>

					<h5 class="pl-30"><b>NOVIEMBRE</b></h5>
					<div class="divider mb-30"></div>
					{{-- <div class="col s12 event-date-card no-padding">
						<div class="event-date-card-calendar">
							<div class="event-date-card-month">
								<b>NOVIEMBRE</b>
							</div>
							<div class="event-date-card-number">
								<h3 class="mt-0 mb-0"><b>01</b></h3>
							</div>
						</div>
						<div class="event-date-details">
							<h5><b>ORIZABA, VERACRUZ</b></h5>
							<p>MERCADITO ORIZABA</p>
							<p>21:30 hrs.</p>
						</div>
						<a href="{{ route('eventos.selecciona-lugares', 'orizaba') }}" class="btn waves-light mb-0 waves-effect red pull-right"><b>Comprar</b> <i class="fa fa-ticket" aria-hidden="true"></i></a>
					</div> --}}

					{{-- <div class="col s12 event-date-card no-padding">
						<div class="event-date-card-calendar">
							<div class="event-date-card-month">
								<b>NOVIEMBRE</b>
							</div>
							<div class="event-date-card-number">
								<h3 class="mt-0 mb-0"><b>02</b></h3>
							</div>
						</div>
						<div class="event-date-details">
							<h5><b>VERACRUZ, VERACRUZ</b></h5>
							<p>AGUAMALA BAR</p>
							<p>21:30 hrs.</p>
						</div>
						<a href="{{ route('eventos.selecciona-lugares', 'veracruz') }}" class="btn waves-light mb-0 waves-effect red pull-right"><b>Comprar</b> <i class="fa fa-ticket" aria-hidden="true"></i></a>
					</div> --}}
					{{-- <div class="col s12 event-date-card no-padding">
						<div class="event-date-card-calendar">
							<div class="event-date-card-month">
								<b>NOVIEMBRE</b>
							</div>
							<div class="event-date-card-number">
								<h3 class="mt-0 mb-0"><b>03</b></h3>
							</div>
						</div>
						<div class="event-date-details">
							<h5><b>CÓRDOBA, VERACRUZ</b></h5>
							<p>SABINA LIVE</p>
							<p>21:30 hrs.</p>
						</div>
						<a href="{{ route('eventos.selecciona-lugares', 'cordoba') }}" class="btn waves-light mb-0 waves-effect red pull-right"><b>Comprar</b> <i class="fa fa-ticket" aria-hidden="true"></i></a>
					</div> --}}
					{{-- <div class="col s12 event-date-card no-padding">
						<div class="event-date-card-calendar">
							<div class="event-date-card-month">
								<b>NOVIEMBRE</b>
							</div>
							<div class="event-date-card-number">
								<h3 class="mt-0 mb-0"><b>09</b></h3>
							</div>
						</div>
						<div class="event-date-details">
							<h5><b>PACHUCA, HIDALGO</b></h5>
							<p>ALLIROOS CANTABAR</p>
							<p>21:30 hrs.</p>
						</div>
						<a href="{{ route('eventos.selecciona-lugares', 'pachuca') }}" class="btn waves-light mb-0 waves-effect red pull-right"><b>Comprar</b> <i class="fa fa-ticket" aria-hidden="true"></i></a>
					</div> --}}
					<div class="col s12 event-date-card no-padding">
						<div class="event-date-card-calendar">
							<div class="event-date-card-month">
								<b>NOVIEMBRE</b>
							</div>
							<div class="event-date-card-number">
								<h3 class="mt-0 mb-0"><b>22</b></h3>
							</div>
						</div>
						<div class="event-date-details">
							<h5><b>SAN LUIS POTOSÍ</b></h5>
							<p>RESTAURANTE & BAR CASA VIEJA</p>
							<p>21:30 hrs.</p>
						</div>
						<a href="{{ route('eventos.selecciona-lugares', 'slp') }}" class="btn waves-light mb-0 waves-effect red pull-right"><b>Comprar</b> <i class="fa fa-ticket" aria-hidden="true"></i></a>
					</div>
					<div class="col s12 event-date-card no-padding">
						<div class="event-date-card-calendar">
							<div class="event-date-card-month">
								<b>NOVIEMBRE</b>
							</div>
							<div class="event-date-card-number">
								<h3 class="mt-0 mb-0"><b>23</b></h3>
							</div>
						</div>
						<div class="event-date-details">
							<h5><b>AGUASCALIENTES</b></h5>
							<p>LA TERCERA</p>
							<p>21:30 hrs.</p>
						</div>
						<a href="{{ route('eventos.selecciona-lugares', 'ags') }}" class="btn waves-light mb-0 waves-effect red pull-right"><b>Comprar</b> <i class="fa fa-ticket" aria-hidden="true"></i></a>
					</div>
					<div class="col s12 event-date-card no-padding">
						<div class="event-date-card-calendar">
							<div class="event-date-card-month">
								<b>NOVIEMBRE</b>
							</div>
							<div class="event-date-card-number">
								<h3 class="mt-0 mb-0"><b>24</b></h3>
							</div>
						</div>
						<div class="event-date-details">
							<h5><b>MORELIA, MICHOACAN</b></h5>
							<p>CAFÉ DEL OLMO</p>
							<p>21:30 hrs.</p>
						</div>
						<a href="{{ route('eventos.selecciona-lugares', 'morelia') }}" class="btn waves-light mb-0 waves-effect red pull-right"><b>Comprar</b> <i class="fa fa-ticket" aria-hidden="true"></i></a>
					</div>
					<div class="col s12 event-date-card no-padding">
						<div class="event-date-card-calendar">
							<div class="event-date-card-month">
								<b>NOVIEMBRE</b>
							</div>
							<div class="event-date-card-number">
								<h3 class="mt-0 mb-0"><b>30</b></h3>
							</div>
						</div>
						<div class="event-date-details">
							<h5><b>TORREÓN, COAHUILA</b></h5>
							<p>LA BICICLETA</p>
							<p>21:30 hrs.</p>
						</div>
						<a href="{{ route('eventos.selecciona-lugares', 'torreon') }}" class="btn waves-light mb-0 waves-effect red pull-right"><b>Comprar</b> <i class="fa fa-ticket" aria-hidden="true"></i></a>
					</div>


					<h5 class="pl-30"><b>DICIEMBRE</b></h5>
					<div class="divider mb-30"></div>
					<div class="col s12 event-date-card no-padding">
						<div class="event-date-card-calendar">
							<div class="event-date-card-month">
								<b>DICIEMBRE</b>
							</div>
							<div class="event-date-card-number">
								<h3 class="mt-0 mb-0"><b>07</b></h3>
							</div>
						</div>
						<div class="event-date-details">
							<h5><b>QUERÉTARO</b></h5>
							<p>PORTÓN DE SANTIAGO</p>
							<p>21:30 hrs.</p>
						</div>
						<a href="{{ route('eventos.selecciona-lugares', 'queretaro') }}" class="btn waves-light mb-0 waves-effect red pull-right"><b>Comprar</b> <i class="fa fa-ticket" aria-hidden="true"></i></a>
					</div>
					
				</div>

			</div>
		</div>

		{{-- <div id="lugares" class="col s12 tab-content"></div> --}}

	</div>
</section>
<section class="section-video overlay overlay-5" style="background-image: url('https://img.youtube.com/vi/MWW2HxBFuZE/maxresdefault.jpg');">
	<div class="row center-align">
		<a class="white-text" id="modal-video-open" href="#modal-video" data-video="https://www.youtube.com/embed/MWW2HxBFuZE"><i class="material-icons">play_circle_filled</i></a>
		<p class="white-text"><i>Raquel Sofía - Sonrisa Vertical (Live)</i></p>
	</div>
</section>

<section id="compra" class="section-comprar mt-50 mb-50">
	
	
	<p class="center-align">Si tienes alguna duda sobre este evento no dudes en contactarnos</p>
	<div class="row center-align">
		<a href="{{ route('contacto') }}" class="btn waves-light waves-effect green center-align ls-1">CONTACTO</a>
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
		// $("#zoom_01").elevateZoom({
		// 	scrollZoom : true,
		// 	zoomType: "inner"
		// });
		new WOW().init();

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

	</script>

      <script async defer src="https://maps.googleapis.com/maps/api/js?key=AIzaSyBOOT9N6QdDeq0bnmSb1bw2SKw5CXQmOeA&callback=initMap"></script>
@endsection