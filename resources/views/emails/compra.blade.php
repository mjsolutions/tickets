			
<h2 style="font-family: 'Raleway', sans-serif;font-size: 1.5em;"><b>GRACIAS POR SU COMPRA</b></h2>
<p>Favor de llamar al(los) número(s): {{ $data['info'] }} para realizar tu reservación correspondiente.</p>

<div style="width: 100%;height: 1px;background: #ccc;">
</div>
<div style="margin-top: 30px;">
	<div class="col s12">
		<h3 style="font-size: 1.3em;"><b>{{ $data['evento'] }}</b></h3>
		<h4 style="font-size: 1.1em;padding: 5px 10px; border: 1px solid #aaa; border-radius: 5px; display: inline-block;"><b>Detalles</b></h4>
		<p><b>Fecha:</b> {{ $data['fecha'] }}</p>
		<p><b>Lugar:</b> {{ $data['lugar'] }}</p>
		<p><b>Hora:</b> {{ $data['hr'] }}</p>
		<p><b>Boletos:</b> {{ $data['descripcion'] }}</p>
		<p><b>Folios:</b> {{ $data['folios'] }}</p>
		<p><b>ID de transacción:</b> {{ $data['transaccion'] }}</p>
		<p><b>Cliente:</b> {{ $data['user'] }}</p>
		<p><b>Email:</b> {{ $data['email'] }}</p>
		<p><b>Fecha (Pago):</b> {!! date('d-m-Y') !!}</p>
	</div>
</div>
<div>
	<p>Este email es tu comprobante para poder reclamar tus lugares, no olvides imprimirlo y presentarlo junto con una copia de tu identificación oficial vigente el día del evento.</p>
	<p>Tus lugares ya han sido apartados, solo deberás llamar al(los) número(s): {{ $data['info'] }} para que tu reservación te sea asignada.</p>
	<p>Tu ID de transacción es único por lo que solo puede ser reclamado por el titular de la cuenta con la cual se llevo a cabo la compra correspondiente.</p>
	<p>Si tienes alguna duda no dudes en contactarte con nosotros <a href="http://bolematico.mx/contacto" target="_blank">aquí</a></p>
</div>
<div style="color: #FFF; background: #222; margin-bottom: 0; padding: 20px 0;">
	<p style="text-align: center;">Todos los derechos reservados  © Bolematico {!! date('Y') !!} </p>
</div>
