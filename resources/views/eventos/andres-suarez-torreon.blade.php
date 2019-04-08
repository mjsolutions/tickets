@extends('layouts.main')

@section('title', 'Andrés Suárez')

@section('description', 'Andrés Suárez, Torreón Coah., 26 de mayo, 19:00 hrs boletos en El Foro en Vivo y bolematico.com')

@section('styles')
<meta property="og:url"  content="http://bolematico.mx/eventos/andres-suarez-torreon" />
<meta property="og:title" content="Andrés Suárez" />
<meta property="og:description" content="Andrés Suárez, Torreón Coah., 26 de mayo, 19:00 hrs boletos en El Foro en Vivo y bolematico.com" />
<meta property="og:image" content="http://bolematico.mx/img/andres-suarez-torreon.jpg" />
<style type="text/css">
	.row .col .zona-radio {
		padding: 0 3px;
	}
	.zona-radio > input:not(:checked)+label {
		color: #656869;
	}
	.zona-radio > input:checked+label {
		color: #111;
		font-weight: 700;
	}
</style>

<script src="https://use.fontawesome.com/9b9c9dc667.js"></script>
<link rel="stylesheet" type="text/css" href="{{ asset('css/event-select-manual.css') }}">
@endsection

@section('content')

<div class="image-header bg-4 overlay overlay-5">

	<div class="row white-text">
		<h4>Andrés Suárez</h4>
		<div class="divider"></div>
		<p class="mb-0"><i>El Foro en Vivo - Torreón, Coah.</i></p>
		<p class="m-0"><i>26 de mayo - 19:00 hrs.</i></p>
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

			<div class="col s8 offset-s2 m4 offset-m1 mb-30 card-flyer">
				<img src="{{ asset('img/andres-suarez-torreon.jpg') }}" alt="" class="responsive-img">
			</div>
			
			<div class="col s12 m5 offset-m1">				

				<div class="row">

					<div class="qcPricing col s12 center-align mb-10">
						<div class="box col s12">
							<header>
								<div class="col s12 teal accent-4">VIP</div>
							</header>
							<div class="price col s12"><span>$550</span> MXN</div>
						</div>
					</div>

					<div class="qcPricing col s12 center-align mb-10">
						<div class="box col s12">
							<header>
								<div class="col s12 grey lighten-1">General</div>
							</header>
							<div class="price col s12"><span>$450</span> MXN</div>
						</div>
					</div>

				</div>

				<div class="row">
					<div class="divider"></div>
					<div class="col s10 offset-s1">
						<p>* Al realizar tu compra en línea se realiza un cargo extra de <b>10%</b> por concepto de servicio.</p>
						<p>* Informes al: <a href="tel:558 687 7354" style="background: #4caf50; color: #fff; padding: 5px 10px;"> 558 687 7354</a> </p>
					</div>
				</div>
			</div>
		</div>

		<div id="detalles" class="col s12 tab-content">
			<div class="col s8 offset-s2 hide-on-med-and-up">
				<img src="{{ asset('img/andres-suarez-bio.jpg') }}" class="responsive-img">
			</div>
				
			<div class="col s12 m9">	
				<p>La historia de <strong>Andrés Suárez</strong> es un ejemplo de hasta dónde puede llevar la combinación de constancia y talento. Le puede llevar, por ejemplo, de los pasillos del Metro al Wizink Center de Madrid, dos referencias que marcan el punto de partida y de llegada de un cantautor que llegó a la capital como un músico callejero y que hoy es uno de los artistas más queridos por el público, que agota las localidades de sus conciertos ya sea en un teatro o en el antiguo Palacio de los Deportes de la capital, según opte por su lado íntimo o por su vertiente de gran banda de rock.</p>
				<p>Aquella primera vez que Andrés tocó su guitarra en el Metro, hace ya una década, la recaudación no le alcanzó para sufragar el billete. Pero este gallego de Ferrol no es de los que se arrugan fácilmente, y de la calle pasó a las terrazas de La Latina, de ahí a bares con encanto como el mítico Libertad 8 y, en un abrir y cerrar de ojos, ya estaba llenando a reventar el Palacio Vistalegre en un concierto histórico.</p>
				<p>Los resultados de todo lo que le ocurrió después están a la vista. Las presentaciones que ha tenido que ofrecer en Madrid, un lleno detrás de otro en teatros que abarrota como lo hizo en el Wizink Center. En momentos así, Andrés no puede evitar que le venga a la memoria la primera vez que tocó la guitarra en el Metro. Mente en ebullición, repleto de pasión interior, amante de la vida y preocupado por sus fans y por darles lo mejor de sí mismo en cada momento; así es Andrés Suárez, un artista apasionado.</p>

			</div>
			<div class="col s3 hide-on-small-only">
				<img src="{{ asset('img/andres-suarez-bio.jpg') }}" class="responsive-img">
			</div>
			<div class="clearfix"></div>
			<p>Fuente: <small>www.andressuarez.es</small></p>	
			
		</div>

		<div id="lugares" class="col s12 tab-content">

			<div class="col s12">									
				<!-- ## VENUE MAP ## -->
				<div class="white z-depth-2">
					<iframe src="https://www.google.com/maps/embed?pb=!1m14!1m8!1m3!1d14399.899586339623!2d-103.4493095!3d25.5392131!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x0%3A0xbcc6f66abf1be514!2sEl+Foro+Karaoke!5e0!3m2!1ses!2smx!4v1548874598370" width="100%" height="450" frameborder="0" style="border:0" allowfullscreen></iframe>
				
				<!-- ## ADDRESS LIST ## -->
					<div class=" p-30">
						<h5 class="raleway"><b>El Foro</b></h5>
						<ul class="qcAddress">
							<li><div class="divider"></div></li>
							<li><i class="fa fa-map-marker"></i> <p>Av. Morelos 25 Pte., Centro, 27000 Torreón, Coah.</p></li>
							<li><i class="fa fa-phone"></i><p>01 871 177 2222</p></li>
							<li><i class="fa fa-facebook-official"></i><p><a title="website" href="https://www.facebook.com/ElForoenVivo/" target="_blank">https://www.facebook.com/ElForoenVivo/</a></p></li>
						</ul>
					</div>
				</div>

			</div>

		</div>

	</div>
</section>
<section class="section-video overlay overlay-5" style="background-image: url('https://img.youtube.com/vi/GuE8JgULP5s/maxresdefault.jpg');">
	<div class="row center-align">
		<a class="white-text" id="modal-video-open" href="#modal-video" data-video="https://www.youtube.com/embed/GuE8JgULP5s"><i class="material-icons">play_circle_filled</i></a>
		<p class="white-text"><i>Andrés Suárez - No Saben de Ti</i></p>
	</div>
</section>

<section id="compra" class="section-comprar">
	<div class="row mb-30">
		<div class="col s12 m4 offset-m4">
			<h5 class="mt-30 raleway quote">¡Aparta tus lugares!</h5>
		</div>
	</div>

	<div class="row mb-30">
		@if(Auth()->check())
		<div class="col s12 m4 offset-m4">
				
			{!! Form::open(['route' => 'payment.details', 'method' => 'POST', 'id' => 'paymentForm'])!!}

			<div class="row">
                    
                <div class="col m6">
                	<div class="col m12 zona-radio">
                		{!! Form::radio('zona', 'VIP', false, ['id' => 'vip', 'required', 'class' => 'form_zona']) !!}
                		{!! Form::label('vip', 'VIP') !!}
                	</div>
                </div>
	            <div class="col m6">
	            	<div class="col m12 zona-radio">
	            	    {!! Form::radio('zona', 'General', false, ['id' => 'general', 'required', 'class' => 'form_zona']) !!}
	            	    {!! Form::label('general', 'General') !!}
	            	</div>
	            </div>
                    
            </div>
		
			<div class="row">
				<div class="input-field col s12">
					{!! Form::select('asiento', ['1' => '1', '2' => '2', '3' => '3', '4' => '4', '5' => '5', '6' => '6', '7' => '7', '8' => '8', '9' => '9', '10' => '10'], '', ['class' => 'select-dropdown', 'id' => 'asiento', 'placeholder' => 'Seleccione numero de asientos', 'required']) !!}
					{!! Form::label('asiento', 'Asientos') !!}
				</div>					
			
			</div>
		
			{!! Form::hidden('img', 'img/andres-suarez-torreon.jpg') !!}
			{!! Form::hidden('evento', 'Andrés Suárez') !!}
			{!! Form::hidden('fecha', '26 de mayo 2019') !!}
			{!! Form::hidden('lugar', 'El Foro en Vivo') !!}
			{!! Form::hidden('ciudad', 'Torreón, Coah.') !!}
			{!! Form::hidden('hora', '19:00 hrs') !!}
			{!! Form::hidden('event_type', 'general') !!}
			{!! Form::hidden('impresion_boleto', true) !!}
			{{-- {!! Form::hidden('zona', 'General') !!} --}}
			{!! Form::hidden('db_table', 'andres_suarez_torreon_26may') !!}
			{!! Form::hidden('info', 'Favor de comunicarte al numero 558 687 7354 para completar tu reservación.') !!}
			{!! Form::hidden('precio', '', ['id' => 'form_precio']) !!}
			{!! Form::hidden('url', url('eventos/andres-suarez-torreon')) !!}
			
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
		<p><b>El Foro</b></p>
		<p><i class="material-icons">location_on</i>Av. Morelos 25 Pte., Centro, 27000 Torreón, Coah.</p>
		<p><i class="material-icons">call</i> 01 871 177 2222</p>
		<p><i class="fa fa-facebook-official"></i> https://www.facebook.com/ElForoenVivo/</p>
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
		var precios = {'VIP': 550, 'General': 450};
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
		        var uluru = {lat: 25.5392131, lng: -103.4493095};
		        var map = new google.maps.Map(document.getElementById('map'), {
		          zoom: 18,
		          scrollwheel: false,
		          navigationControl: true,
		          draggable: true,
		          center: {lat: 25.5392131, lng: -103.4493095}
		        });
		        var marker = new google.maps.Marker({
		          position: uluru,
		          map: map
		        });
		      }
		$(".form_zona").click(function(){
			console.log($(this).val());
			$("#form_precio").val(precios[$(this).val()]);
		});

	</script>

    <script async defer src="https://maps.googleapis.com/maps/api/js?key=AIzaSyBOOT9N6QdDeq0bnmSb1bw2SKw5CXQmOeA&callback=initMap"></script>
@endsection