@extends('layouts.main')

@section('title', 'Tavo Morales - Morelia')

@section('description', 'Tavo Morales en Morelia, Café del Olmo, 27 de febrero, 21:30 hrs boletos en RS Viajes Centro y bolematico.com')

@section('styles')
<meta property="og:url"  content="https://www.bolematico.com/eventos/tavo-morales-morelia" />
<meta property="og:title" content="Tavo Morales en Morelia" />
<meta property="og:description" content="Tavo Morales en Morelia, Café del Olmo, 27 de febrero, 21:30 hrs boletos en RS Viajes Centro y bolematico.com" />
<meta property="og:image" content="https://www.bolematico.com/img/tavo-morales-morelia.jpg" />
<link rel="stylesheet" type="text/css" href="{{ asset('css/event-select-general.css') }}">
<script src="https://use.fontawesome.com/9b9c9dc667.js"></script>
@endsection

@section('content')

<div class="image-header bg-del-olmo overlay overlay-5">

	<div class="row white-text">
		<h4>Tavo Morales</h4>
		<div class="divider"></div>
		<p class="mb-0"><i>Café del Olmo - Morelia</i></p>
		<p class="m-0"><i>27 de febrero - 21:30 hrs.</i></p>
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
				<img src="{{ asset('img/tavo-morales-morelia.jpg') }}" alt="" class="responsive-img">
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
				
					{!! Form::open(['route' => 'payment.details', 'method' => 'POST', 'id' => 'eventForm'])!!}

					<div class="row">

						<div class="seats-selector-container">
							<button id="btn-minus" type="button" class="waves-effect waves-light selector-button selector-button-left"><i class="fa fa-minus"></i></button>
							<input id="num-asientos" min="1" max="10" type="number" name="asiento" class="selector-button-input" value="1" required>
							<button id="btn-plus" type="button" class="waves-effect waves-light selector-button selector-button-right"><i class="fa fa-plus"></i></button>
						</div>			
						
					</div>
					
					{!! Form::hidden('img', 'img/tavo-morales-morelia.jpg') !!}
					{!! Form::hidden('evento', 'Tavo Morales') !!}
					{!! Form::hidden('fecha', '27 de febrero 2020') !!}
					{!! Form::hidden('lugar', 'Café del Olmo') !!}
					{!! Form::hidden('ciudad', 'Morelia, Mich.') !!}
					{!! Form::hidden('hora', '21:30 hrs') !!}
					{!! Form::hidden('zona', 'General') !!}
					{!! Form::hidden('event_type', 'general') !!}
					{!! Form::hidden('impresion_boleto', true) !!}
					{!! Form::hidden('db_table', 'tavo_morales_morelia_27feb') !!}
					{!! Form::hidden('info', 'Favor de comunicarte al numero 452 174 1255  para completar tu reservación.') !!}
					{!! Form::hidden('precio', 200) !!}
					{!! Form::hidden('url', url('eventos/tavo-morales-morelia')) !!}
					
					<div class="input-field center-align">
						{!! Form::submit('Siguiente',['class'=>'btn waves-effect waves-light orange accent-3']) !!}
					</div>	
						
					{!! Form::close() !!}

					<p>
						<i>* Puedes seleccionar un máximo de 10 lugares.</i>
					</p>
          <p> * Al realizar tu compra en línea se realiza un cargo extra de 10% por concepto de servicio.</p>
          <p> * Informes y confirmación de tu reservación (una vez realizada tu compra) <br> <a href="tel:4431880358" style="background: #4caf50; color: #fff; padding: 5px 10px;">443-188-0358</a></p>

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
				<img src="{{ asset('img/miguel-inzunza-bio.jpg') }}" class="responsive-img">
			</div>
			<div class="col s12 m8 text-justify">
		    <p>Compositor, cantante y productor mexicano, nominado al Latín Grammy en 2018 en la categoría de productor. Fusiona géneros y ritmos diversos que dan como resultado un sonido alternativo, fresco y emotivo, en el que la canción es hilo conductor y a la vez protagonista. Comprometido con las letras, va desde lo mas desenfadado a lo mas reflexivo, imprimiendo siempre frescura y actualidad como características principales.</p>
				<p>Sobresale como característica el uso de la tecnología al servicio de la canción, y en su búsqueda incorpora timbres electrónicos, loops e instrumentos acústicos en una amalgama sonora de personalidad modernista y al mismo tiempo emotiva.</p>
				<p>Ha participado en un vasto número de festivales culturales y ferias literarias de Mexico e Iberoamérica, llevando una propuesta que transita sin etiquetas entre lo cultural y lo popular.</p>
				
			</div>
			<div class="col m4 hide-on-small-only">
				<img src="{{ asset('img/miguel-inzunza-bio.jpg') }}" class="responsive-img">
			</div>
			<div class="clearfix"></div>
			<p>Fuente: <small>www.miguelinzunza.com</small></p>
			
		</div> --}}

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
							<li><i class="fa fa-calendar"></i> <strong>HORARIO</strong>: <p>10:00 a 19:00 hrs. Lunes a Vierne, Sabado 10:30 a 14:00 hrs.</p></li>
							<li><i class="fa fa-globe"></i> <strong>Website</strong>: <p><a title="website" href="https://www.facebook.com/RsViajesCentro/" target="_blank">https://www.facebook.com/RsViajesCentro/</a></p></li>
						</ul>
					</div>
				</div>

			</div>

		</div>

	</div>
</section>
<section class="section-video overlay overlay-5" style="background-image: url('https://img.youtube.com/vi/8_2XFy0cj1Q/maxresdefault.jpg');">
	<div class="row center-align">
		<a class="white-text" id="modal-video-open" href="#modal-video" data-video="https://www.youtube.com/embed/8_2XFy0cj1Q"><i class="material-icons">play_circle_filled</i></a>
		<p class="white-text"><i>Tavo Morales - Futból</i></p>
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