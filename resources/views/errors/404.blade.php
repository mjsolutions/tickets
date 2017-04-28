<!DOCTYPE html>
<html lang="es">
<head>
	<title>404 | Bolematico</title>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0"/>
	<meta name="description" content="Página no encontrada">
	<link href="http://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
	<link rel="stylesheet" type="text/css" href="{{asset('css/materialize.min.css')}}">
	<link rel="stylesheet" type="text/css" href="{{asset('css/styles.css')}}">
</head>
<body>
	<main>
		

		<div class="row mt-100">
			<div class="col s10 m5 col-center z-depth-2 p-30 cyan darken-2">

				<h1 class="center-align white-text">404</h1>
				<h4 class="center-align white-text">¡Algo anda mal!</h4>
				<div class="divider col-center col s10"></div>
				<p class="center-align white-text">Parece que la página que buscas no existe</p>

			</div>

		</div>

		<div class="row mt-30">

			<div class="col-center col s2">
				<a href="{{ route('index') }}" class="btn btn-block waves-effect waves-light  orange accent-3">Volver al inicio</a>
			</div>

		</div>
	</main>

	<footer class="page-footer grey darken-3">
		@include('layouts.footer')
	</footer>

	<script type="text/javascript" src="https://code.jquery.com/jquery-2.1.1.min.js"></script>
	<script type="text/javascript" src="{{asset('js/materialize.js')}}"></script>
	<script type="text/javascript" src="{{asset('js/scripts.js')}}"></script>
</body>
</html>