@extends('layouts.main')

@section('title', 'Fernando Delgadillo y Edgar Oceransky')

@section('description', 'Fernando Delgadillo y Edgar Oceransky, Aguascalientes Auditorio DIMO 10 de Marzo 2018, 9 pm')

@section('styles')
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

<div class="image-header bg-4 overlay overlay-5">

	<div class="row white-text">
		<h4>Fernando Delgadillo / Edgar Oceransky</h4>
		<div class="divider"></div>
		<p><i>Aguascalientes - Auditorio DIMO </i></p>
	</div>
	{{-- <a href="#compra" class="btn waves-light waves-effect page-scroll"><b>Comprar</b> <i class="fa fa-paypal" aria-hidden="true"></i></a> --}}
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

			<div class="col s8 offset-s2 m4 mb-30 card-flyer">
				<img src="{{ asset('img/delgadillo-oceransky.jpeg') }}" alt="Oceransky-Delgadillo" class="responsive-img">
			</div>
			
			<div class="col s12 m8 ">				

				<div class="row">
					<div class="qcPricing col s12 center-align mb-10">
						<div class="box col s12 card-flyer">
							<header>
								<div class="col s12 m8 teal accent-4">VIP</div>
								<div class="col m4 btn-buy nopadding hide-on-small-only"><a href="#compra" class="page-scroll"><b>Comprar</b> <i class="fa fa-ticket" aria-hidden="true"></i></a></div>
							</header>
							<div class="price col s6"><span>$740</span> Por entrada</div>
							<div class="filas col s6">Zona: Diamante</div>
							<div class="col s12 btn-buy nopadding hide-on-med-and-up"><a href="#compra" class="page-scroll"><b>Comprar</b> <i class="fa fa-ticket" aria-hidden="true"></i></a></div>
						</div>
					</div>

					<div class="qcPricing col s12 center-align mb-10">
						<div class="box col s12 card-flyer">
							<header>
								<div class="col s12 m8 amber accent-4">Preferente</div>
								<div class="col m4 btn-buy nopadding hide-on-small-only"><a href="#compra" class="page-scroll"><b>Comprar</b> <i class="fa fa-ticket" aria-hidden="true"></i></a></div>
							</header>
							<div class="price col s6"><span>$580</span> Por entrada</div>
							<div class="filas col s6">Zonas: Plata, Oro "A" y "B"</div>
							<div class="col s12 btn-buy nopadding hide-on-med-and-up"><a href="#compra" class="page-scroll"><b>Comprar</b> <i class="fa fa-ticket" aria-hidden="true"></i></a></div>
						</div>
					</div>

					<div class="qcPricing col s12 center-align mb-10">
						<div class="box col s12 card-flyer">
							<header>
								<div class="col s12 m8 lime darken-3">General</div>
								<div class="col m4 btn-buy nopadding hide-on-small-only"><a href="#compra" class="page-scroll"><b>Comprar</b> <i class="fa fa-ticket" aria-hidden="true"></i></a></div>
							</header>
							<div class="price col s6"><span>$320</span> Por entrada</div>
							<div class="filas col s6">Zona: Bronce</div>
							<div class="col s12 btn-buy nopadding hide-on-med-and-up"><a href="#compra" class="page-scroll"><b>Comprar</b> <i class="fa fa-ticket" aria-hidden="true"></i></a></div>
						</div>
					</div>

				</div>

				<div class="row">
					<div class="divider"></div>
					<p class="center-align mt-30">Al realizar tu compra en línea se realiza un cargo extra de <b>10%</b> por concepto de servicio.</p>
					<p class="center-align"><b>Informes:</b> <a href="tel:9157353" style="background: #4caf50; color: #fff; padding: 5px 10px;">915 73 53</a></p>
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
			
			<div class="col s8 offset-s2 m2 offset-m5 mb-50 mt-30 center-align">
				<i class="fa fa-ravelry" aria-hidden="true"></i>
			</div>

			<div class="clearfix"></div>

			<div class="col s8 offset-s2 m4">
				<img src="{{ asset('img/oceransky-bio.jpg') }}" class="responsive-img materialboxed">
				<div class="flex">
					<a href="https://www.facebook.com/eoceransky" target="_blank"><i class="fa fa-facebook" aria-hidden="true"></i></a>
					<a href="https://twitter.com/edgaroceransky" target="_blank"><i class="fa fa-twitter" aria-hidden="true"></i></a>
					<a href="https://www.youtube.com/channel/UCixWXqd8__yJm6exFnFb2Ig" target="_blank"><i class="fa fa-youtube" aria-hidden="true"></i></a>
				</div>
			</div>
			<div class="col s12 m8">
				<h5 class="mt-0">Edgar Oceransky</h5>
				<p>Cantautor nacido en la Ciudad de México en el año de 1975. Inicia su carrera artística en 1993. En el 2000 participa con Mario Domm como co-productor y arreglista en el disco “Títeres de tu” del poeta mexicano Edel Juárez e incluye su canción “La recuerdo así”</p>
				<p>Ha compartido escenario con grandes de la música como Tania Libertad, Hernaldo Zuñiga , Ismael Serrano, Pedro Guerra, Santiago Cruz, Francisco Céspedes, Alberto Plaza, José Cantoral, Armando Manzanero, Franco de Vita, Rossana, Alberto Cortés Y Reyli éste último lo tuvo como invitado especial en su concierto del Auditorio Nacional en noviembre del 2007. Debido al éxito logrado en Costa Rica en 2009 graba en ese país un concierto en DVD, invitando importantes artistas como Bernardo Quesada y Master Key de ese país y Perrozomppopo de Nicaragua en México y Estados Unidos su canción “Obra Maestra” con la Banda Pequeños Musical sonó por varias semanas en la radio.</p>
				<p>Teniendo claro que la música no solo es una pasión si no su modo de vida, en ese mismo año arriesga todo y presenta, con el apoyo de la Comisión de Cultura de la H. Cámara de Diputados, CONACULTA, Secretaría de Turismo del Estado de Querétaro , el festival más grande habla hispana llamado “Trovafest” el cual ha reunido a más de 100 cantautores de diferentes nacionalidades contando en su última edición (2016) con una semana completa de conciertos, tres escenarios y una afluencia de miles de personas de varios países convirtiendo a dicha ciudad en “La capital de la Trova”.</p>
				<p>Actualmente se encuentra de gira la cual lo ha llevado a países como Guatemala, Suiza, Munich, Estados Unidos, Perú, Costa Rica, España, en la cual ha tenido gran aceptación y también en varias ciudades de la Republica Mexicana donde se ha presentado más de 2 ocasiones en el Lunario de la Ciudad de México con llenos totales.</p>
			</div>
			<div class="clearfix"></div>
			<p>Sitio web Oficial: <a href="http://edgaroceransky.com/" target="_blank">http://edgaroceransky.com/</a></p>
		</div>

		<div id="lugares" class="col s12 tab-content">
			<div class="row">
				<h4 class="mt-0 raleway quote">LUGARES DE VENTA</h4>
			</div>
			<div class="row">
				<div class="col s12">
					<h5>Auditorio DIMOo</h5>
				</div>
				<div class="col s12 m6">									
					<!-- ## VENUE MAP ## -->
					<div class="qcEventlayout">
						<iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d118479.16354343237!2d-102.37271940837408!3d21.877821196650356!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x8429ee87056bf30d%3A0x9df7622fdfa4c800!2sAuditorio+DIMO!5e0!3m2!1ses!2smx!4v1516883798546" width="100%" height="320" frameborder="0" style="border:0" allowfullscreen></iframe>
					</div>

				</div>

				<!-- ## ADDRESS LIST ## -->
				<div class="col s12 m6">
					<ul class="qcAddress">
						<li><i class="medium material-icons">location_on</i><p><strong>DIRECCIÓN</strong>: Profr. A. Topete del Valle 108, Barrio de San Marcos, 20070 Aguascalientes, Ags.</p></li>
						<li><i class="medium material-icons">call</i><p><strong>TELÉFONO</strong>: 915 73 53</p></li>
						<li><i class="medium material-icons">email</i><p><strong>EMAIL</strong>: No disponible</p></li>
						<li><i class="medium material-icons">language</i><p><strong>Website</strong>: <a title="website" href="https://www.facebook.com/auditoriodimo/" target="_blank">https://www.facebook.com/auditoriodimo/</a></p></li>
					</ul>
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
	<div class="row">
		{{-- <div class="col s12 m6">
			<img src="{{asset('img/teatro-morelos3.svg')}}" alt="Teatro Morelos" class="responsive-img materialboxed">
		</div> --}}
		{{-- <div class="col s12 m6">
			@if(Auth()->check())
				<p class="center-align"><i>* Solo puedes seleccionar un maximo de 10 boletos</i></p>
				{!! Form::open(['route'=>'payment.deloce', 'method'=>'POST']) !!}
					<div class="row">

						<div class="input-field col s12">
							{!! Form::select('zona', ['Diamante' => 'Diamante', 'Platino' => 'Platino', 'Oro' => 'Oro', 'Plata' => 'Plata'], '', ['class' => 'select-dropdown', 'required', 'id' => 'zona', 'placeholder' => 'Seleccione una zona']) !!}
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
							{!! Form::submit('Comprar',['class'=>'btn waves-effect waves-light orange accent-3']) !!}
						</div>	
					
					</div>
						
				{!! Form::close() !!}
			@else
				<p class="center-align raleway">Debes iniciar sesion para poder realizar la compra</p>
				<div class="col s6 m3 col-center">
					<a href="#modal-login" class="modal-login-open btn btn-block waves-light orange accent-3">Login</a>
				</div>
			@endif
		</div> --}}
		<div class="col m4 offset-m4">
			<h5 class="mt-50 center-align raleway">Venta de boletos en Auditorio DIMO</h5>
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
		<p><b>Auditorio DIMO</b></p>
		<p><i class="material-icons">location_on</i>Profr. A. Topete del Valle 108, Barrio de San Marcos, 20070 Aguascalientes, Ags.</p>
		<p><i class="material-icons">call</i> 915 73 53</p>
		<p><a title="website" href="https://www.facebook.com/auditoriodimo/" target="_blank">https://www.facebook.com/auditoriodimo/</a></p>
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
		        var uluru = {lat: 21.8778323, lng: -102.3026678};
		        var map = new google.maps.Map(document.getElementById('map'), {
		          zoom: 15,
		          scrollwheel: false,
		          navigationControl: true,
		          draggable: true,
		          center: {lat: 21.8778323, lng: -102.3010558}
		        });
		        var marker = new google.maps.Marker({
		          position: uluru,
		          map: map
		        });
		      }

		$("#zona").change(function(){
			var id = $(this).val();
			$.ajax({
				url: '{{url('/api/getFilas')}}/Deloce/' + id,
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
				url: '{{url('/api/getAsientos')}}/Deloce/' + id,
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