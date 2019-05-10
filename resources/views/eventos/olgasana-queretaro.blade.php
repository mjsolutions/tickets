@extends('layouts.main')

@section('title', 'Olgasana')

@section('description', 'Olgasana, en apoyo al cáncer de mama; Querétaro, 25 de mayo de mayo, 21:00 hrs boletos en El Portón de Santiago y bolematico.com')

@section('styles')
<meta property="og:url"  content="http://bolematico.mx/eventos/olgasana-queretaro" />
<meta property="og:title" content="Olgasana" />
<meta property="og:description" content="Olgasana, en apoyo al cáncer de mama; Querétaro, 25 de mayo de mayo, 21:00 hrs boletos en El Portón de Santiago y bolematico.com" />
<meta property="og:image" content="http://bolematico.mx/img/olgasana-queretaro.jpg" />
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
@endsection

@section('content')

<div class="image-header bg-4 overlay overlay-5">

	<div class="row white-text">
		<h4>Olgasana</h4>
		<div class="divider"></div>
		<p class="mb-0"><i>El Portón de Santiago - Querétaro</i></p>
		<p class="m-0"><i>25 de mayo - 21:00 hrs.</i></p>
	</div>
	<a href="#compra" class="btn waves-light waves-effect page-scroll"><b>Comprar</b> <i class="fa fa-ticket" aria-hidden="true"></i></a>
</div>

<section class="container">
	<div class="row">
		<div class="col s12">
			<ul class="tabs">
				<li class="tab "><a class="active" href="#precios">Precios</a></li>
				<li class="tab "><a href="#detalles">Detalles</a></li>
				<li class="tab "><a id="tab_link-lugares" href="#lugares">Lugares de venta</a></li>
			</ul>
		</div>
		<div id="precios" class="col s12 tab-content">

			<div class="col s8 offset-s2 m6 offset-m1 mb-30 card-flyer">
				<img src="{{ asset('img/olgasana-queretaro.jpg') }}" alt="" class="responsive-img">
			</div>
			
			<div class="col s12 m4 ">				

				<div class="row">

					<div class="qcPricing col s12 center-align mb-10">
						<div class="box col s12">
							<header>
								<div class="col s12 teal accent-4">VIP</div>
							</header>
							<div class="price col s12"><span>$300</span> MXN</div>
						</div>
					</div>

					<div class="qcPricing col s12 center-align mb-10">
						<div class="box col s12">
							<header>
								<div class="col s12 amber darken-1">Oro</div>
							</header>
							<div class="price col s12"><span>$250</span> MXN</div>
						</div>
					</div>

					<div class="qcPricing col s12 center-align mb-10">
						<div class="box col s12">
							<header>
								<div class="col s12 grey lighten-1">Plata</div>
							</header>
							<div class="price col s12"><span>$200</span> MXN</div>
						</div>
					</div>

					<div class="qcPricing col s12 center-align mb-10">
						<div class="box col s12">
							<header>
								<div class="col s12 white black-text">General</div>
							</header>
							<div class="price col s12"><span>$150</span> MXN</div>
						</div>
					</div>

				</div>

			</div>
			<div class="row">
				<div class="divider"></div>
				<div class="col s10 offset-s1">
					<p>* Al realizar tu compra en línea se realiza un cargo extra de <b>10%</b> por concepto de servicio.</p>
					<p> * Una vez completada tu compra es importante que te comuniques a los telefonos: <br> <a href="tel:4427400671" style="background: #4caf50; color: #fff; padding: 5px 10px;">442-740-0671</a> / <a href="tel:4521741255" style="background: #4caf50; color: #fff; padding: 5px 10px;">452-174-1255</a> para confirmar tu reservación.</p>
				</div>
			</div>
		</div>

		<div id="detalles" class="col s12 tab-content">	
			
		</div>

		<div id="lugares" class="col s12 tab-content">

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
</section>
<section class="section-video overlay overlay-5" style="background-image: url('https://img.youtube.com/vi/kVaF9ml0zUs/maxresdefault.jpg');">
	<div class="row center-align">
		<a class="white-text" id="modal-video-open" href="#modal-video" data-video="https://www.youtube.com/embed/kVaF9ml0zUs"><i class="material-icons">play_circle_filled</i></a>
		<p class="white-text"><i>Olga Sana y sus aventuras con el Chopan</i></p>
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
                    
                <div class="col m3">
                	<div class="col m12 zona-radio">
                		{!! Form::radio('zona', 'VIP', false, ['id' => 'vip', 'required', 'class' => 'form_zona']) !!}
                		{!! Form::label('vip', 'VIP') !!}
                	</div>
                </div>
                <div class="col m3">
                	<div class="col m12 zona-radio">
		                {!! Form::radio('zona', 'Oro', false, ['id' => 'oro', 'required', 'class' => 'form_zona']) !!}
		                {!! Form::label('oro', 'Oro') !!}
		            </div>
                </div>
                <div class="col m3">
	            	<div class="col m12 zona-radio">
	            	    {!! Form::radio('zona', 'Plata', false, ['id' => 'plata', 'required', 'class' => 'form_zona']) !!}
	            	    {!! Form::label('plata', 'Plata') !!}
	            	</div>
	            </div> 
	            <div class="col m3">
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
		
			{!! Form::hidden('img', 'img/olgasana-queretaro.jpg') !!}
			{!! Form::hidden('evento', 'Olgasana') !!}
			{!! Form::hidden('fecha', '25 de mayo 2019') !!}
			{!! Form::hidden('lugar', 'El Portó de Santiago') !!}
			{!! Form::hidden('ciudad', 'Querétaro') !!}
			{!! Form::hidden('hora', '21:00 hrs') !!}
			{!! Form::hidden('event_type', 'general') !!}
			{!! Form::hidden('impresion_boleto', true) !!}
			{{-- {!! Form::hidden('zona', '') !!} --}}
			{!! Form::hidden('db_table', 'olgasana_queretaro_25may') !!}
			{!! Form::hidden('info', 'Favor de comunicarte al numero 442-740-0671 para completar tu reservación.') !!}
			{!! Form::hidden('precio', '', ['id' => 'form_precio']) !!}
			{!! Form::hidden('url', url('eventos/olgasana-queretaro')) !!}
			
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
		var precios = {'VIP': 300, 'Oro': 250, 'Plata': 200, 'General':150};
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
		          zoom: 17,
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

		$(".form_zona").click(function(){
			console.log($(this).val());
			$("#form_precio").val(precios[$(this).val()]);
		});

	</script>

    <script async defer src="https://maps.googleapis.com/maps/api/js?key=AIzaSyBOOT9N6QdDeq0bnmSb1bw2SKw5CXQmOeA&callback=initMap"></script>
@endsection