@extends('admin.main')

@section('title', 'Edición de usuarios')

@section('side-menu')
@include('admin.partials.side_menu', array('active' => 'usuarios'))
@endsection

@section('content')

@if(count($errors) > 0)
<div class="card-admin red lighten-4 red-text text-darken-4">
	@foreach($errors->all() as $error)
	<li>
		{{$error}}
	</li>
	@endforeach
</div>
@endif

<div class="row" style="padding: 5% 25%;">

	{!! Form::open(['route' => ['users.update',$user->id], 'method' => 'PUT', 'class' => 'col s12']) !!}
	
	<div class="row">
		<div class="input-field col s6">
			{!! Form::text('name', $user->name, ['class' => 'validate', 'id' => 'name', 'required' => 'required']) !!}
			{!! Form::label('name', 'Nombre') !!}
		</div>
		<div class="input-field col s6">
			{!! Form::email('email', $user->email, ['class' => 'validate', 'id' => 'email', 'required' => 'required']) !!}
			{!! Form::label('email', 'Correo electrónico') !!}
		</div>
	</div>
	
	<div class="row">
		<div class="col s6">
			{!! Form::submit('Editar', ['class' => 'right btn waves-effect waves-light']) !!}
		</div>
		<div class="col s6">
			<a href="{{ route('users.index') }}" class="btn  left waves-effect waves-teal amber">Regresar</a>
		</div>
	</div>


	{!! Form::close() !!}

</div>

@endsection