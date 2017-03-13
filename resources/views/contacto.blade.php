<!DOCTYPE html>
<html lang="es">
<head>
	<title>Bolematico | @yield('title','Contacto')</title>
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

		@if (session('response'))
			
			<div class="row mt-100">
				<div class="col s10 m5 col-center z-depth-2 p-30 indigo">
					
					<h3 class="center-align white-text">¡GRACIAS POR TU MENSAJE!</h3>
					<div class="divider col-center col s10"></div>
					<p class="center-align white-text">En breve nos pondremos en contacto contigo</p>

				</div>

			</div>

			<div class="row mt-30">
					
				<div class="col-center col s2">
					<a href="{{ route('home') }}" class="btn btn-block waves-effect waves-light  orange accent-3">Volver al inicio</a>
				</div>

			</div>

		@else
			
			<div class="row">
				<div class="col s8 offset-s2 mb-30">
					<div class="qcTabTitle no-border mb-30"><h4>Contacto<span><br> Nos interesa escuchar tu opinión.</span> </h4></div>

					{!! Form::open(['route' => 'contactForm', 'method' => 'POST', 'id' => 'contactForm'])!!}

					<div class="row">

						<div class="input-field col m4 s12">

							{!! Form::label('name','Nombre') !!}
							{!! Form::text('name', null, ['class' => 'validate', 'required']) !!}

						</div>
						<div class="input-field col m4 s12">

							{!! Form::label('email','Email') !!}
							{!! Form::email('email', null, ['class' => 'validate', 'required']) !!}

						</div>

						<div class="input-field col m4 s12">

							{!! Form::label('subject','Asunto') !!}
							{!! Form::text('subject', null, ['class' => 'validate', 'required']) !!}

						</div>

						<div class="input-field col s12">

							{!! Form::label('message','Mensaje') !!}
							{!! Form::textarea('message', null, ['class' => 'materialize-textarea','required']) !!}

						</div>


					</div>

					<div class="input-field center-align">
						{!! Form::submit('Enviar',['class'=>'btn waves-effect waves-light orange accent-3']) !!}
					</div>	

					{!! Form::close() !!}

				</div>
			</div>

		@endif

		

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
				 edge: 'left', // Choose the horizontal origin
				 // closeOnClick: true
				});

			$('.owl-carousel').owlCarousel({
				items:1,
				margin: 25,
				loop: true
			});

			// $('#contactForm').submit(function(){

			// 	$.ajax({
			// 		url: 'contactForm',
			// 		method: 'POST',
			// 		data: $(this).serialize(),
			// 		success: function(response){
			// 			alert(response);
			// 		},
			// 		error:function(response){
			// 			alert(response);
			// 		}

			// 	});

			// 	return false;

			// });

			$('.materialboxed').materialbox();//puede funcionar sin esta declaracion

			$(".dropdown-button").dropdown(); //puede funcionar sin esta declaracion

			@if($errors)
			@foreach($errors->all() as $error)
			Materialize.toast('{{ $error }}', 4000);
			@endforeach
			@endif

		});
	</script>
</body>
</html>