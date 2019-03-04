@extends('layouts.main')

@section('title', 'Mis perfil')

@section('description', '')

@section('styles')
<script src="https://use.fontawesome.com/9b9c9dc667.js"></script>
<style type="text/css">
	.profile-card-header { background-color: #006c8e; }
	.col.profile-card-info { padding: 20px 10px; }
	.profile-card-header p {
		color: #FFF;
		margin: 10px 0;
		font-size: 1.2rem;
		padding: 0 10px;
	}
	.profile-card table th,	.profile-card table td{ padding: 3px 10px; }
	.profile-card table th { max-width: 45px;  }
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
		<div class="col l2 m3 s12">
			@include('layouts.nav-userpanel')
		</div>

		<div class="col l6 m6 s12 ">
			<div class="profile-card col s12 mb-10">
				<div class="col s12">
					<div class="col s12 profile-card-header">
						<p><b>Información</b></p>
					</div>
					<div class="col s12 profile-card-info white">
						<table>
							<tr>
								<th>Nombre:</th>
								<td>{{ Auth::user()->name.' '.Auth::user()->last_name.' '.Auth::user()->second_lname }}</td>
							</tr>
							<tr>
								<th>Email:</th>
								<td>{{ Auth::user()->email }}</td>
							</tr>
							<tr>
								<th>Teléfono:</th>
								<td>{{ Auth::user()->tel }}</td>
							</tr>
							<tr>
								<th>Desde:</th>
								<td>
									@php
									$fecha = new DateTime(Auth::user()->created_at);
									echo $fecha->format('d/m/Y');
									@endphp
								</td>
							</tr>
						</table>
					</div>
				</div>
			</div>			
		</div>
	</div>

</div>

@endsection