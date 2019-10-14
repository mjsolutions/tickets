@extends('layouts.main')

@section('title', 'Omar Marquez y Zabdiel')

@section('description', 'Omar Márquez y Zabdiel, Morelia Mich., 18 de Octubre, 21:00 hrs boletos en bolematico.com')

@section('styles')
<meta property="og:url"  content="https:www//bolematico.com/eventos/omar-marquez-zabdiel-morelia" />
<meta property="og:title" content="Omar Márquez y Zabdiel" />
<meta property="og:description" content="Omar Marquez y Zabdiel, Morelia Mich., 18 de Octubre, 21:00 hrs boletos en bolematico.com" />
<meta property="og:image" content="https://www.bolematico.com/img/omar-zabdiel-morelia.jpg" />

<script src="https://use.fontawesome.com/9b9c9dc667.js"></script>
<link rel="stylesheet" type="text/css" href="{{ asset('css/event-select-general.css') }}">
@endsection

@section('content')

<div class="image-header bg-del-olmo overlay overlay-5">

	<div class="row white-text">
		<h4>Omar Márquez y Zabdiel</h4>
		<div class="divider"></div>
		<p class="mb-0"><i>Café del Olmo - Morelia, Mich.</i></p>
		<p class="m-0"><i>18 de Octubre - 21:00 hrs.</i></p>
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
		<div id="precios" class="col s12 tab-content">

			<div class="col s8 offset-s2 m4 offset-m1 mb-30 card-flyer">
				<img src="{{ asset('img/omar-zabdiel-morelia.jpg') }}" alt="" class="responsive-img">
			</div>
			
			<div class="col s12 m5 offset-m1">				

				<div class="row">

					<div class="qcPricing col s12 center-align mb-10">
						<div class="box col s12">
							<header>
								<div class="col s12 teal accent-4">General</div>
							</header>
							<div class="price col s12"><span>$300</span> MXN</div>
						</div>
					</div>

				</div>

				<div class="row">
					<div class="divider"></div>
				</div>

				<div class="row center-align">
					
					@if(Auth()->check())

					<p class="">Selecciona el numero de lugares</p>
				
					{!! Form::open(['route' => 'payment.details', 'method' => 'POST', 'id' => 'eventForm'])!!}
					
					<div class="row">
						<div class="seats-selector-container">
							<button id="btn-minus" type="button" class="waves-effect waves-light selector-button selector-button-left"><i class="fa fa-minus"></i></button>
							<input id="num-asientos" min="1" max="10" type="number" name="asiento" class="selector-button-input" value="1" required>
							<button id="btn-plus" type="button" class="waves-effect waves-light selector-button selector-button-right"><i class="fa fa-plus"></i></button>
						</div>			
						
					</div>
					
					{!! Form::hidden('img', 'img/omar-zabdiel-morelia.jpg') !!}
					{!! Form::hidden('evento', 'Omar Márquez y Zabdiel') !!}
					{!! Form::hidden('fecha', '18 de Octubre 2019') !!}
					{!! Form::hidden('lugar', 'Café del Olmo') !!}
					{!! Form::hidden('ciudad', 'Morelia, Mich.') !!}
					{!! Form::hidden('hora', '21:00 hrs') !!}
					{!! Form::hidden('event_type', 'general') !!}
					{!! Form::hidden('impresion_boleto', true) !!}
					{!! Form::hidden('zona', 'General') !!}
					{!! Form::hidden('db_table', 'omar_zabdiel_morelia_18oct') !!}
					{!! Form::hidden('info', 'Favor de comunicarte al numero 4431880358 o 4432274979 para completar tu reservación.') !!}
					{!! Form::hidden('precio', 300) !!}
					{!! Form::hidden('url', url('eventos/omar-marquez-zabdiel-morelia')) !!}
					
						
					<div class="input-field center-align">
						{!! Form::submit('Siguiente',['class'=>'btn waves-effect waves-light orange accent-3']) !!}
					</div>	
						
					{!! Form::close() !!}

					<p>
						<i>* Puedes seleccionar un máximo de 10 lugares.</i><br>
						<i>* Se cobrara un cargo adicional por concepto de servicio.</i>
					</p>

					@else
						<p class="center-align raleway">Debes iniciar sesion para poder seleccionar tus lugares</p>
						<div class="center-align">
							<a href="#modal-login" class="modal-login-open btn waves-light orange accent-3">Ingresar</a>
						</div>
					@endif
						<p>* Informes y venta de boletos</p>
						<p><a href="tel:4431880358" style="background: #4caf50; color: #fff; padding: 5px 10px;">443-188-0358</a> / <a href="tel:4432274979" style="background: #4caf50; color: #fff; padding: 5px 10px;"> 443 227 4979</a></p>
				
				</div>
			</div>
		</div>

		<div id="detalles" class="col s12 tab-content">
			<div class="col s12">
				<h5 class="raleway quote">Omar Márquez</h5>
			</div>
			<div class="col s8 offset-s2 hide-on-med-and-up">
				<img src="{{ asset('img/omar-marquez-bio.jpg') }}" class="responsive-img">
			</div>
				
			<div class="col s12 m9">	
				<p>Omar Márquez, originario de Poza Rica Veracruz, crecio en Puebla, proviene de familia de talentos en el ámbito de la trova, desde tíos y primos, hasta su padre que se dedica al arte del piano.</p>
				<p>Omar Márquez ha compartido el escenario con artistas como Edgar Oceransky, Raúl Ornelas, Juan Solo, Manuel Medrano, Miguel Inzunza, entre otros y ha participado en festivales como: "Trova Fest" 2016, 2017 (Querétaro) "Festival Menguante" (Puebla / Querétaro) y el "Festival Cervantino" (Guanajuato)</p>

			</div>
			<div class="col s3 hide-on-small-only">
				<img src="{{ asset('img/omar-marquez-bio.jpg') }}" class="responsive-img">
			</div>
			<div class="clearfix"></div>
			<div class="col s12">
				<h5 class="raleway quote">Zabdiel</h5>
			</div>
			<div class="col m4 s12">
				<img src="{{ asset('img/zabdiel-bio.jpg') }}" class="responsive-img">
			</div>
			<div class="col s12 m8">	
				<p>Zabdiel Joaquín Monterrubio Vera es un cantautor pachuqueño nacido un 13 de abril de 1991 conocido en el mundo artístico como Zabdiel.</p>
				<p>Mediante la habilidad y el talento para ejecutar la guitarra tuvo la oportunidad de acercarse a los escenarios musicales locales a los 15 años, iniciando como telonero de figuras como Raúl Ornelas, Edgar Oceransky, Miguel Inzunza, Lazcano Malo, Fernando Delgadillo y demás trovadores y cantautores que en ese tiempo se presentaban en esta ciudad.</p>
				<p>Fue entonces que a los 17 años en una charla con el cantautor Miguel Luna, esté escuchó temas de su autoría y lo motivó para que los cantará en sus presentaciones, como es lógico a su corta edad este hecho le causó un poco de conflicto pues afirma que “un cantautor al presentar su obra, es como subir a desnudarse al escenario, conocerme tal cual soy”.</p>
				<p>El autor destaca que su fuente de inspiración es “la vida”, pues sus composiciones hablan de amor, desamor y vivenciales, enfatizó además que el común denominador en sus conciertos “es que ninguna canción suena igual”</p>

			</div>		
			<div class="clearfix"></div>
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
<section class="section-video overlay overlay-5" style="background-image: url('https://img.youtube.com/vi/J9wb6DX5em8/maxresdefault.jpg');">
	<div class="row center-align">
		<a class="white-text" id="modal-video-open" href="#modal-video" data-video="https://www.youtube.com/embed/J9wb6DX5em8"><i class="material-icons">play_circle_filled</i></a>
		<p class="white-text"><i>Omar Marquez - El Culpable</i></p>
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
			<iframe src="https://www.google.com/maps/embed?pb=!1m14!1m8!1m3!1d5792.87165265433!2d-101.1934791083879!3d19.703569760024276!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x0%3A0xd36469acf27f41ad!2sRestaurante-Bar+Caf%C3%A9+del+Olmo!5e0!3m2!1ses!2smx!4v1559057215646!5m2!1ses!2smx" width="100%" height="450" frameborder="0" style="border:0" allowfullscreen></iframe>
		</div>
		<div class="col m3">
			<h5 class="quote raleway">Lugar del evento</h5>
			
			<h5 class="mt-30">Café del Olmo</h5>
			<div class="col s10">
				<div class="divider"></div>
			</div>
			<ul class="fa-ul" style="margin-top: 30px;">
				<li class="mb-10"><i class="fa-li fa fa-map-marker"></i> Benito Juárez 95, <br>Centro Histórico, 58000 <br>Morelia, Mich.</li>
				<li><i class="fa-li fa fa-facebook"></i> <a title="website" style="color:#434546" href="https://www.facebook.com/cafedelolmooficial" target="_blank">cafedelolmooficial</a></li>
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
		$("#eventForm").submit(function(){
			if($("#num-asientos").val() < 1){
				Materialize.toast('La cantidad minima de boletos es: 1',2000);
				$("#num-asientos").val(1);
				return false;
			}else if($("#num-asientos").val() > 10){
				Materialize.toast('Puedes seleccionar hasta 10 boletos',2000);
				$("#num-asientos").val(10);
				return false;
			}
			return true;
		});

	</script>
@endsection