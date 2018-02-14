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

					

					{{-- <div class="col m6 l4 evento">
						<div class="card horizontal ">
							<div class="card-image">
								<img src="{{asset('img/luikiw-01.jpg')}}" class="materialboxed responsive-img">
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
					</div> --}}
					
					{{-- <div class="col m6 l4 evento">
						<div class="card horizontal ">
							<div class="card-image">
								<img src="{{asset('img/luikiw-02.jpg')}}" class="materialboxed responsive-img">
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
					</div> --}}

					<div class="col m6 l4 evento">
						<div class="card horizontal ">
							<div class="card-image">
								<img src="{{asset('img/gon-15.jpeg')}}" class="materialboxed responsive-img">
							</div>
							<div class="card-stacked">
								<div class="card-content">
									<h5><strong class="event-name">Gon Curiel</strong></h5>
									<div class="divider"></div>
									<p class="mt-10 mb-5"><b>Cordoba Veracruz</b></p>
									<p>Sabina</p>
									<p>15 de Febrero</p>
									<p class="event-date">16/02/2018</p>
									<p>10:00 pm</p>
								</div>
								<a href="{{ url('/eventos/gon-curiel-cordoba') }}" class="btn deep-orange darken-2 mb-0 waves-light waves-effect">Detalles</a>
							</div>
						</div>
					</div>

					<div class="col m6 l4 evento">
						<div class="card horizontal ">
							<div class="card-image">
								<img src="{{asset('img/alan-atizapan.jpg')}}" class="materialboxed responsive-img">
							</div>
							<div class="card-stacked">
								<div class="card-content">
									<h5><strong class="event-name">Alan Saldaña</strong></h5>
									<div class="divider"></div>
									<p class="mt-10 mb-5"><b>Atizapan Edo. México</b></p>
									<p>Hacienda San Juan</p>
									<p>16 de Febrero</p>
									<p class="event-date">16/02/2018</p>
									{{-- <p>10:00 pm.</p> --}}
								</div>
								<a href="{{ url('/eventos/alan-saldana-atizapan') }}" class="btn deep-orange darken-2 mb-0 waves-light waves-effect">Detalles</a>
							</div>
						</div>
					</div>

					<div class="col m6 l4 evento">
						<div class="card horizontal ">
							<div class="card-image">
								<img src="{{asset('img/ornelas.jpeg')}}" class="materialboxed responsive-img">
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
					
					<div class="col m6 l4 evento">
						<div class="card horizontal ">
							<div class="card-image">
								<img src="{{asset('img/delgadillo-oceransky-10.jpg')}}" class="materialboxed responsive-img">
							</div>
							<div class="card-stacked">
								<div class="card-content">
									<h5><strong class="event-name">Delgadillo / Oceransky</strong></h5>
									<div class="divider"></div>
									<p class="mt-10 mb-5"><b>Aguascalientes</b></p>
									<p>Auditorio DIMO</p>
									<p>10 de Marzo</p>
									<p class="event-date">10/03/2018</p>
									<p>9:00 pm.</p>
								</div>
								<a href="{{ url('/eventos/fernando-delgadillo-edgar-oceransky-aguascalientes') }}" class="btn deep-orange darken-2 mb-0 waves-light waves-effect">Detalles</a>
							</div>
						</div>
					</div>

					<div class="col m6 l4 evento">
						<div class="card horizontal ">
							<div class="card-image">
								<img src="{{asset('img/coco.jpeg')}}" class="materialboxed responsive-img">
							</div>
							<div class="card-stacked">
								<div class="card-content">
									<h5><strong class="event-name">Coco</strong></h5>
									<div class="divider"></div>
									<p class="mt-10 mb-5"><b>Aguascalientes</b></p>
									<p>Auditorio DIMO</p>
									<p>11 de Marzo</p>
									<p class="event-date">11/03/2018</p>
									<p>1:30 pm / 5:00 pm</p>
								</div>
								<a href="{{ url('/eventos/coco-aguascalientes') }}" class="btn deep-orange darken-2 mb-0 waves-light waves-effect">Detalles</a>
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