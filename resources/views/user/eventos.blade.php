@extends('layouts.main')

@section('title', 'Mis eventos')

@section('description', '')

@section('styles')
<script src="https://use.fontawesome.com/9b9c9dc667.js"></script>
<style type="text/css">
	.event-date-card {
		position: relative;
		border: 1px solid #ccc;
		background-color: #FFF;
		margin-bottom: 20px;
	}

	.event-date-details {
		position: relative;
		float: left;
		padding-top: 10px;
		padding-left: 15px;
	}
	.event-date-details h5 {
		margin-top: 0;
	}
	.event-date-details p {
		margin: 0;
	}

	@media screen and (max-width: 650px) {
		.event-date-card {
			/*height: 150px;*/
			margin-bottom: 40px;
		}
		.event-date-details{
			width: calc( 100% - 100px );
		}
		.event-date-card > a {
			position: relative;
		    /*bottom: -20px;*/
		    /*right: 0;*/
		    width: 100%;
		    margin-top: 15px;
		}
		.collection {
			display: flex;
			flex-flow: row nowrap;
		}
		.collection a.collection-item {
			flex: 1;
		}
	}
</style>
@endsection

@section('content')

<div class="image-header bg-gradiente overlay">
	<div class="row white-text">
		<h4>Mis Eventos</h4>
		<div class="divider"></div>
	</div>
</div>

<div class="container pt-40">
	
	<div class="row">
		<div class="col m3 s12">
			@include('layouts.nav-userpanel')
		</div>

		<div class="col m9">

			@if( $franco31->isNotEmpty() )
			
			<div class="col s12">

				<div class="col s12 event-date-card no-padding">
					<div class="col s12 m4 l2 no-padding">
						<img src="{{asset('img/franco-morelia.jpg')}}" class="materialboxed responsive-img">
					</div>
					<div class="event-date-details">
						<h5><b>FRANCO ESCAMILLA</b></h5>
						<p><b>Ciudad:</b> Morelia</p>
						<p><b>Lugar:</b> Teatro Morelos</p>
						<p><b>Fecha:</b> 31 de Agosto</p>
						<p><b>Hora:</b> 21:30 hrs</p>
						<p><b>Seccion:</b> {{ $franco31->first()->seccion }}</p>
						<p><b>Fila:</b> {{ $franco31->first()->fila }}</p>
						@php
							$asientos = "";
							foreach ($franco31 as $row) {
								$asientos .= " *".$row->asiento;
							}
						@endphp
						<p><b>Asientos:</b> {{ $asientos }}</p>
					</div>
					<a href="#!" class="btn waves-light mb-0 waves-effect red pull-right disabled"><b>Descargar boletos</b> <i class="fa fa-ticket" aria-hidden="true"></i></a>
				</div>
				<p class="grey-text"><i>*Por cuestiones de seguridad podras descargar tus boletos en breve.</i></p>
			</div>

			@endif

			@if( $franco01->isNotEmpty() )
			
			<div class="col s12">

				<div class="col s12 event-date-card no-padding">
					<div class="col s12 m4 l2 no-padding">
						<img src="{{asset('img/franco-morelia.jpg')}}" class="materialboxed responsive-img">
					</div>
					<div class="event-date-details">
						<h5><b>FRANCO ESCAMILLA</b></h5>
						<p><b>Ciudad:</b> Morelia</p>
						<p><b>Lugar:</b> Teatro Morelos</p>
						<p><b>Fecha:</b> 01 de Septiembre</p>
						<p><b>Hora:</b> 21:30 hrs</p>
						<p><b>Seccion:</b> {{ $franco01->first()->seccion }}</p>
						<p><b>Fila:</b> {{ $franco01->first()->fila }}</p>
						@php
							$asientos = "";
							foreach ($franco01 as $row) {
								$asientos .= " *".$row->asiento;
							}
						@endphp
						<p><b>Asientos:</b> {{ $asientos }}</p>
					</div>
					<a href="#!" class="btn waves-light mb-0 waves-effect red pull-right disabled"><b>Descargar boletos</b> <i class="fa fa-ticket" aria-hidden="true"></i></a>
				</div>
				<p class="grey-text"><i>*Por cuestiones de seguridad podras descargar tus boletos en breve.</i></p>
			</div>

			@endif

		</div>
	</div>

</div>

@endsection