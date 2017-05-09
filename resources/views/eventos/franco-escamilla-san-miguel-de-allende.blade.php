@extends('layouts.main')

@section('title', 'Franco Escamilla San Miguel de Allende')

@section('description', 'Franco Escamilla en San Miguel de Allende, 24 de Junio, 9:30 pm boletos en bolematico.mx')

@section('styles')
<script src="https://use.fontawesome.com/9b9c9dc667.js"></script>
@endsection

@section('content')

<div class="image-header bg-4 overlay overlay-5">

	<div class="row white-text">
		<h4>Franco Escamilla</h4>
		<div class="divider"></div>
		<p><i>San Miguel de Allende - Centro de Convenciones La Casona </i></p>
	</div>
	{{-- <button class="btn waves-light waves-effect red">COMPRAR BOLETOS</button> --}}
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

			<div class="col s8 offset-s2 m3 mb-30">
				<img src="{{ asset('img/franco-sma.jpg') }}" alt="Franco Escamilla" class="responsive-img">
			</div>
			
			<div class="col s12 m8 offset-m1">				

				<<div class="row mt-30">

					<div class="qcPricing col s12 center-align mb-10">
						<div class="box col s12">
							<header>
								<div class="col s12 m8 grey lighten-1">Zona plata</div>
								<div class="col m4 btn-buy nopadding hide-on-small-only"><a href="#compra" class="page-scroll"><b>Comprar</b> <i class="fa fa-paypal" aria-hidden="true"></i></a></div>
							</header>
							<div class="price col s6"><span>$440</span> Por entrada</div>
							<div class="filas col s6">Filas: Y - Z</div>
							<div class="col s12 btn-buy nopadding hide-on-med-and-up"><a href="#compra" class="page-scroll"><b>Comprar</b> <i class="fa fa-paypal" aria-hidden="true"></i></a></div>
						</div>
					</div>
					
					<div class="qcPricing col s12 center-align mb-10">
						<div class="box col s12">
							<header>
								<div class="col s12 m8">Zona oro</div>
								<div class="col m4 btn-buy nopadding hide-on-small-only"><a href="#compra" class="page-scroll"><b>Comprar</b> <i class="fa fa-paypal" aria-hidden="true"></i></a></div>
							</header>
							<div class="price col s6"><span>$540</span> Por entrada</div>
							<div class="filas col s6">Filas: Q - X</div>
							<div class="col s12 btn-buy nopadding hide-on-med-and-up"><a href="#compra" class="page-scroll"><b>Comprar</b> <i class="fa fa-paypal" aria-hidden="true"></i></a></div>
						</div>
					</div>

					<div class="qcPricing col s12 center-align mb-10">
						<div class="box col s12">
							<header>
								<div class="col s12 m8 teal accent-4">Zona diamante</div>
								<div class="col m4 btn-buy nopadding hide-on-small-only"><a href="#compra" class="page-scroll"><b>Comprar</b> <i class="fa fa-paypal" aria-hidden="true"></i></a></div>
							</header>
							<div class="price col s6"><span>$640</span> Por entrada</div>
							<div class="filas col s6">Filas: A - Ñ</div>
							<div class="col s12 btn-buy nopadding hide-on-med-and-up"><a href="#compra" class="page-scroll"><b>Comprar</b> <i class="fa fa-paypal" aria-hidden="true"></i></a></div>
						</div>
					</div>

				</div>

				<div class="row">
					<div class="divider"></div>
					{{-- <p class="center-align mt-30">Al realizar tu compra en línea Payapl realiza un cargo extra de <b>10%</b> por concepto de servicio.</p> --}}
					<p class="center-align">Venta de boletos a partir del <b>08 de Mayo</b> a través de esta página y en el lugar del evento</p>
				</div>
			</div>
		</div>

		<div id="biografia" class="col s12 tab-content">
			<div class="col s8 offset-s2 hide-on-med-and-up">
				<img src="{{ asset('img/franco-bio.jpg') }}" class="responsive-img">
			</div>
			<div class="col s12 m9">
				<h4 class="mt-0 raleway quote">BIOGRAFÍA</h4>		
				<p>Franco Escamilla, mejor conocido como “El Diablo” o “El Amo del Sarcasmo” , nació un 29 de abril de 1981 en Cuautla Morelos, México, es un músico, comediante y locutor.</p>
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
					<h5>Centro de Convenciones La Casona</h5>
				</div>
				<div class="col s12 m6">									
					<!-- ## VENUE MAP ## -->
					<div class="qcEventlayout">
						<iframe src="https://www.google.com/maps/embed?pb=!1m14!1m8!1m3!1d7454.5204055101485!2d-100.74996064323584!3d20.901848587299803!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x0%3A0x3c4020dc828388c9!2sHotel+La+Casona!5e0!3m2!1ses!2smx!4v1494022312806" width="100%" height="320" frameborder="0" style="border:0" allowfullscreen></iframe>
					</div>

				</div>

				<!-- ## ADDRESS LIST ## -->
				<div class="col s12 m6">
					<ul class="qcAddress">
						<li><i class="medium material-icons">location_on</i><p><strong>DIRECCIÓN</strong>: Salida a Celaya77, Centro San Miguel de Allende, Guanajuato</p></li>
						<li><i class="medium material-icons">call</i><p><strong>TELÉFONO</strong>:01 (415) 185 8501 </p></li>
						<li><i class="medium material-icons">email</i><p><strong>EMAIL</strong>: info@casonasanmiguel.com</p></li>
						<li><i class="medium material-icons">language</i><p><strong>Website</strong>: <a title="website" href="http://lacasonasanmiguel.com/" target="_blank">http://lacasonasanmiguel.com/</a></p></li>
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
	{{-- <h5 class="mt-50 center-align raleway">Venta de boletos a partir del <b>08 de Mayo</b> a través de esta página y en el Centro de Convenciones La Casona</h5>
	<div class="row">
		<div class="col s6 offset-s3 mt-30">
			<div class="divider"></div>
		</div>
	</div>
	<p class="center-align">Si tienes alguna duda sobre este evento no dudes en contactarnos</p>
	<div class="row center-align">
		<a href="{{ route('contacto') }}" class="btn waves-light waves-effect green center-align ls-1">CONTACTO</a>
	</div> --}}
	<div class="row">
		<div class="col s12 m6" style="position: relative;">
			<img src="{{asset('img/sma.jpg')}}" alt="Teatro Morelos" class="responsive-img">
			<div class="zoom-sma" id="search-sma-diamante" data-img="{{ asset('img/sma-diamante.jpg') }}"></div>
			<div class="zoom-sma" id="search-sma-oro" data-img="{{ asset('img/sma-oro.jpg')}}"></div>
			<div class="zoom-sma" id="search-sma-plata" data-img="{{ asset('img/sma-plata.jpg')}}"></div>
		</div>
		<div class="col s12 m6">
			@if(Auth()->check())
				<h5 class="quote raleway">Seleccione sus boletos</h5>
				{!! Form::open(['route'=>'payment.franco6', 'method'=>'POST']) !!}
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
					<p class="center-align"><i>* Solo puedes seleccionar un maximo de 10 boletos</i></p>

					<div class="row">
					
						<div class="input-field center-align">
							{!! Form::submit('Comprar',['class'=>'btn waves-effect waves-light  orange accent-3']) !!}
						</div>	
					
					</div>
						
				{!! Form::close() !!}
			@else
				<p class="center-align raleway">Debes iniciar sesion para poder realizar la compra</p>
				<div class="col s6 m4 col-center">
					<a href="#modal-login" class="modal-login-open btn btn-block waves-light orange accent-3">Login</a>
				</div>
			@endif
		</div>
	</div>
</section>

<section class="section-lugar">
	<div id="map"></div>
	
	<div class="info-lugar">
		<h5 class="raleway quote mb-15">Lugar del evento</h5>
		<div class="divider mb-15"></div>
		<p><b>Centro de Convenciones La Casona</b></p>
		<p><i class="material-icons">location_on</i>Salida a Celaya77, Centro San Miguel de Allende, Guanajuato</p>
		<p><i class="material-icons">call</i> 01 (415) 185 8501</p>
		<p><i class="material-icons">email</i> info@casonasanmiguel.com</p>
		<p><i class="material-icons">language</i> <a title="website" href="http://lacasonasanmiguel.com//" target="_blank">lacasonasanmiguel.com/</a></p>
	</div>
</section>

<div id="modal-video" class="modal modal-large">
	<a href="#!" class="modal-close btn-flat"><i class="material-icons white-text">close</i></a>
	<div class="modal-content black no-padding">
		<iframe id="iframe" width="100%" height="420" src="" frameborder="0" allowfullscreen></iframe>
	</div>
</div>

<div id="modal-diamante" class="modal modal-large">
	<a href="#!" class="modal-close btn-flat"><i class="material-icons white-text">close</i></a>
	<div class="modal-content black no-padding">
		<img src="" class="responsive-img">
	</div>
</div>

@endsection

@section('scripts')
	<script>
	// $("#modal-diamante").leanModal();
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
		        var uluru = {lat: 20.902110, lng: -100.750732};
		        var map = new google.maps.Map(document.getElementById('map'), {
		          zoom: 16,
		          scrollwheel: false,
		          navigationControl: true,
		          draggable: true,
		          center: {lat: 20.902110, lng: -100.748032}
		        });
		        var marker = new google.maps.Marker({
		          position: uluru,
		          map: map
		        });
		      }

		$(".zoom-sma").click(function(){
			var img = $(this).attr('data-img');
			$("#modal-diamante img").attr('src', img);
			$("#modal-diamante").openModal();
		});
	</script>

      <script async defer src="https://maps.googleapis.com/maps/api/js?key=AIzaSyBOOT9N6QdDeq0bnmSb1bw2SKw5CXQmOeA&callback=initMap"></script>
@endsection