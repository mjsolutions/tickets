@extends('layouts.main')

@section('title', 'Carlos Macias')

@section('description', 'Carlos Macias, San Luis Potosí, 22 de junio, 20:00 hrs boletos en Roadhouse Carranza y bolematico.com')

@section('styles')
<meta property="og:url"  content="https://www.bolematico.com/eventos/carlos-macias-slp" />
<meta property="og:title" content="Carlos Macias" />
<meta property="og:description" content="Carlos Macias, San Luis Potosí, 22 de junio, 20:00 hrs boletos en Roadhouse Carranza y bolematico.com" />
<meta property="og:image" content="https://www.bolematico.com/img/carlos-macias-slp.jpg" />
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
		<h4>Carlos Macias</h4>
		<div class="divider"></div>
		<p class="mb-0"><i>Roadhouse Carranza - San Luis Potosí</i></p>
		<p class="m-0"><i>22 de junio - 20:00 hrs.</i></p>
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

			<div class="col s8 offset-s2 m5 offset-m1 mb-30 card-flyer">
				<img src="{{ asset('img/carlos-macias-slp.jpg') }}" alt="" class="responsive-img">
			</div>
			
			<div class="col s12 m4 offset-m1">				

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
							<div class="price col s12"><span>$330</span> MXN</div>
						</div>
					</div>

				</div>

				<div class="row">
					<div class="divider"></div>
					<div class="col s10 offset-s1">
						<p>* Al realizar tu compra en línea se realiza un cargo extra de <b>10%</b> por concepto de servicio.</p>
						<p class="mb-0"> * Informes y confirmación de tu compra:</p>
						<ul style="margin-top: 0;padding-left: 15px;">
							<li><i class="fa fa-phone"></i> <a href="tel:4442041482" >444-204-1482</a></li>
							<li><i style="background-color: #4caf50; color: #fff; border-radius: 50%;" class="fa fa-whatsapp"></i> <a href="https://api.whatsapp.com/send?phone=524521741255" target="_blank">452-174-1255</a></li>
						</ul>
					</div>
				</div>
			</div>
		</div>

		<div id="detalles" class="col s12 tab-content">
			<div class="col s8 offset-s2 hide-on-med-and-up">
				<img src="{{ asset('img/carlos-macias-bio.jpg') }}" class="responsive-img">
			</div>
				
			<div class="col s12 m9">	
				<p><strong>Carlos Macías</strong>, cantautor, músico, compositor y productor musical originario de Chaipa de Corzo, Chiapas, el cual ha recibido grandes reconocimientos tales como nominaciones a los Grammys, premios lo nuestro y Bilboard. Ha sido compositor de artistas como Myriam, Pablo Montero, Cristian Castro y muy recientemente Luis Miguel ademas de colaborar con grandes personalidades del medio como Armando Manzanero, el cual lo ha descrito como "El cantautor más exquisito de la nueva generación de compositores".</p>
			</div>
			<div class="col m3 hide-on-small-only">
				<img src="{{ asset('img/carlos-macias-bio.jpg') }}" class="responsive-img">
			</div>
			<div class="clearfix"></div>			
		</div>

		<div id="lugares" class="col s12 tab-content">

			<div class="col s12">									

				<div class="white z-depth-2">
					<iframe src="https://www.google.com/maps/embed?pb=!1m14!1m8!1m3!1d14781.4143673725!2d-100.9890248!3d22.1506086!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x0%3A0xf9a80a35ca550a0b!2sRoadhouse+Bar+Rock+slp!5e0!3m2!1ses!2smx!4v1558973556481!5m2!1ses!2smx" width="100%" height="450" frameborder="0" style="border:0" allowfullscreen></iframe>
				
					<div class=" p-30">
						<h5 class="raleway"><b>Roadhouse Carranza</b></h5>
						<ul class="qcAddress">
							<li><div class="divider"></div></li>
							<li><i class="fa fa-map-marker"></i> <p>Av. Venustiano Carranza #1070</p></li>
							<li><i class="fa fa-globe"></i><p><a title="website" href="https://roadhouseslp.wordpress.com/" target="_blank">https://roadhouseslp.wordpress.com/</a></p></li>
						</ul>
					</div>
				</div>

			</div>

		</div>

	</div>
</section>
<section class="section-video overlay overlay-5" style="background-image: url('https://img.youtube.com/vi/HFOjUum13ts/maxresdefault.jpg');">
	<div class="row center-align">
		<a class="white-text" id="modal-video-open" href="#modal-video" data-video="https://www.youtube.com/embed/HFOjUum13ts"><i class="material-icons">play_circle_filled</i></a>
		<p class="white-text"><i>Carlos Macias - Divina Tú</i></p>
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
		
			{!! Form::hidden('img', 'img/carlos-macias-slp.jpg') !!}
			{!! Form::hidden('evento', 'Carlos Macias') !!}
			{!! Form::hidden('fecha', '22 de junio 2019') !!}
			{!! Form::hidden('lugar', 'Roadhouse Carranza') !!}
			{!! Form::hidden('ciudad', 'San Luis Potosí') !!}
			{!! Form::hidden('hora', '20:00 hrs') !!}
			{!! Form::hidden('event_type', 'general') !!}
			{!! Form::hidden('impresion_boleto', true) !!}
			{{-- {!! Form::hidden('zona', 'General') !!} --}}
			{!! Form::hidden('db_table', 'carlos_macias_slp_22jun') !!}
			{!! Form::hidden('info', 'Favor de comunicarte al numero 444 204 1482 para completar tu reservación.') !!}
			{!! Form::hidden('precio', '', ['id' => 'form_precio']) !!}
			{!! Form::hidden('url', url('eventos/carlos-macias-slp')) !!}
			
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
	<div class="row">
		<div class="col m9">
			<iframe class="z-depth-2" src="https://www.google.com/maps/embed?pb=!1m14!1m8!1m3!1d14781.4143673725!2d-100.9890248!3d22.1506086!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x0%3A0xf9a80a35ca550a0b!2sRoadhouse+Bar+Rock+slp!5e0!3m2!1ses!2smx!4v1558973556481!5m2!1ses!2smx" width="100%" height="450" frameborder="0" style="border:0" allowfullscreen></iframe>
		</div>
		<div class="col m3">
			<h5 class="quote raleway">Lugar del evento</h5>
			
			<h5 class="mt-30">Roadhouse Bar Carranza</h5>
			<div class="col s10">
				<div class="divider"></div>
			</div>
			<ul class="fa-ul" style="margin-top: 30px;">
				<li class="mb-10"><i class="fa-li fa fa-map-marker"></i> Av. Venustiano Carranza #1070, <br> De Tequisquiapan, 78230, <br>San Luis, S.L.P.</li>
				<li><i class="fa-li fa fa-globe"></i> <a title="website" style="color:#434546" href="https://roadhouseslp.wordpress.com/" target="_blank">https://roadhouseslp.wordpress.com/</a></li>
			</ul>

		</div>
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
		var precios = {'VIP': 550, 'General': 330};
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
		$(".form_zona").click(function(){
			console.log($(this).val());
			$("#form_precio").val(precios[$(this).val()]);
		});

	</script>
@endsection