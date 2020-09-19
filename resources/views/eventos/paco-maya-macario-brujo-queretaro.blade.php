@extends('layouts.main')

@section('title', 'Paco Maya y Macario Brujo')

@section('description', 'Paco Maya y Macario Brujo, El Portón de Santiago, 23 de enero, 21:00 hrs boletos en El Portón de Santiago y bolematico.com')

@section('styles')
<meta property="og:url"  content="https:www//bolematico.com/eventos/paco-maya-macario-brujo-queretaro" />
<meta property="og:title" content="Paco Maya y Macario Brujo" />
<meta property="og:description" content="Paco Maya y Macario Brujo, El Portón de Santiago, 23 de enero, 21:00 hrs boletos en El Portón de Santiago y bolematico.com" />
<meta property="og:image" content="https://www.bolematico.com/img/paco-macario.jpg" />
<link rel="stylesheet" type="text/css" href="{{ asset('css/event-select-general.css') }}">
<script src="https://use.fontawesome.com/9b9c9dc667.js"></script>
@endsection

@section('content')

<div class="image-header bg-4 overlay overlay-5">

	<div class="row white-text">
		<h4>Paco Maya y Macario Brujo</h4>
		<div class="divider"></div>
		<p class="mb-0"><i>El Portón de Santiago - Querétaro</i></p>
		<p class="m-0"><i>23 de enero - 21:00 hrs.</i></p>
	</div>
	<a href="#compra" class="btn waves-light waves-effect page-scroll"><b>Comprar</b> <i class="fa fa-ticket" aria-hidden="true"></i></a>
</div>

<section class="container">
	<div class="row">
		<div class="col s12">
			<ul class="tabs">
				<li class="tab "><a class="active" href="#precios">Precios</a></li>
				<li class="tab "><a href="#detalles">Detalles</a></li>
				<li class="tab "><a id="tab_link-lugares" href="#lugares">Lugares de venta</a></li>
			</ul>
		</div>
		<div id="precios" class="col s12 tab-content" style="padding: 40px 0.75rem!important;">

			<div class="col s8 offset-s2 m4 offset-m1 mb-30 card-flyer">
				<img src="{{ asset('img/paco-macario.jpg') }}" alt="" class="responsive-img">
			</div>
			
			<div class="col s12 m5 offset-m2">				

				<div class="row">
					<div class="qcPricing col s12 center-align mb-10">
						<div class="box col s12">
							<header>
								<div class="col s12 teal accent-4">General</div>
							</header>
							<div class="price col s12"><span>$200</span> MXN</div>
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
					
					{!! Form::hidden('img', 'img/paco-macario.jpg') !!}
					{!! Form::hidden('evento', 'Paco Maya y Macario Brujo') !!}
					{!! Form::hidden('fecha', '23 de enero 2020') !!}
					{!! Form::hidden('lugar', 'El Portón de Santiago') !!}
					{!! Form::hidden('ciudad', 'Querétaro') !!}
					{!! Form::hidden('hora', '21:00 hrs') !!}
					{!! Form::hidden('zona', 'General') !!}
					{!! Form::hidden('event_type', 'general') !!}
					{!! Form::hidden('impresion_boleto', true) !!}
					{!! Form::hidden('db_table', 'paco_macario_qto_23ene') !!}
					{!! Form::hidden('info', 'Favor de comunicarte al numero 442-740-0671 para completar tu reservación.') !!}
					{!! Form::hidden('precio', 200) !!}
					{!! Form::hidden('url', url('eventos/paco-maya-macario-brujo-queretaro')) !!}
					
					<div class="input-field center-align">
						{!! Form::submit('Siguiente',['class'=>'btn waves-effect waves-light orange accent-3']) !!}
					</div>	
						
					{!! Form::close() !!}

					<p>
						<i>* Puedes seleccionar un máximo de 10 lugares.</i>
					</p>
          <p> * Al realizar tu compra en línea se realiza un cargo extra de 10% por concepto de servicio.</p>
          <p> * Informes y confirmación de tu reservación (una vez realizada tu compra) <br> <a href="tel:4427400671" style="background: #4caf50; color: #fff; padding: 5px 10px;">442-740-0671</a></p>

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
				<h5 class="raleway quote">Paco Maya</h5>
			</div>
			<div class="col s8 offset-s2 hide-on-med-and-up">
				<img src="{{ asset('img/paco-maya-bio.jpg') }}" class="responsive-img">
			</div>
			<div class="col s12 m7">
				<p>Mini empresario y no por la estatura, de una empresa de displays publicitarios. Comienza su carrera al hacer doblaje de voz, ha compartido escenario con Kalimba, Diablito Barrientos, Carlos Ballarta, Daniel Sosa, Sofia Niño de Rivera, Gon Curiel, y varios mas</p>
				
			</div>
			<div class="col m5 hide-on-small-only">
				<img src="{{ asset('img/paco-maya-bio.jpg') }}" class="responsive-img">
			</div>
			<div class="col s10 offset-s1">
				<div class="divider"></div>
			</div>
			<div class="clearfix"></div>
			<div class="col s12">
				<h5 class="raleway quote">Macario Brujo</h5>	
			</div>
			<div class="col s12 m4">
				<img src="{{ asset('img/macario-brujo-bio.jpg') }}" class="responsive-img">
			</div>
			<div class="col s12 m8">
				<p>Héctor Fernández, más conocido como Macario Brujo, El Dios satánico del sexo, la leyenda del camino como se autodenomina, es un comediante que practica el Stand Up .</p>
        <p>Él expresa que los mexicanos realmente no se ríen de todo como en realidad se cree “Los mexicanos nos tomamos la vida muy en serio, nos exigimos demasiado, igual no vamos a morir”.</p>
        <p>Macario es un comediante de un humor muy ácido y que a pocos agrada, pero en la vida real conoce los problemas de la sociedad, busca mejorar profesionalmente y es consciente de la situación que el país sufre</p>
			</div>
		</div>

		<div id="lugares" class="col s12 tab-content">
			<div class="col s12">
				<h5 class="mb-30 quote">Además de Bolematico, puedes adquirir tus entradas en:</h5>
			</div>

			<div class="col s12">
				<div class="white z-depth-2">
					<iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3734.799498426775!2d-100.39395018559972!3d20.596244107779615!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x85d35b2975a8d68f%3A0xdf13453c0e244eca!2sEl+Porton+de+Santiago!5e0!3m2!1ses!2smx!4v1550796654851" width="100%" height="320" frameborder="0" style="border:0" allowfullscreen></iframe>
				
					<div class=" p-30">
						<h5 class="raleway"><b>El Portón de Santiago</b></h5>
						<ul class="qcAddress">
							<li><div class="divider"></div></li>
							<li><i class="fa fa-map-marker"></i> <p> Av. Prol. Luis Pasteur 37, Centro, 76000 Santiago de Querétaro, Qro.</p></li>
							<li><i class="fa fa-phone"></i><p> 01 442 688 9491</p></li>
							<li><i class="fa fa-facebook-official"></i><p><a title="website" href="https://www.facebook.com/ElPortondeSantiago/" target="_blank">https://www.facebook.com/ElPortondeSantiago/</a></p></li>
						</ul>
					</div>
				</div>

			</div>

		</div>

	</div>
</section>
<section class="section-video overlay overlay-5" style="background-image: url('https://img.youtube.com/vi/-wkKCAo5rCQ/maxresdefault.jpg');">
	<div class="row center-align">
		<a class="white-text" id="modal-video-open" href="#modal-video" data-video="https://www.youtube.com/embed/-wkKCAo5rCQ"><i class="material-icons">play_circle_filled</i></a>
		<p class="white-text"><i>Paco Maya | Stand Up | Comedy Central México</i></p>
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
			<iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3734.799498426775!2d-100.39395018559972!3d20.596244107779615!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x85d35b2975a8d68f%3A0xdf13453c0e244eca!2sEl+Porton+de+Santiago!5e0!3m2!1ses!2smx!4v1550796654851" width="100%" height="450" frameborder="0" style="border:0" allowfullscreen></iframe>
		</div>
		<div class="col m3">
			<h5 class="quote raleway">Lugar del evento</h5>
			
			<h5 class="mt-30">El Portón de Santiago</h5>
			<div class="col s10">
				<div class="divider"></div>
			</div>
			<ul class="fa-ul" style="margin-top: 30px;">
				<li class="mb-10"><i class="fa-li fa fa-map-marker"></i> Av. Prol. Luis Pasteur 37, <br>Centro, Querétaro</li>
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