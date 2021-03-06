@extends('layouts.main')

@section('title', 'Comprobante')

@section('description', '')

@section('styles')
<script src="https://use.fontawesome.com/9b9c9dc667.js"></script>
@endsection

@section('content')

<h2 style="font-family: 'Raleway', sans-serif;font-size: 1.5em;text-align: center;"><b>¡GRACIAS POR TU COMPRA!</b></h2>
<p style="text-align: center;">Tu pago ha sido confirmado en nuestra plataforma.</p>

<div style="width: 100%;height: 1px;background: #ccc;">
</div>
<div style="margin-top: 30px; margin-right: auto; margin-left: auto; width: 90%;">
	<div style="width: 100%;">
		<img src="{{ $data['img'] }}" style="display: block;margin: 0 auto;width: 350px;">
	</div>
	<div style="text-align: center;width: 100%">
		<h3 style="font-size: 1.3em;"><b>{{ $data['evento'] }}</b></h3>
		<h4 style="font-size: 1.1em;padding: 5px 10px; border: 1px solid #aaa; border-radius: 5px; display: inline-block;">
		<p><b>Ciudad:</b><br>{{ $data['ciudad'] }}</p>
		<p><b>Fecha:</b><br>{{ $data['fecha'] }}</p>
		<p><b>Lugar:</b><br>{{ $data['lugar'] }}</p>
		<p><b>Hora:</b><br>{{ $data['hr'] }}</p>
		<p><b>Boletos:</b><br>{{ $data['descripcion'] }}</p>
		<p><b>Folios:</b><br>{{ $data['folios'] }}</p>
		<p><b>ID de transacción:</b><br>{{ $data['transaccion'] }}</p>
		<p><b>Cliente:</b><br>{{ $data['user'] }}</p>
		<p><b>Email:</b><br>{{ $data['email'] }}</p>
		<p><b>Fecha de pago:</b><br>{{ $data['paid_at'] }}</p>
	</div>
</div>
<div style="text-align: center;">
	@if(!empty($data['info']))
	<p>{{ $data['info'] }}</p>
	@endif
	@if($data['impresion_boleto'])
	<p>Tus boletos están disponibles en nuestro sitio web bolematico.com, puedes entrar a tu cuenta y descargarlos desde la opción "Mis eventos" en el submenu desplegable "Mi cuenta" del menú principal o dando click <a href="https://www.bolematico.com/micuenta/eventos" target="_blank">aqui</a></p>
	<p>No olvides cuidar de tus entradas ya que son tu pase para el evento.</p>
	@endif
	<p><b>No responder este email</b>, esta cuenta es solo informativa para nuestros clientes. Si tienes alguna duda no dudes en contactarte con nosotros <a href="https://www.bolematico.com/contacto" target="_blank">bolematico.com/contacto</a></p>
</div>
<div style="color: #FFF; background: #222; margin-bottom: 0; padding: 20px 0;">
	<p 

@endsection

@section('scripts')
<script type="text/javascript">
	function revisarOrden(){
		window.location.href = '{{ url('micuenta/ver-comprobante') }}/' + $("#id_orden").val();
		// alert($("#id_orden").val());
	}
</script>
@endsection