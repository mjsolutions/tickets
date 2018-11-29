@extends('layouts.main')

@section('title', 'Gon Curiel Pachuca')

@section('description', 'Gon Curiel en Pachuca, 22 de noviembre 2018, 20:00 hrs preventa $250, evento $300')

@section('styles')
<script src="https://use.fontawesome.com/9b9c9dc667.js"></script>
@endsection

@section('content')

<div class="image-header bg-4 overlay overlay-5">

	<div class="row white-text">
		<h4>Gon Curiel</h4>
		<div class="divider"></div>
		<p><i>Pachuca - Barezzito</i></p>
	</div>
	{{-- <a href="#compra" class="btn waves-light waves-effect page-scroll"><b>Comprar</b> <i class="fa fa-ticket" aria-hidden="true"></i></a> --}}
</div>

<section class="container">
	<div class="row">
		<div class="col s12">
			<ul class="tabs">
				<li class="tab "><a class="active" href="#descripcion">Descripción</a></li>
				<li class="tab "><a href="#biografia">Biografía</a></li>
				<li class="tab "><a href="#lugares">Boletos</a></li>
			</ul>
		</div>
		<div id="descripcion" class="col s12 tab-content">
			<div class="row">
				{{-- <h4 class="mt-0 raleway quote">PRECIOS</h4> --}}
				{{-- <div class="divider"></div> --}}
			</div>

			<div class="col s8 offset-s2 mb-30 card-flyer">
				<img src="{{ asset('img/gon-banner-pachuca.jpg') }}" alt="" class="responsive-img">
			</div>
			
			<div class="col s12">				

				<div class="row mt-30">

					<div class="qcPricing col s6 center-align mb-10">
						<div class="box col s12">
							<header>
								<div class="col s12 m8 teal accent-4">Preventa</div>
								<div class="col m4 btn-buy nopadding hide-on-small-only"><a href="http://goncuriel.com/boletospac" class="page-scroll"><b>Comprar</b> <i class="fa fa-ticket" aria-hidden="true"></i></a></div>
							</header>
							<div class="price col s12"><span>$250</span> Por entrada</div>
							<div class="col s12 btn-buy nopadding hide-on-med-and-up"><a href="http://goncuriel.com/boletospac" class="page-scroll"><b>Comprar</b> <i class="fa fa-ticket" aria-hidden="true"></i></a></div>
						</div>
					</div>
					
					<div class="qcPricing col s6 center-align mb-10">
						<div class="box col s12">
							<header>
								<div class="col s12 m8 teal accent-4">Evento</div>
								<div class="col m4 btn-buy nopadding hide-on-small-only"><a href="http://goncuriel.com/boletospac" class="page-scroll"><b>Comprar</b> <i class="fa fa-ticket" aria-hidden="true"></i></a></div>
							</header>
							<div class="price col s12"><span>$300</span> Por entrada</div>
							<div class="col s12 btn-buy nopadding hide-on-med-and-up"><a href="http://goncuriel.com/boletospac" class="page-scroll"><b>Comprar</b> <i class="fa fa-ticket" aria-hidden="true"></i></a></div>
						</div>
					</div>

				</div>

				<div class="row">
					<div class="divider"></div>
				</div>
			</div>
		</div>

		<div id="biografia" class="col s12 tab-content">
			<div class="col s8 offset-s2 hide-on-med-and-up">
				<img src="{{ asset('img/gon-bio.jpg') }}" class="responsive-img">
			</div>
			<div class="col s12 m7">
				<h4 class="mt-0 raleway quote">BIOGRAFÍA</h4>		
		         <p>Gon Curiel se ha consolidado en México como uno de los principales comediantes de Stand Up, género de comedia que se basa en observaciones y experiencias con las que todos nos podemos identificar, provocando catarsis y carcajadas.</p>
		         <p >En su debut cómico, ganó el primer Festival de Stand Up Comedy de Café 22, el cual le dio la oportunidad de presentarse en grandes escenarios de la comedia, sorprendiendo con su estilo innovador.</p>
		         <p>Se ha presentado en grandes escenarios de la Ciudad de México como El Vicio, El Cuevón, Show Center, Voilà Acoustique, El Teatro de Ciudad y el Auditorio Nacional, así como en diversas ciudades de la República Mexicana y Estados Unidos.</p>
		         <p>En 2014, la plataforma de televisión por Internet Netflix lo convirtió en uno de los primeros comediantes de Stand Up de habla hispana en tener su propio especial. Ese mismo año, Gon Curiel se volvió conductor del noticiero satírico “Ya Ni Llorar Es Bueno”.</p>
		         <p>Actualmente, es el único comediante que presenta semanalmente su comedia en vivo en YouTube, con temas de actualidad, en su segmento viral #NotiCreas.</p>
				
			</div>
			<div class="col m5 hide-on-small-only">
				<img src="{{ asset('img/gon-bio.jpg') }}" class="responsive-img">
			</div>
			<div class="clearfix"></div>
			<p>Fuente:</p>
			<p><small>http://goncuriel.com/goncuriel/#bio</small></p>
			
		</div>

		<div id="lugares" class="col s12 tab-content">
			<div class="row">
				<h4 class="mt-0 raleway quote">LUGARES DE VENTA</h4>
			</div>
			<div class="col s12">									
				<!-- ## VENUE MAP ## -->
				<div class="white z-depth-2">
					<iframe src="https://www.google.com/maps/embed?pb=!1m14!1m8!1m3!1d14987.834113437439!2d-98.762058!3d20.0940204!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x0%3A0xd2752b3301adc3ee!2sPicanter%C3%ADa!5e0!3m2!1ses!2smx!4v1541008096347" width="100%" height="450" frameborder="0" style="border:0" allowfullscreen></iframe>
				
				<!-- ## ADDRESS LIST ## -->
					<div class=" p-30">
						<h5><b>Picanterìa</b></h5>
						<ul class="qcAddress">
							<li><div class="divider"></div></li>
							<li><i class="fa fa-map-marker"></i> <strong>DIRECCIÓN</strong>: <p>Blvrd Nuevo Hidalgo 203-B, Puerta de Hierro, 42080 Pachuca de Soto, Hgo.</p></li>
							<li><i class="fa fa-phone"></i> <strong>TELÉFONO</strong>: <p> 01 771 710 3766</p></li>
							<li><i class="fa fa-calendar"></i> <strong>HORARIO</strong>: <p>10:00 a 22:00 hrs.</p></li>
							<li><i class="fa fa-globe"></i> <strong>Website</strong>: <p><a title="website" href="http://picanteria.mx/" target="_blank">http://picanteria.mx/</a></p></li>
						</ul>
					</div>
				</div>

			</div>			

		</div>

	</div>
</section>
<section class="section-video overlay overlay-5" style="background-image: url('https://img.youtube.com/vi/vkYvi2NLXzw/maxresdefault.jpg');">
	<div class="row center-align">
		<a class="white-text" id="modal-video-open" href="#modal-video" data-video="https://www.youtube.com/embed/vkYvi2NLXzw"><i class="material-icons">play_circle_filled</i></a>
		<p class="white-text"><i>Gon Curiel / El cajero automático</i></p>
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
		<div class="col m4 offset-m4 s12">
			<h5 class="mt-50 center-align raleway">Preventa de boletos en Picanterìa Pachuca</h5>
			<div class="row">
				<div class="col s10 offset-s1 mt-30">
					<a href="http://goncuriel.com/boletospac" class="btn-large waves-light waves-effect red darken-2 btn-block">COMPRAR BOLETOS</a>
				</div>
			</div>
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
		<p><b>Barezzito Pachuca</b></p>
		<p><i class="material-icons">location_on</i>Blvrd Nuevo Hidalgo 203a, Puerta de Hierro, 42083 Pachuca de Soto, Hgo.</p>
		<p><i class="material-icons">call</i> 01 55 4163 2558</p>
		<p><i class="material-icons">language</i>https://www.facebook.com/BarezzitoPachuca/</p>
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
		        var uluru = {lat: 20.0938491, lng: -98.764407};
		        var map = new google.maps.Map(document.getElementById('map'), {
		          zoom: 16,
		          scrollwheel: false,
		          navigationControl: true,
		          draggable: true,
		          center: {lat: 20.0938491, lng: -98.764407}
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