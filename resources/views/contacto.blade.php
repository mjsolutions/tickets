@extends('layouts.main')

@section('title', 'Inicio')

@section('description', 'Nos interesa conocer tu opinión')

@section('content')

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
			<a href="{{ route('index') }}" class="btn btn-block waves-effect waves-light  orange accent-3">Volver al inicio</a>
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

@endsection