@extends('layouts.main')

@section('title', '')

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
			background: #FFF;
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

		@media screen and (min-width: 1151px) {
			.card-image {
				max-width: 20%!important;
			}
		}

		@media screen and (min-width: 800px) and (max-width: 1150px) {
			.card-image {
				max-width: 30%!important;
			}
		}

		/*.card.horizontal {
			position: relative;
		}*/
	</style>
@endsection

@section('content')

<section id="home">

	<div id="contenido">

		<h1 class="center-align">BOLEMATICO</h1>
		<div class="divider"></div>
		<p>Espectáculos y eventos nacionales</p>
	</div>
</section>
<section id="eventos">
	<div class="container">
		<div class="row">
			<div class="col s12 center-align">
				<h1 class="titulo-h1">PRÓXIMOS EVENTOS </h1>

			</div> 

			<div class="row">
				<div class="col s12 flex-sb nav-eventos">
					<button class="btn waves-effect waves-light btn-nav-eventos selected" data-sort-by="date">Ordenar por Fecha</button>
					<button class="btn waves-effect waves-light btn-nav-eventos" data-sort-by="name">Ordenar por Nombre</button>
				</div>
			</div>


			<div class="row mb-30 grid-eventos">

				<div class="col m6 evento">
					<div class="card horizontal ">
						<div class="card-image">
							<img src="{{asset('img/gon-veracruz.jpg')}}" class="materialboxed responsive-img">
						</div>
						<div class="card-stacked">
							<div class="card-content">
								<h5><strong class="event-name">GON CURIEL</strong></h5>
								<div class="divider"></div>
								<p class="mt-10 mb-5"><b>Veracruz</b></p>
								<p>Barezzito</p>
								<p>28 de septiembre</p>
								<p class="event-date">28/09/2018</p>

							</div>
							<a href="{{ url('/eventos/gon-curiel-veracruz') }}" class="btn deep-orange darken-2 mb-0 waves-light waves-effect">Detalles</a>
						</div>
					</div>
				</div>

				<div class="col m6 evento">
					<div class="card horizontal ">
						<div class="card-image">
							<img src="{{asset('img/gon-xalapa.jpg')}}" class="materialboxed responsive-img">
						</div>
						<div class="card-stacked">
							<div class="card-content">
								<h5><strong class="event-name">GON CURIEL</strong></h5>
								<div class="divider"></div>
								<p class="mt-10 mb-5"><b>Xalapa</b></p>
								<p>Barezzito</p>
								<p>29 de septiembre</p>
								<p class="event-date">29/09/2018</p>

							</div>
							<a href="{{ url('/eventos/gon-curiel-xalapa') }}" class="btn deep-orange darken-2 mb-0 waves-light waves-effect">Detalles</a>
						</div>
					</div>
				</div>

				<div class="col m6 evento">
					<div class="card horizontal ">
						<div class="card-image">
							<img src="{{asset('img/sonora-morelia.jpg')}}" class="materialboxed responsive-img">
						</div>
						<div class="card-stacked">
							<div class="card-content">
								<h5><strong class="event-name">LA SONORA SANTANERA</strong></h5>
								<div class="divider"></div>
								<p class="mt-10 mb-5"><b>Morelia</b></p>
								<p>Palacio de arte</p>
								<p>29 de septiembre </p>
								<p class="event-date">29/09/2018</p>

							</div>
							<a href="{{ url('/eventos/la-sonora-santanera-morelia') }}" class="btn deep-orange darken-2 mb-0 waves-light waves-effect">Detalles</a>
						</div>
					</div>
				</div>

				<div class="col m6 evento">
					<div class="card horizontal ">
						<div class="card-image">
							<img src="{{asset('img/mike-2018.jpg')}}" class="materialboxed responsive-img">
						</div>
						<div class="card-stacked">
							<div class="card-content">
								<h5><strong class="event-name">MIKE SALAZAR</strong></h5>
								<div class="divider"></div>
								<p class="mt-10 mb-5"><b>Morelia</b></p>
								<p>Teatro Morelos</p>
								<p>19 de octubre</p>
								<p class="event-date">19/10/2018</p>

							</div>
							<a href="{{ url('/eventos/mike-salazar-morelia') }}" class="btn deep-orange darken-2 mb-0 waves-light waves-effect">Detalles</a>
						</div>
					</div>
				</div>

				<div class="col m6 evento">
					<div class="card horizontal ">
						<div class="card-image">
							<img src="{{asset('img/coco.jpeg')}}" class="materialboxed responsive-img">
						</div>
						<div class="card-stacked">
							<div class="card-content">
								<h5><strong class="event-name">COCO EL ESPECTÁCULO EN VIVO</strong></h5>
								<div class="divider"></div>
								<p class="mt-10 mb-5"><b>Aguascalientes</b></p>
								<p>Auditorio DIMO</p>
								<p>28 de octubre</p>
								<p class="event-date">28/10/2018</p>

							</div>
							<a href="{{ url('/eventos/coco-el-espectaculo-en-vivo-aguascalientes') }}" class="btn deep-orange darken-2 mb-0 waves-light waves-effect">Detalles</a>
						</div>
					</div>
				</div>

				<div class="col m6 evento">
					<div class="card horizontal ">
						<div class="card-image">
							<img src="{{asset('img/martin-valverde.jpg')}}" class="materialboxed responsive-img">
						</div>
						<div class="card-stacked">
							<div class="card-content">
								<h5><strong class="event-name">MARTIN VALVERDE</strong></h5>
								<div class="divider"></div>
								<p class="mt-10 mb-5"><b>Aguascalientes</b></p>
								<p>Auditorio DIMO</p>
								<p>30 de noviembre</p>
								<p class="event-date">30/11/2018</p>

							</div>
							<a href="{{ url('/eventos/martin-valverde-aguascalientes') }}" class="btn deep-orange darken-2 mb-0 waves-light waves-effect">Detalles</a>
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
	$(window).on('load', function(){
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
	});

</script>

@endsection