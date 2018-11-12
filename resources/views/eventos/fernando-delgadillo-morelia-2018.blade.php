@extends('layouts.main')

@section('title', 'Fernando Delgadillo')

@section('description', 'Fernando Delgadillo, Morelia 22 de noviembre 2018, 21 hrs. Invitados Sergio Felix, ALejandro Santiago y Gerardo Peña')

@section('styles')

<!-- Metas Facebook -->
<meta property="og:url"  content="http://bolematico.mx/eventos/fernando-delgadillo-morelia-2018" />
<meta property="og:title" content="Fernando Delgadillo en Morelia" />
<meta property="og:description" content="Fernando Delgadillo Morelia 22 de noviembre 2018, 21 hrs. Invitados Sergio Felix, ALejandro Santiago y Gerardo Peña" />
<meta property="og:image" content="http://bolematico.mx/img/fernando-morelia-2018.jpg" />

<script src="https://use.fontawesome.com/9b9c9dc667.js"></script>
<style type="text/css">
	.flex {
		margin: 0 auto;
		width: 80%;
		padding: 10px 0;
		display: flex;
		justify-content: space-around;
		align-items: flex-start;
		border-bottom: 1px solid #ddd;
	}
	.flex a {
		font-size: 1.3rem;
	}
</style>
@endsection

@section('content')

<div class="image-header bg-morelos overlay overlay-5">

	<div class="row white-text">
		<h4>Fernando Delgadillo</h4>
		<div class="divider"></div>
		<p><i>Morelia - Teatro Morelos 22 de noviembre</i></p>
	</div>
	<a href="#compra" class="btn waves-light waves-effect page-scroll"><b>Comprar</b> <i class="fa fa-ticket" aria-hidden="true"></i></a>
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
				<h4 class="mt-0 raleway quote">PRECIOS</h4>
				{{-- <div class="divider"></div> --}}
			</div>

			<div class="col s8 offset-s2 m5 mb-30">
				<img src="{{ asset('img/fernando-morelia-2018.jpg') }}" alt="" class="responsive-img">
			</div>
			
			<div class="col s12 m5 offset-m1">				

				<div class="row">

					<div class="qcPricing col s12 center-align mb-10">
						<div class="box col s12">
							<header>
								<div class="col s12 m8 teal accent-4">Zona diamante</div>
								<div class="col m4 btn-buy nopadding hide-on-small-only"><a href="#compra" class="page-scroll"><b>Comprar</b> <i class="fa fa-ticket" aria-hidden="true"></i></a></div>
							</header>
							<div class="price col s12"><span>$580</span> Por entrada</div>
							<div class="col s12 btn-buy nopadding hide-on-med-and-up"><a href="#compra" class="page-scroll"><b>Comprar</b> <i class="fa fa-ticket" aria-hidden="true"></i></a></div>
						</div>
					</div>
					
					<div class="qcPricing col s12 center-align mb-10">
						<div class="box col s12">
							<header>
								<div class="col s12 m8">Zona oro</div>
								<div class="col m4 btn-buy nopadding hide-on-small-only"><a href="#compra" class="page-scroll"><b>Comprar</b> <i class="fa fa-ticket" aria-hidden="true"></i></a></div>
							</header>
							<div class="price col s12"><span>$480</span> Por entrada</div>
							<div class="col s12 btn-buy nopadding hide-on-med-and-up"><a href="#compra" class="page-scroll"><b>Comprar</b> <i class="fa fa-ticket" aria-hidden="true"></i></a></div>
						</div>
					</div>

					<div class="qcPricing col s12 center-align mb-10">
						<div class="box col s12">
							<header>
								<div class="col s12 m8 grey lighten-1">Zona plata</div>
								<div class="col m4 btn-buy nopadding hide-on-small-only"><a href="#compra" class="page-scroll"><b>Comprar</b> <i class="fa fa-ticket" aria-hidden="true"></i></a></div>
							</header>
							<div class="price col s12"><span>$380</span> Por entrada</div>
							<div class="col s12 btn-buy nopadding hide-on-med-and-up"><a href="#compra" class="page-scroll"><b>Comprar</b> <i class="fa fa-ticket" aria-hidden="true"></i></a></div>
						</div>
					</div>

				</div>

				<div class="row">
					<div class="divider"></div>
					<p class="center-align mt-30">Al realizar tu compra en línea se realiza un cargo extra por concepto de servicio.</p>
					<p class="center-align"><b>Informes:</b> Taquillas del planetario - <a href="tel:4432324400" style="background: #4caf50; color: #fff; padding: 5px 10px;"> 443 232 4400 ext. 160</a> <br> Whatsapp - <a href="tel:4521741255" style="background: #4caf50; color: #fff; padding: 5px 10px;"> 452 174 1255</a></p>
				</div>
			</div>
		</div>

		<div id="biografia" class="col s12 tab-content">
			<div class="col s8 offset-s2 hide-on-med-and-up">
				<img src="{{ asset('img/delgadillo-bio.jpg') }}" class="responsive-img">
				<div class="flex">
					<a href="https://www.facebook.com/FernandoDelgadilloOficial/" target="_blank"><i class="fa fa-facebook" aria-hidden="true"></i></a>
					<a href="https://www.youtube.com/user/FernandoDelgadilloMx" target="_blank"><i class="fa fa-youtube" aria-hidden="true"></i></a>
					<a href="https://twitter.com/DelgadilloFer" target="_blank"><i class="fa fa-twitter" aria-hidden="true"></i></a>
				</div>
			</div>
			<div class="col s12 m9">
				<h4 class="mt-0 raleway quote">BIOGRAFÍA</h4>
				<h5>Fernando Delgadillo</h5>		
				<p>creador de la Canción Informal, es un cantautor mexicano que desde hace treinta  años se dedica a la composición e interpretación de los temas con los que se presenta en distintos países de América Latina.</p>
				<p>Actualmente cuenta con el reconocimiento de un público muy diverso, compuesto tanto de aquellos que lo siguen desde los inicios de su trayectoria, como de jóvenes, generalmente universitarios.</p>
				<p>A lo largo de su carrera, Fernando ha grabado quince discos, el más reciente se lanzó en septiembre de 2016 y lleva por título "Sesiones Acústicas".</p>
				<p>Cada año realiza presentaciones en las ciudades más importantes de México, llenando por completo foros con capacidad hasta para 3500 personas, además de las giras internacionales que lo han llevado a presentarse por todo el continente americano.<br />Su sitio oficial registra más de 3,000,000 de visitas y su página oficial en Facebook tiene más de 548,000 seguidores. Además, su música se difunde en diversos sitios no oficiales y en foros internacionales dedicados a la trova y la canción de autor.<br />Ha sido invitado a participar en festivales internacionales, como el "Proyecto Generación Ñ" en España, el "Festival de Televisión de Beijing" en China, y varios otros en Cuba, Puerto Rico,Estados Unidos y el ultimo en Caracas Venezuela en el festival Suena Caracas 2016.</b>. </p>
				<p>Sitio web Oficial: <a href="http://www.fdelgadillo.com.mx/" target="_blank">http://www.fdelgadillo.com.mx/</a></p>
			</div>
			<div class="col s3 hide-on-small-only">
				<img src="{{ asset('img/delgadillo-bio.jpg') }}" class="responsive-img materialboxed">
				<div class="flex">
					<a href="https://www.facebook.com/FernandoDelgadilloOficial/" target="_blank"><i class="fa fa-facebook" aria-hidden="true"></i></a>
					<a href="https://www.youtube.com/user/FernandoDelgadilloMx" target="_blank"><i class="fa fa-youtube" aria-hidden="true"></i></a>
					<a href="https://twitter.com/DelgadilloFer" target="_blank"><i class="fa fa-twitter" aria-hidden="true"></i></a>
				</div>
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

				<div class="col s12 m6">									
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
								<li><i class="fa fa-calendar"></i> <strong>HORARIO</strong>: <p>11:00 a 19:00 hrs. Lunes a Sabado. </p></li>
								<li><i class="fa fa-globe"></i> <strong>Website</strong>: <p><a title="website" href="http://ceconexpo.com" target="_blank"></a>http://ceconexpo.com</p></li>
							</ul>
						</div>
					</div>

				</div>
				
			</div>	

		</div>

	</div>
</section>
<section class="section-video overlay overlay-5" style="background-image: url('https://img.youtube.com/vi/DAFcT2SV96c/maxresdefault.jpg');">
	<div class="row center-align">
		<a class="white-text" id="modal-video-open" href="#modal-video" data-video="https://www.youtube.com/embed/DAFcT2SV96c"><i class="material-icons">play_circle_filled</i></a>
		<p class="white-text"><i>Fernando Delgadillo - Entre Pairos y Derivas</i></p>
	</div>
</section>

<section id="compra" class="section-comprar">
	{{-- @php
		$date = \Carbon\Carbon::now(new DateTimeZone('America/Mexico_City'));
	@endphp

	@if(  !$date->isWeekend() && ( $date->hour >= '09:00:00' && $date->hour <= '23:00:00' ) ) --}}

		<div class="row">
			<div class="col m6 mt-30">
				<img src="{{ asset('img/teatro-morelos-fondo.svg') }}" alt="" class="responsive-img" id="zoom_01" data-zoom-image="{{asset('img/teatro-morelos-fondo.svg')}}">
				<p class="center-align"><i>*Scroll sobre la imagen para hacer zoom</i></p>
			</div>
			<div class="col m4 offset-m1 mt-30">
				@if(Auth()->check())
					{!! Form::open(['route'=>'payment.details', 'method'=>'POST']) !!}
						<div class="row">
							<h5 class="quote">Elija sus boletos</h5>
							<div class="input-field col s12">
								{!! Form::select('zona', ['Diamante' => 'Diamante', 'Oro' => 'Oro', 'Plata' => 'Plata'], '', ['class' => 'select-dropdown', 'required', 'id' => 'zona', 'placeholder' => 'Selecciona la zona']) !!}
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
							
							{!! Form::hidden('img', 'img/fernando-morelia-2018.jpg') !!}
							{!! Form::hidden('evento', 'Fernando Delgadillo') !!}
							{!! Form::hidden('fecha', '22 de noviembre 2018') !!}
							{!! Form::hidden('lugar', 'Teatro Morelos') !!}
							{!! Form::hidden('ciudad', 'Morelia') !!}
							{!! Form::hidden('hora', '21:00 hrs') !!}
							{!! Form::hidden('event_type', 'numerado') !!}
							{!! Form::hidden('db_table', 'fernando_morelia_22nov') !!}
							{!! Form::hidden('info', '--') !!}
							{!! Form::hidden('select_type', 'list') !!}
							{!! Form::hidden('precio', '', ['id' => 'precio']) !!}
							{!! Form::hidden('url', url('eventos/fernando-delgadillo-morelia-2018')) !!}

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
		</div>

	{{-- @else

	<div class="row">
		<h5 class="mt-50 center-align raleway">Venta en línea de lunes a viernes de 9:00 a 23:00 hrs. <br>Boletos disponibles en Rs Viajes Centro, RS Viajes Periodismo y taquillas del planetario.</h5>
	</div>

	<div class="row">
		<div class="col s6 offset-s3 mt-30">
			<div class="divider"></div>
		</div>
	</div>

	@endif --}}
	<div class="row">
		<p class="center-align">Si tienes alguna duda sobre este evento no dudes en contactarnos.</p>
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
		var tabla_evento = "fernando_morelia_22nov";

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

			var zona = $(this).val();
			
			if( zona == 'Diamante' ){
				$("#precio").val('580');
			}else if( zona == 'Oro' ){
				$("#precio").val('480');
			}else{
				$("#precio").val('380');
			}

			$.ajax({
				url: '{{url('/api/getFilas')}}/'+ tabla_evento +'/' + zona,
				// url: '{{url('/api/getFilas')}}',
				method: 'GET',
				// data: 'id=' + id,
				success: function(filas){
					var options = "<option value='' selected disabled>Selecciona una fila</option>";
					for(i=0; i<filas.length; i++){
						options += '<option value='+filas[i].fila+'>'+ filas[i].fila +'</option>';
					}
					$("#fila").html(options);
					$("#fila").material_select();

				}
			});

		});

		$("#fila").change(function(){

			var fila = $(this).val();

			$.ajax({
				url: '{{url('/api/getAsientos')}}/'+ tabla_evento +'/' + fila,
				method: 'GET',
				// data: 'id=' + id,
				success: function(asientos){

					var options = "<option value='' selected disabled>Seleccione los asientos</option>";
					for(i=0; i<asientos.length; i++){
						options += '<option value='+asientos[i].id+'|'+asientos[i].asiento+'>'+ asientos[i].asiento +'</option>';
					}
					$("#asiento").html(options);
					$("#asiento").material_select();

				}
			});
		});

	</script>

      <script async defer src="https://maps.googleapis.com/maps/api/js?key=AIzaSyBOOT9N6QdDeq0bnmSb1bw2SKw5CXQmOeA&callback=initMap"></script>
@endsection