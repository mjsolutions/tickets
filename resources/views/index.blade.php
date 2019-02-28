@extends('layouts.main')

@section('title', '')

@section('styles')
	<script src="https://use.fontawesome.com/9b9c9dc667.js"></script>
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
		.evento { margin-bottom: 30px; }
		.evento > div {
			height: 350px;
			display: flex;
			flex-flow: column wrap;
		}
		.evento-artista { font-size: 1.2rem; }
		.event-date { display: none; }
		.evento-info{ height: auto; }
		.evento-img { display: block; }
		.evento-detalles-ciudad,
		.evento-detalles-lugar {
			display: block;
			color: #545654;
			overflow: hidden;
		    white-space: nowrap;
		    text-overflow: ellipsis;
		}
		.evento-detalles-ciudad { font-size: 85%; }
		.evento-detalles-lugar { font-size: 75%; }
		.evento-fecha {
			border-left: 1px solid #bcbcbc;
			font-weight: bold;
			color: #5d6d79;
		}
		.evento-fecha h5 { font-weight: 700; }
		.evento-img-container {
			flex: 1;
			overflow: hidden;
		}
		.event-name a{ 
			color: #323536; 
			transition: all 0.3s;
		}
		.event-name a:hover{ color:#006c8e; }
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
	<div class="row">
		<div class="container">
			<div class="col s12 center-align">
				<h1 class="titulo-h1">PRÓXIMOS EVENTOS </h1>
			</div> 

			<div class="row">
				<div class="col s12 nav-eventos">
					<button class="btn waves-effect waves-light btn-nav-eventos right" data-sort-by="name"><strong>A-Z</strong></button>
					<button class="btn waves-effect waves-light btn-nav-eventos right selected" data-sort-by="date"><i class="fa fa-calendar"></i></button>
				</div>
			</div>


			<div class="col s12 mb-30 grid-eventos no-padding">

				@foreach($eventos as $evento)
				@php
					$evento_url = !empty($evento->url)?url('/eventos').'/'.$evento->url: 'javascript:void;';
					$date = new DateTime($evento->fecha);
				@endphp
				
				<div class="col m4 l3 evento">
					<div  class="col s12 no-padding z-depth-1 hoverable" >
						<div class="evento-img-container">
							<a href="{{ $evento_url }}">
								<img src="{{ asset('img/'.$evento->url_imagen) }}" class="responsive-img evento-img">
							</a>
						</div>
						<div class="col s12 evento-info white">
							<div class="col s9">
								<h5 class="evento-artista">
									<strong class="event-name">
										<a href="{{ $evento_url }}">{{ mb_strtoupper($evento->artista, 'UTF-8') }}</a>
									</strong> <br> 
									<small class="evento-detalles-ciudad">{{ $evento->municipio }}</small>
									<small class="evento-detalles-lugar">{{ $date->format('H:i') }} hr - <i>{{ $evento->lugar }}</i></small>
								</h5>								
							</div>
							<div class="col s3 center-align evento-fecha">
								<p class="mb-0">{{ $mes[intval($date->format('m'))] }}</p>
								<h5 class="mt-0">{{ $date->format('d') }}</h5>
							</div>
							<p class="event-date">{{ $evento->fecha }}</p>							
						</div>
					</div>

				</div>

				@endforeach
				
			</div>
		</div>
	</div>
</section>

@endsection

@section('scripts')

<script src="{{ asset('js/isotope.pkgd.min.js') }}"></script>
<script type="text/javascript">
	$(window).on('load', function(){
		var $grid = $('.grid-eventos').isotope({
				layoutMode: 'fitRows',
				itemSelector : '.evento',
				getSortData: {
					name: '.event-name',
					date: '.event-date'
				}
			});

	    $('.nav-eventos').on( 'click', '.btn-nav-eventos', function() {
	        let sortValue = $(this).attr('data-sort-by');
	        $grid.isotope({ sortBy: sortValue });
	        $('.nav-eventos').find('.selected').removeClass('selected');
	        $(this).addClass('selected');
	      });

	});
</script>

@endsection