@extends('layouts.main')

@section('title', 'José Luis Zagar, Ojitos de Huevo y Pipirin')

@section('description', 'José Luis Zagar, Ojitos de Huevo y Pipirin, Morelia 28 de noviembre, 21:00 hrs Auditorio Samuel Ramos, boletos en bolematico.com')

@section('styles')
<meta property="og:url"  content="https://www.bolematico.com/eventos/zagar-ojitos-pipirin-morelia" />
<meta property="og:title" content="José Luis Zagar, Ojitos de Huevo y Pipirin" />
<meta property="og:description" content="José Luis Zagar, Ojitos de Huevo y Pipirin, Morelia 28 de noviembre, 21:00 hrs Auditorio Samuel Ramos, boletos en bolematico.com" />
<meta property="og:image" content="https://www.bolematico.com/img/zagar-ojitos-pipirin-morelia.jpg" />

<script src="https://use.fontawesome.com/9b9c9dc667.js"></script>
<link rel="stylesheet" type="text/css" href="{{ asset('css/event-select-manual.css') }}">
@endsection

@section('content')

<div class="image-header bg-4 overlay overlay-5">

	<div class="row white-text">
		<h4>José Luis Zagar, Ojitos de Huevo y Pipirin</h4>
		<div class="divider"></div>
		<p class="mb-0"><i>Auditorio Samuel Ramos - Morelia</i></p>
		<p class="m-0"><i>28 de noviembre - 21:00 hrs.</i></p>
	</div>
	<a href="#compra" class="btn waves-light waves-effect page-scroll"><b>Comprar</b> <i class="fa fa-ticket" aria-hidden="true"></i></a>
</div>

<section class="container">
	<div class="row">
		<div class="col s12">
			<ul class="tabs">
				<li class="tab "><a class="active" href="#precios">Precios</a></li>
				<li class="tab "><a href="#detalles">Detalles</a></li>
				{{-- <li class="tab "><a href="#lugares">Lugares de venta</a></li> --}}
			</ul>
		</div>
		<div id="precios" class="col s12 tab-content">

			<div class="col s8 offset-s2 m3 offset-m1 mb-30 card-flyer">
				<img src="{{ asset('img/zagar-ojitos-pipirin-morelia.jpg') }}" alt="" class="responsive-img">
			</div>
			
			<div class="col s12 m6 offset-m1">				

				<div class="row">

					<div class="qcPricing col s12 center-align mb-10">
						<div class="box col s12">
							<header>
								<div class="col s12 teal accent-4">Diamante</div>
							</header>
							<div class="price col s12"><span>$750</span> MXN</div>
						</div>
					</div>

					<div class="qcPricing col s12 center-align mb-10">
						<div class="box col s12">
							<header>
								<div class="col s12 amber darken-1">Oro</div>
							</header>
							<div class="price col s12"><span>$600</span> MXN</div>
						</div>
					</div>

					<div class="qcPricing col s12 center-align mb-10">
						<div class="box col s12">
							<header>
								<div class="col s12 grey">Plata</div>
							</header>
							<div class="price col s12"><span>$400</span> MXN</div>
						</div>
					</div>

				</div>

				<div class="row">
					<div class="divider"></div>
					<div class="col s10 offset-s1">
						<p>* Al realizar tu compra en línea se realiza un cargo extra de <b>10%</b> por concepto de servicio.</p>
						{{-- <p>* Informes:<a href="tel:9384058424" style="background: #4caf50; color: #fff; padding: 5px 10px;"> 938-405-8424</a> / <a href="tel:4521741255" style="background: #4caf50; color: #fff; padding: 5px 10px;"> 452-174-1255</a></p> --}}
					</div>
				</div>
			</div>
		</div>

		<div id="detalles" class="col s12 tab-content">
			<div class="col s8 offset-s2 hide-on-med-and-up">
				<img src="{{ asset('img/zagar-bio.jpg') }}" class="responsive-img">
			</div>
			<div class="col s12 m9">
				<h5 class="raleway quote">José Luis Zagar</h5>
				<p>José Luis comenzó su carrera de comediante en El Unicornio Azul en el año 2001, posteriormente se fue a Hermosillo, Sonora al bar “El Rincón de Venancio cómo telonero de muchos comediantes que iban de Monterrey, Guadalajara y CDMX. Dos años después, regresó a Monterrey y se convirtió en el comediante favorito del público.</p>
				<p>Dio la vuelta a la república Mexicana en eventos privados y ha trabajado con personalidades como Polo Polo, El Norteño, Platanito, Teo Gonzalez, Jorge Falcón, Adal Ramones, Omar Chaparro y muchos más en diversos programas de Televisión, entre los que se destacan Stand Parados, Sabadazo, Noches de Humor, Comedy Central y en centros de espectáculo diverso.</p>
				
			</div>
			<div class="col m3 hide-on-small-only">
				<img src="{{ asset('img/zagar-bio.jpg') }}" class="responsive-img">
			</div>
			<div class="col s10 offset-s1 mb-30 mt-30">
				<div class="divider"></div>
			</div>
			<div class="clearfix"></div>
			<div class="col s12 m3">
				<img src="{{ asset('img/alexis-bio.jpg') }}" class="responsive-img">
			</div>
			<div class="col s12 m9">
				<h5 class="raleway quote">Alexis Ojitos de Huevo</h5>	
				<p>Su nombre es Alexis Arroyo nació ciego hace 24 años en Querétaro. Es periodista, escritor y comediante de Stand Up y ha demostrado ser un gran talento sobre el escenario.</p>
				<p>Desde niño se interesó por la comedia, a los seis años escuchaba canciones de comedia y admiraba a la gente que se dedicaba hacer reír como Polo Polo. Siempre le gustó la idea de ser el centro de atención y divertir a la gente; además le gusta cantar y el teatro.</p>
		        <p>Empezó en el mundo del Stand Up, luego de acompañar a un amigo que en aquél momento era DJ de un bar, le dijeron que podía subir al escenario como aficionado y lo hizo. Desde entonces no ha soltado el micrófono y posteriormente tuvo su primera aparición en televisión, de ahí surgieron los primeros shows.</p>
		        <p>Una de las personas que apoyó a Alexis para iniciar como Standopero fue Hugo Alberto Pérez Acevedo, el Cojo Feliz.</p>
		        <p>Ha destacado por hacer reír al público en 'Beer Hall' un bar de la Condesa donde tienen lugar los tradicionales ?Open Mic?, sesiones en las que los comediantes acuden a probar material nuevo delante del público.</p>
		        <p>En 2015 participó en el  canal de televisión Comedy Central y recientemente fue ganador del 'Stand wars' de Telehit 2017, lo cual lo hizo merecedor de un programa especial transmitido a todo Hispanoamérica.</p>
		        <p>Fuera del escenario Alexis Arroyo es activista a favor de la inclusión de personas con discapacidades y hace llegar su trabajo a través de su canal en YouTube.</p>
			</div>
			<div class="clearfix"></div>
			
		</div>

		{{-- <div id="lugares" class="col s12 tab-content">
			<div class="col s12">
				<h5 class="mb-30 quote">Además de Bolematico, puedes adquirir tus entradas a partir del 11 de noviembre en:</h5>
			</div>

			<div class="col s12">									

				<div class="white z-depth-2">
					<iframe src="https://www.google.com/maps/embed?pb=!1m14!1m8!1m3!1d6448.512575066592!2d-101.28772724569168!3d20.98649735190443!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x0%3A0x61d07a9dcfdb8f85!2sHoliday+Inn+Express+Guanajuato!5e0!3m2!1ses!2smx!4v1557692075875!5m2!1ses!2smx" width="100%" height="450" frameborder="0" style="border:0" allowfullscreen></iframe>
				
					<div class=" p-30">
						<h5 class="raleway"><b>Holiday Inn Express</b></h5>
						<ul class="qcAddress">
							<li><div class="divider"></div></li>
							<li><i class="fa fa-map-marker"></i> <p> Carr. Guanajuato - Juventino Rosas 120, Burocrata, 36250 Guanajuato, Gto.</p></li>
							<li><i class="fa fa-phone"></i><p> 01 473 735 2000</p></li>
							<li><i class="fa fa-facebook-official"></i><p><a title="website" href="https://www.ihg.com/holidayinnexpress/hotels/us/en/guanajuato/bjxgc/hoteldetail" target="_blank">https://www.ihg.com/holidayinnexpress/hotels/us/en/guanajuato/bjxgc/hoteldetail</a></p></li>
						</ul>
					</div>
				</div>

			</div>			

		</div> --}}

	</div>
</section>
<section class="section-video overlay overlay-5" style="background-image: url('https://img.youtube.com/vi/0mOj3wbNL9o/maxresdefault.jpg');">
	<div class="row center-align">
		<a class="white-text" id="modal-video-open" href="#modal-video" data-video="https://www.youtube.com/embed/0mOj3wbNL9o"><i class="material-icons">play_circle_filled</i></a>
		<p class="white-text"><i>José Luis Zagar - Halloween</i></p>
	</div>
</section>

<section id="compra" class="section-comprar">
	<div class="row mt-30">
	@if(Auth()->check())
		<div class="col s12 mb-15">
			<h5 class="mt-30 raleway quote">Da clic en el bloque que deseas para mostrar los asientos disponibles</h5>
		</div>
		<div class="col s12 m6 white div-border" id="svg-container" style="padding-top:10px;">
				@include('maps.samuel-ramos')
			</div>
		<div class="col s12 m6">
			<div class="col s12 mb-15">
				<div class="col s1 grey darken-4" style="height: 25px;"></div>
				<div class="col s11">
					<div class="col s5">Escenario</div>
					<div class="col s7 right-align" id="info-title-section"></div>
				</div>
			</div>
			<div class="col s11 bloque-container">
				
				<div id="mapa-escenario" class=""></div>
				<div id="mapa-asientos" class="col s12"></div>
			</div>
			<div class="col s12 mt-15">
				<p id="ticket-message"></p>
			</div>
			<div class="col s12 center-align mt-15">
				<a href="javascript:;" id="checkout" class="btn waves-effect waves-light orange accent-3 hide">SIGUIENTE</a>
				{!! Form::open(['route'=>'payment.details', 'method'=>'POST', 'id' => 'checkout-form', 'style' => 'display:none;']) !!}

					{!! Form::hidden('asiento', '', ['id' => 'form_asiento']) !!}
					{!! Form::hidden('zona', '', ['id' => 'form_zona']) !!}
					{!! Form::hidden('precio', '', ['id' => 'form_precio']) !!}
					{!! Form::hidden('img', 'img/zagar-ojitos-pipirin-morelia.jpg') !!}
					{!! Form::hidden('evento', 'Zagar, Ojitos de huevo y Pipirin') !!}
					{!! Form::hidden('fecha', '28 de noviembre 2019') !!}
					{!! Form::hidden('lugar', 'Auditorio Samuel Ramos') !!}
					{!! Form::hidden('ciudad', 'Morelia, Mich.') !!}
					{!! Form::hidden('hora', '21:00 hrs') !!}
					{!! Form::hidden('event_type', '', ['id' => 'form_type']) !!}
					{!! Form::hidden('impresion_boleto', true) !!}
					{!! Form::hidden('db_table', 'zagar_morelia_28nov') !!}
					{!! Form::hidden('info', '--') !!}
					{!! Form::hidden('select_type', 'manual') !!}
					{!! Form::hidden('url', url('eventos/zagar-ojitos-pipirin-morelia')) !!}
				{!! Form::close() !!}
			</div>
		</div>	

	@else
		<p class="center-align raleway">Debes iniciar sesion para poder realizar la compra</p>
		<div class="col s12 center-align">
			<a href="#modal-login" class="modal-login-open btn waves-light orange accent-3">Login</a>
		</div>
	@endif
	</div>
	<div class="row mt-30">
		<div class="col m8 offset-m2 center-align">
			<p>Si tienes alguna duda sobre este evento no dudes en contactarnos</p>
			<div class="row">
				<a href="{{ route('contacto') }}" class="btn waves-light waves-effect green center-align ls-1">CONTACTO</a>
			</div>
		</div>
	</div>
</section>

<section class="section-lugar">
	<div class="row">
		<div class="col m9">
			<iframe src="https://www.google.com/maps/embed?pb=!1m14!1m8!1m3!1d15025.178790933667!2d-101.177231!3d19.7000737!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x0%3A0xc8917239218e626f!2sAuditorio%20Universitario%20Dr.%20Samuel%20Ramos!5e0!3m2!1ses!2smx!4v1572578547609!5m2!1ses!2smx" width="100%" height="450" frameborder="0" style="border:0;" allowfullscreen=""></iframe>
		</div>
		<div class="col m3">
			<h5 class="quote raleway">Lugar del evento</h5>
			
			<h5 class="mt-30">Auditorio Samuel Ramos</h5>
			<div class="col s10">
				<div class="divider"></div>
			</div>
			<ul class="fa-ul" style="margin-top: 30px;">
				<li class="mb-10"><i class="fa-li fa fa-map-marker"></i> Av. Tata Vasco, <br>Vasco de Quiroga, 58230 <br>Morelia, Mich.</li>
				{{-- <li><i class="fa-li fa fa-phone"></i> 01 461 174 3456</li> --}}
			</ul>

		</div>
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
		var table = 'zagar_morelia_28nov';
		var base_path = '{{ url('/') }}';
		var precios = {'Diamante': 750, 'Oro': 600, 'Plata': 400};
		var special_char_n = 'N-';

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
	<script src="{{asset('js/event_manual_v3.js')}}"></script>

@endsection