@extends('layouts.main')

@section('title', 'Slobotzky y Ricardo Pérez')

@section('description', 'Slobotzky y Ricardo Pérez, Córdoba 28 de abril, Sabina Live Bar, 21:30 hrs boletos en Sabina Live Bar y bolematico.com')

@section('styles')
<meta property="og:url"  content="http://bolematico.mx/eventos/slobotzky-y-ricardo-perez-cordoba" />
<meta property="og:title" content="Slobotzky y Ricardo Pérez" />
<meta property="og:description" content="Slobotzky y Ricardo Pérez, Córdoba 28 de abril, Sabina Live Bar, 21:30 hrs boletos en Sabina Live Bar y bolematico.com" />
<meta property="og:image" content="http://bolematico.mx/img/syr-cordoba.jpg" />

<script src="https://use.fontawesome.com/9b9c9dc667.js"></script>
@endsection

@section('content')

<div class="image-header bg-4 overlay overlay-5">

	<div class="row white-text">
		<h4>Slobotzky y Ricardo Pérez</h4>
		<div class="divider"></div>
		<p class="mb-0"><i>Sabina Live Bar - Córdoba</i></p>
		<p class="m-0"><i>28 de abril - 21:30 hrs.</i></p>
	</div>
	<a href="#compra" class="btn waves-light waves-effect page-scroll"><b>Comprar</b> <i class="fa fa-ticket" aria-hidden="true"></i></a>
</div>

<section class="container">
	<div class="row">
		<div class="col s12">
			<ul class="tabs">
				<li class="tab "><a class="active" href="#precios">Precios</a></li>
				<li class="tab "><a href="#detalles">Detalles</a></li>
				<li class="tab "><a href="#lugares">Lugares de venta</a></li>
			</ul>
		</div>
		<div id="precios" class="col s12 tab-content">

			<div class="col s8 offset-s2 m8 offset-m2 mb-30 card-flyer">
				<img src="{{ asset('img/syr-cordoba-banner.jpg') }}" alt="" class="responsive-img">
			</div>
			
			<div class="col s12 m10 offset-m1">				

				<div class="row">

					<div class="qcPricing col s12 m6 center-align mb-10">
						<div class="box col s12">
							<header>
								<div class="col s12 teal accent-4">Preventa</div>
							</header>
							<div class="price col s12"><span>$ 200.00</span> MXN.</div>
						</div>
					</div>

					<div class="qcPricing col s12 m6 center-align mb-10">
						<div class="box col s12">
							<header>
								<div class="col s12 blue darken-4">Taquilla</div>
							</header>
							<div class="price col s12"><span>$ 250.00</span> MXN.</div>
						</div>
					</div>

				</div>

				<div class="row">
					<div class="divider"></div>
					<p class="center-align mt-30">Al realizar tu compra en línea se realiza un cargo extra de <b>10%</b> por concepto de servicio.</p>
				</div>
			</div>
		</div>

		<div id="detalles" class="col s12 tab-content">
			<div class="col s12">
				<h5 class="raleway quote">Solobotzky</h5>
			</div>
			<div class="col s8 offset-s2 hide-on-med-and-up">
				<img src="{{ asset('img/slobotzky-bio.jpg') }}" class="responsive-img">
			</div>
			<div class="col s12 m7">
				<p>Anécdotas que terminan en carcajadas, historias que conectan, sin filtros, así es la comedia de <a rel="nofollow" target="_blank" href="https://www.facebook.com/SlobotzkyStandUp/">Slobotzky</a>, el comediante que nació de la ya extinta plataforma “Vine” y ahora conquista los escenarios del país.</p>
				<p>La escuela no se le dio, pero aún así, la terminó, menciona dentro de su presentación, razón que lo orilló a definir en qué realmente era bueno. Abogado de profesión, José Luis “Slobotzky”, su nombre de pila, descubrió seis meses después de terminar la carrera que lo suyo era hacer reír.</p>
				<p>Fue Vine, la plataforma de “moda” del 2013, quien le abriera las puertas mediante pequeños videos para compartir sus chistes. Estaba destinado, siempre fue el chistoso de sus amigos y de su familia. Con los videos llegó la popularidad, los seguidores aumentaron en miles en cuestión de semanas. El siguiente paso se le abrió cuando <em>Gon Curiel</em>, un reconocido standupero de México, lo invitó a sumarse al mundo del “Stand Up” por parecerle "chistoso". Había llegado la hora de romper la barrera de las redes sociales y enfrentarse al público cara a cara.</p>
				<p>Desde entonces alterna con sus pequeños videos que sube en su página de Facebook con las presentaciones de su espectáculo que ha llevado a distintas ciudades del país dejando una semilla para ganar impulso y popularidad.</p>
				
			</div>
			<div class="col m5 hide-on-small-only">
				<img src="{{ asset('img/slobotzky-bio.jpg') }}" class="responsive-img">
			</div>
			<div class="col s10 offset-s1">
				<div class="divider"></div>
			</div>
			<div class="clearfix"></div>
			<div class="col s12">
				<h5 class="raleway quote">Ricardo Pérez</h5>	
			</div>
			<div class="col s12 m4">
				<img src="{{ asset('img/ricardo-perez-bio.jpg') }}" class="responsive-img">
			</div>
			<div class="col s12 m8">
				<p><strong>Ricardo Pérez</strong> es un comediante joven y fresco en la escenaadel stand up mexicano.</p>
				<p>Su humor se caracteriza por exponer aquellos temas que te hacen decir "me ha pasado, lo había pensado, pero nunca lo dije". Todas esas locuras y absurdos que te adentran en el parque de diversiones que tiene dentro de su cabeza.</p>
				<p>Se ha destacado como un talento que ha ascendido rápidamente en la escena. Ha grabado para <em>STANDparados</em> de Distrito Comedia y <em>Comedy Central presenta: Stand Up</em> dos veces. Su show le ha dado la vuelta a la toda la república y un par de paradas en el extranjero.</p>
				<p>La carrera de Ricardo lo ha llevado a tocar todo tipo de escenarios: desde trajineras y taquerías hasta el Auditorio Nacional y el <em>Festival Internacional Vive Latino</em>.</p>
			</div>

		</div>

		<div id="lugares" class="col s12 tab-content">

			<div class="col s12">
				<h5 class="mb-30 quote">Además de Bolematico, puedes adquirir tus entradas en:</h5>
			</div>

			<div class="col s12">									
				<!-- ## VENUE MAP ## -->
				<div class="white z-depth-2">
					<iframe src="https://www.google.com/maps/embed?pb=!1m14!1m8!1m3!1d5338.412940439878!2d-96.93454712844971!3d18.894710540735904!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x0%3A0x2982c742ee38da54!2sSabina+Live+Bar!5e0!3m2!1ses!2smx!4v1555721222925!5m2!1ses!2smx" width="100%" height="450" frameborder="0" style="border:0" allowfullscreen></iframe>
				
				<!-- ## ADDRESS LIST ## -->
					<div class=" p-30">
						<h5><b>Sabina Live Bar</b></h5>
						<ul class="qcAddress">
							<li><div class="divider"></div></li>
							<li><i class="fa fa-map-marker"></i> <strong>DIRECCIÓN</strong>: <p>Av. 4 Esquina Calle 1 Centro, Córdoba, Ver.</p></li>
							<li><i class="fa fa-phone"></i> <strong>TELÉFONO</strong>: <p> 01 443 312 4639</p></li>
							<li><i class="fa fa-calendar"></i> <strong>HORARIO</strong>: <p>6:30pm a 3:00am. Miércoles a Sabado</p></li>
							<li><i class="fa fa-globe"></i> <strong>Website</strong>: <p><a title="website" href="https://www.facebook.com/sabinalivebar/" target="_blank">facebook.com/sabinalivebar/</a></p></li>
						</ul>
					</div>
				</div>

			</div>	

		</div>

	</div>
</section>
<section class="section-video overlay overlay-5" style="background-image: url('https://img.youtube.com/vi/D2qTCgONgNM/maxresdefault.jpg');">
	<div class="row center-align">
		<a class="white-text" id="modal-video-open" href="#modal-video" data-video="https://www.youtube.com/embed/D2qTCgONgNM"><i class="material-icons">play_circle_filled</i></a>
		<p class="white-text"><i>Slobotzky | Stand Up | Comedy Central México</i></p>
	</div>
</section>

<section id="compra" class="section-comprar">
	<div class="row mb-30">
		<div class="col s12 m4 offset-m4">
			<h5 class="mt-30 raleway quote">Selecciona los lugares para tu evento. <br><small>(Preventa)</small></h5>
		</div>
	</div>
	<div class="row mt-30">
	@if(Auth()->check())
	<div class="col s12 m4 offset-m4">
				
		{!! Form::open(['route' => 'payment.details', 'method' => 'POST', 'id' => 'paymentForm'])!!}
	
		<div class="row">
			<div class="input-field col s12">
				{!! Form::select('asiento', ['1' => '1', '2' => '2', '3' => '3', '4' => '4', '5' => '5', '6' => '6', '7' => '7', '8' => '8', '9' => '9', '10' => '10'], '', ['class' => 'select-dropdown', 'id' => 'asiento', 'placeholder' => 'Seleccione numero de asientos', 'required']) !!}
				{!! Form::label('asiento', 'Asientos') !!}
			</div>					
		
		</div>
	
		{!! Form::hidden('img', 'img/syr-cordoba.jpg') !!}
		{!! Form::hidden('evento', 'Slobotzky y Ricardo Pérez') !!}
		{!! Form::hidden('fecha', '28 de abril 2019') !!}
		{!! Form::hidden('lugar', 'Sabina Live Bar') !!}
		{!! Form::hidden('ciudad', 'Córdoba, Ver.') !!}
		{!! Form::hidden('hora', '21:30 hrs') !!}
		{!! Form::hidden('event_type', 'general') !!}
		{!! Form::hidden('impresion_boleto', true) !!}
		{!! Form::hidden('zona', 'Preventa') !!}
		{!! Form::hidden('db_table', 'syr_cordoba_28abr') !!}
		{!! Form::hidden('info', 'Favor de comunicarte al numero 271 110 6884 para completar tu reservación.') !!}
		{!! Form::hidden('precio', '200') !!}
		{!! Form::hidden('url', url('eventos/slobotzky-y-ricardo-perez-cordoba')) !!}
		
		<div class="input-field center-align">
			{!! Form::submit('Siguiente',['class'=>'btn waves-effect waves-light orange accent-3']) !!}
		</div>	
		
		{!! Form::close() !!}
		
	</div>
	<div class="clearfix"></div>
	@else

		<p class="center-align raleway">Debes iniciar sesion para poder realizar la compra</p>
		<div class="col s12 center-align">
			<a href="#modal-login" class="modal-login-open btn waves-light orange accent-3">Login</a>
		</div>
	@endif
	</div>
	<div class="row mt-30">
		<div class="col m8 offset-m2">
			<h5 class="center-align raleway">Venta de boletos Sabina Live Bar</h5>
			<div class="row">
				<div class="col s6 offset-s3 mt-30">
					<div class="divider"></div>
				</div>
			</div>
			<p class="center-align">Si tienes alguna duda sobre este evento no dudes en contactarnos</p>
			<div class="row center-align">
				<a href="{{ route('contacto') }}" class="btn waves-light waves-effect green center-align ls-1">CONTACTO</a>
			</div>
		</div>
	</div>
</section>

<section class="section-lugar">
	<div id="map"></div>
		
	<div class="info-lugar">
		<h5 class="raleway quote mb-30">Lugar del evento</h5>
		<div class="divider mb-30"></div>
		<p><b>Sabina Live Bar</b></p>
		<p><i class="material-icons">location_on</i>Av. 4 Esquina Calle 1 Centro, Córdoba, Ver.</p>
		<p><i class="material-icons">call</i> 01 271 710 5159</p>
		<p><i class="material-icons">language</i> <a title="website" href="https://www.facebook.com/sabinalivebar/" target="_blank">facebook.com/sabinalivebar/</a></p>
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
		        var uluru = {lat: 18.8955705, lng: -96.9339251};
		        var map = new google.maps.Map(document.getElementById('map'), {
		          zoom: 17,
		          scrollwheel: false,
		          navigationControl: true,
		          draggable: true,
		          center: {lat: 18.8955705, lng: -96.9335251}
		        });
		        var marker = new google.maps.Marker({
		          position: uluru,
		          map: map
		        });
		      }

	</script>

    <script async defer src="https://maps.googleapis.com/maps/api/js?key=AIzaSyBOOT9N6QdDeq0bnmSb1bw2SKw5CXQmOeA&callback=initMap"></script>
@endsection