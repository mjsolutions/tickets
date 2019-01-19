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
		<p><b>Ciudad:</b><br>{{ $data['ciudad'] }}</p>
		<p><b>Fecha:</b><br>{{ $data['fecha'] }}</p>
		<p><b>Lugar:</b><br>{{ $data['lugar'] }}</p>
		<p><b>Hora:</b><br>{{ $data['hr'] }}</p>
		<p><b>Boletos:</b><br>{{ $data['descripcion'] }}</p>
		<p><b>Folios:</b><br>{{ $data['folios'] }}</p>
		<p><b>ID de transacción:</b><br>{{ $data['transaccion'] }}</p>
		<p><b>Cliente:</b><br>{{ $data['user'] }}</p>
		<p><b>Email:</b><br>{{ $data['email'] }}</p>
		<p><b>Fecha (Pago):</b><br>{!! date('d-m-Y') !!}</p>
	</div>
</div>
<div style="text-align: center;">
	@if(!empty($data['info']))
	<p>{{ $data['info'] }}</p>
	@endif
	@if($data['impresion_boleto'])
	<p>Tus boletos estan disponibles en nuestro sitio web bolematico.mx, puedes entrar a tu cuenta y descargarlos desde la opción "Mis eventos" en el submenu desplegable "Mi cuenta" del menú principal o dando click <a href="http://bolematico.mx/micuenta/eventos
		" target="_blank">aqui</a></p>
	<p>No olvides cuidar de tus entradas ya que son tu pase para el evento.</p>
	@endif
	<p>Si tienes alguna duda no dudes en contactarte con nosotros <a href="http://bolematico.mx/contacto" target="_blank">bolematico.mx/contacto</a></p>
</div>
<div style="color: #FFF; background: #222; margin-bottom: 0; padding: 20px 0;">
	<p style="text-align: center;">Todos los derechos reservados © Bolematico {!! date('Y') !!} </p>
</div>