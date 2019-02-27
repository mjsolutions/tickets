@extends('layouts.main')

@section('title', 'Alan Saldaña Matehuala S.L.P.')

@section('description', 'Alan Saldaña en Matehuala S.L.P., 31 de Enero, 10 pm boletos en Las Chulas Shoperia y en bolematico.mx')

@section('styles')
<script src="https://use.fontawesome.com/9b9c9dc667.js"></script>
@endsection

@section('content')

<div class="image-header bg-4 overlay overlay-5">

	<div class="row white-text">
		<h4>Alan Saldaña</h4>
		<div class="divider"></div>
		<p><i>Matehuala S.L.P. - Las Chulas Shoperia</i></p>
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
			<div class="col s12 mb-30">
				<h4 class="mt-0 raleway quote">PRECIOS</h4>
				{{-- <div class="divider"></div> --}}
			</div>

			<div class="col s8 offset-s2 m4 offset-m1 mb-30">
				<img src="{{ asset('img/alan_matehuala.jpg') }}" alt="" class="responsive-img">
			</div>
			
			<div class="col s12 m5 offset-m1">				

				<div class="row">

					<div class="qcPricing col s12 center-align mb-10">
						<div class="box col s12">
							<header>
								<div class="col s12 m8 teal accent-4">General</div>
								<div class="col m4 btn-buy nopadding hide-on-small-only"><a href="#compra" class="page-scroll"><b>Comprar</b> <i class="fa fa-ticket" aria-hidden="true"></i></a></div>
							</header>
							<div class="price col s12"><span>$320</span> Por entrada</div>
							<div class="col s12 btn-buy nopadding hide-on-med-and-up"><a href="#compra" class="page-scroll"><b>Comprar</b> <i class="fa fa-ticket" aria-hidden="true"></i></a></div>
						</div>
					</div>

				</div>

				<div class="row">
					<div class="divider"></div>
					<p class="center-align mt-30">Al realizar tu compra en línea se realiza un cargo extra por concepto de servicio.</p>
					<p class="center-align"><b>Informes:</b> <a href="tel:4888827943" style="background: #4caf50; color: #fff; padding: 5px 10px;"> (488) 8827943</a> / <a href="tel:4881208718" style="background: #4caf50; color: #fff; padding: 5px 10px;"> (488) 1208718</a></p>
				</div>
			</div>
		</div>

		<div id="biografia" class="col s12 tab-content">
			<div class="col s12 mb-30">
				<h4 class="mt-0 raleway quote">BIOGRAFÍA</h4>
			</div>
			<div class="col s8 offset-s2 hide-on-med-and-up">
				<img src="{{ asset('img/alan-bio.jpg') }}" class="responsive-img">
			</div>
			<div class="col s12 m7">		
				<p>Alan Saldaña, el AS de la comedia.</p>
				<p>Joven y con un gran ángel y talento. Es una comedia sumamente divertida. A pesar de tener relativamente pocos años en la comedia, Alan ha cautivado y sorprendido a todo el público con sus originales monólogos y rutinas. Una verdadera inversión que provoca grandes carcajadas a todos.</p>
				<p>Su meta no es ser el comediante más famoso del mundo, lo que Alan Saldaña quiere es conquistar toda Latinoamérica y llevar su comedia hasta donde pueda llegar, a escenarios donde tenga que poner a prueba su talento.</p>				
			</div>
			<div class="col m5 hide-on-small-only">
				<img src="{{ asset('img/alan-bio.jpg') }}" class="responsive-img">
			</div>			
		</div>

		<div id="lugares" class="col s12 tab-content">
			<div class="col s12 mb-30">
				<h4 class="mt-0 raleway quote">LUGARES DE VENTA</h4>
			</div>
			<div class="col s12">

				<div class="col s12">									
					<!-- ## VENUE MAP ## -->
					<div class="white z-depth-2">
						<iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d116940.73370426867!2d-100.71506857401447!3d23.66172346324034!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x8680a99460044d9d%3A0x68c22a1307701ef1!2sLas+Chulas+Shoperia!5e0!3m2!1ses!2smx!4v1520402532091" width="100%" height="450" frameborder="0" style="border:0" allowfullscreen></iframe>
					
					<!-- ## ADDRESS LIST ## -->
						<div class=" p-30">
							<h5><b>Las Chulas Shoperia</b></h5>
							<ul class="qcAddress">
								<li><i class="medium material-icons">location_on</i><p><strong>DIRECCIÓN</strong>: San Francisco 201-C, Guadalupe, 78786 Matehuala, S.L.P.</p></li>
								<li><i class="medium material-icons">email</i><p><strong>EMAIL</strong>: No disponible</p></li>
								<li><i class="medium material-icons">language</i><p><strong>Website</strong>: <a title="website" href="https://www.facebook.com/wannabeer.loungebar/" target="_blank">https://www.facebook.com/wannabeer.loungebar/</a></p></li>
							</ul>
						</div>
					</div>

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
	
	<div class="row mb-30">
		<div class="col s12 m4 offset-m4">
			<h5 class="mt-30 raleway quote">Selecciona los lugares para tu evento.</h5>
		</div>
	</div>

	<div class="row mb-30">
		@if(Auth()->check())
		<div class="col s12 m4 offset-m4">
				
			{!! Form::open(['route' => 'payment.details', 'method' => 'POST', 'id' => 'paymentForm'])!!}
		
			<div class="row">
				<div class="input-field col s12">
					{!! Form::select('asiento', ['1' => '1', '2' => '2', '3' => '3', '4' => '4', '5' => '5', '6' => '6', '7' => '7', '8' => '8', '9' => '9', '10' => '10'], '', ['class' => 'select-dropdown', 'id' => 'asiento', 'placeholder' => 'Seleccione numero de asientos', 'required']) !!}
					{!! Form::label('asiento', 'Asientos') !!}
				</div>					
			
			</div>
		
			{!! Form::hidden('img', 'img/alan_matehuala.jpg') !!}
			{!! Form::hidden('evento', 'Alan Saldaña') !!}
			{!! Form::hidden('fecha', '31 de enero 2019') !!}
			{!! Form::hidden('lugar', 'Las Chulas Shoperia') !!}
			{!! Form::hidden('ciudad', 'Matehuala S.L.P.') !!}
			{!! Form::hidden('hora', '20:00 hrs') !!}
			{!! Form::hidden('event_type', 'general') !!}
			{!! Form::hidden('impresion_boleto', false) !!}
			{!! Form::hidden('zona', 'General') !!}
			{!! Form::hidden('db_table', 'alan_saldana_slp_31ene') !!}
			{!! Form::hidden('info', 'Favor de comunicarte al numero (488) 8827943 o al cel: (488) 1208718 para reservar tu lugar.') !!}
			{!! Form::hidden('precio', '320') !!}
			{!! Form::hidden('url', url('eventos/alan-saldana-matehuala')) !!}
			
			<div class="input-field center-align">
				{!! Form::submit('Siguiente',['class'=>'btn waves-effect waves-light orange accent-3']) !!}
			</div>	
			
			{!! Form::close() !!}
			
		</div>
		<div class="clearfix"></div>
		@else
		<p class="center-align raleway">Debes iniciar sesión para poder realizar la compra</p>
		<div class="col s12 m4 offset-m4 center-align">
			<a href="#modal-login" class="modal-login-open btn waves-light orange accent-3">Login</a>
		</div>
		@endif
		<div class="col s12 m4 offset-m4 mt-30">
			<p>
				<i>* Puedes seleccionar un máximo de 10 lugares.</i><br>
				<i>* Se cobrara un cargo adicional por concepto de servicio.</i>
			</p>
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
		<p><b>Las Chulas Shoperia Matehuala S.L.P.</b></p>
		<p><i class="material-icons">location_on</i> San Francisco 201-C, Guadalupe, 78786 Matehuala, S.L.P.</p>
		<p><i class="material-icons">language</i>https://www.facebook.com/wannabeer.loungebar/</p>
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
		        var uluru = {lat: 23.661832, lng: -100.6450155};
		        var map = new google.maps.Map(document.getElementById('map'), {
		          zoom: 16,
		          scrollwheel: false,
		          navigationControl: true,
		          draggable: true,
		          center: {lat: 23.661832, lng: -100.6438655}
		        });
		        var marker = new google.maps.Marker({
		          position: uluru,
		          map: map
		        });
		      }


	</script>

      <script async defer src="https://maps.googleapis.com/maps/api/js?key=AIzaSyBOOT9N6QdDeq0bnmSb1bw2SKw5CXQmOeA&callback=initMap"></script>
@endsection