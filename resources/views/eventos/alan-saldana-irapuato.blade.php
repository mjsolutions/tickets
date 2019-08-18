@extends('layouts.main')

@section('title', 'Alan Saldaña')

@section('description', 'Alan Saldaña, Irapuato Gto., Bar Mojitos 29 de agosto, 21:00 hrs boletos en Bar Mojitos, Mil Amores, Planeta Rock y bolematico.com')

@section('styles')
<meta property="og:url"  content="https:www//bolematico.com/eventos/alan-saldana-irapuato" />
<meta property="og:title" content="Alan Saldaña" />
<meta property="og:description" content="Alan Saldaña, Irapuato Gto., Bar Mojitos 29 de agosto, 21:00 hrs boletos en Bar Mojitos, Mil Amores, Planeta Rock y bolematico.com" />
<meta property="og:image" content="https://www.bolematico.com/img/alan-saldana-irapuato.jpg" />

<script src="https://use.fontawesome.com/9b9c9dc667.js"></script>
@endsection

@section('content')

<div class="image-header bg-4 overlay overlay-5">

	<div class="row white-text">
		<h4>Alan Saldaña</h4>
		<div class="divider"></div>
		<p class="mb-0"><i>Bar Mojitos - Irapuato Gto.</i></p>
		<p class="m-0"><i>29 de agosto - 21:00 hrs.</i></p>
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
				<img src="{{ asset('img/alan-saldana-irapuato.jpg') }}" alt="" class="responsive-img">
			</div>
			
			<div class="col s12 m5 offset-m1">				

				<div class="row">

					<div class="qcPricing col s12 center-align mb-10">
						<div class="box col s12">
							<header>
								<div class="col s12 teal accent-4">Preventa</div>
							</header>
							<div class="price col s12"><span>$330</span> MXN</div>
						</div>
					</div>

				</div>

				<div class="row">
					<div class="divider"></div>
					<div class="col s10 offset-s1">
						<p>* Al realizar tu compra en línea se realiza un cargo extra de <b>10%</b> por concepto de servicio.</p>
						<p> * Informes y confirmación de tu reservación (una vez realizada tu compra) <br> <a href="tel:4626211442" style="background: #4caf50; color: #fff; padding: 5px 10px;">462-621-1442</a> / <a href="tel:4521741255" style="background: #4caf50; color: #fff; padding: 5px 10px;"> 452-174-1255</a></p>
					</div>
				</div>
			</div>
		</div>

		<div id="detalles" class="col s12 tab-content">
			<div class="col s8 offset-s2 hide-on-med-and-up">
				<img src="{{ asset('img/alan-saldana-bio.jpg') }}" class="responsive-img">
			</div>
				
			<div class="col s12 m9">	
				<p>Alan Saldaña, el AS de la comedia.</p><p>Joven y con un gran ángel y talento. Es una comedia sumamente divertida. A pesar de tener relativamente pocos años en la comedia, Alan ha cautivado y sorprendido a todo el público con sus originales monólogos y rutinas. Una verdadera inversión que provoca grandes carcajadas a todos.</p><p>Su meta no es ser el comediante más famoso del mundo, lo que Alan Saldaña quiere es conquistar toda Latinoamérica y llevar su comedia hasta donde pueda llegar, a escenarios donde tenga que poner a prueba su talento.</p>
			</div>
			<div class="col m3 hide-on-small-only">
				<img src="{{ asset('img/alan-saldana-bio.jpg') }}" class="responsive-img">
			</div>
			<div class="clearfix"></div>			
		</div>

		<div id="lugares" class="col s12 tab-content">
			<div class="col s12">
				<h5 class="mb-30 quote">Además de Bolematico, puedes adquirir tus entradas en:</h5>
			</div>

			<div class="col m4 s12">									
				<div class="white z-depth-2">
					<iframe src="https://www.google.com/maps/embed?pb=!1m14!1m8!1m3!1d14931.174282875814!2d-101.3693368!3d20.6779757!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x0%3A0xbb1fc540ff07ff50!2sLos+Mojitos!5e0!3m2!1ses!2smx!4v1564697633063!5m2!1ses!2smx" width="100%" height="450" frameborder="0" style="border:0" allowfullscreen></iframe>
				
					<div class=" p-30">
						<h5><b>Los Mojitos Bar</b></h5>
						<ul class="qcAddress">
							<li><div class="divider"></div></li>
							<li><i class="fa fa-map-marker"></i> <strong>DIRECCIÓN</strong>: <p>Génova 413, Residencial Campestre, 36698 Irapuato, Gto.</p></li>
							<li><i class="fa fa-calendar"></i> <strong>HORARIO</strong>: <p>Viernes y Sábado de 8 pm a 3 am</p></li>
							<li><i class="fa-li fa fa-facebook"></i> <strong>Facebook</strong>: <p><a title="website" href="https://www.facebook.com/Los-Mojitos-Tropical-Club-332352286775615/" target="_blank">/Los-Mojitos-Tropical-Club-332352286775615/</a></p></li>
						</ul>
					</div>
				</div>

			</div>

			<div class="col m4 s12">									
				<div class="white z-depth-2">
					<iframe src="https://www.google.com/maps/embed?pb=!1m14!1m8!1m3!1d14929.62189312889!2d-101.3695608!3d20.6937531!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x0%3A0xcd9063388f27ba81!2sMil+Amores!5e0!3m2!1ses!2smx!4v1564698126449!5m2!1ses!2smx" width="100%" height="450" frameborder="0" style="border:0" allowfullscreen></iframe>
				
					<div class=" p-30">
						<h5><b>Mil Amores</b></h5>
						<ul class="qcAddress">
							<li><div class="divider"></div></li>
							<li><i class="fa fa-map-marker"></i> <strong>DIRECCIÓN</strong>: <p>Cd Deportiva, 36612 Irapuato, Gto.</p></li>
							<li><i class="fa fa-calendar"></i> <strong>HORARIO</strong>: <p>Jueves a Sábado de 7 pm a 3 am</p></li>
							<li><i class="fa-li fa fa-facebook"></i> <strong>Facebook</strong>: <p><a title="website" href="https://www.facebook.com/MilAmoresCantaBar/" target="_blank">/MilAmoresCantaBar/</a></p></li>
						</ul>
					</div>
				</div>

			</div>

			<div class="col m4 s12">									
				<div class="white z-depth-2">
					<iframe src="https://www.google.com/maps/embed?pb=!1m14!1m8!1m3!1d14931.555747418564!2d-101.34725!3d20.674097!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x0%3A0xbc2615880b7561a2!2sPlaneta+Rock!5e0!3m2!1ses!2smx!4v1564698265513!5m2!1ses!2smx" width="100%" height="450" frameborder="0" style="border:0" allowfullscreen></iframe>
				
					<div class=" p-30">
						<h5><b>Planeta Rock</b></h5>
						<ul class="qcAddress">
							<li><div class="divider"></div></li>
							<li><i class="fa fa-map-marker"></i> <strong>DIRECCIÓN</strong>: <p>Juárez 195, Col. Centro, 36500 Irapuato, Gto.</p></li>
							<li><i class="fa fa-calendar"></i> <strong>HORARIO</strong>: <p>Lunes a Sábado 12 pm a 7 pm</p></li>
							<li><i class="fa-li fa fa-facebook"></i> <strong>Facebook</strong>: <p><a title="website" href="https://www.facebook.com/pages/category/Movie---Music-Store/Planeta-Rock-Discos-1991061171184252/" target="_blank">/pages/category/Movie---Music-Store/Planeta-Rock-Discos-1991061171184252/</a></p></li>
						</ul>
					</div>
				</div>

			</div>

		</div>

	</div>
</section>
<section class="section-video overlay overlay-5" style="background-image: url('https://img.youtube.com/vi/3Sbdd-L0_zQ/maxresdefault.jpg');">
	<div class="row center-align">
		<a class="white-text" id="modal-video-open" href="#modal-video" data-video="https://www.youtube.com/embed/3Sbdd-L0_zQ"><i class="material-icons">play_circle_filled</i></a>
		<p class="white-text"><i>Alan Saldaña | Monologo "MUJERES CELOSAS"</i></p>
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
		
			{!! Form::hidden('img', 'img/alan-saldana-irapuato.jpg') !!}
			{!! Form::hidden('evento', 'Alan Saldaña') !!}
			{!! Form::hidden('fecha', '29 de agosto 2019') !!}
			{!! Form::hidden('lugar', 'Bar Mojitos') !!}
			{!! Form::hidden('ciudad', 'Irapuato Gto.') !!}
			{!! Form::hidden('hora', '21:00 hrs') !!}
			{!! Form::hidden('event_type', 'general') !!}
			{!! Form::hidden('impresion_boleto', true) !!}
			{!! Form::hidden('zona', 'Preventa') !!}
			{!! Form::hidden('db_table', 'alan_saldana_irapuato_29ago') !!}
			{!! Form::hidden('info', 'Favor de comunicarte al numero 462 621 1442 o 452 174 1255 para completar tu reservación.') !!}
			{!! Form::hidden('precio', 330) !!}
			{!! Form::hidden('url', url('eventos/alan-saldana-irapuato')) !!}
			
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
			<iframe src="https://www.google.com/maps/embed?pb=!1m14!1m8!1m3!1d14931.174282875814!2d-101.3693368!3d20.6779757!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x0%3A0xbb1fc540ff07ff50!2sLos+Mojitos!5e0!3m2!1ses!2smx!4v1564697633063!5m2!1ses!2smx" width="100%" height="450" frameborder="0" style="border:0" allowfullscreen></iframe>
		</div>
		<div class="col m3">
			<h5 class="quote raleway">Lugar del evento</h5>
			
			<h5 class="mt-30">Los Mojitos bar</h5>
			<div class="col s10">
				<div class="divider"></div>
			</div>
			<ul class="fa-ul" style="margin-top: 30px;">
				<li class="mb-10"><i class="fa-li fa fa-map-marker"></i> Génova 413, <br>Residencial Campestre, 36698 <br> Irapuato, Gto.</li>
				<li><i class="fa-li fa fa-facebook"></i> <a title="website" style="color:#434546" href="https://www.facebook.com/Los-Mojitos-Tropical-Club-332352286775615/" target="_blank">https://www.facebook.com/Los-Mojitos-Tropical-Club-332352286775615/</a></li>
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