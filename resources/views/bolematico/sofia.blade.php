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
						<li class="tab col s3" style="background-color: darkorange;"><a href="#test-swipe-1" style="background-color: darkorange;" class="active"><i class="icon-book-open icon"></i> <span style="color: white;">Buscar boletos</span></a></li>
						<li class="tab col s3"><a href="#test-swipe-2"><i class="icon-book-open icon"></i> <span>Descripción</span></a></li>
						<li class="tab col s3"><a href="#test-swipe-3"><i class="icon-book-open icon"></i> <span>Lugar y mapa</span></a></li>
						<li class="tab col s3 disabled"><a href="#test-swipe-4"><i class="icon-book-open icon"></i> <span>Galería (Proximamente)</span></a></li>
					</ul>

					<div id="test-swipe-1" class="col s12" style="border-bottom: 4px #555 solid;">
							<div class="row">
								<div class="col s12">
									<div class="qcTabTitle">
										<h4>Boletos<span> Asegura tu lugar y compra tu boleto!</span></h4></div>
									<div class="qcPricingWrapper">
										<!-- ## PRICING 1 ## -->
										<div class="col m9">
											<div class="qcPricing col s12 center hoverable mb-10">
												<div class="box ">
													<header>
														<div class="col s12 m8">PLATA</div>
														<div class="col m4 btn-buy nopadding hide-on-small-only"><a href="#compra" class="page-scroll"><b>Comprar</b></a></div>
													</header>
													<div class="price col s6"><span>$330</span> Por entrada</div>
													<div class="filas col s6">Filas: Y - Z</div>
													<div class="col s12 btn-buy nopadding hide-on-med-and-up"><a href="#compra" class="page-scroll"><b>Comprar</b></a></div>
												</div>
											</div>
											<!-- ## PRICING 2 ## -->
											<div class="qcPricing col s12 center hoverable mb-10">
												<div class="box">
													<header>
														<div class="col s12 m8">ORO</div>
														<div class="col m4 btn-buy nopadding hide-on-small-only"><a href="#compra" class="page-scroll"><b>Comprar</b></a></div>
													</header>
													<div class="price col s6"><span>$430</span> Por entrada</div>
													<div class="filas col s6">Filas: Q - X</div>
													<div class="col s12 btn-buy nopadding hide-on-med-and-up"><a href="#compra" class="page-scroll"><b>Comprar</b></a></div>
												</div>
											</div>
											<!-- ## PRICING 3 ## -->
											<div class="qcPricing col s12 center hoverable mb-10">
												<div class="box">
													<header>
														<div class="col s12 m8">DIAMANTE</div>
														<div class="col m4 btn-buy nopadding hide-on-small-only"><a href="#compra" class="page-scroll"><b>Comprar</b></a></div>
													</header>
													<div class="price col s6"><span>$530</span> Por entrada</div>
													<div class="filas col s6">Filas: A - Ñ</div>
													<div class="col s12 btn-buy nopadding hide-on-med-and-up"><a href="#compra" class="page-scroll"><b>Comprar</b></a></div>
												</div>
											</div>
										</div>
										<div class="col m3">
											<img src="{{ asset('img/sofia.jpg') }}" class="responsive-img">
										</div>
										
									</div>
								</div>
							</div>

							<section id="compra">
								<div class="dblBorder">
									<div class="row">
										<div class="col s12">
											<div class="qcEventlayout">
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
										<div class="col s12">

											@if(Auth()->check())
												<p class="center-align"><i>* Solo puedes seleccionar un maximo de 10 boletos</i></p>
												{!! Form::open(['route'=>'paymentsofia', 'method'=>'POST']) !!}
													<div class="row">

														<div class="input-field col s4">
															{!! Form::select('zona', ['Diamante' => 'Diamante', 'Oro' => 'Oro', 'Plata' => 'Plata'], '', ['class' => 'select-dropdown', 'required', 'id' => 'zona', 'placeholder' => 'Seleccione una zona']) !!}
															{!! Form::label('zona', 'Zona') !!}
														</div>
														<div class="input-field col s4">
															{!! Form::select('fila', [], '', ['class' => 'select-dropdown', 'required', 'id' => 'fila', 'placeholder' => 'Seleccione primero una zona']) !!}
															{!! Form::label('fila', 'Fila') !!}
														</div>
														<div class="input-field col s4">
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
												<p class="center-align">Debes iniciar sesion para ver poder realizar la compra</p>
												<div class="col s2 col-center">
													<a href="{{ route('login') }}" class="btn btn-block waves-light orange accent-3">Login</a>
												</div>
											@endif

											{{-- <p class="center-align">Por mantenimiento, contamos momentaneamente solo con venta de boletos en taquilla</p> --}}
										</div>
									</div>
								</div>
							</section>
						</div>

					<div id="test-swipe-2" class="col s12" style="border-bottom: 4px #555 solid;">
						<div class="row">
							<!-- ## TAB TITLE & DESC ## -->
							<div class="col s8">
								<div class="qcTabTitle">
									<h4>Biografía<span> Conoce más acerca del artista</span></h4>
								</div>
								<p class="qcPageDesc">Pionera en el género de Stand Up Comedy en México, tiene una carrera de más de 8 años en los que se ha presentado en escenarios de todo el mundo como el Gotham Comedy Club en Nueva York, el Plaza Condesa en la CDMX y en la boda de su primo en Cuernavaca.<br><br>

									En el 2016 lanzó el especial “Sofía Niño de Rivera: Expuesta” en Netflix, convirtiéndose en la primer mujer en hacer un especial en español para la plataforma, donde también participa en la serie Club de Cuervos.<br><br>

									Ha grabado dos temporadas de stand up en Comedy Central y tiene dos TEDTalks sobre cómo echar la hueva.<br><br>

									Aprovechando su background como publicista, ha participado como imagen y creativa en campañas con Uber, Nike, Nescafé, Baileys, entre otras.<br><br>

									Actualmente tiene una gira de stand up por la república mexicana en la que ha hecho más de 50 fechas sold out en un año. <br><br>

									<strong>Obtenido de: <a href="http://sofianino.mx/" target="_blank">sofianino.mx</a></strong></p>
								</div>

								<!-- ## SLIDER ## -->
								<div class="col s4">
									<div class="owl-carousel owl-theme" style="padding-top: 33.3%;">
										<div class="item" data-merge="1"><img src="{{ asset('img/sofia.jpg') }}"></div>
										<div class="item" data-merge="1"><img src="{{ asset('img/sofia1.jpg') }}"></div>
										<div class="item" data-merge="1"><img src="{{ asset('img/sofia2.jpg') }}"></div>
									</div>
								</div>

							</div>
						</div>

						<div id="test-swipe-3" class="col s12" style="border-bottom: 4px #555 solid;">
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
										<li><p><strong>DIRECCIÓN</strong>: Av. Ventura Puente s/n, Félix Ireta, 58070 Morelia, MICH</p></li>
										<li><p><strong>TELÉFONO</strong>: 01 443 232 4400</p></li>
										<li><p><strong>FAX</strong>: No disponible</p></li>
										<li><p><strong>EMAIL</strong>: No disponible</p></li>
										<li><p><strong>PÁGINA WEB</strong>: <a title="website" href="http://ceconexpo.com/teatro-morelos/" target="_blank">http://ceconexpo.com/teatro-morelos/</a></p></li>
									</ul>
								</div>
							</div>

							<div class="dblBorder">
								<div class="col s12">
									<div class="row">

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

						<div id="test-swipe-4" class="col s12" style="border-bottom: 4px #555 solid;">
							<div class="row">


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

				$("#zona").change(function(){
					var id = $(this).val();
					$.ajax({
						url: '{{url('/api/getFilasSofia')}}/' + id,
						method: 'GET',
						// data: 'id=' + id,
						success: function(res){
							var filas = res;
							var options = "<option value='' selected disabled>Selecciona una fila</option>";
							for(i=0; i<filas.length; i++){
								options += '<option value='+filas[i].fila+'>'+ filas[i].fila +'</option>';
							}
							$("#fila").html(options);
							$("#fila").material_select();

						}
					});
				});

				$("#fila").change(function(){
					var id = $(this).val();
					$.ajax({
						url: '{{url('/api/getAsientosSofia')}}/' + id,
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

				// $("form").submit(function(e){
				// 	e.preventDefault();
				// 	var form = $(this)[0];
				// 	alert(form);
				// });

				$('a.page-scroll').on('click', function(event) {
					var $anchor = $(this);
					$('html, body').stop().animate({
						scrollTop: $($anchor.attr('href')).offset().top
					}, 1500, 'easeInOutExpo');
					event.preventDefault();
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