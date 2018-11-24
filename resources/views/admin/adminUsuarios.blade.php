@extends('layouts.app')

@section('header', "Administración de Usuarios")

@section('content')

<table class="table table-striped">

	<thead class="thead-dark">
		<tr>
			<th scope="col">ID</th>
			<th scope="col">Nombre</th>
			<th scope="col">Apellido</th>
			<th scope="col">Correo</th>
			<th scope="col">Acción</th>
		</tr>
	</thead>
	<tbody>
	@foreach($users as $user)
		
		@if(!$user->is_admin)
		<tr>
			<td scope="row">{{$user->id}}</td>
				<td>{{$user->name}}</td>
				<td>{{$user->apellido}}</td>
				<td>{{$user->email}}</td>
			<td>
				<form action="{{ route('deleteUser') }}" method="POST" class="d-inline">
					{{csrf_field()}}
					<input type="hidden" name="user_id" value="{{ $user->id }}">
					<button type="submit" class='btn btn-outline-danger'>Eliminar</button>
				</form>
				<form action="{{ route('showEdit') }}" method="GET" class="d-inline">
					{{csrf_field()}}
					<input type="hidden" name="user_id" value="{{ $user->id }}">
					<button type="submit" class='btn btn-outline-primary'>Editar</button>
				</form>
				<form action="{{ route('makeAdmin') }}" method="POST" class="d-inline">
					{{csrf_field()}}
					<input type="hidden" name="user_id" value="{{ $user->id }}">
					<button type="submit" class='btn btn-outline-dark'>Hacer administrador</button>
				</form>
			</td>
		</tr>
		@endif

	@endforeach
	</tbody>
</table>

@endsection