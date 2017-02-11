<!DOCTYPE html>
<html lang="es">
<head>
	<title>Bolematico | @yield('title','Inicio')</title>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0"/>
	<link href="http://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
	<link rel="stylesheet" type="text/css" href="{{asset('css/materialize.min.css')}}">
	<link rel="stylesheet" type="text/css" href="{{asset('css/styles.css')}}">
	<link href="https://file.myfontastic.com/p33ryNdn2ug99gf3MgkiUK/icons.css" rel="stylesheet">
</head>
<body>
	<header>
		@include('bolematico.nav')
	</header>

	<main>
		<section id="home">
			<div id="inicio"></div>
			<div id="contenido">
				<div class='row'>
					<div class='col s8' style="float: none; margin: 0 auto;">
						<div class='card horizontal hoverable'>
							<div class='card-stacked'>
								<div class='card-content'>
									<div class="mensaje_inicio">
										<p><strong>Haz click en ver todos los eventos o usa los controles que vienen en la parte inferior de este mensaje, para encontrar más rápidamente el evento que buscas.</strong></p>
									</div>

									<div class="row">
										<div class="input-field col s4">
											<select multiple>
												<option value="" disabled selected>Eliga un estado</option>
												<option value="1">Aguascalientes</option>
												<option value="2">Baja California</option>
												<option value="3">Baja California Sur</option>
												<option value="4">Campeche</option>
												<option value="5">Chihuahua</option>
												<option value="6">Chiapas</option>
												<option value="7">Coahuila</option>
												<option value="8">Colima</option>
												<option value="9">Durango</option>
												<option value="10">Guanajuato</option>
												<option value="11">Guerrero</option>
												<option value="12">Hidalgo</option>
												<option value="13">Jalisco</option>
												<option value="14">México</option>
												<option value="15">Michoacán</option>
												<option value="16">Morelos</option>
												<option value="17">Nayarit</option>
												<option value="18">Nuevo León</option>
												<option value="19">Oaxaca</option>
												<option value="20">Puebla</option>
												<option value="21">Querétaro</option>
												<option value="22">Quinatana Roo</option>
												<option value="23">San Luis Potosí</option>
												<option value="24">Sinaloa</option>
												<option value="25">Sonora</option>
												<option value="26">Tabasco</option>
												<option value="27">Tamaulipas</option>
												<option value="28">Tlaxcala</option>
												<option value="29">Veracruz</option>
												<option value="30">Yucatán</option>
												<option value="31">Zacatecas</option>
											</select>
											<label>Estado</label>
										</div>

										<div class="input-field col s4">
											<select multiple>
												<option value="" disabled selected>Eliga una Ciudad</option>
												<option value="1">Aguascalientes</option>
												<option value="2">Campeche</option>
												<option value="3">CDMX</option>
												<option value="4">Cd. Victoria</option>
												<option value="5">Chetumal</option>
												<option value="6">Chihuahua</option>
												<option value="7">Chilpancingo</option>
												<option value="8">Colima</option>
												<option value="9">Cuernavaca</option>
												<option value="10">Culiacán</option>
												<option value="11">Durango</option>
												<option value="12">Guadalajara</option>
												<option value="13">Guanajuato</option>
												<option value="14">Hermosillo</option>
												<option value="15">La Paz</option>
												<option value="16">Mérida</option>
												<option value="17">Mexicalli</option>
												<option value="18">Monterrey</option>
												<option value="19">Morelia</option>
												<option value="20">Oaxaca</option>
												<option value="21">Pachuca</option>
												<option value="22">Puebla</option>
												<option value="23">Querétaro</option>
												<option value="24">Saltillo</option>
												<option value="25">San Luis Potosí</option>
												<option value="26">Tepic</option>
												<option value="27">Tlaxcala</option>
												<option value="28">Toluca</option>
												<option value="29">Tuxtla Gutiérrez</option>
												<option value="30">Xalapa</option>
												<option value="31">Zacatecas</option>
												<option value="32">Otro</option>
											</select>
											<label>Ciudad</label>
										</div>

										<div class="input-field col s4">
											<select multiple>
												<option value="" disabled selected>Eliga una categoría</option>
												<option value="1">Conciertos</option>
												<option value="2">Deportes</option>
												<option value="3">Teatro y cultura</option>
												<option value="3">Familiares</option>
												<option value="3">Especiales</option>
											</select>
											<label>Categoria</label>
										</div>
									</div>
									<div class="row">
										<div class="input-field col s6">
											<label for="fecha_limite" class="">Fecha Límite</label>
											<input class="datepicker picker__input" name="" type="text" id="fecha_nacimiento" readonly="" tabindex="-1" aria-haspopup="true" aria-expanded="false" aria-readonly="false" aria-owns="fecha_nacimiento_root">
										</div>
										<div class="input-field col s6">
											<label for="fecha_limite" class="">Fecha Límite</label>
											<input class="datepicker picker__input" name="" type="text" id="fecha_nacimiento" readonly="" tabindex="-1" aria-haspopup="true" aria-expanded="false" aria-readonly="false" aria-owns="fecha_nacimiento_root">
										</div>
									</div>
									<div class="row center">
									<a href="#eventos" class="btn-large waves-effect waves-light teal lighten-1 page-scroll">Ver todos los eventos</a>
									</div>
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>
		</section>
		<section id="eventos">
			<div class="container">
				<div class="row">
					<div class="col m3 s12">
						<h1 class="titulo-h1">Eventos <span>(1)</span></h1>
						<div class="filter-elements">
							<a class="btn waves-effect waves-light green" href="#!">Todos los Eventos</a>
							<a class="btn waves-effect waves-light blue" href="#!">Eventos Próximos</a>
							<a class="btn waves-effect waves-light orange" href="#!">Eventos Pasados</a>
							<div class="filter-container">
								<strong class="big-font">Filtra lo que buscas:</strong>

								<ul class="collapsible" data-collapsible="expandable">
									<li>
										<div class="collapsible-header"><i class="fa fa-eur"></i>Precio</div>
										<div class="collapsible-body">
											<div class="input-field col l4 m12">
												<input class="validate" type="text" name="minp" id="minp" value="0">
												<label for="minp">Precio Inicial</label>
											</div>
											<div class="input-field col l5 m12">
												<input class="validate" type="text" name="maxp" id="maxp" value="0">
												<label for="maxp">Precio Limite</label>
											</div>
											<div class="input-field col l3 m12 small-btn-container">
												<a class="btn-floating btn-large waves-effect waves-light green tooltipped" data-position="right" data-delay="50" data-tooltip="Buscar" href="" data-tooltip-id="223c4e81-b02f-aa19-bd99-3ed5a5b82a33"><i class="material-icons">search</i></a>
											</div>

										</div>
									</li>
									<li>
										<div class="collapsible-header"><i class="fa fa-paw"></i>Categoría</div>
										<div class="collapsible-body">
											<ul>
												<li>
													<input onclick="" type="checkbox" name="conciertos" id="conciertos" value="1">
													<label for="conciertos">Conciertos (0)</label>
												</li>
												<li>
													<input onclick="" type="checkbox" name="deportes" id="deportes" value="1">
													<label for="deportes">Deportes (0)</label>
												</li>
												<li>
													<input onclick="" type="checkbox" name="teatro" id="teatro" value="1">
													<label for="teatro">Teatro y Culturales (0)</label>
												</li>
												<li>
													<input onclick="" type="checkbox" name="familiares" id="familiares" value="1">
													<label for="familiares">Familiares (0)</label>
												</li>
												<li>
													<input onclick="" type="checkbox" name="especiales" id="especiales" value="1">
													<label for="especiales">Especiales (1)</label>
												</li>
											</ul>
										</div>
									</li>
									<li>
										<div class="collapsible-header"><i class="fa fa-barcode"></i>Fecha</div>
										<div class="collapsible-body">
											<ul>

												<li>
													<label for="fecha_inicio" class="">Fecha de Inicio</label>
													<input class="datepicker picker__input" name="" type="text" id="fecha_inicio" readonly="" tabindex="-1" aria-haspopup="true" aria-expanded="false" aria-readonly="false">
												</li>
												<li>
													<label for="fecha_limite" class="">Fecha Límite</label>
													<input class="datepicker picker__input" name="" type="text" id="fecha_limite" readonly="" tabindex="-1" aria-haspopup="true" aria-expanded="false" aria-readonly="false">
												</li>
											</ul>
										</div>
									</li>
								</ul>
							</div>
						</div>
					</div> <!-- //end filter-->


					<div class="col m9 s12">
						<div class="row header-produktliste">
							<div class="col m8 s12 modelsearch offset-m2">
								<div class="input-field col s12">
									<input type="text" name="term" id="search" placeholder="Busca un evento en específico?, escribalo aquí y encuentre resultados mas rápido" value="" class="ui-autocomplete-input" autocomplete="off">
								</div>

							</div>
						</div>

						<ul class="row produktliste">
							<div class="col m4">
								<div class="card horizontal hoverable">
									<div class="card-image">
										<img src="{{asset('img/mike_salazar.jpeg')}}">
									</div>
									<div class="card-stacked">
										<div class="card-content">
											<h6><strong>Mike Salazar</strong></h6>
											<p>Teatro Morelos</p>
											<p>23 de Febrero</p>
										</div>
										<div class="card-action">
											<a href="{{ route('bolematico.detalles') }}">Detalles</a>
										</div>
									</div>
								</div>
							</div>
							<div class="col m4">
								<div class="card horizontal hoverable">
									<div class="card-image">
										<img src="{{asset('img/sofia.jpg')}}">
									</div>
									<div class="card-stacked">
										<div class="card-content">
											<h6><strong>Sofia Niño de Rivera</strong></h6>
											<p>Teatro Morelos</p>
											<p>02 de Marzo</p>
										</div>
										<div class="card-action">
											<a href="{{ route('bolematico.sofia') }}">Detalles</a>
										</div>
									</div>
								</div>
							</div>
							{{-- <div class="col m4 m4">
								<div class="card horizontal hoverable">
									<div class="card-image">
										<img src="http://lorempixel.com/100/190/nature/6">
									</div>
									<div class="card-stacked">
										<div class="card-content">
											<p><strong>Titulo o nombre del evento</strong></p>
											<p>Lugar del evento</p>
											<p>Fecha del evento</p>
										</div>
										<div class="card-action">
											<a href="#">Detalles del evento</a>
										</div>
									</div>
								</div>
							</div> --}}
						</ul>

{{-- 						<div class="col-md-12">
							<nav>
								<ul class="pagination">
									<li class="active"><a>1</a></li><li><a href="">2</a></li><li><a href="">3</a></li><li><a href="">4</a></li><li><a href="">5</a></li><li><a href="">&gt;</a></li>
								</ul>
							</nav>
						</div> --}}
					</div>
				</div>
			</div>
		</section>
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
	<script>
		$(document).ready(function(){
			$(".button-collapse").sideNav({
				 edge: 'right', // Choose the horizontal origin
				 closeOnClick: true
				});
			if($('#flash-overlay-modal')[0]){
				$('#flash-overlay-modal').openModal();   
			}
			$('.modal-trigger').leanModal();
			$('select').material_select();
			$(".dropdown-button").dropdown(); //puede funcionar sin esta declaracion

			@if($errors)
			@foreach($errors->all() as $error)
			Materialize.toast('{{ $error }}', 4000);
			@endforeach
			@endif

			$('a.page-scroll').on('click', function(event) {
				var $anchor = $(this);
				$('html, body').stop().animate({
					scrollTop: $($anchor.attr('href')).offset().top
				}, 1500, 'easeInOutExpo');
				event.preventDefault();
			});

			$('.datepicker').pickadate({
			    selectMonths: true, // Creates a dropdown to control month
			    formatSubmit: 'yyyy-mm-dd',

			    // The title label to use for the month nav buttons
			    labelMonthNext: 'Mes siguiente',
			    labelMonthPrev: 'Mes anterior',

			    // The title label to use for the dropdown selectors
			    labelMonthSelect: 'Selecciona un mes',
			    labelYearSelect: 'Selecciona un año',

			    // Months and weekdays
			    monthsFull: [ 'Enero', 'Febrero', 'Marzo', 'Abril', 'Mayo', 'Junio', 'Julio', 'Agosto', 'Septiembre', 'Octubre', 'Noviembre', 'Diciembre' ],
			    monthsShort: [ 'Ene', 'Feb', 'Mar', 'Abr', 'May', 'Jun', 'Jul', 'Ago', 'Sep', 'Oct', 'Nov', 'Dic' ],
			    weekdaysFull: [ 'Domingo', 'Lunes', 'Martes', 'Miércoles', 'Jueves', 'Viernes', 'Sábado' ],
			    weekdaysShort: [ 'Dom', 'Lun', 'Mar', 'Mie', 'Jue', 'Vie', 'Sab' ],

			    // Materialize modified
			    weekdaysLetter: [ 'D', 'L', 'M', 'I', 'J', 'V', 'S' ],

			    // Today and clear
			    today: 'Hoy',
			    clear: 'Limpiar',
			    close: 'Cerrar',

			    onSet: function (ele) {
			    	if(ele.select){
			    		this.close();
			    	}
			    },
			});

		});
	</script>
</body>
</html>