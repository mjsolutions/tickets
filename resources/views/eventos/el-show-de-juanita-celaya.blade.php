@extends('layouts.main')

@section('title', 'El Show de Juanita Celaya, Gto.')

@section('description', 'El Show de Juanita en Celaya, Gto., 23 de agosto 2019, 21:00 hrs BLVD 804')

@section('styles')
<meta property="og:url"  content="https://www.bolematico.com/eventos/el-show-de-juanita-celaya" />
<meta property="og:title" content="El Show de Juanita" />
<meta property="og:type" content="article" />
<meta property="og:description" content="El Show de Juanita, Celaya 23 de agosto, BLVD 804, 21:00 hrs boletos en BVLD 804 y bolematico.com" />
<meta property="og:image" content="https://www.bolematico.com/img/juanita-celaya.jpg" />
<script src="https://use.fontawesome.com/9b9c9dc667.js"></script>
@endsection

@section('content')

<div class="image-header bg-4 overlay overlay-5">

	<div class="row white-text">
		<h4>El Show de Juanita</h4>
		<div class="divider"></div>
		<p><i>Celaya, Gto. - BLVD 804</i></p>
		<p><i>23 de agosto - 21:00 hrs.</i></p>
	</div>
	<a href="#compra" class="btn waves-light waves-effect page-scroll"><b>Comprar</b> <i class="fa fa-ticket" aria-hidden="true"></i></a>
</div>

<section class="container">
	<div class="row">
		<div class="col s12">
			<ul class="tabs">
				<li class="tab "><a class="active" href="#precios">Precios</a></li>
				<li class="tab "><a href="#biografia">Biografía</a></li>
				<li class="tab "><a href="#lugares">Lugares de venta</a></li>
			</ul>
		</div>
		<div id="precios" class="col s12 tab-content">

			<div class="col s8 offset-s2 m4 offset-m1 mb-30">
				<img src="{{ asset('img/juanita-celaya.jpg') }}" alt="" class="responsive-img">
			</div>
			
			<div class="col s12 m5 offset-m1">				

				<div class="row">

					<div class="qcPricing col s12 center-align mb-10">
						<div class="box col s12">
							<header>
								<div class="col s12 teal accent-4">Preventa</div>
							</header>
							<div class="price col s12"><span>$ 150</span> MXN.</div>
						</div>
					</div>

					<p class="center-align raleway">Día del evento $ <strong>200</strong> MXN</p>

				</div>

				<div class="row">
					<div class="divider"></div>
					
						<div class="col s10 offset-s1">
							<p> * Al realizar tu compra en línea se realiza un cargo extra por concepto de servicio.</p>
							<p> * Informes y reservaciones (una vez realizada tu compra):</p>
							<ul style="margin-top: 0;padding-left: 15px;">
								<li><i class="fa fa-phone"></i> <a href="tel:4613458806 " style="background: #4caf50; color: #fff; padding: 5px 10px;"> 461-345-8806 </a></li>
							</ul>
						</div>
						{{-- <li>Informes:</b> <a href="tel:4431880358" style="background: #4caf50; color: #fff; padding: 5px 10px;"> 443-188-0358</a></li> --}}
					
				</div>
			</div>
		</div>

		<div id="biografia" class="col s12 tab-content">
			<div class="col s12">	
		    <p>Marco Polo, nacido en la ciudad de Monterrey.</p>
				<p>Desde que tenía 5 años su hobbie era ver obras de teatro, pero fue hasta secundaria cuando se dio cuenta de su habilidad vocal ya que imitaba las voces de sus maestros, su amor por el arte del espectáculo lo llevó a estudiar en el Sistema de Educación Artística de Monterrey desde donde es agresado.</p>
				<p>Con su actuación en la obra "Tócala de nuevo" logró  más de 350 representación posicionandose como una de las puestas en escenas favoritas de la ciudad.</p>
				<p>Su personaje de "Juanita 'la niña más caballona y bipolar de México' lo ha colocado como uno de los comediantes y actores favoritos del país, y hasta el momento continúa en el gusto del público.</p>
				<p>Su personaje de "Juanita" lo ha llevado al mundo del Internet, ya que a través de su canal de youtube  cuenta las historias de 'niña' con los que ha conseguido miles de reproducciones y más 24 mil suscriptores. </p>				
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
					<iframe src="https://www.google.com/maps/embed?pb=!1m14!1m8!1m3!1d8634.35608692352!2d-100.82337042627393!3d20.5195282465618!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x0%3A0xe3152c8f48bd2c54!2sBlvd+804+Show+Center+%26+Food!5e0!3m2!1ses!2smx!4v1556144914999!5m2!1ses!2smx" width="100%" height="450" frameborder="0" style="border:0" allowfullscreen></iframe>
				
				<!-- ## ADDRESS LIST ## -->
					<div class=" p-30">
						<h5 class="raleway"><b>BLVD 804</b></h5>
						<ul class="qcAddress">
							<li><div class="divider"></div></li>
							<li><i class="fa fa-map-marker"></i> <p> Blvrd Adolfo López Mateos 804, Col. Centro, 38000 Celaya, Gto.</p></li>
							<li><i class="fa fa-phone"></i><p> 01 461 273 6643</p></li>
							<li><i class="fa fa-facebook-official"></i><p><a title="website" href="https://www.facebook.com/Blvd804Oficial/" target="_blank">https://www.facebook.com/Blvd804Oficial/</a></p></li>
						</ul>
					</div>
				</div>

			</div>			

		</div>

	</div>
</section>
<section class="section-video overlay overlay-5" style="background-image: url('https://img.youtube.com/vi/3Tgvd-HbmQk/maxresdefault.jpg');">
	<div class="row center-align">
		<a class="white-text" id="modal-video-open" href="#modal-video" data-video="https://www.youtube.com/embed/3Tgvd-HbmQk"><i class="material-icons">play_circle_filled</i></a>
		<p class="white-text"><i>Juanita - Caricaturas retro parte 2</i></p>
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
		
			{!! Form::hidden('img', 'img/juanita-celaya.jpg') !!}
			{!! Form::hidden('evento', 'El Show de Juanita') !!}
			{!! Form::hidden('fecha', '23 de agosto 2019') !!}
			{!! Form::hidden('lugar', 'BLVD 804') !!}
			{!! Form::hidden('ciudad', 'Celaya, Gto.') !!}
			{!! Form::hidden('hora', '21:00 hrs') !!}
			{!! Form::hidden('event_type', 'general') !!}
			{!! Form::hidden('impresion_boleto', true) !!}
			{!! Form::hidden('zona', 'Preventa') !!}
			{!! Form::hidden('db_table', 'juanita_celaya_23ago') !!}
			{!! Form::hidden('info', 'Favor de comunicarte al numero 461-345-8806 para completar tu reservación.') !!}
			{!! Form::hidden('precio', 150) !!}
			{!! Form::hidden('url', url('eventos/el-show-de-juanita-celaya')) !!}
			
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
			<iframe src="https://www.google.com/maps/embed?pb=!1m14!1m8!1m3!1d8634.35608692352!2d-100.82337042627393!3d20.5195282465618!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x0%3A0xe3152c8f48bd2c54!2sBlvd+804+Show+Center+%26+Food!5e0!3m2!1ses!2smx!4v1556144914999!5m2!1ses!2smx" width="100%" height="450" frameborder="0" style="border:0" allowfullscreen></iframe>
		</div>
		<div class="col m3">
			<h5 class="quote raleway">Lugar del evento</h5>
			
			<h5 class="mt-30">BLVD 804</h5>
			<div class="col s10">
				<div class="divider"></div>
			</div>
			<ul class="fa-ul" style="margin-top: 30px;">
				<li class="mb-10"><i class="fa-li fa fa-map-marker"></i> Blvd. Adolfo López Mateos #804, <br>Col. Centro C.P. 38070 <br>Celaya, Gto.</li>
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