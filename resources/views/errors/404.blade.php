<!DOCTYPE html>
<html lang="es">
<head>
	<title>Bolematico | @yield('title','Compra')</title>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0"/>
	<link href="http://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
	<link rel="stylesheet" type="text/css" href="{{asset('css/materialize.min.css')}}">
	<link rel="stylesheet" type="text/css" href="{{asset('css/styles.css')}}">
	<link href="https://file.myfontastic.com/p33ryNdn2ug99gf3MgkiUK/icons.css" rel="stylesheet">
</head>
<body>
	<header>
		@include('bolematico.nav')
	</header>

	<main>
		<div id="imagen-header"></div>

		<div class="row mt-100">
			<div class="col s10 m5 col-center z-depth-2 p-30 red lighten-1">
				
				<h1 class="center-align white-text">404</h1>
				<h4 class="center-align white-text">¡Algo anda mal!</h4>
				<div class="divider col-center col s10"></div>
				<p class="center-align white-text">Parece que la página que buscas no existe</p>

			</div>

		</div>

		<div class="row mt-30">
				
			<div class="col-center col s2">
				<a href="{{ route('home') }}" class="btn btn-block waves-effect waves-light  orange accent-3">Volver al inicio</a>
			</div>

		</div>

	</main>

	<footer class="page-footer grey darken-3">
		<div class="container">
			<div class="row">
				<div class="col l6 s12">
					<h5 class="white-text">Bolematico.com.mx</h5>
				</div>
			</div>
		</div>
		<div class="footer-copyright">
			<div class="container">
				<div class="row">
					<div class="col l6">
						Todos los derechos reservados.	    			
					</div>
					<div class="col l6 right-align">
						© {!! date('Y') !!}
					</div>
				</div>
			</div>
		</div>
	</footer>

	<script type="text/javascript" src="https://code.jquery.com/jquery-2.1.1.min.js"></script>
	<script type="text/javascript" src="{{asset('js/materialize.js')}}"></script>
	<script type="text/javascript" src="{{asset('js/owl.carousel.js')}}"></script>
	<script>
		$(document).ready(function(){
			$(".button-collapse").sideNav({
			 edge: 'right', // Choose the horizontal origin
			 closeOnClick: true
			});

			$('.materialboxed').materialbox();//puede funcionar sin esta declaracion

			$(".dropdown-button").dropdown(); //puede funcionar sin esta declaracion

		});
	</script>
</body>
</html>