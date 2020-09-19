@extends('layouts.main')

@section('title', 'Códice, Canelos Jr y La Décima Banda')

@section('description', 'Códice, Canelos Jr y La Décima Banda, Culiacan Sin. 15 de febrero, 21:00 hrs Palenque Culiacán, boletos en bolematico.com')

@section('styles')
<meta property="og:url"  content="https://www.bolematico.com/eventos/codice-canelos-decima-sinaloa" />
<meta property="og:title" content="Códice, Canelos Jr y La Décima Banda" />
<meta property="og:description" content="Códice, Canelos Jr y La Décima Banda, Culiacan Sin. 15 de febrero, 21:00 hrs Palenque Culiacán, boletos en bolematico.com" />
<meta property="og:image" content="https://www.bolematico.com/img/codice-canelo-decima-sinaloa.jpg" />

<script src="https://use.fontawesome.com/9b9c9dc667.js"></script>
<link rel="stylesheet" type="text/css" href="{{ asset('css/event-select-manual.css') }}">
<link rel="stylesheet" type="text/css" href="{{ asset('css/event-select-general.css') }}">
<style type="text/css">
	.ocupado {
		background-color: #aaa;
		border-color: #aaa;
	}
</style>
@endsection

@section('content')

<div class="image-header bg-4 overlay overlay-5">

	<div class="row white-text">
		<h4>Códice, Canelos Jr y La Décima Banda</h4>
		<div class="divider"></div>
		<p class="mb-0"><i>Palenque Culiacán - Culiacán Sinaloa</i></p>
		<p class="m-0"><i>15 de febrero - 21:00 hrs.</i></p>
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

			<div class="col s8 offset-s2 m4 offset-m1 mb-30 card-flyer">
				<img src="{{ asset('img/codice-canelo-decima-sinaloa.jpg') }}" alt="" class="responsive-img">
			</div>
			
			<div class="col s12 m5 offset-m1">				

				<div class="row">

					<div class="qcPricing col s12 center-align mb-10">
						<div class="box col s12">
							<header>
								<div class="col s12 teal accent-4">VIP</div>
							</header>
							<div class="price col s12"><span>$1100</span> MXN</div>
						</div>
					</div>

					<div class="qcPricing col s12 center-align mb-10">
						<div class="box col s12">
							<header>
								<div class="col s12 amber darken-1">Oro</div>
							</header>
							<div class="price col s12"><span>$770</span> MXN</div>
						</div>
					</div>

					<div class="qcPricing col s12 center-align mb-10">
						<div class="box col s12">
							<header>
								<div class="col s12 grey lighten-1">Plata</div>
							</header>
							<div class="price col s12"><span>$440</span> MXN</div>
						</div>
					</div>

					<div class="qcPricing col s12 center-align mb-10">
						<div class="box col s12">
							<header>
								<div class="col s12 white black-text">General</div>
							</header>
							<div class="price col s12"><span>$220</span> MXN</div>
						</div>
					</div>

				</div>

				<div class="row">
					<div class="divider"></div>
					<div class="col s10 offset-s1">
						<p>* Al realizar tu compra en línea se realiza un cargo extra de <b>10%</b> por concepto de servicio.</p>
						<p>* Informes:<a href="tel:6673070254" style="background: #4caf50; color: #fff; padding: 5px 10px;"> 6673070254</a></p>
					</div>
				</div>
			</div>
		</div>

		<div id="detalles" class="col s12 tab-content">
			<div class="col s8 offset-s2 hide-on-med-and-up">
				<img src="{{ asset('img/codice-bio.jpg') }}" class="responsive-img">
			</div>
			<div class="col s12 m9">
				<h5 class="raleway quote">Grupo Códice</h5>
				<p>CODICE, cuyos integrantes son originarios de El Tamarindo, Sinaloa, es una agrupación que inició con seis talentosos jóvenes, quienes desde pequeños incursionaron en la música actuando en bautizos, fiestas de quince años, bajo el nombre que inició como un juego para muchos como "Fundillo Norteño" en el año 2008.</p>
				<p>Después de varios años, la agrupación toma un nuevo rumbo, y deciden llamarse Códice, y son apoyados por la compañía Alianza Records.</p>
				
			</div>
			<div class="col m3 hide-on-small-only">
				<img src="{{ asset('img/codice-bio.jpg') }}" class="responsive-img">
			</div>
			
		</div>

		<div id="lugares" class="col s12 tab-content">
			<div class="col s12">
				<h5 class="mb-30 quote">Además de Bolematico, puedes adquirir tus entradas en:</h5>
			</div>

			<div class="col s12">									

				<div class="white z-depth-2">
					<iframe src="https://www.google.com/maps/embed?pb=!1m14!1m8!1m3!1d14486.86604826836!2d-107.394393!3d24.805159!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x0%3A0x961ff0f4c6675393!2sHotel%20San%20Marcos!5e0!3m2!1ses!2smx!4v1579565315400!5m2!1ses!2smx" width="100%" height="450" frameborder="0" style="border:0;" allowfullscreen=""></iframe>
				
					<div class=" p-30">
						<h5 class="raleway"><b>Hotel San Marcos</b></h5>
						<ul class="qcAddress">
							<li><div class="divider"></div></li>
							<li><i class="fa fa-map-marker"></i> <p> Prol. Álvaro Obregón 51 Norte, Primer Cuadro, Centro, 80000 Culiacán, Sin.</p></li>
							{{-- <li><i class="fa fa-phone"></i><p> 01 473 735 2000</p></li> --}}
							<li><i class="fa fa-globe"></i><p><a title="website" href="sanmarcos.com.mx" target="_blank">sanmarcos.com.mx</a></p></li>
						</ul>
					</div>
				</div>

			</div>			

		</div>

	</div>
</section>
<section class="section-video overlay overlay-5" style="background-image: url('https://img.youtube.com/vi/1_YIiE_Lnic/maxresdefault.jpg');">
	<div class="row center-align">
		<a class="white-text" id="modal-video-open" href="#modal-video" data-video="https://www.youtube.com/embed/1_YIiE_Lnic"><i class="material-icons">play_circle_filled</i></a>
		<p class="white-text"><i>Códice - Que No Se Apague la Lumbre</i></p>
	</div>
</section>

<section id="compra" class="section-comprar">
	<div class="row mt-30">
	@if(Auth()->check())
		<div class="col s12 mb-15">
			<h5 class="mt-30 raleway quote">Da clic en el bloque que deseas para mostrar los asientos disponibles</h5>
		</div>
		<div class="col s12 m6 white div-border" id="svg-container" style="padding-top:10px;">
				@include('maps.palenque-culiacan')
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
					{!! Form::hidden('img', 'img/codice-canelo-decima-sinaloa.jpg') !!}
					{!! Form::hidden('evento', 'Códice, Canelos Jr y La Décima Banda') !!}
					{!! Form::hidden('fecha', '15 de febrero 2019') !!}
					{!! Form::hidden('lugar', 'Palenque Culiacán') !!}
					{!! Form::hidden('ciudad', 'Culiacán, Sin.') !!}
					{!! Form::hidden('hora', '21:00 hrs') !!}
					{!! Form::hidden('event_type', '', ['id' => 'form_type']) !!}
					{!! Form::hidden('impresion_boleto', true) !!}
					{!! Form::hidden('db_table', 'palenque_culiacan_15feb') !!}
					{!! Form::hidden('info', '--') !!}
					{!! Form::hidden('select_type', 'manual') !!}
					{!! Form::hidden('url', url('eventos/codice-canelos-decima-sinaloa')) !!}
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
			<iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3621.7437808033724!2d-107.41142528499829!3d24.80422558408052!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x86bcd09864d7c591%3A0x2337f8cbc54ab772!2sPalenque%2C%20Recursos%2C%2080100%20Culiac%C3%A1n%20Rosales%2C%20Sin.!5e0!3m2!1ses!2smx!4v1579567239360!5m2!1ses!2smx" width="100%" height="450" frameborder="0" style="border:0;" allowfullscreen=""></iframe>
		</div>
		<div class="col m3">
			<h5 class="quote raleway">Lugar del evento</h5>
			
			<h5 class="mt-30">Palenque Culiacán</h5>
			<div class="col s10">
				<div class="divider"></div>
			</div>
			<ul class="fa-ul" style="margin-top: 30px;">
				<li class="mb-10"><i class="fa-li fa fa-map-marker"></i> Recursos 80100 <br>Culiacán Rosales, Sin.</li>
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
		var table = 'palenque_culiacan_15feb';
		var base_path = '{{ url('/') }}';
		var precios = {'VIP': 1100, 'Oro': 770, 'Plata': 440, 'General': 220};
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