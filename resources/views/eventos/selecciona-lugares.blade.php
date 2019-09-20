@extends('layouts.main')

@section('title', 'Selecciona tus lugares')

@section('description', 'Nos interesa conocer tu opinión')

@section('styles')
<style type="text/css">
	.seats-selector-container {
		width: 130px;
	    position: relative;
	    margin: 0 auto;
	}
	.selector-button {
		position: absolute;
	    width: 35px;
	    height: 35px;
	    top: 0;
	    border: 1px solid #cdcdcd;
	    color: #004c45 ;
	    background: #FFF;
	}
	button.selector-button:focus {
		background-color: unset;
	}
	.selector-button:active {
  		background: #ccc !important;
  		color: #f44336 !important;
	}
	.selector-button-left {
	    left: 0;
	    border-top-left-radius: 5px;
	    border-bottom-left-radius: 5px;
	}
	.selector-button-right {
		right: 0;
		border-top-right-radius: 5px;
	    border-bottom-right-radius: 5px;
	}
	.selector-button-input {
		width: 100% !important;
		padding-left: 34px !important;
		padding-right: 20px !important;
		height: 35px !important;
		text-align: center !important;
		font-size: 1.5rem !important;
		border: 1px solid #cdcdcd !important;
		border-radius: 5px !important;
		background: rgba(255,255,255,0.6) !important;
		margin-bottom: 15px !important;
		box-sizing: border-box !important;
	}
	.selector-button-input:focus {
		box-shadow: none !important;
	}
</style>
<script src="https://use.fontawesome.com/9b9c9dc667.js"></script>
@endsection()

@section('content')

@php

$data['img'] = 'img/raquel-'.$ciudad.'.jpg';
$data['precio'] = '110';

switch( $ciudad ) {
	case 'xalapa';
		$data['fecha'] = '31 de octubre 2019';
		$data['ciudad'] = 'Xalapa Veracruz';
		$data['lugar'] = 'Cantina Madero';
		$data['table'] = 'raquel_'.$ciudad.'_31oct';break;
	case 'cordoba';
		$data['fecha'] = '01 de noviembre 2019';
		$data['ciudad'] = 'Cordoba veracruz';
		$data['lugar'] = 'Sabina Live Bar';
		$data['table'] = 'raquel_'.$ciudad.'_01nov';break;
	case 'boca';
		$data['fecha'] = '02 de noviembre 2019';
		$data['ciudad'] = 'Boca del Río veracruz';
		$data['lugar'] = 'Foro Boca';
		$data['table'] = 'raquel_'.$ciudad.'_02nov';break;
	case 'ags';
		$data['fecha'] = '21 de noviembre 2019';
		$data['ciudad'] = 'Aguascalientes Ags.';
		$data['lugar'] = 'La Tercera';
		$data['table'] = 'raquel_'.$ciudad.'_21nov';break;
	case 'celaya';
		$data['fecha'] = '22 de noviembre 2019';
		$data['ciudad'] = 'Celaya Gto.';
		$data['lugar'] = 'BLVD 804';
		$data['table'] = 'raquel_'.$ciudad.'_22nov';break;
	case 'morelia';
		$data['fecha'] = '23 de noviembre 2019';
		$data['ciudad'] = 'Morelia Michoacan';
		$data['lugar'] = 'Café del Olmo';
		$data['table'] = 'raquel_'.$ciudad.'_23nov';break;
	case 'queretaro';
		$data['fecha'] = '06 de diciembre 2019';
		$data['ciudad'] = 'Querétaro Qto.';
		$data['lugar'] = 'El Portón de Santiago';
		$data['table'] = 'raquel_'.$ciudad.'_06dic';break;
}


@endphp

<div class="image-header bg-5 overlay overlay-5">
	<div class="row white-text">
		<h4>Selección de lugares</h4>
		<div class="divider"></div>
	</div>
</div>
	
<div class="container">
	<div class="row">
		<div class="col s8 offset-s2 mb-30 pt-40">
{{-- 			<div class="col s12 mb-30">
				<h5 class="mt-30 raleway quote">Selecciona los lugares para tu evento.</h5>
			</div> --}}

			<div class="col s12 m4">
				<img src="{{ asset($data['img']) }}" class="responsive-img">
			</div>

			<div class="col s12 m8 center-align">

				<h5 class="mb-0"><strong>Raquel Sofía Gira 2019</strong></h5>
				<p class="mt-0">- {{ $data['ciudad'] }} -</p>
				<p class="mb-30"><strong>Costo por entrada:</strong> $ <span style="font-size: 1.3rem; font-weight: 700">{{ number_format($data['precio'], 2,'.',',') }}</span> MXN.</p>

				@if(Auth()->check())
				
					{!! Form::open(['route' => 'payment.details', 'method' => 'POST', 'id' => 'contactForm'])!!}
		
					<div class="row">
						{{-- <div class="input-field col s10 offset-s1">
							{!! Form::select('asiento', ['1' => '1', '2' => '2', '3' => '3', '4' => '4', '5' => '5', '6' => '6', '7' => '7', '8' => '8', '9' => '9', '10' => '10'], '', ['class' => 'select-dropdown', 'id' => 'asiento', 'placeholder' => 'Seleccione numero de asientos', 'required']) !!}
							{!! Form::label('asiento', 'Asientos') !!}
						</div>	 --}}
						<div class="seats-selector-container">
							<button id="btn-minus" type="button" class="waves-effect waves-light selector-button selector-button-left"><i class="fa fa-minus"></i></button>
							<input id="num-asientos" min="1" type="number" name="asiento" class="selector-button-input" value="1" required>
							<button id="btn-plus" type="button" class="waves-effect waves-light selector-button selector-button-right"><i class="fa fa-plus"></i></button>
						</div>			
			
					</div>

					{!! Form::hidden('img', $data['img']) !!}
					{!! Form::hidden('evento', 'Raquel Sofía 2019') !!}
					{!! Form::hidden('fecha', $data['fecha']) !!}
					{!! Form::hidden('lugar', $data['lugar']) !!}
					{!! Form::hidden('ciudad', $data['ciudad']) !!}
					{!! Form::hidden('hora', '21:00 hrs') !!}
					{!! Form::hidden('event_type', 'general') !!}
					{!! Form::hidden('impresion_boleto', true) !!}
					{!! Form::hidden('db_table', $data['table']) !!}
					{!! Form::hidden('info', '') !!}
					{!! Form::hidden('precio', $data['precio']) !!}
					{!! Form::hidden('zona', 'General') !!}
					{!! Form::hidden('url', url('eventos/raquel-sofia')) !!}
			
					<div class="input-field center-align">
						{!! Form::submit('Siguiente',['class'=>'btn waves-effect waves-light orange accent-3']) !!}
					</div>	
			
					{!! Form::close() !!}

				@else
					<p class="center-align raleway">Debes iniciar sesion para poder seleccionar tus lugares</p>
					<div class="col s6 col-center">
						<a href="#modal-login" class="modal-login-open btn btn-block waves-light orange accent-3">Login</a>
					</div>
				@endif

				<div class="input-field col s12 center-align mt-0">
					<a href="{{ url('eventos/raquel-sofia') }}" class="waves-effect waves-teal btn-flat">Cancelar</a>				
				</div>

			</div>
	
			<div class="col s12 mt-30 center-align">
				<p>
					<i>* Puedes seleccionar un máximo de 10 lugares.</i><br>
					<i>* Se cobrara un cargo adicional por concepto de servicio.</i>
				</p>
			</div>
		</div>
	</div>
</div>

@endsection

@section('scripts')
<script type="text/javascript">
	$("#btn-plus").click(function(){
	    var value = $("#num-asientos").val();
	    $("#num-asientos").val(++value);
	});
	$("#btn-minus").click(function(){
	    var value = $("#num-asientos").val();
	    if(value > 1) {
	    	$("#num-asientos").val(--value);
	    }
	});
	$("#contactForm").submit(function(){
		if($("#num-asientos").val() < 1){
			Materialize.toast('La cantidad minima de boletos es: 1',2000);
			$("#num-asientos").val(1);
			return false;
		}
		return true;
	});
</script>
@endsection