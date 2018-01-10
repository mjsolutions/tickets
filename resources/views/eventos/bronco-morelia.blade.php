@extends('layouts.main')

@section('title', 'Bronco en Morelia')

@section('description', 'Bronco, Cuitla Vega, Bravios del Norte, Daniel Flores, Julio Chaidez en Morelia, Monumental Plaza de Toros 15 de Septiembre')

@section('styles')
<script src="https://use.fontawesome.com/9b9c9dc667.js"></script>
<style type="text/css">
	.form-card {
		padding: 30px 5px;
	    background: #f8f8f8;
	    box-shadow: 2px 2px 5px #ccc;
	}
</style>
@endsection

@section('content')

<div class="image-header bg-4 overlay overlay-5">

	<div class="row white-text">
		<h4>Bronco</h4>
		<div class="divider"></div>
		<p><i>Morelia - Monumental Plaza de Toros</i></p>
	</div>
	<a href="#compra" class="btn waves-light waves-effect page-scroll"><b>Comprar</b> <i class="fa fa-paypal" aria-hidden="true"></i></a>
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
			<div class="col s10 offset-s1 m4 mb-30">
				<img src="{{ asset('img/bronco.jpg') }}" alt="" class="responsive-img">
			</div>
			
			<div class="col s12 m8">

				<div class="row">
					
					<div class="qcPricing col s12 m6 center-align mb-10">
						<div class="box col s12">
							<header>
								<div class="col s12 teal accent-4">VIP (Ruedo)</div>
							</header>
							<div class="price col s12"><span>$900</span> MXN</div>
						</div>
					</div>

					<div class="qcPricing col s12 m6 center-align mb-10">
						<div class="box col s12">
							<header>
								<div class="col s12 orange">Barrera</div>
							</header>
							<div class="price col s12"><span>$850</span> MXN</div>
							
						</div>
					</div>

				</div>
				<div class="row">
					
					<div class="qcPricing col s12 m6 center-align mb-10">
						<div class="box col s12">
							<header>
								<div class="col s12 purple lighten-1">1er Tendido</div>								
							</header>
							<div class="price col s12"><span>$700</span> MXN</div>
						</div>
					</div>

					<div class="qcPricing col s12 m6 center-align mb-10">
						<div class="box col s12">
							<header>
								<div class="col s12 green lighten-4 black-text">2do Tendido</div>
							</header>
							<div class="price col s12"><span>$550</span> MXN</div>
						</div>
					</div>

				</div>
				<div class="row">
						
					<div class="qcPricing col s12 m6 center-align mb-10">
						<div class="box col s12">
							<header>
								<div class="col l8 s12 grey lighten-1">General</div>
								<div class="col l4 s12 btn-buy nopadding hide-on-med-and-down"><a href="#compra" class="page-scroll"><b>Boletos</b> <i class="fa fa-paypal" aria-hidden="true"></i></a></div>
							</header>
							<div class="price col s12"><span>$380</span> MXN</div>
							<div class="col s12 btn-buy nopadding hide-on-large-only"><a href="#compra" class="page-scroll"><b>Boletos</b> <i class="fa fa-paypal" aria-hidden="true"></i></a></div>
						</div>
					</div>
					<div class="qcPricing col s12 m6 center-align mb-10">
						<div class="box col s12">
							<header>
								<div class="col s12 black-text">Tendido Alto</div>
								{{-- <div class="col m4 btn-buy nopadding hide-on-small-only"><a href="#compra" class="page-scroll"><b>Boletos</b> <i class="fa fa-paypal" aria-hidden="true"></i></a></div> --}}
							</header>
							<div class="price col s12"><span>$250</span> MXN</div>
							{{-- <div class="col s12 btn-buy nopadding hide-on-med-and-up"><a href="#compra" class="page-scroll"><b>Boletos</b> <i class="fa fa-paypal" aria-hidden="true"></i></a></div> --}}
						</div>
					</div>

				</div>

				<div class="row">
					<div class="divider"></div>
					<p class="center-align mt-30">Venta de boletos en las taquillas de la Monumental y en linea para zona General y Tendido Alto</p>
				</div>
			</div>

			<div class="col s12 m8"></div>
		</div>

		<div id="biografia" class="col s12 tab-content">
			<div class="col s12 hide-on-med-and-up">
				<img src="{{ asset('img/bronco-bio.jpg') }}" class="responsive-img materialboxed">
				<h4 class="mt-0 raleway quote">BIOGRAFÍA</h4>
			</div>
			<div class="col m12 l5 hide-on-small-only">
				<h4 class="mt-0 raleway quote">BIOGRAFÍA</h4>
				<img src="{{ asset('img/bronco-bio.jpg') }}" class="responsive-img materialboxed">
			</div>
			<div class="col s12 l7">
				<h5>Bronco</h5>		
				<p>Su historia comenzó en 1979, cuando José Guadalupe Esparza y sus
					amigos de secundaria se reunieron con la idea de formar una
					agrupación. Sus primeros años no fueron fáciles, dormían todos en un
					mismo cuarto de hotel y se presentaban en shows con poco público. A
					pesar de los tropiezos nunca pensaron en rendirse, fue así como les
					llegó la oportunidad de grabar Sergio el Bailador, tema con el que el
				éxito volteó a verlos y decidió galopar con ellos para siempre.</p>
				<p>Bronco ha logrado ventas que sobrepasan los 14 millones de álbumes,
					con su música ha conquistado México, Estados Unidos, España, Centro
					y Sudamérica, con llenos totales en Guatemala, El Salvador, Honduras,
				Costa Rica, Argentina, Colombia, Paraguay, Bolivia y Chile.</p>
				<p>A lo largo de 38 años de carrera la agrupación ha derribado las barreras
					que separan a las clases sociales, gracias a sus acordes el género
				regional mexicano pudo llegar a otro nivel,</p>
				<p>Sitio web Oficial: <a href="http://www.broncoesbronco.com/" target="_blank">www.broncoesbronco.com</a></p>
			</div>
			<div class="clearfix"></div>
			
			<div class="col s8 offset-s2 m2 offset-m5 mb-50 mt-30 center-align">
				<i class="fa fa-ravelry" aria-hidden="true"></i>
			</div>

			<div class="clearfix"></div>

			{{-- <div class="col s8 offset-s2 m4">
				<img src="{{ asset('img/roberto-tapia-bio.jpg') }}" class="responsive-img materialboxed">
			</div> --}}
			<div class="col s12 ">
				<h5 class="mt-0">Danny Flores</h5>
				<p>Cantautor sonorense de música regional mexicana.</p>
				<p>A danny lo apasiona la composición y pasa gran parte de su vida convirtiendo lo cotidiano en música.</p>
				<p>Logrando una mezcla entre la cotidianidad de la vida y la sencilles en sus letras, danny flores tiene siempre como complice y aliada a su guitarra, ya que esta lo inspira y crea los versos y las melodías de sus canciones.</p>
				<p>Daniel flores medina (danny fores), nació en la ciudad de san luis río colorado, sonora y sus influencias musicales las toma de grandes artistas como son joan sebastian, intocable, ramón ayala, la firma, espinosa paz, entre otros.</p>
				<p>En el año 2012 decide entrar de lleno a la música después de renunciar a su carrera como jugador de baseball. En el año 2013 llega a la ciudad de méxico, enfocándose de una manera más profesional en su carrera como cantautor y decide ingresar a los talleres de composición de la sacm (sociedad de autores y copositores de méxico), la institución en méxico que más apoya la labor creativa de los autores.</p>
				<p>En 2017, danny saca su primer producción discográfca bajo la dirección del productor andrés guardado, llamada “vamos probando”, del cual se desprende el primer sencillo “en resumen” que sin duda logrará ocupar un importante lugar en la radio y medios nacionales, pero principalmente, danny quiere ocupar un lugar en el gusto del público, esperando conquistar diferentes géneros musicales, ya que sus letras tienen la fuerza de poder romper esa barrera.</p>
			</div>
			<div class="clearfix"></div>
			{{-- <p>Sitio web Oficial: <a href="http://www.universalmusica.com/robertotapia/" target="_blank">www.universalmusica.com/robertotapia/</a></p> --}}
		</div>

		<div id="lugares" class="col s12 tab-content">
			<div class="row">
				<h4 class="mt-0 raleway quote">LUGARES DE VENTA</h4>
			</div>
			<div class="row">
				<div class="col s12">
					<h5>Monumental plaza de toros Morelia</h5>
				</div>
				<div class="col s12 m6">									
					<!-- ## VENUE MAP ## -->
					<div class="qcEventlayout">
						<iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3756.2870361127916!2d-101.21321338508915!3d19.70040008673286!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x842d0e44eefe647d%3A0x55608e40e428073!2sPlaza+de+Toros+Monumental+de+Morelia!5e0!3m2!1ses!2smx!4v1510078696047" width="100%" height="320" frameborder="0" style="border:0" allowfullscreen></iframe>
					</div>

				</div>

				<!-- ## ADDRESS LIST ## -->
				<div class="col s12 m6">
					<ul class="qcAddress">
						<li><i class="medium material-icons">location_on</i><p><strong>DIRECCIÓN</strong>: Jesús Solorzano 164, Nuevo Valladolid, 58190 Morelia, Mich.</p></li>
						<li><i class="medium material-icons">schedule</i><p><strong>HORARIO</strong>: Lunes a Sabado de 11 am a 7 pm.</p></li>
						<li><i class="medium material-icons">call</i><p><strong>TELÉFONO</strong>: 01 443 326 5826</p></li>
					</ul>
				</div>
			</div>

		</div>

	</div>
</section>
<section class="section-video overlay overlay-5" style="background-image: url('https://img.youtube.com/vi/IOL6zjvq-RI/maxresdefault.jpg');">
	<div class="row center-align">
		<a class="white-text" id="modal-video-open" href="#modal-video" data-video="https://www.youtube.com/embed/IOL6zjvq-RI"><i class="material-icons">play_circle_filled</i></a>
		<p class="white-text"><i>Bronco @ Que no quede huella</i></p>
	</div>
</section>

<section id="compra" class="section-comprar">
	<div class="row">
		{{-- <div class="col s12 m5">
			<img src="{{asset('img/palacio-arte.jpg')}}" alt="Teatro Morelos" class="responsive-img" id="zoom_01" data-zoom-image="{{asset('img/palacio-arte.jpg')}}">
			<p class="center-align"><i>*Scroll sobre la imagen para hacer zoom</i></p>
		</div> --}}

		<div class="col s12 m8 offset-m2 l6 offset-l3">
			<div class="col s12">
				@if(Auth()->check())
					<h5 class="quote raleway">Seleccione sus boletos </h5>
					<p>Si tienes una cuenta <a href="https://www.paypal.com/mx/home" target="_blank">Paypal</a> podras facilmente adquirir tus boletos a traves de nuestra sitio.</p>
					{!! Form::open(['route'=>'payment.bronco', 'method'=>'POST', 'class' => 'form-card']) !!}
						<div class="row">
			
							<div class="input-field col s12">
								{!! Form::select('zona', ['General' => 'General'], '', ['class' => 'select-dropdown', 'required', 'id' => 'zona', 'placeholder' => 'Seleccione una zona']) !!}
								{!! Form::label('zona', 'Zona') !!}
							</div>
							
							<div class="input-field col s12" id="select-asiento">
								{!! Form::select('asiento', [], '', ['class' => 'select-dropdown', 'required','id' => 'asiento', 'placeholder' => 'Selecciona primero una la zona']) !!}
								{!! Form::label('asiento', 'Asiento') !!}
							</div>
							
						</div>
			
						<p class="center-align"><i>* Solo puedes seleccionar un maximo de 10 boletos, Paypal genera un cargo de 10% extra por concepto de servicio.</i></p>
						<div class="row">
						
							<div class="input-field center-align">
								{!! Form::submit('Comprar',['class'=>'btn waves-effect waves-light orange accent-3']) !!}
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
			
			<div class="col s12">
				<p class="mt-50 center-align">Venta de boletos para las otras localidades en las taquillas de la Monumental.</p>
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
	</div>
	
</section>

<section class="section-lugar">
	<div id="map"></div>
	
	<div class="info-lugar">
		<h5 class="raleway quote mb-15">Lugar del evento</h5>
		<div class="divider mb-15"></div>
		<p><b>Plaza de toros Monumental</b></p>
		<p><i class="material-icons">location_on</i> Jesús Solorzano 164, Nuevo Valladolid, 58190 Morelia, Mich.</p>
		<p><i class="material-icons">schedule</i><strong>HORARIO</strong>: Lunes a Sabado de 11 am a 7 pm.</p>
		<p><i class="material-icons">call</i> : 01 443 326 5826</p>
		
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
		        var uluru = {lat: 19.7004001, lng: -101.2110247};
		        var map = new google.maps.Map(document.getElementById('map'), {
		          zoom: 18,
		          scrollwheel: false,
		          navigationControl: true,
		          draggable: true,
		          center: {lat: 19.7004001, lng: -101.2103247}
		        });
		        var marker = new google.maps.Marker({
		          position: uluru,
		          map: map
		        });
		      }

		$("#zona").change(function(){

			var id = $(this).val();

			//reset a asientos
			$("#asiento").html("<option value='' selected disabled>Selecciona primero la zona</option>");
			$("#asiento").material_select();

			$.ajax({
				url: '{{url('/api/getFilas')}}/Bronco/' + id,
				method: 'GET',
				// data: 'id=' + id,
				success: function(res){
					if(res > 0){
						
						var options = "<option value='' selected disabled>Cantidad de asientos</option>";

						if(res > 10){

							for(i=1; i<11; i++){
								options += '<option value='+i+'>'+ i +'</option>';
							}

						}else{
							
							for(i=1; i<=res; i++){
								options += '<option value='+i+'>'+ i +'</option>';
							}

						}

						$("#asiento").html(options);
						$("#asiento").material_select();
					}else{

						alert('Lo sentimos boletos agotados para esta sección');
						$("#asiento").html('');
						$("#asiento").material_select();		
					}
				}
			});
			
		});
	</script>

      <script async defer src="https://maps.googleapis.com/maps/api/js?key=AIzaSyBOOT9N6QdDeq0bnmSb1bw2SKw5CXQmOeA&callback=initMap"></script>
@endsection