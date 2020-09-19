@extends('layouts.main')

@section('title', 'Selecciona tus lugares')

@section('description', 'Nos interesa conocer tu opinión')

@section('styles')
<link rel="stylesheet" type="text/css" href="{{ asset('css/event-select-general.css') }}">
<style type="text/css">
	.row .col .zona-radio {
		padding: 0 3px;
	}
	.zona-radio > input:not(:checked)+label {
		color: #656869;
	}
	.zona-radio > input:checked+label {
		color: #111;
		font-weight: 700;
	}
	#btn-lugares{
		cursor: pointer;
	}
	#btn-lugares:hover {
		color: #656869;
	}
</style>
<script src="https://use.fontawesome.com/9b9c9dc667.js"></script>
@endsection()

@section('content')

@php

$gira = config('giras.under-side.DICIEMBRE');

// $data = array_filter($gira, function($item) use ($ciudad) {
// 	return $item['route'] == $ciudad;
// });

function getCiudad($item, $ciudad) {
	foreach ($item as $fecha) {
		if ($fecha['route'] == $ciudad) {
			return $fecha;
			break;
		}
	}
}

$data = getCiudad($gira, $ciudad);

$data['img'] = 'img/under-side/'.$data['route'].'.jpg';
$data['lugar'] = 'Por confirmar';
$data['fecha'] = $data['day_num'].' de diciembre 2020'; 

// switch( $ciudad ) {
// 	case 'puebla';
// 		$data['fecha'] = '31 de octubre 2019';
// 		$data['ciudad'] = 'Xalapa Veracruz';
// 		$data['table'] = 'raquel_'.$ciudad.'_31oct';break;
// 	case 'cordoba';
// 		$data['fecha'] = '01 de noviembre 2019';
// 		$data['ciudad'] = 'Cordoba veracruz';
// 		$data['table'] = 'raquel_'.$ciudad.'_01nov';break;

// }
@endphp

{{-- <div class="image-header bg-5 overlay overlay-5">
	<div class="row white-text">
		<h4>Selección de lugares</h4>
		<div class="divider"></div>
	</div>
</div> --}}
	
<div class="container">
	<div class="row center-align mt-30">
		<h5>SELECCIONA TUS LUGARES</h5>
		<div class="divider"></div>
	</div>
	<div class="row">
		<div class="col s8 offset-s2 mb-30">
{{-- 			<div class="col s12 mb-30">
				<h5 class="mt-30 raleway quote">Selecciona los lugares para tu evento.</h5>
			</div> --}}

			<div class="col s12 m10 offset-m1">
				<img src="{{ asset($data['img']) }}" class="responsive-img">
			</div>

			<div class="col s12 m8 offset-m2 center-align">

				<h4 class="mb-0"><strong>Under Side 821</strong></h4>
				<h5 class="m-0">Gira Diciembre 2020</h5>
				<p style="margin-bottom: 30px;margin-top: 15px;">
					- {{ $data['fecha'] }} -
				</p>
				{{-- <p class="mt-0">- {{ $data['ciudad'] }} -</p>
				<p class="mb-30"><strong>Costo por entrada:</strong> <br class="hide-on-med-and-up"> $ <span style="font-size: 1.3rem; font-weight: 700">{{ number_format($data['precios'][0]['precio'], 2,'.',',') }}</span> MXN.</p>
 --}}

				@if(Auth()->check())
				
					{!! Form::open(['route' => 'payment.details', 'method' => 'POST', 'id' => 'eventForm'])!!}
					<div class="row">
						<div class="col m6">
							<div class="col m12 zona-radio">
								{!! Form::radio('zona', 'Preventa General', false, ['id' => 'preventa-general', 'class' => 'form_zona']) !!}
								<label for="preventa-general" style="line-height: 1.2;">
									Preventa General <br>${{ $data['precios'][0]['precio'] }} <small>MXN</small>
								</label>
							</div>
						</div>
						<div class="col m6">
							<div class="col m12 zona-radio">
								{!! Form::radio('zona', 'Preventa M&G', false, ['id' => 'preventa-m&g', 'class' => 'form_zona']) !!}
								<label for="preventa-m&g" style="line-height: 1.2;">
									Preventa M&G <br>${{ $data['precios'][1]['precio'] }} <small>MXN</small>
								</label>
							</div>
						</div>
					</div>
		
					<div class="row mt-30">
						<div class="seats-selector-container">
							<button id="btn-minus" type="button" class="waves-effect waves-light selector-button selector-button-left"><i class="fa fa-minus"></i></button>
							<input id="num-asientos" min="1" max="10" type="number" name="asiento" class="selector-button-input" value="1" required>
							<button id="btn-plus" type="button" class="waves-effect waves-light selector-button selector-button-right"><i class="fa fa-plus"></i></button>
						</div>			
			
					</div>

					{!! Form::hidden('img', $data['img']) !!}
					{!! Form::hidden('evento', 'Under Side 821') !!}
					{!! Form::hidden('fecha', $data['fecha']) !!}
					{!! Form::hidden('lugar', $data['lugar']) !!}
					{!! Form::hidden('ciudad', $data['ciudad']) !!}
					{!! Form::hidden('hora', $data['hr']) !!}
					{!! Form::hidden('event_type', 'general') !!}
					{!! Form::hidden('impresion_boleto', true) !!}
					{!! Form::hidden('db_table', $data['table']) !!}
					{!! Form::hidden('info', '') !!}
					{!! Form::hidden('precio', '', ['id' => 'form_precio']) !!}
					{{-- {!! Form::hidden('zona', 'General') !!} --}}
					{!! Form::hidden('url', url('eventos/under-side-821')) !!}
			
					<div class="input-field center-align">
						{!! Form::submit('Siguiente',['class'=>'btn waves-effect waves-light orange accent-3']) !!}
					</div>	
			
					{!! Form::close() !!}

				@else
					<p class="center-align raleway">Debes iniciar sesion para poder seleccionar tus lugares</p>
					<div class="center-align">
						<a href="#modal-login" class="modal-login-open btn waves-light orange accent-3">Ingresar</a>
					</div>
				@endif

				<div class="input-field col s12 center-align mt-0">
					<a href="{{ url('eventos/under-side-821') }}" class="waves-effect waves-teal btn-flat">Cancelar</a>				
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
	var precios = {'Preventa M&G': 350, 'Preventa General': 200};
	$(".form_zona").click(function(){
		$("#form_precio").val(precios[$(this).val()]);
	})
	$("#btn-plus").click(function(){
	    var value = $("#num-asientos").val();
	    if(value < 10){
	    	$("#num-asientos").val(++value);
	    }
	});
	$("#btn-minus").click(function(){
	    var value = $("#num-asientos").val();
	    if(value > 1) {
	    	$("#num-asientos").val(--value);
	    }
	});
	$("#eventForm").submit(function(){
		if($("#num-asientos").val() < 1){
			Materialize.toast('La cantidad minima de boletos es: 1',2000);
			$("#num-asientos").val(1);
			return false;
		}else if($("#num-asientos").val() > 10){
			Materialize.toast('Puedes seleccionar hasta 10 boletos',2000);
			$("#num-asientos").val(10);
			return false;
		}
		if( !$(".form_zona").is(':checked') ){
				Materialize.toast('Selecciona una zona',3000);
				return false;
			}
			return true;
	});
</script>
@endsection