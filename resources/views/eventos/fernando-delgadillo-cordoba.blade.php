@extends('layouts.main')

@section('title', 'Fernando Delgadillo - Córdoba')

@section('description', 'Fernando Delgadillo en Córdoba, 21 de diciembre, 20:00 hrs boletos en Sabina Live Bar y bolematico.com')

@section('styles')
<meta property="og:url"  content="https://www.bolematico.com/eventos/fernando-delgadillo-cordoba" />
<meta property="og:title" content="Fernando Delgadillo en Córdoba" />
<meta property="og:description" content="Fernando Delgadillo en Córdoba, 21 de diciembre, 20:00 hrs boletos en Sabina Live Bar y bolematico.com" />
<meta property="og:image" content="https://www.bolematico.com/img/fernando-delgadillo-cordoba.jpg" />

<script src="https://use.fontawesome.com/9b9c9dc667.js"></script>
<link rel="stylesheet" type="text/css" href="{{ asset('css/event-select-manual.css') }}">
<link rel="stylesheet" type="text/css" href="{{ asset('css/event-select-general.css') }}">
{{-- <style type="text/css">
	.svg-buttons {
		position: absolute;
		left: 10px;
		bottom: 10px;
	}
	.svg-buttons button {
		margin: 0 3px;
	}
	#svg-container { position: relative; }
</style> --}}

@endsection

@section('content')

@php

	$preventa = false;
	if(\Carbon\Carbon::now() < '2019-12-15 23:59:59'){
		$preventa = true;
	}
@endphp

<div class="image-header bg-4 overlay overlay-5">

	<div class="row white-text">
		<h4>Fernando Delgadillo</h4>
		<div class="divider"></div>
		<p class="mb-0"><i>Ex-Hacienda Toxpan - Córdoba</i></p>
		<p class="m-0"><i>21 de diciembre - 20:00 hrs.</i></p>
	</div>
	<a href="#compra" class="btn waves-light waves-effect page-scroll"><b>Comprar</b> <i class="fa fa-ticket" aria-hidden="true"></i></a>
</div>

<section class="container">
	<div class="row">
		<ul class="tabs">
			<li class="tab "><a class="active" href="#precios">Precios</a></li>
			<li class="tab "><a href="#detalles">Detalles</a></li>
			<li class="tab "><a href="#lugares">Lugares de venta</a></li>
		</ul>
		<div id="precios" class="col s12 tab-content">

			<div class="col s8 offset-s2 m4 offset-m1 mb-30 card-flyer">
				<img src="{{ asset('img/fernando-delgadillo-cordoba-prom13.jpg') }}" alt="" class="responsive-img">
			</div>
			
			<div class="col s12 offset-m1 m5">

				@if($preventa)
				<div class="row">
					<div class=" qcPricing col s12 mb-15">
						<h5 class="quote raleway">Precios especiales en zona Platino y Preferente</h5>
					</div>

					<div class="qcPricing col s12 center-align mb-10">
						<div class="box col s12">
							<header>
								<div class="col s12 pink darken-1">VIP Periqueras</div>
							</header>
							<div class="price col s12"><span>$ 1,000</span> MXN.</div>
						</div>
					</div>

					<div class="qcPricing col s12 center-align mb-10">
						<div class="box col s12">
							<header>
								<div class="col s12 teal accent-4">Platino</div>
							</header>
							<div class="price col s12"><small style="text-decoration: line-through; color: #aaa;font-size: 1.2rem">$600</small><span>$ 300</span> MXN.</div>
						</div>
					</div>

					<div class="qcPricing col s12 center-align mb-10">
						<div class="box col s12">
							<header>
								<div class="col s12 purple lighten-1">Preferente</div>
							</header>
							<div class="price col s12"><small style="text-decoration: line-through; color: #aaa;font-size: 1.2rem">$450</small><span>$ 225</span> MXN.</div>
						</div>
					</div>

					<div class="qcPricing col s12 center-align mb-10">
						<div class="box col s12">
							<header>
								<div class="col s12 brown lighten-1">General</div>
							</header>
							<div class="price col s12"><span>$ 350</span> MXN.</div>
						</div>
					</div>

				</div>

				@else
				
				<div class="row">

					<div class="qcPricing col s12 center-align mb-10">
						<div class="box col s12">
							<header>
								<div class="col s12 pink darken-1">VIP Periqueras</div>
							</header>
							<div class="price col s12"><span>$ 1,000</span> MXN.</div>
						</div>
					</div>

					<div class="qcPricing col s12 center-align mb-10">
						<div class="box col s12">
							<header>
								<div class="col s12 teal accent-4">Platino</div>
							</header>
							<div class="price col s12"><span>$ 600</span> MXN.</div>
						</div>
					</div>

					<div class="qcPricing col s12 center-align mb-10">
						<div class="box col s12">
							<header>
								<div class="col s12 purple lighten-1">Preferente</div>
							</header>
							<div class="price col s12"><span>$ 450</span> MXN.</div>
						</div>
					</div>

					<div class="qcPricing col s12 center-align mb-10">
						<div class="box col s12">
							<header>
								<div class="col s12 brown lighten-1">General</div>
							</header>
							<div class="price col s12"><span>$ 350</span> MXN.</div>
						</div>
					</div>

				</div>

				@endif

			</div>
			<div class="row">
				<div class="divider"></div>
				<div class="col s10 offset-s1 center-align">
					<p><i>* Al realizar tu compra en línea se realiza un cargo extra de <b>10%</b> por concepto de servicio.</i></p>
					<p><i>* Preventa válida hasta el 15 de noviembre del 2019.</i></p>
					<p>* Informes al:</p>
					<p><a href="tel:2717105159" style="background: #4caf50; color: #fff; padding: 5px 10px;"><i class="fa fa-whatsapp"></i> 271-710-5159</a> / <a href="tel:2711224663" style="background: #4caf50; color: #fff; padding: 5px 10px;"><i class="fa fa-whatsapp"></i> 271-122-4663</a></p>
				</div>
			</div>
		</div>

		<div id="detalles" class="col s12 tab-content">	
			<div class="row">
				<div class="col s8 offset-s2 hide-on-med-and-up">
					<img src="{{ asset('img/fernando-delgadillo-bio.jpg') }}" class="responsive-img">
				</div>
				<div class="col s12 m9">
					<p>Fernando Delgadillo, creador de la Canción Informal, es un cantautor mexicano que desde hace treinta  años se dedica a la composición e interpretación de los temas con los que se presenta en distintos países de América Latina.</p>
					<p>Actualmente cuenta con el reconocimiento de un público muy diverso, compuesto tanto de aquellos que lo siguen desde los inicios de su trayectoria, como de jóvenes, generalmente universitarios.</p>
					<p>Cada año realiza presentaciones en las ciudades más importantes de México, llenando por completo foros con capacidad hasta para 3500 personas, además de las giras internacionales que lo han llevado a presentarse por todo el continente americano. Su sitio oficial registra más de 3,000,000 de visitas y su página oficial en Facebook tiene más de 548,000 seguidores. Además, su música se difunde en diversos sitios no oficiales y en foros internacionales dedicados a la trova y la canción de autor. Ha sido invitado a participar en festivales internacionales, como el "Proyecto Generación Ñ" en España, el "Festival de Televisión de Beijing" en China, y varios otros en Cuba, Puerto Rico,Estados Unidos y el ultimo en Caracas Venezuela en el festival Suena Caracas 2016.</p>		
				</div>
				<div class="col m3 hide-on-small-only">
					<img src="{{ asset('img/fernando-delgadillo-bio.jpg') }}" class="responsive-img z-depth-2">
				</div>
			</div>

		</div>

		<div id="lugares" class="row tab-content">

			<div class="col s12">
				<div class="col s12 m6 l4">									
					<div class="white z-depth-2">
						<iframe src="https://www.google.com/maps/embed?pb=!1m14!1m8!1m3!1d15099.23352764889!2d-96.9339155!3d18.8955801!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x0%3A0x2982c742ee38da54!2sSabina%20Live%20Bar!5e0!3m2!1ses!2smx!4v1571017763763!5m2!1ses!2smx" width="100%" height="320" frameborder="0" style="border:0;" allowfullscreen=""></iframe>
					
						<div class=" p-30">
							<h5><b>Sabina Live Bar</b></h5>
							<ul class="qcAddress">
								<li><div class="divider"></div></li>
								<li><i class="fa fa-map-marker"></i> <strong>DIRECCIÓN</strong>: <p>2Av. 4 S/N, Centro, 94500 Córdoba, Ver.</p></li>
								<li><i class="fa fa-phone"></i> <strong>TELÉFONO</strong>: <p> 271-710-5159</p></li>
								{{-- <li><i class="fa fa-calendar"></i> <strong>HORARIO</strong>: <p>10:00 a 19:00 hrs. Lunes a Viernes y 10:30 a 14:00 hrs. los Sabados.</p></li> --}}
								<li><i class="fa fa-globe"></i> <strong>Website</strong>: <p><a title="website" href="https://www.facebook.com/sabinalivebar/" target="_blank">https://www.facebook.com/sabinalivebar/</a></p></li>
							</ul>
						</div>
					</div>
				</div>

			</div>
		</div>

	</div>
</section>
<section class="section-video overlay overlay-5" style="background-image: url('https://img.youtube.com/vi/HAL0afRSK3I/maxresdefault.jpg');">
	<div class="row center-align">
		<a class="white-text" id="modal-video-open" href="#modal-video" data-video="https://www.youtube.com/embed/HAL0afRSK3I"><i class="material-icons">play_circle_filled</i></a>
		<p class="white-text"><i>Carta a Francia - Fernando Delgadillo</i></p>
	</div>
</section>

<section id="compra" class="row section-comprar">
	<div class="col s12 mt-30">

		@if(Auth()->check())
			<div class="col s12 mb-15">
				<h5 class="mt-30 raleway quote">Da clic en el bloque que deseas para mostrar los asientos disponibles</h5>
			</div>
			<div class="col s12 m6 white div-border" id="svg-container" style="padding-top:10px;">
				@include('maps.exhacienda-toxpan')
			</div>
			<div class="col s12 m6">
				<div class="col s12 mb-15">
					<div class="col s1 grey darken-4" style="height: 25px;"></div>
					<div class="col s11">
						<div class="col s5">Escenario</div>
						<div class="col s7 right-align" id="info-title-section"></div>
					</div>
				</div>
				<div class="col s12 bloque-container">
					
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
						{!! Form::hidden('img', 'img/fernando-delgadillo-cordoba.jpg') !!}
						{!! Form::hidden('evento', 'Fernando Delgadillo') !!}
						{!! Form::hidden('fecha', '21 de diciembre 2019') !!}
						{!! Form::hidden('lugar', 'Ex-Hacienda Toxpan') !!}
						{!! Form::hidden('ciudad', 'Córdoba, Ver.') !!}
						{!! Form::hidden('hora', '20:00 hrs') !!}
						{!! Form::hidden('event_type', '', ['id' => 'form_type']) !!}
						{!! Form::hidden('impresion_boleto', true) !!}
						@if($preventa)
						{!! Form::hidden('db_table', 'fernando_delgadillo_cordoba_21dic_desc13') !!}
						@else
						{!! Form::hidden('db_table', 'fernando_delgadillo_cordoba_21dic') !!}
						@endif
						{!! Form::hidden('info', '--') !!}
						{!! Form::hidden('select_type', 'manual') !!}
						{!! Form::hidden('url', url('eventos/fernando-delgadillo-cordoba')) !!}
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
		<div class="col m8 offset-m2">
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
	<div class="row">
		<div class="col m9">
			<iframe src="https://www.google.com/maps/embed?pb=!1m14!1m8!1m3!1d15098.238213949307!2d-96.9279122!3d18.906611!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x0%3A0xe724c24cff6b0fe9!2sEx%20Hacienda%20de%20Toxpan!5e0!3m2!1ses!2smx!4v1571018173169!5m2!1ses!2smx" width="100%" height="450" frameborder="0" style="border:0;" allowfullscreen=""></iframe>
		</div>
		<div class="col m3">
			<h5 class="quote raleway">Lugar del evento</h5>
			
			<h5 class="mt-30">Ex-Hacienda Toxpan</h5>
			<div class="col s10">
				<div class="divider"></div>
			</div>
			<ul class="fa-ul" style="margin-top: 30px;">
				<li class="mb-10"><i class="fa-li fa fa-map-marker"></i>Calle 6B esq. Av. 36 <br>Nuevo San Francisco <br>Córdoba, Ver.</li>
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
	{{-- <script src="{{asset('plugins/svg-pan-zoom.js')}}"></script> --}}
	<script>
		// svgMap = svgPanZoom('#exhacienda-toxpan', {
		//     zoomEnabled: true,
		//     controlIconsEnabled: false,
		//     fit: true,
		//     center: true,
		//     minZoom: 0.1
		// });
		// $("#svg-container").height(svgMap.getSizes().height);

		// $("#zoom-in").click(function(){
		// 	svgMap.zoomIn();
		// });

		// $("#zoom-out").click(function(){
		// 	svgMap.zoomOut();
		// });

		// $("#zoom-reset").click(function(){
		// 	svgMap.resetZoom();
		// 	svgMap.center();
		// });

		// $(window).resize(function(){
		// 	svgMap.resize();
		// 	svgMap.fit();
		// });

		// zoom out
  		// panZoomInstance.zoom(0.2);

		@if($preventa)
		var table = 'fernando_delgadillo_cordoba_21dic_desc13';
		var precios = {'VIP Periqueras': 1000, 'Platino': 300, 'Preferente': 225, 'General': 350};
		@else
		var table = 'fernando_delgadillo_cordoba_21dic';
		var precios = {'VIP Periqueras': 1000, 'Platino': 600, 'Preferente': 450, 'General': 350};
		@endif
		var base_path = '{{ url('/') }}';
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