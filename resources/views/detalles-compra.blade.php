@extends('layouts.main')

@section('title', 'Confirmar compra')

@section('description', 'Confirmacion de compra')

@section('styles')
<script src="https://use.fontawesome.com/9b9c9dc667.js"></script>
@endsection

@section('content')

<div class="image-header bg-5 overlay overlay-5">
	<div class="row white-text">
		<h4>Confirma tu compra</h4>
		<div class="divider"></div>
	</div>
</div>

<div class="container">
	<div class="row">
		<h5 class="mt-30 quote">Verifica que los datos esten correctos y selecciona tu forma de pago.</h5>
	</div>
	
	<div class="row mt-30 mb-50">
		<div class="col m6">
			<div class="col m4">
				<img src="{{ asset($req->img) }}" alt="" class="materialboxed responsive-img">
			</div>
			<div class="col m8">
				<p class="mt-0"><b>Evento:</b> {{ $req->evento }}</p>
				<p><b>Fecha:</b> {{ $req->fecha }}</p>
				<p><b>Ciudad:</b> {{ $req->ciudad }}</p>
				<p><b>Lugar:</b> {{ $req->lugar }}</p>
				<p><b>Hora:</b> {{ $req->hora }}</p>
				<p><b>Zona:</b> {{ $req->zona }}</p>
				@if( $req->event_type == "numerado" )

					@php

					$i=0;

					if($req->select_type == 'manual'){

						$asientos = explode(',', $req->asiento);

						foreach ($asientos as $asiento) {
							$field = explode('|', $asiento);
							$id[$i] = $field[0];
							$sit[$i] = $field[1];
							$row[$i] = $field[2];
							$i++;
						}

						$num_asientos = sizeof($asientos);

						$str_sits = "";
						$j = 0;
						foreach( $sit as $s ){
							$str_sits .= " *".$row[$j]."|".$s;
							$j++;
						}

					}else{

						foreach ($req->asiento as $value) {
							$field = explode('|', $value);
							$id[$i] = $field[0];
							$sit[$i] = $field[1];
							$i++;
						}

						$num_asientos = sizeof($req->asiento);

					}

					@endphp

				@if($req->select_type != 'manual')
				<p><b>Fila:</b> {{ $req->fila }}</p>
				<p><b>Asientos:</b> *{{ implode(" *", $sit) }}</p>
				@else
				<p><b>Fila/Asiento:</b> {{$str_sits}}</p>
				@endif

				@else
					
					@php
					$num_asientos = $req->asiento;
					@endphp
				
				<p><b>Asientos:</b> {{ $num_asientos }}</p>
				@endif
				<p><b>Email comprador:</b> {{ Auth::user()->email }}</p>
				<p><b>Total:</b> <span class="label-precio">$ <b>{{ number_format(($req->precio * $num_asientos) * 1.10, 2, '.', ',') }}</b> MX</span></p>
			</div>
			<div class="col s10 offset-s1 ">
				<div class="divider"></div>
			</div>
			<div class="col m12 mt-30">
				<h5 class="center-align mb-30"><b>SELECCIONA TU FORMA DE PAGO</b></h5>
				{!! Form::open(['route'=>'payment.confirm', 'method'=>'POST', 'id'=>'payment']) !!}
					<div class="row center-align pt-40" id="form-inputs">

						<div class="col m6 s6">
							<div>
								<div class="col s10 offset-s1">
									{!! Form::radio('payment_form', 'oxxo_cash', '', ['id' => 'payment_oxxo']) !!}	
									<label for="payment_oxxo" class="check-up"><img src="{{ asset('img/oxxopay.svg') }}" class="responsive-img"></label>
								</div>
							</div>
						</div>
						<div class="col m6 s6">
							<div>
								<div class="col s10 offset-s1">
									{!! Form::radio('payment_form', 'spei', '', ['id' => 'payment_spei']) !!}
									<label for="payment_spei" class="check-up"><img src="{{ asset('img/spei.svg') }}" alt="" class="responsive-img"></label>
								</div>
							</div>
						</div>	
						
						{!! Form::hidden('evento', $req->evento) !!}
						{!! Form::hidden('fecha', $req->fecha) !!}
						{!! Form::hidden('lugar', $req->lugar) !!}
						{!! Form::hidden('ciudad', $req->ciudad) !!}
						{!! Form::hidden('hora', $req->hora) !!}
						{!! Form::hidden('precio', $req->precio) !!}
						{!! Form::hidden('seccion', $req->zona) !!}
						@if( $req->event_type == "numerado" )
						{!! Form::hidden('asientos_id', implode("-", $id) ) !!}
						{!! Form::hidden('asientos_cantidad', $num_asientos ) !!}						
						@if($req->select_type != 'manual')
						{!! Form::hidden('asientos', "*".implode(" *", $sit) ) !!}
						{!! Form::hidden('fila', $req->fila) !!}
						@else
						{!! Form::hidden('asientos', $str_sits ) !!}
						{!! Form::hidden('fila', '') !!}
						@endif
						@else
						{!! Form::hidden('asientos_cantidad', $num_asientos ) !!}		
						@endif
						{!! Form::hidden('event_type', $req->event_type) !!}
						{!! Form::hidden('impresion_boleto', $req->impresion_boleto) !!}
						{!! Form::hidden('db_table', $req->db_table) !!}
						{!! Form::hidden('info', $req->info) !!}
						{!! Form::hidden('customer_name', Auth::user()->name.' '.Auth::user()->last_name.' '.Auth::user()->second_lname) !!}
						{!! Form::hidden('customer_email', Auth::user()->email) !!}
						{!! Form::hidden('customer_phone', Auth::user()->tel) !!}
						{!! Form::hidden('event_photo', asset($req->img) ) !!}
						{!! Form::hidden('url', $req->url) !!}
						
					</div>

					<div class="row">
						<p id="error-response" class="center-align"></p>
					</div>

					<div class="row">
					
						<div class="input-field col s12 center-align">
							<button type="submit" id="btn-submit" class=" col s12 m8 offset-m2 btn btn-large btn-block waves-effect waves-light  deep-orange darken-2">CONFIRMAR COMPRA</button>
							<div class="clearfix"></div>
						</div>	
					
					</div>
						
				{!! Form::close() !!}
					<div class="input-field col s12 center-align mt-0">
							<a href="{{ $req->url }}" class="waves-effect waves-teal btn-flat">Cancelar compra</a>
						
					</div>

			</div>
		</div>
		<div class="col m6">
			<div class="card-text">
				<div class="card-text-header deep-orange darken-2 center-align white-text">
					<h5><b>IMPORTANTE</b></h5>
				</div>
				<p><b>Debes considerar los siguientes puntos antes de confirmar tu compra:</b></p>
				<ul class="fa-ul">
					<li><span class="fa-li"><i class="fa fa-check"></i></span> Se cobrará una comisión adicional del 10% del total de la compra por concepto del servicio de venta en linea</li>
					<li><span class="fa-li"><i class="fa fa-check"></i></span> Los pagos con tarjeta de crédito, SPEI o pago en OXXO son gestionados por medio de <a href="https://www.conekta.com/es" target="_blank">Conekta</a> por lo que tus datos estan seguros, bolematico.mx no guarda informacion adicional en tus compras.</li>
					<li><span class="fa-li"><i class="fa fa-check"></i></span> Los pagos mediante Paypal o Tarjeta de crédito son automaticos por lo que al terminar el proceso enviaremos a tu email el comprobante con las instrucciones para que recojas tu boletos</li>
					<li><span class="fa-li"><i class="fa fa-check"></i></span> Los pagos mediante SPEI u OXXO cuentan con una vigencia de 24 hrs para que puedas completar el pago y una vez que nos sea notificado el mismo ya sea por OXXO o el banco correspondiente te enviaremos a tu email el comprobante con las instrucciones para que recojas tus boletos.</li>
					<li><span class="fa-li"><i class="fa fa-check"></i></span> Para los pagos en OXXO deberas acudir personalmente a alguna sucursal OXXO y presentar el comprobante que se te hará llegar a tu email con el numero al que debe ser depositado el total de tu compra. El establecimiento te cobrará ademas un cargo por servicio.</li>
					{{-- <li><span class="fa-li"><i class="fa fa-check"></i></span> En caso de seleccionar el pago mediante Paypal seras redireccionado para completar el proceso por medio de su plataforma y al terminar dicho proceso volveras automaticamente a bolematico.mx. Recuerda que debes de contar con una cuenta activa en Paypal, en caso de no tenerla puedes crear una <a href="https://www.paypal.com/mx/webapps/mpp/account-selection" target="_blank">aqui</a>.</li> --}}
					<li><span class="fa-li"><i class="fa fa-check"></i></span> Verifica que el email que aparece en los datos generales sea el correcto ya que es a donde te enviaremos toda la información correspondiente según sea el tipo de pago que hayas seleccionado.</li>
				</ul>
			</div>
		</div>
	</div>
</div>
@endsection

@section('scripts')
<script type="text/javascript" src="https://cdn.conekta.io/js/latest/conekta.js"></script>
<script type="text/javascript">
	$(document).ready(function(){

		Conekta.setPublicKey('key_KJysdbf6PotS2ut2');

		var conektaSuccessResponseHandler = function(token) {
			var $form = $("#card-form");
			//Inserta el token_id en la forma para que se envíe al servidor
			$form.append($('<input type="hidden" name="conektaTokenId" id="conektaTokenId">').val(token.id));
			$form.get(0).submit(); //Hace submit
		};

		var conektaErrorResponseHandler = function(response) {
			var $form = $("#card-form");
			$form.find(".card-errors").text(response.message_to_purchaser);
			$form.find("button").prop("disabled", false);
		};

		//jQuery para que genere el token después de dar click en submit
		$(function () {
			$("#card-form").submit(function(event) {
			  var $form = $(this);
			  // Previene hacer submit más de una vez
			  $form.find("button").prop("disabled", true);
			  Conekta.Token.create($form, conektaSuccessResponseHandler, conektaErrorResponseHandler);
			  return false;
			});
		});

		$("#payment").submit(function(e){

			// e.preventDefault();
			// console.log($(this).serialize());

			$("#btn-submit").html('Validando datos...');
			$("#btn-submit").addClass('disabled');

			if(!$('input:radio', this).is(':checked')){
				$("#btn-submit").removeClass('disabled');
				$("#btn-submit").html('CONFIRMAR COMPRA');
				$("#error-response").html('<b class="red-text">Debes seleccionar una forma de pago</b>');
				$("#form-inputs").css('border', '2px solid #ff3400');
				return false;
			}
		});
	});
</script>
@endsection