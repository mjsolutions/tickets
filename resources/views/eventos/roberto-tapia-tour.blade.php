@extends('layouts.main')

@section('title', 'Roberto Tapia Tour 2019')

@section('description', 'Roberto Tapia en Tour 2019, 31 de agosto y 01 de Septiembre, 9:30 pm boletos en RS Viajes centro, bolematico.mx y taquillas del planetario de Tour 2019')

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

<div class="image-header bg-roberto-tapia overlay" style="background-attachment: initial;">

	{{-- <div class="row">
		<h4 class="wow flipInX" data-wow-delay="0.5s">Roberto Tapia</h4>
		<div class="divider wow fadeInLeft" data-wow-delay="0.8s" style="height: 2px; background-color: #0b529e;"></div>
		<p class="wow flipInX" data-wow-delay="0.5s"><i>Tour 2018</i></p>
	</div> --}}
	{{-- <a href="#compra" class="btn waves-light waves-effect page-scroll"><b>Comprar</b> <i class="fa fa-ticket" aria-hidden="true"></i></a> --}}
</div>

<section class="container">
	<div class="row">
		<div class="col s12">
			<ul class="tabs">
				<li class="tab "><a class="active" href="#tour">TOUR 2018</a></li>
				<li class="tab "><a href="#fechas">FECHAS</a></li>
				{{-- <li class="tab "><a href="#lugares">Boletos</a></li> --}}
			</ul>
		</div>
		<div id="tour" class="col s12 tab-content">
			<div class="row mb-50">
				<div class="col s12">
					<img src="{{ asset('img/roberto-tapia-banner.jpg') }}" alt="" class="responsive-img wow fadeIn">
				</div>
			</div>
			<div class="row">
				<div class="col s12 m9 wow fadeIn" data-wow-delay="0.5s">
					<h4 class="mt-0 mb-30 raleway quote">BIOGRAFIA</h4>
					<div class="text-justify">
						<p>Nacido en San Diego y criado en Culiacán, hoy por hoy se ha destacado como uno de los intérpretes de música norteña y de banda con un estilo muy especial convirtiéndose en uno de los exponentes del género más cotizados no sólo en México y Estados Unidos.</p>
						<p>Desde que comenzó su carrera artística, piso con pie derecho los escenarios de México y Estados Unidos para complacer y deleitar a un público muy exigente que  hoy por hoy lo ha llevado a ser uno de los artistas más cotizados en el mundo del entretenimiento, por tener un estilo muy especial para interpretar sus canciones.</p>
						<p>En su album "Mi Niña" por primera vez grabó boleros y banda con un toque internacional, lleno de romance y de desamor, sobre las experiencias que ha tenido el cantante. Esta producción discográfica se produjo bajo el sello Universal Music Latino/Fonovisa. “Mi Niña” cuenta con un total de 13 temas: “El Dolor”, “Mi Consentida”, “El Juego”, “El Compadre”, “No Sentí Nada”,  “Mi Niña”, “Esta Vez Me Canse”, “La Cosecha Del Chapo”, “Después De Ti”, “El Desamor”, “El Moreno”, “El Amor Duele”, “Loco” un tema con la colaboración de Enrique Iglesias y Romeo Santos. También hizo un dueto con Prince Roy para cantar “Soy el Mismo”.</p>
						<p>A esto se le suma su exitosa participación como juez en el programa La Voz Kids, donde vivió una experiencia única aprendiendo con los niños más que como juez, como instructor. “Soy un coach que ayudo a los niños a realizar sus sueños”  y que estará también en la segunda temporada de este programa que es uno de los más vistos en Estados Unidos.</p>
					</div>
					<p>Sitio web Oficial: <a href="http://www.universalmusica.com/robertotapia/" target="_blank">www.universalmusica.com/robertotapia/</a></p>
				</div>

				<div class="col s12 m3">
					<img src="{{ asset('img/roberto-tapia-bio-2.jpg') }}" class="responsive-img materialboxed wow fadeInRight" data-wow-delay="0.5s">
					<div class="flex">
						<a href="https://www.facebook.com/RobertoTapiaMusic" target="_blank"><i class="fa fa-facebook" aria-hidden="true"></i></a>
						<a href="https://www.instagram.com/robertotapia/" target="_blank"><i class="fa fa-instagram" aria-hidden="true"></i></a>
						<a href="https://twitter.com/roberto__tapia" target="_blank"><i class="fa fa-twitter" aria-hidden="true"></i></a>
						<a href="https://www.youtube.com/user/RobertoTapiaVEVO" target="_blank"><i class="fa fa-youtube" aria-hidden="true"></i></a>
					</div>
				</div>
				<div class="clearfix"></div>
			</div>
			
		</div>

		<div id="fechas" class="col s12 tab-content">
			<div class="row">
				
				<div class="col s10 offset-s1">
					<h5 class="mt-0 mb-50 raleway quote"><B>FECHAS CONFIRMADAS</B> <br><small>¡No pierdas tu lugar y compra tus boletos ya!</small></h5>

					<h5 class="pl-30"><b>JUNIO</b></h5>
					<div class="divider mb-30"></div>
					<div class="col s12 event-date-card no-padding">
						<div class="event-date-card-calendar">
							<div class="event-date-card-month">
								<b>JUNIO</b>
							</div>
							<div class="event-date-card-number">
								<h3 class="mt-0 mb-0"><b>01</b></h3>
							</div>
						</div>
						<div class="event-date-details">
							<h5><b>LOUISVILLE KENTUCKY</b></h5>
							<p>COCONUT BEACH</p>
							<p>21:00 hrs.</p>
						</div>
						<a href="#!" class="btn waves-light mb-0 waves-effect red pull-right"><b>Comprar</b> <i class="fa fa-ticket" aria-hidden="true"></i></a>
					</div>

					<div class="col s12 event-date-card no-padding">
						<div class="event-date-card-calendar">
							<div class="event-date-card-month">
								<b>JUNIO</b>
							</div>
							<div class="event-date-card-number">
								<h3 class="mt-0 mb-0"><b>03</b></h3>
							</div>
						</div>
						<div class="event-date-details">
							<h5><b>COLUMBUS OHIO</b></h5>
							<p>CLUB LA BOOM</p>
							<p>21:00 hrs.</p>
						</div>
						<a href="#!" class="btn waves-light mb-0 waves-effect red pull-right"><b>Comprar</b> <i class="fa fa-ticket" aria-hidden="true"></i></a>
					</div>
					<div class="col s12 event-date-card no-padding">
						<div class="event-date-card-calendar">
							<div class="event-date-card-month">
								<b>JUNIO</b>
							</div>
							<div class="event-date-card-number">
								<h3 class="mt-0 mb-0"><b>08</b></h3>
							</div>
						</div>
						<div class="event-date-details">
							<h5><b>PASSAIC NEW JERSEY</b></h5>
							<p>LA FIESTA NIGHT CLUB</p>
							<p>21:00 hrs.</p>
						</div>
						<a href="#!" class="btn waves-light mb-0 waves-effect red pull-right"><b>Comprar</b> <i class="fa fa-ticket" aria-hidden="true"></i></a>
					</div>
					<h5 class="pl-30"><b>JULIO</b></h5>
					<div class="divider mb-30"></div>
					<div class="col s12 event-date-card no-padding">
						<div class="event-date-card-calendar">
							<div class="event-date-card-month">
								<b>JULIO</b>
							</div>
							<div class="event-date-card-number">
								<h3 class="mt-0 mb-0"><b>27</b></h3>
							</div>
						</div>
						<div class="event-date-details">
							<h5><b>URUAPAN MICHOACAN</b> <small>feat. Alta Consigna</small></h5>
							<p>PLAZA DE TOROS LA MACARENA</p>
							<p>21:00 hrs.</p>
						</div>
						<a href="#!" class="btn waves-light mb-0 waves-effect red pull-right"><b>Comprar</b> <i class="fa fa-ticket" aria-hidden="true"></i></a>
					</div>
					
				</div>

			</div>
		</div>

		{{-- <div id="lugares" class="col s12 tab-content"></div> --}}

	</div>
</section>
<section class="section-video overlay overlay-5" style="background-image: url('https://img.youtube.com/vi/zqNKaVWYYeg/maxresdefault.jpg');">
	<div class="row center-align">
		<a class="white-text" id="modal-video-open" href="#modal-video" data-video="https://www.youtube.com/embed/zqNKaVWYYeg"><i class="material-icons">play_circle_filled</i></a>
		<p class="white-text"><i>Roberto Tapia - No valoraste</i></p>
	</div>
</section>

<section id="compra" class="section-comprar
	
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