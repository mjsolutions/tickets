<!DOCTYPE html>
<html>
<head>
	<title>Order Created</title>
	<style type="text/css">
	body { font-size: 14px; }
	h3 {
		margin-bottom: 10px;
		font-size: 15px;
		font-weight: 600;
		text-transform: uppercase;
	}

	.opps {
		width: 100%; 
		border-radius: 4px;
		box-sizing: border-box;
		padding: 0 45px;
		margin-bottom: 40px;
		overflow: hidden;
		border: 1px solid #b0afb5;
		font-family: 'Open Sans', sans-serif;
		color: #4f5365;
	}

	.opps-reminder {
		position: relative;
		top: -1px;
		padding: 9px 0 10px;
		font-size: 11px;
		text-transform: uppercase;
		text-align: center;
		color: #ffffff;
		background: #09bde4;
	}

	.opps-info {
		margin-top: 26px;
		position: relative;
	}

	.opps-info:after {
		visibility: hidden;
	     display: block;
	     font-size: 0;
	     content: " ";
	     clear: both;
	     height: 0;

	}

	.opps-brand {
		width: 40%;
		float: left;
	}

	.opps-brand img {
		max-width: 100%;
		margin-top: 2px;
	}

	.opps-ammount {
		width: 55%;
		float: right;
	}

	.opps-ammount h2 {
		font-size: 36px;
		color: #000000;
		line-height: 24px;
		margin-bottom: 15px;
	}

	.opps-ammount h2 sup {
		font-size: 16px;
		position: relative;
		top: -2px
	}

	.opps-ammount p {
		font-size: 10px;
		line-height: 14px;
	}

	.opps-reference {
		margin-top: 14px;
	}

	h1 {
		font-size: 27px;
		color: #000000;
		text-align: center;
		margin-top: -1px;
		padding: 6px 0 7px;
		border: 1px solid #b0afb5;
		border-radius: 4px;
		background: #f8f9fa;
	}

	.opps-instructions {
		margin: 32px -45px 0;
		padding: 32px 45px 45px;
		border-top: 1px solid #b0afb5;
		background: #f8f9fa;
	}

	ol.opps-list {
		margin: 17px 0 0 16px;
	}

	ol.opps-list li {
		margin-top: 10px;
		color: #000000;
	}

	a {
		color: #09bde4;
	}

	.opps-footnote {
		margin-top: 22px;
		padding: 22px 20 24px;
		color: #108f30;
		text-align: center;
		border: 1px solid #108f30;
		border-radius: 4px;
		background: #ffffff;
	}
	.clearfix {
		clear: both;
	}
	</style>
</head>
<body>
	<h2 style="font-family: 'Raleway', sans-serif;font-size: 1.5em;"><b>GRACIAS POR SU COMPRA</b></h2>

	<div style="width: 100%;height: 1px;background: #ccc;">
	</div>
	<p>Una vez que nos sea notificado tu pago, te enviaremos las instrucciones finales para que puedas recibir tus boletos.</p>
	<p>Cuentas con 24 hrs para realizar tu pago.</p>

	<div style="margin-top: 30px;">
	@if( $order->charges[0]->payment_method->type == 'spei' )
		<div class="opps">
			<div class="opps-header">
				<div class="opps-reminder">Ficha digital. No es necesario imprimir.</div>
				<div class="opps-info">
					<div class="opps-brand"><img src="{{ asset('img/spei_brand.png') }}" alt="Banorte"></div>
					<div class="opps-ammount">
						<h3>Monto a pagar</h3>
						<h2>$ {{ number_format($order->amount/100, 2, '.', ',') }} <sup>MXN</sup></h2>
						<p>Utiliza exactamente esta cantidad al realizar el pago.</p>
					</div>
				</div>
				<div class="opps-reference">
					<h3>CLABE</h3>
					<h1>{{ $order->charges[0]->payment_method->receiving_account_number }}</h1>
				</div>
			</div>
			<div class="opps-instructions">
				<h3>Instrucciones</h3>
				<ol class="opps-list">
					<li>Recuerda que tu número de referencia expira el <strong>{{ $expires_at }}</strong></li>
					<li>Accede a tu banca en línea.</li>
					<li>Da de alta la CLABE en esta ficha. <strong>El banco deberá de ser {{ $order->charges[0]->payment_method->receiving_account_bank }}</strong>.</li>
					<li>Realiza la transferencia correspondiente por la cantidad exacta en esta ficha, <strong>de lo contrario se rechazará el cargo</strong>.</li>
					<li>Al confirmar tu pago, el portal de tu banco generará un comprobante digital. <strong>En el podrás verificar que se haya realizado correctamente.</strong> Conserva este comprobante de pago.</li>
				</ol>
				<div class="opps-footnote">Al completar estos pasos recibirás un correo de <strong>bolematico.mx</strong> confirmando tu pago.</div>
			</div>
		</div>

	@else

		<div class="opps">
			<div class="opps-header">
				<div class="opps-reminder">Ficha digital. No es necesario imprimir.</div>
				<div class="opps-info">
					<div class="opps-brand"><img src="{{ asset('img/oxxopay_brand.png') }}" alt="OXXOPay"></div>
					<div class="opps-ammount">
						<h3>Monto a pagar</h3>
						<h2>$ {{ number_format($order->amount/100, 2, '.', ',') }} <sup>MXN</sup></h2>
						<p>OXXO cobrará una comisión adicional al momento de realizar el pago.</p>
					</div>
				</div>
				<div class="clearfix"></div>
				<div class="opps-reference">
					<h3>Referencia</h3>
					<h1>{{ $order->charges[0]->payment_method->reference }}</h1>
				</div>
			</div>
			<div class="opps-instructions">
				<h3>Instrucciones</h3>
				<ol class="opps-list">
					<li>Recuerda que tu número de referencia expira el <strong>{{ $expires_at }}</strong></li>
					<li>Acude a la tienda OXXO más cercana. <a href="https://www.google.com.mx/maps/search/oxxo/" target="_blank">Encuéntrala aquí</a>.</li>
					<li>Indica en caja que quieres realizar un pago de <strong>OXXOPay</strong>.</li>
					<li>Dicta al cajero el número de referencia en esta ficha para que tecleé directamete en la pantalla de venta.</li>
					<li>Realiza el pago correspondiente con dinero en efectivo.</li>
					<li>Al confirmar tu pago, el cajero te entregará un comprobante impreso. <strong>En el podrás verificar que se haya realizado correctamente.</strong> Conserva este comprobante de pago.</li>
				</ol>
				<div class="opps-footnote">Al completar estos pasos recibirás un correo de <strong>bolematico.mx</strong> confirmando tu pago.</div>
			</div>
		</div>
	@endif
	</div>

	<div style="color: #FFF; background: #222; margin-bottom: 0; padding: 20px 0;">
		<p style="text-align: center;">Todos los derechos reservados  © Bolematico {!! date('Y') !!} </p>
	</div>
</body>
</html>