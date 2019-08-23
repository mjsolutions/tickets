@extends('layouts.main')

@section('title', 'Compra')

@section('styles')
	
	<style type="text/css">
	h3 {
		margin-bottom: 10px;
		margin-top: 0;
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
		/*font-family: 'Open Sans', sans-serif;*/
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

	.opps-footnote {
		margin-top: 22px;
		padding: 22px 20 24px;
		color: #108f30;
		text-align: center;
		border: 1px solid #108f30;
		border-radius: 4px;
		background: #ffffff;
	}
	</style>
@endsection

@section('content')
<div class="image-header bg-5 overlay overlay-5">
	<div class="row white-text">
		@if($success)
			<h4>¡Gracias por tu compra!</h4>
		@else
			<h4>¡Ooops algo salio mal!</h4>
		@endif
		<div class="divider"></div>
	</div>
</div>

@if($success)
<div class="row mt-50">
	<div class="container">
		@if($payment == 'paid')
		<div class="col s12 l6 offset-l3 mb-30">
		@else
		<div class="col s12 l5 mb-30">
		@endif

			<div class="col s12 z-depth-2 p-30 bg-gray">
					
				@if($payment == 'paid')
				<h5 class="quote"><b>¡SE HA COMPLETADO LA COMPRA!</b></h5>
				<div class="divider col-center col s10"></div>
					@if( Auth::user()->isPuntoDeVenta() )
					@if($email_sent)
					<p>Los boletos han sido enviados a la cuenta de correo {{ $email }}</p>
					@else
					<p>Boletos registrados corectamente. <br><span class="red-text">Error al enviar email.</span></p>
					@endif
					<p class="center-align"><a href="{{ $url }}" class="btn waves-effect waves-light  green darken-2">Volver al evento</a></p>
					@else
					<p>Esta información ha sido enviada a tu cuenta de correo, de no ser asi puedes contactarte con nosotros <a href="{{ route('contacto') }}">aquí</a></p>
					@endif
				@else
				<h5 class="quote"><b>¡SE HA COMPLETADO TU ORDEN!</b></h5>
				<div class="divider col-center col s10"></div>
				<p>Hemos enviado a tu email un comprobante como el que aparece en esta página con el numero de referencia para que puedas completar tu pago.</p>
				<p>Una vez que nos sea notificado tu pago, enviaremos a tu cuenta de correo la confirmación de tu pago asi como las instrucciones finales para terminar el proceso.</p>
				<p>Cuentas con 24 hrs para realizar tu pago.</p>
				<p>Si tienes alguna duda recuerda que puedes ponerte en <a href="{{ route('contacto') }}">contacto</a> con nosotros.</p>
				@endif
				

			</div>
		
		</div>
		@if($payment == "pending")

			@if( $order->charges[0]->payment_method->type == 'spei' )
				<div class="col s12 l6 offset-l1">
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
				</div>
			@else
				<div class="col s12 l6 offset-l1">
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
				</div>
			@endif
		@else
		<div class="clearfix"></div>
		@endif

		<div class="row mt-30 center-align hide-on-small-only">								
			<a href="{{ route('index') }}" class="btn waves-effect waves-light  orange accent-3">Volver al inicio</a>	
		</div>
	</div>

</div>

@else

<div class="row mt-100">
	<div class="col s10 m5 col-center z-depth-2 p-30 cyan darken-2">

		<h2 class="center-align white-text"><strong>ERROR</strong></h2>
		<h4 class="center-align white-text">¡Algo anda mal!</h4>
		<div class="divider col-center col s10"></div>
		<p class="center-align white-text">Ha ocurrido el siguiente error:</p>
		<p class="center-align white-text"><strong>Error:</strong><br> {{ $res }}</p>
		<div class="divider col-center col s10"></div>
		<p><i>(*) Agradecemos que te pongas en contacto con nosotros para informarnos de este inconveniente y poder así ayudarte en tu compra.</i></p>

	</div>

</div>

<div class="row mt-30">

	<div class="col-center col s2">
		<a href="{{ route('index') }}" class="btn btn-block waves-effect waves-light  orange accent-3">Volver al inicio</a>
	</div>

</div>

@endif

@endsection