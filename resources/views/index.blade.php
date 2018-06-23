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

				<div class="col m6 l4 evento">
					<div class="card horizontal ">
						<div class="card-image">
							<img src="{{asset('img/slobotzky-cuerna.jpg')}}" class="materialboxed responsive-img">
						</div>
						<div class="card-stacked">
							<div class="card-content">
								<h5><strong class="event-name">Slobotzky</strong></h5>
								<div class="divider"></div>
								<p class="mt-10 mb-5"><b>Cuernavaca</b></p>
								<p>Classico cuerna</p>
								<p>22 de Junio</p>
								<p class="event-date">22/06/2018</p>
								<p>11:00 pm.</p>
							</div>
							<a href="{{ url('/eventos/slobotzky-cuernavaca') }}" class="btn deep-orange darken-2 mb-0 waves-light waves-effect">Detalles</a>
						</div>
					</div>
				</div>

				<div class="col m6 l4 evento">
					<div class="card horizontal ">
						<div class="card-image">
							<img src="{{asset('img/mejorcitos-villahermosa.jpg')}}" class="materialboxed responsive-img">
						</div>
						<div class="card-stacked">
							<div class="card-content">
								<h5><strong class="event-name">Los Mejorcitos</strong></h5>
								<div class="divider"></div>
								<p class="mt-10 mb-5"><b>Villahermosa</b></p>
								<p>La Puerta de Alcalá</p>
								<p>28 de Junio</p>
								<p class="event-date">28/06/2018</p>
								<p>09:00 pm.</p>
							</div>
							<a href="{{ url('/eventos/los-mejorcitos-villahermosa') }}" class="btn deep-orange darken-2 mb-0 waves-light waves-effect">Detalles</a>
						</div>
					</div>
				</div>

				<div class="col m6 l4 evento">
					<div class="card horizontal ">
						<div class="card-image">
							<img src="{{asset('img/mejorcitos-cordoba.jpg')}}" class="materialboxed responsive-img">
						</div>
						<div class="card-stacked">
							<div class="card-content">
								<h5><strong class="event-name">Los Mejorcitos</strong></h5>
								<div class="divider"></div>
								<p class="mt-10 mb-5"><b>Córdoba Ver.</b></p>
								<p>Sabina</p>
								<p>29 de Junio</p>
								<p class="event-date">29/06/2018</p>
								<p>09:30 pm.</p>
							</div>
							<a href="{{ url('/eventos/los-mejorcitos-cordoba') }}" class="btn deep-orange darken-2 mb-0 waves-light waves-effect">Detalles</a>
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