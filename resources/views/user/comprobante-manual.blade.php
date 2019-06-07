@extends('layouts.main')

@section('title', 'Comprobante')

@section('description', '')

@section('styles')
<script src="https://use.fontawesome.com/9b9c9dc667.js"></script>
@endsection

@section('content')

@if(Auth::id() == 1)
<div class="image-header bg-gradiente overlay">
	<div class="row white-text">
		<h4>Enviar comprobante manual</h4>
		<div class="divider"></div>
	</div>
</div>
<div class="container">
		<div class="row">
			<div class="col s8 offset-s2 mb-30">

				<p class="center-align">{{Session::get('mensaje')}}</p>
				@php
				Session::forget('mensaje');
				@endphp

				<div class="col m6">
					<h5 class="quote">Revisar orden</h5>
					<div class="row">
							
						<div class="input-field col m8 s12">
							
							{!! Form::label('orden','Order ID') !!}
							{!! Form::text('orden', null, ['class' => 'validate', 'id' => 'id_orden']) !!}
							
						</div>
							
						<div class="input-field col m4">
							<button onclick="revisarOrden()" class="btn btn-block waves-effect waves-light orange accent-3">Check</button>
						</div>	
					</div>
				</div>


				<div class="col m6">
					<h5 class="quote">Re-enviar orden</h5>
					{!! Form::open(['route' => 'cliente.enviarComprobante', 'method' => 'POST', 'id' => 'formComprobante'])!!}
							
					<div class="row">
							
						<div class="input-field col m8 s12">
							
							{!! Form::label('order_id','Order ID') !!}
							{!! Form::text('order_id', null, ['class' => 'validate', 'required']) !!}
							
						</div>
							
						<div class="input-field col m4">
							<button type="submit" class="btn btn-block waves-effect waves-light orange accent-3">Enviar</button>
						</div>	
					</div>
				</div>
		
		
				{!! Form::close() !!}
		
			</div>
		</div>
	</div>
@else
<div class="image-header bg-gradiente overlay">
	<div class="row white-text">
		<h4>Restricted page</h4>
		<div class="divider"></div>
	</div>
</div>
@endif


@endsection

@section('scripts')
<script type="text/javascript">
	function revisarOrden(){
		if($("#id_orden").val() != ''){
			window.location.href = '{{ url('micuenta/ver-comprobante') }}/' + $("#id_orden").val();
		}else{
			alert('Ingresa el ID de la orden');
		}
		// alert($("#id_orden").val());
	}
</script>
@endsection