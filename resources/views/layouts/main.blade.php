<!DOCTYPE html>
<html lang="es">
<head>
	<title>@yield('title') | Bolematico</title>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0"/>
	<meta name="description" content="@yield('description', 'Empresa michoacana')">
	<link href="http://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
	<link rel="stylesheet" type="text/css" href="{{asset('css/materialize.min.css')}}">
	<link rel="stylesheet" type="text/css" href="{{asset('css/styles.css')}}">
	<style type="text/css">	
	@yield('styles')
	</style>
</head>
<body>
	<header>
		@include('layouts.nav')
	</header>

	<main>
		@include('flash::message')
		@yield('content')
	</main>

	{{-- Login Modal --}}
	<div id="modal-login" class="modal">
		<a href="#!" class="modal-close btn-flat"><i class="material-icons">close</i></a>
		<div class="modal-content">
			<h5 class="center-align mb-15">LOGIN</h5>

			<div class="divider mb-15"></div>

			<form class="col s12" id="login-form" action="{{url('/login')}}">
				{{ csrf_field() }}


				<div class="card-content">
					<div class="row">
						<div class="input-field col s12">
							<i class="material-icons prefix">account_circle</i>
							<input id="email" type="email" class="validate" name="email" value="{{ old('email') }}" required autofocus>
							<label for="email">Ingresa tu email</label>     
						</div>
						<div class="input-field col s12">
							<i class="material-icons prefix">lock_outline</i>
							<input id="password" type="password" class="validate" name="password" required>
							<label for="password" class="validate">Contraseña</label>
						</div>
						<span class="help-block col s10 offset-s1">
							<i id="message-error"></i>
						</span>
					</div>

					<div class="row">
						<div class="input-field col s6 nopadding">                            
	                    	<a class="blue-text center-align waves-effect waves-light btn-flat btn-block" href="{{ url('/register') }}">Registrarse</a>
						</div>
						<div class="input-field col s6 nopadding">                            
							<input type="submit" class="blue waves-effect waves-teal btn btn-block">
						</div>						
					</div>
				</div>
				<div class="divider"></div>
				<div class="row  mb-0">
	                <div class="mt-10 center-align">
	                	<a class="red-text underline" href="!#">Olvide mi contraseña</a>
	                </div>
            	</div>
        	</form>
		</div>
	</div>

	<footer class="page-footer grey darken-3">
		@include('layouts.footer')
	</footer>

	<script type="text/javascript" src="https://code.jquery.com/jquery-2.1.1.min.js"></script>
	<script type="text/javascript" src="{{asset('js/materialize.js')}}"></script>
	<script type="text/javascript" src="{{asset('js/scripts.js')}}"></script>
	<script>
		@if($errors)
            @foreach($errors->all() as $error)
            	Materialize.toast('{{ $error }}', 4000);
        	@endforeach
        @endif
        @yield('scripts')
	</script>
</body>
</html>