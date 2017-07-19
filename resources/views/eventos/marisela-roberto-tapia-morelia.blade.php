@extends('layouts.main')

@section('title', 'Marisela y Roberto Tapia')

@section('description', 'Marisela y Roberto Tapia, Morelia 26 de agosto 2017, 9 pm')

@section('styles')
<script src="https://use.fontawesome.com/9b9c9dc667.js"></script>
<style type="text/css">
	.flex {
		margin: 0 auto;
		width: 80%;
		padding: 10px 0;
		display: flex;
		justify-content: space-around;
		align-items: flex-start;
		border-bottom: 1px solid #ddd;
	}
	.flex a {
		font-size: 1.3rem;
	}
</style>
@endsection

@section('content')

<div class="image-header bg-4 overlay overlay-5">

	<div class="row white-text">
		<h4>Marisela / Roberto Tapia</h4>
		<div class="divider"></div>
		<p><i>Morelia - Palacio del Arte</i></p>
	</div>
	{{-- <button class="btn waves-light waves-effect red">COMPRAR BOLETOS</button> --}}
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

			<div class="col s8 offset-s2 m4 mb-30">
				<img src="{{ asset('img/marisela-roberto-tapia.jpg') }}" alt="Santiago Cruz Morelia" class="responsive-img materialboxed">
			</div>
			
			<div class="col s12 m8 ">				

				<div class="row">
					<div class="qcPricing col s12 center-align mb-10">
						<div class="box col s12">
							<header>
								<div class="col s12 m8 teal accent-4">Diamante</div>
								<div class="col m4 btn-buy nopadding hide-on-small-only"><a href="#compra" class="page-scroll"><b>Comprar</b> <i class="fa fa-paypal" aria-hidden="true"></i></a></div>
							</header>
							<div class="price col s6"><span>$1,680</span> Por entrada</div>
							<div class="filas col s6">Filas: A - J</div>
							<div class="col s12 btn-buy nopadding hide-on-med-and-up"><a href="#compra" class="page-scroll"><b>Comprar</b> <i class="fa fa-paypal" aria-hidden="true"></i></a></div>
						</div>
					</div>

					<div class="qcPricing col s12 center-align mb-10">
						<div class="box col s12">
							<header>
								<div class="col s12 m8 orange">Oro</div>
								<div class="col m4 btn-buy nopadding hide-on-small-only"><a href="#compra" class="page-scroll"><b>Comprar</b> <i class="fa fa-paypal" aria-hidden="true"></i></a></div>
							</header>
							<div class="price col s6"><span>$1,260</span> Por entrada</div>
							<div class="filas col s6">Filas: K - O</div>
							<div class="col s12 btn-buy nopadding hide-on-med-and-up"><a href="#compra" class="page-scroll"><b>Comprar</b> <i class="fa fa-paypal" aria-hidden="true"></i></a></div>
						</div>
					</div>

					<div class="qcPricing col s12 center-align mb-10">
						<div class="box col s12">
							<header>
								<div class="col s12 m8 purple lighten-1">VIP</div>
								<div class="col m4 btn-buy nopadding hide-on-small-only"><a href="#compra" class="page-scroll"><b>Comprar</b> <i class="fa fa-paypal" aria-hidden="true"></i></a></div>
							</header>
							<div class="price col s12"><span>$3,150</span> Por periquera con 4 asientos</div>
							{{-- <div class="filas col s6">Num. Asientos: 4</div> --}}
							<div class="col s12 btn-buy nopadding hide-on-med-and-up"><a href="#compra" class="page-scroll"><b>Comprar</b> <i class="fa fa-paypal" aria-hidden="true"></i></a></div>
						</div>
					</div>

					<div class="qcPricing col s12 center-align mb-10">
						<div class="box col s12">
							<header>
								<div class="col s12 m8 green lighten-4 black-text">Plata</div>
								<div class="col m4 btn-buy nopadding hide-on-small-only"><a href="#compra" class="page-scroll"><b>Comprar</b> <i class="fa fa-paypal" aria-hidden="true"></i></a></div>
							</header>
							<div class="price col s6"><span>$895</span> Por entrada</div>
							<div class="filas col s6">Filas: A - D</div>
							<div class="col s12 btn-buy nopadding hide-on-med-and-up"><a href="#compra" class="page-scroll"><b>Comprar</b> <i class="fa fa-paypal" aria-hidden="true"></i></a></div>
						</div>
					</div>

					<div class="qcPricing col s12 center-align mb-10">
						<div class="box col s12">
							<header>
								<div class="col s12 m8 grey lighten-1">General</div>
								<div class="col m4 btn-buy nopadding hide-on-small-only"><a href="#compra" class="page-scroll"><b>Comprar</b> <i class="fa fa-paypal" aria-hidden="true"></i></a></div>
							</header>
							<div class="price col s12"><span>$420</span> Por entrada</div>
							{{-- <div class="filas col s6">Filas: Y - Z</div> --}}
							<div class="col s12 btn-buy nopadding hide-on-med-and-up"><a href="#compra" class="page-scroll"><b>Comprar</b> <i class="fa fa-paypal" aria-hidden="true"></i></a></div>
						</div>
					</div>

				</div>

				<div class="row">
					<div class="divider"></div>
					<p class="center-align mt-30">Al realizar tu compra en línea Paypal realiza un cargo extra de <b>10%</b> por concepto de servicio.</p>
				</div>
			</div>
		</div>

		<div id="biografia" class="col s12 tab-content">
			<div class="col s8 offset-s2 hide-on-med-and-up">
				<img src="{{ asset('img/marisela-bio.jpg') }}" class="responsive-img materialboxed">
				<div class="flex">
					<a href="https://www.facebook.com/ladamadehierroofficial/" target="_blank"><i class="fa fa-facebook" aria-hidden="true"></i></a>
					<a href="https://www.instagram.com/mariselaoficial/" target="_blank"><i class="fa fa-instagram" aria-hidden="true"></i></a>
					<a href="https://twitter.com/mariselaladama?lang=es" target="_blank"><i class="fa fa-twitter" aria-hidden="true"></i></a>
				</div>
			</div>
			<div class="col s12 m9">
				<h4 class="mt-0 raleway quote">BIOGRAFÍA</h4>
				<h5>Marisela</h5>		
				<p>De nacimiento estadounidense pero Mexicana de carrera, en 1984 de la mano de Marco Antonio Solís, "El Buki", debuta en el programa de "Siempre en Domingo", de la mano de su padrino Raul Velasco.</p>
				<p>Su primer disco causa conmoción ya que los 10 temas que integraban la producción llegaron por varias semanas al 1er. lugar de popularidad. El tema que da nombre al disco "Sin el", se vuelve uno de sus grandes himnos, ademas del dueto mas aclamado de la década "La Pareja Ideal" a lado de la voz de Marco Antonio Solís.</p>
				<p>Al año siguiente graba a Aníbal Pastor y Xavier Santos, y el furor siguió con grandes éxitos que la consolidaron como una de las mas grandes exponentes de la época con temas como "Sola con mi Soledad", "A cambio de que", "Completamente tuya", "Enamorada y Herida" y otra de sus grandes clásicas "Mi Problema".</p>
				<p>Siguieron los éxitos y las grabaciones con millonarias ventas de discos como "Porque tengo Ganas" en 1987 con éxitos como "Quisiera detener el tiempo" y una de sus canciones más emblemáticas que le dieran el sobrenombre con el que el público la sigue recordando a través de los años, <b>"La Dama de Hierro"</b>. </p>
				<p>Sitio web Oficial: <a href="http://mariselaoficial.com" target="_blank">mariselaoficial.com</a></p>
			</div>
			<div class="col s3 hide-on-small-only">
				<img src="{{ asset('img/marisela-bio.jpg') }}" class="responsive-img materialboxed">
				<div class="flex">
					<a href="https://www.facebook.com/ladamadehierroofficial/" target="_blank"><i class="fa fa-facebook" aria-hidden="true"></i></a>
					<a href="https://www.instagram.com/mariselaoficial/" target="_blank"><i class="fa fa-instagram" aria-hidden="true"></i></a>
					<a href="https://twitter.com/mariselaladama?lang=es" target="_blank"><i class="fa fa-twitter" aria-hidden="true"></i></a>
				</div>
			</div>
			<div class="clearfix"></div>
			
			<div class="col s8 offset-s2 m2 offset-m5 mb-50 mt-30 center-align">
				<i class="fa fa-ravelry" aria-hidden="true"></i>
			</div>

			<div class="clearfix"></div>

			<div class="col s8 offset-s2 m4">
				<img src="{{ asset('img/roberto-tapia-bio.jpg') }}" class="responsive-img materialboxed">
				<div class="flex">
					<a href="https://www.facebook.com/RobertoTapiaMusic" target="_blank"><i class="fa fa-facebook" aria-hidden="true"></i></a>
					<a href="https://www.instagram.com/robertotapia/" target="_blank"><i class="fa fa-instagram" aria-hidden="true"></i></a>
					<a href="https://twitter.com/roberto__tapia" target="_blank"><i class="fa fa-twitter" aria-hidden="true"></i></a>
					<a href="https://www.youtube.com/user/RobertoTapiaVEVO" target="_blank"><i class="fa fa-youtube" aria-hidden="true"></i></a>
				</div>
			</div>
			<div class="col s12 m8">
				<h5 class="mt-0">Roberto Tapia</h5>
				<p>Nacido en San Diego y criado en Culiacán, hoy por hoy se ha destacado como uno de los intérpretes de música norteña y de banda con un estilo muy especial convirtiéndose en uno de los exponentes del género más cotizados no sólo en México y Estados Unidos.</p>
				<p>Desde que comenzó su carrera artística, piso con pie derecho los escenarios de México y Estados Unidos para complacer y deleitar a un público muy exigente que  hoy por hoy lo ha llevado a ser uno de los artistas más cotizados en el mundo del entretenimiento, por tener un estilo muy especial para interpretar sus canciones.</p>
				<p>En su album "Mi Niña" por primera vez grabó boleros y banda con un toque internacional, lleno de romance y de desamor, sobre las experiencias que ha tenido el cantante. Esta producción discográfica se produjo bajo el sello Universal Music Latino/Fonovisa. “Mi Niña” cuenta con un total de 13 temas: “El Dolor”, “Mi Consentida”, “El Juego”, “El Compadre”, “No Sentí Nada”,  “Mi Niña”, “Esta Vez Me Canse”, “La Cosecha Del Chapo”, “Después De Ti”, “El Desamor”, “El Moreno”, “El Amor Duele”, “Loco” un tema con la colaboración de Enrique Iglesias y Romeo Santos. También hizo un dueto con Prince Roy para cantar “Soy el Mismo”.</p>
				<p>A esto se le suma su exitosa participación como juez en el programa La Voz Kids, donde vivió una experiencia única aprendiendo con los niños más que como juez, como instructor. “Soy un coach que ayudo a los niños a realizar sus sueños”  y que estará también en la segunda temporada de este programa que es uno de los más vistos en Estados Unidos.</p>
			</div>
			<div class="clearfix"></div>
			<p>Sitio web Oficial: <a href="http://www.universalmusica.com/robertotapia/" target="_blank">www.universalmusica.com/robertotapia/</a></p>
		</div>

		<div id="lugares" class="col s12 tab-content">
			<div class="row">
				<h4 class="mt-0 raleway quote">LUGARES DE VENTA</h4>
			</div>
			<div class="row">
				<div class="col s12">
					<h5>Taquillas del planetario</h5>
				</div>
				<div class="col s12 m6">									
					<!-- ## VENUE MAP ## -->
					<div class="qcEventlayout">
						<iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3756.6546912563167!2d-101.18560468584354!3d19.68473203767239!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x842d0de79c733455%3A0x2bb6c9a37c54bca5!2sPlanetario+de+Morelia!5e0!3m2!1ses!2smx!4v1499195093931" width="100%" height="320" frameborder="0" style="border:0" allowfullscreen></iframe>
					</div>

				</div>

				<!-- ## ADDRESS LIST ## -->
				<div class="col s12 m6">
					<ul class="qcAddress">
						<li><i class="medium material-icons">location_on</i><p><strong>DIRECCIÓN</strong>: Av. Ventura Puente s/n, Félix Ireta, 58070 Morelia, Mich.</p></li>
						<li><i class="medium material-icons">call</i><p><strong>TELÉFONO</strong>: 01 443 232 4400</p></li>
						<li><i class="medium material-icons">email</i><p><strong>EMAIL</strong>: No disponible</p></li>
						<li><i class="medium material-icons">language</i><p><strong>Website</strong>: <a title="website" href="http://ceconexpo.com/" target="_blank">http://ceconexpo.com</a></p></li>
					</ul>
				</div>
			</div>

			<div class="row">
				<div class="col s12">
					<h5>Palacio del arte</h5>
				</div>
				<div class="col s12 m6">									
					<!-- ## VENUE MAP ## -->
					<div class="qcEventlayout">
						<iframe src="https://www.google.com/maps/embed?pb=!1m14!1m8!1m3!1d15026.196283323348!2d-101.1504995!3d19.6892344!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x0%3A0x35ceac89de74a2ca!2sPalacio+del+Arte!5e0!3m2!1ses!2smx!4v1499275284693" width="100%" height="320" frameborder="0" style="border:0" allowfullscreen></iframe>
					</div>

				</div>

				<!-- ## ADDRESS LIST ## -->
				<div class="col s12 m6">
					<ul class="qcAddress">
						<li><i class="medium material-icons">location_on</i><p><strong>DIRECCIÓN</strong>: Bambú, Jardines Del Rincon, Morelia, Mich.</p></li>
						<li><i class="medium material-icons">call</i><p><strong>TELÉFONO</strong>: 01 443 333 3672</p></li>
						<li><i class="medium material-icons">email</i><p><strong>EMAIL</strong>: No disponible</p></li>
						<li><i class="medium material-icons">language</i><p><strong>Website</strong>: <a title="website" href="https://www.facebook.com/PalacioDelArteMorelia/" target="_blank">fb/PalacioDelArteMorelia/</a></p></li>
					</ul>
				</div>
			</div>

		</div>

	</div>
</section>
<section class="section-video overlay overlay-5" style="background-image: url('https://img.youtube.com/vi/zqNKaVWYYeg/maxresdefault.jpg');">
	<div class="row center-align">
		<a class="white-text" id="modal-video-open" href="#modal-video" data-video="https://www.youtube.com/embed/zqNKaVWYYeg"><i class="material-icons">play_circle_filled</i></a>
		<p class="white-text"><i>Roberto Tapia - No valoraste</i></p>
	</div>
</section>

<section id="compra" class="section-comprar">
	 <div class="row">
		<div class="col s12 m5">
			<img src="{{asset('img/palacio-arte.jpg')}}" alt="Teatro Morelos" class="responsive-img" id="zoom_01" data-zoom-image="{{asset('img/palacio-arte.jpg')}}">
			<p class="center-align"><i>*Scroll sobre la imagen para hacer zoom</i></p>
		</div>
		<div class="col s12 m5 offset-m1">
			@if(Auth()->check())
				<p class="center-align"><i>* Solo puedes seleccionar un maximo de 10 boletos</i></p>
				{!! Form::open(['route'=>'payment.rtm', 'method'=>'POST']) !!}
					<div class="row">

						<div class="input-field col s12">
							{!! Form::select('zona', ['VIP' => 'VIP', 'Diamante' => 'Diamante', 'Oro' => 'Oro', 'Plata' => 'Plata', 'General' => 'General'], '', ['class' => 'select-dropdown', 'required', 'id' => 'zona', 'placeholder' => 'Seleccione una zona']) !!}
							{!! Form::label('zona', 'Zona') !!}
						</div>
						<div class="input-field col s12" id="select-fila">
							{!! Form::select('fila', [], '', ['class' => 'select-dropdown', 'required', 'id' => 'fila', 'placeholder' => 'Seleccione primero una zona']) !!}
							{!! Form::label('fila', 'Fila') !!}
						</div>
						<div class="input-field col s12" id="select-asiento">
							{!! Form::select('asiento[]', [], '', ['class' => 'select-dropdown', 'required', 'multiple','id' => 'asiento', 'placeholder' => 'Selecciona primero una fila']) !!}
							{!! Form::label('asiento', 'Asiento') !!}
						</div>
						
					</div>

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
	
	
	</div>
	{{-- <h5 class="mt-50 center-align raleway">Venta de boletos en taquillas del planetario y palacio del arte <br> <small>- Próximamente venta en línea -</small></h5>
	<div class="row">
		<div class="col s6 offset-s3 mt-30">
			<div class="divider"></div>
		</div>
	</div>
	<p class="center-align">Si tienes alguna duda sobre este evento no dudes en contactarnos</p>
	<div class="row center-align">
		<a href="{{ route('contacto') }}" class="btn waves-light waves-effect green center-align ls-1">CONTACTO</a>
	</div> --}}
</section>

<section class="section-lugar">
	<div id="map"></div>
	
	<div class="info-lugar">
		<h5 class="raleway quote mb-15">Lugar del evento</h5>
		<div class="divider mb-15"></div>
		<p><b>Palacio del Arte</b></p>
		<p><i class="material-icons">location_on</i> Bambú, Jardines Del Rincon, Morelia, Mich.</p>
		<p><i class="material-icons">call</i> 01 443 333 3672</p>
		<p><i class="material-icons">language</i> <a title="website" href="https://www.facebook.com/PalacioDelArteMorelia/" target="_blank">fb/PalacioDelArteMorelia</a></p>
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
	<script type="text/javascript" src="{{asset('js/jquery.elevatezoom.js')}}"></script>
	<script>
		$("#zoom_01").elevateZoom({
			scrollZoom : true,
			zoomType: "inner"
		});

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
		        var uluru = {lat: 19.6892305, lng: -101.1504926};
		        var map = new google.maps.Map(document.getElementById('map'), {
		          zoom: 17,
		          scrollwheel: false,
		          navigationControl: true,
		          draggable: true,
		          center: {lat: 19.6892305, lng: -101.1494526}
		        });
		        var marker = new google.maps.Marker({
		          position: uluru,
		          map: map
		        });
		      }

		$("#zona").change(function(){

			var id = $(this).val();

			//reset a asientos
			$("#asiento").html("<option value='' selected disabled>Selecciona primero una fila</option>");
			$("#asiento").material_select();

			if(id == 'General'){

				$.ajax({
					url: '{{url('/api/getFilas')}}/RTM/' + id,
					method: 'GET',
					// data: 'id=' + id,
					success: function(res){
						if(res > 0){
							$("#select-fila").addClass('hidden');
							$("#select-asiento").removeClass('hidden');
							$("#fila").val('');
							$("#fila").attr('required', false);
							$("#asiento").attr('required', 'required');
							$("#asiento").attr('multiple', false);
							$("#asiento").attr('name', 'asiento');
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
							$("#select-fila").addClass('hidden');
							$("#select-asiento").addClass('hidden');
							$("#fila").val('');
							$("#fila").attr('required', 'required');
							$("#asiento").attr('required', 'required');
							$("#asiento").attr('multiple', false);
						}
					}
				});


			}else if(id == 'VIP'){

				$.ajax({
					url: '{{url('/api/getFilas')}}/RTM/' + id,
					method: 'GET',
					// data: 'id=' + id,
					success: function(res){
						var filas = res;
						var options = "<option value='' selected disabled>Selecciona periquera</option>";
						for(i=0; i<filas.length; i++){
							options += '<option value="'+filas[i].fila+'">'+ filas[i].fila +'</option>';
						}
						$("#select-fila").removeClass('hidden');
						$("#select-asiento").addClass('hidden');
						$("#fila").attr('required', 'required');
						$("#asiento").attr('required', false);
						$("#fila").html(options);
						$("#fila").material_select();

					}
				});


			}else{

				$.ajax({
					url: '{{url('/api/getFilas')}}/RTM/' + id,
					method: 'GET',
					// data: 'id=' + id,
					success: function(res){
						var filas = res;
						var options = "<option value='' selected disabled>Selecciona una fila</option>";
						for(i=0; i<filas.length; i++){
							options += '<option value='+filas[i].fila+'>'+ filas[i].fila +'</option>';
						}
						$("#select-fila").removeClass('hidden');
						$("#select-asiento").removeClass('hidden');
						$("#fila").attr('required', 'required');
						$("#asiento").attr('required', 'required');
						$("#asiento").attr('multiple', true);
						$("#asiento").attr('name', 'asiento[]');
						$("#fila").html(options);
						$("#fila").material_select();

					}
				});

			}
		});

		$("#fila").change(function(){

			var fila = $(this).val();
			var zona = $("#zona").val();

			$.ajax({
				url: '{{url('/api/getAsientos2')}}/RTM/' + zona + '/' + fila,
				method: 'GET',
				// data: 'id=' + id,
				success: function(res){
					var asientos = res;
					var options = "<option value='' selected disabled>Seleccione los asientos</option>";
					for(i=0; i<asientos.length; i++){
						options += '<option value='+asientos[i].id+'|'+asientos[i].asiento+'>'+ asientos[i].asiento +'</option>';
					}
					$("#asiento").html(options);
					$("#asiento").material_select();

				}
			});
		});

		// $("#asiento").change(function(){
		// 	alert($(this).val());
		// });
	</script>

      <script async defer src="https://maps.googleapis.com/maps/api/js?key=AIzaSyBOOT9N6QdDeq0bnmSb1bw2SKw5CXQmOeA&callback=initMap"></script>
@endsection