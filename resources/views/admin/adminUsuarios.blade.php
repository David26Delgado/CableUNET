@extends('layouts.app')

@section('header', "Administración de Usuarios")

@section('content')
<button type="button" class="btn btn-dark">Crear Usuario administrador</button>


	<table class="table">
	
  <thead class="thead-dark">
    <tr>
      <th scope="col">Nombre</th>
      <th scope="col">Apellido</th>
      <th scope="col">Email</th>
      <th scope="col">Tipo</th>
	  <th scope="col">Accion</th>

    </tr>
  </thead>
  <tbody>

  @foreach($users as $user)
	<tr>
	<th scope="row">{{$user->id}}</th>
	<td>{{$user->name}}</td>
	<td>Otto</td>
	<td>@mdo</td>
	<td>
		<button type=button class='btn btn-danger'>Eliminar</button>
		<button type=button class='btn btn-success'>Editar</button>
	</td>
 	</tr>

  @endforeach
   
	
  
  </tbody>
</table>


@endsection