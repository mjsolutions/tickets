@extends('admin.main')

@section('title', 'Lista de usuarios')

@section('side-menu')
@include('admin.partials.side_menu', array('active' => 'usuarios'))
@endsection

@section('head-title')

<div class="actions">
	<div>
		<a href="{{ route('users.create') }}" class="btn waves-effect waves-light">Añadir usuario</a>
	</div>
</div>

@endsection

@section('content')

<div>
	<table class="responsive-table highlight">
		<thead>
			<tr>
				<th data-field = 'ID'>ID</th>
				<th data-field = 'Photo'>Foto</th>
				<th data-field = 'Name'>Nombre</th>
				<th data-field = 'Last_name'>Apellido P.</th>
				<th data-field = 'Second_lname'>Apellido M.</th>
				<th data-field = 'email'>e-mail</th>
				<th data-field = 'birthdate'>Fecha Nac.</th>
				<th data-field = 'Sex'>Sexo</th>
				<th data-field = 'City'>Ciudad</th>
				<th data-field = 'State'>Estado</th>
				<th data-field = 'Country'>País</th>
				<th data-field = 'Address'>Domicilio</th>
				<th data-field = 'Colony'>Colonia</th>
				<th data-field = 'zip'>C.P.</th>
				<th data-field = 'tel'>Teléfono</th>
				<th data-field = 'Status'>Status</th>
			</tr>
		</thead>
		<tbody>
			@foreach($users as $user)

			<tr>
				<td>{{ $user->id }}</td>
				<td>{{ $user->photo }}</td>
				<td>{{ $user->name }}</td>
				<td>{{ $user->last_name }}</td>
				<td>{{ $user->second_lname }}</td>
				<td>{{ $user->email }}</td>
				<td>{{ $user->birthdate }}</td>
				<td>{{ $user->sex }}</td>
				<td>{{ $user->city }}</td>
				<td>{{ $user->state }}</td>
				<td>{{ $user->country }}</td>
				<td>{{ $user->address }}</td>
				<td>{{ $user->colony }}</td>
				<td>{{ $user->zip }}</td>
				<td>{{ $user->tel }}</td>
				<td>{{ $user->status }}</td>
				<td>
					<a href="{{ route('users.destroy', $user->id) }}" onclick="return confirm('¿Seguro que deseas eliminar a {{ $user->name }}?')" class="btn waves-effect waves-light red">
						<i class="material-icons">
							error
						</i>
					</a>
					<a href="{{ route('users.edit', $user->id) }}" class="btn waves-effect waves-light amber">
						<i class="material-icons">
							mode_edit
						</i>
					</a>
				</td>
			</tr>

			@endforeach
		</tbody>
	</table>
</div>
<div class="center">
	{!! $users->render() !!}
</div>
@endsection