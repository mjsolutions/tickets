@extends('layouts.main')

@section('title', 'Felices Los Cuatro Guanajuato')

@section('description', 'Felices Los Cuatro en Guanajuato, 13 de Abril, 10 pm boletos en Sky Bar Terrasse y en bolematico.mx')

@section('styles')
<script src="https://use.fontawesome.com/9b9c9dc667.js"></script>
@endsection

@section('content')

<div class="image-header bg-4 overlay overlay-5">

	<div class="row white-text">
		<h4>Felices Los Cuatro</h4>
		<div class="divider"></div>
		<p><i>Guanajuato - Sky Bar Terrasse</i></p>
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

			{{-- <div class="col s8 offset-s2 m3 mb-30 card-flyer">
				<img src="{{ asset('img/felices_los_cuatro_guanajuato.jpg') }}" alt="" class="responsive-img">
			</div> --}}
			
			<div class="col s12 m8 l5 col-center">				

				<img src="{{ asset('img/aviso_gto.jpg') }}" alt="" class="responsive-img">

			</div>
		</div>

		<div id="biografia" class="col s12 tab-content">
			<div class="col s8 offset-s2 hide-on-med-and-up">
				<img src="{{ asset('img/felices_gira.jpg') }}" class="responsive-img">
			</div>
			<div class="col s12 m7">
				<h4 class="mt-0 raleway quote">BIOGRAFÍA</h4>		
				<p>Felices Los Cuatro.</p>
				<p>Su meta no es ser los mejores comediantes más famosos del mundo, lo que Felices Los Cuatro quiere es conquistar toda los escenarios y llevar su comedia hasta donde pueda llegar.</p>
				<p>Felices los cuatro es un proyecto conformado por: Manu Nna, Alexis de Anda, Fran Hevia y Fabrizio Copano.</p>
				
			</div>
			<div class="col m5 hide-on-small-only">
				<div class="col m6 col-center">
					<img src="{{ asset('img/felices_gira.jpg') }}" class="responsive-img materialboxed">
				</div>
			</div>
			<div class="clearfix"></div>
			
			
		</div>

		<div id="lugares" class="col s12 tab-content">
			<div class="row">
				<h4 class="mt-0 raleway quote">LUGARES DE VENTA</h4>
			</div>
			<div class="row">
				<div class="col s12">
					<h5>Sky Bar Terrasse</h5>
				</div>
				<div class="col s12 m6">									
					<!-- ## VENUE MAP ## -->
					<div class="qcEventlayout">
						<iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d119181.23028647155!2d-101.32346262405922!3d21.016136768304637!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x842b7407e68669e5%3A0x7af73ea2077d255f!2sSKY+BAR+TERRASSE!5e0!3m2!1ses!2smx!4v1521589826641" width="100%" height="320" frameborder="0" style="border:0" allowfullscreen></iframe>
					</div>
				</div>

				<!-- ## ADDRESS LIST ## -->
				<div class="col s12 m6">
					<ul class="qcAddress">
						<li><i class="medium material-icons">location_on</i><p><strong>DIRECCIÓN</strong>: Del Truco 1, Zona Centro, 36000 Guanajuato, Gto.</p></li>
						{{-- <li><i class="medium material-icons">call</i><p><strong>TELÉFONO</strong>: 443 315 9243</p></li> --}}
						<li><i class="medium material-icons">email</i><p><strong>EMAIL</strong>: No disponible</p></li>
						<li><i class="medium material-icons">language</i><p><strong>Website</strong>: <a title="website" href="https://www.facebook.com/TERRASSE.sky.b/" target="_blank">https://www.facebook.com/TERRASSE.sky.b/</a></p></li>
					</ul>
				</div>
			</div>			

		</div>

	</div>
</section>
<section class="section-video overlay overlay-5" style="background-image: url('https://img.youtube.com/vi/L2xWASi_UPg/maxresdefault.jpg');">
	<div class="row center-align">
		<a class="white-text" id="modal-video-open" href="#modal-video" data-video="https://www.youtube.com/embed/L2xWASi_UPg"><i class="material-icons">play_circle_filled</i></a>
		<p class="white-text"><i>Fabrizio Copano II @ #StandupEnComedy</i></p>
	</div>
</section>

<section id="compra" class="section-comprar">

	<div class="row">
		<div class="col m4 offset-m4 mt-30">
			<h5 class="center-align raleway">Venta de boletos en Sky Bar Terrasse Guanajuato</h5>
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
						
						{!! Form::hidden('img', 'img/felices_los_cuatro_guanajuato.jpg') !!}
						{!! Form::hidden('evento', 'Felices Los Cuatro en Guanajuato') !!}
						{!! Form::hidden('fecha', '12 de Abril 2018') !!}
						{!! Form::hidden('lugar', 'Sky Bar Terrasse, Guanajuato') !!}
						{!! Form::hidden('hora', '09:30 pm') !!}
						{!! Form::hidden('precio', '280') !!}
						{!! Form::hidden('event_type', 'general') !!}
						{!! Form::hidden('db_table', 'felices_gto') !!}
						{!! Form::hidden('info', '473 118 9022 / 473 117 3883') !!}
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
		<p><b>Sky Bar Terrasse Guanajuato</b></p>
		<p><i class="material-icons">location_on</i> Del Truco 1, Zona Centro, 36000 Guanajuato, Gto.</p>
		{{-- <p><i class="material-icons">call</i> 473 118 9022 / 473 117 3883</p> --}}
		<p><i class="material-icons">language</i>https://www.facebook.com/TERRASSE.sky.b/</p>
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
		        var uluru = {lat: 21.016163, lng: -101.2534211};
		        var map = new google.maps.Map(document.getElementById('map'), {
		          zoom: 21,
		          scrollwheel: false,
		          navigationControl: true,
		          draggable: true,
		          center: {lat: 21.0161663, lng: -101.2533511}
		        });
		        var marker = new google.maps.Marker({
		          position: uluru,
		          map: map
		        });
		      }


	</script>

      <script async defer src="https://maps.googleapis.com/maps/api/js?key=AIzaSyBOOT9N6QdDeq0bnmSb1bw2SKw5CXQmOeA&callback=initMap"></script>
@endsection