@extends('layouts.main')

@section('title', 'Franco Escamilla Morelia')

@section('description', 'Franco Escamilla en Morelia, 31 de agosto y 01 de Septiembre, 9:30 pm boletos en RS Viajes centro, bolematico.mx y taquillas del planetario de Morelia')

@section('styles')
<script src="https://use.fontawesome.com/9b9c9dc667.js"></script>
@endsection

@section('content')

<div class="image-header bg-morelos overlay overlay-5">

	<div class="row white-text">
		<h4>Franco Escamilla</h4>
		<div class="divider"></div>
		<p><i>Morelia - Teatro Morelos 31 de Agosto y 01 de Septiembre</i></p>
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
				<h4 class="mt-0 raleway quote">PRECIOS</h4>
				{{-- <div class="divider"></div> --}}
			</div>

			<div class="col s8 offset-s2 m5 mb-30">
				<img src="{{ asset('img/franco-morelia.jpg') }}" alt="" class="responsive-img">
			</div>
			
			<div class="col s12 m5 offset-m1">				

				<div class="row">

					<div class="qcPricing col s12 center-align mb-10">
						<div class="box col s12">
							<header>
								<div class="col s12 m8 grey lighten-1">Zona plata</div>
								<div class="col m4 btn-buy nopadding hide-on-small-only"><a href="#compra" class="page-scroll"><b>Comprar</b> <i class="fa fa-ticket" aria-hidden="true"></i></a></div>
							</header>
							<div class="price col s12"><span>$500</span> Por entrada</div>
							<div class="col s12 btn-buy nopadding hide-on-med-and-up"><a href="#compra" class="page-scroll"><b>Comprar</b> <i class="fa fa-ticket" aria-hidden="true"></i></a></div>
						</div>
					</div>
					
					<div class="qcPricing col s12 center-align mb-10">
						<div class="box col s12">
							<header>
								<div class="col s12 m8">Zona oro</div>
								<div class="col m4 btn-buy nopadding hide-on-small-only"><a href="#compra" class="page-scroll"><b>Comprar</b> <i class="fa fa-ticket" aria-hidden="true"></i></a></div>
							</header>
							<div class="price col s12"><span>$600</span> Por entrada</div>
							<div class="col s12 btn-buy nopadding hide-on-med-and-up"><a href="#compra" class="page-scroll"><b>Comprar</b> <i class="fa fa-ticket" aria-hidden="true"></i></a></div>
						</div>
					</div>

					<div class="qcPricing col s12 center-align mb-10">
						<div class="box col s12">
							<header>
								<div class="col s12 m8 teal accent-4">Zona diamante</div>
								<div class="col m4 btn-buy nopadding hide-on-small-only"><a href="#compra" class="page-scroll"><b>Comprar</b> <i class="fa fa-ticket" aria-hidden="true"></i></a></div>
							</header>
							<div class="price col s12"><span>$750</span> Por entrada</div>
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
				<img src="{{ asset('img/franco-bio.jpg') }}" class="responsive-img">
			</div>
			<div class="col s12 m9">
				<h4 class="mt-0 raleway quote">BIOGRAFÍA</h4>		
				<p>Franco Escamilla, mejor conocido como “El Diablo” o “El Amo del Sarcasmo”, nació un 29 de abril de 1981 en Cuautla Morelos, México, es un músico, comediante y locutor.</p>
				<p>A sus 16 años se muda para Monterrey a trabajar en bares, restaurantes y cantinas. Desde muy pequeño estudió durante 3 años y medio en el ESMYDM (Escuela Superior de Música y Danza de Monterrey). Luego culminó sus estudios y se mantuvo presente en el ambiente musical.</p>
				<p>Franco se considera a sí mismo una persona aferrada, ya que desde pequeño soñó con tener su propio programa de radio, lo cual consiguió gracias a su actitud y empeño de dar todo con su esfuerzo.</p>
				<p>Entre sus pasatiempos se destacan la lectura, es jugador amateur armando cubos rubik y amante de los videojuegos, a lo que él mismo se considera como un verdadero gamer.</p>
			</div>
			<div class="col s3 hide-on-small-only">
				<img src="{{ asset('img/franco-bio.jpg') }}" class="responsive-img">
			</div>
			<div class="clearfix"></div>
			<div class="col s8 offset-s2 m4">
				<img src="{{ asset('img/franco-bio2.jpg') }}" class="responsive-img">
			</div>
			<div class="col s12 m8">
				<p class="mt-0">“La Máquina” es como también es conocido Franco, debido a que una vez durante una de sus presentaciones con duración a dos horas se tuvo que extender durante 90 minutos más, a lo que sus colegas y las personas que lo habían contratado para aquel entonces les sorprendió por el tiempo en tarima, por parecer una “rockola”.</p>
				<p>Llegó a trabajar lavando carros, como también logró ser un gran cantante. Se dio a conocer principalmente en el restaurante “Las Monjitas” donde fue también mesero, parrillero, cocinero y hasta trovador.</p>
				<p>A mediados del 2007 comienza su carrera como comediante en el bar “Unicornio Azul”, sin contar chistes. En los inicios de esta área se le hizo un poco difícil conseguir un público a la que le agradaran sus presentaciones. Su show contaba con 3 monólogos: “Qué duro es ser foráneo”, “Regios en la luna” y “Sara”.</p>
				<p>Poco a poco, se fue apegando más a este género y consiguió lo que quería, crear un estilo de stand up comedy con un toque sarcástico, áspero, ácido y con un humor negro que lo ha caracterizado en su carrera artística.</p>
			</div>
			<div class="clearfix"></div>
			<p>Sitio web Oficial:</p>
			<p><a href="http://francoescamillaoficial.com/" target="_blank">http://francoescamillaoficial.com/</a></p>
			<p>Fuente:</p>
			<p><small>https://www.buenamusica.com/franco-escamilla/biografia</small></p>
			<p>Imagenes:</p>
			<p><small>http://francoescamillaoficial.com/</small></p>
			<p><small>https://www.facebook.com/francoescaoficial/</small></p>
			
		</div>

		<div id="lugares" class="col s12 tab-content">
			<div class="row">
				<h4 class="mt-0 raleway quote">LUGARES DE VENTA</h4>
			</div>
			<div class="row">
				<div class="col s12">
					<h5>RS Viajes Centro</h5>
				</div>
				<div class="col s12 m6">									
					<!-- ## VENUE MAP ## -->
					<div class="qcEventlayout">
						<iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3756.1943227085408!2d-101.18477128552061!3d19.704349286730476!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x842d0e0d6bca646b%3A0x1b0a3a981724216f!2sRS+Viajes+Centro!5e0!3m2!1ses!2smx!4v1501091355750" width="100%" height="320" frameborder="0" style="border:0" allowfullscreen></iframe>
					</div>

				</div>

				<!-- ## ADDRESS LIST ## -->
				<div class="col s12 m6">
					<ul class="qcAddress">
						<li><i class="medium material-icons">location_on</i><p><strong>DIRECCIÓN</strong>: 20 de Noviembre 917, Centro Histórico, 58000 Morelia, Mich</p></li>
						<li><i class="medium material-icons">call</i><p><strong>TELÉFONO</strong>: 01 443 312 4639</p></li>
						<li><i class="medium material-icons">schedule</i><p><strong>HORARIO</strong>: 10:00 a 19:00 hrs. Lunes a Viernes y 10:30 a 14:00 hrs. los Sabados.</p></li>
						<li><i class="medium material-icons">language</i><p><strong>Website</strong>: <a title="website" href="https://www.facebook.com/RsViajesCentro/" target="_blank">https://www.facebook.com/RsViajesCentro/</a></p></li>
					</ul>
				</div>
			</div>

			<div class="row">
				<div class="col s12">
					<h5>Taquillas del planetario</h5>
				</div>
				<div class="col s12 m6">									
					<!-- ## VENUE MAP ## -->
					<div class="qcEventlayout">
						<iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3756.6546912563167!2d-101.18560468584354!3d19.68473203767239!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x842d0de79c733455%3A0x2bb6c9a37c54bca5!2sPlanetario+de+Morelia!5e0!3m2!1ses!2smx!4v1499195093931" width="100%" height="320" frameborder="0" style="border:0" allowfullscreen></iframe>
					</div>

				</div>

				<!-- ## ADDRESS LIST ## -->
				<div class="col s12 m6">
					<ul class="qcAddress">
						<li><i class="medium material-icons">location_on</i><p><strong>DIRECCIÓN</strong>: Av. Ventura Puente s/n, Félix Ireta, 58070 Morelia, Mich.</p></li>
						<li><i class="medium material-icons">call</i><p><strong>TELÉFONO</strong>:  443 232 4400 ext. 160</p></li>
						<li><i class="medium material-icons">schedule</i><p><strong>HORARIO</strong>: 11:00 a 19:00 hrs. Lunes a Sabado</p></li>
						<li><i class="medium material-icons">language</i><p><strong>Website</strong>: <a title="website" href="http://ceconexpo.com/" target="_blank">http://ceconexpo.com</a></p></li>
					</ul>
				</div>
			</div>
	

		</div>

	</div>
</section>
<section class="section-video overlay overlay-5" style="background-image: url('https://img.youtube.com/vi/02mdS1zBtnU/maxresdefault.jpg');">
	<div class="row center-align">
		<a class="white-text" id="modal-video-open" href="#modal-video" data-video="https://www.youtube.com/embed/02mdS1zBtnU"><i class="material-icons">play_circle_filled</i></a>
		<p class="white-text"><i>Franco Escamilla.- Melómano</i></p>
	</div>
</section>

<section id="compra" class="section-comprar">
	<div class="row">
		<div class="col m6 offset-m3 mt-30">
			<h5 class="center-align raleway">Preventa exclusiva en linea 2 y 3 de Julio. <br>Venta normal a partir del 4 de Julio</h5>
			{{-- <img src="{{ asset('img/stella_inda.png') }}" alt="" class="responsive-img" id="zoom_01" data-zoom-image="{{asset('img/stella_inda.jpg')}}">
			<p class="center-align"><i>*Scroll sobre la imagen para hacer zoom</i></p> --}}
		</div>
		{{-- <div class="col m4  mt-30">
			@if(Auth()->check())
				{!! Form::open(['route'=>'payment.details', 'method'=>'POST']) !!}
					<div class="row">
						<h5 class="quote">Elija sus boletos</h5>
						<div class="input-field col s12">
							{!! Form::select('zona', ['Diamante' => 'Diamante', 'Oro' => 'Oro', 'Plata' => 'Plata'], '', ['class' => 'select-dropdown', 'required', 'id' => 'zona', 'placeholder' => 'Seleccione una zona']) !!}
							{!! Form::label('zona', 'Zona') !!}
						</div>
						<div class="input-field col s12" id="select-fila">
							{!! Form::select('fila', [], '', ['class' => 'select-dropdown', 'required', 'id' => 'fila', 'placeholder' => 'Seleccione primero una zona']) !!}
							{!! Form::label('fila', 'Fila') !!}
						</div>
						<div class="input-field col s12" id="select-asiento">
							{!! Form::select('asiento[]', [], '', ['class' => 'select-dropdown', 'required', 'multiple','id' => 'asiento', 'placeholder' => 'Selecciona primero una fila']) !!}
							{!! Form::label('asiento', 'Asiento') !!}
						</div>
						
						{!! Form::hidden('img', 'img/rosana-morelia.jpg') !!}
						{!! Form::hidden('evento', 'Rosana en Morelia') !!}
						{!! Form::hidden('fecha', '16 de Junio 2018') !!}
						{!! Form::hidden('lugar', 'Teatro Morelos') !!}
						{!! Form::hidden('hora', '09:30 pm') !!}
						{!! Form::hidden('event_type', 'numerado') !!}
						{!! Form::hidden('db_table', 'rosana') !!}
						{!! Form::hidden('info', '4431880358') !!}
						{!! Form::hidden('precio', '', ['id' => 'precio']) !!}

						<div class="input-field col s12">
							<p><em>* Puedes seleccionar un máximo de 10 lugares</em></p>
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
			
		</div> --}}
		<div class="clearfix"></div>
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
		// $("#zoom_01").elevateZoom({
		// 	scrollZoom : true,
		// 	zoomType: "inner"
		// });
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

		// $("#zona").change(function(){
		// 	var id = $(this).val();
			
		// 	if( id == 'Diamante' ){
		// 		$("#precio").val('850');
		// 	}else if( id == 'Oro' ){
		// 		$("#precio").val('650');
		// 	}else{
		// 		$("#precio").val('400');
		// 	}

		// 	$.ajax({
		// 		url: '{{url('/api/getFilas')}}/Rosana/' + id,
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
		// 		url: '{{url('/api/getAsientos')}}/Rosana/' + id,
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