@extends('layouts.main')

@section('title', 'Kristos Lezama')

@section('description', 'Kristos Lezama, Morelia Mich., 05 de julio, 21:30 hrs boletos en RS Viajes Centro y bolematico.com')

@section('styles')
<meta property="og:url"  content="https://www.bolematico.com/eventos/kristos-lezama-morelia" />
<meta property="og:title" content="Kristos Lezama" />
<meta property="og:description" content="Kristos Lezama, Morelia Mich., 05 de julio, 21:30 hrs boletos en RS Viajes Centro y bolematico.com" />
<meta property="og:image" content="https://www.bolematico.com/img/kristos-lezama-morelia.jpg" />

<script src="https://use.fontawesome.com/9b9c9dc667.js"></script>
@endsection

@section('content')

<div class="image-header bg-del-olmo overlay overlay-5">

	<div class="row white-text">
		<h4>Kristos Lezama</h4>
		<div class="divider"></div>
		<p class="mb-0"><i>Café del Olmo - Morelia, Mich.</i></p>
		<p class="m-0"><i>05 de julio - 21:30 hrs.</i></p>
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

			<div class="col s8 offset-s2 m4 offset-m1 mb-30 card-flyer">
				<img src="{{ asset('img/kristos-lezama-morelia.jpg') }}" alt="" class="responsive-img">
			</div>
			
			<div class="col s12 m5 offset-m1">				

				<div class="row">

					@if (\Carbon\Carbon::now() < '2019-06-27 23:59:59')
					
					<div class="qcPricing col s12 center-align mb-10">
						<div class="box col s12">
							<header>
								<div class="col s12 teal accent-4">Fase 1</div>
							</header>
							<div class="price col s12"><span>$150</span> MXN</div>
						</div>
					</div>

					@elseif(\Carbon\Carbon::now() > '2019-06-27 23:59:59' && \Carbon\Carbon::now() < '2019-07-04 23:59:59')

					<div class="qcPricing col s12 center-align mb-10">
						<div class="box col s12">
							<header>
								<div class="col s12 orange darken-2">Fase 2</div>
							</header>
							<div class="price col s12"><span>$200</span> MXN</div>
						</div>
					</div>

					@else

					<div class="qcPricing col s12 center-align mb-10">
						<div class="box col s12">
							<header>
								<div class="col s12 indigo darken-1">Fase 3</div>
							</header>
							<div class="price col s12"><span>$230</span> MXN</div>
						</div>
					</div>
							
					@endif

				</div>

				<div class="row">
					<div class="divider"></div>
					<div class="col s10 offset-s1">
						<p>* Al realizar tu compra en línea se realiza un cargo extra de <b>10%</b> por concepto de servicio.</p>
						<p> * Informes y confirmación de tu reservación (una vez realizada tu compra) <br> <a href="tel:4431880358" style="background: #4caf50; color: #fff; padding: 5px 10px;"> 443-188-0358</a> / <a href="tel:4432274979" style="background: #4caf50; color: #fff; padding: 5px 10px;"> 443-227-4979</a></p>
					</div>
				</div>
			</div>
		</div>

		<div id="detalles" class="col s12 tab-content">
			<div class="col s8 offset-s2 hide-on-med-and-up">
				<img src="{{ asset('img/kristos-lezama-bio.jpg') }}" class="responsive-img">
			</div>
				
			<div class="col s12 m9">	
				<p>Originario de la Ciudad de México, 1972. Kristos comienza a tocar aproximadamente en el año 1991, En sus inicios como músico experimenta su etapa urbana tocando en camiones de transporte público, en las banquetas, en manifestaciones sociales, y plazas de Ciudad Juárez Chihuahua, posteriormente en Cuernavaca y Ciudad de México. También durante esos años comienza a componer sus propias canciones. En 2001 graba su primer disco llamado “los mismos perros el mismo hueso” producido por Roberto Canales con el sello “22cero11” un disco básicamente acústico con doce canciones propias que invitan a la reflexión. A partir de ese momento y con el disco como motor inicia una nueva etapa para su música y comienza un recorrido como musico independiente por diferentes foros y festivales de la república Mexicana. entre ellos: Michoacán, Morelos, Guanajuato, Edo de México, DF, Querétaro, Nuevo León, Quintana Roo, Puebla, Aguascalientes, Jalisco, Oaxaca, Veracruz, Sinaloa, Baja california, Chihuahua, Nayarit, Sonora, entre otros</p>
				<p>Su espectáculo comienza entonces a  construirse a partir de la espontaneidad, valiéndose del sarcasmo el humor y la comunicación  con el público.</p>

			</div>
			<div class="col s3 hide-on-small-only">
				<img src="{{ asset('img/kristos-lezama-bio.jpg') }}" class="responsive-img">
			</div>
			<div class="clearfix"></div>
			
		</div>

		<div id="lugares" class="col s12 tab-content">
			<div class="col s12">
				<h5 class="mb-30 quote">Además de Bolematico, puedes adquirir tus entradas en:</h5>
			</div>

			<div class="col s12">									
				<!-- ## VENUE MAP ## -->
				<div class="white z-depth-2">
					<iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3756.1943227085408!2d-101.18477128552061!3d19.704349286730476!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x842d0e0d6bca646b%3A0x1b0a3a981724216f!2sRS+Viajes+Centro!5e0!3m2!1ses!2smx!4v1501091355750" width="100%" height="320" frameborder="0" style="border:0" allowfullscreen></iframe>
				
				<!-- ## ADDRESS LIST ## -->
					<div class=" p-30">
						<h5><b>RS Viajes Centro</b></h5>
						<ul class="qcAddress">
							<li><div class="divider"></div></li>
							<li><i class="fa fa-map-marker"></i> <strong>DIRECCIÓN</strong>: <p>20 de Noviembre 917, Centro Histórico, 58000 Morelia, Mich.</p></li>
							<li><i class="fa fa-phone"></i> <strong>TELÉFONO</strong>: <p> 01 443 312 4639</p></li>
							<li><i class="fa fa-calendar"></i> <strong>HORARIO</strong>: <p>10:00 a 19:00 hrs. Lunes a Viernes y 10:30 a 14:00 hrs. los Sabados.</p></li>
							<li><i class="fa fa-globe"></i> <strong>Website</strong>: <p><a title="website" href="https://www.facebook.com/RsViajesCentro/" target="_blank">https://www.facebook.com/RsViajesCentro/</a></p></li>
						</ul>
					</div>
				</div>

			</div>

		</div>

	</div>
</section>
<section class="section-video overlay overlay-5" style="background-image: url('https://img.youtube.com/vi/WFLkf0lwUbg/maxresdefault.jpg');">
	<div class="row center-align">
		<a class="white-text" id="modal-video-open" href="#modal-video" data-video="https://www.youtube.com/embed/WFLkf0lwUbg"><i class="material-icons">play_circle_filled</i></a>
		<p class="white-text"><i>Kristos Lezama - Cuando Nos Conocimos</i></p>
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
				<div class="input-field col s12">
					{!! Form::select('asiento', ['1' => '1', '2' => '2', '3' => '3', '4' => '4', '5' => '5', '6' => '6', '7' => '7', '8' => '8', '9' => '9', '10' => '10'], '', ['class' => 'select-dropdown', 'id' => 'asiento', 'placeholder' => 'Seleccione numero de asientos', 'required']) !!}
					{!! Form::label('asiento', 'Asientos') !!}
				</div>					
			
			</div>
		
			{!! Form::hidden('img', 'img/kristos-lezama-morelia.jpg') !!}
			{!! Form::hidden('evento', 'Kristos Lezama') !!}
			{!! Form::hidden('fecha', '05 de julio 2019') !!}
			{!! Form::hidden('lugar', 'Café del Olmo') !!}
			{!! Form::hidden('ciudad', 'Morelia, Mich.') !!}
			{!! Form::hidden('hora', '21:30 hrs') !!}
			{!! Form::hidden('event_type', 'general') !!}
			{!! Form::hidden('impresion_boleto', true) !!}
			{!! Form::hidden('db_table', 'kristos_morelia_05jul') !!}
      {!! Form::hidden('info', 'Favor de comunicarte al numero 4431880358 o 4432274979 para completar tu reservación.') !!}
      @if (\Carbon\Carbon::now() < '2019-06-27 23:59:59')
			{!! Form::hidden('zona', 'Fase 1') !!}
			{!! Form::hidden('precio', 150) !!}      
      @elseif (\Carbon\Carbon::now() > '2019-06-27 23:59:59' && \Carbon\Carbon::now() < '2019-07-04 23:59:59')
			{!! Form::hidden('zona', 'Fase 2') !!}
			{!! Form::hidden('precio', 200) !!}      
      @else
			{!! Form::hidden('zona', 'Fase 3') !!}
			{!! Form::hidden('precio', 230) !!}          
      @endif
			{!! Form::hidden('url', url('eventos/kristos-lezama-morelia')) !!}
			
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
			<iframe src="https://www.google.com/maps/embed?pb=!1m14!1m8!1m3!1d5792.87165265433!2d-101.1934791083879!3d19.703569760024276!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x0%3A0xd36469acf27f41ad!2sRestaurante-Bar+Caf%C3%A9+del+Olmo!5e0!3m2!1ses!2smx!4v1559057215646!5m2!1ses!2smx" width="100%" height="450" frameborder="0" style="border:0" allowfullscreen></iframe>
		</div>
		<div class="col m3">
			<h5 class="quote raleway">Lugar del evento</h5>
			
			<h5 class="mt-30">Café del Olmo</h5>
			<div class="col s10">
				<div class="divider"></div>
			</div>
			<ul class="fa-ul" style="margin-top: 30px;">
				<li class="mb-10"><i class="fa-li fa fa-map-marker"></i> Benito Juárez 95, <br>Centro Histórico, 58000 <br>Morelia, Mich.</li>
				<li><i class="fa-li fa fa-facebook"></i> <a title="website" style="color:#434546" href="https://www.facebook.com/cafedelolmooficial" target="_blank">cafedelolmooficial</a></li>
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

	</script>
@endsection