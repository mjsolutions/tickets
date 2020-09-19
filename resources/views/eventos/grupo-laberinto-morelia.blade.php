@extends('layouts.main')

@section('title', 'Grupo Laberinto')

@section('description', 'Grupo Laberinto, Pabellón Don Vasco, 23 de febrero, 16:00 hrs boletos en bolematico.com')

@section('styles')
<meta property="og:url"  content="https:www//bolematico.com/eventos/grupo-laberinto-morelia" />
<meta property="og:title" content="Grupo Laberinto" />
<meta property="og:description" content="Grupo Laberinto, Pabellón Don Vasco, 23 de febrero, 16:00 hrs boletos en bolematico.com" />
<meta property="og:image" content="https://www.bolematico.com/img/laberinto-morelia.jpg" />
<link rel="stylesheet" type="text/css" href="{{ asset('css/event-select-general.css') }}">
<script src="https://use.fontawesome.com/9b9c9dc667.js"></script>
@endsection

@section('content')

<div class="image-header bg-4 overlay overlay-5">

	<div class="row white-text">
		<h4>Jaripe de Lujo</h4>
		<div class="divider"></div>
		<p class="mb-0"><i>Pabellón Don Vasco - Morelia, Mich.</i></p>
		<p class="m-0"><i>23 de febrero - 16:00 hrs.</i></p>
	</div>
	<a href="#compra" class="btn waves-light waves-effect page-scroll"><b>Comprar</b> <i class="fa fa-ticket" aria-hidden="true"></i></a>
</div>

<section class="container">
	<div class="row">
		<div class="col s12">
			<ul class="tabs">
				<li class="tab "><a class="active" href="#precios">Precios</a></li>
				<li class="tab "><a href="#detalles">Detalles</a></li>
				{{-- <li class="tab "><a id="tab_link-lugares" href="#lugares">Lugares de venta</a></li> --}}
			</ul>
		</div>
		<div id="precios" class="col s12 tab-content" style="padding: 40px 0.75rem!important;">

			<div class="col s8 offset-s2 m4 offset-m1 mb-30 card-flyer">
				<img src="{{ asset('img/laberinto-morelia.jpg') }}" alt="" class="responsive-img">
			</div>
			
			<div class="col s12 m5 offset-m2">				

				<div class="row">
					<div class="qcPricing col s12 center-align mb-10">
						<div class="box col s12">
							<header>
								<div class="col s12 teal accent-4">General</div>
							</header>
							<div class="price col s12"><span>$190</span> MXN</div>
						</div>
					</div>

				</div>

				<div class="row center-align">
					
					@if(Auth()->check())

					<p class="">Selecciona tu zona y numero de lugares</p>
				
					{!! Form::open(['route' => 'payment.details', 'method' => 'POST', 'id' => 'eventForm'])!!}

					<div class="row">

						<div class="seats-selector-container">
							<button id="btn-minus" type="button" class="waves-effect waves-light selector-button selector-button-left"><i class="fa fa-minus"></i></button>
							<input id="num-asientos" min="1" max="10" type="number" name="asiento" class="selector-button-input" value="1" required>
							<button id="btn-plus" type="button" class="waves-effect waves-light selector-button selector-button-right"><i class="fa fa-plus"></i></button>
						</div>			
						
					</div>
					
					{!! Form::hidden('img', 'img/laberinto-morelia.jpg') !!}
					{!! Form::hidden('evento', 'Grupo Laberinto') !!}
					{!! Form::hidden('fecha', '23 de febrero 2020') !!}
					{!! Form::hidden('lugar', 'Pabellón Don Vasco') !!}
					{!! Form::hidden('ciudad', 'Morelia Mich.') !!}
					{!! Form::hidden('hora', '16:00 hrs') !!}
					{!! Form::hidden('zona', 'General') !!}
					{!! Form::hidden('event_type', 'general') !!}
					{!! Form::hidden('impresion_boleto', true) !!}
					{!! Form::hidden('db_table', 'laberinto_morelia_23feb') !!}
					{!! Form::hidden('info', '') !!}
					{!! Form::hidden('precio', 190) !!}
					{!! Form::hidden('url', url('eventos/grupo-laberinto-morelia')) !!}
					
					<div class="input-field center-align">
						{!! Form::submit('Siguiente',['class'=>'btn waves-effect waves-light orange accent-3']) !!}
					</div>	
						
					{!! Form::close() !!}

					<p>
						<i>* Puedes seleccionar un máximo de 10 lugares.</i>
					</p>
                    <p> * Al realizar tu compra en línea se realiza un cargo extra de 10% por concepto de servicio.</p>

					@else
						<p class="center-align raleway">Debes iniciar sesion para poder seleccionar tus lugares</p>
						<div class="center-align">
							<a href="#modal-login" class="modal-login-open btn waves-light orange accent-3">Ingresar</a>
						</div>
					@endif
						{{-- <p>* Informes</p>
						<p><a href="tel:4616143812" style="background: #4caf50; color: #fff; padding: 5px 10px;">461 614 3812</a> / <a href="tel:4434603155" style="background: #4caf50; color: #fff; padding: 5px 10px;">443 460 3155</a></p> --}}
				
				</div>

			</div>

		</div>

		<div id="detalles" class="col s12 tab-content">
				
			<div class="col s12">	
				<p>Laberinto, banda formada en 1987 en Ciudad Obregón del Estado de Sonora (México), se especializa en corridos, rancheras, boleros y una bailable fusión tropical similar al merengue. En su primera grabación, el grupo interpretó este último estilo, pero rápidamente expandió sus horizontes para incluir en su repertorio rancheras, corridos y baladas, un giro estilístico quele significó una mayor aceptación por parte de audiencias de otros estados de México y de los Estados Unidos. El corrido en particular fue el estilo que más éxitos le acarreó a Laberinto, los que aparecen en álbumes tales como Corridos Recien Horneados, Corridos Pesadisimos, y la compilación Corridos de Grueso Calibre. </p>

			</div>
		</div>

		{{-- <div id="lugares" class="col s12 tab-content">
			<div class="col s12">
				<h5 class="mb-30 quote">Además de Bolematico, puedes adquirir tus entradas en:</h5>
			</div>

			<div class="col s12">									
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

		</div> --}}

	</div>
</section>
<section class="section-video overlay overlay-5" style="background-image: url('https://img.youtube.com/vi/FmhT1prV2Iw/maxresdefault.jpg');">
	<div class="row center-align">
		<a class="white-text" id="modal-video-open" href="#modal-video" data-video="https://www.youtube.com/embed/FmhT1prV2Iw"><i class="material-icons">play_circle_filled</i></a>
		<p class="white-text"><i>Grupo Laberinto - El Indio Enamorado</i></p>
	</div>
</section>
<section>
	
	<div class="row">
		<p class="center-align mt-50">Si tienes alguna duda sobre este evento no dudes en contactarnos</p>
		<div class="row center-align">
			<a href="{{ route('contacto') }}" class="btn waves-light waves-effect green center-align ls-1">CONTACTO</a>
		</div>
	</div>
</section>

<section class="section-lugar">
	<div class="row">
		<div class="col m9">
			<iframe src="https://www.google.com/maps/embed?pb=!1m14!1m8!1m3!1d15022.630258192808!2d-101.1823412!3d19.727198!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x0%3A0x3afdd7fabbec44b2!2sPabell%C3%B3n%20Don%20Vasco!5e0!3m2!1ses!2smx!4v1577996564778!5m2!1ses!2smx" width="100%" height="450" frameborder="0" style="border:0;" allowfullscreen=""></iframe>
		</div>
		<div class="col m3">
			<h5 class="quote raleway">Lugar del evento</h5>
			
			<h5 class="mt-30">Pabellón Don Vasco</h5>
			<div class="col s10">
				<div class="divider"></div>
			</div>
			<ul class="fa-ul" style="margin-top: 30px;">
				<li class="mb-10"><i class="fa-li fa fa-map-marker"></i> Trabajadores de Agricultura, <br>Lomas de Santiaguito, <br>Morelia, Mich.</li>
				{{-- <li><i class="fa-li fa fa-facebook"></i> <a title="website" style="color:#434546" href="La-Botellita_Comedor-Mexicano-100242048134641" target="_blank">La Botellita Comedor Mexicano</a></li> --}}
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

		$("#btn-plus").click(function(){
		    var value = $("#num-asientos").val();
		    if(value < 10){
		    	$("#num-asientos").val(++value);
		    }
		});
		$("#btn-minus").click(function(){
		    var value = $("#num-asientos").val();
		    if(value > 1) {
		    	$("#num-asientos").val(--value);
		    }
		});
		$("#eventForm").submit(function(e){
			if($("#num-asientos").val() < 1){
				Materialize.toast('La cantidad minima de boletos es: 1',3000);
				$("#num-asientos").val(1);
				return false;
			}else if($("#num-asientos").val() > 10){
				Materialize.toast('Puedes seleccionar hasta 10 boletos',3000);
				$("#num-asientos").val(10);
				return false;
			}
			return true;
		});

	</script>
@endsection