@extends('layouts.main')

@section('title', 'Inicio')

@section('styles')
	<style>
		.label1 {
			position: absolute;
			top: 15px;
			right: -5.5%;
			padding: 5px 10px;
			box-shadow: 1px 2px 5px #111;
			z-index: 1;
			transform: rotate(45deg);
			font-size: 0.75rem;
		}

		#contenido .divider {
			width: 25%;
			height: 2px;
			background: #FFF;
		}

		.titulo-h1 {
			padding-bottom: 15px;
			border-bottom: 3px solid #09bde4;
		}

		.flex-sb {
			display: flex;
			flex-flow:  row wrap;
			justify-content: space-evenly;
			align-items: center;
		}

		.btn-nav-eventos {
			color: #444;
			transition: all 0.3s ease;
			background: transparent;
		}

		.btn-nav-eventos.selected,
		.btn-nav-eventos:hover,
		.btn-nav-eventos:active,
		.btn-nav-eventos:focus {
			background: #09bde4;
			color: #FFF;
		}

		.event-date {
			display: none;
		}

		/*.card.horizontal {
			position: relative;
		}*/
	</style>
@endsection

@section('content')

<section id="home">
	{{-- <div id="inicio"></div> --}}
	<div id="contenido">
		{{-- <div class='row'>
			<div class='col s10 m6' style="float: none; margin: 0 auto;">
				<div class='card horizontal hoverable'>
					<div class='card-stacked'>
						<div class='card-content'>
							<div class="mensaje_inicio hide-on-small-only">
								<p><strong>Haz click en ver todos los eventos o usa los controles que vienen en la parte inferior de este mensaje, para encontrar más rápidamente el evento que buscas.</strong></p>
							</div>

							<div class="row">
								<div class="input-field col m4 s12">
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

								<div class="input-field col m4 s12">
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

								<div class="input-field col m4 s12">
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
		</div> --}}
		<h1 class="center-align">BOLEMATICO</h1>
		<div class="divider"></div>
		<p>Espectáculos y eventos nacionales</p>
	</div>
</section>
<section id="eventos">
	<div class="container">
		<div class="row">
			<div class="col s12 center-align">
				<h1 class="titulo-h1">ULTIMOS EVENTOS {{-- <span>(1)</span> --}}</h1>

				{{-- <div class="filter-elements">
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
				</div> --}}
			</div> <!-- //end filter-->

			<div class="row">
				<div class="col s12 flex-sb nav-eventos">
					<button class="btn waves-effect waves-light btn-nav-eventos selected" data-sort-by="date">Ordenar por Fecha</button>
					<button class="btn waves-effect waves-light btn-nav-eventos" data-sort-by="name">Ordenar por Nombre</button>
				</div>
			</div>


			<div class="row mb-30 grid-eventos">

					<div class="col m6 l4 evento">
						<div class="card horizontal ">
							<div class="card-image">
								<img src="{{asset('img/alan-guanajuato.jpg')}}">
							</div>
							<div class="card-stacked">
								<div class="card-content">
									<h5><strong class="event-name">Alan Saldaña</strong></h5>
									<div class="divider"></div>
									<p class="mt-10 mb-5"><b>Guanajuato</b></p>
									<p>Sky Bar</p>
									<p>01 de Febrero</p>
									<p class="event-date">01/02/2018</p>
									{{-- <p>9:00 pm.</p> --}}
								</div>
								<a href="{{ url('/eventos/alan-saldana-guanajuato') }}" class="btn deep-orange darken-2 mb-0 waves-light waves-effect">Detalles</a>
							</div>
						</div>
					</div>

					<div class="col m6 l4 evento">
						<div class="card horizontal ">
							<div class="card-image">
								<img src="{{asset('img/luiki-01.jpeg')}}">
							</div>
							<div class="card-stacked">
								<div class="card-content">
									<h5><strong class="event-name">Luiki Wiki & Pachis</strong></h5>
									<div class="divider"></div>
									<p class="mt-10 mb-5"><b>Xalapa</b></p>
									<p>Barezzito Xalapa</p>
									<p>01 de Febrero</p>
									<p class="event-date">01/02/2018</p>
									<p>9:00 pm.</p>
								</div>
								<a href="{{ url('/eventos/luiki-wiki-y-pachis-xalapa') }}" class="btn deep-orange darken-2 mb-0 waves-light waves-effect">Detalles</a>
							</div>
						</div>
					</div>

					<div class="col m6 l4 evento">
						<div class="card horizontal ">
							<div class="card-image">
								<img src="{{asset('img/luiki-02.jpeg')}}">
							</div>
							<div class="card-stacked">
								<div class="card-content">
									<h5><strong class="event-name">Luiki Wiki & Pachis</strong></h5>
									<div class="divider"></div>
									<p class="mt-10 mb-5"><b>Veracruz</b></p>
									<p>Barezzito Veracruz</p>
									<p>02 de Febrero</p>
									<p class="event-date">02/02/2018</p>
									<p>8:00 pm.</p>
								</div>
								<a href="{{ url('/eventos/luiki-wiki-y-pachis-veracruz') }}" class="btn deep-orange darken-2 mb-0 waves-light waves-effect">Detalles</a>
							</div>
						</div>
					</div>

					<div class="col m6 l4 evento">
						<div class="card horizontal ">
							<div class="card-image">
								<img src="{{asset('img/luiki-03.jpeg')}}">
							</div>
							<div class="card-stacked">
								<div class="card-content">
									<h5><strong class="event-name">Luiki Wiki & Pachis</strong></h5>
									<div class="divider"></div>
									<p class="mt-10 mb-5"><b>Cd del Carmen</b></p>
									<p>Barezzito Cd del Carmen</p>
									<p>03 de Febrero</p>
									<p class="event-date">03/02/2018</p>
									<p>8:00 pm.</p>
								</div>
								<a href="{{ url('/eventos/luiki-wiki-y-pachis-cd-del-carmen') }}" class="btn deep-orange darken-2 mb-0 waves-light waves-effect">Detalles</a>
							</div>
						</div>
					</div>

					<div class="col m6 l4 evento">
						<div class="card horizontal">
							<div class="card-image">
								<img src="{{asset('img/alan-morelia.jpg')}}">
							</div>
							<div class="card-stacked">
								<div class="card-content">
									<h5><strong class="event-name">Alan Saldaña</strong></h5>
									<div class="divider"></div>
									<p class="mt-10 mb-5"><b>Morelia</b></p>
									<p>Anden Food Units</p>
									<p>09 de Febrero</p>
									<p class="event-date">09/02/2018</p>
									{{-- <p>9:00 pm.</p> --}}
								</div>
								<a href="{{ url('/eventos/alan-saldana-morelia') }}" class="btn deep-orange darken-2 mb-0 waves-light waves-effect">Detalles</a>
							</div>
						</div>
					</div>

					<div class="col m6 l4 evento">
						<div class="card horizontal ">
							<div class="card-image">
								<img src="{{asset('img/ornelas.jpeg')}}">
							</div>
							<div class="card-stacked">
								<div class="card-content">
									<h5><strong class="event-name">Raúl Ornelas</strong></h5>
									<div class="divider"></div>
									<p class="mt-10 mb-5"><b>Morelia</b></p>
									<p>Teatro Stella Inda</p>
									<p>23 de Febrero</p>
									<p class="event-date">23/02/2018</p>
									<p>9:30 pm.</p>
								</div>
								<a href="{{ url('/eventos/ornelas-morelia') }}" class="btn deep-orange darken-2 mb-0 waves-light waves-effect">Detalles</a>
							</div>
						</div>
					</div>

			</div>
		</div>
	</div>
</section>

@endsection

@section('scripts')
<script src="https://unpkg.com/isotope-layout@3/dist/isotope.pkgd.min.js"></script>
<script type="text/javascript">
	let cards = $('.grid-eventos').isotope({
          // options
          itemSelector: '.evento',
          isFitWidth: true,
          getSortData: {
          	name: '.event-name',
          	date: function (elem) {
          		let d = $(elem).find('.event-date').text().split('/');
	            return new Date(d[2], d[1] - 1, d[0]);
	        }
          }
    });

    $('.nav-eventos').on( 'click', '.btn-nav-eventos', function() {
        let sortValue = $(this).attr('data-sort-by');
        cards.isotope({ sortBy: sortValue });
        $('.nav-eventos').find('.selected').removeClass('selected');
        $(this).addClass('selected');
      });

</script>

@endsection