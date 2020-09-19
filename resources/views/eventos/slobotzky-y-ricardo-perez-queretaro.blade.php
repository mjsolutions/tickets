@extends('layouts.main')

@section('title', 'Slobotzky y Ricardo Pérez')

@section('description', 'Slobotzky y Ricardo Pérez en Querétaro, 08 febrero 2020, 21:00 hrs., Teatro del IMSS')

@section('styles')
<meta property="og:url"  content="https://www.bolematico.com/eventos/slobotzky-y-ricardo-perez-queretaro" />
<meta property="og:title" content="Slobotzky y Ricardo Pérez" />
<meta property="og:description" content="Slobotzky y Ricardo Pérez, Queretaro 08 de febrero, Teatro del IMSS, 21:00 hrs boletos en bolematico.com" />
<meta property="og:image" content="https://www.bolematico.com/img/syr-queretaro.jpg" />
<script src="https://use.fontawesome.com/9b9c9dc667.js"></script>
<link rel="stylesheet" type="text/css" href="{{ asset('css/event-select-manual.css') }}">
@endsection

@section('content')

<div class="image-header bg-4 overlay overlay-5">

	<div class="row white-text">
		<h4>Slobotzky y Ricardo Pérez</h4>
		<div class="divider"></div>
		<p><i>Querétaro - Teatro del IMSS</i></p>
		<p><i>08 de febrero - 21:00 hrs.</i></p>
	</div>
	<a href="#compra" class="btn waves-light waves-effect page-scroll"><b>Comprar</b> <i class="fa fa-ticket" aria-hidden="true"></i></a>
</div>

<section class="container">
	<div class="row">
		<div class="col s12">
			<ul class="tabs">
				<li class="tab "><a class="active" href="#precios">Precios</a></li>
				<li class="tab "><a href="#detalles">Detalles</a></li>
				{{-- <li class="tab "><a href="#lugares">Lugares de venta</a></li> --}}
			</ul>
		</div>
		<div id="precios" class="col s12 tab-content">

			<div class="col s8 offset-s2 m4 offset-m1 mb-30">
				<img src="{{ asset('img/syr-queretaro.jpg') }}" alt="" class="responsive-img">
			</div>
			
			<div class="col s12 m5 offset-m1">				

				<div class="row">

					<div class="qcPricing col s12 center-align mb-10">
						<div class="box col s12">
							<header>
								<div class="col s12 teal accent-4">Diamante</div>
							</header>
							<div class="price col s12"><span>$ 480</span> MXN.</div>
						</div>
					</div>

					<div class="qcPricing col s12 center-align mb-10">
						<div class="box col s12">
							<header>
								<div class="col s12 amber darken-1">Oro</div>
							</header>
							<div class="price col s12"><span>$ 430</span> MXN.</div>
						</div>
					</div>

				</div>

				<div class="row">
					<div class="divider"></div>
					
                    <div class="col s10 offset-s1 m8 offset-m2">
                        <p> * Al realizar tu compra en línea se realiza un cargo extra de 10% por concepto de servicio.</p>
                        {{-- <p class="mb-0"> * Informes</p>
                        <ul style="margin-top: 0;padding-left: 15px;">
                            <li><i class="fa fa-phone"></i> <a href="tel:4521741255" target="_blank">452-174-1255</a></li>
                        </ul> --}}
                    </div>
					
				</div>
			</div>
		</div>

		<div id="detalles" class="col s12 tab-content">
			<div class="col s12">
				<h5 class="raleway quote">Solobotzky</h5>
			</div>
			<div class="col s8 offset-s2 hide-on-med-and-up">
				<img src="{{ asset('img/slobotzky-bio.jpg') }}" class="responsive-img">
			</div>
				
			<div class="col s12 m8">	
				<p>Anécdotas que terminan en carcajadas, historias que conectan, sin filtros, así es la comedia de <a rel="nofollow" target="_blank" href="https://www.facebook.com/SlobotzkyStandUp/">Slobotzky</a>, el comediante que nació de la ya extinta plataforma “Vine” y ahora conquista los escenarios del país.</p>
				<p>La escuela no se le dio, pero aún así, la terminó, menciona dentro de su presentación, razón que lo orilló a definir en qué realmente era bueno. Abogado de profesión, José Luis “Slobotzky”, su nombre de pila, descubrió seis meses después de terminar la carrera que lo suyo era hacer reír.</p>
				<p>Fue Vine, la plataforma de “moda” del 2013, quien le abriera las puertas mediante pequeños videos para compartir sus chistes. Estaba destinado, siempre fue el chistoso de sus amigos y de su familia. Con los videos llegó la popularidad, los seguidores aumentaron en miles en cuestión de semanas. El siguiente paso se le abrió cuando <em>Gon Curiel</em>, un reconocido standupero de México, lo invitó a sumarse al mundo del “Stand Up” por parecerle "chistoso". Había llegado la hora de romper la barrera de las redes sociales y enfrentarse al público cara a cara.</p>
				<p>Desde entonces alterna con sus pequeños videos que sube en su página de Facebook con las presentaciones de su espectáculo que ha llevado a distintas ciudades del país dejando una semilla para ganar impulso y popularidad.</p>

			</div>
			<div class="col m4 hide-on-small-only">
				<img src="{{ asset('img/slobotzky-bio.jpg') }}" class="responsive-img">
			</div>
			<div class="clearfix"></div>
			<div class="col s12">
				<h5 class="raleway quote">Ricardo Pérez</h5>
			</div>
			<div class="col m4 s12">
				<img src="{{ asset('img/ricardo-perez-bio.jpg') }}" class="responsive-img">
			</div>
			<div class="col s12 m8">	
				<p><strong>Ricardo Pérez</strong> es un comediante joven y fresco en la escenaadel stand up mexicano.</p>
				<p>Su humor se caracteriza por exponer aquellos temas que te hacen decir "me ha pasado, lo había pensado, pero nunca lo dije". Todas esas locuras y absurdos que te adentran en el parque de diversiones que tiene dentro de su cabeza.</p>
				<p>Se ha destacado como un talento que ha ascendido rápidamente en la escena. Ha grabado para <em>STANDparados</em> de Distrito Comedia y <em>Comedy Central presenta: Stand Up</em> dos veces. Su show le ha dado la vuelta a la toda la república y un par de paradas en el extranjero.</p>
				<p>La carrera de Ricardo lo ha llevado a tocar todo tipo de escenarios: desde trajineras y taquerías hasta el Auditorio Nacional y el <em>Festival Internacional Vive Latino</em>.</p>
			</div>		
			<div class="clearfix"></div>
		</div>

		{{-- <div id="lugares" class="col s12 tab-content">
            
            <div class="col s12">
				<h5 class="mb-30 quote">Además de Bolematico, puedes adquirir tus entradas en:</h5>
			</div>

			<div class="col s12">									
				<div class="white z-depth-2">
					<iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3734.799498426775!2d-100.39395018559972!3d20.596244107779615!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x85d35b2975a8d68f%3A0xdf13453c0e244eca!2sEl+Porton+de+Santiago!5e0!3m2!1ses!2smx!4v1550796654851" width="100%" height="450" frameborder="0" style="border:0" allowfullscreen></iframe>

					<div class=" p-30">
						<h5 class="raleway"><b>El Portón de Santiago</b></h5>
						<ul class="qcAddress">
							<li><div class="divider"></div></li>
							<li><i class="fa fa-map-marker"></i> <p> Av. Prol. Luis Pasteur 37, Centro, 76000 Santiago de Querétaro, Qro.</p></li>
							<li><i class="fa fa-facebook-official"></i><p><a title="website" href="https://www.facebook.com/ElPortondeSantiago/" target="_blank">https://www.facebook.com/ElPortondeSantiago/</a></p></li>
						</ul>
					</div>
				</div>

			</div>	

		</div> --}}

	</div>
</section>
<section class="section-video overlay overlay-5" style="background-image: url('https://img.youtube.com/vi/WgO76VAYgfs/maxresdefault.jpg');">
	<div class="row center-align">
		<a class="white-text" id="modal-video-open" href="#modal-video" data-video="https://www.youtube.com/embed/WgO76VAYgfs"><i class="material-icons">play_circle_filled</i></a>
		<p class="white-text"><i>La Cotorrisa - Anecdotario - Me di a la mamá de mi novia Ft. Pepe y Teo</i></p>
	</div>
</section>

<section id="compra" class="section-comprar">
	<div class="row mt-30">
	@if(Auth()->check())
		<div class="col s12 mb-15">
			<h5 class="mt-30 raleway quote">Da clic en el bloque que deseas para mostrar los asientos disponibles</h5>
		</div>
		<div class="col s12 m6 white z-depth-1">
			@include('maps.teatro-imss-queretaro-2s')
		</div>
		<div class="col s12 m6">
			<div class="col s12 mb-15">
				<div class="col s1 grey darken-4" style="height: 25px;"></div>
				<div class="col s11">
					<div class="col s5">Escenario</div>
					<div class="col s7 right-align" id="info-title-section"></div>
				</div>
			</div>
			<div class="col s11 bloque-container">
				
				<div id="mapa-escenario" class=""></div>
				<div id="mapa-asientos" class="col s12"></div>
			</div>
			<div class="col s12 mt-15">
				<p id="ticket-message"></p>
			</div>
			<div class="col s12 center-align mt-15">
				<a href="javascript:;" id="checkout" class="btn waves-effect waves-light orange accent-3 hide">SIGUIENTE</a>
				{!! Form::open(['route'=>'payment.details', 'method'=>'POST', 'id' => 'checkout-form', 'style' => 'display:none;']) !!}

					{!! Form::hidden('asiento', '', ['id' => 'form_asiento']) !!}
					{!! Form::hidden('zona', '', ['id' => 'form_zona']) !!}
					{!! Form::hidden('precio', '', ['id' => 'form_precio']) !!}
					{!! Form::hidden('img', 'img/syr-queretaro.jpg') !!}
					{!! Form::hidden('evento', 'Slobotzky y Ricardo Pérez') !!}
					{!! Form::hidden('fecha', '08 febrero 2020') !!}
					{!! Form::hidden('lugar', 'Teatro del IMSS') !!}
					{!! Form::hidden('ciudad', 'Querétaro') !!}
					{!! Form::hidden('hora', '21:00 hrs') !!}
					{!! Form::hidden('event_type', 'numerado') !!}
					{!! Form::hidden('impresion_boleto', true) !!}
					{!! Form::hidden('db_table', 'syr_queretaro_08feb') !!}
					{!! Form::hidden('info', '--') !!}
					{!! Form::hidden('select_type', 'manual') !!}
					{!! Form::hidden('url', url('eventos/slobotzky-y-ricardo-perez-queretaro')) !!}
				{!! Form::close() !!}
			</div>
		</div>
	

	@else

		<p class="center-align raleway">Debes iniciar sesion para poder realizar la compra</p>
		<div class="col s12 center-align">
			<a href="#modal-login" class="modal-login-open btn waves-light orange accent-3">Login</a>
		</div>
	@endif
	</div>
	<div class="row mt-30">
		<div class="col m8 offset-m2">
			{{-- <h5 class="center-align raleway">Venta de boletos también en El Portón de Santiago</h5> --}}
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
			<iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3735.17172671282!2d-100.40751538559995!3d20.581043508288417!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x85d3452e1c0f96e7%3A0x80b97b2d179ad962!2sTeatro+del+IMSS+Quer%C3%A9taro!5e0!3m2!1ses!2smx!4v1560207714901!5m2!1ses!2smx" width="100%" height="450" frameborder="0" style="border:0" allowfullscreen></iframe>
		</div>
		<div class="col m3">
			<h5 class="quote raleway">Lugar del evento</h5>
			
			<h5 class="mt-30">Teatro del IMSS</h5>
			<div class="col s10">
				<div class="divider"></div>
			</div>
			<ul class="fa-ul" style="margin-top: 30px;">
				<li class="mb-10"><i class="fa-li fa fa-map-marker"></i> Av. 5 de Febrero 102, <br>Centro, 76000 <br>Santiago de Querétaro, Qro.</li>
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
		var table = 'syr_queretaro_08feb';
		var precios = {'Diamante': 480, 'Oro': 430};
		var base_path = '{{ url('/') }}';
		var special_char_n = 'N-';

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
	<script src="{{asset('js/event_manual_v3.js')}}"></script>

@endsection