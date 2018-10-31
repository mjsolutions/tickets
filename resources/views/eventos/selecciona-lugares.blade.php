@extends('layouts.main')

@section('title', 'Contacto')

@section('description', 'Nos interesa conocer tu opinión')

@section('content')

@php

$data['img'] = 'img/raquel-'.$ciudad.'.jpg';
$data['precio'] = '110';

switch( $ciudad ) {
	case 'orizaba';
		$data['fecha'] = '01 de noviembre 2018';
		$data['ciudad'] = 'Orizaba Veracruz';
		$data['lugar'] = 'Mercadito Orizaba';
		$data['table'] = 'raquel_'.$ciudad.'_01nov';break;
	case 'veracruz';
		$data['fecha'] = '02 de noviembre 2018';
		$data['ciudad'] = 'Veracruz veracruz';
		$data['lugar'] = 'Aguamala Bar';
		$data['table'] = 'raquel_'.$ciudad.'_02nov';break;
	case 'cordoba';
		$data['fecha'] = '03 de noviembre 2018';
		$data['ciudad'] = 'Córdoba veracruz';
		$data['lugar'] = 'Sabina Live';
		$data['table'] = 'raquel_'.$ciudad.'_03nov';break;
	case 'pachuca';
		$data['fecha'] = '09 de noviembre 2018';
		$data['ciudad'] = 'Pachuca Hidalgo';
		$data['lugar'] = 'Alliroos Cantabar';
		$data['table'] = 'raquel_'.$ciudad.'_09nov';break;
	case 'slp';
		$data['fecha'] = '22 de noviembre 2018';
		$data['ciudad'] = 'San Luis Potosí';
		$data['lugar'] = 'Restaurante y Bar Casa Vieja';
		$data['table'] = 'raquel_'.$ciudad.'_22nov';break;
	case 'ags';
		$data['fecha'] = '23 de noviembre 2018';
		$data['ciudad'] = 'Aguascalientes';
		$data['lugar'] = 'La Tercera';
		$data['table'] = 'raquel_'.$ciudad.'_23nov';break;
	case 'morelia';
		$data['fecha'] = '24 de noviembre 2018';
		$data['ciudad'] = 'Morelia Michoacan';
		$data['lugar'] = 'Café del Olmo';
		$data['table'] = 'raquel_'.$ciudad.'_24nov';break;
	case 'torreon';
		$data['fecha'] = '30 de noviembre 2018';
		$data['ciudad'] = 'Torreon Coahuila';
		$data['lugar'] = 'La Bicicleta';
		$data['precio'] = '165';
		$data['table'] = 'raquel_'.$ciudad.'_30nov';break;
	case 'queretaro';
		$data['fecha'] = '07 de diciembre 2018';
		$data['ciudad'] = 'Querétaro';
		$data['lugar'] = 'Portón de Santiago';
		$data['table'] = 'raquel_'.$ciudad.'_07dic';break;
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
		<div class="col s8 offset-s2 mb-30">
			<div class="col s12 mb-30">
				<h5 class="mt-30 raleway quote">Selecciona los lugares para tu evento.</h5>
			</div>

			<div class="col s12 m4">
				<img src="{{ asset($data['img']) }}" class="responsive-img">
			</div>

			<div class="col s12 m5 offset-m2">

				<h5 class="mb-0"><strong>Raquel Sofía Gira 2:00am</strong></h5>
				<p class="mt-10">- {{ $data['ciudad'] }} -</p>
				<p class="mb-30"><strong>Costo por entrada:</strong> $ <span class="label-precio">{{ number_format($data['precio'], 2,'.',',') }}</span> MXN.</p>

				@if(Auth()->check())
				
					{!! Form::open(['route' => 'payment.details', 'method' => 'POST', 'id' => 'contactForm'])!!}
		
					<div class="row">
						<div class="input-field col s12">
							{!! Form::select('asiento', ['1' => '1', '2' => '2', '3' => '3', '4' => '4', '5' => '5', '6' => '6', '7' => '7', '8' => '8', '9' => '9', '10' => '10'], '', ['class' => 'select-dropdown', 'id' => 'asiento', 'placeholder' => 'Seleccione numero de asientos', 'required']) !!}
							{!! Form::label('asiento', 'Asientos') !!}
						</div>					
			
					</div>

					{!! Form::hidden('img', $data['img']) !!}
					{!! Form::hidden('evento', 'Raquel Sofía Gira 2:00am') !!}
					{!! Form::hidden('fecha', $data['fecha']) !!}
					{!! Form::hidden('lugar', $data['lugar']) !!}
					{!! Form::hidden('ciudad', $data['ciudad']) !!}
					{!! Form::hidden('hora', '21:30 hrs') !!}
					{!! Form::hidden('event_type', 'general') !!}
					{!! Form::hidden('db_table', $data['table']) !!}
					{!! Form::hidden('info', '--') !!}
					{!! Form::hidden('precio', $data['precio']) !!}
					{!! Form::hidden('url', url('eventos/raquel-sofia')) !!}
			
					<div class="input-field center-align">
						{!! Form::submit('Siguiente',['class'=>'btn waves-effect waves-light orange accent-3']) !!}
					</div>	
			
					{!! Form::close() !!}

				@else
					<p class="center-align raleway">Debes iniciar sesion para poder realizar la compra</p>
					<div class="col s6 col-center">
						<a href="#modal-login" class="modal-login-open btn btn-block waves-light orange accent-3">Login</a>
					</div>
				@endif

				<div class="input-field col s12 center-align mt-0">
					<a href="{{ url('eventos/raquel-sofia') }}" class="waves-effect waves-teal btn-flat">Cancelar</a>				
				</div>

			</div>
	
			<div class="col s12 mt-30">
				<p>
					<i>* Puedes seleccionar un máximo de 10 lugares.</i><br>
					<i>* Se cobrara un cargo adicional por concepto de servicio.</i>
				</p>
			</div>
		</div>
	</div>
</div>

@endsection
