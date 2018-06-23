@extends('layouts.main')

@section('title', 'Rosana Morelia')

@section('description', 'Rosana en Morelia, 16 de Junio, 9:00 pm boletos en RS Viajes centro y en bolematico.mx')

@section('styles')
<script src="https://use.fontawesome.com/9b9c9dc667.js"></script>
@endsection

@section('content')

<div class="image-header bg-2 overlay overlay-5">

	<div class="row white-text">
		<h4>Rosana</h4>
		<div class="divider"></div>
		<p><i>Morelia - Teatro Stella Inda 16 de Junio</i></p>
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
				<img src="{{ asset('img/rosana-morelia.jpg') }}" alt="" class="responsive-img">
			</div>
			
			<div class="col s12 m5 offset-m1">				

				<div class="row">

					<div class="qcPricing col s12 center-align mb-10">
						<div class="box col s12">
							<header>
								<div class="col s12 m8 grey lighten-1">Zona plata</div>
								<div class="col m4 btn-buy nopadding hide-on-small-only"><a href="#compra" class="page-scroll"><b>Comprar</b> <i class="fa fa-ticket" aria-hidden="true"></i></a></div>
							</header>
							<div class="price col s12"><span>$400</span> Por entrada</div>
							{{-- <div class="filas col s6">Filas: Y - Z</div> --}}
							<div class="col s12 btn-buy nopadding hide-on-med-and-up"><a href="#compra" class="page-scroll"><b>Comprar</b> <i class="fa fa-ticket" aria-hidden="true"></i></a></div>
						</div>
					</div>
					
					<div class="qcPricing col s12 center-align mb-10">
						<div class="box col s12">
							<header>
								<div class="col s12 m8">Zona oro</div>
								<div class="col m4 btn-buy nopadding hide-on-small-only"><a href="#compra" class="page-scroll"><b>Comprar</b> <i class="fa fa-ticket" aria-hidden="true"></i></a></div>
							</header>
							<div class="price col s12"><span>$650</span> Por entrada</div>
							{{-- <div class="filas col s6">Filas: Q - X</div> --}}
							<div class="col s12 btn-buy nopadding hide-on-med-and-up"><a href="#compra" class="page-scroll"><b>Comprar</b> <i class="fa fa-ticket" aria-hidden="true"></i></a></div>
						</div>
					</div>

					<div class="qcPricing col s12 center-align mb-10">
						<div class="box col s12">
							<header>
								<div class="col s12 m8 teal accent-4">Zona diamante</div>
								<div class="col m4 btn-buy nopadding hide-on-small-only"><a href="#compra" class="page-scroll"><b>Comprar</b> <i class="fa fa-ticket" aria-hidden="true"></i></a></div>
							</header>
							<div class="price col s12"><span>$850</span> Por entrada</div>
							{{-- <div class="filas col s6">Filas: A - Ñ</div> --}}
							<div class="col s12 btn-buy nopadding hide-on-med-and-up"><a href="#compra" class="page-scroll"><b>Comprar</b> <i class="fa fa-ticket" aria-hidden="true"></i></a></div>
						</div>
					</div>

				</div>

				<div class="row">
					<div class="divider"></div>
					<p class="center-align mt-30">Al realizar tu compra en línea se realiza un cargo extra por concepto de servicio.</p>
					<p class="center-align"><b>Informes:</b> <a href="tel:4431880358" style="background: #4caf50; color: #fff; padding: 5px 10px;"> 443 188 0358</a> / <a href="tel:4432274979" style="background: #4caf50; color: #fff; padding: 5px 10px;"> 443 227 4979</a></p>
				</div>
			</div>
		</div>

		<div id="biografia" class="col s12 tab-content">
			<div class="col s8 offset-s2 hide-on-med-and-up">
				<img src="{{ asset('img/rosana-bio.jpg') }}" class="responsive-img">
			</div>
			<div class="col s12 m7">
				<h4 class="mt-0 raleway quote">BIOGRAFÍA</h4>		
				<p>Con 9 álbumes publicados – ocho de ellos de estudio y uno, en directo – Rosana se ha convertido en una de las artistas más reconocidas tanto a nivel nacional como internacional.</p>
				<p>Desde el lanzamiento de su primer disco en 1996 (“Lunas Rotas”) hasta el día de hoy, con su último trabajo “En la memoria de la piel”, cuenta con más de 10 millones de discos en todo el mundo y con infinidad de premios, como el Ondas al Artista Revelación y Mejor Álbum, el Amigo como Mejor Solista Español Femenino, o el Disco de Platino Europeo, entre muchos otros.</p>
				<p>Su último álbum de estudio, “En la Memoria de la Piel”, producido por la propia artista, fue lanzado a finales de 2016 de la mano de Warner Music Spain, siendo seleccionado como uno de los diez “Mejores Álbumes Latinos”, por Billboard. Disco que entró directamente al tercer lugar de las listas Afyve en España y que, durante dos semanas, se mantuvo en el número 2 de iTunes, además de lograr más de un millón de reproducciones en menos de un mes con su primer sencillo, “El cielo que me das”, en las listas de Spotify.</p>
				
			</div>
			<div class="col m5 hide-on-small-only">
				<img src="{{ asset('img/rosana-bio.jpg') }}" class="responsive-img">
			</div>
			<div class="clearfix"></div>
			<p>Sitio web Oficial:</p>
			<p><a href="https://www.rosana.net/" target="_blank">https://www.rosana.net/</a></p>
			
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
						<li><i class="medium material-icons">email</i><p><strong>EMAIL</strong>: No disponible</p></li>
						<li><i class="medium material-icons">language</i><p><strong>Website</strong>: <a title="website" href="https://www.facebook.com/RsViajesCentro/" target="_blank">https://www.facebook.com/RsViajesCentro/</a></p></li>
					</ul>
				</div>
			</div>			

		</div>

	</div>
</section>
<section class="section-video overlay overlay-5" style="background-image: url('https://img.youtube.com/vi/ZLYcgnnNXBU/maxresdefault.jpg');">
	<div class="row center-align">
		<a class="white-text" id="modal-video-open" href="#modal-video" data-video="https://www.youtube.com/embed/ZLYcgnnNXBU"><i class="material-icons">play_circle_filled</i></a>
		<p class="white-text"><i>Rosana - Mi trozo de cielo</i></p>
	</div>
</section>

<section id="compra" class="section-comprar">
	<div class="row">
		<div class="col m6 offset-m3 mt-30">
			<h5 class="center-align raleway">Preventa en linea terminada. <br>Venta de boletos exclusivamente en R.S. Viajes Centro</h5>
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
						{!! Form::hidden('lugar', 'Teatro Stella Inda') !!}
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
		<p><b>Teatro Stella Inda</b></p>
		<p><i class="material-icons">location_on</i>Av Francisco I. Madero Pte 1200, Centro Histórico, 58000 Morelia, Mich.</p>
		<p><i class="material-icons">call</i> 01 443 312 2880</p>
		<p><i class="material-icons">email</i> No disponible</p>
		
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
		        var uluru = {lat: 19.7029521, lng: -101.2024255};
		        var map = new google.maps.Map(document.getElementById('map'), {
		          zoom: 17,
		          scrollwheel: false,
		          navigationControl: true,
		          draggable: true,
		          center: {lat: 19.7032521, lng: -101.2018855}
		        });
		        var marker = new google.maps.Marker({
		          position: uluru,
		          map: map
		        });
		      }

		$("#zona").change(function(){
			var id = $(this).val();
			
			if( id == 'Diamante' ){
				$("#precio").val('850');
			}else if( id == 'Oro' ){
				$("#precio").val('650');
			}else{
				$("#precio").val('400');
			}

			$.ajax({
				url: '{{url('/api/getFilas')}}/Rosana/' + id,
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
		});

		$("#fila").change(function(){
			var id = $(this).val();
			$.ajax({
				url: '{{url('/api/getAsientos')}}/Rosana/' + id,
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
	</script>

      <script async defer src="https://maps.googleapis.com/maps/api/js?key=AIzaSyBOOT9N6QdDeq0bnmSb1bw2SKw5CXQmOeA&callback=initMap"></script>
@endsection