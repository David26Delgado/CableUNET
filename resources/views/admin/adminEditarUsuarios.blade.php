@extends('layouts.app')

@section('header', "Editar Usuario")

@section('content')

<div class="container">
	<p>Rellene el formulario para la edición de usuarios:</p>
	<form action="{{ route('editUser') }}" method="POST">
		{{csrf_field()}}
		<fieldset class="form-group">
			<div class="input-group mb-3">
			  <div class="input-group-prepend">
			    <label class="input-group-text" for="canal">Nombre:</label>
			  </div>
			  <input type="text" name="name" class="form-control" aria-label="Sizing example input" aria-describedby="inputGroup-sizing-default" value="{{ $user->name }}" required>
			</div>
			<div class="input-group mb-3">
			  <div class="input-group-prepend">
			    <label class="input-group-text" for="canal">Apellido:</label>
			  </div>
			  <input type="text" name="apellido" class="form-control" aria-label="Sizing example input" aria-describedby="inputGroup-sizing-default" value="{{ $user->apellido }}" required>
			</div>
			<div class="input-group mb-3">
			  <div class="input-group-prepend">
			    <label class="input-group-text" for="canal">Correo:</label>
			  </div>
			  <input type="email" name="email" class="form-control" aria-label="Sizing example input" aria-describedby="inputGroup-sizing-default" value="{{ $user->email }}" required>
			</div>
			
			<input type="hidden" name="id" value="{{ $user->id }}">

			<button type="submit" class="btn btn-primary">Enviar</button>
		</fieldset>
	</form>
</div>
    
@endsection