@extends('layouts.main')

@section('title', 'Carlos Carreira')

@section('description', 'Carlos Carreira, Querétaro 10 de mayo, El Portón de Santiago, 21:00 hrs boletos en El Portón de Santiago y bolematico.com')

@section('styles')
<meta property="og:url"  content="http://bolematico.mx/eventos/carlos-carreira-queretaro" />
<meta property="og:title" content="Carlos Carreira" />
<meta property="og:description" content="Carlos Carreira, Querétaro 10 de mayo, El Portón de Santiago, 21:00 hrs boletos en El Portón de Santiago y bolematico.com" />
<meta property="og:image" content="http://bolematico.mx/img/carlos-carreira-queretaro.jpg" />

<script src="https://use.fontawesome.com/9b9c9dc667.js"></script>
@endsection

@section('content')

<div class="image-header bg-4 overlay overlay-5">

	<div class="row white-text">
		<h4>Carlos Carreira</h4>
		<div class="divider"></div>
		<p class="mb-0"><i>El Portón de Santiago - Querétaro</i></p>
		<p class="m-0"><i>10 de mayo - 21:00 hrs.</i></p>
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

			<div class="col s10 offset-s1 m4 offset-m1 mb-30 card-flyer">
				<img src="{{ asset('img/carlos-carreira-queretaro.jpg') }}" alt="" class="responsive-img">
			</div>
			
			<div class="col s12 m6 offset-m1">				

				<div class="row">

					<div class="qcPricing col s12 center-align mb-10">
						<div class="box col s12">
							<header>
								<div class="col s12 teal accent-4">Dimante</div>
							</header>
							<div class="price col s12"><span>$200</span> MXN</div>
						</div>
					</div>

					<div class="qcPricing col s12 center-align mb-10">
						<div class="box col s12">
							<header>
								<div class="col s12 grey lighten-1">Plata</div>
							</header>
							<div class="price col s12"><span>$170</span> MXN</div>
						</div>
					</div>

				</div>

				<div class="row">
					<div class="divider"></div>
					<div class="col s10 offset-s1 m8 offset-m2">
						<p>* Al realizar tu compra en línea se realiza un cargo extra de <b>10%</b> por concepto de servicio.</p>
						<p> * Informes y confirmación de tu compra: <br> <a href="tel:4427400671" style="background: #4caf50; color: #fff; padding: 5px 10px;">442-740-0671</a></p>
					</div>
				</div>
			</div>
		</div>

		<div id="detalles" class="col s12 tab-content">
			<div class="col s8 offset-s2 hide-on-med-and-up">
				<img src="{{ asset('img/carlos-carreira-bio.jpg') }}" class="responsive-img">
			</div>
			<div class="col s12 m7">
				<p><strong>Carlos Carreira</strong> es un equilibrista de emociones que sabe convertir en canciones la vida cotidiana. Su sensibilidad para traducir y convertir lo sencillo en poesía pura lo hacen el plato fuerte de cualquier noche romántica y bohemia.<br>Carlos es un motor de sensaciones, es la voz del olvido, el grito de muchos recuerdos, es el amor que sale por cada poro de su piel y la madera de su instrumento. Sus manos y su canto son la mezcla perfecta para una noche llena de sentimiento. En abril de este 2018 lanza "Materia Prima" el primer single de su nuevo disco que tendrá muchas sorpresas.</p>
				<p>Sitio Oficial: <a href="http://carloscarreira.com/" target="_blank">carloscarreira.com</a></p>
				
			</div>
			<div class="col m5 hide-on-small-only">
				<img src="{{ asset('img/carlos-carreira-bio.jpg') }}" class="responsive-img">
			</div>

		</div>

		<div id="lugares" class="col s12 tab-content">

			<div class="col s12">
				<h5 class="mb-30 quote">Además de Bolematico, puedes adquirir tus entradas en:</h5>
			</div>

			<div class="col s12">									
				<!-- ## VENUE MAP ## -->
				<div class="white z-depth-2">
					<iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3734.799498426775!2d-100.39395018559972!3d20.596244107779615!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x85d35b2975a8d68f%3A0xdf13453c0e244eca!2sEl+Porton+de+Santiago!5e0!3m2!1ses!2smx!4v1550796654851" width="100%" height="450" frameborder="0" style="border:0" allowfullscreen></iframe>
				
				<!-- ## ADDRESS LIST ## -->
					<div class=" p-30">
						<h5 class="raleway"><b>El Portón de Santiago</b></h5>
						<ul class="qcAddress">
							<li><div class="divider"></div></li>
							<li><i class="fa fa-map-marker"></i> <p> Av. Prol. Luis Pasteur 37, Centro, 76000 Santiago de Querétaro, Qro.</p></li>
							<li><i class="fa fa-phone"></i><p> 01 442 688 9491</p></li>
							<li><i class="fa fa-facebook-official"></i><p><a title="website" href="https://www.facebook.com/ElPortondeSantiago/" target="_blank">https://www.facebook.com/ElPortondeSantiago/</a></p></li>
						</ul>
					</div>
				</div>

			</div>	

		</div>

	</div>
</section>
<section class="section-video overlay overlay-5" style="background-image: url('https://img.youtube.com/vi/wL1HMIMRoNY/maxresdefault.jpg');">
	<div class="row center-align">
		<a class="white-text" id="modal-video-open" href="#modal-video" data-video="https://www.youtube.com/embed/wL1HMIMRoNY"><i class="material-icons">play_circle_filled</i></a>
		<p class="white-text"><i>Carlos Carreira - Juré</i></p>
	</div>
</section>

<section id="compra" class="section-comprar">
	<div class="row mb-30">
		<div class="col s12 m4 offset-m4">
			<h5 class="mt-30 raleway quote">Selecciona los lugares para tu evento. <br><small>(Zona Diamante)</small></h5>
		</div>
	</div>
	<div class="row mt-30">
	@if(Auth()->check())
	<div class="col s12 m4 offset-m4">
				
		{!! Form::open(['route' => 'payment.details', 'method' => 'POST', 'id' => 'paymentForm'])!!}
	
		<div class="row">
			<div class="input-field col s12">
				{!! Form::select('asiento', ['1' => '1', '2' => '2', '3' => '3', '4' => '4', '5' => '5', '6' => '6', '7' => '7', '8' => '8', '9' => '9', '10' => '10'], '', ['class' => 'select-dropdown', 'id' => 'asiento', 'placeholder' => 'Seleccione numero de asientos', 'required']) !!}
				{!! Form::label('asiento', 'Asientos') !!}
			</div>					
		
		</div>
	
		{!! Form::hidden('img', 'img/carlos-carreira-queretaro.jpg') !!}
		{!! Form::hidden('evento', 'Carlos Carreira') !!}
		{!! Form::hidden('fecha', '10 de mayo 2019') !!}
		{!! Form::hidden('lugar', 'El Portón de Santiago') !!}
		{!! Form::hidden('ciudad', 'Querétaro, Quer.') !!}
		{!! Form::hidden('hora', '21:00 hrs') !!}
		{!! Form::hidden('event_type', 'general') !!}
		{!! Form::hidden('impresion_boleto', true) !!}
		{!! Form::hidden('zona', 'Diamante') !!}
		{!! Form::hidden('db_table', 'carreira_queretaro_10may') !!}
		{!! Form::hidden('info', 'Favor de comunicarte al numero 442-740-0671 para completar tu reservación.') !!}
		{!! Form::hidden('precio', '200') !!}
		{!! Form::hidden('url', url('eventos/carlos-carreira-queretaro')) !!}
		
		<div class="input-field center-align">
			{!! Form::submit('Siguiente',['class'=>'btn waves-effect waves-light orange accent-3']) !!}
		</div>	
		
		{!! Form::close() !!}
		
	</div>
	<div class="clearfix"></div>
	@else

		<p class="center-align raleway">Debes iniciar sesion para poder realizar la compra</p>
		<div class="col s12 center-align">
			<a href="#modal-login" class="modal-login-open btn waves-light orange accent-3">Login</a>
		</div>
	@endif
	</div>
	<div class="row mt-30">
		<div class="col m8 offset-m2">
			<h5 class="center-align raleway">Venta de boletos El Portón de Santiago</h5>
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
		<p><b>El Portón de Santiago</b></p>
		<p><i class="material-icons">location_on</i> Av. Prol. Luis Pasteur 37, Centro, 76000 Santiago de Querétaro, Qro.</p>
		<p><i class="material-icons">call</i> 01 442 688 94911</p>
		<p><i class="fa fa-facebook-official"></i> https://www.facebook.com/ElPortondeSantiago/</p>
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
		        var uluru = {lat: 20.5962441, lng: -100.3917602};
		        var map = new google.maps.Map(document.getElementById('map'), {
		          zoom: 18,
		          scrollwheel: false,
		          navigationControl: true,
		          draggable: true,
		          center: {lat: 20.5962441, lng: -100.3917602}
		        });
		        var marker = new google.maps.Marker({
		          position: uluru,
		          map: map
		        });
		      }

	</script>

    <script async defer src="https://maps.googleapis.com/maps/api/js?key=AIzaSyBOOT9N6QdDeq0bnmSb1bw2SKw5CXQmOeA&callback=initMap"></script>
@endsection