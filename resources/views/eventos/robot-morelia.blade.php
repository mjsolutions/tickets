@extends('layouts.main')

@section('title', 'Robot')

@section('description', 'Robot, Salón Club de Leones Morelia, 02 de mayo, 20:00 hrs boletos en bolematico.com')

@section('styles')
<meta property="og:url"  content="https:www//bolematico.com/eventos/robot-morelia" />
<meta property="og:title" content="Robot" />
<meta property="og:description" content="Robot, Salón Club de Leones Morelia, 02 de mayo, 20:00 hrs boletos en bolematico.com" />
<meta property="og:image" content="https://www.bolematico.com/img/robot-morelia.jpg" />

<script src="https://use.fontawesome.com/9b9c9dc667.js"></script>
<link rel="stylesheet" type="text/css" href="{{ asset('css/event-select-general.css') }}">
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
	#btn-lugares{
		cursor: pointer;
	}
	#btn-lugares:hover {
		color: #656869;
	}
</style>
@endsection

@section('content')

<div class="image-header bg-4 overlay overlay-5">

	<div class="row white-text">
		<h4>Robot</h4>
		<div class="divider"></div>
		<p class="mb-0"><i>Salón Club de Leones - Morelia, Mich.</i></p>
		<p class="m-0"><i>02 de mayo - 20:00 hrs.</i></p>
	</div>
	<a href="#compra" class="btn waves-light waves-effect page-scroll"><b>Comprar</b> <i class="fa fa-ticket" aria-hidden="true"></i></a>
</div>

<section class="container">
	<div class="row">
		<div class="col s12">
			<ul class="tabs">
				<li class="tab "><a class="active" href="#precios">Precios</a></li>
				{{-- <li class="tab "><a href="#detalles">Detalles</a></li> --}}
				{{-- <li class="tab "><a id="tab_link-lugares" href="#lugares">Lugares de venta</a></li> --}}
			</ul>
		</div>
		<div id="precios" class="col s12 tab-content" style="padding: 40px 0.75rem!important;">

			<div class="col s8 offset-s2 m4 offset-m1 mb-30 card-flyer">
				<img src="{{ asset('img/robot-morelia.jpg') }}" alt="" class="responsive-img">
			</div>
			
			<div class="col s12 m4 offset-m2">				

				<div class="row">
					<div class="qcPricing col s12 center-align mb-10">
						<div class="box col s12">
							<header>
								<div class="col s12 teal accent-4">Superfan</div>
							</header>
							<div class="price col s12"><span>$880</span> MXN</div>
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

			</div>

			<div class="col s12 m4 offset-m2">
				<div class="row center-align">
					
					@if(Auth()->check())

					<p class="">Selecciona tu zona y numero de lugares</p>
				
					{!! Form::open(['route' => 'payment.details', 'method' => 'POST', 'id' => 'eventForm'])!!}
					
					<div class="row">
						<div class="col m6">
							<div class="col m12 zona-radio">
								{!! Form::radio('zona', 'Superfan', false, ['id' => 'superfan', 'class' => 'form_zona']) !!}
								{!! Form::label('superfan', 'Superfan') !!}
							</div>
						</div>
						<div class="col m6">
							<div class="col m12 zona-radio">
								{!! Form::radio('zona', 'General', false, ['id' => 'general', 'class' => 'form_zona']) !!}
								{!! Form::label('general', 'General') !!}
							</div>
						</div>
					</div>
					<div class="row">

						<div class="seats-selector-container">
							<button id="btn-minus" type="button" class="waves-effect waves-light selector-button selector-button-left"><i class="fa fa-minus"></i></button>
							<input id="num-asientos" min="1" max="10" type="number" name="asiento" class="selector-button-input" value="1" required>
							<button id="btn-plus" type="button" class="waves-effect waves-light selector-button selector-button-right"><i class="fa fa-plus"></i></button>
						</div>			
						
					</div>
					
					{!! Form::hidden('img', 'img/robot-morelia.jpg') !!}
					{!! Form::hidden('evento', 'Robot') !!}
					{!! Form::hidden('fecha', '02 de mayo 2020') !!}
					{!! Form::hidden('lugar', 'Salón Club de Leones') !!}
					{!! Form::hidden('ciudad', 'Morelia Mich.') !!}
					{!! Form::hidden('hora', '20:00 hrs') !!}
					{!! Form::hidden('event_type', 'general') !!}
					{!! Form::hidden('impresion_boleto', true) !!}
					{!! Form::hidden('db_table', 'robot_morelia_02may') !!}
					{!! Form::hidden('info', '') !!}
					{!! Form::hidden('precio', '', ['id' => 'form_precio']) !!}
					{!! Form::hidden('url', url('eventos/robot-morelia')) !!}
					
					<div class="input-field center-align">
						{!! Form::submit('Siguiente',['class'=>'btn waves-effect waves-light orange accent-3']) !!}
					</div>	
						
					{!! Form::close() !!}

					<p>
						<i>* Puedes seleccionar un máximo de 10 lugares.</i>
					</p>
          <p> * Al realizar tu compra en línea se realiza un cargo extra de 10% por concepto de servicio.</p>

					@else
						<p class="center-align raleway">Debes iniciar sesion para poder seleccionar tus lugares</p>
						<div class="center-align">
							<a href="#modal-login" class="modal-login-open btn waves-light orange accent-3">Ingresar</a>
						</div>
					@endif
						{{-- <p>* Informes</p>
						<p><a href="tel:4616143812" style="background: #4caf50; color: #fff; padding: 5px 10px;">461 614 3812</a> / <a href="tel:4434603155" style="background: #4caf50; color: #fff; padding: 5px 10px;">443 460 3155</a></p> --}}
				
				</div>
			</div>

		</div>

		{{-- <div id="detalles" class="col s12 tab-content">
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
		</div> --}}

		{{-- <div id="lugares" class="col s12 tab-content">
			<div class="col s12">
				<h5 class="mb-30 quote">Además de Bolematico, puedes adquirir tus entradas en:</h5>
			</div>

			<div class="col s12">									
				<div class="white z-depth-2">
					<iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3756.1943227085408!2d-101.18477128552061!3d19.704349286730476!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x842d0e0d6bca646b%3A0x1b0a3a981724216f!2sRS+Viajes+Centro!5e0!3m2!1ses!2smx!4v1501091355750" width="100%" height="320" frameborder="0" style="border:0" allowfullscreen></iframe>
				
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

		</div> --}}

	</div>
</section>
<section class="section-video overlay overlay-5" style="background-image: url('https://img.youtube.com/vi/5NFJAgB_sl0/maxresdefault.jpg');">
	<div class="row center-align">
		<a class="white-text" id="modal-video-open" href="#modal-video" data-video="https://www.youtube.com/embed/5NFJAgB_sl0"><i class="material-icons">play_circle_filled</i></a>
		<p class="white-text"><i>Robot - By My Own</i></p>
	</div>
</section>
<section>
	
	<div class="row">
		<p class="center-align mt-50">Si tienes alguna duda sobre este evento no dudes en contactarnos</p>
		<div class="row center-align">
			<a href="{{ route('contacto') }}" class="btn waves-light waves-effect green center-align ls-1">CONTACTO</a>
		</div>
	</div>
</section>

<section class="section-lugar">
	<div class="row">
		<div class="col m9">
			<iframe src="https://www.google.com/maps/embed?pb=!1m14!1m8!1m3!1d15025.263135396037!2d-101.1776253!3d19.6991754!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x0%3A0x5aa28cdd2f324a31!2sClub%20de%20Leones%20A.C.!5e0!3m2!1ses!2smx!4v1584485774409!5m2!1ses!2smx" width="100%" height="450" frameborder="0" style="border:0;" allowfullscreen="" aria-hidden="false" tabindex="0"></iframe>
		</div>
		<div class="col m3">
			<h5 class="quote raleway">Lugar del evento</h5>
			
			<h5 class="mt-30">Salón Club de Leones</h5>
			<div class="col s10">
				<div class="divider"></div>
			</div>
			<ul class="fa-ul" style="margin-top: 30px;">
				<li class="mb-10"><i class="fa-li fa fa-map-marker"></i> Av. Tata Vasco 1, <br>Vasco de Quiroga, 58000 <br>Morelia, Mich.</li>
				{{-- <li><i class="fa-li fa fa-facebook"></i> <a title="website" style="color:#434546" href="La-Botellita_Comedor-Mexicano-100242048134641" target="_blank">Salón de los Leones Comedor Mexicano</a></li> --}}
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
		var precios = {'Superfan': 880, 'General': 330};
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
		})

		$("#btn-plus").click(function(){
		    var value = $("#num-asientos").val();
		    if(value < 10){
		    	$("#num-asientos").val(++value);
		    }
		});
		$("#btn-minus").click(function(){
		    var value = $("#num-asientos").val();
		    if(value > 1) {
		    	$("#num-asientos").val(--value);
		    }
		});
		$("#eventForm").submit(function(e){
			if($("#num-asientos").val() < 1){
				Materialize.toast('La cantidad minima de boletos es: 1',3000);
				$("#num-asientos").val(1);
				return false;
			}else if($("#num-asientos").val() > 10){
				Materialize.toast('Puedes seleccionar hasta 10 boletos',3000);
				$("#num-asientos").val(10);
				return false;
			}

			if( !$(".form_zona").is(':checked') ){
				Materialize.toast('Selecciona una zona',3000);
				return false;
			}
			return true;
		});

	</script>
@endsection