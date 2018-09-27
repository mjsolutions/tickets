@extends('layouts.main')

@section('title', 'Mike Salazar Morelia')

@section('description', 'Mike Salazar en Morelia, 19 de octubre, 9:00 pm boletos en RS Viajes centro, RS Viajes Periodismo, bolematico.mx y taquillas del planetario de Morelia')

@section('styles')

<!-- Metas Facebook -->
<meta property="og:url"  content="http://bolematico.mx/eventos/mike-salazar-morelia" />
<meta property="og:title" content="Mike Salazar en Morelia" />
<meta property="og:description" content="Regresa Mike Salazar con su gira MKS X a Morelia, 19 de octubre, 21 hrs" />
<meta property="og:image" content="http://bolematico.mx/img/mike-2018.jpg" />

<script src="https://use.fontawesome.com/9b9c9dc667.js"></script>
@endsection

@section('content')

<div class="image-header bg-morelos overlay overlay-5">

	<div class="row white-text">
		<h4>Mike Salazar</h4>
		<div class="divider"></div>
		<p><i>Morelia - Teatro Morelos 19 de octubre, 21 hrs.</i></p>
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
			<div class="col s12 mb-30">
				<h4 class="mt-0 raleway quote">PRECIOS</h4>
				{{-- <div class="divider"></div> --}}
			</div>

			<div class="col s8 offset-s2 m4 offset-m1 mb-30">
				<img src="{{ asset('img/mike-2018.jpg') }}" alt="" class="responsive-img">
			</div>
			
			<div class="col s12 m5 offset-m1">				

				<div class="row">

					<div class="qcPricing col s12 center-align mb-10">
						<div class="box col s12">
							<header>
								<div class="col s12 m8 grey lighten-1">Zona plata</div>
								<div class="col m4 btn-buy nopadding hide-on-small-only"><a href="#compra" class="page-scroll"><b>Comprar</b> <i class="fa fa-ticket" aria-hidden="true"></i></a></div>
							</header>
							<div class="price col s12"><span>$250</span> Por entrada</div>
							<div class="col s12 btn-buy nopadding hide-on-med-and-up"><a href="#compra" class="page-scroll"><b>Comprar</b> <i class="fa fa-ticket" aria-hidden="true"></i></a></div>
						</div>
					</div>
					
					<div class="qcPricing col s12 center-align mb-10">
						<div class="box col s12">
							<header>
								<div class="col s12 m8">Zona oro</div>
								<div class="col m4 btn-buy nopadding hide-on-small-only"><a href="#compra" class="page-scroll"><b>Comprar</b> <i class="fa fa-ticket" aria-hidden="true"></i></a></div>
							</header>
							<div class="price col s12"><span>$350</span> Por entrada</div>
							<div class="col s12 btn-buy nopadding hide-on-med-and-up"><a href="#compra" class="page-scroll"><b>Comprar</b> <i class="fa fa-ticket" aria-hidden="true"></i></a></div>
						</div>
					</div>

					<div class="qcPricing col s12 center-align mb-10">
						<div class="box col s12">
							<header>
								<div class="col s12 m8 teal accent-4">Zona diamante</div>
								<div class="col m4 btn-buy nopadding hide-on-small-only"><a href="#compra" class="page-scroll"><b>Comprar</b> <i class="fa fa-ticket" aria-hidden="true"></i></a></div>
							</header>
							<div class="price col s12"><span>$450</span> Por entrada</div>
							<div class="col s12 btn-buy nopadding hide-on-med-and-up"><a href="#compra" class="page-scroll"><b>Comprar</b> <i class="fa fa-ticket" aria-hidden="true"></i></a></div>
						</div>
					</div>

				</div>

				<div class="row">
					<div class="divider"></div>
					<p class="center-align mt-30">Al realizar tu compra en línea se realiza un cargo extra por concepto de servicio.</p>
					{{-- <p class="center-align"><b>Informes:</b> Taquillas del planetario - <a href="tel:4432324400" style="background: #4caf50; color: #fff; padding: 5px 10px;"> 443 232 4400 ext. 160</a> <br> Whatsapp - <a href="tel:4521741255" style="background: #4caf50; color: #fff; padding: 5px 10px;"> 452 174 1255</a></p> --}}
				</div>
			</div>
		</div>

		<div id="biografia" class="col s12 tab-content">
			<div class="col s12 mb-30">
				<h4 class="mt-0 raleway quote">BIOGRAFÍA</h4>
			</div>
			<div class="col s8 offset-s2 hide-on-med-and-up">
				<img src="{{ asset('img/mike-bio.jpg') }}" class="responsive-img">
			</div>
			<div class="col s12 m7">
				<p>Miguel Angel Salazar, conocido como Mike Salazar "El Caballero de la Comedia" nació en Santiago, Nuevo León, México el 30 de agosto de 1989.</p>
				<p>Mike Salazar ha sido reconocido en México por su talento en comedia y acción; Gracias a su entusiasmo y gran talento, tiene la oportunidad de tener apariciones especiales en programas de televisión como Sabadazo, Guerra de Chistes, XE Marilé y otros ... Todos los programas de TV de Televisa México.</p>
				<p>Debido a su enorme talento como actor, comediante y cantante; Mike Salazar está entre el pequeño porcentaje que ha subido a la cima entre los comediantes hispanos.</p>
				<p>Mike Salazar ha viajado con éxito por todo México con su programa de comedia; Que realiza una rutina de buen humor, mimetismo y canciones. Su show se ha presentado en varios lugares de México, como en bares, ferias, teatros, eventos masivos y privados.</p>
			</div>
			<div class="col m5 hide-on-small-only">
				<img src="{{ asset('img/mike-bio.jpg') }}" class="responsive-img">
			</div>
			
		</div>

		<div id="lugares" class="col s12 tab-content">
			<div class="col s12 mb-30">
				<h4 class="mt-0 raleway quote">LUGARES DE VENTA</h4>
			</div>
			<div class="col s12">

				<div class="col s12 m4">									
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

				<div class="col s12 m4">									
					<!-- ## VENUE MAP ## -->
					<div class="white z-depth-2">
						<iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d1878.3461125835147!2d-101.2256908688827!3d19.68313181288793!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x842d0c23bc1216f1%3A0xc16b3ac2516592fb!2sAv.+Periodismo+Jos%C3%A9+Tocaven+Lav%C3%ADn+1927%2C+Jardines+de+Torremolinos%2C+58197+Morelia%2C+Mich.!5e0!3m2!1ses!2smx!4v1533228065053" width="100%" height="320" frameborder="0" style="border:0" allowfullscreen></iframe>
					
					<!-- ## ADDRESS LIST ## -->
						<div class=" p-30">
							<h5><b>RS Viajes Periodismo</b></h5>
							<ul class="qcAddress">
								<li><div class="divider"></div></li>
								<li><i class="fa fa-map-marker"></i> <strong>DIRECCIÓN</strong>: <p>Av. Periodismo 1927-1, Fracc Jardines de Torremolinos Ote (Frente a la Farmacia Guadalajara).</p></li>
								<li><i class="fa fa-phone"></i> <strong>TELÉFONO</strong>: <p> N/A</p></li>
								<li><i class="fa fa-calendar"></i> <strong>HORARIO</strong>: <p>10:00 a 19:00 hrs. Lunes a Viernes y 10:30 a 14:00 hrs. los Sabados.</p></li>
								<li><i class="fa fa-globe"></i> <strong>Website</strong>:<br> <p><a title="website" href="" target="_blank"></a>N/A</p></li>
							</ul>
						</div>
					</div>

				</div>

				<div class="col s12 m4">									
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
								<li><i class="fa fa-calendar"></i> <strong>HORARIO</strong>: <br><p>11:00 a 19:00 hrs. Lunes a Sabado. </p></li>
								<li><i class="fa fa-globe"></i> <strong>Website</strong>:<br> <p><a title="website" href="http://ceconexpo.com" target="_blank"></a>http://ceconexpo.com</p></li>
								<li></li>
							</ul>
						</div>
					</div>

				</div>

				
			</div>
	

		</div>

	</div>
</section>
<section class="section-video overlay overlay-5" style="background-image: url('https://img.youtube.com/vi/WTxmBr-U_Ag/maxresdefault.jpg');">
	<div class="row center-align">
		<a class="white-text" id="modal-video-open" href="#modal-video" data-video="https://www.youtube.com/embed/WTxmBr-U_Ag"><i class="material-icons">play_circle_filled</i></a>
		<p class="white-text"><i>Mike Salazar - Chiste de Jarochos</i></p>
	</div>
</section>

<section id="compra" class="section-comprar">
	@php
		$date = \Carbon\Carbon::now(new DateTimeZone('America/Mexico_City'));
	@endphp

	{{-- @if(  !$date->isWeekend() && ( $date->hour >= '09:00:00' && $date->hour <= '23:00:00' ) ) --}}

		{{-- <div class="row">
			<div class="col m6 mt-30">
				<img src="{{ asset('img/teatro-morelos-fondo.svg') }}" alt="" class="responsive-img" id="zoom_01" data-zoom-image="{{asset('img/teatro-morelos-fondo.svg')}}">
				<p class="center-align"><i>*Scroll sobre la imagen para hacer zoom</i></p>
			</div>
			<div class="col m4 offset-m1 mt-30">
				@if(Auth()->check())
					{!! Form::open(['route'=>'payment.details', 'method'=>'POST']) !!}
						<div class="row">
							<h5 class="quote">Elija sus boletos <small>(función 31 de Agosto 7:00 pm)</small></h5>
							<div class="input-field col s12">
								{!! Form::select('fecha', ['31 de Agosto 2018' => '31 de Agosto', '01 de septiembre 2018' => '01 de septiembre'], '', ['class' => 'select-dropdown', 'required', 'id' => 'fecha', 'placeholder' => 'Selecciona Fecha']) !!}
								{!! Form::label('fecha', 'Fecha del Evento') !!}
							</div>
							<div class="input-field col s12">
								{!! Form::select('zona', ['Plata' => 'Plata', 'Oro' => 'Oro', 'Diamante' => 'Diamante'], '', ['class' => 'select-dropdown', 'required', 'id' => 'zona', 'placeholder' => 'Selecciona la zona']) !!}
								{!! Form::label('zona', 'Zona') !!}
							</div>
							<div class="input-field col s12" id="select-fila">
								{!! Form::select('fila', [], '', ['class' => 'select-dropdown', 'required', 'id' => 'fila', 'placeholder' => 'Selecciona primero una zona']) !!}
								{!! Form::label('fila', 'Fila') !!}
							</div>
							<div class="input-field col s12" id="select-asiento">
								{!! Form::select('asiento[]', [], '', ['class' => 'select-dropdown', 'required', 'multiple','id' => 'asiento', 'placeholder' => 'Selecciona primero una fila']) !!}
								{!! Form::label('asiento', 'Asiento') !!}
							</div>
							
							{!! Form::hidden('img', 'img/mike-2018.jpg') !!}
							{!! Form::hidden('evento', 'Franco Escamilla en Morelia') !!}
							{!! Form::hidden('fecha', '31 de Agosto 2018') !!}
							{!! Form::hidden('lugar', 'Teatro Morelos') !!}
							{!! Form::hidden('hora', '07:00 pm') !!}
							{!! Form::hidden('event_type', 'numerado') !!}
							{!! Form::hidden('db_table', 'franco317', ['id' => 'db_table']) !!}
							{!! Form::hidden('info', '4431880358') !!}
							{!! Form::hidden('precio', '', ['id' => 'precio']) !!}

							<div class="input-field col s12">
								<p><em>* Puedes seleccionar un máximo de 8 lugares</em></p>
							</div>
							
						</div>

						<div class="row">
						
							<div class="input-field center-align">
								{!! Form::submit('Confirmar',['class'=>'btn waves-effect waves-light  orange accent-3']) !!}
							</div>	
						
						</div>
							
					{!! Form::close() !!}
				@else
					<p class="center-align raleway">Debes iniciar sesion para poder realizar la compra</p>
					<div class="col s6 col-center">
						<a href="#modal-login" class="modal-login-open btn btn-block waves-light orange accent-3">Login</a>
					</div>
				@endif
				
			</div>		
		</div> --}}

	{{-- @else


	@endif --}}
	<div class="row">
		<h5 class="mt-50 center-align raleway">Boletos disponibles en Rs Viajes Centro, RS Viajes Periodismo y taquillas del planetario.</h5>
	</div>

	<div class="row">
		<div class="col s6 offset-s3 mt-30">
			<div class="divider"></div>
		</div>
	</div>
	<div class="row">
		<p class="center-align">Si tienes alguna duda sobre este evento no dudes en contactarnos</p>
		<div class="row center-align">
			<a href="{{ route('contacto') }}" class="btn waves-light waves-effect green center-align ls-1">CONTACTO</a>
		</div>
	</div>
</section>

<section class="section-lugar">
	<div id="map"></div>
	
	<div class="info-lugar">
		<h5 class="raleway quote mb-30">Lugar del evento</h5>
		<div class="divider mb-30"></div>
		<p><b>Teatro Morelos</b></p>
		<p><i class="material-icons">location_on</i>Av. Ventura Puente s/n, Félix Ireta, 58070 Morelia, Mich.</p>
		<p><i class="material-icons">call</i> 01 443 232 4400</p>
		<p><i class="material-icons">email</i> No disponible</p>
		<p><i class="material-icons">language</i> <a title="website" href="http://ceconexpo.com/" target="_blank">http://ceconexpo.com</a></p>
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
	<script type="text/javascript" src="{{asset('js/jquery.elevatezoom.js')}}"></script>
	<script>
		var tabla_evento = "franco317";

		$("#zoom_01").elevateZoom({
			scrollZoom : true,
			zoomType: "inner"
		});
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
		        var uluru = {lat: 19.6824276, lng: -101.1830612};
		        var map = new google.maps.Map(document.getElementById('map'), {
		          zoom: 17,
		          scrollwheel: false,
		          navigationControl: true,
		          draggable: true,
		          center: {lat: 19.6824276, lng: -101.1810612}
		        });
		        var marker = new google.maps.Marker({
		          position: uluru,
		          map: map
		        });
		      }

		$("#zona").change(function(){
			var id = $(this).val();
			
			if( id == 'Diamante' ){
				$("#precio").val('750');
			}else if( id == 'Oro' ){
				$("#precio").val('600');
			}else{
				$("#precio").val('500');
			}

			if( tabla_evento == '' ){
				alert('Debes seleccionar primero una fecha de evento');
				$("#fecha").val('');
			}else{
				$.ajax({
					url: '{{url('/api/getFilas')}}/'+ tabla_evento +'/' + id,
					method: 'GET',
					// data: 'id=' + id,
					success: function(res){
						var filas = res;
						var options = "<option value='' selected disabled>Selecciona una fila</option>";
						for(i=0; i<filas.length; i++){
							options += '<option value='+filas[i].fila+'>'+ filas[i].fila +'</option>';
						}
						$("#fila").html(options);
						$("#fila").material_select();

					}
				});
			}

		});

		$("#fila").change(function(){
			var id = $(this).val();
			$.ajax({
				url: '{{url('/api/getAsientos')}}/'+ tabla_evento +'/' + id,
				method: 'GET',
				// data: 'id=' + id,
				success: function(res){
					var asientos = res;
					var options = "<option value='' selected disabled>Seleccione los asientos</option>";
					for(i=0; i<asientos.length; i++){
						options += '<option value='+asientos[i].id+'|'+asientos[i].asiento+'>'+ asientos[i].asiento +'</option>';
					}
					$("#asiento").html(options);
					$("#asiento").material_select();

				}
			});
		});

		// $("#fecha").change(function(){

		// 	$("#zona").html("<option value='' selected disabled>Selecciona una zona</option><option value='Diamante'>Diamante</option><option value='Oro'>Oro</option><option value='Plata'>Plata</option>");
		// 	$("#fila").html("<option value='' selected disabled>Selecciona primero una zona</option>");
		// 	$("#asiento").html("<option value='' selected disabled>Selecciona primero una fila</option>");
		// 	$("#zona").material_select();
		// 	$("#fila").material_select();
		// 	$("#asiento").material_select();

		// 	if( $(this).val() == "31 de Agosto 2018" ){
		// 		tabla_evento = 'franco31';
		// 		$("#db_table").val('franco31');
		// 	}else{
		// 		tabla_evento = 'franco01';
		// 		$("#db_table").val('franco01');
		// 	}

		// });
	</script>

      <script async defer src="https://maps.googleapis.com/maps/api/js?key=AIzaSyBOOT9N6QdDeq0bnmSb1bw2SKw5CXQmOeA&callback=initMap"></script>
@endsection