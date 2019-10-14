@extends('layouts.main')

@section('title', 'Fito Páez - Morelia')

@section('description', 'Fito Páez en Morelia, 24 de octubre, 20:30 hrs boletos en RS Viajes Centro y bolematico.com')

@section('styles')
<meta property="og:url"  content="https://www.bolematico.com/eventos/fito-paez-morelia" />
<meta property="og:title" content="Fito Páez en Morelia" />
<meta property="og:description" content="Fito Páez en Morelia, 24 de octubre, 20:30 hrs boletos en RS Viajes Centro y bolematico.com" />
<meta property="og:image" content="https://www.bolematico.com/img/fito-paez-morelia.jpg" />

<script src="https://use.fontawesome.com/9b9c9dc667.js"></script>
<link rel="stylesheet" type="text/css" href="{{ asset('css/event-select-manual.css') }}">
<style type="text/css">
	.label-new-section {
		padding: 5px 10px;
	    background: #EF5350;
	    border-radius: 25px;
	    color: #FFF;
	    position: absolute;
	    left: 15px;
	    top: -7px;
	    box-shadow: 1px 1px 0px 1px #d2b500;
	}
	.qcPricing header > div {
		line-height: 1;
		padding: 7px 13px !important;
	}
	.qcPricing header > div > small {
		text-transform: none; 
	}
	/*Seats selector*/
	.seats-selector-container {
		width: 130px;
	    position: relative;
	    margin: 0 auto;
	}
	.selector-button {
		position: absolute;
	    width: 35px;
	    height: 35px;
	    top: 0;
	    border: 1px solid #cdcdcd;
	    color: #004c45 ;
	    background: #FFF;
	}
	button.selector-button:focus {
		background-color: #FFF;
	}
	.selector-button:active {
  		background: #ccc !important;
  		color: #f44336 !important;
	}
	.selector-button-left {
	    left: 0;
	    border-top-left-radius: 5px;
	    border-bottom-left-radius: 5px;
	}
	.selector-button-right {
		right: 0;
		border-top-right-radius: 5px;
	    border-bottom-right-radius: 5px;
	}
	.selector-button-input {
		width: 100% !important;
		padding-left: 25px !important;
		padding-right: 20px !important;
		height: 35px !important;
		text-align: center !important;
		font-size: 1.5rem !important;
		border: 1px solid #cdcdcd !important;
		border-radius: 5px !important;
		background: rgba(255,255,255,0.6) !important;
		margin-bottom: 15px !important;
		box-sizing: border-box !important;
	}
	.selector-button-input:focus {
		box-shadow: none !important;
	}
</style>
@endsection

@section('content')

<div class="image-header bg-4 overlay overlay-5">

	<div class="row white-text">
		<h4>Fito Páez</h4>
		<div class="divider"></div>
		<p class="mb-0"><i>Palacio del Arte - Morelia</i></p>
		<p class="m-0"><i>24 de octubre - 20:30 hrs.</i></p>
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
				<img src="{{ asset('img/fito-paez-morelia.jpg') }}" alt="" class="responsive-img">
			</div>
			
			<div class="col s12 offset-m1 m5">

				<div class="row">

					<div class="qcPricing col s12 center-align mb-10">
						<div class="box col s12">
							<header>
								<div class="col s12 teal accent-4">Ruedo</div>
							</header>
							<div class="price col s12"><span>$ 1,500</span> MXN.</div>
						</div>
					</div>

					<div class="qcPricing col s12 center-align mb-10">
						<div class="box col s12">
							<header>
								<div class="col s12 amber darken-1">Butacas</div>
							</header>
							<div class="price col s12"><span>$ 1,100</span> MXN.</div>
						</div>
					</div>

					<div class="qcPricing col s12 center-align mb-10">
						<div class="box col s12">
							<header>
								<div class="col s12 grey">General</div>
							</header>
							<div class="price col s12"><span>$ 800</span> MXN.</div>
						</div>
					</div>

					<div class="qcPricing col s12 center-align mb-10">
						<div class="box col s12">
							<header>
								<div class="col s12 grey">General preventa <br><small>Solo en taquillas</small></div>
							</header>
							<div class="price col s12"><span>$ 650</span> MXN.</div>
						</div>
					</div>

					{{-- <div class="qcPricing col s12 center-align mb-10">
						<div class="box col s12">
							<header>
								<div class="col s12 purple lighten-1">Periqueras (4 pax.) <br><small>Solo en taquillas</small></div>
							</header>
							<div class="price col s12"><span>$ 7,000</span> MXN.</div>
						</div>
					</div> --}}

				</div>

			</div>
			<div class="row">
				<div class="divider"></div>
				<div class="col s10 offset-s1 center-align">
					<p>* Al realizar tu compra en línea se realiza un cargo extra de <b>10%</b> por concepto de servicio.</p>
					{{-- <p>* Informes al: <a href="tel:4431880358" style="background: #4caf50; color: #fff; padding: 5px 10px;"> 443 188 0358</a> / <a href="tel:4432274979" style="background: #4caf50; color: #fff; padding: 5px 10px;"><i class="fa fa-whatsapp"></i> 443 227 4979</a></p> --}}
				</div>
			</div>
		</div>

		<div id="detalles" class="col s12 tab-content">	
			<div class="row">
				<div class="col s8 offset-s2 hide-on-med-and-up">
					<img src="{{ asset('img/fito-paez-bio.jpg') }}" class="responsive-img">
				</div>
				<div class="col s12 m8">
					<p class="mt-0">Rodolfo Páez nació en Rosario el 13 de marzo de 1963 y formó Staff, su primera banda, cuando tenía 13 años. Ya en 1977 tocaba en El Banquete, junto a Rubén Goldín y Jorge Llonch. A partir del año siguiente se presentó como solista en varios pubs locales. Cuando Juan Carlos Baglietto formó su banda, lo incluyó como tecladista y como arreglador, junto a Goldín, quien también tocaba la guitarra. En esa agrupación militaban Silvina Garré y Sergio Sáenz. Para fines de 1983 ya cantaba "Del '63" solo con su piano, en medio del show de Baglietto.</p>
					<p>Durante una presentación con Baglietto en el teatro Coliseo (diciembre de 1982), Charly García fue hasta el camarín para saludarlo. Él apenas tenía 19 años y la plata que sacaba le daba para pagar algunas deudas. Al poco tiempo, Daniel Grinbank, por aquél entonces mánager de García, lo llamó a su oficina: comenzaría a ensayar para la gira nacional de "Clics modernos", junto a GIT y Fabiana Cantilo. Tocaría los teclados en lugar de Andrés Calamaro, que se unía a Los Abuelos de la Nada y participaría en los discos "Clics modernos" (1983) y "Piano bar" (1984).</p>				
				</div>
				<div class="col m4 hide-on-small-only">
					<img src="{{ asset('img/fito-paez-bio.jpg') }}" class="responsive-img z-depth-2">
				</div>
			</div>
			<div class="row">
				<div class="col m4">
					<img src="{{ asset('img/fito-paez-bio2.jpg') }}" class="responsive-img z-depth-2">
				</div>
				<div class="col m8">
					<p class="mt-0">Tras ese empujón artístico, preparó su primer disco solista, "Del '63" (1984). Lo presentó primero en Rosario y luego en Buenos Aires, acompañado por Daniel Wirtz en batería, Fabián Gallardo en guitarra, teclados y voz, Tweety González en teclados y Paul Dorge en bajo, más los invitados especiales: Fabi Cantilo, Rubén Goldín y Miguel Zavaleta. Al tiempo, Llonch retornaría al bajo.</p>
					<p>En 1992 llegaría el que sería su mayor éxito: : "El amor después del amor". "Nadie puede y nadie debe vivir sin amor" es el estribillo que caracteriza a este trabajo, criticado por su superficialidad y "falto de compromiso". Sin embargo, el éxito comercial lo llevó a ser el disco más vendido de la historia del rock nacional (600 mil copias) con hits como el tema homónimo.</p>
					<p>El lanzamiento de un nuevo disco en 2017, a través de Sony Music, llegó precedido por la liberación de su primer corte, "Aleluya al sol", que presentó en octubre. "La ciudad liberada" fue grabado en Criteria Recording Studio Miami por Gustavo Celis, con la asistencia de Sam Allison. Fue mezclado por Franco Mascotti y masterizado en Sterling Sound de NYC por Ted Jensen.</p>
				</div>
			</div>
			
		</div>

		<div id="lugares" class="row tab-content">

			<div class="col s12">
				<div class="col s12 m6 l4">									
					<div class="white z-depth-2">
						<iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3756.1943227085408!2d-101.18477128552061!3d19.704349286730476!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x842d0e0d6bca646b%3A0x1b0a3a981724216f!2sRS+Viajes+Centro!5e0!3m2!1ses!2smx!4v1501091355750" width="100%" height="320" frameborder="0" style="border:0" allowfullscreen></iframe>
					
						<div class=" p-30">
							<h5><b>RS Viajes Centro</b></h5>
							<ul class="qcAddress">
								<li><div class="divider"></div></li>
								<li><i class="fa fa-map-marker"></i> <strong>DIRECCIÓN</strong>: <p>20 de Noviembre 917, Centro Histórico, 58000 Morelia, Mich.</p></li>
								<li><i class="fa fa-phone"></i> <strong>TELÉFONO</strong>: <p> 01 443 312 4639</p></li>
								<li><i class="fa fa-calendar"></i> <strong>HORARIO</strong>: <p>10:00 a 19:00 hrs. Lunes a Viernes y 10:30 a 14:00 hrs. los Sabados.</p></li>
								<li><i class="fa fa-globe"></i> <strong>Website</strong>: <p><a title="website" href="https://www.facebook.com/RsViajesCentro/" target="_blank">https://www.facebook.com/RsViajesCentro/</a></p></li>
							</ul>
						</div>
					</div>
			</div>

			</div>
		</div>

	</div>
</section>
<section class="section-video overlay overlay-5" style="background-image: url('https://img.youtube.com/vi/j6pCHLfo0KI/maxresdefault.jpg');">
	<div class="row center-align">
		<a class="white-text" id="modal-video-open" href="#modal-video" data-video="https://www.youtube.com/embed/j6pCHLfo0KI"><i class="material-icons">play_circle_filled</i></a>
		<p class="white-text"><i>11 y 6 - Fito Páez</i></p>
	</div>
</section>

<section id="compra" class="row section-comprar">
	<div class="col s12 mt-30">
		@if(Auth()->check())
			<div class="col s12 mb-15">
				<h5 class="mt-30 raleway quote">Da clic en el bloque que deseas para mostrar los asientos disponibles</h5>
			</div>
			<div class="col s12 m6 white div-border" style="padding-top:10px;">
				@include('maps.palacio-del-arte')
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
						{!! Form::hidden('img', 'img/fito-paez-morelia.jpg') !!}
						{!! Form::hidden('evento', 'Fito Páez') !!}
						{!! Form::hidden('fecha', '24 de octubre 2019') !!}
						{!! Form::hidden('lugar', 'Palacio del Arte') !!}
						{!! Form::hidden('ciudad', 'Morelia') !!}
						{!! Form::hidden('hora', '20:30 hrs') !!}
						{!! Form::hidden('event_type', '', ['id' => 'form_type']) !!}
						{!! Form::hidden('impresion_boleto', true) !!}
						{!! Form::hidden('db_table', 'fito_paez_morelia_24oct') !!}
						{!! Form::hidden('info', '--') !!}
						{!! Form::hidden('select_type', 'manual') !!}
						{!! Form::hidden('url', url('eventos/fito-paez-morelia')) !!}
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
			<iframe src="https://www.google.com/maps/embed?pb=!1m14!1m8!1m3!1d7513.1152293209125!2d-101.15297967475479!3d19.688870232422577!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x0%3A0x6be1c56a052e6bbb!2sPalacio%20Del%20Arte!5e0!3m2!1ses!2smx!4v1569210031659!5m2!1ses!2smx" width="100%" height="450" frameborder="0" style="border:0;" allowfullscreen=""></iframe>
		</div>
		<div class="col m3">
			<h5 class="quote raleway">Lugar del evento</h5>
			
			<h5 class="mt-30">Palacio del Arte</h5>
			<div class="col s10">
				<div class="divider"></div>
			</div>
			<ul class="fa-ul" style="margin-top: 30px;">
				<li class="mb-10"><i class="fa-li fa fa-map-marker"></i>Libramiento Oriente 3118, <br>Jardines del Rincón, 58270 <br>Morelia, Mich.</li>
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
		var table = 'fito_paez_morelia_24oct';
		var base_path = '{{ url('/') }}';
		var precios = {'Ruedo': 1500, 'Butacas': 1100, 'General': 800, 'Preventa': 650};
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