<!DOCTYPE html>
<html lang="es">
<head>
	<title>El Norteño en Zitacuaro | Bolematico</title>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0"/>
	<link rel="stylesheet" type="text/css" href="{{asset('css/materialize.min.css')}}">
	<link rel="stylesheet" type="text/css" href="{{asset('css/styles.css')}}">
	<link rel="stylesheet" type="text/css" href="{{asset('css/owl.carousel.css')}}">
	<link rel="stylesheet" type="text/css" href="{{asset('css/owl.theme.default.css')}}">
	<link rel="stylesheet" type="text/css" href="{{asset('css/owl.theme.green.css')}}">
	<link href="https://file.myfontastic.com/p33ryNdn2ug99gf3MgkiUK/icons.css" rel="stylesheet">
	<link href="http://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
</head>
<body>
	<header>
		@include('bolematico.nav')
	</header>

	<main>
		<div id="imagen-header"></div>
		<div class="container">
			<div class="row">
				<div class="col s10 offset-s1">
					<ul id="qcTabNav" class="tabs">
						<li class="tab col s3" style="background-color: darkorange;"><a href="#test-swipe-1" style="background-color: darkorange;" class="active"><i class="icon-book-open icon"></i> <span style="color: white;">Detalles</span></a></li>					
						<li class="tab col s3"><a href="#test-swipe-2"><i class="icon-book-open icon"></i> <span>Lugar</span></a></li>
						<li class="tab col s3"><a href="#test-swipe-3"><i class="icon-book-open icon"></i> <span>Puntos de Venta</span></a></li>
					</ul>

					<div id="test-swipe-1" class="col s12" style="border-bottom: 4px #555 solid;">
						<div class="row">
							<div class="col s12">
								<div class="qcTabTitle"><h4>Detalles<span> Conoce más sobre este evento</span></h4></div>
								
								<div class="row">
									<div class="col s8">

										<div class="qcPricing col s12 center hoverable mb-15 mt-30">
											<div class="box ">
												<header>
													<div class="col s12 blue">Precios por entrada</div>
												</header>
												<div class="price col s12"><span>$320</span></div>
												
											</div>
										</div>
										
										<h4 class="mb-15 mt-30" style="border-bottom: 1px solid #ccc;">Biografía</h4>
										
										<p class="qcPageDesc"><b>Edson Zuñiga</b> es un comediante y cantante de cómico mexicano nacido en la ciudad de Monterrey Nuevo León, destacado con participación en radio, televisión y diversos escenarios como teatros, palenques y centros nocturnos. surgió del concurso “Riatatán” en 1995 y a partir de entonces ha tenido un continuo ascenso actuando en programas de televisión tanto deportivos como de comedia a nivel nacional e internacional.<br><br>
									
										"El Norteño" logra con su carisma y espontaneidad en conjunto, uno de los mejores shows de comedia en México, con distintos tipos de espectaculo ya que fusiona el stand up y la comedia con un estilo único, como solamente el Norteño lo puede hacer. Artista que garantiza minutos de risa y carcajadas de principio a fin.<br><br>
									
										Cuenta con más de quince años de experiencia haciendo reír al público con sus personajes de “El Norteño” y “El Compayito”.<br><br>
									
										<strong>Obtenido de: <a href="http://www.rapproducciones.com/">RAPP PRODUCCIONES & BOOKING</a></strong></p>
									</div>
									
									<!-- ## SLIDER ## -->
									<div class="col s4">
										<div class="owl-carousel owl-theme mt-30">
											<div class="item" data-merge="1"><img src="{{ asset('img/norteno-zitacuaro.jpeg') }}"></div>
											<div class="item" data-merge="1"><img src="{{ asset('img/norteno1.jpg') }}"></div>
											<div class="item" data-merge="1"><img src="{{ asset('img/norteno2.jpg') }}"></div>
										</div>
									</div>
								</div>

							</div>
						</div>

					</div>

					<div id="test-swipe-2" class="col s12" style="border-bottom: 4px #555 solid;">
						<div class="row">

							<!-- ## TAB TITLE ## -->
							<div class="col s12">
								<div class="qcTabTitle">
									<h4>Lugar & mapa<span> Ubicación del lugar del evento</span></h4>
								</div>
							</div>


							<div class="row">
								<div class=" col s12 mt-30">
									<h5>Up</h5>
								</div>
								<div class="col s6">									
									<!-- ## VENUE MAP ## -->
									<div class="qcEventlayout">
										<iframe src="https://www.google.com/maps/embed?pb=!1m14!1m8!1m3!1d15050.629420208927!2d-100.3437235!3d19.4272052!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x0%3A0x1953734ef7a74bc4!2sUp+Zitacuaro!5e0!3m2!1ses!2smx!4v1488756754545" width="100%" height="320" frameborder="0" style="border:0" allowfullscreen></iframe>
									</div>
									
								</div>
								
								<!-- ## ADDRESS LIST ## -->
								<div class="col s6">
									<ul class="qcAddress">
										<li><i class="medium material-icons">location_on</i><p><strong>DIRECCIÓN</strong>: Joaquín Amaro oriente #71 61514 Heroica Zitácuaro, Mich.</p></li>
										<li><i class="medium material-icons">call</i><p><strong>TELÉFONO</strong>: 715 153 3501</p></li>
										<li><i class="medium material-icons">description</i><p><strong>FAX</strong>: No disponible</p></li>
										<li><i class="medium material-icons">email</i><p><strong>EMAIL</strong>: No disponible</p></li>
										<li><i class="medium material-icons">language</i><p><strong>Facebook</strong>: <a title="website" href="https://www.facebook.com/Up-Zitacuaro-1811507289063276/" target="_blank">https://www.facebook.com/Up-Zitacuaro-1811507289063276/</a></p></li>
									</ul>
								</div>
							</div>
						</div>
					</div>

					<div id="test-swipe-3" class="col s12" style="border-bottom: 4px #555 solid;">
						<div class="row">

							<div class="col s12">
								<div class="qcTabTitle">
									<h4>Puntos de venta<span>Donde conseguir tus accesos</span></h4>
								</div>
							</div>
							
							<div class="row">
								<div class=" col s12 mt-30">
									<h5>Up</h5>
								</div>
								<div class="col s6">									
									<!-- ## VENUE MAP ## -->
									<div class="qcEventlayout">
										<iframe src="https://www.google.com/maps/embed?pb=!1m14!1m8!1m3!1d15050.629420208927!2d-100.3437235!3d19.4272052!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x0%3A0x1953734ef7a74bc4!2sUp+Zitacuaro!5e0!3m2!1ses!2smx!4v1488756754545" width="100%" height="320" frameborder="0" style="border:0" allowfullscreen></iframe>
									</div>
									
								</div>
								
								<!-- ## ADDRESS LIST ## -->
								<div class="col s6">
									<ul class="qcAddress">
										<li><i class="medium material-icons">location_on</i><p><strong>DIRECCIÓN</strong>: Joaquín Amaro oriente #71 61514 Heroica Zitácuaro, Mich.</p></li>
										<li><i class="medium material-icons">call</i><p><strong>TELÉFONO</strong>: 715 153 3501</p></li>
										<li><i class="medium material-icons">description</i><p><strong>FAX</strong>: No disponible</p></li>
										<li><i class="medium material-icons">email</i><p><strong>EMAIL</strong>: No disponible</p></li>
										<li><i class="medium material-icons">language</i><p><strong>Facebook</strong>: <a title="website" href="https://www.facebook.com/Up-Zitacuaro-1811507289063276/" target="_blank">https://www.facebook.com/Up-Zitacuaro-1811507289063276/</a></p></li>
									</ul>
								</div>

								<div class=" col s12 mt-30">
									<h5>El Ranchero Chido</h5>
								</div>
								<div class="col s6">									
									<!-- ## VENUE MAP ## -->
									<div class="qcEventlayout">
										<iframe src="https://www.google.com/maps/embed?pb=!1m14!1m8!1m3!1d15050.629420208927!2d-100.3437235!3d19.4272052!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x0%3A0x1953734ef7a74bc4!2sUp+Zitacuaro!5e0!3m2!1ses!2smx!4v1488756754545" width="100%" height="320" frameborder="0" style="border:0" allowfullscreen></iframe>
									</div>
									
								</div>
								
								<!-- ## ADDRESS LIST ## -->
								<div class="col s6">
									<ul class="qcAddress">
										<li><i class="medium material-icons">location_on</i><p><strong>DIRECCIÓN</strong>: Cuahutemoc poniente 51 #51 61518 José Ma. Morelos Zitácuaro, Mich.</p></li>
										<li><i class="medium material-icons">call</i><p><strong>TELÉFONO</strong>: 715 153 0017</p></li>
										<li><i class="medium material-icons">description</i><p><strong>FAX</strong>: No disponible</p></li>
										<li><i class="medium material-icons">email</i><p><strong>EMAIL</strong>: No disponible</p></li>
										<li><i class="medium material-icons">language</i><p><strong>Facebook</strong>: <a title="website" href="https://www.facebook.com/rodeo.chido/" target="_blank">https://www.facebook.com/rodeo.chido/</a></p></li>
									</ul>
								</div>

								<div class=" col s12 mt-30">
									<h5>María Bonita La Cervecería</h5>
								</div>
								<div class="col s6">									
									<!-- ## VENUE MAP ## -->
									<div class="qcEventlayout">
										<iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3762.6484427721807!2d-100.34539248552572!3d19.42758998688712!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x85d2a364b13f9669%3A0x1e4cd86c4e0560f!2sJoaqu%C3%ADn+Amaro+Ote.+77%2C+El+Moral%2C+61514+Zit%C3%A1cuaro%2C+Mich.!5e0!3m2!1ses!2smx!4v1488757649342" width="100%" height="320" frameborder="0" style="border:0" allowfullscreen></iframe>
									</div>
									
								</div>
								
								<!-- ## ADDRESS LIST ## -->
								<div class="col s6">
									<ul class="qcAddress">
										<li><i class="medium material-icons">location_on</i><p><strong>DIRECCIÓN</strong>: Joaquin Amaro oriente #77 61514 Zitácuaro, Mich.</p></li>
										<li><i class="medium material-icons">call</i><p><strong>TELÉFONO</strong>: 715 104 1076</p></li>
										<li><i class="medium material-icons">description</i><p><strong>FAX</strong>: No disponible</p></li>
										<li><i class="medium material-icons">email</i><p><strong>EMAIL</strong>: No disponible</p></li>
										<li><i class="medium material-icons">language</i><p><strong>Facebook</strong>: <a title="website" href="https://www.facebook.com/mariabonita.cerveceria/" target="_blank">https://www.facebook.com/mariabonita.cerveceria/</a></p></li>
									</ul>
								</div>
							</div>
						</div>
					</div>

					</div>
				</div>
			</div>
		</main>

		<footer class="page-footer grey darken-3">
			<div class="container">
				<div class="row">
					<div class="col l6 s12">
						<h5 class="white-text">Bolematico.com.mx</h5>
					</div>
				</div>
			</div>
			<div class="footer-copyright">
				<div class="container">
					<div class="row">
						<div class="col l6">
							Todos los derechos reservados.	    			
						</div>
						<div class="col l6 right-align">
							© {!! date('Y') !!}
						</div>
					</div>
				</div>
			</div>
		</footer>

		<script type="text/javascript" src="https://code.jquery.com/jquery-2.1.1.min.js"></script>
		<script type="text/javascript" src="{{asset('js/materialize.js')}}"></script>
		<script type="text/javascript" src="{{asset('js/owl.carousel.js')}}"></script>
		<script>
			$(document).ready(function(){
				$(".button-collapse").sideNav({
				 edge: 'right', // Choose the horizontal origin
				 closeOnClick: true
				});

				$('.owl-carousel').owlCarousel({
					items:1,
					margin: 25,
					loop: true, 
					autoplay:true,
					autoplayTimeout:4000,
					autoplayHoverPause:true
				});

				$('select').material_select();

				$('.materialboxed').materialbox();//puede funcionar sin esta declaracion

				$(".dropdown-button").dropdown(); //puede funcionar sin esta declaracion

				@if($errors)
				@foreach($errors->all() as $error)
				Materialize.toast('{{ $error }}', 4000);
				@endforeach
				@endif
			});
		</script>
	</body>
	</html>