@extends('layouts.main')

@section('title', 'Alan Saldaña Ciudad del Carmen ')

@section('description', 'Alan Saldaña en Ciudad del Carmen , 16 de Marzo, 10 pm boletos en Barezzito y en bolematico.mx')

@section('styles')
<script src="https://use.fontawesome.com/9b9c9dc667.js"></script>
@endsection

@section('content')

<div class="image-header bg-4 overlay overlay-5">

	<div class="row white-text">
		<h4>Alan Saldaña</h4>
		<div class="divider"></div>
		<p><i>Ciudad del Carmen  - Barezzito</i></p>
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

			<div class="col s8 offset-s2 m3 mb-30 card-flyer">
				<img src="{{ asset('img/alan_cdcarmen.jpg') }}" alt="" class="responsive-img">
			</div>
			
			<div class="col s12 m8 offset-m1">				

				<div class="row mt-30">

					<div class="qcPricing col s12 center-align mb-10">
						<div class="box col s12 card-flyer">
							<header>
								<div class="col s12 m8 teal accent-4">Zona General</div>
								<div class="col m4 btn-buy nopadding hide-on-small-only"><a href="#compra" class="page-scroll"><b>Comprar</b> <i class="fa fa-ticket" aria-hidden="true"></i></a></div>
							</header>
							<div class="price col s12"><span>$250</span> Por entrada</div>
							{{-- <div class="filas col s6">Filas: A - Ñ</div> --}}
							<div class="col s12 btn-buy nopadding hide-on-med-and-up"><a href="#compra" class="page-scroll"><b>Comprar</b> <i class="fa fa-ticket" aria-hidden="true"></i></a></div>
						</div>
					</div>

				</div>

				<div class="row">
					<div class="divider"></div>
					{{-- <p class="center-align mt-30">Al realizar tu compra en línea se realiza un cargo extra de <b>10%</b> por concepto de servicio.</p> --}}
					<p class="center-align"><b>Informes:</b> <a href="tel:9381112670" style="background: #4caf50; color: #fff; padding: 5px 10px;">938 111 2670</a> / <a href="tel:9381393227" style="background: #4caf50; color: #fff; padding: 5px 10px;">938 139 3227</a></p>
				</div>
			</div>
		</div>

		<div id="biografia" class="col s12 tab-content">
			<div class="col s8 offset-s2 hide-on-med-and-up">
				<img src="{{ asset('img/alan-bio.jpg') }}" class="responsive-img">
			</div>
			<div class="col s12 m7">
				<h4 class="mt-0 raleway quote">BIOGRAFÍA</h4>		
				<p>Alan Saldaña, el AS de la comedia.</p>
				<p>Joven y con un gran ángel y talento. Es una comedia sumamente divertida. A pesar de tener relativamente pocos años en la comedia, Alan ha cautivado y sorprendido a todo el público con sus originales monólogos y rutinas. Una verdadera inversión que provoca grandes carcajadas a todos.</p>
				<p>Su meta no es ser el comediante más famoso del mundo, lo que Alan Saldaña quiere es conquistar toda Latinoamérica y llevar su comedia hasta donde pueda llegar, a escenarios donde tenga que poner a prueba su talento.</p>
				
			</div>
			<div class="col m5 hide-on-small-only">
				<img src="{{ asset('img/alan-bio.jpg') }}" class="responsive-img">
			</div>
			<div class="clearfix"></div>
			
			
		</div>

		<div id="lugares" class="col s12 tab-content">
			<div class="row">
				<h4 class="mt-0 raleway quote">LUGARES DE VENTA</h4>
			</div>
			<div class="row">
				<div class="col s12">
					<h5>Barezzito</h5>
				</div>
				<div class="col s12 m6">									
					<!-- ## VENUE MAP ## -->
					<div class="qcEventlayout">
						<iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d10692.296325186377!2d-91.81301516629037!3d18.650635999754062!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x0%3A0x8aeb18cc66d128a!2sBarezzito+Cd.+Del+Carmen!5e0!3m2!1ses!2smx!4v1520410804789" width="100%" height="320" frameborder="0" style="border:0" allowfullscreen></iframe>
					</div>
				</div>

				<!-- ## ADDRESS LIST ## -->
				<div class="col s12 m6">
					<ul class="qcAddress">
						<li><i class="medium material-icons">location_on</i><p><strong>DIRECCIÓN</strong>: Av Periferica Nte 52, Asa Poniente, 24197 Cd del Carmen, Camp.</p></li>
						{{-- <li><i class="medium material-icons">call</i><p><strong>TELÉFONO</strong>: 443 315 9243</p></li> --}}
						<li><i class="medium material-icons">email</i><p><strong>EMAIL</strong>: No disponible</p></li>
						<li><i class="medium material-icons">language</i><p><strong>Website</strong>: <a title="website" href="https://www.facebook.com/bzzcddelcarmen/" target="_blank">https://www.facebook.com/bzzcddelcarmen/</a></p></li>
					</ul>
				</div>
			</div>			

		</div>

	</div>
</section>
<section class="section-video overlay overlay-5" style="background-image: url('https://img.youtube.com/vi/fRteWKkANJI/maxresdefault.jpg');">
	<div class="row center-align">
		<a class="white-text" id="modal-video-open" href="#modal-video" data-video="https://www.youtube.com/embed/fRteWKkANJI"><i class="material-icons">play_circle_filled</i></a>
		<p class="white-text"><i>Alan Saldaña / Soy bien observador...</i></p>
	</div>
</section>

<section id="compra" class="section-comprar">

	<div class="row">
		<div class="col m4 offset-m4 mt-30">
			<h5 class="center-align raleway">Venta de boletos en Barezzito Ciudad del Carmen .</h5>
		</div>
		{{-- <div class="col m5 offset-m1 mt-30">
			@if(Auth()->check())
				{!! Form::open(['route'=>'payment.details', 'method'=>'POST']) !!}
					<div class="row">
						<h5 class="quote">Zona General</h5>
						<div class="input-field col s12">
							{!! Form::select('asientos',
								['1' => '1', 
								'2' => '2', 
								'3' => '3', 
								'4' => '4', 
								'5' => '5', 
								'6' => '6', 
								'7' => '7', 
								'8' => '8', 
								'9' => '9', 
								'10' => '10'], '', ['class' => 'select-dropdown', 'id' => 'zona', 'placeholder' => 'Seleccione numero de asientos', 'required']) !!}
							{!! Form::label('asientos', 'Asientos') !!}
						</div>
						
						{!! Form::hidden('img', 'img/alan-16.jpeg') !!}
						{!! Form::hidden('evento', 'Alan Saldaña en Ciudad del Carmen ') !!}
						{!! Form::hidden('fecha', '16 de Marzo 2018') !!}
						{!! Form::hidden('lugar', 'Barezzito, Ciudad del Carmen ') !!}
						{!! Form::hidden('hora', '9:00 pm') !!}
						{!! Form::hidden('precio', '300') !!}
						{!! Form::hidden('event_type', 'general') !!}
						{!! Form::hidden('db_table', 'alan_16') !!}
						{!! Form::hidden('seccion', '') !!}
						{!! Form::hidden('fila', '') !!}

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
		<p><b>Barezzito Ciudad del Carmen </b></p>
		<p><i class="material-icons">location_on</i> Av Periferica Nte 52, Asa Poniente, 24197 Cd del Carmen, Camp.</p>
		{{-- <p><i class="material-icons">call</i> 473 118 9022 / 473 117 3883</p> --}}
		<p><i class="material-icons">language</i>https://www.facebook.com/bzzcddelcarmen/</p>
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
		        var uluru = {lat: 18.6519856, lng: -91.81488};
		        var map = new google.maps.Map(document.getElementById('map'), {
		          zoom: 18,
		          scrollwheel: false,
		          navigationControl: true,
		          draggable: true,
		          center: {lat: 18.6519856, lng: -91.81388}
		        });
		        var marker = new google.maps.Marker({
		          position: uluru,
		          map: map
		        });
		      }


	</script>

      <script async defer src="https://maps.googleapis.com/maps/api/js?key=AIzaSyBOOT9N6QdDeq0bnmSb1bw2SKw5CXQmOeA&callback=initMap"></script>
@endsection