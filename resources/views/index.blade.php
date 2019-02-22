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
				
				{{-- <div class="col m6 evento">
					<div class="card horizontal ">
						<div class="card-image">
							<img src="{{asset('img/vampire-circus.jpg')}}" class="materialboxed responsive-img">
						</div>
						<div class="card-stacked">
							<div class="card-content">
								<h5><strong class="event-name">VAMPIRE CIRCUS</strong></h5>
								<div class="divider"></div>
								<p class="mt-10 mb-5"><b>Aguascalientes</b></p>
								<p>Auditorio Morelos</p>
								<p>23 de noviembre</p>
								<p><strong>18:00 hrs</strong></p>
								<p class="event-date">23/11/2018</p>

							</div>
							<a href="{{ url('/eventos/vampire-circus-aguascalientes-18hrs') }}" class="btn deep-orange darken-2 mb-0 waves-light waves-effect">Detalles</a>
						</div>
					</div>
				</div> --}}
				<div class="col m6 evento">
					<div class="card horizontal ">
						<div class="card-image">
							<img src="{{asset('img/roberto-mexicali.jpg')}}" class="materialboxed responsive-img">
						</div>
						<div class="card-stacked">
							<div class="card-content">
								<h5><strong class="event-name">ROBERTO TAPIA</strong></h5>
								<div class="divider"></div>
								<p class="mt-10 mb-5"><b>Mexicali</b></p>
								<p>Palenque del FEX</p>
								<p>23 de marzo</p>
								<p class="event-date">23/03/2019</p>

							</div>
							<a href="{{ url('/eventos/roberto-tapia-mexicali') }}" class="btn deep-orange darken-2 mb-0 waves-light waves-effect">Detalles</a>
						</div>
					</div>
				</div>

				<div class="col m6 evento">
					<div class="card horizontal ">
						<div class="card-image">
							<img src="{{asset('img/macias-morelia-2019.jpg')}}" class="materialboxed responsive-img">
						</div>
						<div class="card-stacked">
							<div class="card-content">
								<h5><strong class="event-name">CARLOS MACIAS</strong></h5>
								<div class="divider"></div>
								<p class="mt-10 mb-5"><b>Morelia, Mich.</b></p>
								<p>Café del Olmo</p>
								<p>22 y 23 de febrero</p>
								<p class="event-date">22/02/2019</p>

							</div>
							<a href="{{ url('/eventos/carlos-macias-morelia-2019') }}" class="btn deep-orange darken-2 mb-0 waves-light waves-effect">Detalles</a>
						</div>
					</div>
				</div>

				<div class="col m6 evento">
					<div class="card horizontal ">
						<div class="card-image">
							<img src="{{asset('img/gon-mazatlan.png')}}" class="materialboxed responsive-img">
						</div>
						<div class="card-stacked">
							<div class="card-content">
								<h5><strong class="event-name">GON CURIEL</strong></h5>
								<div class="divider"></div>
								<p class="mt-10 mb-5"><b>Mazatlán</b></p>
								<p>Tarros Company</p>
								<p>28 de febrero</p>
								<p class="event-date">28/02/2019</p>

							</div>
							<a href="{{ url('/eventos/gon-curiel-mazatlan') }}" class="btn deep-orange darken-2 mb-0 waves-light waves-effect">Detalles</a>
						</div>
					</div>
				</div>

				<div class="col m6 evento">
					<div class="card horizontal ">
						<div class="card-image">
							<img src="{{asset('img/oceransky-morelia.jpg')}}" class="materialboxed responsive-img">
						</div>
						<div class="card-stacked">
							<div class="card-content">
								<h5><strong class="event-name">EDGAR OCERANSKY</strong></h5>
								<div class="divider"></div>
								<p class="mt-10 mb-5"><b>Morelia</b></p>
								<p>Teatro Stella Inda</p>
								<p>01 de marzo</p>
								<p class="event-date">01/03/2019</p>

							</div>
							<a href="{{ url('/eventos/edgar-oceransky-morelia') }}" class="btn deep-orange darken-2 mb-0 waves-light waves-effect">Detalles</a>
						</div>
					</div>
				</div>


				<div class="col m6 evento">
					<div class="card horizontal ">
						<div class="card-image">
							<img src="{{asset('img/gon-durango.png')}}" class="materialboxed responsive-img">
						</div>
						<div class="card-stacked">
							<div class="card-content">
								<h5><strong class="event-name">GON CURIEL</strong></h5>
								<div class="divider"></div>
								<p class="mt-10 mb-5"><b>Durango</b></p>
								<p>La Quinta</p>
								<p>01 de marzo</p>
								<p class="event-date">01/03/2019</p>

							</div>
							<a href="{{ url('/eventos/gon-curiel-durango') }}" class="btn deep-orange darken-2 mb-0 waves-light waves-effect">Detalles</a>
						</div>
					</div>
				</div>

				<div class="col m6 evento">
					<div class="card horizontal ">
						<div class="card-image">
							<img src="{{asset('img/homenaje-michael-jackson.jpg')}}" class="materialboxed responsive-img">
						</div>
						<div class="card-stacked">
							<div class="card-content">
								<h5><strong class="event-name">HOMENAJE MICHAEL JACKSON EL REY DEL POP</strong></h5>
								<div class="divider"></div>
								<p class="mt-10 mb-5"><b>Morelia, Mich.</b></p>
								<p>Teatro Morelos</p>
								<p>06 de marzo</p>
								<p class="event-date">06/03/2019</p>

							</div>
							<a href="{{ url('/eventos/homenaje-michael-jackson') }}" class="btn deep-orange darken-2 mb-0 waves-light waves-effect">Detalles</a>
						</div>
					</div>
				</div>

				<div class="col m6 evento">
					<div class="card horizontal ">
						<div class="card-image">
							<img src="{{asset('img/cepillin-acapulco.jpg')}}" class="materialboxed responsive-img">
						</div>
						<div class="card-stacked">
							<div class="card-content">
								<h5><strong class="event-name">EL SHOW DE CEPILLIN ¡LA GIRA DEL ADIOS!</strong></h5>
								<div class="divider"></div>
								<p class="mt-10 mb-5"><b>Acapulco, Gro.</b></p>
								<p>Hotel Calinda Beach</p>
								<p>10 de marzo</p>
								<p class="event-date">10/03/2019</p>

							</div>
							<a href="{{ url('/eventos/el-show-de-cepillin-acapulco') }}" class="btn deep-orange darken-2 mb-0 waves-light waves-effect">Detalles</a>
						</div>
					</div>
				</div>

				<div class="col m6 evento">
					<div class="card horizontal ">
						<div class="card-image">
							<img src="{{asset('img/cosos-queretaro.jpg')}}" class="materialboxed responsive-img">
						</div>
						<div class="card-stacked">
							<div class="card-content">
								<h5><strong class="event-name">COSOS CAÑON</strong></h5>
								<div class="divider"></div>
								<p class="mt-10 mb-5"><b>Querétaro</b></p>
								<p>El Portón de Santiago</p>
								<p>15 de marzo</p>
								<p class="event-date">15/03/2019</p>

							</div>
							<a href="{{ url('/eventos/cosos-queretaro') }}" class="btn deep-orange darken-2 mb-0 waves-light waves-effect">Detalles</a>
						</div>
					</div>
				</div>

				<div class="col m6 evento">
					<div class="card horizontal ">
						<div class="card-image">
							<img src="{{asset('img/cosos-valle.jpg')}}" class="materialboxed responsive-img">
						</div>
						<div class="card-stacked">
							<div class="card-content">
								<h5><strong class="event-name">COSOS CAÑON</strong></h5>
								<div class="divider"></div>
								<p class="mt-10 mb-5"><b>Valle de Santiago, Gto.</b></p>
								<p>La Chismozza Bar</p>
								<p>16 de marzo</p>
								<p class="event-date">16/03/2019</p>

							</div>
							<a href="{{ url('/eventos/cosos-valle-de-santiago') }}" class="btn deep-orange darken-2 mb-0 waves-light waves-effect">Detalles</a>
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