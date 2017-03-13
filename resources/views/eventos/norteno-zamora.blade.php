<!DOCTYPE html>
<html lang="es">
<head>
	<title>El Norteño en Zamora | Bolematico</title>
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
					<ul class="tabs">
						<li class="tab col s3" ><a href="#test-swipe-1"  class="active"><i class="icon-book-open icon"></i> <span >Detalles</span></a></li>					
						<li class="tab col s3"><a href="#test-swipe-2"><i class="icon-book-open icon"></i> <span>Lugar</span></a></li>
						<li class="tab col s3"><a href="#test-swipe-3"><i class="icon-book-open icon"></i> <span>Puntos de Venta</span></a></li>
					</ul>

					<div id="test-swipe-1" class="col s12" style="border-bottom: 4px #555 solid;">
						<div class="row">
							<div class="col s12">
								<div class="qcTabTitle"><h4>Detalles<span> Conoce más sobre este evento</span></h4></div>
								
								<div class="row">
									<div class="col m8 s12">

										<div class="col s12 hide-on-med-and-up">
											<div class="owl-carousel owl-theme mt-30">
												<div class="item" data-merge="1"><img src="{{ asset('img/norteno-zamora.jpeg') }}"></div>
												<div class="item" data-merge="1"><img src="{{ asset('img/norteno1.jpg') }}"></div>
												<div class="item" data-merge="1"><img src="{{ asset('img/norteno2.jpg') }}"></div>
											</div>
										</div>

										<div class="qcPricing col s12 center hoverable mb-15 mt-30">
											<div class="box ">
												<header>
													<div class="col s12 blue">Precios por entrada</div>
												</header>
												<div class="price col s12"><span>$420 / $320</span></div>
												
											</div>
										</div>
										
										<h4 class="mb-15 mt-30" style="border-bottom: 1px solid #ccc;">Biografía</h4>
										
										<p class="qcPageDesc"><b>Edson Zuñiga</b> es un comediante y cantante de cómico mexicano nacido en la ciudad de Monterrey Nuevo León, destacado con participación en radio, televisión y diversos escenarios como teatros, palenques y centros nocturnos. surgió del concurso “Riatatán” en 1995 y a partir de entonces ha tenido un continuo ascenso actuando en programas de televisión tanto deportivos como de comedia a nivel nacional e internacional.<br><br>
									
										"El Norteño" logra con su carisma y espontaneidad en conjunto, uno de los mejores shows de comedia en México, con distintos tipos de espectaculo ya que fusiona el stand up y la comedia con un estilo único, como solamente el Norteño lo puede hacer. Artista que garantiza minutos de risa y carcajadas de principio a fin.<br><br>
									
										Cuenta con más de quince años de experiencia haciendo reír al público con sus personajes de “El Norteño” y “El Compayito”.<br><br>
									
										<strong>Obtenido de: <a href="http://www.rapproducciones.com/">RAPP PRODUCCIONES & BOOKING</a></strong></p>
									</div>
									
									<!-- ## SLIDER ## -->
									<div class="col m4 hide-on-small-only">
										<div class="owl-carousel owl-theme mt-30">
											<div class="item" data-merge="1"><img src="{{ asset('img/norteno-zamora.jpeg') }}"></div>
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
								<div class="col s12 mt-30">
									<h5>Diablo Wings</h5>
								</div>
								<div class="col s6">									
									<!-- ## VENUE MAP ## -->
									<div class="qcEventlayout">
										<iframe src="https://www.google.com/maps/embed?pb=!1m14!1m8!1m3!1d14998.649612371011!2d-102.290882!3d19.980695!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x0%3A0x6dad7dee7bbb895e!2sDiablo+Wings!5e0!3m2!1ses!2smx!4v1488664690591" width="100%" height="320" frameborder="0" style="border:0" allowfullscreen></iframe>
									</div>
									
								</div>
								
								<!-- ## ADDRESS LIST ## -->
								<div class="col s6">
									<ul class="qcAddress">
										<li><i class="medium material-icons">location_on</i><p><strong>DIRECCIÓN</strong>: Martinez de Navarrete 20, Nueva Luneta, Centro, 59675 Zamora, MICH</p></li>
										<li><i class="medium material-icons">call</i><p><strong>TELÉFONO</strong>:  044 33 2078 0985</p></li>
										<li><i class="medium material-icons">description</i><p><strong>FAX</strong>: No disponible</p></li>
										<li><i class="medium material-icons">email</i><p><strong>EMAIL</strong>: No disponible</p></li>
										<li><i class="medium material-icons">language</i><p><strong>Facebook</strong>: <a title="website" href="https://www.facebook.com/diablohotwings/" target="_blank">https://www.facebook.com/diablohotwings/</a></p></li>
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
							
							<div class="mb-15 col s12 mt-30">
								<h5>Diablos Wings</h5>
							</div>
							<div class="col m6">
								<iframe src="https://www.google.com/maps/embed?pb=!1m14!1m8!1m3!1d14998.649612371011!2d-102.290882!3d19.980695!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x0%3A0x6dad7dee7bbb895e!2sDiablo+Wings!5e0!3m2!1ses!2smx!4v1488664690591" width="100%" height="320" frameborder="0" style="border:0" allowfullscreen></iframe>
							</div>
							
							<div class="col m6">
								<ul class="qcAddress">
									<li><i class="medium material-icons">location_on</i><p><strong>DIRECCIÓN</strong>: Av. Martinez de Navarrete 20, Col. Nueva Luneta, Centro, 59675 Zamora, MICH</p></li>
									<li><i class="medium material-icons">call</i><p><strong>TELÉFONO</strong>:  044 33 2078 0985</p></li>
									<li><i class="medium material-icons">description</i><p><strong>FAX</strong>: No disponible</p></li>
									<li><i class="medium material-icons">email</i><p><strong>EMAIL</strong>: No disponible</p></li>
									<li><i class="medium material-icons">language</i><p><strong>Facebook</strong>: <a title="website" href="https://www.facebook.com/diablohotwings/" target="_blank">https://www.facebook.com/diablohotwings/</a></p></li>
								</ul>
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
				 edge: 'left', // Choose the horizontal origin
				 // closeOnClick: true
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