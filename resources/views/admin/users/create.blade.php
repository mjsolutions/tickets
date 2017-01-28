@extends('admin.main')

@section('title', 'Creación de usuarios')

@section('side-menu')
@include('admin.partials.side_menu', array('active' => 'usuarios'))
@endsection

@section('content')

<div class="row" style="padding: 0 10%;">

	@if(count($errors) > 0)
	<div class="card-admin red lighten-4 red-text text-darken-4">
		@foreach($errors->all() as $error)
		<li>
			{{$error}}
		</li>
		@endforeach
	</div>
	@endif


	{!! Form::open(['route' => 'users.store', 'method' => 'POST', 'class' => 'col s12']) !!}
	
	<div class="row">
		<div class="input-field col s12 m4">
			{!! Form::text('name', null , ['class' => 'validate', 'id' => 'name', 'required' => 'required']) !!}
			{!! Form::label('name', 'Nombre') !!}
		</div>
		<div class="input-field col s12 m4">
			{!! Form::text('last_name', null, ['class' => 'validate', 'id' => 'last_name', 'required' => 'required']) !!}
			{!! Form::label('last_name', 'Apellido Paterno') !!}
		</div>
		<div class="input-field col s12 m4">
			{!! Form::text('second_lname', null, ['class' => 'validate', 'id' => 'second_lname', 'required' => 'required']) !!}
			{!! Form::label('second_lname', 'Apellido Materno') !!}
		</div>
	</div>

	<div class="row">
		<div class="input-field col s12 m4">
			{!! Form::email('email', null , ['class' => 'validate', 'id' => 'email', 'required' => 'required']) !!}
			{!! Form::label('email', 'e-mail') !!}
		</div>
		<div class="input-field col s12 m4">
			{!! Form::date('birthdate', null, ['class' => 'datepicker', 'min' => '0']) !!}
			{!! Form::label('birthdate', 'Fecha de nacimiento') !!}
		</div>
		<div class="input-field col s12 m4">
			{!! Form::radio('sex', 'M', false, ['id'=>'sex1', 'class' => 'validate', 'required' => 'required']) !!}
			{!! Form::label('sex1', 'Masculino') !!}
			{!! Form::radio('sex', 'F', false, ['id'=>'sex2', 'class' => 'validate', 'required' => 'required']) !!}
			{!! Form::label('sex2', 'Femenino') !!}
		</div>
	</div>

	<div class="row">
		<div class="input-field col s12 m4">
			{!! Form::text('country',null, ['class' => 'validate', 'id' => 'country', 'required' => 'required']) !!}
			{!! Form::label('country', 'Pais') !!}
		</div>
		<div class="input-field col s12 m4">
			{!! Form::text('state',null, ['class' => 'validate', 'id' => 'state', 'required' => 'required']) !!}
			{!! Form::label('state', 'Estado') !!}
		</div>
		<div class="input-field col s12 m4">
			{!! Form::text('city',null, ['class' => 'validate', 'id' => 'city', 'required' => 'required']) !!}
			{!! Form::label('city', 'Ciudad') !!}
		</div>
	</div>
	
	<div class="row">
		<div class="input-field col s12 m3">
			{!! Form::text('address',null, ['class' => 'validate', 'id' => 'address', 'required' => 'required']) !!}
			{!! Form::label('address', 'Domicilio') !!}
		</div>
		<div class="input-field col s12 m3">
			{!! Form::text('colony', null,['class' => 'validate', 'id' => 'colony', 'required' => 'required']) !!}
			{!! Form::label('colony', 'Colonia') !!}
		</div>
		<div class="input-field col s6 m3">
			{!! Form::text('zip',null, ['class' => 'validate', 'id' => 'zip', 'required' => 'required']) !!}
			{!! Form::label('zip', 'C.P.') !!}
		</div>
		<div class="input-field col s6 m3">
			{!! Form::text('tel', null,['class' => 'validate', 'id' => 'tel', 'required' => 'required']) !!}
			{!! Form::label('tel', 'Teléfono') !!}
		</div>
	</div>

	<div class="row">
		<div class="col s6">
			{!! Form::submit('Registrar', ['class' => 'right btn waves-effect waves-light']) !!}
		</div>
		<div class="col s6">
			<a href="{{ route('users.index') }}" class="btn  left waves-effect waves-light amber">Atras</a>
		</div>
	</div>
</div>


{!! Form::close() !!}

</div>

@endsection