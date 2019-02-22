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

			@if( $marwan->isNotEmpty() )
			
			<div class="col s12">

				<div class="col s12 event-date-card no-padding">
					<div class="col s12 m4 l2 no-padding">
						<img src="{{asset('img/marwan-morelia-2019.jpg')}}" class="materialboxed responsive-img">
					</div>
					<div class="event-date-details">
						<h5><b>MARWAN</b></h5>
						<p><b>Ciudad:</b> Morelia</p>
						<p><b>Lugar:</b> Teatro Stella Inda</p>
						<p><b>Fecha:</b> 15 de febrero 2019</p>
						<p><b>Hora:</b> 20:30 hrs</p>
						<p><b>Seccion:</b> {{ $marwan->first()->seccion }}</p>
						@php
							$fila_asiento = "";
							foreach ($marwan as $row) {
								$fila_asiento .= " *".$row->fila.' '.$row->asiento;
							}
						@endphp
						<p><b>Fila/Asientos:</b> {{ $fila_asiento }}</p>
					</div>
					@if( $marwan->first()->status == 2 )
						<a href="{{ route('cliente.ticket', 'marwan-morelia') }}" class="btn waves-light mb-0 waves-effect red pull-right btn-ticket"><b>Descargar boletos</b> <i class="fa fa-ticket" aria-hidden="true"></i></a>
					@else
						<a href="javascript:void(0)" class="btn waves-light mb-0 waves-effect red pull-right disabled"><b>Pendiente de pago</b> <i class="fa fa-ticket" aria-hidden="true"></i></a>
					@endif
				</div>
				
			</div>
			
			@endif

			@if( $carlos->isNotEmpty() )
			
			<div class="col s12">

				<div class="col s12 event-date-card no-padding">
					<div class="col s12 m4 l2 no-padding">
						<img src="{{asset('img/macias-morelia.jpg')}}" class="materialboxed responsive-img">
					</div>
					<div class="event-date-details">
						<h5><b>CARLOS MACIAS</b></h5>
						<p><b>Ciudad:</b> Morelia</p>
						<p><b>Lugar:</b> Café del Olmo</p>
						<p><b>Fecha:</b> 08 de febrero 2019</p>
						<p><b>Hora:</b> 21:00 hrs</p>
						<p><b>Seccion:</b> {{ $carlos->first()->seccion }}</p>
						@php
							$fila_asiento = "";
							foreach ($carlos as $row) {
								$fila_asiento .= " *".$row->fila.' '.$row->asiento;
							}
						@endphp
						<p><b>Fila/Asientos:</b> {{ $fila_asiento }}</p>
					</div>
					@if( $carlos->first()->status == 2 )
						<a href="{{ route('cliente.ticket', 'carlos_macias-morelia') }}" class="btn waves-light mb-0 waves-effect red pull-right btn-ticket"><b>Descargar boletos</b> <i class="fa fa-ticket" aria-hidden="true"></i></a>
					@else
						<a href="javascript:void(0)" class="btn waves-light mb-0 waves-effect red pull-right disabled"><b>Pendiente de pago</b> <i class="fa fa-ticket" aria-hidden="true"></i></a>
					@endif
				</div>
				
			</div>
			
			@endif

			@if( $carlos22->isNotEmpty() )
			
			<div class="col s12">

				<div class="col s12 event-date-card no-padding">
					<div class="col s12 m4 l2 no-padding">
						<img src="{{asset('img/macias-morelia-2019.jpg')}}" class="materialboxed responsive-img">
					</div>
					<div class="event-date-details">
						<h5><b>CARLOS MACIAS</b></h5>
						<p><b>Ciudad:</b> Morelia</p>
						<p><b>Lugar:</b> Café del Olmo</p>
						<p><b>Fecha:</b> 22 de febrero 2019</p>
						<p><b>Hora:</b> 21:00 hrs</p>
						<p><b>Seccion:</b> {{ $carlos22->first()->seccion }}</p>
						@php
							$fila_asiento = "";
							foreach ($carlos22 as $row) {
								$fila_asiento .= " *".$row->fila.' '.$row->asiento;
							}
						@endphp
						<p><b>Fila/Asientos:</b> {{ $fila_asiento }}</p>
					</div>
					@if( $carlos22->first()->status == 2 )
						<a href="{{ route('cliente.ticket', 'carlos_macias22-morelia') }}" class="btn waves-light mb-0 waves-effect red pull-right btn-ticket"><b>Descargar boletos</b> <i class="fa fa-ticket" aria-hidden="true"></i></a>
					@else
						<a href="javascript:void(0)" class="btn waves-light mb-0 waves-effect red pull-right disabled"><b>Pendiente de pago</b> <i class="fa fa-ticket" aria-hidden="true"></i></a>
					@endif
				</div>
			</div>
			
			@endif

			@if( $carlos23->isNotEmpty() )
			
			<div class="col s12">

				<div class="col s12 event-date-card no-padding">
					<div class="col s12 m4 l2 no-padding">
						<img src="{{asset('img/macias-morelia-2019.jpg')}}" class="materialboxed responsive-img">
					</div>
					<div class="event-date-details">
						<h5><b>CARLOS MACIAS</b></h5>
						<p><b>Ciudad:</b> Morelia</p>
						<p><b>Lugar:</b> Café del Olmo</p>
						<p><b>Fecha:</b> 23 de febrero 2019</p>
						<p><b>Hora:</b> 21:00 hrs</p>
						<p><b>Seccion:</b> {{ $carlos23->first()->seccion }}</p>
						@php
							$fila_asiento = "";
							foreach ($carlos23 as $row) {
								$fila_asiento .= " *".$row->fila.' '.$row->asiento;
							}
						@endphp
						<p><b>Fila/Asientos:</b> {{ $fila_asiento }}</p>
					</div>
					@if( $carlos23->first()->status == 2 )
						<a href="{{ route('cliente.ticket', 'carlos_macias23-morelia') }}" class="btn waves-light mb-0 waves-effect red pull-right btn-ticket"><b>Descargar boletos</b> <i class="fa fa-ticket" aria-hidden="true"></i></a>
					@else
						<a href="javascript:void(0)" class="btn waves-light mb-0 waves-effect red pull-right disabled"><b>Pendiente de pago</b> <i class="fa fa-ticket" aria-hidden="true"></i></a>
					@endif
				</div>
				
			</div>
			
			@endif

			@if( $oceransky->isNotEmpty() )
			
			<div class="col s12">

				<div class="col s12 event-date-card no-padding">
					<div class="col s12 m4 l2 no-padding">
						<img src="{{asset('img/oceransky-morelia.jpg')}}" class="materialboxed responsive-img">
					</div>
					<div class="event-date-details">
						<h5><b>EDGAR OCERANSKY</b></h5>
						<p><b>Ciudad:</b> Morelia</p>
						<p><b>Lugar:</b> Teatro Stella Inda</p>
						<p><b>Fecha:</b> 01 de marzo 2019</p>
						<p><b>Hora:</b> 20:30 hrs</p>
						<p><b>Seccion:</b> {{ $oceransky->first()->seccion }}</p>
						@php
							$fila_asiento = "";
							foreach ($oceransky as $row) {
								$fila_asiento .= " *".$row->fila.' '.$row->asiento;
							}
						@endphp
						<p><b>Fila/Asientos:</b> {{ $fila_asiento }}</p>
					</div>
					@if( $oceransky->first()->status == 2 )
						<a href="{{ route('cliente.ticket', 'oceransky-morelia') }}" class="btn waves-light mb-0 waves-effect red pull-right btn-ticket"><b>Descargar boletos</b> <i class="fa fa-ticket" aria-hidden="true"></i></a>
					@else
						<a href="javascript:void(0)" class="btn waves-light mb-0 waves-effect red pull-right disabled"><b>Pendiente de pago</b> <i class="fa fa-ticket" aria-hidden="true"></i></a>
					@endif
				</div>
				
			</div>
			
			@endif

			@if( $mj->isNotEmpty() )
			
			<div class="col s12">

				<div class="col s12 event-date-card no-padding">
					<div class="col s12 m4 l2 no-padding">
						<img src="{{asset('img/homenaje-michael-jackson.jpg')}}" class="materialboxed responsive-img">
					</div>
					<div class="event-date-details">
						<h5><b>HOMENAJE MICHAEL JACKSON REY DEL POP</b></h5>
						<p><b>Ciudad:</b> Morelia</p>
						<p><b>Lugar:</b> Teatro Morelos</p>
						<p><b>Fecha:</b> 06 de marzo 2019</p>
						<p><b>Hora:</b> 21:00 hrs</p>
						<p><b>Seccion:</b> {{ $mj->first()->seccion }}</p>
						@php
							$fila_asiento = "";
							foreach ($mj as $row) {
								$fila_asiento .= " *".$row->fila.' '.$row->asiento;
							}
						@endphp
						<p><b>Fila/Asientos:</b> {{ $fila_asiento }}</p>
					</div>
					@if( $mj->first()->status == 2 )
						<a href="{{ route('cliente.ticket', 'mj-morelia') }}" class="btn waves-light mb-0 waves-effect red pull-right btn-ticket"><b>Descargar boletos</b> <i class="fa fa-ticket" aria-hidden="true"></i></a>
					@else
						<a href="javascript:void(0)" class="btn waves-light mb-0 waves-effect red pull-right disabled"><b>Pendiente de pago</b> <i class="fa fa-ticket" aria-hidden="true"></i></a>
					@endif
				</div>
				
			</div>
			
			@endif

			@if( $roberto->isNotEmpty() )
			
			<div class="col s12">

				<div class="col s12 event-date-card no-padding">
					<div class="col s12 m4 l2 no-padding">
						<img src="{{asset('img/roberto-mexicali.jpg')}}" class="materialboxed responsive-img">
					</div>
					<div class="event-date-details">
						<h5><b>ROBERTO TAPIA</b></h5>
						<p><b>Ciudad:</b> Mexicali</p>
						<p><b>Lugar:</b> Palenque del FEX</p>
						<p><b>Fecha:</b> 23 de marzo 2019</p>
						<p><b>Hora:</b> 21:00 hrs</p>
						<p><b>Seccion:</b> {{ $roberto->first()->seccion }}</p>
						@php
							$fila_asiento = "";
							foreach ($roberto as $row) {
								$fila_asiento .= " *".$row->fila.' '.$row->asiento;
							}
						@endphp
						<p><b>Fila/Asientos:</b> {{ $fila_asiento }}</p>
					</div>
					@if( $roberto->first()->status == 2 )
						<a href="{{ route('cliente.ticket', 'roberto-mexicali') }}" class="btn waves-light mb-0 waves-effect red pull-right btn-ticket"><b>Descargar boletos</b> <i class="fa fa-ticket" aria-hidden="true"></i></a>
					@else
						<a href="javascript:void(0)" class="btn waves-light mb-0 waves-effect red pull-right disabled"><b>Pendiente de pago</b> <i class="fa fa-ticket" aria-hidden="true"></i></a>
					@endif
				</div>
				
			</div>
			
			@endif

			@if( $gon21->isNotEmpty() )
			
			<div class="col s12">

				<div class="col s12 event-date-card no-padding">
					<div class="col s12 m4 l2 no-padding">
						<img src="{{asset('img/gon-torreon.jpg')}}" class="materialboxed responsive-img">
					</div>
					<div class="event-date-details">
						<h5><b>GON CURIEL</b></h5>
						<p><b>Ciudad:</b> Torreón</p>
						<p><b>Lugar:</b> El Foro</p>
						<p><b>Fecha:</b> 21 de febrero 2019</p>
						<p><b>Hora:</b> 21:00 hrs</p>
						<p><b>Seccion:</b> {{ $gon21->first()->seccion }}</p>
						@php
							$fila_asiento = "";
							foreach ($gon21 as $row) {
								$fila_asiento .= " *".$row->fila.' '.$row->asiento;
							}
						@endphp
						<p><b>Fila/Asientos:</b> {{ $fila_asiento }}</p>
					</div>
					@if( $gon21->first()->status == 2 )
						<a href="{{ route('cliente.ticket', 'gon21-torreon') }}" class="btn waves-light mb-0 waves-effect red pull-right btn-ticket"><b>Descargar boletos</b> <i class="fa fa-ticket" aria-hidden="true"></i></a>
					@else
						<a href="javascript:void(0)" class="btn waves-light mb-0 waves-effect red pull-right disabled"><b>Pendiente de pago</b> <i class="fa fa-ticket" aria-hidden="true"></i></a>
					@endif
				</div>
				
			</div>
			
			@endif

			@if( $gon15->isNotEmpty() )
			
			<div class="col s12">

				<div class="col s12 event-date-card no-padding">
					<div class="col s12 m4 l2 no-padding">
						<img src="{{asset('img/gon-slp.png')}}" class="materialboxed responsive-img">
					</div>
					<div class="event-date-details">
						<h5><b>GON CURIEL</b></h5>
						<p><b>Ciudad:</b> San Luis Potosí</p>
						<p><b>Lugar:</b> Roadhouse</p>
						<p><b>Fecha:</b> 15 de febrero 2019</p>
						<p><b>Hora:</b> 21:00 hrs</p>
						<p><b>Seccion:</b> {{ $gon15->first()->seccion }}</p>
						@php
							$fila_asiento = "";
							foreach ($gon15 as $row) {
								$fila_asiento .= " *".$row->fila.' '.$row->asiento;
							}
						@endphp
						<p><b>Fila/Asientos:</b> {{ $fila_asiento }}</p>
					</div>
					@if( $gon15->first()->status == 2 )
						<a href="{{ route('cliente.ticket', 'gon15-slp') }}" class="btn waves-light mb-0 waves-effect red pull-right btn-ticket"><b>Descargar boletos</b> <i class="fa fa-ticket" aria-hidden="true"></i></a>
					@else
						<a href="javascript:void(0)" class="btn waves-light mb-0 waves-effect red pull-right disabled"><b>Pendiente de pago</b> <i class="fa fa-ticket" aria-hidden="true"></i></a>
					@endif
				</div>
				
			</div>
			
			@endif



			{{-- @foreach( $pate as $ciudad => $data )

				@if( $data->isNotEmpty() )

					@php
						$info['ags'] = [
								'ciudad' => 'Aguascalientes',
								'lugar' => 'Patio Outdoor Disco',
								'fecha' => '16 de noviembre',
							];
				        $info['queretaro'] = [
								'ciudad' => 'Querétaro',
								'lugar' => 'La Glotonería',
								'fecha' => '15 de noviembre',
							];
						$info['morelia'] = [
								'ciudad' => 'Morelia',
								'lugar' => 'Anden Food Units',
								'fecha' => '22 de noviembre',
							];
					@endphp

					<div class="col s12">
						<div class="col s12 event-date-card no-padding">
							<div class="col s12 m4 l2 no-padding">
								<img src="{{asset("img/pate-de-fua-$ciudad.jpg")}}" class="materialboxed responsive-img">
							</div>
							<div class="event-date-details">
								<h5><b>PATÉ DE FUA</b></h5>
								<p><b>Ciudad:</b> {{ $info[$ciudad]['ciudad'] }}</p>
								<p><b>Lugar:</b> {{ $info[$ciudad]['lugar'] }}</p>
								<p><b>Fecha:</b> {{ $info[$ciudad]['fecha'] }}</p>
								<p><b>Hora:</b> 21:00 hrs</p>
								<p><b>Asientos:</b> {{ $data->count() }}</p>
							</div>
							<a href="{{ route('cliente.ticket', 'pate-'.$ciudad) }}" class="btn waves-light mb-0 waves-effect red pull-right btn-ticket"><b>Descargar boletos</b> <i class="fa fa-ticket" aria-hidden="true"></i></a>

						</div>
					</div>
				@endif

			@endforeach --}}


		</div>
	</div>

</div>

@endsection

@section('scripts')
<script type="text/javascript">
	$('.btn-ticket').click(function(){
		$(this).addClass('disabled');
		$(this).html('Generando boletos...');
	});
</script>
@endsection