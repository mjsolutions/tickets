<!DOCTYPE html>
<html lang="es">
<head>
	<meta charset="UTF-8">
	<title>Boleto</title>
	<link rel="stylesheet" type="text/css" href="css/ticket.css">
</head>
<body>
	@foreach( $boletos as $boleto )
	<div class="space-top"></div>
	<div class="col-half">
		<div class="circle-top"></div>
		<div class="header">
			<div class="logo-container">
				<img src="img/logotipo-nuevo-negro.png" class="img-logo">
			</div>
			<div class="header-text">				
				<h3>BOLEMATICO <br></h3>
				<p>PRESENTA:</p>
			</div>
			<div class="clearfix"></div>
		</div>
		<div class="text-center evento-img-container">
			<img src="img/{{ $buydata['imagen'] }}" class="img-evento">		
		</div>
		<div class="container text-center info-evento card">
			<h2>{{ mb_strtoupper($buydata['evento'], 'UTF-8') }}</h2>
			<h4>- {{ $buydata['lugar'] }} -</h4>
			<h5>{{ $buydata['ciudad'] }}</h5>
		</div>
		<div class="container card info-compra">
			<table>
				<tbody>
					<tr>
						<th style="width: 29%;">CLIENTE:</th>
						<td>{{ $buydata['nombre'] }}</td>
					</tr>
					<tr>
						<th style="width: 29%;">FECHA:</th>
						<td>{{ $buydata['fecha'] }}</td>
					</tr>
					<tr>
						<th style="width: 29%;">HORA:</th>
						<td>{{ $buydata['hora'] }}</td>
					</tr>
					<tr>
						<th style="width: 29%;">FOLIO:</th>
						<td>{{ str_pad($boleto->folio, 6, '0', STR_PAD_LEFT) }}</td>
					</tr>
				</tbody>
			</table>
			<table>
				<thead>
					<tr>
						<th style="width: 29%;">SECCION:</th>
						<th style="width: 30%;">FILA:</th>
						<th >ASIENTO:</th>
					</tr>
				</thead>
				<tbody>
					<tr>
						<td style="width: 29%;">
							{{ $boleto->seccion }}
						</td>
						@if( $boleto->fila != 'Sin fila' )
						<td style="width: 30%;">
							{{ $boleto->fila }}
						</td>
						<td >
							{{ $boleto->asiento }}
						</td>
						@else
						<td style="width: 30%;">
							N/A
						</td>
						<td >
							N/A
						</td>
						@endif
					</tr>
				</tbody>
			</table>
			<table>
				<tbody>
					
					<tr>
						<th style="width: 29%;">PRECIO:</th>
						<td class="precio"><span>${{ $precio[$boleto->seccion] }}</span> MXN.</td>
					</tr>
				</tbody>
			</table>
		</div>
		<div class="barcode-container">
			<img src="data:image/png;base64,{{ DNS1D::getBarcodePNG($boleto->codigo_barras, "C39") }}" alt="barcode" class="barcode"  />
			<p>{{ $boleto->codigo_barras }}</p>
		</div>

		<div class="circle-bottom"></div>
	</div>
	<div class="col-half ml-2">
		<div class="circle-top"></div>
		<div class="header">
			<h4 class="header-back text-center">IMPORTANTE:</h4>
		</div>
		<div class="politicas">
			<img src="img/politicas.png" alt="">
		</div>
		<div class="nota">
			<p><strong>NOTA:</strong></p>
			<ul class="nota-info">
				<li>Este boleto es personal y limita el acceso a la primer persona en presentarlo el día del evento.</li>
				<li>La protección de este ticket, para evitar copias del mismo, es responsabilidad del usuario que generó la compra.</li>
				<li>No olvides presentarte con tu identificación oficial para cualquier aclaración.</li>
			</ul>
			<br>
		</div>

		<div class="logo-bg logo-bg-5">
			<img src="img/logo-azul.png">
		</div>
		<div class="logo-bg logo-bg-6">
			<img src="img/logo-azul.png">
		</div>

		<div class="circle-bottom"></div>
	</div>

	@if(!$loop->last)
		<div class="page-break"></div>
	@endif

	@endforeach

	
</body>
</html>