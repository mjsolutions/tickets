@extends('layouts.main')

@section('title', 'Luiki Wiki & Pachis Cd del Carmen')

@section('description', 'Luiki Wiki & Pachis en Cd del Carmen, 03 de Febrero, 8 pm boletos en Barezzito y en bolematico.mx')

@section('styles')
<script src="https://use.fontawesome.com/9b9c9dc667.js"></script>
@endsection

@section('content')

<div class="image-header bg-4 overlay overlay-5">

	<div class="row white-text">
		<h4>Luiki Wiki & Pachis</h4>
		<div class="divider"></div>
		<p><i>Cd del Carmen - Barezzito Cd del Carmen</i></p>
	</div>
	<a href="#compra" class="btn waves-light waves-effect page-scroll"><b>Comprar</b> <i class="fa fa-ticket" aria-hidden="true"></i></a>
</div>

<section class="container">
	<div class="row">
		<div class="col s12">
			<ul class="tabs">
				<li class="tab "><a class="active" href="#descripcion">Descripción</a></li>
				<li class="tab "><a href="#biografia">Biografía</a></li>
				<li class="tab "><a href="#lugares">Boletos</a></li>
			</ul>
		</div>
		<div id="descripcion" class="col s12 tab-content">
			<div class="row">
				<h4 class="mt-0 raleway quote">PRECIOS</h4>
				{{-- <div class="divider"></div> --}}
			</div>

			<div class="col s8 offset-s2 m3 mb-30 card-flyer">
				<img src="{{ asset('img/luiki-03.jpeg') }}" alt="" class="responsive-img">
			</div>
			
			<div class="col s12 m8 offset-m1">				

				<div class="row mt-30">

					<div class="qcPricing col s12 center-align mb-10">
						<div class="box col s12 card-flyer">
							<header>
								<div class="col s12 m8 teal accent-4">Zona General</div>
								<div class="col m4 btn-buy nopadding hide-on-small-only"><a href="#compra" class="page-scroll"><b>Comprar</b> <i class="fa fa-ticket" aria-hidden="true"></i></a></div>
							</header>
							<div class="price col s12"><span>$200</span> Por entrada</div>
							{{-- <div class="filas col s6">Filas: A - Ñ</div> --}}
							<div class="col s12 btn-buy nopadding hide-on-med-and-up"><a href="#compra" class="page-scroll"><b>Comprar</b> <i class="fa fa-ticket" aria-hidden="true"></i></a></div>
						</div>
					</div>

				</div>

				<div class="row">
					<div class="divider"></div>
					<p class="center-align mt-30">Al realizar tu compra en línea se realiza un cargo extra de <b>10%</b> por concepto de servicio.</p>
					<p class="center-align"><b>Informes:</b> <a href="tel:9381112670" style="background: #4caf50; color: #fff; padding: 5px 10px;">938 111 2670</a></p>
				</div>
			</div>
		</div>

		<div id="biografia" class="col s12 tab-content">
			<div class="col s8 offset-s2 hide-on-med-and-up">
				<img src="{{ asset('img/luiki-bio.jpg') }}" class="responsive-img">
			</div>
			<div class="col s12 m7">
				<h4 class="mt-0 raleway quote">BIOGRAFÍA</h4>		
				<p>Luiki Wiki es comediante y se presenta como “el cuate que se parece a Diego Luna”... y no es un chiste.</p>
				<p>De lejos, se parece mucho al actor, de cerca ya no tanto.</p>
				<p>Cuando empezó a trabar en los bares como comediante, se anunciaba como Luis simplemente, pero luego apareció lo de Luiki Wiki.</p>
				<p>La historia de nombre chistoso es igual de graciosa, comenta.</p>
				<p>“Yo me llamo Luis, pero entrabas a una página de Internet y ponías tu nombre y salía en hawuaiano y el mío salió así”, contó.</p>
				<p>Es originario de la ciudad de Monterrey y desde hace tres años se dedica al stand up de tiempo completo.</p>
				<p>Estudió música, pero él en realidad quería ser doctor. Lo del piano es parte de su rutina y es una de las más divertidas.</p>
				<p>“Estuvo muy chistoso porque yo no quería estudiar piano, casi siempre los papás te dicen que estudies algo bien y con mis papás fue al contrario, me dijeron estudia música, porque lo tuyo es fracasar”, declaró.</p>
				
			</div>
			<div class="col m5 hide-on-small-only">
				<img src="{{ asset('img/luiki-bio.jpg') }}" class="responsive-img">
			</div>
			<div class="clearfix"></div>
			<p>Fuente:</p>
			<p><small>http://www.eluniversalqueretaro.mx/vida-q/31-08-2015/luiki-wiki-se-parece-diego-luna</small></p>
			
		</div>

		<div id="lugares" class="col s12 tab-content">
			<div class="row">
				<h4 class="mt-0 raleway quote">LUGARES DE VENTA</h4>
			</div>
			<div class="row">
				<div class="col s12">
					<h5>Barezzito Cd del Carmen</h5>
				</div>
				<div class="col s12 m6">									
					<!-- ## VENUE MAP ## -->
					<div class="qcEventlayout">
						<iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d120968.64831347123!2d-91.88493066400702!3d18.651864527697864!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x85f1079edfd0ccd3%3A0x8aeb18cc66d128a!2sBarezzito+Cd.+Del+Carmen!5e0!3m2!1ses!2smx!4v1516829307686" width="100%" height="320" frameborder="0" style="border:0" allowfullscreen></iframe>
					</div>
				</div>

				<!-- ## ADDRESS LIST ## -->
				<div class="col s12 m6">
					<ul class="qcAddress">
						<li><i class="medium material-icons">location_on</i><p><strong>DIRECCIÓN</strong>: Av Periferica Nte 52, Asa Poniente, 24197 Cd del Carmen, Camp.</p></li>
						<li><i class="medium material-icons">call</i><p><strong>TELÉFONO</strong>: 938 111 2670</p></li>
						<li><i class="medium material-icons">email</i><p><strong>EMAIL</strong>: No disponible</p></li>
						<li><i class="medium material-icons">language</i><p><strong>Website</strong>: <a title="website" href="https://www.facebook.com/bzzcddelcarmen/" target="_blank">https://www.facebook.com/bzzcddelcarmen/</a></p></li>
					</ul>
				</div>
			</div>			

		</div>

	</div>
</section>
<section class="section-video overlay overlay-5" style="background-image: url('https://img.youtube.com/vi/i1GrhM8inBI/maxresdefault.jpg');">
	<div class="row center-align">
		<a class="white-text" id="modal-video-open" href="#modal-video" data-video="https://www.youtube.com/embed/i1GrhM8inBI"><i class="material-icons">play_circle_filled</i></a>
		<p class="white-text"><i>Luiki Wiki I @ #StandupEnComedy</i></p>
	</div>
</section>

<section id="compra" class="section-comprar">
	{{-- <div class="row">
		<div class="col s12 m6">
			<img src="{{asset('img/teatro-morelos.svg')}}" alt="Teatro Morelos" class="responsive-img">
		</div>
		<div class="col s12 m6">
			@if(Auth()->check())
				<p class="center-align"><i>* Solo puedes seleccionar un maximo de 10 boletos</i></p>
				{!! Form::open(['route'=>'payment.franco7', 'method'=>'POST']) !!}
					<div class="row">

						<div class="input-field col s12">
							{!! Form::select('zona', ['Diamante' => 'Diamante', 'Oro' => 'Oro', 'Plata' => 'Plata'], '', ['class' => 'select-dropdown', 'required', 'id' => 'zona', 'placeholder' => 'Seleccione una zona']) !!}
							{!! Form::label('zona', 'Zona') !!}
						</div>
						<div class="input-field col s12">
							{!! Form::select('fila', [], '', ['class' => 'select-dropdown', 'required', 'id' => 'fila', 'placeholder' => 'Seleccione primero una zona']) !!}
							{!! Form::label('fila', 'Fila') !!}
						</div>
						<div class="input-field col s12">
							{!! Form::select('asiento[]', [], '', ['class' => 'select-dropdown', 'required', 'multiple','id' => 'asiento', 'placeholder' => 'Selecciona primero una fila']) !!}
							{!! Form::label('asiento', 'Asiento') !!}
						</div>
						
					</div>

					<div class="row">
					
						<div class="input-field center-align">
							{!! Form::submit('Comprar',['class'=>'btn waves-effect waves-light  orange accent-3']) !!}
						</div>	
					
					</div>
						
				{!! Form::close() !!}
			@else
				<p class="center-align raleway">Debes iniciar sesion para poder realizar la compra</p>
				<div class="col s6 m3 col-center">
					<a href="#modal-login" class="modal-login-open btn btn-block waves-light orange accent-3">Login</a>
				</div>
			@endif
		</div>	
	
	</div> --}}
	<div class="row">
		<div class="col m4 offset-m4">
			<h5 class="mt-50 center-align raleway">Venta de boletos en Barezzito Cd. del Carmen</h5>
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
	<div id="map"></div>
	
	<div class="info-lugar">
		<h5 class="raleway quote mb-30">Lugar del evento</h5>
		<div class="divider mb-30"></div>
		<p><b>Barezzito Cd del Carmen</b></p>
		<p><i class="material-icons">location_on</i>Av Periferica Nte 52, Asa Poniente, 24197 Cd del Carmen, Camp.</p>
		<p><i class="material-icons">call</i> 938 111 2670</p>
		<p><i class="material-icons">language</i>https://www.facebook.com/bzzcddelcarmen/</p>
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
		function initMap() {
		        var uluru = {lat: 18.6550231, lng: -91.8328511};
		        var map = new google.maps.Map(document.getElementById('map'), {
		          zoom: 13,
		          scrollwheel: false,
		          navigationControl: true,
		          draggable: true,
		          center: {lat: 18.6550231, lng: -91.8328511}
		        });
		        var marker = new google.maps.Marker({
		          position: uluru,
		          map: map
		        });
		      }

		// $("#zona").change(function(){
		// 	var id = $(this).val();
		// 	$.ajax({
		// 		url: '{{url('/api/getFilas')}}/Franco7/' + id,
		// 		method: 'GET',
		// 		// data: 'id=' + id,
		// 		success: function(res){
		// 			var filas = res;
		// 			var options = "<option value='' selected disabled>Selecciona una fila</option>";
		// 			for(i=0; i<filas.length; i++){
		// 				options += '<option value='+filas[i].fila+'>'+ filas[i].fila +'</option>';
		// 			}
		// 			$("#fila").html(options);
		// 			$("#fila").material_select();

		// 		}
		// 	});
		// });

		// $("#fila").change(function(){
		// 	var id = $(this).val();
		// 	$.ajax({
		// 		url: '{{url('/api/getAsientos')}}/Franco7/' + id,
		// 		method: 'GET',
		// 		// data: 'id=' + id,
		// 		success: function(res){
		// 			var asientos = res;
		// 			var options = "<option value='' selected disabled>Seleccione los asientos</option>";
		// 			for(i=0; i<asientos.length; i++){
		// 				options += '<option value='+asientos[i].id+'|'+asientos[i].asiento+'>'+ asientos[i].asiento +'</option>';
		// 			}
		// 			$("#asiento").html(options);
		// 			$("#asiento").material_select();

		// 		}
		// 	});
		// });
	</script>

      <script async defer src="https://maps.googleapis.com/maps/api/js?key=AIzaSyBOOT9N6QdDeq0bnmSb1bw2SKw5CXQmOeA&callback=initMap"></script>
@endsection