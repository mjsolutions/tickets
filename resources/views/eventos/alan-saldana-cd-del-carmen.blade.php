@extends('layouts.main')

@section('title', 'Alan Saldaña')

@section('description', 'Alan Saldaña, Cd. del Carmen 15 de noviembre, 21:00 hrs Centro Cultural Universitario, boletos en bolematico.com')

@section('styles')
<meta property="og:url"  content="https://www.bolematico.com/eventos/alan-saldana-cd-del-carmen" />
<meta property="og:title" content="Alan Saldaña" />
<meta property="og:description" content="Alan Saldaña, Cd. del Carmen 15 de noviembre, 21:00 hrs Centro Cultural Universitario, boletos en bolematico.com" />
<meta property="og:image" content="https://www.bolematico.com/img/alan-saldana-cd-del-carmen.jpg" />

<script src="https://use.fontawesome.com/9b9c9dc667.js"></script>
<link rel="stylesheet" type="text/css" href="{{ asset('css/event-select-manual.css') }}">
@endsection

@section('content')

<div class="image-header bg-4 overlay overlay-5">

	<div class="row white-text">
		<h4>Alan Saldaña</h4>
		<div class="divider"></div>
		<p class="mb-0"><i>Centro Cultural Universitario - Cd. del Carmen</i></p>
		<p class="m-0"><i>15 de noviembre - 21:00 hrs.</i></p>
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
				<img src="{{ asset('img/alan-saldana-cd-del-carmen.jpg') }}" alt="" class="responsive-img">
			</div>
			
			<div class="col s12 m6 offset-m1">				

				<div class="row">

					<div class="qcPricing col s12 center-align mb-10">
						<div class="box col s12">
							<header>
								<div class="col s12 teal accent-4">Diamante</div>
							</header>
							<div class="price col s12"><span>$400</span> MXN</div>
						</div>
					</div>

					<div class="qcPricing col s12 center-align mb-10">
						<div class="box col s12">
							<header>
								<div class="col s12 amber darken-1">Oro</div>
							</header>
							<div class="price col s12"><span>$300</span> MXN</div>
						</div>
					</div>

				</div>

				<div class="row">
					<div class="divider"></div>
					<div class="col s10 offset-s1">
						<p>* Al realizar tu compra en línea se realiza un cargo extra de <b>10%</b> por concepto de servicio.</p>
						<p>* Informes:<a href="tel:9384058424" style="background: #4caf50; color: #fff; padding: 5px 10px;"> 938-405-8424</a> / <a href="tel:4521741255" style="background: #4caf50; color: #fff; padding: 5px 10px;"> 452-174-1255</a></p>
					</div>
				</div>
			</div>
		</div>

		<div id="detalles" class="col s12 tab-content">
			<div class="col s8 offset-s2 hide-on-med-and-up">
				<img src="{{ asset('img/alan-bio.jpg') }}" class="responsive-img">
			</div>
				
			<div class="col s12 m9">	
				<p>Alan Saldaña, el AS de la comedia.</p><p>Joven y con un gran ángel y talento. Es una comedia sumamente divertida. A pesar de tener relativamente pocos años en la comedia, Alan ha cautivado y sorprendido a todo el público con sus originales monólogos y rutinas. Una verdadera inversión que provoca grandes carcajadas a todos.</p><p>Su meta no es ser el comediante más famoso del mundo, lo que Alan Saldaña quiere es conquistar toda Latinoamérica y llevar su comedia hasta donde pueda llegar, a escenarios donde tenga que poner a prueba su talento.</p>
			</div>
			<div class="col m3 hide-on-small-only">
				<img src="{{ asset('img/alan-bio.jpg') }}" class="responsive-img">
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
<section class="section-video overlay overlay-5" style="background-image: url('https://img.youtube.com/vi/3Sbdd-L0_zQ/maxresdefault.jpg');">
	<div class="row center-align">
		<a class="white-text" id="modal-video-open" href="#modal-video" data-video="https://www.youtube.com/embed/3Sbdd-L0_zQ"><i class="material-icons">play_circle_filled</i></a>
		<p class="white-text"><i>Alan Saldaña | Monologo "MUJERES CELOSAS"</i></p>
	</div>
</section>

<section id="compra" class="section-comprar">
	<div class="row mt-30">
	@if(Auth()->check())
		<div class="col s12 mb-15">
			<h5 class="mt-30 raleway quote">Da clic en el bloque que deseas para mostrar los asientos disponibles</h5>
		</div>
		<div class="col s12 m6 white div-border" id="svg-container" style="padding-top:10px;">
				@include('maps.ccu-cdcarmen')
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
					{!! Form::hidden('img', 'img/alan-saldana-cd-del-carmen.jpg') !!}
					{!! Form::hidden('evento', 'Alan Saldaña') !!}
					{!! Form::hidden('fecha', '15 de noviembre 2019') !!}
					{!! Form::hidden('lugar', 'Centro Cultural Universitario') !!}
					{!! Form::hidden('ciudad', 'Cd. del Carmen') !!}
					{!! Form::hidden('hora', '21:00 hrs') !!}
					{!! Form::hidden('event_type', '', ['id' => 'form_type']) !!}
					{!! Form::hidden('impresion_boleto', true) !!}
					{!! Form::hidden('db_table', 'alan_saldana_cdcarmen_15nov') !!}
					{!! Form::hidden('info', '--') !!}
					{!! Form::hidden('select_type', 'manual') !!}
					{!! Form::hidden('url', url('eventos/alan-saldana-cd-del-carmen')) !!}
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
			<iframe src="https://www.google.com/maps/embed?pb=!1m14!1m8!1m3!1d15122.262947178462!2d-91.8345853!3d18.6385924!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x0%3A0xfc1d6181406a63a1!2sCentro%20Cultural%20Universitario!5e0!3m2!1ses!2smx!4v1571967576574!5m2!1ses!2smx" width="100%" height="450" frameborder="0" style="border:0;" allowfullscreen=""></iframe>
		</div>
		<div class="col m3">
			<h5 class="quote raleway">Lugar del evento</h5>
			
			<h5 class="mt-30">Centro Cultural Universitario</h5>
			<div class="col s10">
				<div class="divider"></div>
			</div>
			<ul class="fa-ul" style="margin-top: 30px;">
				<li class="mb-10"><i class="fa-li fa fa-map-marker"></i> Av. Aviación s/n, <br>Centro, 24100 <br>Cd. del Carmen, Camp.</li>
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
		var table = 'alan_saldana_cdcarmen_15nov';
		var base_path = '{{ url('/') }}';
		var precios = {'Diamante': 400, 'Oro': 300};
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