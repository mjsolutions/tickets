@extends('layouts.main')

@section('title', 'Pedro Guerra - Morelia')

@section('description', 'Pedro Guerra en Morelia, Café del Olmo, 11 de marzo, 21:00 hrs boletos en Café del Olmo y bolematico.com')

@section('styles')
<meta property="og:url"  content="https://www.bolematico.com/eventos/pedro-guerra-morelia" />
<meta property="og:title" content="Pedro Guerra en Morelia" />
<meta property="og:description" content="Pedro Guerra en Morelia, Café del Olmo, 11 de marzo, 21:00 hrs boletos en Café del Olmo y bolematico.com" />
<meta property="og:image" content="https://www.bolematico.com/img/pedro-guerra-morelia.jpg" />
<link rel="stylesheet" type="text/css" href="{{ asset('css/event-select-general.css') }}">
<script src="https://use.fontawesome.com/9b9c9dc667.js"></script>
@endsection

@section('content')
@php
	$preventa = false;
	if(\Carbon\Carbon::now() < '2020-03-03 23:59:59'){
		$preventa = true;
	}
@endphp

<div class="image-header bg-del-olmo overlay overlay-5">

	<div class="row white-text">
		<h4>Pedro Guerra</h4>
		<div class="divider"></div>
		<p class="mb-0"><i>Café del Olmo - Morelia</i></p>
		<p class="m-0"><i>11 de marzo - 21:00 hrs.</i></p>
	</div>
	<a href="#compra" class="btn waves-light waves-effect page-scroll"><b>Comprar</b> <i class="fa fa-ticket" aria-hidden="true"></i></a>
</div>

<section class="container">
	<div class="row">
		<div class="col s12">
			<ul class="tabs">
				<li class="tab "><a class="active" href="#precios">Descripción</a></li>
				<li class="tab "><a href="#detalles">Detalles</a></li>
				<li class="tab "><a href="#lugares">Lugares de venta</a></li>
			</ul>
		</div>
		<div id="precios" class="col s12 tab-content" style="padding: 40px 0.75rem!important;">

			<div class="col s8 offset-s2 m4 offset-m1 mb-30 card-flyer">
				<img src="{{ asset('img/pedro-guerra-morelia.jpg') }}" alt="" class="responsive-img">
			</div>
			
			<div class="col s12 m5 offset-m2">				

				<div class="row">
					@if($preventa)
					<div class="qcPricing col s12 center-align mb-10">
						<div class="box col s12">
							<header>
								<div class="col s12 teal accent-4">Preventa</div>
							</header>
							<div class="price col s12"><span>$480</span> MXN</div>
						</div>
					</div>
					@else
					<div class="qcPricing col s12 center-align mb-10">
						<div class="box col s12">
							<header>
								<div class="col s12 teal accent-4">General</div>
							</header>
							<div class="price col s12"><span>$580</span> MXN</div>
						</div>
					</div>
					@endif

				</div>

				<div class="row center-align">
					
					@if(Auth()->check())
				
					{!! Form::open(['route' => 'payment.details', 'method' => 'POST', 'id' => 'eventForm'])!!}

					<div class="row">

						<div class="seats-selector-container">
							<button id="btn-minus" type="button" class="waves-effect waves-light selector-button selector-button-left"><i class="fa fa-minus"></i></button>
							<input id="num-asientos" min="1" max="10" type="number" name="asiento" class="selector-button-input" value="1" required>
							<button id="btn-plus" type="button" class="waves-effect waves-light selector-button selector-button-right"><i class="fa fa-plus"></i></button>
						</div>			
						
					</div>
					
					{!! Form::hidden('img', 'img/pedro-guerra-morelia.jpg') !!}
					{!! Form::hidden('evento', 'Pedro Guerra') !!}
					{!! Form::hidden('fecha', '11 de marzo 2020') !!}
					{!! Form::hidden('lugar', 'Café del Olmo') !!}
					{!! Form::hidden('ciudad', 'Morelia') !!}
					{!! Form::hidden('hora', '21:00 hrs') !!}
					@if($preventa)
					{!! Form::hidden('zona', 'Preventa') !!}
					@else
					{!! Form::hidden('zona', 'General') !!}
					@endif
					{!! Form::hidden('event_type', 'general') !!}
					{!! Form::hidden('impresion_boleto', true) !!}
					{!! Form::hidden('db_table', 'pedro_guerra_morelia_11mar') !!}
					{!! Form::hidden('info', 'Favor de comunicarte al número 4431880358 / 4432274979 para completar tu reservación.') !!}
					@if($preventa)
					{!! Form::hidden('precio', 480) !!}
					@else
					{!! Form::hidden('precio', 580) !!}
					@endif
					{!! Form::hidden('url', url('eventos/pedro-guerra-morelia')) !!}
					
					<div class="input-field center-align">
						{!! Form::submit('Siguiente',['class'=>'btn waves-effect waves-light orange accent-3']) !!}
					</div>	
						
					{!! Form::close() !!}

					<p>
						<i>* Puedes seleccionar un máximo de 10 lugares.</i>
					</p>
          <p> * Al realizar tu compra en línea se realiza un cargo extra de 10% por concepto de servicio.</p>
          <p> * Informes y confirmación de tu reservación (una vez realizada tu compra) <br> <a href="tel:4431880358" style="background: #4caf50; color: #fff; padding: 5px 10px;">443-188-0358</a> / <a href="tel:4432274979" style="background: #4caf50; color: #fff; padding: 5px 10px;">443-227-4979</a></p>

					@else
						<p class="center-align raleway">Debes iniciar sesion para poder seleccionar tus lugares</p>
						<div class="center-align">
							<a href="#modal-login" class="modal-login-open btn waves-light orange accent-3">Ingresar</a>
						</div>
					@endif
				
				</div>

			</div>

		</div>

		<div id="detalles" class="col s12 tab-content">	
			<div class="col s8 offset-s2 hide-on-med-and-up">
				<img src="{{ asset('img/pedro-guerra-bio.jpg') }}" class="responsive-img">
			</div>
			<div class="col s12 m8 text-justify">
		    <p>Pedro Guerra nació en Güimar un pequeño pueblo de la isla de la Tenerife, en 1966. A los 14 años compuso su primera canción "Cathaysa", sobre un texto de su padre. A los 16, comenzó a cantar en las fiestas y locales de todo Canarias. A los 18, se trasladó a la ciudad universitaria de La Laguna, también en Tenerife, donde se integró rápidamente en la actividad musical de la ciudad. Después de que el Gobierno de Canarias editara un disco colectivo de artistas isleños en el que él colaboraba con cuatro temas, Pedro se unió a otros cantautores para formar el grupo Taller Canario, con él que publicó cuatro discos: "Trapera, Identidad", "A por todas", y "Rap (a duras penas)". A través de Taller pudo colaborar con Joaquín Sabina, Silvio Rodríguez, Luis Eduardo Aute o Víctor Manuel.</p>
		    <p>El primer disco de Pedro Guerra, "Golosinas", se grabó en directo y estaba compuesto por 17 temas ("Rap a duras penas", "Contamíname", "Deseo", "El marido de la peluquera",etc.). "Golosinas" llegó a ser disco de oro, y platino su segundo trabajo, "Tan Cerca de Mi", publicado en 1997. En él, nos mostraba un Pedro Guerra intelectual, cronista de su tiempo y comprometido con la realidad. De ahí surgieron entre otras, canciones como "Ni todo lo contrario", "Debajo del Puente", "Moreno". El álbum lo grabó entre Madrid y París sin perder su esencia ni sus raíces. En esta ocasión, incorporó sonidos africanos, y voces tribales respaldado por su productor, Lokua Kanza, natural de Zaire, que trabajó con Peter Gabriel o Papa Wemba. "Tan Cerca de Mí" se editó también en Argentina, Colombia, Paraguay, EEUU, Uruguay y Venezuela.</p>
				
			</div>
			<div class="col m4 hide-on-small-only">
				<img src="{{ asset('img/pedro-guerra-bio.jpg') }}" class="responsive-img">
			</div>
			<div class="clearfix"></div>
			
		</div>

		<div id="lugares" class="col s12 tab-content">

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

	</div>
</section>
<section class="section-video overlay overlay-5" style="background-image: url('https://img.youtube.com/vi/v3MkD9IqcC0/maxresdefault.jpg');">
	<div class="row center-align">
		<a class="white-text" id="modal-video-open" href="#modal-video" data-video="https://www.youtube.com/embed/v3MkD9IqcC0"><i class="material-icons">play_circle_filled</i></a>
		<p class="white-text"><i>Pedro Guerra - Daniela</i></p>
	</div>
</section>

<section id="compra" class="section-comprar">
	<div class="row">
		<h5 class="raleway center-align">Venta de boletos también en RS Viajes Centro</h5>
		<p class="center-align">Si tienes alguna duda sobre este evento no dudes en contactarnos</p>
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