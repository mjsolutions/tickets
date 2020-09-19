@extends('layouts.main')

@section('title', 'Las Aventuras de...')

@section('description', 'Las Aventuras de..., Teatro Obrero, Zamora Mich., 21 de marzo, 18:00 hrs')

@section('styles')
<meta property="og:url"  content="https://www.bolematico.com/eventos/las-aventuras-de-18hrs" />
<meta property="og:title" content="Las Aventuras de..." />
<meta property="og:description" content="Las Aventuras de..., Teatro Obrero, Zamora Mich., 21 de marzo, 18:00 hrs" />
<meta property="og:image" content="https://www.bolematico.com/img/aventuras-de-zamora.jpg" />
<link rel="stylesheet" type="text/css" href="{{ asset('css/event-select-general.css') }}">
<script src="https://use.fontawesome.com/9b9c9dc667.js"></script>
@endsection

@section('content')

<div class="image-header bg-4 overlay overlay-5">

	<div class="row white-text">
		<h4>Las Aventuras de...</h4>
		<div class="divider"></div>
		<p class="mb-0"><i>Teatro Obrero - Zamora Mich.</i></p>
		<p class="m-0"><i>21 de marzo - 18:00 hrs.</i></p>
	</div>
	<a href="#compra" class="btn waves-light waves-effect page-scroll"><b>Comprar</b> <i class="fa fa-ticket" aria-hidden="true"></i></a>
</div>

<section class="container">
	<div class="row">
		<div class="col s12">
			<ul class="tabs">
				<li class="tab "><a class="active" href="#precios">Precios</a></li>
				{{-- <li class="tab "><a href="#detalles">Detalles</a></li> --}}
				<li class="tab "><a id="tab_link-lugares" href="#lugares">Lugares de venta</a></li>
			</ul>
		</div>
		<div id="precios" class="col s12 tab-content">

			<div class="col s8 offset-s2 m4 offset-m1 mb-30 card-flyer">
				<img src="{{ asset('img/aventuras-de-zamora.jpg') }}" alt="" class="responsive-img">
			</div>
			
			<div class="col s12 m5 offset-m2">				

				<div class="row">
					
					<div class="qcPricing col s12 center-align mb-10">
						<div class="box col s12">
							<header>
								<div class="col s12 teal accent-4" style="line-height: 1.1;">VIP <br><small>(solo en Harman Distribuidora)</small></div>
							</header>
							<div class="price col s12"><span>$270</span> MXN</div>
						</div>
					</div>					
					<div class="qcPricing col s12 center-align mb-10">
						<div class="box col s12">
							<header>
								<div class="col s12 amber darken-1">Oro</div>
							</header>
							<div class="price col s12"><span>$170</span> MXN</div>
						</div>
					</div>

				</div>

				<div class="row center-align">
					
					@if(Auth()->check())
				
					{!! Form::open(['route' => 'payment.details', 'method' => 'POST', 'id' => 'eventForm'])!!}

					<div class="row">
						<div class="col s12">
							<p class="center-align"><b>Zona:</b> Oro | <b>Función:</b> 18hrs.</p>
						</div>
					</div>

					<div class="row">

						<div class="seats-selector-container">
							<button id="btn-minus" type="button" class="waves-effect waves-light selector-button selector-button-left"><i class="fa fa-minus"></i></button>
							<input id="num-asientos" min="1" max="10" type="number" name="asiento" class="selector-button-input" value="1" required>
							<button id="btn-plus" type="button" class="waves-effect waves-light selector-button selector-button-right"><i class="fa fa-plus"></i></button>
						</div>			
						
					</div>
					
					{!! Form::hidden('img', 'img/aventuras-de-zamora.jpg') !!}
					{!! Form::hidden('evento', 'Las Aventuras de...') !!}
					{!! Form::hidden('fecha', '21 de marzo 2020') !!}
					{!! Form::hidden('lugar', 'Teatro Obrero') !!}
					{!! Form::hidden('ciudad', 'Zamora Mich.') !!}
					{!! Form::hidden('hora', '18:00 hrs') !!}
					{!! Form::hidden('zona', 'Oro') !!}
					{!! Form::hidden('event_type', 'general') !!}
					{!! Form::hidden('impresion_boleto', true) !!}
					{!! Form::hidden('db_table', 'aventuras_de_zamora_21mar18') !!}
					{!! Form::hidden('info', '') !!}
					{!! Form::hidden('precio', 170) !!}
					{!! Form::hidden('url', url('eventos/las-aventuras-de-18hrs')) !!}
					
					<div class="input-field center-align">
						{!! Form::submit('Siguiente',['class'=>'btn waves-effect waves-light orange accent-3']) !!}
					</div>	
						
					{!! Form::close() !!}

					<p>
						<i>* Puedes seleccionar un máximo de 10 lugares.</i>
					</p>
          <p> * Al realizar tu compra en línea se realiza un cargo extra de 10% por concepto de servicio.</p>
          <p> * Informes <br> <a href="tel:4431295363" style="background: #4caf50; color: #fff; padding: 5px 10px;">443-129-5363</a></p>

					@else
						<p class="center-align raleway">Debes iniciar sesion para poder seleccionar tus lugares</p>
						<div class="center-align">
							<a href="#modal-login" class="modal-login-open btn waves-light orange accent-3">Ingresar</a>
						</div>
					@endif
				
				</div>

			</div>
		</div>

		{{-- <div id="detalles" class="col s12 tab-content">
			<div class="col s8 offset-s2 hide-on-med-and-up">
				<img src="{{ asset('img/macario-brujo-bio.jpg') }}" class="responsive-img">
			</div>
				
			<div class="col s12 m9">	
        <p>Héctor Fernández, más conocido como Macario Brujo, El Dios satánico del sexo, la leyenda del camino como se autodenomina, es un comediante que practica el Stand Up .</p>
        <p>Él expresa que los mexicanos realmente no se ríen de todo como en realidad se cree “Los mexicanos nos tomamos la vida muy en serio, nos exigimos demasiado, igual no vamos a morir”.</p>
        <p>Macario es un comediante de un humor muy ácido y que a pocos agrada, pero en la vida real conoce los problemas de la sociedad, busca mejorar profesionalmente y es consciente de la situación que el país sufre</p>                

			</div>
			<div class="col s3 hide-on-small-only">
				<img src="{{ asset('img/macario-brujo-bio.jpg') }}" class="responsive-img">
			</div>
			<div class="clearfix"></div>	
			
		</div> --}}

		<div id="lugares" class="col s12 tab-content">
			<div class="col s12">
				<h5 class="mb-30 quote">Además de Bolematico, puedes adquirir tus entradas en:</h5>
			</div>

			<div class="col s12">

				<div class="white z-depth-2">
					<iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3749.3338841922296!2d-102.29961734894616!3d19.994496827586538!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x842e88d4d726f5c3%3A0x3156e84919193332!2sHarmand%20Distribuidoras!5e0!3m2!1ses!2smx!4v1584146199002!5m2!1ses!2smx" width="100%" height="450" frameborder="0" style="border:0;" allowfullscreen="" aria-hidden="false" tabindex="0"></iframe>

					<div class=" p-30">
						<h5><b>Harman Distribuidoras</b></h5>
						<ul class="qcAddress">
							<li><div class="divider"></div></li>
							<li><i class="fa fa-map-marker"></i> <strong>DIRECCIÓN</strong>: <p>Av. Juárez Eje Pte. #718, El Porvenir, 59620 Zamora Mich.</p></li>
							{{-- <li><i class="fa fa-phone"></i> <strong>TELÉFONO</strong>: <p> 01 443 312 4639</p></li>
							<li><i class="fa fa-calendar"></i> <strong>HORARIO</strong>: <p>10:00 a 19:00 hrs. Lunes a Viernes y 10:30 a 14:00 hrs. los Sabados.</p></li>
							<li><i class="fa fa-globe"></i> <strong>Website</strong>: <p><a title="website" href="https://www.facebook.com/RsViajesCentro/" target="_blank">https://www.facebook.com/RsViajesCentro/</a></p></li> --}}
						</ul>
					</div>
				</div>

			</div>

		</div>

	</div>
</section>
{{-- <section class="section-video overlay overlay-5" style="background-image: url('https://img.youtube.com/vi/O7EpXuSpWho/maxresdefault.jpg');">
	<div class="row center-align">
		<a class="white-text" id="modal-video-open" href="#modal-video" data-video="https://www.youtube.com/embed/O7EpXuSpWho"><i class="material-icons">play_circle_filled</i></a>
		<p class="white-text"><i>Macario Brujo</i></p>
	</div>
</section> --}}

<section id="compra" class="section-comprar">
	<div class="row">
		<p class="center-align">Si tienes alguna duda sobre este evento no dudes en contactarnos</p>
		<div class="row center-align">
			<a href="{{ route('contacto') }}" class="btn waves-light waves-effect green center-align ls-1">CONTACTO</a>
		</div>
	</div>
</section>

<section class="section-lugar">
	<div class="row">
		<div class="col m9">
			<iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3749.612642868134!2d-102.28475184894623!3d19.982786127967902!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x842e88c66dbfb62d%3A0xe81515a6b5cd2ba1!2sTeatro%20Obrero!5e0!3m2!1ses!2smx!4v1584147174935!5m2!1ses!2smx" width="100%" height="450" frameborder="0" style="border:0;" allowfullscreen="" aria-hidden="false" tabindex="0"></iframe>
		</div>
		<div class="col m3">
			<h5 class="quote raleway">Lugar del evento</h5>
			
			<h5 class="mt-30">Teatro Obrero</h5>
			<div class="col s10">
				<div class="divider"></div>
			</div>
			<ul class="fa-ul" style="margin-top: 30px;">
				<li class="mb-10"><i class="fa-li fa fa-map-marker"></i> 5 de Mayo, Jardines de Catedral, <br>59670 Zamora Mich.</li>
				{{-- <li><i class="fa-li fa fa-facebook"></i> <a title="website" style="color:#434546" href="https://www.facebook.com/LaBotellitaComedorMexicano" target="_blank">LaBotellitaComedorMexicano</a></li> --}}
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