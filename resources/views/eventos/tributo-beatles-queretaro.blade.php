@extends('layouts.main')

@section('title', 'Tributo The Beatles - Querétaro')

@section('description', 'Tributo The Beatles en Querétaro, El Portón de Santiago, 22 de febrero, 21:30 hrs boletos en El Portón de Santiago y bolematico.com')

@section('styles')
<meta property="og:url"  content="https://www.bolematico.com/eventos/tributo-beatles-queretaro" />
<meta property="og:title" content="Tributo The Beatles en Querétaro" />
<meta property="og:description" content="Tributo The Beatles en Querétaro, El Portón de Santiago, 22 de febrero, 21:30 hrs boletos en El Portón de Santiago y bolematico.com" />
<meta property="og:image" content="https://www.bolematico.com/img/tributo-beatles-queretaro.jpg" />
<link rel="stylesheet" type="text/css" href="{{ asset('css/event-select-general.css') }}">
<script src="https://use.fontawesome.com/9b9c9dc667.js"></script>
@endsection

@section('content')

<div class="image-header bg-4 overlay overlay-5">

	<div class="row white-text">
		<h4>Tributo The Beatles</h4>
		<div class="divider"></div>
		<p class="mb-0"><i>El Portón de Santiago - Querétaro</i></p>
		<p class="m-0"><i>22 de febrero - 21:30 hrs.</i></p>
	</div>
	<a href="#compra" class="btn waves-light waves-effect page-scroll"><b>Comprar</b> <i class="fa fa-ticket" aria-hidden="true"></i></a>
</div>

<section class="container">
	<div class="row">
		<div class="col s12">
			<ul class="tabs">
				<li class="tab "><a class="active" href="#precios">Descripción</a></li>
				{{-- <li class="tab "><a href="#detalles">Detalles</a></li> --}}
				<li class="tab "><a href="#lugares">Lugares de venta</a></li>
			</ul>
		</div>
		<div id="precios" class="col s12 tab-content" style="padding: 40px 0.75rem!important;">

			<div class="col s8 offset-s2 m4 offset-m1 mb-30 card-flyer">
				<img src="{{ asset('img/tributo-beatles-queretaro.jpg') }}" alt="" class="responsive-img">
			</div>
			
			<div class="col s12 m5 offset-m2">				

				<div class="row">
					<div class="qcPricing col s12 center-align mb-10">
						<div class="box col s12">
							<header>
								<div class="col s12 teal accent-4">General</div>
							</header>
							<div class="price col s12"><span>$150</span> MXN</div>
						</div>
					</div>

				</div>

				<div class="row center-align">

					
					@if(Auth()->check())
				
					{!! Form::open(['route' => 'payment.details', 'method' => 'POST', 'id' => 'eventForm'])!!}

					<div class="row">

						<div class="seats-selector-container">
							<button id="btn-minus" type="button" class="waves-effect waves-light selector-button selector-button-left"><i class="fa fa-minus"></i></button>
							<input id="num-asientos" min="1" max="10" type="number" name="asiento" class="selector-button-input" value="1" required>
							<button id="btn-plus" type="button" class="waves-effect waves-light selector-button selector-button-right"><i class="fa fa-plus"></i></button>
						</div>			
						
					</div>
					
					{!! Form::hidden('img', 'img/tributo-beatles-queretaro.jpg') !!}
					{!! Form::hidden('evento', 'Tributo The Beatles') !!}
					{!! Form::hidden('fecha', '22 de febrero 2020') !!}
					{!! Form::hidden('lugar', 'El Portón de Santiago') !!}
					{!! Form::hidden('ciudad', 'Querétaro') !!}
					{!! Form::hidden('hora', '21:30 hrs') !!}
					{!! Form::hidden('zona', 'General') !!}
					{!! Form::hidden('event_type', 'general') !!}
					{!! Form::hidden('impresion_boleto', true) !!}
					{!! Form::hidden('db_table', 'tributo_beatles_qto_22feb') !!}
					{!! Form::hidden('info', 'Favor de comunicarte al numero 4427400671 para completar tu reservación.') !!}
					{!! Form::hidden('precio', 150) !!}
					{!! Form::hidden('url', url('eventos/tributo-beatles-queretaro')) !!}
					
					<div class="input-field center-align">
						{!! Form::submit('Siguiente',['class'=>'btn waves-effect waves-light orange accent-3']) !!}
					</div>	
						
					{!! Form::close() !!}

					<p>
						<i>* Puedes seleccionar un máximo de 10 lugares.</i>
					</p>
          <p> * Al realizar tu compra en línea se realiza un cargo extra de 10% por concepto de servicio.</p>
          <p> * Informes y confirmación de tu reservación (una vez realizada tu compra) <br> <a href="tel:4427400671" style="background: #4caf50; color: #fff; padding: 5px 10px;">442-740-0671</a></p>

					@else
						<p class="center-align raleway">Debes iniciar sesion para poder seleccionar tus lugares</p>
						<div class="center-align">
							<a href="#modal-login" class="modal-login-open btn waves-light orange accent-3">Ingresar</a>
						</div>
					@endif
				
				</div>

			</div>

		</div>

		{{-- <div id="detalles" class="col s12 tab-content">	
			<div class="col s8 offset-s2 hide-on-med-and-up">
				<img src="{{ asset('img/pedro-guerra-bio.jpg') }}" class="responsive-img">
			</div>
			<div class="col s12 m8 text-justify">
		    <p>Pedro Guerra nació en Güimar un pequeño pueblo de la isla de la Tenerife, en 1966. A los 14 años compuso su primera canción "Cathaysa", sobre un texto de su padre. A los 16, comenzó a cantar en las fiestas y locales de todo Canarias. A los 18, se trasladó a la ciudad universitaria de La Laguna, también en Tenerife, donde se integró rápidamente en la actividad musical de la ciudad. Después de que el Gobierno de Canarias editara un disco colectivo de artistas isleños en el que él colaboraba con cuatro temas, Pedro se unió a otros cantautores para formar el grupo Taller Canario, con él que publicó cuatro discos: "Trapera, Identidad", "A por todas", y "Rap (a duras penas)". A través de Taller pudo colaborar con Joaquín Sabina, Silvio Rodríguez, Luis Eduardo Aute o Víctor Manuel.</p>
		    <p>El primer disco de Pedro Guerra, "Golosinas", se grabó en directo y estaba compuesto por 17 temas ("Rap a duras penas", "Contamíname", "Deseo", "El marido de la peluquera",etc.). "Golosinas" llegó a ser disco de oro, y platino su segundo trabajo, "Tan Cerca de Mi", publicado en 1997. En él, nos mostraba un Pedro Guerra intelectual, cronista de su tiempo y comprometido con la realidad. De ahí surgieron entre otras, canciones como "Ni todo lo contrario", "Debajo del Puente", "Moreno". El álbum lo grabó entre Madrid y París sin perder su esencia ni sus raíces. En esta ocasión, incorporó sonidos africanos, y voces tribales respaldado por su productor, Lokua Kanza, natural de Zaire, que trabajó con Peter Gabriel o Papa Wemba. "Tan Cerca de Mí" se editó también en Argentina, Colombia, Paraguay, EEUU, Uruguay y Venezuela.</p>
				
			</div>
			<div class="col m4 hide-on-small-only">
				<img src="{{ asset('img/pedro-guerra-bio.jpg') }}" class="responsive-img">
			</div>
			<div class="clearfix"></div>
			
		</div> --}}

		<div id="lugares" class="col s12 tab-content">

			<div class="col s12">									
				<div class="white z-depth-2">
					<iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3734.799498426775!2d-100.39395018559972!3d20.596244107779615!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x85d35b2975a8d68f%3A0xdf13453c0e244eca!2sEl+Porton+de+Santiago!5e0!3m2!1ses!2smx!4v1550796654851" width="100%" height="450" frameborder="0" style="border:0" allowfullscreen></iframe>

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
<section class="section-video overlay overlay-5" style="background-image: url('https://img.youtube.com/vi/BsOOl3fPdd0/hqdefault.jpg');">
	<div class="row center-align">
		<a class="white-text" id="modal-video-open" href="#modal-video" data-video="https://www.youtube.com/embed/BsOOl3fPdd0?t=42"><i class="material-icons">play_circle_filled</i></a>
		<p class="white-text"><i>La Gran Jamona - All My Loving</i></p>
	</div>
</section>

<section id="compra" class="section-comprar">
	<div class="row">
		<h5 class="raleway center-align">Venta de boletos también en El Portón de Santiago</h5>
		<p class="center-align">Si tienes alguna duda sobre este evento no dudes en contactarnos</p>
		<div class="row center-align">
			<a href="{{ route('contacto') }}" class="btn waves-light waves-effect green center-align ls-1">CONTACTO</a>
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
			return true;
		});

	</script>

@endsection