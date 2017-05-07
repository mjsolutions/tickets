<!DOCTYPE html>
<html>
<head>
	<title>Comprobante de Compra</title>
	<link href="https://fonts.googleapis.com/css?family=Raleway" rel="stylesheet">
	<link rel="stylesheet" type="text/css" href="{{asset('css/materialize.min.css')}}">
</head>
<body>
	<div class="row">
		<div class="col s12">			
			<h2 style="font-family: 'Raleway', sans-serif;font-size: 1.5em;"><b>GRACIAS POR SU COMPRA</b></h2>
		</div>
	</div>
	<div style="width: 100%;height: 1px;background: #ccc;">
	</div>
	<div class="row" style="margin-top: 30px;">
		<div class="col s12">
			<h3 style="font-size: 1.3em;"><b>{{ $data['evento'] }}</b></h3>
			<h4 style="font-size: 1.1em;padding: 5px 10px; border: 1px solid #aaa; border-radius: 5px; display: inline-block;"><b>Detalles</b></h4>
			<p><b>Fecha:</b> {{ $data['fecha'] }}</p>
			<p><b>Lugar:</b> {{ $data['lugar'] }}</p>
			<p><b>Hora:</b> {{ $data['hr'] }}</p>
			<p><b>Boletos:</b> {{ $data['descripcion'] }}</p>
			<p><b>Folios:</b> {{ $data['folios'] }}</p>
			<p><b>ID de transacción:</b> {{ $data['transaccion'] }}</p>
			<p><b>Usuario:</b> {{ $data['user'] }}</p>
			<p><b>Email:</b> {{ $data['email'] }}</p>
			<p><b>Fecha (Compra):</b> {!! date('d-m-Y') !!}</p>
		</div>
	</div>
	<div class="row">
		<p style="text-align: center">Este email es tu comprobante para poder recoger tus boletos, no olvides imprimirlo y presentarlo junto con una identificación oficial vigente</p>
	</div>
	<div class="row" style="color: #FFF; background: #222; margin-bottom: 0; padding: 20px 0;">
		<p style="text-align: center;">Todos los derechos reservados  © Bolematico {!! date('Y') !!} </p>
	</div>
</body>
</html>