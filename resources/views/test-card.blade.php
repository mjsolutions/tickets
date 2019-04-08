@extends('layouts.main')

@section('title', 'Confirmar compra')

@section('description', 'Confirmacion de compra')

@section('styles')
<script src="https://use.fontawesome.com/9b9c9dc667.js"></script>
<style type="text/css">
	.table-detalles th, .table-detalles td { padding: 3px 0; }
	.table-detalles th { width: 70px; }
	.number-step {
		color: #FFF;
		margin-right: 15px;
		padding: 3px 10px;
		border-radius: 50%;
	}
	input[type=text] { height: 2rem; }
	.input-field label { top: 0.3rem; }
	.input-field label.active { transform: translateY(-110%); }
	.input-field .prefix { 
		font-size: 1.5rem;
		width: 2.5rem;
		top: 0.3rem;
		color: #525153;
	}
	.input-field .prefix ~ input, .prefix ~ .select-wrapper {
		margin-left: 2.5rem;
		width: calc( 100% - 2.5rem );
		padding-left: 0.5rem;
	}
	.select-wrapper input.select-dropdown {
		height: 2rem;
		line-height: 2rem;
	}
	.select-wrapper span.caret { top: 7px; }
	.select-year + .select-dropdown {
		width: calc(100% - 1rem);
		margin-left: 1rem;
	}
	.dropdown-content li>span { 
		padding: 5px 15px;
		color: inherit;
	}
</style>
@endsection

@section('content')

@php
$months = [];
for ($month = 1; $month < 13; $month++) $months[str_pad($month, 2,'0', STR_PAD_LEFT)] = str_pad($month, 2,'0', STR_PAD_LEFT);
@endphp

<div class="image-header bg-5 overlay overlay-5">
	<div class="row white-text">
		<h4>Confirma tu compra</h4>
		<div class="divider"></div>
	</div>
</div>

<div class="container">
	<div class="row">
		<div class="col s12">
			<h5 class="mt-30"><span class="number-step deep-orange darken-2">1</span> Verifica que los datos esten correctos.</h5>
		</div>
	</div>
	
	<div class="row mt-30 mb-50">
		<div class="col m6">

			<div class="col row mb-0 mt-30">
				<h5><span class="number-step deep-orange darken-2">2</span> Selecciona tu forma de pago.</h5>
			</div>

			<div class="col s12 card-text white mt-30">
				{!! Form::open(['route'=>'payment.confirm', 'method'=>'POST', 'id'=>'payment']) !!}
					<div class="row center-align pt-40" id="form-inputs">

						<div class="col s4">
							<div>
								<div class="col s10 offset-s1">
									{!! Form::radio('payment_form', 'credit_card', '', ['id' => 'payment_card']) !!}
									<label for="payment_card" class="check-up"><img src="{{ asset('img/cards.svg') }}" alt="" class="responsive-img"></label>
								</div>
							</div>
						</div>
						<div class="col s4">
							<div>
								<div class="col s10 offset-s1">
									{!! Form::radio('payment_form', 'oxxo_cash', '', ['id' => 'payment_oxxo']) !!}	
									<label for="payment_oxxo" class="check-up"><img src="{{ asset('img/oxxopay.svg') }}" class="responsive-img"></label>
								</div>
							</div>
						</div>
						<div class="col s4">
							<div>
								<div class="col s10 offset-s1">
									{!! Form::radio('payment_form', 'spei', '', ['id' => 'payment_spei']) !!}
									<label for="payment_spei" class="check-up"><img src="{{ asset('img/spei.svg') }}" alt="" class="responsive-img"></label>
								</div>
							</div>
						</div>	

						
					</div>
						
				{!! Form::close() !!}

				{!! Form::open(['url'=>'', 'method'=>'POST', 'id'=>'card-form', 'class' => 'hide']) !!}
					<div class="row">
						<div class="input-field col s12">
							<i class="prefix fa fa-user"></i>
							{!! Form::text('name', null, ['class' => 'validate', 'data-conekta' => 'card[name]', 'required']) !!}
							{!! Form::label('name','Nombre del tarjetahabiente') !!}
			
						</div>
						<div class="input-field col s12">
							<i class="prefix fa fa-credit-card"></i>
							{!! Form::text('number', null, ['class' => 'validate', 'data-conekta' => 'card[number]', 'required']) !!}
							{!! Form::label('number','Número de tarjeta de crédito') !!}
			
						</div>
						<div class="input-field col s3">
							<span class="prefix" style="top: -0.1rem;"><small><b>CVC</b></small></span>
							{!! Form::text('cvc', null, ['class' => 'validate', 'data-conekta' => 'card[cvc]', 'required']) !!}
							{!! Form::label('cvc','CVC') !!}
			
						</div>
						<div class="col s9">
							<div class="input-field col s4" style="padding-right: 0">
								<i class="prefix fa fa-calendar"></i>
								{{-- {!! Form::text('exp_month', null, ['class' => 'validate', 'data-conekta' => 'card[exp_month]', 'required']) !!} --}}
								{!! Form::select('exp_month', $months, '', ['class' => 'select-dropdown', 'id' => 'exp_month', 'placeholder' => 'MM', 'data-conekta' => 'card[exp_month]', 'required']) !!}
								{{-- {!! Form::label('exp_month','MM') !!} --}}
								{{-- <span> /</span> --}}
							</div>
							<div class="input-field col s8" style="padding-right: 0">
								<i class="prefix fa select-year" style="width: 1rem">/</i>
								{!! Form::selectYear('exp_year', date('Y'), 2030, '', ['class' => 'select-dropdown', 'id' => 'exp_year', 'placeholder' => 'AAAA', 'data-conekta' => 'card[exp_year]', 'required']) !!}
								{{-- {!! Form::text('exp_year', null, ['class' => 'validate', 'data-conekta' => 'card[exp_year]', 'style' => 'width: calc(100% - 1rem); margin-left: 1rem', 'required']) !!} --}}
								{{-- {!! Form::label('exp_year','AAAA') !!} --}}
							</div>
						</div>
					</div>
				{!! Form::close() !!}				

			</div>

			<div class="col row mb-0 mt-30">
				<h5><span class="number-step deep-orange darken-2">3</span> Confirma tu compra</h5>
			</div>

			<div class="col s12 card-text white mt-30">
				<div class="row">
					<p id="error-response" class="center-align card-errors"></p>
				</div>

				<div class="row">
				
					<div class="input-field col s12 center-align">
						<button id="btn-submit" class=" col s12 m8 offset-m2 btn btn-large btn-block waves-effect waves-light  deep-orange darken-2">CONFIRMAR COMPRA</button>
						<div class="clearfix"></div>
					</div>
					<div class="input-field col s12 center-align mt-0">
						<a href="#!" class="waves-effect waves-teal btn-flat">Cancelar compra</a>	
					</div>
				
				</div>
			</div>
		</div>
		<div class="col m6">
			<div class="card-text yellow lighten-5">
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
		
		Conekta.setPublicKey('key_A45AqPGnrqTPaPV3eXto8TA');
		// Conekta.setPublicKey('key_aYwC2MjtD5WfJDP3DJBsgYg');

		//Mostar el form de tarjeta cuando se da back en el navegador
		if($('#payment_card').is(':checked')){
			$("#card-form").removeClass('hide');
		}

		//Click en cualquier forma de pago
		$('input:radio').click(function(){
			if($('#payment_card').is(':checked')){
				$("#card-form").removeClass('hide');
			}else{
				$("#card-form").addClass('hide');				
			}
		});

		var conektaSuccessResponseHandler = function(token) {
			// console.log(token);
			var $form = $("#payment");
			//Inserta el token_id en la forma para que se envíe al servidor
			$form.append($('<input type="hidden" name="conektaTokenId" id="conektaTokenId">').val(token.id));
			$("#payment").trigger('submit');//Hace submit
		};

		var conektaErrorResponseHandler = function(response) {
			var $form = $("#card-form");
			$(".card-errors").html('<b class="red-text">'+response.message_to_purchaser+'</b>');
			console.log(response);
			$("#btn-submit").removeClass('disabled');
		};
		

		$("#btn-submit").click(function(){

			//Validar que este seleccionad alguna forma de pago 
			if(!$('input:radio').is(':checked')){
				$("#btn-submit").removeClass('disabled');
				$("#btn-submit").html('CONFIRMAR COMPRA');
				$("#error-response").html('<b class="red-text">Debes seleccionar una forma de pago</b>');
				$("#form-inputs").css('border', '2px solid #ff3400');
				return false;
			}else if($('#payment_card').is(':checked')){
				$("#card-form").trigger('submit');
			}else{
				$("#payment").trigger('submit');
			}

		});

		$("#card-form").submit(function(event) {
		  var $form = $(this);
		  // Previene hacer submit más de una vez
		  $("#btn-submit").addClass('disabled');
		  Conekta.Token.create($form, conektaSuccessResponseHandler, conektaErrorResponseHandler);
		  return false;
		});

		$("#payment").submit(function(e){

			$("#btn-submit").html('Validando datos...');
			$("#btn-submit").addClass('disabled');

		});
	});
</script>
@endsection