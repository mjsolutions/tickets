@extends('layouts.main')

@section('title', 'Raquel Sofia Gira 2019')

@section('description', 'Raquel Sofia en su gira 2019, boletos en bolematico.com')

@section('styles')
<meta property="og:url"  content="https://www.bolematico.com/eventos/raquel-sofia" />
<meta property="og:title" content="Raquel Sofía gira 2019" />
<meta property="og:description" content="Raquel Sofía en su gira 2019, varias ciudades, boletos a tráves de bolemtico.com" />
<meta property="og:image" content="https://www.bolematico.com/img/raquel-sofia-2019.jpg" />
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
		display: flex;
		flex-flow: column wrap;
	}
	.event-date-card-month {
		width: 100%;
		background-color: #004040;
		text-align: center;
	    font-weight: 500;
	    padding: 3px 5px;
	}
	.event-date-card-number {
		width: 100%;
		flex: 1;
		background-color: #008080;
		display: flex;
		flex-flow: column wrap;
		align-items: center;
		justify-content: center;
	}
	.event-date-card-number h3 {
		line-height: 1;
		font-weight: 600;
	}
	.event-date-card-number small {
		font-size: 85%;
	}
	.event-date-details {
		position: relative;
		float: left;
		padding-top: 10px;
		padding-left: 15px;
	}
	.event-date-details h5 {
		margin-top: 0;
		margin-bottom: 0;
	}
	.event-date-details p {
		margin: 0;
	}
	.event-date-details p:first-of-type {
		color: #004040;
		font-weight: 500;
		opacity: 0.9;
	}
	.event-date-details p:last-child {
		display: inline-block;
		margin-top: 10px;
		font-weight: 500;
		background: #008080;
	    color: #fff;
	    padding: 1px 8px
	}
	.event-hr {
		padding:1px 0.5rem;
		margin-left: 0.5rem;
		border-left: 1px solid #999;
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
<script src="https://use.fontawesome.com/9b9c9dc667.js"></script>
@endsection

@section('content')

<div class="image-header overlay" style="background-attachment: initial; background-image: url('{{asset('img/raquel-banner.jpg')}}') ">

	<div class="row">
		<h4 class="wow flipInX" data-wow-delay="0.5s">Raquel Sofía</h4>
		<div class="divider wow fadeInLeft" data-wow-delay="0.8s" style="height: 2px; background-color: #0b529e;"></div>
		<p class="wow flipInX" data-wow-delay="0.5s"><i>Gira 2019</i></p>
	</div>
	{{-- <a href="#compra" class="btn waves-light waves-effect page-scroll"><b>Comprar</b> <i class="fa fa-ticket" aria-hidden="true"></i></a> --}}
</div>

<section class="container">
	<div class="row">
		<div class="col s12">
			<ul class="tabs">
				<li class="tab "><a class="active" href="#fechas">FECHAS</a></li>
				<li class="tab "><a href="#tour">SOBRE SOFIA</a></li>
				{{-- <li class="tab "><a href="#lugares">Boletos</a></li> --}}
			</ul>
		</div>
		<div id="tour" class="col s12 tab-content">
			{{-- <div class="row mb-50">
				<div class="col s12">
					<img src="{{ asset('img/roberto-tapia-banner.jpg') }}" alt="" class="responsive-img wow fadeIn">
				</div>
			</div> --}}
			<div class="row">
				<div class="col s12 m6 l8 wow fadeIn" data-wow-delay="0.5s">
					<div class="text-justify">
						<p>La nominada al GRAMMY latino <b>Raquel Sofia</b>, es el fenómeno indie que surgió en esta década. Antes de lanzar un álbum, ya había escrito y colaborado con algunos de los artistas más populares e influyentes del mercado latino, incluidos Shakira y Juanes. Las habilidades de Raquel Sofía se extienden más allá de su música.</p>
						<p>Ella habla y canta tres idiomas diferentes; Español, inglés y portugués. Se graduó de la reconocida Universidad de Miami Frost School of Music.</p>
						<p>En 2014, Raquel Sofia lanzó su NPR "Tiny Desk Concert" y también fue elegida como la primera artista latina en participar en el programa original de VEVO "Vevo DSCVR" y obtuvo más de 100,000 visitas en las primeras 2 semanas. El segundo sencillo de Raquel "Agridulce" ha recaudado más de 8.5 millones de transmisiones en Spotify. Agridulce también fue elegido como una de las mejores canciones de Beats Music "Best of 2014 Pop".</p>
						<p>Raquel Sofia escribió e interpretó en la cinta de videojuegos Game Of Thrones de HBO para 2015. En febrero de 2015, Raquel lanzó su primer EP "Te Odio Los Sábados" con su exitoso single "Te Amo Idiota", que obtuvo más de 9 millones de transmisiones en Spotify en 4 meses.</p>
					</div>
					<p>Sitio web Oficial: <a href="https://www.raquelsofia.com/" target="_blank">raquelsofia.com/</a></p>
				</div>

				<div class="col s12 m6 l4">
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
				<div class="col s10 offset-s1 m4 offset-m1">
					<img src="{{ asset('img/raquel-sofia-2019.jpg') }}" alt="" class="responsive-img wow fadeIn">
				</div>
				<div class="col m6 s12">
					<iframe width="100%" height="350" src="https://www.youtube.com/embed/R6uSvPrL9dg" frameborder="0" allow="accelerometer; autoplay; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
				</div>
				
				<div class="col s10 offset-s1">
					{{-- <h5 class="mt-0 mb-50 raleway quote"><B>FECHAS CONFIRMADAS</B> <br><small>¡No pierdas tu lugar y compra tus boletos ya!</small></h5> --}}

					<h5 class="pl-30"><b>OCTUBRE</b></h5>
					<div class="divider mb-30"></div>

					<div class="col s12 event-date-card no-padding">
						<div class="event-date-card-calendar">
							<div class="event-date-card-month">
								OCTUBRE 
							</div>
							<div class="event-date-card-number">
								<h3 class="mt-0 mb-0">31</h3>
								<small>Jueves</small>
							</div>
						</div>
						<div class="event-date-details">
							<h5><b>XALAPA, VERACRUZ</b></h5>
							<p>Café Tierra Luna<span class="event-hr">21:00 hrs</span></p>
							<p>$ 200 MXN</p>
						</div>
						<a href="{{ route('eventos.selecciona-lugares', 'xalapa') }}" class="btn waves-light mb-0 waves-effect red pull-right"><b>Comprar</b> <i class="fa fa-ticket" aria-hidden="true"></i></a>
					</div>

					<h5 class="pl-30"><b>NOVIEMBRE</b></h5>
					<div class="divider mb-30"></div>
					
					<div class="col s12 event-date-card no-padding">
						<div class="event-date-card-calendar">
							<div class="event-date-card-month">
								NOVIEMBRE 
							</div>
							<div class="event-date-card-number">
								<h3 class="mt-0 mb-0">01</h3>
								<small>Viernes</small>
							</div>
						</div>
						<div class="event-date-details">
							<h5><b>CORDOBA, VERACRUZ</b></h5>
							<p>Sabina Live Bar<span class="event-hr">21:00 hrs</span></p>
							<p>$ 200 MXN</p>
						</div>
						<a href="{{ route('eventos.selecciona-lugares', 'cordoba') }}" class="btn waves-light mb-0 waves-effect red pull-right"><b>Comprar</b> <i class="fa fa-ticket" aria-hidden="true"></i></a>
					</div>
					<div class="col s12 event-date-card no-padding">
						<div class="event-date-card-calendar">
							<div class="event-date-card-month">
								NOVIEMBRE 
							</div>
							<div class="event-date-card-number">
								<h3 class="mt-0 mb-0">02</h3>
								<small>Sábado</small>
							</div>
						</div>
						<div class="event-date-details">
							<h5><b>BOCA DEL RÍO, VERACRUZ</b></h5>
							<p>Foro Boca<span class="event-hr">21:00 hrs</span></p>
							<p></p>
						</div>
						{{-- <a href="{{ route('eventos.selecciona-lugares', 'boca') }}" class="btn waves-light mb-0 waves-effect red pull-right"><b>Comprar</b> <i class="fa fa-ticket" aria-hidden="true"></i></a> --}}
					</div>
					<div class="col s12 event-date-card no-padding">
						<div class="event-date-card-calendar">
							<div class="event-date-card-month">
								NOVIEMBRE 
							</div>
							<div class="event-date-card-number">
								<h3 class="mt-0 mb-0">21</h3>
								<small>Jueves</small>
							</div>
						</div>
						<div class="event-date-details">
							<h5><b>AGUASCALIENTES, AGS.</b></h5>
							<p>La Tercera<span class="event-hr">21:00 hrs</span></p>
							<p>$ 200 MXN</p>
						</div>
						<a href="{{ route('eventos.selecciona-lugares', 'ags') }}" class="btn waves-light mb-0 waves-effect red pull-right"><b>Comprar</b> <i class="fa fa-ticket" aria-hidden="true"></i></a>
					</div>
					<div class="col s12 event-date-card no-padding">
						<div class="event-date-card-calendar">
							<div class="event-date-card-month">
								NOVIEMBRE 
							</div>
							<div class="event-date-card-number">
								<h3 class="mt-0 mb-0">22</h3>
								<small>Viernes</small>
							</div>
						</div>
						<div class="event-date-details">
							<h5><b>CELAYA, GTO.</b></h5>
							<p>BLVD 804<span class="event-hr">21:00 hrs</span></p>
							<p>$ 200 MXN</p>
						</div>
						<a href="{{ route('eventos.selecciona-lugares', 'celaya') }}" class="btn waves-light mb-0 waves-effect red pull-right"><b>Comprar</b> <i class="fa fa-ticket" aria-hidden="true"></i></a>
					</div>
					<div class="col s12 event-date-card no-padding">
						<div class="event-date-card-calendar">
							<div class="event-date-card-month">
								NOVIEMBRE 
							</div>
							<div class="event-date-card-number">
								<h3 class="mt-0 mb-0">23</h3>
								<small>Sábado</small>
							</div>
						</div>
						<div class="event-date-details">
							<h5><b>MORELIA, MICH.</b></h5>
							<p>Café del Olmo<span class="event-hr">21:00 hrs</span></p>
							<p>$ 200 MXN</p>
						</div>
						<a href="{{ route('eventos.selecciona-lugares', 'morelia') }}" class="btn waves-light mb-0 waves-effect red pull-right"><b>Comprar</b> <i class="fa fa-ticket" aria-hidden="true"></i></a>
					</div>

					<h5 class="pl-30"><b>DICIEMBRE</b></h5>
					<div class="divider mb-30"></div>
					
					<div class="col s12 event-date-card no-padding">
						<div class="event-date-card-calendar">
							<div class="event-date-card-month">
								DICIEMBRE 
							</div>
							<div class="event-date-card-number">
								<h3 class="mt-0 mb-0">06</h3>
								<small>Viernes</small>
							</div>
						</div>
						<div class="event-date-details">
							<h5><b>QUERETARO, QRO.</b></h5>
							<p>El Portón de Santiago<span class="event-hr">21:00 hrs</span></p>
							<p>$ 200 MXN</p>
						</div>
						<a href="{{ route('eventos.selecciona-lugares', 'queretaro') }}" class="btn waves-light mb-0 waves-effect red pull-right"><b>Comprar</b> <i class="fa fa-ticket" aria-hidden="true"></i></a>
					</div>				

				</div>

			</div>
		</div>

		{{-- <div id="lugares" class="col s12 tab-content"></div> --}}

	</div>
</section>
{{-- <section class="section-video overlay overlay-5" style="background-image: url('https://img.youtube.com/vi/R6uSvPrL9dg/maxresdefault.jpg');">
	<div class="row center-align">
		<a class="white-text" id="modal-video-open" href="#modal-video" data-video="https://www.youtube.com/embed/R6uSvPrL9dg"><i class="material-icons">play_circle_filled</i></a>
		<p class="white-text"><i>Raquel Sofía, PJ Sin Suela - A Las Rocas</i></p>
	</div>
</section> --}}

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

      {{-- <script async defer src="https://maps.googleapis.com/maps/api/js?key=AIzaSyBOOT9N6QdDeq0bnmSb1bw2SKw5CXQmOeA&callback=initMap"></script> --}}
@endsection