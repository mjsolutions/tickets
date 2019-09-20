@extends('layouts.main')

@section('title', 'Daniel Sosa')

@section('description', 'Daniel Sosa, Acapulco 28 de septiembre, Hotel Calinda Beach, 21:00 hrs boletos en Hotel Calinda Beach y bolematico.com')

@section('styles')
<meta property="og:url"  content="https://www.bolematico.com/eventos/daniel-sosa-acapulco" />
<meta property="og:title" content="Daniel Sosa" />
<meta property="og:description" content="Daniel Sosa, Acapulco 28 de septiembre, Hotel Calinda Beach, 21:00 hrs boletos en Hotel Calinda Beach y bolematico.com" />
<meta property="og:image" content="https://www.bolematico.com/img/daniel-sosa-acapulco.jpg" />
<style type="text/css">
	.row .col .zona-radio { padding: 0 3px;	}
	.zona-radio > input + label { 
		font-size: 1.2em !important;
		line-height: 0.9 !important;
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
		<h4>Daniel Sosa</h4>
		<div class="divider"></div>
		<p class="mb-0"><i>Hotel Calinda Beach - Acapulco</i></p>
		<p class="m-0"><i>28 de septiembre - 21:00 hrs.</i></p>
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
				<img src="{{ asset('img/daniel-sosa-acapulco.jpg') }}" alt="" class="responsive-img">
			</div>
			
			<div class="col s12 m6 offset-m1">				

				<div class="row">

					<div class="qcPricing col s12 center-align mb-10">
						<div class="box col s12">
							<header>
								<div class="col s12 teal accent-4">Diamante</div>
							</header>
							<div class="price col s12"><span>$430</span> MXN</div>
						</div>
					</div>

					<div class="qcPricing col s12 center-align mb-10">
						<div class="box col s12">
							<header>
								<div class="col s12 grey lighten-1">Plata</div>
							</header>
							<div class="price col s12"><span>$380</span> MXN</div>
						</div>
					</div>

				</div>

				<div class="row">
					<div class="divider"></div>
					<div class="col s10 offset-s1 m8 offset-m2">
						<p>* Al realizar tu compra en línea se realiza un cargo extra de <b>10%</b> por concepto de servicio.</p>
						<p>* Los lugares son asignados conforme vayan llegando al evento.</p>
						<p class="mb-0"> * Informes: <br> <a href="tel:5571701175" style="background: #4caf50; color: #fff; padding: 5px 10px;">557-170-1175</a> / <a href="tel:4521741255" style="background: #4caf50; color: #fff; padding: 5px 10px;">452-174-1255</a></p>
					</div>
				</div>
			</div>
		</div>

		<div id="detalles" class="col s12 tab-content">
			<div class="col s8 offset-s2 hide-on-med-and-up">
				<img src="{{ asset('img/daniel-bio2.jpg') }}" class="responsive-img">
			</div>
			<div class="col s12 m8">
				<p>Con tan solo 23 años de edad y cuatro de trayectoria como comediante, Daniel está totalmente convencido de que lo mejor que pudo haber hecho fue renunciar a su vida godín para dedicarse por completo a su verdadera pasión, el mundo de la comedia.</p>
				<p>Después de eso, Sosa, que también es conocido por su faceta en el mundo de los vines, se preparó a nivel profesional en el Teatro de la Comedia y a pesar de que la situación en su casa no fue tan motivante como él esperaba, estaba completamente decidido, se subió al escenario por primera vez y su sorpresa fue más grande que sus nervios.</p>
				<p>Sobre su estilo, Sosa menciona que es un comediante anecdótico, sus chistes se basan en problemas elementales, incluso utiliza cuestiones que le provocan incomodidad, “Puedo hablar de los godínez, de cosas que no entiendo, de anécdotas propias y hasta de cosas que por ahí escucho y me parecen buenos elementos para armar un chiste”.</p>
				<p>Daniel también nos platicó sobre algunos de los personajes que más admira, durante su infancia era fanático de las películas de Cantinflas así como de los chistes de Polo Polo, ambos referentes importantes de la comedia mexicana.</p>
				
			</div>
			<div class="col m4 hide-on-small-only">
				<img src="{{ asset('img/daniel-bio2.jpg') }}" class="responsive-img">
			</div>
			<div class="clearfix"></div>
			
		</div>

		<div id="lugares" class="col s12 tab-content">

			<div class="col s12">
				<h5 class="mb-30 quote">Además de Bolematico, puedes adquirir tus entradas en:</h5>
			</div>

			<div class="col s12">
				<div class="white z-depth-2">
					<iframe src="https://www.google.com/maps/embed?pb=!1m14!1m8!1m3!1d15273.65162081165!2d-99.861045!3d16.855457!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x0%3A0x121a0b1baaf27ced!2sHotel+Calinda+Beach+Acapulco!5e0!3m2!1ses!2smx!4v1550594831928" width="100%" height="450" frameborder="0" style="border:0" allowfullscreen></iframe>

					<div class=" p-30">
						<h5 class="raleway"><b>Hotel Calinda Beach</b></h5>
						<ul class="qcAddress">
							<li><div class="divider"></div></li>
							<li><i class="fa fa-map-marker"></i> <p> Av Costera Miguel Alemán 1260, Deportivo, 39690 Acapulco, Gro.</p></li>
							<li><i class="fa fa-phone"></i><p> 557-170-1175</p></li>
							<li><i class="fa fa-facebook-official"></i><p><a title="website" href="hotelcalindabeach.com" target="_blank">hotelcalindabeach.com</a></p></li>
						</ul>
					</div>
				</div>

			</div>	

		</div>

	</div>
</section>
<section class="section-video overlay overlay-5" style="background-image: url('https://img.youtube.com/vi/ZuSIGN-lMlA/hqdefault.jpg');">
	<div class="row center-align">
		<a class="white-text" id="modal-video-open" href="#modal-video" data-video="https://www.youtube.com/embed/ZuSIGN-lMlA"><i class="material-icons">play_circle_filled</i></a>
		<p class="white-text"><i>El Caballo De Troya | Daniel Sosa</i></p>
	</div>
</section>

<section id="compra" class="section-comprar">
	@if(Auth()->check())
	<div class="row mt-30">
		<div class="col m8 border">
			<img src="{{ asset('img/calinda-beach.jpg') }}" alt="" class="responsive-img z-depth-1 materialboxed">
		</div>
		<div class="col m4">
			<div class="col s12 mb-30">
				<h5 class="mt-30 raleway quote">¡Aparta tus lugares!</h5>
			</div>		
			
			<div class="col s12">
					
				{!! Form::open(['route' => 'payment.details', 'method' => 'POST', 'id' => 'paymentForm'])!!}
		
				<div class="row">
		                    
			        <div class="col m6">
			          <div class="col m12 zona-radio">
			            {!! Form::radio('zona', 'Diamante', false, ['id' => 'diamante', 'required', 'class' => 'form_zona']) !!}
			            <label for="diamante">Diamante <br><small>Mesa 1 - 58</small></label>
			          </div>
			        </div>
			        <div class="col m6">
			          <div class="col m12 zona-radio">
			            {!! Form::radio('zona', 'Plata', false, ['id' => 'plata', 'required', 'class' => 'form_zona']) !!}
			            <label for="plata">Plata <br><small>Mesa 59 - 78</small></label>
			          </div>
			        </div>
			    </div>
			    
			    <div class="row">
					<div class="input-field col s12">
						{!! Form::select('fila', [], null, ['class' => 'select-dropdown', 'id' => 'fila', 'placeholder' => 'Selecciona primero la zona', 'required']) !!}
						{!! Form::label('fila', 'Mesa') !!}
					</div>			
				</div>    
			
				<div class="row">
					<div class="input-field col s12">
						{!! Form::select('asiento[]', [], null, ['class' => 'select-dropdown', 'id' => 'asiento', 'required', 'multiple']) !!}
						{!! Form::label('asiento', 'Asientos') !!}
					</div>			
				</div>
			
				{!! Form::hidden('img', 'img/daniel-sosa-acapulco.jpg') !!}
				{!! Form::hidden('evento', 'Daniel Sosa') !!}
				{!! Form::hidden('fecha', '28 de septiembre 2019') !!}
				{!! Form::hidden('lugar', 'Hotel Calinda Beach') !!}
				{!! Form::hidden('ciudad', 'Acapulco') !!}
				{!! Form::hidden('hora', '21:00 hrs') !!}
				{!! Form::hidden('event_type', 'numerado') !!}
				{!! Form::hidden('select_type', 'list') !!}
				{!! Form::hidden('impresion_boleto', true) !!}
				{{-- {!! Form::hidden('zona', 'Diamante') !!} --}}
				{!! Form::hidden('db_table', 'daniel_sosa_acapulco_28sep') !!}
				{!! Form::hidden('info', '') !!}
				{!! Form::hidden('precio', '', ['id' => 'form_precio']) !!}
				{!! Form::hidden('url', url('eventos/daniel-sosa-acapulco')) !!}
				
				<div class="input-field center-align">
					{!! Form::submit('Siguiente',['class'=>'btn waves-effect waves-light orange accent-3']) !!}
				</div>	
				
				{!! Form::close() !!}
				
			</div>		
		</div>
	</div>
	@else
	<div class="row">
		<p class="center-align raleway">Debes iniciar sesión para poder realizar la compra</p>
		<div class="col s12 m4 offset-m4 center-align">
			<a href="#modal-login" class="modal-login-open btn waves-light orange accent-3">Login</a>
		</div>
	</div>
	@endif
	<div class="row mt-30">
		<div class="col m8 offset-m2">
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
			<iframe src="https://www.google.com/maps/embed?pb=!1m14!1m8!1m3!1d15273.65162081165!2d-99.861045!3d16.855457!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x0%3A0x121a0b1baaf27ced!2sHotel+Calinda+Beach+Acapulco!5e0!3m2!1ses!2smx!4v1550594831928" width="100%" height="450" frameborder="0" style="border:0" allowfullscreen></iframe>
		</div>
		<div class="col m3">
			<h5 class="quote raleway">Lugar del evento</h5>
			
			<h5 class="mt-30">Hotel Calinda Beach</h5>
			<div class="col s10">
				<div class="divider"></div>
			</div>
			<ul class="fa-ul" style="margin-top: 30px;">
				<li class="mb-10"><i class="fa-li fa fa-map-marker"></i> Av Costera Miguel Alemán 1260, <br>Deportivo, 39690 <br>Acapulco, Gro.</li>
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
    	var precios = {'Diamante': 430, 'Plata': 380};
    	var zona = '';
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
    		zona = $(this).val();
			$("#form_precio").val(precios[zona]);
			$.ajax({
				url: '{{ url('api/getFilas') }}/daniel_sosa_acapulco_28sep/'+zona,
				type: 'get',
				dataType: 'json',
				success: function(res) {
					var filas = '<option disabled>Seleccione el número de mesa</option>';
					var arr = res.map(function(item){
						return parseInt(item.fila.split(" ")[1]);
					}).sort(function(a,b){ return a - b; });
					$.each(arr, function(index, fila){
						filas += '<option value="Mesa '+fila+'">Mesa '+fila+'</option>'
					});
					$("#fila").html(filas);
					$("#asiento").html('<option>Seleccione la mesa</option>');
					$("#fila, #asiento").material_select();
				},
				error: function(err) {
					console.log(err);
				}
			});
		});

		$("#fila").change(function(){
			var fila = $(this).val();
			$.ajax({
				url: '{{ url('api/getAsientos') }}/daniel_sosa_acapulco_28sep/'+zona+'/'+fila,
				type: 'get',
				dataType: 'json',
				success: function(res) {
					var asientos = '<option disabled>Selecciona tus asientos</option>';
					$.each(res, function(index, i){
						asientos += '<option value="'+i.id+'|'+i.asiento+'">Asiento #'+(index+1)+'</option>';
					});
					$("#asiento").html(asientos);
					$("#asiento").material_select();
				},
				error: function(err) {
					console.log(err);
				}
			});
		});

	</script>

@endsection