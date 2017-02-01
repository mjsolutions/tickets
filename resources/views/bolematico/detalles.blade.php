<!DOCTYPE html>
<html lang="es">
<head>
	<title>Bolematico | @yield('title','Eventos')</title>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0"/>
	<link href="http://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
	<link rel="stylesheet" type="text/css" href="{{asset('css/materialize.min.css')}}">
	<link rel="stylesheet" type="text/css" href="{{asset('css/styles.css')}}">
	<link rel="stylesheet" type="text/css" href="{{asset('css/owl.carousel.css')}}">
	<link rel="stylesheet" type="text/css" href="{{asset('css/owl.theme.default.css')}}">
	<link rel="stylesheet" type="text/css" href="{{asset('css/owl.theme.green.css')}}">
	<link href="https://file.myfontastic.com/p33ryNdn2ug99gf3MgkiUK/icons.css" rel="stylesheet">
	<script>
		function draw(scale, translatePos){
			var canvas = document.getElementById("myCanvas");
			var context = canvas.getContext("2d");

		    // clear canvas
		    context.clearRect(0, 0, canvas.width, canvas.height);

		    context.save();
		    var mapa = new Image();
		    mapa.src = "{{asset('img/teatro-morelos.svg')}}";

		    mapa.addEventListener('load', mostrar_imagen, false);

		    function mostrar_imagen() {
		    	context.drawImage(mapa, translatePos.x-375, translatePos.y-250, 750*scale, 500*scale);  
		    }       
		}

		window.onload = function(){
			var canvas = document.getElementById("myCanvas");

			var translatePos = {
				x: canvas.width / 2,
				y: canvas.height / 2
			};

			var scale = 1.0;
			var scaleMultiplier = 0.8;
			var startDragOffset = {};
			var mouseDown = false;

		    // add button event listeners
		    document.getElementById("plus").addEventListener("click", function(){
		    	scale /= scaleMultiplier;
		    	draw(scale, translatePos);
		    }, false);

		    document.getElementById("minus").addEventListener("click", function(){
		    	scale *= scaleMultiplier;
		    	draw(scale, translatePos);
		    }, false);

		    // add event listeners to handle screen drag
		    canvas.addEventListener("mousedown", function(evt){
		    	mouseDown = true;
		    	startDragOffset.x = evt.clientX - translatePos.x;
		    	startDragOffset.y = evt.clientY - translatePos.y;
		    });

		    canvas.addEventListener("mouseup", function(evt){
		    	mouseDown = false;
		    });

		    canvas.addEventListener("mouseover", function(evt){
		    	mouseDown = false;
		    });

		    canvas.addEventListener("mouseout", function(evt){
		    	mouseDown = false;
		    });

		    canvas.addEventListener("mousemove", function(evt){
		    	if (mouseDown) {
		    		translatePos.x = evt.clientX - startDragOffset.x;
		    		translatePos.y = evt.clientY - startDragOffset.y;
		    		draw(scale, translatePos);
		    	}
		    });

		    draw(scale, translatePos);
		};
	</script>
</head>
<body onmousedown="return false;">
	<header>
		@include('bolematico.nav2')
	</header>

	<main>
		<div id="imagen-header"></div>
		<div class="container">
			<div class="row">
				<div class="col s8 offset-s2">
					<ul id="qcTabNav" class="tabs">
						<li class="tab col s3"><a class="active" href="#test-swipe-1"><i class="icon-book-open icon"></i> <span>Descripción</span></a></li>
						<li class="tab col s3"><a href="#test-swipe-2"><i class="icon-book-open icon"></i> <span>Lugar y mapa</span></a></li>
						<li class="tab col s3 disabled"><a href="#test-swipe-3"><i class="icon-book-open icon"></i> <span>Galería (Proximamente)</span></a></li>
						<li class="tab col s3" style="background-color: darkorange;"><a href="#test-swipe-4" style="background-color: darkorange;"><i class="icon-book-open icon"></i> <span style="color: white;">Buscar boletos</span></a></li>
					</ul>

					<div id="test-swipe-1" class="col s12" style="border-bottom: 4px #555 solid;">
						<div class="row">
							<!-- ## TAB TITLE & DESC ## -->
							<div class="col s8">
								<div class="qcTabTitle">
									<h4>Biografía<span> Conoce más acerca del artista</span></h4>
								</div>
								<p class="qcPageDesc">Miguel Angel Salazar, conocido como Mike Salazar "El Caballero de la Comedia" nació en Santiago, Nuevo León, México el 30 de agosto de 1989.<br><br>

									Mike Salazar ha sido reconocido en México por su talento en comedia y acción; Gracias a su entusiasmo y gran talento, tiene la oportunidad de tener apariciones especiales en programas de televisión como Sabadazo, Guerra de Chistes, XE Marilé y otros ... Todos los programas de TV de Televisa México.<br><br>

									Debido a su enorme talento como actor, comediante y cantante; Mike Salazar está entre el pequeño porcentaje que ha subido a la cima entre los comediantes hispanos.<br><br>

									Mike Salazar ha viajado con éxito por todo México con su programa de comedia; Que realiza una rutina de buen humor, mimetismo y canciones. Su show se ha presentado en varios lugares de México, como en bares, ferias, teatros, eventos masivos y privados.<br><br>

									<strong>Obtenido de: IMDb</strong></p>
								</div>

								<!-- ## SLIDER ## -->
								<div class="col s4">
									<div class="owl-carousel owl-theme" style="padding-top: 33.3%;">
										<div class="item" data-merge="1"><img src="{{ asset('img/mike_salazar.jpeg') }}"></div>
										<div class="item" data-merge="1"><img src="{{ asset('img/mike1.jpg') }}"></div>
										<div class="item" data-merge="1"><img src="{{ asset('img/mike2.jpg') }}"></div>
									</div>
								</div>

							</div>
						</div>

						<div id="test-swipe-2" class="col s12" style="border-bottom: 4px #555 solid;">
							<div class="row">

								<!-- ## TAB TITLE ## -->
								<div class="col s5">
									<div class="qcTabTitle no-border">
										<h4>Lugar & mapa<span> Ubicación y diagrama del lugar del evento</span></h4>
									</div>
								</div>

								<!-- ## ADDRESS LIST ## -->
								<div class="col s7">
									<ul class="qcAddress">
										<li><i class="medium material-icons">location_on</i><p><strong>DIRECCIÓN</strong>: Av. Ventura Puente s/n, Félix Ireta, 58070 Morelia, MICH</p></li>
										<li><i class="medium material-icons">call</i><p><strong>TELÉFONO</strong>: 01 443 232 4400</p></li>
										<li><i class="medium material-icons">description</i><p><strong>FAX</strong>: No disponible</p></li>
										<li><i class="medium material-icons">email</i><p><strong>EMAIL</strong>: No disponible</p></li>
										<li><i class="medium material-icons">language</i><p><strong>PÁGINA WEB</strong>: <a title="website" href="http://ceconexpo.com/teatro-morelos/" target="_blank">http://ceconexpo.com/teatro-morelos/</a></p></li>
									</ul>
								</div>
							</div>

							<div class="dblBorder">
								<div class="row">
									<div class="col s12">

										<!-- ## VENUE LAYOUT PLAN ## -->
										<div class="qcEventlayout">
											<h1>Diagrama del lugar</h1>
											<div class="row">
												<img class="materialboxed" width="100%" src="{{asset('img/teatro-morelos-fondo.svg')}}">
											</div>
										</div>

										<div class="dblBorder only"></div>

										<!-- ## VENUE MAP ## -->
										<div class="qcEventlayout">
											<h1>Mapa</h1>
											<iframe src="https://www.google.com/maps/embed?pb=!1m23!1m12!1m3!1d120214.61682735915!2d-101.25314044715232!3d19.68251142368705!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!4m8!3e6!4m0!4m5!1s0x842d0de872e8d51b%3A0x12e74c7f08b607c2!2sTeatro+Jos%C3%A9+Mar%C3%ADa+Morelos%2C+Av.+Ventura+Puente+s%2Fn%2C+F%C3%A9lix+Ireta%2C+58070+Morelia%2C+MICH%2C+M%C3%A9xico!3m2!1d19.682525!2d-101.1831!5e0!3m2!1ses-419!2s!4v1485801304418" width="100%" height="300" frameborder="0" style="border:0" allowfullscreen></iframe>
										</div>
									</div>
								</div>
							</div>
						</div>

						<div id="test-swipe-3" class="col s12" style="border-bottom: 4px #555 solid;">
							<div class="row">


							</div>
						</div>

						<div id="test-swipe-4" class="col s12" style="border-bottom: 4px #555 solid;">
							<div class="row">
								<div class="col s12">
									<div class="qcTabTitle"><h4>Boletos<span> Asegura tu lugar y compra tu boleto!</span></h4></div>
									<!-- ## MODULE TITLE ## -->
									{{--<div class="qcModTitle">
										<h2>Tabla de precios</h2>
										<p>Paquetes de boletos & precios</p>
									</div> --}}
									<!-- ## PRICING ## -->
									<div class="qcPricingWrapper">
										<!-- ## PRICING 1 ## -->
										<div class="qcPricing col s4 center">
											<div class="box">
												<header>PLATA</header>
												<div class="price"><span>$250</span> Por entrada</div>
												<ul class="texto-precio">
													<li>Filas Y a Z</li>
												</ul>
												<footer><a href="#">Comprar ahora</a></footer>
											</div>
										</div>
										<!-- ## PRICING 2 ## -->
										<div class="qcPricing col s4 center">
											<div class="box">
												<header>ORO</header>
												<div class="price"><span>$350</span> Por entrada</div>
												<ul class="texto-precio">
													<li>Filas Q a X</li>
												</ul>
												<footer><a href="#">Comprar ahora</a></footer>
											</div>
										</div>
										<!-- ## PRICING 3 ## -->
										<div class="qcPricing col s4 center">
											<div class="box">
												<header>DIAMANTE</header>
												<div class="price"><span>$450</span> Por entrada</div>
												<ul class="texto-precio">
													<li>Filas A a Ñ</li>
												</ul>
												<footer><a href="#">Comprar ahora</a></footer>
											</div>
										</div>
									</div>
								</div>
							</div>

							<div class="dblBorder">
								<div class="row">
									<div class="col s12">

										<!-- ## VENUE LAYOUT PLAN ## -->
										<div class="qcEventlayout">
											<h1>Diagrama del lugar</h1>
											<div class="row">
												<div id="canvas-wrapper" style="margin: 0 auto;">
													<canvas id="myCanvas" width="750" height="500"></canvas>
													<div id="button-canvas-wrapper">
														<input type="button" id="plus" value="+"><input type="button" id="minus" value="-">
													</div>
												</div>
											</div>
										</div>

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
					loop: true
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