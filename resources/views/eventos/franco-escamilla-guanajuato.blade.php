@extends('layouts.main')

@section('title', 'Franco Escamilla')

@section('description', 'Franco Escamilla, Guanajuato 05 de junio, 19:00 hrs Auditorio del estado, boletos en Holiday Inn Express y bolematico.com')

@section('styles')
<meta property="og:url"  content="http://bolematico.com/eventos/franco-escamilla-guanajuato" />
<meta property="og:title" content="Franco Escamilla" />
<meta property="og:description" content="Franco Escamilla, Guanajuato 05 de junio, 19:00 hrs Auditorio del estado, boletos en Holiday Inn Express y bolematico.com" />
<meta property="og:image" content="http://bolematico.com/img/franco-guanajuato.jpg" />

<script src="https://use.fontawesome.com/9b9c9dc667.js"></script>
<link rel="stylesheet" type="text/css" href="{{ asset('css/event-select-manual.css') }}">
@endsection

@section('content')

<div class="image-header bg-4 overlay overlay-5">

	<div class="row white-text">
		<h4>Franco Escamilla</h4>
		<div class="divider"></div>
		<p class="mb-0"><i>Auditorio del estado - Guanajuato</i></p>
		<p class="m-0"><i>05 de junio - 19:00 hrs.</i></p>
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

			<div class="col s8 offset-s2 m3 offset-m1 mb-30 card-flyer">
				<img src="{{ asset('img/franco-guanajuato.jpg') }}" alt="" class="responsive-img">
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
							<div class="price col s12"><span>$650</span> MXN</div>
						</div>
					</div>

					<div class="qcPricing col s12 center-align mb-10">
						<div class="box col s12">
							<header>
								<div class="col s12 grey lighten-1">Plata</div>
							</header>
							<div class="price col s12"><span>$550</span> MXN</div>
						</div>
					</div>

				</div>

				<div class="row">
					<div class="divider"></div>
					<div class="col s10 offset-s1">
						<p>* Al realizar tu compra en línea se realiza un cargo extra de <b>10%</b> por concepto de servicio.</p>
						<p>* Punto de venta solo pago en efectivo.</p>
						<p>* Informes al: <a href="tel:4521741255" style="background: #4caf50; color: #fff; padding: 5px 10px;"> 452 174 1255</a></p>
					</div>
				</div>
			</div>
		</div>

		<div id="detalles" class="col s12 tab-content">
			<div class="col s8 offset-s2 hide-on-med-and-up">
				<img src="{{ asset('img/franco-bio.jpg') }}" class="responsive-img">
			</div>
			<div class="col s12 m9">		
				<p><strong>Franco Escamilla</strong>, mejor conocido como “El Diablo” o “El Amo del Sarcasmo”, nació un 29 de abril de 1981 en Cuautla Morelos, México, es un músico, comediante y locutor.</p>
				<p>A sus 16 años se muda para Monterrey a trabajar en bares, restaurantes y cantinas. Desde muy pequeño estudió durante 3 años y medio en el ESMYDM (Escuela Superior de Música y Danza de Monterrey). Luego culminó sus estudios y se mantuvo presente en el ambiente musical.</p>
				<p>Franco se considera a sí mismo una persona aferrada, ya que desde pequeño soñó con tener su propio programa de radio, lo cual consiguió gracias a su actitud y empeño de dar todo con su esfuerzo.</p>
				<p>Entre sus pasatiempos se destacan la lectura, es jugador amateur armando cubos rubik y amante de los videojuegos, a lo que él mismo se considera como un verdadero gamer.</p>
			</div>
			<div class="col s3 hide-on-small-only">
				<img src="{{ asset('img/franco-bio.jpg') }}" class="responsive-img">
			</div>
			<div class="clearfix"></div>
			<div class="col s8 offset-s2 m4">
				<img src="{{ asset('img/franco-bio2.jpg') }}" class="responsive-img">
			</div>
			<div class="col s12 m8">
				<p class="mt-0">“La Máquina” es como también es conocido Franco, debido a que una vez durante una de sus presentaciones con duración a dos horas se tuvo que extender durante 90 minutos más, a lo que sus colegas y las personas que lo habían contratado para aquel entonces les sorprendió por el tiempo en tarima, por parecer una “rockola”.</p>
				<p>Llegó a trabajar lavando carros, como también logró ser un gran cantante. Se dio a conocer principalmente en el restaurante “Las Monjitas” donde fue también mesero, parrillero, cocinero y hasta trovador.</p>
				<p>A mediados del 2007 comienza su carrera como comediante en el bar “Unicornio Azul”, sin contar chistes. En los inicios de esta área se le hizo un poco difícil conseguir un público a la que le agradaran sus presentaciones. Su show contaba con 3 monólogos: “Qué duro es ser foráneo”, “Regios en la luna” y “Sara”.</p>
				<p>Poco a poco, se fue apegando más a este género y consiguió lo que quería, crear un estilo de stand up comedy con un toque sarcástico, áspero, ácido y con un humor negro que lo ha caracterizado en su carrera artística.</p>
			</div>
			<div class="clearfix"></div>
			<p>Sitio web Oficial: <br><a href="http://francoescamillaoficial.com/" target="_blank">http://francoescamillaoficial.com/</a></p>
			<p>Fuente: <br><small>https://www.buenamusica.com/franco-escamilla/biografia</small></p>
			
		</div>

		<div id="lugares" class="col s12 tab-content">
			<div class="col s12">
				<h5 class="mb-30 quote">Además de Bolematico, puedes adquirir tus entradas en: <br><small><i>(* Solo pago en efectivo.)</i></small></h5>
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

		</div>

	</div>
</section>
<section class="section-video overlay overlay-5" style="background-image: url('https://img.youtube.com/vi/oNDbWycRr7Y/hqdefault.jpg');">
	<div class="row center-align">
		<a class="white-text" id="modal-video-open" href="#modal-video" data-video="https://www.youtube.com/embed/oNDbWycRr7Y"><i class="material-icons">play_circle_filled</i></a>
		<p class="white-text"><i>Franco Escamilla.- Galilea y gasolina</i></p>
	</div>
</section>

<section id="compra" class="section-comprar">
	{{-- <div class="row mt-30">
	@if(Auth()->check())
		<div class="col s12 mb-15">
			<h5 class="mt-30 raleway quote">Da clic en el bloque que deseas para mostrar los asientos disponibles</h5>
		</div>
		<div class="col s12 m6">
			<ul class="tabs">
				<li class="tab col s6"><a class="active" href="#planta-baja">Planta Baja</a></li>
				<li class="tab col s6"><a href="#planta-alta">Planta Alta</a></li>
			</ul>
			<div id="planta-baja" class="col s12">
				@include('maps.auditorio-del-estado-gto-pbaja')		
			</div>
			<div id="planta-alta" class="col s12">
				@include('maps.auditorio-del-estado-gto-palta')					
			</div>
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
					{!! Form::hidden('img', 'img/franco-guanajuato.jpg') !!}
					{!! Form::hidden('evento', 'Franco Escamilla') !!}
					{!! Form::hidden('fecha', '05 de junio 2019') !!}
					{!! Form::hidden('lugar', 'Auditorio del estado') !!}
					{!! Form::hidden('ciudad', 'Guanajuato') !!}
					{!! Form::hidden('hora', '19:00 hrs') !!}
					{!! Form::hidden('event_type', '', ['id' => 'form_type']) !!}
					{!! Form::hidden('impresion_boleto', true) !!}
					{!! Form::hidden('db_table', 'franco_gto_05jun') !!}
					{!! Form::hidden('info', '--') !!}
					{!! Form::hidden('select_type', 'manual') !!}
					{!! Form::hidden('url', url('eventos/franco-escamilla-guanajuato')) !!}
				{!! Form::close() !!}
			</div>
		</div>	

	@else

		<p class="center-align raleway">Debes iniciar sesion para poder realizar la compra</p>
		<div class="col s12 center-align">
			<a href="#modal-login" class="modal-login-open btn waves-light orange accent-3">Login</a>
		</div>
	@endif
	</div> --}}
	<div class="row mt-30">
		<div class="col m8 offset-m2 center-align">
			<h5 class="raleway">Venta de boletos en Holiday Inn Express</h5>
			<p><i>(Solo pago en efectivo)</i></p>
			<div class="row">
				<div class="col s6 offset-s3 mt-30">
					<div class="divider"></div>
				</div>
			</div>
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
			<iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3724.487047571479!2d-101.27616508559285!3d21.013189393686762!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x842b741881053e33%3A0x3056cd14757b16ba!2sAuditorio+del+Estado+de+Guanajuato!5e0!3m2!1ses!2smx!4v1559066091162!5m2!1ses!2smx" width="100%" height="450" frameborder="0" style="border:0" allowfullscreen></iframe>
		</div>
		<div class="col m3">
			<h5 class="quote raleway">Lugar del evento</h5>
			
			<h5 class="mt-30">Auditorio del Estado</h5>
			<div class="col s10">
				<div class="divider"></div>
			</div>
			<ul class="fa-ul" style="margin-top: 30px;">
				<li class="mb-10"><i class="fa-li fa fa-map-marker"></i> Pueblito de Rocha s/n, Auditorio del Estado <br>Centro de Convenciones, 36040 <br>Guanajuato, Gto.</li>
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
		var table = 'franco_gto_05jun';
		var base_path = '{{ url('/') }}';
		var precios = {'Diamante': 750, 'Oro': 650, 'Plata': 550};
		var special_char_n = 'N2';

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
	<script src="{{asset('js/event_manual_v2.js')}}"></script>

@endsection