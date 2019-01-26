@extends('layouts.main')

@section('title', 'Gon Curiel S.L.P.')

@section('description', 'Gon Curiel en S.L.P., 15 de febrero 2019, 21:00 hrs preventa $250, evento $300')

@section('styles')
<script src="https://use.fontawesome.com/9b9c9dc667.js"></script>
@endsection

@section('content')

<div class="image-header bg-4 overlay overlay-5">

	<div class="row white-text">
		<h4>Gon Curiel</h4>
		<div class="divider"></div>
		<p><i>San Luis Potosí - Roadhouse</i></p>
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
				<img src="{{ asset('img/gon-slp.jpg') }}" alt="" class="responsive-img">
			</div>
			
			<div class="col s12 m5 offset-m1">				

				<div class="row">

					<div class="qcPricing col s12 center-align mb-10">
						<div class="box col s12">
							<header>
								<div class="col s12 m8 teal accent-4">Preventa</div>
								<div class="col m4 btn-buy nopadding hide-on-small-only"><a href="#compra" class="page-scroll"><b>Comprar</b> <i class="fa fa-ticket" aria-hidden="true"></i></a></div>
							</header>
							<div class="price col s12"><span>$250</span> Por entrada</div>
							<div class="col s12 btn-buy nopadding hide-on-med-and-up"><a href="#compra" class="page-scroll"><b>Comprar</b> <i class="fa fa-ticket" aria-hidden="true"></i></a></div>
						</div>
					</div>

					<div class="qcPricing col s12 center-align mb-10">
						<div class="box col s12">
							<header>
								<div class="col s12 blue darken-4">Taquilla</div>
								{{-- <div class="col m4 btn-buy nopadding hide-on-small-only"><b>(En taquilla)</b></div> --}}
							</header>
							<div class="price col s12"><span>$300</span> Por entrada</div>
							<div class="col s12 btn-buy nopadding hide-on-med-and-up"><a href="#compra" class="page-scroll"><b>Comprar</b> <i class="fa fa-ticket" aria-hidden="true"></i></a></div>
						</div>
					</div>

				</div>

				<div class="row">
					<div class="divider"></div>
					
						<div class="col s10 offset-s1">
							<p> * Al realizar tu compra en línea se realiza un cargo extra por concepto de servicio.</p>
							<p> * Una vez completada tu compra es importante que te comuniques a: <a href="tel:4442041482" style="background: #4caf50; color: #fff; padding: 5px 10px;"> 444-204-1482</a> para confirmar tu reservación.</p>
						</div>
						{{-- <li>Informes:</b> <a href="tel:4431880358" style="background: #4caf50; color: #fff; padding: 5px 10px;"> 443-188-0358</a></li> --}}
				
					
				</div>
			</div>
		</div>

		<div id="biografia" class="col s12 tab-content">
			<div class="col s8 offset-s2 hide-on-med-and-up">
				<img src="{{ asset('img/gon-bio.jpg') }}" class="responsive-img">
			</div>
			<div class="col s12 m7">
				<h4 class="mt-0 raleway quote">BIOGRAFÍA</h4>		
		         <p>Gon Curiel se ha consolidado en México como uno de los principales comediantes de Stand Up, género de comedia que se basa en observaciones y experiencias con las que todos nos podemos identificar, provocando catarsis y carcajadas.</p>
		         <p >En su debut cómico, ganó el primer Festival de Stand Up Comedy de Café 22, el cual le dio la oportunidad de presentarse en grandes escenarios de la comedia, sorprendiendo con su estilo innovador.</p>
		         <p>Se ha presentado en grandes escenarios de la Ciudad de México como El Vicio, El Cuevón, Show Center, Voilà Acoustique, El Teatro de Ciudad y el Auditorio Nacional, así como en diversas ciudades de la República Mexicana y Estados Unidos.</p>
		         <p>En 2014, la plataforma de televisión por Internet Netflix lo convirtió en uno de los primeros comediantes de Stand Up de habla hispana en tener su propio especial. Ese mismo año, Gon Curiel se volvió conductor del noticiero satírico “Ya Ni Llorar Es Bueno”.</p>
		         <p>Actualmente, es el único comediante que presenta semanalmente su comedia en vivo en YouTube, con temas de actualidad, en su segmento viral #NotiCreas.</p>
				
			</div>
			<div class="col m5 hide-on-small-only">
				<img src="{{ asset('img/gon-bio.jpg') }}" class="responsive-img">
			</div>
			<div class="clearfix"></div>
			<p>Fuente:</p>
			<p><small>http://goncuriel.com/goncuriel/#bio</small></p>
			
		</div>

		<div id="lugares" class="col s12 tab-content">
			<div class="row">
				<h4 class="mt-0 raleway quote">LUGARES DE VENTA</h4>
			</div>
			<div class="col s12">									
				<!-- ## VENUE MAP ## -->
				<div class="white z-depth-2">
					<iframe src="https://www.google.com/maps/embed?pb=!1m14!1m8!1m3!1d14781.456111288382!2d-100.99408881062011!3d22.150211119256095!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x0%3A0xf9a80a35ca550a0b!2sRoadhouse+Bar+Rock+slp!5e0!3m2!1ses!2smx!4v1548101469220" width="100%" height="450" frameborder="0" style="border:0" allowfullscreen></iframe>
				
				<!-- ## ADDRESS LIST ## -->
					<div class=" p-30">
						<h5 class="raleway"><b>Roadhouse</b></h5>
						<ul class="qcAddress">
							<li><div class="divider"></div></li>
							<li><i class="fa fa-map-marker"></i> <p>Av. Venustiano Carranza 1070, De Tequisquiapan, 78230 San Luis, S.L.P.</p></li>
							<li><i class="fa fa-phone"></i><p> 44442041482</p></li>
							<li><i class="fa fa-facebook-official"></i><p><a title="website" href="https://www.facebook.com/RoadhouseSLP/" target="_blank">https://www.facebook.com/RoadhouseSLP/</a></p></li>
						</ul>
					</div>
				</div>

			</div>			

		</div>

	</div>
</section>
<section class="section-video overlay overlay-5" style="background-image: url('https://img.youtube.com/vi/vkYvi2NLXzw/maxresdefault.jpg');">
	<div class="row center-align">
		<a class="white-text" id="modal-video-open" href="#modal-video" data-video="https://www.youtube.com/embed/vkYvi2NLXzw"><i class="material-icons">play_circle_filled</i></a>
		<p class="white-text"><i>Gon Curiel / El cajero automático</i></p>
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
		
			{!! Form::hidden('img', 'img/gon-slp.png') !!}
			{!! Form::hidden('evento', 'Gon Curiel') !!}
			{!! Form::hidden('fecha', '15 de febrero 2019') !!}
			{!! Form::hidden('lugar', 'Roadhouse') !!}
			{!! Form::hidden('ciudad', 'San Luis Potosí') !!}
			{!! Form::hidden('hora', '21:00 hrs') !!}
			{!! Form::hidden('event_type', 'general') !!}
			{!! Form::hidden('impresion_boleto', true) !!}
			{!! Form::hidden('zona', 'General') !!}
			{!! Form::hidden('db_table', 'gon_curiel_slp_15feb') !!}
			{!! Form::hidden('info', 'Favor de comunicarte al numero (444) 2041482 para completar tu reservación.') !!}
			{!! Form::hidden('precio', '250') !!}
			{!! Form::hidden('url', url('eventos/gon-curiel-slp')) !!}
			
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
		<p><b>Roadhouse</b></p>
		<p><i class="material-icons">location_on</i>Av. Venustiano Carranza 1070, De Tequisquiapan, 78230 San Luis, S.L.P.</p>
		<p><i class="material-icons">call</i> 4442041482</p>
		<p><i class="fa fa-facebook-official"></i> https://www.facebook.com/RoadhouseSLP/</p>
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
		        var uluru = {lat: 22.1506121, lng: -100.9890238};
		        var map = new google.maps.Map(document.getElementById('map'), {
		          zoom: 16,
		          scrollwheel: false,
		          navigationControl: true,
		          draggable: true,
		          center: {lat: 22.1506121, lng: -100.9865238}
		        });
		        var marker = new google.maps.Marker({
		          position: uluru,
		          map: map
		        });
		      }
	</script>

      <script async defer src="https://maps.googleapis.com/maps/api/js?key=AIzaSyBOOT9N6QdDeq0bnmSb1bw2SKw5CXQmOeA&callback=initMap"></script>
@endsection