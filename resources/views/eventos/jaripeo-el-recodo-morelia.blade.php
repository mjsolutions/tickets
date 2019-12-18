@extends('layouts.main')

@section('title', 'Jaripeo con Banda El Recodo')

@section('description', 'Jaripeo con Banda El Recodo, Morelia Mich., 08 de diciembre, 16:00 hrs boletos en bolematico.com')

@section('styles')
<meta property="og:url"  content="https:www//bolematico.com/eventos/jaripeo-el-recodo-morelia" />
<meta property="og:title" content="Jaripeo con Banda El Recodo" />
<meta property="og:description" content="Jaripeo con Banda El Recodo, Morelia Mich., 08 de diciembre, 16:00 hrs boletos en bolematico.com" />
<meta property="og:image" content="https://www.bolematico.com/img/jaripeo-el-recodo.jpg" />

<script src="https://use.fontawesome.com/9b9c9dc667.js"></script>
<link rel="stylesheet" type="text/css" href="{{ asset('css/event-select-general.css') }}">
@endsection

@section('content')

<div class="image-header bg-4 overlay overlay-5">

	<div class="row white-text">
		<h4>Jaripeo con Banda El Recodo</h4>
		<div class="divider"></div>
		<p class="mb-0"><i>Plaza Monumental de Morelia - Morelia, Mich.</i></p>
		<p class="m-0"><i>08 de diciembre - 16:00 hrs.</i></p>
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
				<img src="{{ asset('img/jaripeo-el-recodo.jpg') }}" alt="" class="responsive-img">
			</div>
			
			<div class="col s12 m5 offset-m1">				

				<div class="row">

					<div class="qcPricing col s12 center-align mb-10">
						<div class="box col s12">
							<header>
								<div class="col s12 teal accent-4">Preventa</div>
							</header>
							<div class="price col s12"><span>$260</span> MXN</div>
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
					
					{!! Form::hidden('img', 'img/jaripeo-el-recodo.jpg') !!}
					{!! Form::hidden('evento', 'Jaripeo con Banda El Recodo') !!}
					{!! Form::hidden('fecha', '08 de diciembre 2019') !!}
					{!! Form::hidden('lugar', 'Plaza Monumental de Morelia') !!}
					{!! Form::hidden('ciudad', 'Morelia, Mich.') !!}
					{!! Form::hidden('hora', '16:00 hrs') !!}
					{!! Form::hidden('event_type', 'general') !!}
					{!! Form::hidden('impresion_boleto', true) !!}
					{!! Form::hidden('zona', 'Preventa') !!}
					{!! Form::hidden('db_table', 'jaripeo_recodo_morelia_08dic') !!}
					{!! Form::hidden('info', 'Debes presentarte el día 08 de diciembre a las 16:00 con identificación en las taquillas de la monumental para hacer válido tu boleto.') !!}
					{!! Form::hidden('precio', 260) !!}
					{!! Form::hidden('url', url('eventos/jaripeo-el-recodo-morelia')) !!}
					
						
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
						{{-- <p>* Informes y venta de boletos</p>
						<p><a href="tel:4431880358" style="background: #4caf50; color: #fff; padding: 5px 10px;">443-188-0358</a> / <a href="tel:4432274979" style="background: #4caf50; color: #fff; padding: 5px 10px;"> 443 227 4979</a></p> --}}
						<p><i>Deberás presentarte el día del evento a las 16:00 hrs en las taquillas de la monumental con identificación oficial para la entrega de tus entradas.</i></p>
				
				</div>
			</div>
		</div>

		<div id="detalles" class="col s12 tab-content">
			<div class="col s12">
				<h5 class="raleway quote">Banda El Recodo</h5>
			</div>
			<div class="col s8 offset-s2 hide-on-med-and-up">
				<img src="{{ asset('img/omar-marquez-bio.jpg') }}" class="responsive-img">
			</div>
				
			<div class="col s12 m9">	
				<p>Hablar de LA BANDA EL RECODO DE DON CRUZ LIZARRAGA, es hablar de una trayectoria musical de más de 7 décadas y del nombre más significativo y reconocido dentro del genero de la música de banda y grupera, la madre de todas las bandas ha participado en grandes eventos al rededor de todo el mundo.</p>
				<p>Nuestra música, el característico "iuuu" por el que se nos ha reconocido al rededor del mundo, las notas alegres y las letras positivas de nuestra música ha puesto en alto el nombre de México, de Mazatlán, de Sinaloa... De El Recodo.</p>
				<p>Don Cruz se inició actuando tanto en bailes populares como en los de la alta sociedad local en Mazatlán en el año de 1937, hasta que al año siguiente formó su propia banda, a la cual le dio el nombre de EL RECODO como homenaje a su pequeño pueblo natal. Nadie en ese momento sospechaba siquiera que Don Cruz Lizárraga había fundado la banda de tambora que iba a tener mayor repercusión en el país y alcances a nivel mundial. </p>

			</div>
			<div class="col s3 hide-on-small-only">
				<img src="{{ asset('img/omar-marquez-bio.jpg') }}" class="responsive-img">
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
<section class="section-video overlay overlay-5" style="background-image: url('https://img.youtube.com/vi/VQFBYMzRaUw/maxresdefault.jpg');">
	<div class="row center-align">
		<a class="white-text" id="modal-video-open" href="#modal-video" data-video="https://www.youtube.com/embed/VQFBYMzRaUw"><i class="material-icons">play_circle_filled</i></a>
		<p class="white-text"><i>Banda El Recodo De Cruz Lizárraga - Hubiera Sido Como Tú (Versión Balada)</i></p>
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
			<iframe src="https://www.google.com/maps/embed?pb=!1m14!1m8!1m3!1d15025.148143205422!2d-101.2110247!3d19.7004001!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x0%3A0x55608e40e428073!2sPlaza%20de%20Toros%20Monumental%20de%20Morelia!5e0!3m2!1ses!2smx!4v1575385887853!5m2!1ses!2smx" width="100%" height="450" frameborder="0" style="border:0;" allowfullscreen=""></iframe>
		</div>
		<div class="col m3">
			<h5 class="quote raleway">Lugar del evento</h5>
			
			<h5 class="mt-30">Plaza Monumental de Morelia</h5>
			<div class="col s10">
				<div class="divider"></div>
			</div>
			<ul class="fa-ul" style="margin-top: 30px;">
				<li class="mb-10"><i class="fa-li fa fa-map-marker"></i> Jesús Solórzano Dávalos 164, <br>Nueva Valladolid, 58190 <br>Morelia, Mich.</li>
				{{-- <li><i class="fa-li fa fa-facebook"></i> <a title="website" style="color:#434546" href="https://www.facebook.com/cafedelolmooficial" target="_blank">cafedelolmooficial</a></li> --}}
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