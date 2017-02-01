@extends('admin.main')

@section('title', 'Pago con paypal')

@section('side-menu')
@include('admin.partials.side_menu', array('active' => 'reservaciones'))
@endsection

@section('content')

<div class="center">
	<h1 class="valign">Pago efectuado</h1>
	{{-- <form action="https://www.paypal.com/cgi-bin/webscr" method="post" target="_top">
		<input type="hidden" name="cmd" value="_s-xclick">
		<input type="hidden" name="hosted_button_id" value="JJ6WTM4B5PJJG">
		<table>
			<tr><td><input type="hidden" name="on0" value="Zona">Zona</td></tr><tr><td><select name="os0">
			<option value="Diamante">Diamante $1,600.00 MXN</option>
			<option value="Platino">Platino $1,300.00 MXN</option>
			<option value="Oro">Oro $1,000.00 MXN</option>
			<option value="General">General $600.00 MXN</option>
		</select> </td></tr>
	</table>
	<input type="hidden" name="currency_code" value="MXN">
	<input type="image" src="https://www.paypalobjects.com/es_XC/MX/i/btn/btn_buynowCC_LG.gif" border="0" name="submit" alt="PayPal, la forma más segura y rápida de pagar en línea.">
	<img alt="" border="0" src="https://www.paypalobjects.com/es_XC/i/scr/pixel.gif" width="1" height="1">
</form> --}}


{{-- <form action="https://www.sandbox.paypal.com/cgi-bin/webscr" method="post" target="_top">
	<input type="hidden" name="cmd" value="_s-xclick">
	<input type="hidden" name="hosted_button_id" value="L3FMTWPNNEFZW">
	<table>
		<tr><td><input type="hidden" name="on0" value="Zona">Zona</td></tr><tr><td><select name="os0">
		<option value="Diamante">Diamante $1,600.00 MXN</option>
		<option value="Platino">Platino $1,300.00 MXN</option>
		<option value="Dorada">Dorada $1,000.00 MXN</option>
		<option value="General">General $600.00 MXN</option>
	</select> </td></tr>
</table>
<input type="hidden" name="currency_code" value="MXN">
<input type="image" src="https://www.sandbox.paypal.com/es_XC/MX/i/btn/btn_buynowCC_LG.gif" border="0" name="submit" alt="PayPal, la forma más segura y rápida de pagar en línea.">
<img alt="" border="0" src="https://www.sandbox.paypal.com/es_XC/i/scr/pixel.gif" width="1" height="1">
</form> --}}


<form action="https://www.sandbox.paypal.com/cgi-bin/webscr" method="post" target="_top">
	<input type="hidden" name="cmd" value="_s-xclick">
	<input type="hidden" name="hosted_button_id" value="GJAXXHJXUS742">
	<table>
		<tr><td><input type="hidden" name="on0" value="Zona">Zona</td></tr><tr><td><select name="os0">
		<option value="Diamante">Diamante $1,000.00 MXN</option>
		<option value="Platino">Platino $800.00 MXN</option>
		<option value="Oro">Oro $600.00 MXN</option>
		<option value="General A">General A $500.00 MXN</option>
		<option value="General B">General B $400.00 MXN</option>
	</select> </td></tr>
</table>
<input type="hidden" name="currency_code" value="MXN">
<input type="image" src="https://www.sandbox.paypal.com/es_XC/MX/i/btn/btn_buynowCC_LG.gif" border="0" name="submit" alt="PayPal, la forma más segura y rápida de pagar en línea.">
<img alt="" border="0" src="https://www.sandbox.paypal.com/es_XC/i/scr/pixel.gif" width="1" height="1">
</form>



</div>

@endsection