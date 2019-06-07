@extends('layouts.main')

@section('title', 'Santiago Cruz')

@section('description', 'Santiago Cruz, Aguascalientes 07 de junio, 21:00 hrs boletos en La Tercera Llamada y bolematico.com')

@section('styles')
<meta property="og:url"  content="http://bolematico.mx/eventos/santiago-cruz-aguascalientes" />
<meta property="og:title" content="Santiago Cruz" />
<meta property="og:description" content="Santiago Cruz, Aguascalientes 07 de junio, 21:00 hrs boletos en La Tercera Llamada y bolematico.com" />
<meta property="og:image" content="http://bolematico.mx/img/santiago-cruz-ags.jpg" />
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
		<h4>Santiago Cruz</h4>
		<div class="divider"></div>
		<p class="mb-0"><i>La Tercera Llamada - Aguascalientes</i></p>
		<p class="m-0"><i>07 de junio - 21:00 hrs.</i></p>
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
				<img src="{{ asset('img/santiago-cruz-ags.jpg') }}" alt="" class="responsive-img">
			</div>
			
			<div class="col s12 m5 offset-m1">				

				<div class="row">

					<div class="qcPricing col s12 center-align mb-10">
						<div class="box col s12">
							<header>
								<div class="col s12 teal accent-4">Diamante</div>
							</header>
							<div class="price col s12"><span>$650</span> MXN</div>
						</div>
					</div>

					<div class="qcPricing col s12 center-align mb-10">
						<div class="box col s12">
							<header>
								<div class="col s12 amber darken-1">Oro</div>
							</header>
							<div class="price col s12"><span>$500</span> MXN</div>
						</div>
					</div>

					<div class="qcPricing col s12 center-align mb-10">
						<div class="box col s12">
							<header>
								<div class="col s12 grey lighten-1">Plata</div>
							</header>
							<div class="price col s12"><span>$400</span> MXN</div>
						</div>
					</div>

				</div>

				<div class="row">
					<div class="divider"></div>
					<div class="col s10 offset-s1">
						<p>* Al realizar tu compra en línea se realiza un cargo extra de <b>10%</b> por concepto de servicio.</p>
						<p>* Informes al: <a href="tel:4492418386" style="background: #4caf50; color: #fff; padding: 5px 10px;"> 449 241 8386</a> </p>
					</div>
				</div>
			</div>
		</div>

		<div id="detalles" class="col s12 tab-content">
			<div class="col s8 offset-s2 hide-on-med-and-up">
				<img src="{{ asset('img/santiago-bio.jpg') }}" class="responsive-img">
			</div>
				
			<div class="col s12 m9">	
				<p>El cantautor colombiano <strong>Santiago Cruz</strong>, es ya un nombre indispensable en el panorama de la música pop internacional. Con sus cinco álbumes, cuatro de ellos producidos en estudio, ha obtenido paso a paso un reconocimiento tanto en Colombia como en varios países de la región que lo proyecta como uno de los más importantes artistas de la escena musical hispanohablante.</p>
				<p>Con múltiples reconocimientos en los últimos años, entre ellos dos nominaciones al Latin Grammy en el 2010 y 2013 en las categorías Mejor Álbum Cantautor y Grabación del año por Desde lejos y varios premios Nuestra Tierra, Shock y 40 Principales, varios Discos de oro y platino por ventas de sus álbumes, Cruz sigue transitando con éxito el camino que soñaba, vivir haciendo lo que más le gusta, componer y cantar.</p>
				<p>Desde 2011 es Embajador de Buena Voluntad de Naciones Unidas por los Objetivos del Milenio, un honroso nombramiento que le permite trabajar de cerca con el equipo de la ONU para encontrar formas concretas de lograr algunos de los cambios que se necesitan para un mundo mejor.</p>
			</div>
			<div class="col s3 hide-on-small-only">
				<img src="{{ asset('img/santiago-bio.jpg') }}" class="responsive-img">
			</div>
			<div class="clearfix"></div>
			<div class="col s8 offset-s2 m4">
				<img src="{{ asset('img/santiago-bio2.jpg') }}" class="responsive-img">
			</div>
			<div class="col s12 m8">
				<p class="mt-0">Su canción Una y otra vez le dió la oportunidad de entrar al mercado colombiano. Ese sencillo formó parte de su primer álbum titulado SOLO HASTA HOY, lanzado en 2003. Tres años mas tarde, en 2006, salió su segundo álbum, SENTIDOS un disco bien logrado y producido en forma independiente. Canciones de esta producción como "Acabado" y "Tus Regalos" quedaron grabadas en el alma de la gente.</p>
				<p>2009 marcó el camino irreversible para posicionarse como un gran cantautor de talla internacional. Ese año, en España, de la mano del reconocido productor musical Nacho Mañó (el mismo que ha trabajado con Armando Manzanero, Alejandro Sanz, Niña Pastori, entre otros, y quien ademas es miembro y alma de Presuntos Implicados), Santiago materializó su tercer album CRUCE DE CAMINOS a partir del cual contó con el acompañamiento de Sony Music.</p>
				<p>Baja la guardia, Cuando regreses, Y si te quedas, ¿qué?, 6 am y 10.000 batallas, son las 5 canciones de ese álbum que ya forman parte fundamental del repertorio del pop colombiano. Tras el éxito obtenido, en diciembre de 2011 CRUCE DE CAMINOS recibió Doble Disco de Platino por ventas en Colombia, y Disco de Platino en Venezuela.</p>
			</div>
			<div class="clearfix"></div>
			<p>Fuente: <small>http://www.santiagocruz.net/bio.php/</small></p>	
			
		</div>

		<div id="lugares" class="col s12 tab-content">

			<div class="col s12">									
				<!-- ## VENUE MAP ## -->
				<div class="white z-depth-2">
					<iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d231.39054371113036!2d-102.29312727583974!3d21.88649691230739!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x8429ee6447793003%3A0x67124546edac382d!2sCentro+Cultural+Tercera+Llamada!5e0!3m2!1ses!2smx!4v1552950651679" width="100%" height="450" frameborder="0" style="border:0" allowfullscreen></iframe>
				
				<!-- ## ADDRESS LIST ## -->
					<div class=" p-30">
						<h5><b>La Tercera Llamada</b></h5>
						<ul class="qcAddress">
							<li><div class="divider"></div></li>
							<li><i class="fa fa-map-marker"></i> <strong>DIRECCIÓN</strong>: <p>Gral Álvaro Obregón 355, Zona Centro, 20000 Aguascalientes, Ags.</p></li>
							<li><i class="fa fa-phone"></i> <strong>TELÉFONO</strong>: <p> 9162038</p></li>
							{{-- <li><i class="fa fa-calendar"></i> <strong>HORARIO</strong>: <p>10:00 a 19:00 hrs. Lunes a Viernes y 10:30 a 14:00 hrs. los Sabados.</p></li> --}}
							<li><i class="fa fa-globe"></i> <strong>Website</strong>: <p><a title="website" href="https://www.facebook.com/pages/category/Restaurant/Tercera-Llamada-Restaurante-Cultural-246649588687732/" target="_blank">https://www.facebook.com/pages/category/Restaurant/Tercera-Llamada-Restaurante-Cultural-246649588687732/</a></p></li>
						</ul>
					</div>
				</div>

			</div>

		</div>

	</div>
</section>
<section class="section-video overlay overlay-5" style="background-image: url('https://img.youtube.com/vi/geFJZW9vpSM/maxresdefault.jpg');">
	<div class="row center-align">
		<a class="white-text" id="modal-video-open" href="#modal-video" data-video="https://www.youtube.com/embed/geFJZW9vpSM"><i class="material-icons">play_circle_filled</i></a>
		<p class="white-text"><i>Santiago Cruz - Y Si Te Quedas, ¿qué?</i></p>
	</div>
</section>

<section id="compra" class="section-comprar">
	{{-- <div class="row mb-30">
		<div class="col s12 m4 offset-m4">
			<h5 class="mt-30 raleway quote">¡Aparta tus lugares!</h5>
		</div>
	</div> --}}

	<div class="row mb-30 mt-30">
		{{-- @if(Auth()->check())
		<div class="col s12 m4 offset-m4">
				
			{!! Form::open(['route' => 'payment.details', 'method' => 'POST', 'id' => 'paymentForm'])!!}

			<div class="row">
                    
                <div class="col m4">
                	<div class="col m12 zona-radio">
                		{!! Form::radio('zona', 'Diamante', false, ['id' => 'diamante', 'required', 'class' => 'form_zona']) !!}
                		{!! Form::label('diamante', 'Diamante') !!}
                	</div>
                </div>
                <div class="col m4">
                	<div class="col m12 zona-radio">
		                {!! Form::radio('zona', 'Oro', false, ['id' => 'oro', 'required', 'class' => 'form_zona']) !!}
		                {!! Form::label('oro', 'Oro') !!}
		            </div>
                </div>
	            <div class="col m4">
	            	<div class="col m12 zona-radio">
	            	    {!! Form::radio('zona', 'Plata', false, ['id' => 'plata', 'required', 'class' => 'form_zona']) !!}
	            	    {!! Form::label('plata', 'Plata') !!}
	            	</div>
	            </div>
                    
            </div>
		
			<div class="row">
				<div class="input-field col s12">
					{!! Form::select('asiento', ['1' => '1', '2' => '2', '3' => '3', '4' => '4', '5' => '5', '6' => '6', '7' => '7', '8' => '8', '9' => '9', '10' => '10'], '', ['class' => 'select-dropdown', 'id' => 'asiento', 'placeholder' => 'Seleccione numero de asientos', 'required']) !!}
					{!! Form::label('asiento', 'Asientos') !!}
				</div>					
			
			</div>
		
			{!! Form::hidden('img', 'img/santiago-cruz-ags.jpg') !!}
			{!! Form::hidden('evento', 'Santiago Cruz') !!}
			{!! Form::hidden('fecha', '07 de junio 2019') !!}
			{!! Form::hidden('lugar', 'La Tercera Llamada') !!}
			{!! Form::hidden('ciudad', 'Aguascalientes') !!}
			{!! Form::hidden('hora', '21:00 hrs') !!}
			{!! Form::hidden('event_type', 'general') !!}
			{!! Form::hidden('impresion_boleto', true) !!}
			{!! Form::hidden('db_table', 'santiago_cruz_ags_07jun') !!}
			{!! Form::hidden('info', 'Favor de comunicarte al numero 449 241 8386 para completar tu reservación.') !!}
			{!! Form::hidden('precio', '', ['id' => 'form_precio']) !!}
			{!! Form::hidden('url', url('eventos/santiago-cruz-aguascalientes')) !!}
			
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
		@endif --}}
		{{-- <div class="col s12 m4 offset-m4 mt-30">
			<p>
				<i>* Puedes seleccionar un máximo de 10 lugares.</i><br>
				<i>* Se cobrara un cargo adicional por concepto de servicio.</i>
			</p>
		</div> --}}
		<h5 class="center-align raleway">¡Últimos lugares disponibles! solo en La Tercera Llamada</h5>
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
			<iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d231.39054371113036!2d-102.29312727583974!3d21.88649691230739!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x8429ee6447793003%3A0x67124546edac382d!2sCentro+Cultural+Tercera+Llamada!5e0!3m2!1ses!2smx!4v1552950651679" width="100%" height="450" frameborder="0" style="border:0" allowfullscreen></iframe>
		</div>
		<div class="col m3">
			<h5 class="quote raleway">Lugar del evento</h5>
			
			<h5 class="mt-30">La Tercera Llamada</h5>
			<div class="col s10">
				<div class="divider"></div>
			</div>
			<ul class="fa-ul" style="margin-top: 30px;">
				<li class="mb-10"><i class="fa-li fa fa-map-marker"></i> Gral Álvaro Obregón 355, <br>Zona Centro, 20000 <br>Aguascalientes, Ags.</li>
				{{-- <li><i class="fa-li fa fa-phone"></i> 01 461 174 3456</li> --}}
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
		var precios = {'Diamante': 650, 'Oro': 500, 'Plata': 400};
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
			$("#form_precio").val(precios[$(this).val()]);
		});

	</script>

@endsection