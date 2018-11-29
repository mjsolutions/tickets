<!DOCTYPE html>
<html lang="es">
<head>
	<title>@yield('title') | Bolematico</title>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0"/>
	<meta name="description" content="@yield('description', 'Empresa michoacana, desarrollamos aplicaciones complejas de boletaje electrónico para la industria del entretenimiento, expedicion de boletos, venta por internet, control de acceso, servicios de mailing.')">
	<link rel="icon" type="image/png" href="{{asset('img/favicon.png')}}" />
	<link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
	<link rel="stylesheet" type="text/css" href="{{asset('css/normalize.css')}}">
	<link rel="stylesheet" type="text/css" href="{{asset('css/materialize.min.css')}}">
	<link rel="stylesheet" type="text/css" href="{{asset('css/animate.min.css')}}">
	<link rel="stylesheet" type="text/css" href="{{asset('css/styles.css')}}">		
	@yield('styles')
	{{-- Analytics --}}
	<script>
	  (function(i,s,o,g,r,a,m){i['GoogleAnalyticsObject']=r;i[r]=i[r]||function(){
	  (i[r].q=i[r].q||[]).push(arguments)},i[r].l=1*new Date();a=s.createElement(o),
	  m=s.getElementsByTagName(o)[0];a.async=1;a.src=g;m.parentNode.insertBefore(a,m)
	  })(window,document,'script','https://www.google-analytics.com/analytics.js','ga');

	  ga('create', 'UA-98399731-1', 'auto');
	  ga('send', 'pageview');
	</script>
</head>
<body>
	<header>
		@include('layouts.nav')
	</header>

	<main>
		@include('flash::message')
		@yield('content')
	</main>
	<div class="clearfix"></div>
	<footer class="grey darken-4">
		@include('layouts.footer')
	</footer>

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
	                	<a class="red-text underline" href="{{ url('password/reset') }}">Olvide mi contraseña</a>
	                </div>
            	</div>
        	</form>
		</div>
	</div>

	<script type="text/javascript" src="https://code.jquery.com/jquery-2.1.1.min.js"></script>
	<script type="text/javascript" src="{{asset('js/materialize.js')}}"></script>
	<script type="text/javascript" src="{{asset('js/wow.min.js')}}"></script>
	<script type="text/javascript" src="{{asset('js/scripts.js')}}"></script>
	<script>
		@if($errors)
            @foreach($errors->all() as $error)
            	Materialize.toast('{{ $error }}', 4000);
        	@endforeach
        @endif
	</script>
    @yield('scripts')
</body>
</html>