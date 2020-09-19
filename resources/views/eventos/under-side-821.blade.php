@extends('layouts.main')

@section('title', 'Under Side 821 - Gira 2020')

@section('description', 'Under Side 821, gira Diciembre 2020, boletos exclusivamente en bolematico.com')

@section('styles')
<meta property="og:url"  content="https://www.bolematico.com/eventos/under-side-821" />
<meta property="og:title" content="Under Side 821 - Gira Diciembre 2020" />
<meta property="og:description" content="Under Side 821, gira diciembre 2020, varias ciudades." />
<meta property="og:image" content="https://www.bolematico.com/img/under-side/infogira.jpg" />
<style type="text/css">
	.flex {
		margin: 0 auto;
		width: 80%;
		padding: 10px 0;
		display: flex;
		justify-content: space-around;
		align-items: flex-start;
		/*border-bottom: 1px solid #ddd;*/
	}
	.flex a {
		font-size: 1.3rem;
	}
	.text-justify {
		text-align: justify;
	}
	.event-date-card {
		position: relative;
		height: 100px;
		border: 1px solid #ccc;
		background-color: #FFF;
		margin-bottom: 20px;
	}
	.event-date-card-calendar {
		width: 100px;
		height: 100%;
		color: #FFF;
		float: left;
		border-right: 1px solid #ccc;
		display: flex;
		flex-flow: column wrap;
	}
	.event-date-card-month {
		width: 100%;
		background-color: #004040;
		text-align: center;
	    font-weight: 500;
	    padding: 3px 5px;
	}
	.event-date-card-number {
		width: 100%;
		flex: 1;
		background-color: #008080;
		display: flex;
		flex-flow: column wrap;
		align-items: center;
		justify-content: center;
	}
	.event-date-card-number h3 {
		line-height: 1;
		font-weight: 600;
	}
	.event-date-card-number small {
		font-size: 85%;
	}
	.event-date-details {
		position: relative;
		float: left;
		padding-top: 10px;
		padding-left: 15px;
	}
	.event-date-details h5 {
		margin-top: 0;
		margin-bottom: 0;
	}
	.event-date-details p {
		margin: 0;
	}
	.event-date-details p:first-of-type {
		color: #004040;
		font-weight: 500;
		opacity: 0.9;
	}
	.event-date-details p.price {
		display: inline-block;
		margin-top: 10px;
		font-weight: 500;
		/*background: #008080;*/
    /*color: #fff;*/
    padding: 1px 8px
	}
	.event-hr {
		padding:1px 0.5rem;
		margin-left: 0.5rem;
		border-left: 1px solid #999;
	}

	@media screen and (max-width: 650px) {
		.event-date-card {
			height: 150px;
			margin-bottom: 40px;
		}

		.event-date-details{
			width: calc( 100% - 100px );
		}

		.event-date-card > a {
			position: absolute;
		    bottom: -20px;
		    right: 0;
		}
	}
</style>
<script src="https://use.fontawesome.com/9b9c9dc667.js"></script>
@endsection

@section('content')

@php
$today = \Carbon\Carbon::today();
$gira = config('giras.under-side');
@endphp

<div class="image-header overlay" style="background-attachment: initial; background-image: url('{{asset('img/under-side/infogira.jpg')}}') ">

	{{-- <div class="row">
		<h4 class="wow flipInX" data-wow-delay="0.5s">Under Side 821</h4>
		<div class="divider wow fadeInLeft" data-wow-delay="0.8s" style="height: 2px; background-color: #0b529e;"></div>
		<p class="wow flipInX" data-wow-delay="0.5s"><i>Gira Diciembre 2020</i></p>
	</div> --}}
</div>

<section class="container">
	<div class="row">
		<div class="col s12">
			<ul class="tabs">
				<li class="tab "><a class="active" href="#fechas">FECHAS</a></li>
				<li class="tab "><a href="#tour">SOBRE UNDER SIDE 821</a></li>
				{{-- <li class="tab "><a href="#lugares">Boletos</a></li> --}}
			</ul>
		</div>
		<div id="tour" class="col s12 tab-content">
			{{-- <div class="row mb-50">
				<div class="col s12">
					<img src="{{ asset('img/roberto-tapia-banner.jpg') }}" alt="" class="responsive-img wow fadeIn">
				</div>
			</div> --}}
			<div class="row">
				<div class="col s12 wow fadeIn" data-wow-delay="0.5s">
					<div class="text-justify">
						<p>Desde el barrio de Fresnos, Apodaca, sale la Under Side 821, un grupo de rap con el propósito de plasmar la realidad de los barrios en donde crecieron. Mencionan ser más que un grupo de rap, una crew; un grupo de jóvenes que han crecido juntos y al pasar de los años, viviendo experiencias de todo tipo, los integrantes de ese crew llegan un punto en que necesitan empezar a expresar los acontecimientos de su vida , es aquí cuando comienza "La Under Side 821"</p>
					</div>
					<p>Fuente: <a href="https://www.facebook.com/UnderSide821/" target="_blank">https://www.facebook.com/UnderSide821/</a></p>
				</div>

				<div class="clearfix"></div>
			</div>
			
		</div>

		<div id="fechas" class="col s12 tab-content">
			<div class="row">
				<div class="col s10 m7">
					<img src="{{ asset('img/under-side/infogira.jpg') }}" alt="" class="responsive-img wow fadeIn">
				</div>
				<div class="col m5 s12">
					<iframe width="100%" height="350" src="https://www.youtube.com/embed/6GzdTTAFgFU" frameborder="0" allow="accelerometer; autoplay; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
				</div>
				
				<div class="col s10 offset-s1 mt-50">

					@foreach($gira as $mes => $arr)
					<h5 class="pl-30"><b>{{ $mes }}</b> <br><small>* Lugares por confirmar</small></h5>
					<div class="divider mb-30"></div>

					@foreach($arr as $fecha)

					@if($today < $fecha['date'])
					<div class="col s12 event-date-card no-padding">
						<div class="event-date-card-calendar">
							<div class="event-date-card-month">
								{{ $mes }}
							</div>
							<div class="event-date-card-number">
								<h3 class="mt-0 mb-0">{{ $fecha['day_num'] }}</h3>
								<small>{{ $fecha['day'] }}</small>
							</div>
						</div>
						<div class="event-date-details">
							<h5><b>{{ mb_strtoupper($fecha['ciudad'], 'UTF-8') }}</b></h5>
							<p>{{ $fecha['hr'] }} hrs</p>
							@foreach($fecha['precios'] as $precio)
							<p class="price {{ $precio['class'] }}"><small>{{ $precio['name'] }}</small> $ {{ $precio['precio'] }} MXN</p>
							@endforeach
						</div>
						<a href="{{ route('eventos.selecciona-lugares', $fecha['route']) }}" class="btn waves-light mb-0 waves-effect red pull-right"><b>Comprar</b> <i class="fa fa-ticket" aria-hidden="true"></i></a>
					</div>
					@endif
					@endforeach

					@endforeach
					
				</div>

			</div>
		</div>

		{{-- <div id="lugares" class="col s12 tab-content"></div> --}}

	</div>
</section>
{{-- <section class="section-video overlay overlay-5" style="background-image: url('https://img.youtube.com/vi/R6uSvPrL9dg/maxresdefault.jpg');">
	<div class="row center-align">
		<a class="white-text" id="modal-video-open" href="#modal-video" data-video="https://www.youtube.com/embed/R6uSvPrL9dg"><i class="material-icons">play_circle_filled</i></a>
		<p class="white-text"><i>Raquel Sofía, PJ Sin Suela - A Las Rocas</i></p>
	</div>
</section> --}}

<section id="compra" class="section-comprar mt-50 mb-50">
	
	
	<p class="center-align">Si tienes alguna duda sobre este evento no dudes en contactarnos</p>
	<div class="row center-align">
		<a href="{{ route('contacto') }}" class="btn waves-light waves-effect green center-align ls-1">CONTACTO</a>
	</div>

</section>

<div id="modal-video" class="modal modal-large">
	<a href="#!" class="modal-close btn-flat"><i class="material-icons white-text">close</i></a>
	<div class="modal-content black no-padding">
		<iframe id="iframe" width="100%" height="420" src="" frameborder="0" allowfullscreen></iframe>
	</div>
</div>

@endsection

@section('scripts')
	<script type="text/javascript" src="{{asset('js/jquery.elevatezoom.js')}}"></script>
	<script>
		// $("#zoom_01").elevateZoom({
		// 	scrollZoom : true,
		// 	zoomType: "inner"
		// });
		new WOW().init();

		$('#modal-video-open').leanModal({
			opacity: .8,
			ready: function() {
				var videoSCR = $('#modal-video-open').attr("data-video");
				var videoSCRPlay = videoSCR + "?modestbranding=1&rel=0&controls=1&showinfo=0&html5=1&autoplay=1";
				$("#iframe").attr('src', videoSCRPlay);
			},
		        complete: function() { 
		           $("#iframe").attr('src', $('#modal-video-open').attr("data-video"));
		        }
		    });

	</script>

      {{-- <script async defer src="https://maps.googleapis.com/maps/api/js?key=AIzaSyBOOT9N6QdDeq0bnmSb1bw2SKw5CXQmOeA&callback=initMap"></script> --}}
@endsection