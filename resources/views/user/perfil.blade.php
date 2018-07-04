@extends('layouts.main')

@section('title', 'Mis perfil')

@section('description', '')

@section('styles')
<script src="https://use.fontawesome.com/9b9c9dc667.js"></script>
<style type="text/css">
	.qcPricing header {
		font-size: 16px;
	}
</style>
@endsection

@section('content')

<div class="image-header bg-gradiente overlay ">
	<div class="row white-text">
		<h4>Mi Perfil</h4>
		<div class="divider"></div>
	</div>
</div>

<div class="container pt-40">
	
	<div class="row">
		<div class="col m3">
			@include('layouts.nav-userpanel')
		</div>

		<div class="col s12 m6">
			<div class="qcPricing col s12 mb-10">
				<div class="box col s12">
					<header>
						<div class="col s12 teal accent-4"><b>Información</b></div>
					</header>
					<div class="ptb-10 col s12 white">
						<p><b>Nombre:</b> {{ Auth::user()->name }}</p>
						<p><b>A. Paterno:</b> {{ Auth::user()->last_name}}</p>
						<p><b>A. Materno:</b> {{ Auth::user()->second_lname }}</p>
						<p><b>Email:</b> {{ Auth::user()->email }}</p>
						<p><b>Telefono:</b> {{ Auth::user()->tel }}</p>
						<p><b>Dirección:</b> {{ Auth::user()->address }}</p>
						<p><b>En bolematico desde:</b> {{ Auth::user()->created_at }}</p>
					</div>
				</div>
			</div>
			
			
		</div>
	</div>

</div>

@endsection