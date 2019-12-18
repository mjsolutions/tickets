@extends('layouts.main')

@section('title', 'Oxígeno - Edgar Oceransky/Diego Ojeda')

@section('description', 'Oxígeno - Edgar Oceransky/Diego Ojeda, Celaya Gto., 29 de febrero, 20:30 hrs boletos en restaurante El Trapio y bolematico.com')

@section('styles')
<meta property="og:url"  content="https:www//bolematico.com/eventos/oceransky-ojeda-celaya" />
<meta property="og:title" content="Oxígeno - Edgar Oceransky/Diego Ojeda" />
<meta property="og:description" content="Oxígeno - Edgar Oceransky/Diego Ojeda, Celaya Gto., 29 de febrero, 20:30 hrs boletos en restaurante El Trapio y bolematico.com" />
<meta property="og:image" content="https://www.bolematico.com/img/oceransky-ojeda-celaya.jpg" />

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
		<h4>Oxígeno - Edgar Oceransky/Diego Ojeda</h4>
		<div class="divider"></div>
		<p class="mb-0"><i>Restaurante El Trapio - Celaya Gto.</i></p>
		<p class="m-0"><i>29 de febrero - 20:30 hrs.</i></p>
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
		<div id="precios" class="col s12 tab-content" style="padding: 40px 0.75rem!important;">

			<div class="col s8 offset-s2 m4 mb-30 card-flyer">
				<img src="{{ asset('img/oceransky-ojeda-celaya.jpg') }}" alt="" class="responsive-img">
			</div>
			
			<div class="col s12 m4">				

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
							<div class="price col s12"><span>$550</span> MXN</div>
						</div>
					</div>

					<div class="qcPricing col s12 center-align mb-10">
						<div class="box col s12">
							<header>
								<div class="col s12 grey">Plata</div>
							</header>
							<div class="price col s12"><span>$400</span> MXN</div>
						</div>
					</div>

				</div>

			</div>

			<div class="col s12 m4">
				<div class="row center-align">
					
					@if(Auth()->check())

					<p class="">Selecciona tu zona y numero de lugares</p>
				
					{!! Form::open(['route' => 'payment.details', 'method' => 'POST', 'id' => 'eventForm'])!!}
					
					<div class="row">
						<div class="col m4">
							<div class="col m12 zona-radio">
								{!! Form::radio('zona', 'Diamante', true, ['id' => 'diamante', 'required', 'class' => 'form_zona']) !!}
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

						<div class="seats-selector-container">
							<button id="btn-minus" type="button" class="waves-effect waves-light selector-button selector-button-left"><i class="fa fa-minus"></i></button>
							<input id="num-asientos" min="1" max="10" type="number" name="asiento" class="selector-button-input" value="1" required>
							<button id="btn-plus" type="button" class="waves-effect waves-light selector-button selector-button-right"><i class="fa fa-plus"></i></button>
						</div>			
						
					</div>
					
					{!! Form::hidden('img', 'img/oceransky-ojeda-celaya.jpg') !!}
					{!! Form::hidden('evento', 'Oxígeno - Edgar Oceransky/Diego Ojeda') !!}
					{!! Form::hidden('fecha', '29 de febrero 2019') !!}
					{!! Form::hidden('lugar', 'Restaurante El Trapio') !!}
					{!! Form::hidden('ciudad', 'Celaya, Gto.') !!}
					{!! Form::hidden('hora', '20:30 hrs') !!}
					{!! Form::hidden('event_type', 'general') !!}
					{!! Form::hidden('impresion_boleto', true) !!}
					{!! Form::hidden('db_table', 'oceransky_ojeda_celaya_29feb') !!}
					{!! Form::hidden('info', 'Favor de comunicarte al numero 461 614 3812 ó 461 330 3431 para completar tu reservación.') !!}
					{!! Form::hidden('precio', 650, ['id' => 'form_precio']) !!}
					{!! Form::hidden('url', url('eventos/oceransky-ojeda-celaya')) !!}
					
					<div class="input-field center-align">
						{!! Form::submit('Siguiente',['class'=>'btn waves-effect waves-light orange accent-3']) !!}
					</div>	
						
					{!! Form::close() !!}

					<p>
						<i>* Puedes seleccionar un máximo de 10 lugares.</i><br>
						<i>* Se cobrara un cargo adicional por concepto de servicio.</i>
					</p>

					@else
						<p class="center-align raleway">Debes iniciar sesion para poder seleccionar tus lugares</p>
						<div class="center-align">
							<a href="#modal-login" class="modal-login-open btn waves-light orange accent-3">Ingresar</a>
						</div>
					@endif
						<p>* Informes</p>
						<p><a href="tel:4616143812" style="background: #4caf50; color: #fff; padding: 5px 10px;">461 614 3812</a> / <a href="tel:4434603155" style="background: #4caf50; color: #fff; padding: 5px 10px;">443 460 3155</a></p>
				
				</div>
			</div>

		</div>

		<div id="detalles" class="col s12 tab-content">
			<div class="col s8 offset-s2 hide-on-med-and-up">
				<img src="{{ asset('img/oceransky-bio.jpg') }}" class="responsive-img">
			</div>
				
			<div class="col s12 m8">
				<h5 class="raleway quote">Edgar Oceransky</h5>
				<p>Cantautor nacido en la Ciudad de México en el año de 1975. Inicia su carrera artística en 1993. En el 2000 participa con Mario Domm como co-productor y arreglista en el disco “Títeres de tu” del poeta mexicano Edel Juárez e incluye su canción “La recuerdo así”.</p>
        <p>En el año 2001 lanza su primer material discográfico llamado “Estoy aquí” bajo el sello Sony Music, en el 2002 forma parte del disco “El que la hace la canta” al lado de Reyli y Natalia Lafourcade entre ótros, bajo el mismo sello y el disco “Reflejos Acústicos” de Kirty Music, así como del Sound Track de la película “Corazones Rotos”.</p>
        <p>Ha compartido escenario con grandes de la música como Tania Libertad, Hernaldo Zuñiga , Ismael Serrano, Pedro Guerra, Santiago Cruz, Francisco Céspedes, Alberto Plaza, José Cantoral, Armando Manzanero, Franco de Vita, Rossana, Alberto Cortés Y Reyli éste último lo tuvo como invitado especial en su concierto del Auditorio Nacional en noviembre del 2007.</p>
        <p>Teniendo claro que la música no solo es una pasión si no su modo de vida, en 2014 arriesga todo y presenta, con el apoyo de la Comisión de Cultura de la H. Cámara de Diputados, CONACULTA, Secretaría de Turismo del Estado de Querétaro , el festival más grande habla hispana llamado “Trovafest” el cual ha reunido a más de 100 cantautores de diferentes nacionalidades contando en su última edición (2016) con una semana completa de conciertos, tres escenarios y una afluencia de miles de personas de varios países convirtiendo a dicha ciudad en “La capital de la Trova”.</p>
        <p>Gracias a este festival comprobando una vez mas que la música rompe fronteras se une Pedro Guerra de España, Santiago Cruz de Colombia y Edgar Oceransky México en un disco único llamado “Pedro Santiago Edgar” donde reúnen sus mayores éxitos y los comparten teniendo una aceptación maravillosa dentro del publico de dichos cantautores el cual los lleva a hacer una gira dentro del territorio Nacional con localidades totalmente vendidas.</p>

			</div>
			<div class="col m4 hide-on-small-only">
				<img src="{{ asset('img/oceransky-bio.jpg') }}" class="responsive-img">
			</div>
			<div class="col s10 offset-s1 mb-30 mt-30">
				<div class="divider"></div>
			</div>
			<div class="clearfix"></div>
			<div class="col m4 s12">
				<img src="{{ asset('img/diego-ojeda-bio.jpg') }}" class="responsive-img">
			</div>
			<div class="col s12 m8">
				<h5 class="raleway quote">Diego Ojeda</h5>
				<p>¿Quién es Diego Ojeda? Diego Ojeda (1985) es un creador: cantautor, escritor y empresario canario que lleva 10  años recorriendo el mundo con sus canciones y poemas.</p>
				<p>España, México, Colombia, Ecuador, Perú y Cuba han sido, de momento, los escenarios donde ha recibido el cariño de miles y miles de personas convirtiéndose así en uno de los artistas referencia del panorama musical y literario español.</p>
				<p>Es CEO de la editorial MueveTuLengua, editorial cuyo eje fundamental es la poesía, abriéndose recientemente a otros géneros literarios.</p>
				<p>Ahora mismo comercializa sus tres últimos discos: "Amerizaje" (2015), "Diego Ojeda a solas en Fnac", (2017) y "Manhattan" (2018).Pero cuenta otros 6 discos anteriores.</p>
				<p>En cuanto a su carrera literaria cuenta con 4 libros: "A pesar de los aviones" (2012), "Mi chica revolucionaria" (2014), "Siempre donde quieras" (2015), "Compañera Galáctica" (2017), "Manhattan" (2018). De estos 5 libros ha vendido aproximadamente 100.000 ejemplares.</p>
				<p>Fuente: <small>https://diegoojeda.com/</small></p>

			</div>		
			<div class="clearfix"></div>
		</div>

		<div id="lugares" class="col s12 tab-content">
			<div class="col s12">
				<h5 class="mb-30 quote">Además de Bolematico, puedes adquirir tus entradas en:</h5>
			</div>

			<div class="col s12">									
				<div class="white z-depth-2">
					<iframe src="https://www.google.com/maps/embed?pb=!1m14!1m8!1m3!1d14946.628176951328!2d-100.829715!3d20.5202807!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x0%3A0x34ab037f3705abf2!2sEl%20Trapio!5e0!3m2!1ses!2smx!4v1572890267088!5m2!1ses!2smx" width="100%" height="450" frameborder="0" style="border:0;" allowfullscreen=""></iframe>
				
					<div class=" p-30">
						<h5><b>Restaurante El Trapio</b></h5>
						<ul class="qcAddress">
							<li><div class="divider"></div></li>
							<li><i class="fa fa-map-marker"></i> <strong>DIRECCIÓN</strong>: <p>Miguel Cabrera 108, Las Fuentes, 38040 Celaya, Gto.</p></li>
							<li><i class="fa fa-phone"></i> <strong>TELÉFONO</strong>: <p> 461 614 3812 / 461 330 3431</p></li>
							<li><i class="fa fa-calendar"></i> <strong>HORARIO</strong>: <p>13:00 a 23:00 hrs. Lunes a Sabado y 13:00 a 19:00 hrs. los Domingos.</p></li>
							<li><i class="fa fa-globe"></i> <strong>Website</strong>: <p><a title="website" href="https://www.facebook.com/eltrapiocelaya/" target="_blank">https://www.facebook.com/eltrapiocelaya/</a></p></li>
						</ul>
					</div>
				</div>

			</div>

		</div>

	</div>
</section>
<section class="section-video overlay overlay-5" style="background-image: url('https://img.youtube.com/vi/gLpqqUqlo7g/maxresdefault.jpg');">
	<div class="row center-align">
		<a class="white-text" id="modal-video-open" href="#modal-video" data-video="https://www.youtube.com/embed/gLpqqUqlo7g"><i class="material-icons">play_circle_filled</i></a>
		<p class="white-text"><i>Guapa - Oxígeno (Oceransky - Ojeda)</i></p>
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
			<iframe src="https://www.google.com/maps/embed?pb=!1m14!1m8!1m3!1d14946.628176951328!2d-100.829715!3d20.5202807!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x0%3A0x34ab037f3705abf2!2sEl%20Trapio!5e0!3m2!1ses!2smx!4v1572890267088!5m2!1ses!2smx" width="100%" height="450" frameborder="0" style="border:0;" allowfullscreen=""></iframe>
		</div>
		<div class="col m3">
			<h5 class="quote raleway">Lugar del evento</h5>
			
			<h5 class="mt-30">Restaurante El Trapio</h5>
			<div class="col s10">
				<div class="divider"></div>
			</div>
			<ul class="fa-ul" style="margin-top: 30px;">
				<li class="mb-10"><i class="fa-li fa fa-map-marker"></i> Miguel Cabrera 108, <br>Las Fuentes, 38040 <br>Celaya, Gto.</li>
				<li><i class="fa-li fa fa-facebook"></i> <a title="website" style="color:#434546" href="https://www.facebook.com/eltrapiocelaya/" target="_blank">ElTrapioCelaya</a></li>
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
		var precios = {'Diamante': 650, 'Oro': 550, 'Plata': 400};
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
		$("#eventForm").submit(function(){
			if($("#num-asientos").val() < 1){
				Materialize.toast('La cantidad minima de boletos es: 1',2000);
				$("#num-asientos").val(1);
				return false;
			}else if($("#num-asientos").val() > 10){
				Materialize.toast('Puedes seleccionar hasta 10 boletos',2000);
				$("#num-asientos").val(10);
				return false;
			}
			return true;
		});

	</script>
@endsection