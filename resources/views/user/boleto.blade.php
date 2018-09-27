<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Boleto</title>
	<link rel="stylesheet" type="text/css" href="css/ticket.css">
</head>
<body>
	@foreach( $db as $row )
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
			<img src="{{ $data->img }}" class="img-evento">		
		</div>
		<div class="container text-center info-evento card">
			<h2>{{ $data->evento }}</h2>
			<h4>- {{ $data->lugar }} -</h4>
			<h5>{{ $data->ciudad }}</h5>
		</div>
		<div class="container card info-compra">
			<table>
				<tbody>
					<tr>
						<th style="width: 29%;">CLIENTE:</th>
						<td>{{ $data->cliente }}</td>
					</tr>
					<tr>
						<th style="width: 29%;">FECHA:</th>
						<td>{{ $data->fecha }}</td>
					</tr>
					<tr>
						<th style="width: 29%;">HORA:</th>
						<td>{{ $data->hr }}</td>
					</tr>
					<tr>
						<th style="width: 29%;">FOLIO:</th>
						<td>{{ $row->folio }}</td>
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
							{{ $row->seccion }}
						</td>
						<td style="width: 30%;">
							{{ $row->fila }}
						</td>
						<td >
							{{ $row->asiento }}
						</td>
					</tr>
				</tbody>
			</table>
			<table>
				<tbody>
					
					<tr>
						<th style="width: 29%;">PRECIO:</th>
						<td class="precio"><span>${{ $precio[$row->seccion] }}</span> MXN.</td>
					</tr>
				</tbody>
			</table>
		</div>
		<div class="barcode-container">
			<img src="data:image/png;base64,{{ DNS1D::getBarcodePNG($row->codigo_barras, "C39") }}" alt="barcode" class="barcode"  />
			<p>{{ $row->codigo_barras }}</p>
		</div>

		<div class="logo-bg logo-bg-1">
			<img src="img/logo-azul.png">
		</div>
		<div class="logo-bg logo-bg-2">
			<img src="img/logo-azul.png">
		</div>
		<div class="logo-bg logo-bg-3">
			<img src="img/logo-azul.png">
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
		
		<div class="logo-bg logo-bg-4">
			<img src="img/logo-azul.png">
		</div>
		<div class="logo-bg logo-bg-5">
			<img src="img/logo-azul.png">
		</div>
		<div class="logo-bg logo-bg-6">
			<img src="img/logo-azul.png">
		</div>
		<div class="logo-bg logo-bg-7">
			<img src="img/logo-azul.png">
		</div>
		<div class="logo-bg logo-bg-8">
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