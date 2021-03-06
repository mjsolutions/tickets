@extends('layouts.main')

@section('title', 'Alejandro Filio')

@section('description', 'Alejandro Filio, Querétaro 29 de febrero, El Portón de Santiago, 21:30 hrs boletos en El Portón de Santiago y bolematico.com')

@section('styles')
<meta property="og:url"  content="https://www.bolematico.com/eventos/alejandro-filio-queretaro" />
<meta property="og:title" content="Alejandro Filio" />
<meta property="og:description" content="Alejandro Filio, Querétaro 29 de febrero, El Portón de Santiago, 21:30 hrs boletos en El Portón de Santiago y bolematico.com" />
<meta property="og:image" content="https://www.bolematico.com/img/alejandro-filio-queretaro.jpg" />

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
		<h4>Alejandro Filio</h4>
		<div class="divider"></div>
		<p class="mb-0"><i>El Portón de Santiago - Querétaro</i></p>
		<p class="m-0"><i>29 de febrero - 21:30 hrs.</i></p>
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

			<div class="col s8 offset-s2 m4 mb-30 card-flyer">
				<img src="{{ asset('img/alejandro-filio-queretaro.jpg') }}" alt="" class="responsive-img">
			</div>
			
			<div class="col s12 m4">				

				<div class="row">
					<div class="qcPricing col s12 center-align mb-10">
						<div class="box col s12">
							<header>
								<div class="col s12 teal accent-4">Diamante</div>
							</header>
							<div class="price col s12"><span>$680</span> MXN</div>
						</div>
					</div>

					<div class="qcPricing col s12 center-align mb-10">
						<div class="box col s12">
							<header>
								<div class="col s12 grey">General</div>
							</header>
							<div class="price col s12"><span>$480</span> MXN</div>
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
						<div class="col m6">
							<div class="col m12 zona-radio">
								{!! Form::radio('zona', 'Diamante', false, ['id' => 'diamante', 'class' => 'form_zona']) !!}
								{!! Form::label('diamante', 'Diamante') !!}
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

					{!! Form::hidden('img', 'img/alejandro-filio-queretaro.jpg') !!}
					{!! Form::hidden('evento', 'Alejandro Filio') !!}
					{!! Form::hidden('fecha', '29 de febrero 2019') !!}
					{!! Form::hidden('lugar', 'El Portón de Santiago') !!}
					{!! Form::hidden('ciudad', 'Querétaro') !!}
					{!! Form::hidden('hora', '21:30 hrs') !!}
					{!! Form::hidden('event_type', 'general') !!}
					{!! Form::hidden('impresion_boleto', true) !!}
					{!! Form::hidden('db_table', 'alejandro_filio_queretaro_29feb') !!}
					{!! Form::hidden('info', 'Favor de comunicarte al numero 442-740-0671 para completar tu reservación.') !!}
					{!! Form::hidden('precio', '', ['id' => 'form_precio']) !!}
					{!! Form::hidden('url', url('eventos/alejandro-filio-queretaro')) !!}
					
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
					<p>* Informes</p>
					<p><a href="tel:4427400671" style="background: #4caf50; color: #fff; padding: 5px 10px;">442-740-0671</a></p>
				
				</div>
			</div>
		</div>

		<div id="detalles" class="col s12 tab-content">
			<div class="col s8 offset-s2 hide-on-med-and-up">
				<img src="{{ asset('img/alejandro-filio-bio.jpg') }}" class="responsive-img">
			</div>
			<div class="col s12 m7">
				<p>Alejandro Filio , trovador contemporáneo, lucha hoy por un “canto mejor” y apoya el momento de cambio en su país, México, que exige la presencia de artistas verdaderos y comprometidos con un canto honesto, congruente y de calidad.</p>
				<p>Un canto con mensaje y sensibilidad. Un canto hecho poesía. Poesía accesible a toda la gente que gusta de lo estético.</p>
				<p>Alejandro Filio busca romper fronteras y llegar a todos los países de habla hispana para compartir su poesía hecha canción, que es un reflejo del pensar y sentir de México.</p>
				<p>Las canciones de Alejandro Filio han sido grabadas por varios interpretes y cuantautores entre los que podemos nombrar: Silvio Rodríguez, Víctor Manuel, Luis Eduardo Aute, Pedro Guerra, Tania Libertad, Alberto Cortez, Alejandro Lerner, Vicente Feliú, León Gieco, Juan Carlos Baglietto, Gerardo Alfonso, Carlos Varela, Amaury Pérez y Raúl Torres.</p>
				
			</div>
			<div class="col m5 hide-on-small-only">
				<img src="{{ asset('img/alejandro-filio-bio.jpg') }}" class="responsive-img">
			</div>
			<div class="clearfix"></div>
			
		</div>

		<div id="lugares" class="col s12 tab-content">

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
							<li><i class="fa fa-phone"></i><p> 442-740-0671</p></li>
							<li><i class="fa fa-facebook-official"></i><p><a title="website" href="https://www.facebook.com/ElPortondeSantiago/" target="_blank">https://www.facebook.com/ElPortondeSantiago/</a></p></li>
						</ul>
					</div>
				</div>

			</div>	

		</div>

	</div>
</section>
<section class="section-video overlay overlay-5" style="background-image: url('https://img.youtube.com/vi/7NJRWT0HcbM/hqdefault.jpg');">
	<div class="row center-align">
		<a class="white-text" id="modal-video-open" href="#modal-video" data-video="https://www.youtube.com/embed/7NJRWT0HcbM"><i class="material-icons">play_circle_filled</i></a>
		<p class="white-text"><i>Alejandro Filio - Aunque no estás</i></p>
	</div>
</section>

<section id="compra" class="section-comprar">

	<div class="row mt-30">
		<div class="col m8 offset-m2">
			<h5 class="center-align raleway">Venta de boletos también en <b>El Portón de Santiago</b></h5>
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
    var precios = {'Diamante': 680, 'General': 480};
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