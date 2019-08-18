@extends('layouts.main')

@section('title', 'Edgar Oceransky')

@section('description', 'Edgar Oceransky, Aguascalientes 23 de agosto, 21:00 hrs boletos en La Tercera Llamada y bolematico.com')

@section('styles')
<meta property="og:url"  content="https:www//bolematico.com/eventos/edgar-oceransky-aguascalientes" />
<meta property="og:title" content="Edgar Oceransky" />
<meta property="og:description" content="Edgar Oceransky, Aguascalientes 23 de agosto, 21:00 hrs boletos en La Tercera Llamada y bolematico.com" />
<meta property="og:image" content="https://www.bolematico.com/img/edgar-oceransky-ags.jpg" />
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
		<h4>Edgar Oceransky</h4>
		<div class="divider"></div>
		<p class="mb-0"><i>La Tercera Llamada - Aguascalientes</i></p>
		<p class="m-0"><i>23 de agosto - 21:00 hrs.</i></p>
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

			<div class="col s8 offset-s2 m4 offset-m1 mb-30">
				<div class="card-flyer">
					<img src="{{ asset('img/edgar-oceransky-ags.jpg') }}" alt="" class="responsive-img">
				</div>
				<p class="center-align raleway">Venta de boletos también en "La Tercera Llamada", <br>Martes a Sábado de 10 am a 10 pm</p>
			</div>
			
			<div class="col s12 m5 offset-m1">				

				<div class="row">

					<div class="qcPricing col s12 center-align mb-10">
						<div class="box col s12">
							<header>
								<div class="col s12 teal accent-4">Diamante</div>
							</header>
							<div class="price col s12"><span>$700</span> MXN</div>
						</div>
					</div>

{{-- 					<div class="qcPricing col s12 center-align mb-10">
						<div class="box col s12">
							<header>
								<div class="col s12 amber darken-1">Oro</div>
							</header>
							<div class="price col s12"><span>$450</span> MXN</div>
						</div>
					</div> --}}

				</div>

				<div class="row">
					<div class="divider"></div>
					<div class="col s10 offset-s1">
						<p>* Al realizar tu compra en línea se realiza un cargo extra de <b>10%</b> por concepto de servicio.</p>
						<p>* Informes y confirmación de tu reservación (una vez realizada tu compra): <a href="tel:4492418386" style="background: #4caf50; color: #fff; padding: 5px 10px;"> 449 241 8386</a> </p>
					</div>
				</div>
			</div>
		</div>

		<div id="detalles" class="col s12 tab-content">
			<div class="col s8 offset-s2 hide-on-med-and-up">
				<img src="{{ asset('img/oceransky-bio.jpg') }}" class="responsive-img">
			</div>
			<div class="col s12 m8 text-justify">
		        <p>Cantautor nacido en la Ciudad de México en el año de 1975. Inicia su carrera artística en 1993. En el 2000 participa con Mario Domm como co-productor y arreglista en el disco “Títeres de tu” del poeta mexicano Edel Juárez e incluye su canción “La recuerdo así”.</p>
		        <p>En el año 2001 lanza su primer material discográfico llamado “Estoy aquí” bajo el sello Sony Music, en el 2002 forma parte del disco “El que la hace la canta” al lado de Reyli y Natalia Lafourcade entre ótros, bajo el mismo sello y el disco “Reflejos Acústicos” de Kirty Music, así como del Sound Track de la película “Corazones Rotos”.</p>
		        <p>Ha compartido escenario con grandes de la música como Tania Libertad, Hernaldo Zuñiga , Ismael Serrano, Pedro Guerra, Santiago Cruz, Francisco Céspedes, Alberto Plaza, José Cantoral, Armando Manzanero, Franco de Vita, Rossana, Alberto Cortés Y Reyli éste último lo tuvo como invitado especial en su concierto del Auditorio Nacional en noviembre del 2007.</p>
		        <p>Teniendo claro que la música no solo es una pasión si no su modo de vida, en 2014 arriesga todo y presenta, con el apoyo de la Comisión de Cultura de la H. Cámara de Diputados, CONACULTA, Secretaría de Turismo del Estado de Querétaro , el festival más grande habla hispana llamado “Trovafest” el cual ha reunido a más de 100 cantautores de diferentes nacionalidades contando en su última edición (2016) con una semana completa de conciertos, tres escenarios y una afluencia de miles de personas de varios países convirtiendo a dicha ciudad en “La capital de la Trova”.</p>
		        <p>Gracias a este festival comprobando una vez mas que la música rompe fronteras se une Pedro Guerra de España, Santiago Cruz de Colombia y Edgar Oceransky México en un disco único llamado “Pedro Santiago Edgar” donde reúnen sus mayores éxitos y los comparten teniendo una aceptación maravillosa dentro del publico de dichos cantautores el cual los lleva a hacer una gira dentro del territorio Nacional con localidades totalmente vendidas.</p>
				
			</div>
			<div class="col m4 hide-on-small-only">
				<img src="{{ asset('img/oceransky-bio.jpg') }}" class="responsive-img">
			</div>
			<div class="clearfix"></div>
			
		</div>

		<div id="lugares" class="col s12 tab-content">

			<div class="col s12">									
				<div class="white z-depth-2">
					<iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d231.39054371113036!2d-102.29312727583974!3d21.88649691230739!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x8429ee6447793003%3A0x67124546edac382d!2sCentro+Cultural+Tercera+Llamada!5e0!3m2!1ses!2smx!4v1552950651679" width="100%" height="450" frameborder="0" style="border:0" allowfullscreen></iframe>
				
					<div class=" p-30">
						<h5><b>La Tercera Llamada</b></h5>
						<ul class="qcAddress">
							<li><div class="divider"></div></li>
							<li><i class="fa fa-map-marker"></i> <strong>DIRECCIÓN</strong>: <p>Gral Álvaro Obregón 355, Zona Centro, 20000 Aguascalientes, Ags.</p></li>
							<li><i class="fa fa-calendar"></i> <strong>HORARIO</strong>: <p>Martes a Sábado de 10 am a 10 pm</p></li>
							<li><i class="fa fa-globe"></i> <strong>Website</strong>: <p><a title="website" href="https://www.facebook.com/pages/category/Restaurant/Tercera-Llamada-Restaurante-Cultural-246649588687732/" target="_blank">https://www.facebook.com/pages/category/Restaurant/Tercera-Llamada-Restaurante-Cultural-246649588687732/</a></p></li>
						</ul>
					</div>
				</div>

			</div>

		</div>

	</div>
</section>
<section class="section-video overlay overlay-5" style="background-image: url('https://img.youtube.com/vi/nciBA8f90EY/maxresdefault.jpg');">
	<div class="row center-align">
		<a class="white-text" id="modal-video-open" href="#modal-video" data-video="https://www.youtube.com/embed/nciBA8f90EY"><i class="material-icons">play_circle_filled</i></a>
		<p class="white-text"><i>Ella es un Volcán - Edgar Oceransky</i></p>
	</div>
</section>

<section id="compra" class="section-comprar">
	<div class="row mb-30">
		<div class="col s12 m4 offset-m4">
			<h5 class="mt-30 raleway quote">¡Aparta tus lugares!</h5>
		</div>
	</div>

	<div class="row mb-30 mt-30">
		@if(Auth()->check())
		<div class="col s12 m4 offset-m4">
				
			{!! Form::open(['route' => 'payment.details', 'method' => 'POST', 'id' => 'paymentForm'])!!}

{{-- 			<div class="row">
                    
                <div class="col s6">
                	<div class="col m12 zona-radio">
                		{!! Form::radio('zona', 'Diamante', false, ['id' => 'diamante', 'required', 'class' => 'form_zona']) !!}
                		{!! Form::label('diamante', 'Diamante') !!}
                	</div>
                </div>
                <div class="col s6">
                	<div class="col m12 zona-radio">
		                {!! Form::radio('zona', 'Oro', false, ['id' => 'oro', 'required', 'class' => 'form_zona']) !!}
		                {!! Form::label('oro', 'Oro') !!}
		            </div>
                </div>
                    
            </div> --}}
		
			<div class="row">
				<div class="input-field col s12">
					{!! Form::select('asiento', ['1' => '1', '2' => '2', '3' => '3', '4' => '4', '5' => '5', '6' => '6', '7' => '7', '8' => '8', '9' => '9', '10' => '10'], '', ['class' => 'select-dropdown', 'id' => 'asiento', 'placeholder' => 'Seleccione numero de asientos', 'required']) !!}
					{!! Form::label('asiento', 'Asientos') !!}
				</div>					
			
			</div>
		
			{!! Form::hidden('img', 'img/edgar-oceransky-ags.jpg') !!}
			{!! Form::hidden('evento', 'Edgar Oceransky') !!}
			{!! Form::hidden('fecha', '23 de agosto 2019') !!}
			{!! Form::hidden('lugar', 'La Tercera Llamada') !!}
			{!! Form::hidden('ciudad', 'Aguascalientes') !!}
			{!! Form::hidden('hora', '21:00 hrs') !!}
			{!! Form::hidden('event_type', 'general') !!}
			{!! Form::hidden('impresion_boleto', true) !!}
			{!! Form::hidden('zona', 'Diamante') !!}
			{!! Form::hidden('db_table', 'edgar_oceransky_ags_23ago') !!}
			{!! Form::hidden('info', 'Favor de comunicarte al numero 449 241 8386 para completar tu reservación.') !!}
			{!! Form::hidden('precio', 700) !!}
			{!! Form::hidden('url', url('eventos/edgar-oceransky-aguascalientes')) !!}
			
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
		<h5 class="center-align raleway">Venta de boletos también en "La Tercera Llamada", <br><small>Martes a Sábado de 10 am a 10 pm</small></h5>
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
		// var precios = {'Diamante': 700, 'Oro': 450};
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

		// $(".form_zona").click(function(){
		// 	$("#form_precio").val(precios[$(this).val()]);
		// });

	</script>

@endsection