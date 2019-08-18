@extends('layouts.main')

@section('title', 'Francisco Barrios "El Mastuerzo"')

@section('description', 'Francisco Barrios "El Mastuerzo", Querétaro 08 de agosto, El Portón de Santiago, 21:00 hrs boletos en El Portón de Santiago y bolematico.com')

@section('styles')
<meta property="og:url"  content="https://www.bolematico.com/eventos/francisco-barrios-queretaro" />
<meta property="og:title" content='Francisco Barrios "El Mastuerzo"' />
<meta property="og:description" content='Francisco Barrios "El Mastuerzo", Querétaro 08 de agosto, El Portón de Santiago, 21:00 hrs boletos en El Portón de Santiago y bolematico.com' />
<meta property="og:image" content="https://www.bolematico.com/img/francisco-barrios-queretaro.jpg" />

<script src="https://use.fontawesome.com/9b9c9dc667.js"></script>
@endsection

@section('content')

<div class="image-header bg-4 overlay overlay-5">

	<div class="row white-text">
		<h4>Francisco Barrios <br> <small>"El Mastuerzo"</small></h4>
		<div class="divider"></div>
		<p class="mb-0"><i>El Portón de Santiago - Querétaro</i></p>
		<p class="m-0"><i>08 de agosto - 21:00 hrs.</i></p>
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
				<img src="{{ asset('img/francisco-barrios-queretaro.jpg') }}" alt="" class="responsive-img">
			</div>
			
			<div class="col s12 m6 offset-m1">				

				<div class="row">

					<div class="qcPricing col s12 center-align mb-10">
						<div class="box col s12">
							<header>
								<div class="col s12 teal accent-4">General</div>
							</header>
							<div class="price col s12"><span>$200</span> MXN</div>
						</div>
					</div>

				</div>

				<div class="row">
					<div class="divider"></div>
					<div class="col s10 offset-s1 m8 offset-m2">
						<p>* Al realizar tu compra en línea se realiza un cargo extra de <b>10%</b> por concepto de servicio.</p>
						<p class="mb-0"> * Informes y confirmación de tu compra:</p>
						<ul style="margin-top: 0;padding-left: 15px;">
							<li><i style="background-color: #4caf50; color: #fff; border-radius: 50%;" class="fa fa-whatsapp"></i> <a href="https://api.whatsapp.com/send?phone=524427400671" target="_blank">442-740-0671</a></li>
						</ul>
					</div>
				</div>
			</div>
		</div>

		<div id="detalles" class="col s12 tab-content">
			<div class="col s8 offset-s2 hide-on-med-and-up">
				<img src="{{ asset('img/francisco-barrios-bio.jpg') }}" class="responsive-img">
			</div>
				
			<div class="col s12 m9">	
        	<p>Francisco Arturo Barrios Martínez, mejor conocido como El mastuerzo, nació un 23 de noviembre en Tulancingo, Hidalgo. Es el cuarto y menor de los hijos de la señora Raquel Martínez; su padre David Barrios y sus hermanos Gloria Edith, Clemente y David. Es antropólogo de carrera pero “psiquiatra de naturaleza”, afirma.</p>
        	<p>Emigra a la Ciudad de México en 1971 donde estudia el nivel medio superior y, de 1976 a 1984, forma parte del grupo Los nakos, surgido como brigada cultural del Consejo Nacional de Huelga del Movimiento Estudiantil de 1968, agrupación con la que realiza materiales discográficos como Los nakos y La lengua, entre otros. Además, participa en diversas giras, festivales y encuentros de canción y teatro en países de Europa, así como Estados Unidos, Cuba y, por supuesto, México, entre otros</p>
        	<p>Paralelamente a este proyecto, en 1983 junto con Armando Vega-Gil y Sergio Arau, forma una de las bandas más representativas del rock mexicano: Botellita de Jerez, que graba discos como Charrock and Roll y ¡Naco es chido!, sólo por mencionar algunos.</p>
        	<p>En 1996 el cuarteto se despide y realiza el concierto El último Guacarrock, que le da título a la última grabación de la banda que, años después, se reencuentra con los integrantes originales y comienza una nueva etapa con distintas producciones como Viva Tin-Tan (banda sonora de la película Piedras Verdes) y Tributo a Los Tigres del Norte.</p>
        	<p>En 1996, como una necesidad de expresión individual, lanza su primera producción como solista titulada Prohibido, bajo el sello discográfico BMG-Culebra, que mezcla canciones con temáticas de amor, protesta, humor y sátira. Cinco años más tarde, El mastuerzo saca su segundo disco Podrid@, acompañado por la Banda Karnede®es y la participación de su hija Valentina Barrios, mientras que en 2008 lanza Tributo a la otra Kanción Popular Mexicana, homenaje a los que se dedican a la creación de la canción y al quehacer artístico.</p>
        	<p>En 2015, la Sociedad de Autores y Compositores de México (SACM) le entrega el reconocimiento Trayectoria 25 y Más…</p>
        	<p>Fuente: <small>http://www.sacm.org.mx/biografias/biografias-interior.asp?txtSocio=25028</small></p>                

			</div>
			<div class="col s3 hide-on-small-only">
				<img src="{{ asset('img/francisco-barrios-bio.jpg') }}" class="responsive-img">
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
<section class="section-video overlay overlay-5" style="background-image: url('https://img.youtube.com/vi/0ZChXSrHu-Y/hqdefault.jpg');">
	<div class="row center-align">
		<a class="white-text" id="modal-video-open" href="#modal-video" data-video="https://www.youtube.com/embed/0ZChXSrHu-Y"><i class="material-icons">play_circle_filled</i></a>
		<p class="white-text"><i>Francisco Barrios "El Mastuerzo" - Prohibido</i></p>
	</div>
</section>

<section id="compra" class="section-comprar">
	<div class="row mb-30">
		<div class="col s12 m4 offset-m4">
			<h5 class="mt-30 raleway quote">¡Aparta tus lugares!</h5>
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
		
			{!! Form::hidden('img', 'img/francisco-barrios-queretaro.jpg') !!}
			{!! Form::hidden('evento', 'Francisco Barrios "El Mastuerzo"') !!}
			{!! Form::hidden('fecha', '08 de agosto 2019') !!}
			{!! Form::hidden('lugar', 'El Portón de Santiago') !!}
			{!! Form::hidden('ciudad', 'Querétaro, Quer.') !!}
			{!! Form::hidden('hora', '21:00 hrs') !!}
			{!! Form::hidden('event_type', 'general') !!}
			{!! Form::hidden('impresion_boleto', true) !!}
			{!! Form::hidden('zona', 'General') !!}
			{!! Form::hidden('db_table', 'fco_barrios_quer_08ago') !!}
			{!! Form::hidden('info', 'Favor de comunicarte al numero 442-740-0671 para completar tu reservación.') !!}
			{!! Form::hidden('precio', 200) !!}
			{!! Form::hidden('url', url('eventos/francisco-barrios-queretaro')) !!}
			
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
	<div class="row">
		<div class="col m9">
			<iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3734.799498426775!2d-100.39395018559972!3d20.596244107779615!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x85d35b2975a8d68f%3A0xdf13453c0e244eca!2sEl+Porton+de+Santiago!5e0!3m2!1ses!2smx!4v1550796654851" width="100%" height="450" frameborder="0" style="border:0" allowfullscreen></iframe>
		</div>
		<div class="col m3">
			<h5 class="quote raleway">Lugar del evento</h5>
			
			<h5 class="mt-30">El Portón de Santiago</h5>
			<div class="col s10">
				<div class="divider"></div>
			</div>
			<ul class="fa-ul" style="margin-top: 30px;">
				<li class="mb-10"><i class="fa-li fa fa-map-marker"></i> Av. Prol. Luis Pasteur 37, <br> Centro, 76000 <br> Santiago de Querétaro, Qro.</li>
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