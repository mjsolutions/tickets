@extends('layouts.main')

@section('title', 'Compra')

@section('content')
<div class="image-header bg-5 overlay overlay-5">
	<div class="row white-text">
		{{-- <h4>Contacto</h4>
		<div class="divider"></div> --}}
	</div>
</div>

<div class="row mt-100">
	<div class="col s10 m5 col-center z-depth-2 p-30 indigo">
		
		<h3 class="center-align white-text">¡GRACIAS POR TU COMPRA!</h3>
		<div class="divider col-center col s10"></div>
		<p class="center-align white-text"><i>*En tu cuenta de Paypal encontraras los detalles de la compra.</i></p>
		<p class="center-align white-text"><i>*Para recoger tus boletos no olvides presentar original y una copia de tu identificacion oficial vigente asi como el comprobante impreso que acabamos de enviar a tu email.</i></p>

	</div>

</div>

<div class="row mt-30">
	
	<div class="col-center col s2">
		<a href="{{ route('index') }}" class="btn btn-block waves-effect waves-light  orange accent-3">Volver al inicio</a>
	</div>

</div>
@endsection