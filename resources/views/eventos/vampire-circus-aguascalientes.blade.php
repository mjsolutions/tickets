@extends('layouts.main')

@section('title', 'Vampire CIrcus - Aguascalientes')

@section('description', 'Vampire CIrcus en Aguascalientes, 23 de noviembre, 18:00 y 21:00 hrs boletos en Auditorio DIMO y lugar del evento.')

@section('styles')
<meta property="og:url"  content="http://bolematico.mx/eventos/vampire-circus-aguascalientes" />
<meta property="og:title" content="Vampire Circus en Aguascalientes" />
<meta property="og:description" content="Vampire Circus Aguascalientes 23 de noviembre 2018, 18:00 y 21:00 hrs." />
<meta property="og:image" content="http://bolematico.mx/img/vampire-circus.jpg" />

<script src="https://use.fontawesome.com/9b9c9dc667.js"></script>
@endsection

@section('content')

<div class="image-header bg-3 overlay overlay-5">

	<div class="row white-text">
		<h4>Vampire CIrcus</h4>
		<div class="divider"></div>
		<p><i>Aguascalientes - Auditorio Morelos</i></p>
		<p><i>22 de noviembre, 18:00 / 21:00 hrs.</i></p>
	</div>
	<a href="#compra" class="btn waves-light waves-effect page-scroll"><b>Comprar</b> <i class="fa fa-ticket" aria-hidden="true"></i></a>
</div>

<section class="container">
	<div class="row">
		<div class="col s12">
			<ul class="tabs">
				<li class="tab "><a class="active" href="#descripcion">Descripción</a></li>
				<li class="tab "><a href="#biografia">Biografía</a></li>
				<li class="tab "><a href="#lugares">Lugares de venta</a></li>
			</ul>
		</div>
		<div id="descripcion" class="col s12 tab-content">
			<div class="row">
				<h4 class="mt-0 raleway quote">PRECIOS</h4>
				{{-- <div class="divider"></div> --}}
			</div>

			<div class="col s8 offset-s2 m3 mb-30 card-flyer">
				<img src="{{ asset('img/vampire-circus.jpg') }}" alt="" class="responsive-img">
			</div>
			
			<div class="col s12 m8 offset-m1">				

				<div class="row">

					<div class="qcPricing col s12 center-align mb-10">
						<div class="box col s12 card-flyer">
							<header>
								<div class="col s12 m12 red darken-3">VIP</div>
								<div class="col m4 btn-buy nopadding hide-on-small-only"><a href="#compra" class="page-scroll"><b>Comprar</b> <i class="fa fa-ticket" aria-hidden="true"></i></a></div>
							</header>
							<div class="price col s12"><span>$1.050</span> Por entrada</div>
							<div class="col s12 btn-buy nopadding hide-on-med-and-up"><a href="#compra" class="page-scroll"><b>Comprar</b> <i class="fa fa-ticket" aria-hidden="true"></i></a></div>
						</div>
					</div>

					<div class="qcPricing col s12 center-align mb-10">
						<div class="box col s12">
							<header>
								<div class="col s12 teal accent-4">Zona diamante</div>
								<div class="col m4 btn-buy nopadding hide-on-small-only"><a href="#compra" class="page-scroll"><b>Comprar</b> <i class="fa fa-ticket" aria-hidden="true"></i></a></div>
							</header>
							<div class="price col s12"><span>$850</span> Por entrada</div>
							<div class="col s12 btn-buy nopadding hide-on-med-and-up"><a href="#compra" class="page-scroll"><b>Comprar</b> <i class="fa fa-ticket" aria-hidden="true"></i></a></div>
						</div>
					</div>

					<div class="qcPricing col s12 center-align mb-10">
						<div class="box col s12">
							<header>
								<div class="col s12 m12 amber darken-1">Oro</div>
								<div class="col m4 btn-buy nopadding hide-on-small-only"><a href="#compra" class="page-scroll"><b>Comprar</b> <i class="fa fa-ticket" aria-hidden="true"></i></a></div>
							</header>
							<div class="price col s12"><span>$650</span> Por entrada</div>
							<div class="col s12 btn-buy nopadding hide-on-med-and-up"><a href="#compra" class="page-scroll"><b>Comprar</b> <i class="fa fa-ticket" aria-hidden="true"></i></a></div>
						</div>
					</div>

					<div class="qcPricing col s12 center-align mb-10">
						<div class="box col s12">
							<header>
								<div class="col s12 m12 grey lighten-1">Plata</div>
								<div class="col m4 btn-buy nopadding hide-on-small-only"><a href="#compra" class="page-scroll"><b>Comprar</b> <i class="fa fa-ticket" aria-hidden="true"></i></a></div>
							</header>
							<div class="price col s12"><span>$350</span> Por entrada</div>
							<div class="col s12 btn-buy nopadding hide-on-med-and-up"><a href="#compra" class="page-scroll"><b>Comprar</b> <i class="fa fa-ticket" aria-hidden="true"></i></a></div>
						</div>
					</div>

				</div>

				<div class="row">
					<div class="divider"></div>
					<p class="center-align mt-30">Al realizar tu compra en línea se realiza un cargo extra de <b>10%</b> por concepto de servicio.</p>
				</div>
			</div>
		</div>

		<div id="biografia" class="col s12 tab-content">
				<div class="col s12"><h4 class="mt-0 raleway quote">RESEÑA</h4>	</div>	
			<div class="col s8 offset-s2 hide-on-med-and-up">
				<img src="{{ asset('img/vampire-bio.jpg') }}" class="responsive-img">
			</div>
			<div class="col s12 m6 text-justify">
		        <p>¿Qué es The Vampire Circus Show? Es un espectáculo lleno de adrenalina y comedia.</p>
				<p>Es un viaje enérgico a través de un cementerio abandonado donde un extraordinario circo vuelve a la vida. Poblado por una variada colección de personajes geniales y acróbatas incomparables, The Vampire Circus es un vórtice visual ambientado en un retorcido universo de fantasía acrobática donde, poco a poco, el caos y la locura dan paso a una verdadera celebración. The Vampire Circus division especial de eventos ofrece un espectáculo de circo teatral completo; espectáculos personalizados que utilizan nuestros actos especiales de circo y números de bailes coreografiados, así como personajes itinerantes, DJ, música en vivo, elementos de video y ceremonias.</p> <p>El equipo de producción de Vampire Circus se destaca en aprovechar al máximo cualquier presupuesto, lugar y los sueños de los clientes. Desde simpáticos para la familia hasta sorprendentemente sonrojados, podemos personalizar cualquier programa según sus necesidades, incluido el trabajo en productos, invitados especiales o temas específicos o creación de marca. Haga su próximo evento, su mejor evento con esta original experiencia de entretenimiento, siempre superamos las expectativas del cliente con toda la adrenalina.</p>
				<p>Hacemos que todo sea fácil y que cada evento sea inolvidable.</p>
				
			</div>
			<div class="col m6 hide-on-small-only">
				<img src="{{ asset('img/vampire-bio.jpg') }}" class="responsive-img">
			</div>
			<div class="clearfix"></div>
			
			
		</div>

		<div id="lugares" class="col s12 tab-content">
			<div class="col s12 mb-30">
				<h4 class="mt-0 raleway quote">LUGARES DE VENTA</h4>
			</div>
			<div class="col s12">

				<div class="col s12 m6">									
					<!-- ## VENUE MAP ## -->
					<div class="white z-depth-2">
						<iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d118479.16354343237!2d-102.37271940837408!3d21.877821196650356!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x8429ee87056bf30d%3A0x9df7622fdfa4c800!2sAuditorio+DIMO!5e0!3m2!1ses!2smx!4v1516883798546" width="100%" height="450" frameborder="0" style="border:0" allowfullscreen></iframe>
					
					<!-- ## ADDRESS LIST ## -->
						<div class="p-30">
							<h5><b>Taquilla Auditorio DIMO</b></h5>
							<ul class="qcAddress">
								<li><div class="divider"></div></li>
								<li><i class="fa fa-map-marker"></i> <strong>DIRECCIÓN</strong>: <p>Profr. A. Topete del Valle 108, Barrio de San Marcos, 20070 Aguascalientes, Ags.</p></li>
								<li><i class="fa fa-phone"></i> <strong>TELÉFONO</strong>: <p> 915 73 53</p></li>
								<li><i class="fa fa-calendar"></i> <strong>HORARIO</strong>: <p> --- </p></li>
								<li><i class="fa fa-globe"></i> <strong>Website</strong>: <p><a title="website" href="https://www.facebook.com/auditoriodimo/" target="_blank">https://www.facebook.com/auditoriodimo/</a></p></li>
							</ul>
						</div>
					</div>

				</div>
				
				<div class="col s12 m6">									
					<!-- ## VENUE MAP ## -->
					<div class="white z-depth-2">
						<iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3702.725769729589!2d-102.30916588505292!3d21.868110985549738!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x8429ec29f27c175b%3A0xe44d78266d7a8703!2sAuditorio+Morelos%2C+Av+de+la+Convenci%C3%B3n+de+1914+Sur%2C+Santa+Elena%2C+20230+Aguascalientes%2C+Ags.!5e0!3m2!1ses!2smx!4v1541526182232" width="100%" height="450" frameborder="0" style="border:0" allowfullscreen></iframe>
					
					<!-- ## ADDRESS LIST ## -->
						<div class="p-30">
							<h5><b>Taquilla Auditorio Morelos</b></h5>
							<ul class="qcAddress">
								<li><div class="divider"></div></li>
								<li><i class="fa fa-map-marker"></i> <strong>DIRECCIÓN</strong>: <p>Av de la Convención  e 1914 Sur Santa Elena 20230 Aguascalientes, Ags.</p></li>
								<li><i class="fa fa-phone"></i> <strong>TELÉFONO</strong>: <p> --- </p></li>
								<li><i class="fa fa-calendar"></i> <strong>HORARIO</strong>: <p> --- </p></li>
								<li><i class="fa fa-globe"></i> <strong>Website</strong>: <p> ---</p></li>
							</ul>
						</div>
					</div>

				</div>
				
			</div>			

		</div>

	</div>
</section>
<section class="section-video overlay overlay-5" style="background-image: url('https://img.youtube.com/vi/4KqLGKtEp0s/maxresdefault.jpg');">
	<div class="row center-align">
		<a class="white-text" id="modal-video-open" href="#modal-video" data-video="https://www.youtube.com/embed/4KqLGKtEp0s"><i class="material-icons">play_circle_filled</i></a>
		<p class="white-text"><i>Vampire Circus</i></p>
	</div>
</section>

<section id="compra" class="section-comprar">
	{{-- <div class="row">
		<div class="col s12 m6">
			<img src="{{asset('img/teatro-morelos.svg')}}" alt="Teatro Morelos" class="responsive-img">
		</div>
		<div class="col s12 m6">
			@if(Auth()->check())
				<p class="center-align"><i>* Solo puedes seleccionar un maximo de 10 boletos</i></p>
				{!! Form::open(['route'=>'payment.franco7', 'method'=>'POST']) !!}
					<div class="row">

						<div class="input-field col s12">
							{!! Form::select('zona', ['Diamante' => 'Diamante', 'Oro' => 'Oro', 'Plata' => 'Plata'], '', ['class' => 'select-dropdown', 'required', 'id' => 'zona', 'placeholder' => 'Seleccione una zona']) !!}
							{!! Form::label('zona', 'Zona') !!}
						</div>
						<div class="input-field col s12">
							{!! Form::select('fila', [], '', ['class' => 'select-dropdown', 'required', 'id' => 'fila', 'placeholder' => 'Seleccione primero una zona']) !!}
							{!! Form::label('fila', 'Fila') !!}
						</div>
						<div class="input-field col s12">
							{!! Form::select('asiento[]', [], '', ['class' => 'select-dropdown', 'required', 'multiple','id' => 'asiento', 'placeholder' => 'Selecciona primero una fila']) !!}
							{!! Form::label('asiento', 'Asiento') !!}
						</div>
						
					</div>

					<div class="row">
					
						<div class="input-field center-align">
							{!! Form::submit('Comprar',['class'=>'btn waves-effect waves-light  orange accent-3']) !!}
						</div>	
					
					</div>
						
				{!! Form::close() !!}
			@else
				<p class="center-align raleway">Debes iniciar sesion para poder realizar la compra</p>
				<div class="col s6 m3 col-center">
					<a href="#modal-login" class="modal-login-open btn btn-block waves-light orange accent-3">Login</a>
				</div>
			@endif
		</div>	
	
	</div> --}}
	<div class="row">
		<div class="col m4 offset-m4">
			<h5 class="mt-50 center-align raleway">Venta de boletos en Auditorio DIMO Aguascalientes y Auditorio Morelos</h5>
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
	<div id="map"></div>
	
	<div class="info-lugar">
		<h5 class="raleway quote mb-30">Lugar del evento</h5>
		<div class="divider mb-30"></div>
		<p><b>Auditorio Morelos</b></p>
		<p><i class="material-icons">location_on</i>Av de la Convención de 1914 Sur Santa Elena 20230 Aguascalientes, Ags.</p>
		<p><i class="material-icons">call</i> --- </p>
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
		function initMap() {
		        var uluru = {lat: 21.868241, lng: -102.3072059};
		        var map = new google.maps.Map(document.getElementById('map'), {
		          zoom: 17,
		          scrollwheel: false,
		          navigationControl: true,
		          draggable: true,
		          center: {lat: 21.868241, lng: -102.3072059}
		        });
		        var marker = new google.maps.Marker({
		          position: uluru,
		          map: map
		        });
		      }

		// $("#zona").change(function(){
		// 	var id = $(this).val();
		// 	$.ajax({
		// 		url: '{{url('/api/getFilas')}}/Franco7/' + id,
		// 		method: 'GET',
		// 		// data: 'id=' + id,
		// 		success: function(res){
		// 			var filas = res;
		// 			var options = "<option value='' selected disabled>Selecciona una fila</option>";
		// 			for(i=0; i<filas.length; i++){
		// 				options += '<option value='+filas[i].fila+'>'+ filas[i].fila +'</option>';
		// 			}
		// 			$("#fila").html(options);
		// 			$("#fila").material_select();

		// 		}
		// 	});
		// });

		// $("#fila").change(function(){
		// 	var id = $(this).val();
		// 	$.ajax({
		// 		url: '{{url('/api/getAsientos')}}/Franco7/' + id,
		// 		method: 'GET',
		// 		// data: 'id=' + id,
		// 		success: function(res){
		// 			var asientos = res;
		// 			var options = "<option value='' selected disabled>Seleccione los asientos</option>";
		// 			for(i=0; i<asientos.length; i++){
		// 				options += '<option value='+asientos[i].id+'|'+asientos[i].asiento+'>'+ asientos[i].asiento +'</option>';
		// 			}
		// 			$("#asiento").html(options);
		// 			$("#asiento").material_select();

		// 		}
		// 	});
		// });
	</script>

      <script async defer src="https://maps.googleapis.com/maps/api/js?key=AIzaSyBOOT9N6QdDeq0bnmSb1bw2SKw5CXQmOeA&callback=initMap"></script>
@endsection