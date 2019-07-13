@extends('layouts.main')

@section('title', 'Entre Ellas')

@section('description', 'Entre Ellas, Morelia 13 de junio, Teatro Morelos, 21:00 hrs boletos en RS Viajes Centro, taquillas del planetario y bolematico.com')

@section('styles')
<meta property="og:url"  content="https://www.bolematico.com/eventos/entre-ellas-morelia" />
<meta property="og:title" content="Entre Ellas" />
<meta property="og:type" content="article" />
<meta property="og:description" content="Entre Ellas, Morelia 13 de junio, Teatro Morelos, 21:00 hrs boletos en RS Viajes Centro, taquillas del planetario y bolematico.com" />
<meta property="og:image" content="https://www.bolematico.com/img/entre-ellas.jpg" />

<script src="https://use.fontawesome.com/9b9c9dc667.js"></script>
<link rel="stylesheet" type="text/css" href="{{ asset('css/event-select-manual.css') }}">
@endsection

@section('content')

<div class="image-header bg-morelos overlay overlay-5">

	<div class="row white-text">
		<h4>Entre Ellas</h4>
		<div class="divider"></div>
		<p class="mb-0"><i>Teatro Morelos - Morelia</i></p>
		<p class="m-0"><i>13 de junio - 21:00 hrs.</i></p>
	</div>
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
				<img src="{{ asset('img/entre-ellas.jpg') }}" alt="" class="responsive-img">
			</div>
			
			<div class="col s12 m6 offset-m1">				

				{{-- <div class="row">

					<div class="qcPricing col s12 center-align mb-10">
						<div class="box col s12">
							<header>
								<div class="col s12 teal accent-4">Diamante</div>
							</header>
							<div class="price col s12"><span>$ 550</span> MXN.</div>
						</div>
					</div>

					<div class="qcPricing col s12 center-align mb-10">
						<div class="box col s12">
							<header>
								<div class="col s12 amber darken-1">Oro</div>
							</header>
							<div class="price col s12"><span>$ 400</span> MXN.</div>
						</div>
					</div>

					<div class="qcPricing col s12 center-align mb-10">
						<div class="box col s12">
							<header>
								<div class="col s12 grey lighten-1">Plata</div>
							</header>
							<div class="price col s12"><span>$ 250</span> MXN.</div>
						</div>
					</div>

				</div> --}}
				<div class="row">
					<h5 class="center-align red-text"> <strong>¡AVISO IMPORTANTE!</strong></h5>
					<div class="divider"></div>
					<p>La obra de teatro “Entre Ellas” protagonizada por artistas como Lucila Mariscal (Lencha);Liliana Arriaga (La Chupitos); Aida Pierce, Bárbara Torres (Excelsa); Bettina Salazar (Olga Sana); Alejandra Rivera (La Jarocha) e Isabel Martínez (La Tarabilla); que estaba programada una presentación el próximo día JUEVES 13 DE JUNIO, en las instalaciones del Teatro Morelos de la ciudad de Morelia, Mich. <strong>NO SE LLEVARA A CABO</strong>, debido a causas de fuerza Mayor provocados por empresarios que llevarían la misma obra de teatro a la Ciudad de Los Reyes Mich, incumpliendo acuerdos que forzan a la producción de dicha obra a tener que cancelar la presentación en la Capital del estado</p>
					<p>La empresa PRODUCCIONES MICHOACAN al igual que la Producción de la Obra “ENTRE ELLAS” tratando de lograr algún acuerdo, toman la decisión de tener que CANCELAR LA PRESENTACION. Considerando que ambas partes no tienen responsabilidad civil o legal alguna ante dicha cancelación</p>
					<p>La empresa BOLEMATICO, será la encargada de realizar los reembolsos correspondientes en las taquillas del Planetario a partir de la publicación del presente, en un horario de Lunes a Sábado de las 11:00 a las 19:00 Horas, las personas que adquirieron sus boletos a través de este portal favor de comunicarse al 4521741255 para sus reembolsos.</p>
					<p>A los medios de comunicación les agradecemos sus atenciones para la difusión de dicha obra de teatro y de igual forma es solicitamos el esparcimiento del presente comunicado; Sin más por el momento, nos espedimos quedando a sus apreciables órdenes</p>
					<p class="center-align">ATENTAMENTE</p>
					<p class="center-align">PRODUCCIONES MICHOACAN & BOLEMATICO</p>
				</div>

				<div class="row">
					<div class="divider"></div>
					<div class="col s10 offset-s1">
						<p class="mt-30">* Al realizar tu compra en línea se realiza un cargo extra de <b>10%</b> por concepto de servicio.</p>
						<p>* Informes al: <a href="tel:4521741255" style="background: #4caf50; color: #fff; padding: 5px 10px;"> 452-174-1255</a> </p>
					</div>
				</div>
			</div>
		</div>

		<div id="detalles" class="col s12 tab-content">
			<div class="col s12">
				<h5 class="quote"><strong>Entre Ellas </strong> <br></h5>
				<p>Esta comedia reúne a las mejores comediantes de México, compuesta por diferentes historias que se centran en el comportamiento entre las mujeres con las mujeres, guerra entre las mujeres, ven y no pararas de reír, descubre ¿quien será la más perra?</p>				
			</div>			
		</div>

		<div id="lugares" class="col s12 tab-content">

			<div class="col s12">
				<h5 class="mb-30 quote">Además de Bolematico, puedes adquirir tus entradas en:</h5>
			</div>

			<div class="col s12 m6">									
				<!-- ## VENUE MAP ## -->
				<div class="white z-depth-2">
					<iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3756.1943227085408!2d-101.18477128552061!3d19.704349286730476!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x842d0e0d6bca646b%3A0x1b0a3a981724216f!2sRS+Viajes+Centro!5e0!3m2!1ses!2smx!4v1501091355750" width="100%" height="320" frameborder="0" style="border:0" allowfullscreen></iframe>
				
				<!-- ## ADDRESS LIST ## -->
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

			<div class="col s12 m6">									
				<!-- ## VENUE MAP ## -->
				<div class="white z-depth-2">
					<iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3756.6546912563167!2d-101.18560468584354!3d19.68473203767239!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x842d0de79c733455%3A0x2bb6c9a37c54bca5!2sPlanetario+de+Morelia!5e0!3m2!1ses!2smx!4v1499195093931" width="100%" height="320" frameborder="0" style="border:0" allowfullscreen></iframe>
				
				<!-- ## ADDRESS LIST ## -->
					<div class=" p-30">
						<h5><b>Taquillas del planetario</b></h5>
						<ul class="qcAddress">
							<li><div class="divider"></div></li>
							<li><i class="fa fa-map-marker"></i> <strong>DIRECCIÓN</strong>: <p>Av. Ventura Puente s/n, Félix Ireta, 58070 Morelia, Mich.</p></li>
							<li><i class="fa fa-phone"></i> <strong>TELÉFONO</strong>: <p> 443 232 4400 ext. 160</p></li>
							<li><i class="fa fa-calendar"></i> <strong>HORARIO</strong>: <p>11:00 a 19:00 hrs. Lunes a Sabado. </p></li>
							<li><i class="fa fa-globe"></i> <strong>Website</strong>: <p><a title="website" href="http://ceconexpo.com" target="_blank"></a>http://ceconexpo.com</p></li>
						</ul>
					</div>
				</div>

			</div>		

		</div>

	</div>
</section>
<section class="section-video overlay overlay-5" style="background-image: url('https://img.youtube.com/vi/TJpSZhre4Iw/hqdefault.jpg');">
	<div class="row center-align">
		<a class="white-text" id="modal-video-open" href="#modal-video" data-video="https://www.youtube.com/embed/TJpSZhre4Iw"><i class="material-icons">play_circle_filled</i></a>
		<p class="white-text"><i>Entre ellas</i></p>
	</div>
</section>
<section id="compra" class="section-comprar">
	{{-- <div class="row mt-30">
	@if(Auth()->check())
		<div class="col s12 mb-15">
			<h5 class="mt-30 raleway quote">Da clic en el bloque que deseas para mostrar los asientos disponibles</h5>
		</div>
		<div class="col s12 m6">
			@include('maps.teatro-morelos')
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
					{!! Form::hidden('img', 'img/entre-ellas.jpg') !!}
					{!! Form::hidden('evento', 'Entre Ellas') !!}
					{!! Form::hidden('fecha', '13 de junio 2019') !!}
					{!! Form::hidden('lugar', 'Teatro Morelos') !!}
					{!! Form::hidden('ciudad', 'Morelia') !!}
					{!! Form::hidden('hora', '21:00 hrs') !!}
					{!! Form::hidden('event_type', 'numerado') !!}
					{!! Form::hidden('impresion_boleto', true) !!}
					{!! Form::hidden('db_table', 'entre_ellas_morelia_13jun') !!}
					{!! Form::hidden('info', '--') !!}
					{!! Form::hidden('select_type', 'manual') !!}
					{!! Form::hidden('url', url('eventos/entre-ellas-morelia')) !!}
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
		<div class="col m8 offset-m2">
			<h5 class="center-align raleway">Venta de boletos en RS Viajes Centro y Taquillas del Planetario</h5>
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
			<iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3756.7086236790406!2d-101.1852498856141!3d19.682432637745716!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x842d0de872e8d51b%3A0x12e74c7f08b607c2!2sTeatro+Jos%C3%A9+Mar%C3%ADa+Morelos!5e0!3m2!1ses!2smx!4v1559065457348!5m2!1ses!2smx" width="100%" height="450" frameborder="0" style="border:0" allowfullscreen></iframe>
		</div>
		<div class="col m3">
			<h5 class="quote raleway">Lugar del evento</h5>
			
			<h5 class="mt-30">Teatro Morelos</h5>
			<div class="col s10">
				<div class="divider"></div>
			</div>
			<ul class="fa-ul" style="margin-top: 30px;">
				<li class="mb-10"><i class="fa-li fa fa-map-marker"></i> Av. Ventura Puente s/n, <br>Félix Ireta, 58070 <br>Morelia, Mich.</li>
				<li><i class="fa-li fa fa-globe"></i> <a title="website" style="color:#434546" href="http://ceconexpo.com/" target="_blank">http://ceconexpo.com/</a></li>
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
		var table = "entre_ellas_morelia_13jun";
		var base_path = '{{ url('/') }}';
		var precios = {'Diamante': 550, 'Oro': 400, 'Plata': 250};
		var special_char_n = 'NN';

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