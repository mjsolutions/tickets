@if( $data['type'] == 'General' )

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

@else

<h2 style="font-family: 'Raleway', sans-serif;font-size: 1.5em;text-align: center;"><b>¡GRACIAS POR SU COMPRA!</b></h2>
<p style="text-align: center;">Tu pago a sido confirmado en nuestra plataforma.</p>

<div style="width: 100%;height: 1px;background: #ccc;">
</div>
<div style="margin-top: 30px; margin-right: auto; margin-left: auto; width: 90%;">
	<div style="width: 100%">
		<img src="{{ $data['img'] }}" style="margin: 0 auto;">
	</div>
	<div style="text-align: center;width: 100%">
		<h3 style="font-size: 1.3em;"><b>{{ $data['evento'] }}</b></h3>
		<h4 style="font-size: 1.1em;padding: 5px 10px; border: 1px solid #aaa; border-radius: 5px; display: inline-block;">
		<p><b>Fecha:</b> <br>  {{ $data['fecha'] }}</p>
		<p><b>Lugar:</b> <br> {{ $data['lugar'] }}</p>
		<p><b>Hora:</b> <br> {{ $data['hr'] }}</p>
		<p><b>Boletos:</b> <br> {{ $data['descripcion'] }}</p>
		<p><b>Folios:</b> <br> {{ $data['folios'] }}</p>
		<p><b>ID de transacción:</b> <br> {{ $data['transaccion'] }}</p>
		<p><b>Cliente:</b> <br> {{ $data['user'] }}</p>
		<p><b>Email:</b> <br> {{ $data['email'] }}</p>
		<p><b>Fecha (Pago):</b> <br> {!! date('d-m-Y') !!}</p>
	</div>
</div>
<div style="text-align: center;">
	<p>Este email es tu comprobante para poder obtener tus boletos, deberás imprimirlo y presentarlo junto con una fotocopia de tu identificación oficial vigente y tu comprobante de depósito o transferencia (en caso de aún contar con el), a partir de día 22 de agosto y hasta el 30 de agosto exclusivamente en las  <strong>TAQUILLAS DEL PLANETARIO</strong> en horario de lunes a sabado de 11:00 hrs a 19:00 hrs.</p>
	<p>Tu ID de transacción es único por lo que solo puede ser reclamado por el titular de la cuenta con la cual se llevo a cabo la compra correspondiente.</p>
	<p><strong>IMPORTANTE:</strong> El día del evento NO se realizaran canje de boletos</p>
	<p>Si tienes alguna duda no dudes en contactarte con nosotros <a href="http://bolematico.mx/contacto" target="_blank">aquí</a></p>
</div>
<div style="color: #FFF; background: #222; margin-bottom: 0; padding: 20px 0;">
	<p style="text-align: center;">Todos los derechos reservados © Bolematico {!! date('Y') !!} </p>
</div>

@endif