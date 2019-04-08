@extends('layouts.main')

@section('title', 'Marwan - Morelia')

@section('description', 'Marwan en Morelia, 15 de febrero, 20:30 hrs boletos en RS Viajes Centro, RS Viajes Periodismo y Bolematico.mx')

@section('styles')
<meta property="og:url"  content="http://bolematico.mx/eventos/marwan-morelia" />
<meta property="og:title" content="Marwan en Morelia" />
<meta property="og:description" content="Marwan en Morelia, 15 de febrero, 20:30 hrs boletos en RS Viajes Centro, RS Viajes Periodismo y Bolematico.mx" />
<meta property="og:image" content="http://bolematico.mx/img/marwan-morelia.jpg" />

<script src="https://use.fontawesome.com/9b9c9dc667.js"></script>
<link rel="stylesheet" type="text/css" href="{{ asset('css/event-select-manual.css') }}">
@endsection

@section('content')

<div class="image-header bg-4 overlay overlay-5">

	<div class="row white-text">
		<h4>Marwan</h4>
		<div class="divider"></div>
		<p><i>Teatro Stella Inda - Morelia</i></p>
		<p><i>15 de febrero, 20:30 hrs.</i></p>
	</div>
	<a href="#compra" class="btn waves-light waves-effect page-scroll"><b>Comprar</b> <i class="fa fa-ticket" aria-hidden="true"></i></a>
</div>

<section class="container">
	<div class="row">
		<div class="col s12">
			<ul class="tabs">
				<li class="tab "><a class="active" href="#precios">Precios</a></li>
				<li class="tab "><a href="#detalles">Detalles</a></li>
				<li class="tab "><a href="#lugares">Lugares de venta</a></li>
			</ul>
		</div>
		<div id="precios" class="col s12 tab-content">

			<div class="col s8 offset-s2 m5 mb-30 card-flyer">
				<img src="{{ asset('img/marwan-morelia.jpg') }}" alt="" class="responsive-img">
			</div>
			
			<div class="col s12 m6 offset-m1">				

				<div class="row">

					<div class="qcPricing col s12 center-align mb-10">
						<div class="box col s12">
							<header>
								<div class="col s12 m8 teal accent-4">Diamante</div>
								<div class="col m4 btn-buy nopadding hide-on-small-only"><a href="#compra" class="page-scroll"><b>Comprar</b> <i class="fa fa-ticket" aria-hidden="true"></i></a></div>
							</header>
							<div class="price col s12"><span>$420</span> Por entrada</div>
							<div class="col s12 btn-buy nopadding hide-on-med-and-up"><a href="#compra" class="page-scroll"><b>Comprar</b> <i class="fa fa-ticket" aria-hidden="true"></i></a></div>
						</div>
					</div>

					<div class="qcPricing col s12 center-align mb-10">
						<div class="box col s12">
							<header>
								<div class="col s12 m8 amber darken-1">Oro</div>
								<div class="col m4 btn-buy nopadding hide-on-small-only"><a href="#compra" class="page-scroll"><b>Comprar</b> <i class="fa fa-ticket" aria-hidden="true"></i></a></div>
							</header>
							<div class="price col s12"><span>$320</span> Por entrada</div>
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

		<div id="detalles" class="col s12 tab-content">
			<div class="col s12"><h4 class="mt-0 raleway quote">BIOGRAFIA</h4></div>	
			<div class="col s8 offset-s2 hide-on-med-and-up">
				<img src="{{ asset('img/marwan-bio.jpg') }}" class="responsive-img">
			</div>
			<div class="col s12 m8 text-justify">
		        <p>Marwan ha conseguido convertirse, gracias al boca a boca, en uno de los cantautores más reconocidos del circuito de salas de España con llenos en todas las ciudades y con unos números espectaculares también en algunas ciudades de Latinoamérica a pesar de ser un artista independiente sin ayuda de ningún sello discográfico.</p>
				<p>Nace en Madrid el 5 de Marzo de 1979 fruto del amor de un palestino y una española. A los 15 años se compra una guitarra para tocar música con sus amigos. Pronto los discos de Serrat, Silvio Rodríguez y Sabina que siempre sonaron en casa y cantautores de la generación de los 90 como Ismael Serrano, Jorge Drexler o Carlos Chaouen hacen que se acabe orientando en esta línea. Posteriormente bebe de las más diversas influencias: Manu Chao, Calamaro, Damien Rice, Nach, Glen Hansard, Iván Ferreiro, Bêbe, etc</p>
				<p>A finales de 2004 compone la canción “Palabra por palabra” tema original del programa con el mismo nombre que cada sábado se emite en LA 2 de TVE y en 2005 cede su canción “Madrid, 11 de Marzo” para el disco NO OS OLVIDAMOS en el que comparte cartel con Ana Belén, Víctor Manuel, Ismael Serrano, Fito Páez, María Dolores Pradera, etc</p>
				<p>A lo largo de su andadura comparte canciones en sus grabaciones con artistas del nivel de Ismael Serrano, Nach, Jorge Drexler, Pedro Guerra, Andrés Suárez, Conchita, Rayden, Luis Ramiro, Funambulista,…</p>
				
			</div>
			<div class="col m4 hide-on-small-only">
				<img src="{{ asset('img/marwan-bio.jpg') }}" class="responsive-img">
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
						<iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d1878.3461125835147!2d-101.2256908688827!3d19.68313181288793!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x842d0c23bc1216f1%3A0xc16b3ac2516592fb!2sAv.+Periodismo+Jos%C3%A9+Tocaven+Lav%C3%ADn+1927%2C+Jardines+de+Torremolinos%2C+58197+Morelia%2C+Mich.!5e0!3m2!1ses!2smx!4v1533228065053" width="100%" height="320" frameborder="0" style="border:0" allowfullscreen></iframe>
					
					<!-- ## ADDRESS LIST ## -->
						<div class=" p-30">
							<h5><b>RS Viajes Periodismo</b></h5>
							<ul class="qcAddress">
								<ul class="qcAddress">
									<li><i class="medium material-icons">location_on</i><p><strong>DIRECCIÓN</strong>: Av. Periodismo 1927-1, Fracc Jardines de Torremolinos Ote (Frente a la Farmacia Guadalajara).</p></li>
									<li><i class="medium material-icons">call</i><p><strong>TELÉFONO</strong>: </p></li>
									<li><i class="medium material-icons">schedule</i><p><strong>HORARIO</strong>: 10:00 a 19:00 hrs. Lunes a Viernes y 11:00 a 14:00 hrs. los Sabados.</p></li>
									<li><i class="fa fa-globe"></i> <strong>Website</strong>: <p><a title="website" href="https://www.facebook.com/RsViajesCentro/" target="_blank">https://www.facebook.com/RsViajesCentro/</a></p></li>
								</ul>
							</ul>
						</div>
					</div>

				</div>
				
			</div>			

		</div>

	</div>
</section>
<section class="section-video overlay overlay-5" style="background-image: url('https://img.youtube.com/vi/X98HLdKgGmM/maxresdefault.jpg');">
	<div class="row center-align">
		<a class="white-text" id="modal-video-open" href="#modal-video" data-video="https://www.youtube.com/embed/X98HLdKgGmM"><i class="material-icons">play_circle_filled</i></a>
		<p class="white-text"><i>Marwan - Un Día de Estos</i></p>
	</div>
</section>

<section id="compra" class="section-comprar">
	@if(Auth()->check())
	<div class="row">
		<div class="col s12 mb-15">
			<h5 class="mt-30 raleway quote">Da clic en el bloque que deseas para mostrar los asientos disponibles</h5>
		</div>
		<div class="col s12 m6">
			@include('maps.teatro-stella-inda')
		</div>
		<div class="col s12 m6">
			<div class="col s12 mb-15">
				<div class="col s1 grey darken-4" style="height: 25px;"></div>
				<div class="col s11">
					<div class="col s5">Escenario</div>
					<div class="col s7 right-align" id="info-title-section"></div>
				</div>
			</div>
			<div class="col s11 bloque-container">
				
				<div id="mapa-escenario" class=""></div>
				<div id="mapa-asientos" class="col s12"></div>
			</div>
			<div class="col s12 mt-15">
				<p id="ticket-message"></p>
			</div>
			<div class="col s12 center-align mt-15">
				<a href="javascript:;" id="checkout" class="btn waves-effect waves-light orange accent-3 hide">SIGUIENTE</a>
				{!! Form::open(['route'=>'payment.details', 'method'=>'POST', 'id' => 'checkout-form', 'style' => 'display:none;']) !!}

					{!! Form::hidden('asiento', '', ['id' => 'form_asiento']) !!}
					{!! Form::hidden('zona', '', ['id' => 'form_zona']) !!}
					{!! Form::hidden('precio', '', ['id' => 'form_precio']) !!}
					{!! Form::hidden('img', 'img/marwan-morelia-2019.jpg') !!}
					{!! Form::hidden('evento', 'Marwan') !!}
					{!! Form::hidden('fecha', '15 de febrero 2019') !!}
					{!! Form::hidden('lugar', 'Teatro Stella Inda') !!}
					{!! Form::hidden('ciudad', 'Morelia') !!}
					{!! Form::hidden('hora', '20:30 hrs') !!}
					{!! Form::hidden('event_type', 'numerado') !!}
					{!! Form::hidden('impresion_boleto', true) !!}
					{!! Form::hidden('db_table', 'marwan_morelia_15feb') !!}
					{!! Form::hidden('info', '--') !!}
					{!! Form::hidden('select_type', 'manual') !!}
					{!! Form::hidden('url', url('eventos/marwan-morelia')) !!}
				{!! Form::close() !!}
			</div>
		</div>
	
	</div>
	@else
	<div class="row">
		<p class="center-align raleway">Debes iniciar sesion para poder realizar la compra</p>
		<div class="col s12 center-align">
			<a href="#modal-login" class="modal-login-open btn waves-light orange accent-3">Login</a>
		</div>
	</div>
	@endif
	<div class="row mt-30">
		<div class="col m8 offset-m2">
			<h5 class="center-align raleway">Venta de boletos también en RS Viajes Centro y RS Viajes Periodismo</h5>
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
		<p><b>Teatro Stella Inda</b></p>
		<p><i class="material-icons">location_on</i>Av Francisco I. Madero Pte 1200, Centro Histórico, 58000 Morelia, Mich.</p>
		<p><i class="material-icons">call</i> 01 443 312 2880</p>
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

		var seccion = '';

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
		        var uluru = {lat: 19.7032, lng: -101.2034407};
		        var map = new google.maps.Map(document.getElementById('map'), {
		          zoom: 17,
		          scrollwheel: false,
		          navigationControl: true,
		          draggable: true,
		          center: {lat: 19.7032, lng: -101.2028407}
		        });
		        var marker = new google.maps.Marker({
		          position: uluru,
		          map: map
		        });
		      }

		function printSection(query, align, stage){

			let asientos = "", html = "", status = "", currentRow = "", fila = "", i=0;

			if(query[i].status != 0){
				status = 'ocupado';
			}

			query[i].fila == 'NN'? fila = 'Ñ': fila = query[i].fila;

			asientos = '<span class="row-name center-align">'+ fila +'</span><a href="javascript:;" class="asiento '+status+'" data-info="'+query[i].id+'|'+query[i].asiento+'|'+fila+'">'+ query[i].asiento +'</a>';
			currentRow = query[i].fila;
			i++;
			status = "";


			while(i<query.length){
				if(query[i].status != 0){
					status = 'ocupado';
				}

				query[i].fila == 'NN'? fila = 'Ñ': fila = query[i].fila;

				if(currentRow == query[i].fila) {
					asientos += '<a href="javascript:;" class="asiento '+status+'" data-info="'+query[i].id+'|'+query[i].asiento+'|'+fila+'">'+ query[i].asiento +'</a>';					
				}else{
					currentRow = query[i].fila;

					html += asientos +'<br>';

					html += '<span class="row-name center-align">'+ fila +'</span><a href="javascript:;" class="asiento '+status+'" data-info="'+query[i].id+'|'+query[i].asiento+'|'+fila+'">'+ query[i].asiento +'</a>';
					asientos = "";
					
				}
				if(i == query.length - 1){
					html += asientos +'<br>';
				}

				i++;
				status = "";
			}

			$("#mapa-escenario").attr('class', stage+'-map');
			$("#mapa-asientos").css('text-align', align);
			$("#mapa-asientos").html(html);
		}

		function setPrecio() {

			let precio = '';

			switch(seccion){
				case 'Diamante': 
					precio = 420;break;
				case 'Oro': 
					precio = 320;break;
			}

			return precio;
		}

		$(".block-hover").click(function(){

			$("#mapa-asientos").css('text-align', 'center');
			$("#mapa-asientos").html('<img src="{{asset('img/loading.gif')}}">');
			$("#mapa-escenario").attr('class', 'hidden');

			let bloque = $(this).attr('id'),
				order_fila = $(this).data('order-fila'),
				order_asiento = $(this).data('order-asiento'),
				align = $(this).data('align'),
				stage = $(this).data('stage');
			
			seccion = $(this).data('seccion');

			$("#info-title-section").html(seccion + ' <small>bloque'+bloque.substring(bloque.indexOf('-')) + '</small>');

			$.ajax({
				url: '{{url('/api/getMapAsientos')}}/marwan_morelia_15feb/' + bloque + '/' + order_fila + '/' + order_asiento,
				method: 'GET',
				success: function(res){
					printSection(res, align, stage);
					$("#checkout").removeClass('hide');
				},
				error: function(res){
					alert(res);
				}
			});
		});

		$("#mapa-asientos").on('click', '.asiento',function(){

			if(!$(this).hasClass('ocupado')){


				if($(".seleccionado").length < 8){
					$(this).toggleClass('seleccionado');
				}else if($(".seleccionado").length == 8 && $(this).hasClass('seleccionado')){
					$(this).removeClass('seleccionado');
				}

			}

		});

		$("#checkout").click(function(){
			
			let ids = '',
				asientos = [],
				precio = setPrecio(); 

			if($(".seleccionado").length > 0){

				$("#ticket-message").html('');

				$("#form_zona").val(seccion);
				$("#form_precio").val(precio);

				$(".seleccionado").each(function(i, item){

					asientos.push( $(item).data('info') );

				});

				$("#form_asiento").val(asientos);
				$("#checkout-form").submit();

			}else{
				$("#ticket-message").html('* Debes seleccionar al menos un lugar antes de continuar');
			}

		});

	</script>

      <script async defer src="https://maps.googleapis.com/maps/api/js?key=AIzaSyBOOT9N6QdDeq0bnmSb1bw2SKw5CXQmOeA&callback=initMap"></script>
@endsection