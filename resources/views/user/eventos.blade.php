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

			@if( $mike->isNotEmpty() )
			
			<div class="col s12">

				<div class="col s12 event-date-card no-padding">
					<div class="col s12 m4 l2 no-padding">
						<img src="{{asset('img/mike-2018.jpg')}}" class="materialboxed responsive-img">
					</div>
					<div class="event-date-details">
						<h5><b>MIKE SALAZAR</b></h5>
						<p><b>Ciudad:</b> Morelia</p>
						<p><b>Lugar:</b> Teatro Morelos</p>
						<p><b>Fecha:</b> 19 de octubre</p>
						<p><b>Hora:</b> 21:00 hrs</p>
						<p><b>Seccion:</b> {{ $mike->first()->seccion }}</p>
						<p><b>Fila:</b> {{ $mike->first()->fila }}</p>
						@php
							$asientos = "";
							foreach ($mike as $row) {
								$asientos .= " *".$row->asiento;
							}
						@endphp
						<p><b>Asientos:</b> {{ $asientos }}</p>
					</div>
					@if( $mike->first()->status == 2 )
						<a href="{{ route('cliente.ticket', 'ms') }}" class="btn waves-light mb-0 waves-effect red pull-right btn-ticket"><b>Descargar boletos</b> <i class="fa fa-ticket" aria-hidden="true"></i></a>
					@else
						<a href="javascript:void(0)" class="btn waves-light mb-0 waves-effect red pull-right disabled"><b>Pendiente de pago</b> <i class="fa fa-ticket" aria-hidden="true"></i></a>
					@endif
				</div>
				{{-- <p class="grey-text"><i>*Por cuestiones de seguridad podras descargar tus boletos en breve.</i></p> --}}
			</div>
			
			@endif

			@if( $ismael->isNotEmpty() )
			<div class="col s12">

				<div class="col s12 event-date-card no-padding">
					<div class="col s12 m4 l2 no-padding">
						<img src="{{asset('img/ismael-serrano.jpg')}}" class="materialboxed responsive-img">
					</div>
					<div class="event-date-details">
						<h5><b>ISMAEL SERRANO</b></h5>
						<p><b>Ciudad:</b> Morelia</p>
						<p><b>Lugar:</b> Teatro Stella Inda</p>
						<p><b>Fecha:</b> 26 de octubre</p>
						<p><b>Hora:</b> 20:30 hrs</p>
						<p><b>Seccion:</b> {{ $ismael->first()->seccion }}</p>
						<p><b>Fila:</b> {{ $ismael->first()->fila }}</p>
						@php
							$asientos = "";
							foreach ($ismael as $row) {
								$asientos .= " *".$row->asiento;
							}
						@endphp
						<p><b>Asientos:</b> {{ $asientos }}</p>
					</div>
					@if( $ismael->first()->status == 2 )
						<a href="{{ route('cliente.ticket', 'is') }}" class="btn waves-light mb-0 waves-effect red pull-right btn-ticket"><b>Descargar boletos</b> <i class="fa fa-ticket" aria-hidden="true"></i></a>
					@else
						<a href="javascript:void(0)" class="btn waves-light mb-0 waves-effect red pull-right disabled"><b>Pendiente de pago</b> <i class="fa fa-ticket" aria-hidden="true"></i></a>
					@endif
				</div>
				{{-- <p class="grey-text"><i>*Por cuestiones de seguridad podras descargar tus boletos en breve.</i></p> --}}
			</div>

			@endif

			@foreach( $raquel as $ciudad => $data )

				@if( $data->isNotEmpty() )

					@php
						$info['ags'] = [
								'ciudad' => 'Aguascalientes',
								'lugar' => 'La Tercera',
								'fecha' => '23 de noviembre',
							];
				        $info['cordoba'] = [
								'ciudad' => 'Córdoba, Veracruz',
								'lugar' => 'Sabina Live',
								'fecha' => '02 de noviembre',
							];
				        $info['morelia'] = [
								'ciudad' => 'Morelia, Mich.',
								'lugar' => 'Café del Olmo',
								'fecha' => '24 de noviembre',
							];
				        $info['orizaba'] = [
								'ciudad' => 'Orizaba, Veracruz',
								'lugar' => 'Mercadito Orizaba',
								'fecha' => '01 de noviembre',
							];
				        $info['pachuca'] = [
								'ciudad' => 'Pachuca, Hidalgo',
								'lugar' => 'Alliroos Cantabar',
								'fecha' => '09 de noviembre',
							];
				        $info['queretaro'] = [
								'ciudad' => 'Querétaro',
								'lugar' => 'Portón de Santiago',
								'fecha' => '07 de diciembre',
							];
				        $info['slp'] = [
								'ciudad' => 'San Luis Potosí',
								'lugar' => 'Restaurante y Bar Casa Vieja',
								'fecha' => '22 de noviembre',
							];
				        $info['torreon'] = [
								'ciudad' => 'Torreón, Cohauila',
								'lugar' => 'La Bicicleta',
								'fecha' => '30 de noviembre',
							];
				    	$info['veracruz'] = [
								'ciudad' => 'Veracruz',
								'lugar' => 'Aguamala Bar',
								'fecha' => '02 de noviembre',
							];
					@endphp

					<div class="col s12">
						<div class="col s12 event-date-card no-padding">
							<div class="col s12 m4 l2 no-padding">
								<img src="{{asset("img/raquel-$ciudad.jpg")}}" class="materialboxed responsive-img">
							</div>
							<div class="event-date-details">
								<h5><b>RAQUEL SOFIA</b></h5>
								<p><b>Ciudad:</b> {{ $info[$ciudad]['ciudad'] }}</p>
								<p><b>Lugar:</b> {{ $info[$ciudad]['lugar'] }}</p>
								<p><b>Fecha:</b> {{ $info[$ciudad]['fecha'] }}</p>
								<p><b>Hora:</b> 20:30 hrs</p>
								<p><b>Asientos:</b> {{ $data->count() }}</p>
							</div>
							<a href="{{ route('cliente.ticket', 'raquel-'.$ciudad) }}" class="btn waves-light mb-0 waves-effect red pull-right btn-ticket"><b>Descargar boletos</b> <i class="fa fa-ticket" aria-hidden="true"></i></a>

						</div>
					</div>
					{{-- <p class="grey-text"><i>*Boletos disponibles en breve.</i></p> --}}
				@endif

			@endforeach


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