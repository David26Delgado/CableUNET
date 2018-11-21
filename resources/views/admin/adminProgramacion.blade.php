@extends('layouts.app')

@section('header', "Programación")

@section('content')

	<div class="container">
    	<p>Carga de programación:</p>
    	<form action="#" method="POST">
    		{{csrf_field()}}
    		<fieldset class="form-group">
				<div class="input-group mb-3">
				  <div class="input-group-prepend">
				    <label class="input-group-text" for="canal">Seleccione un canal:</label>
				  </div>
				  <select class="custom-select" name="canal" id="canal">
				    <option selected>Ninguno</option>
				    <option value="1">One</option>
				    <option value="2">Two</option>
				    <option value="3">Three</option>
				  </select>
				</div>
				<button type="submit" class="btn btn-primary">Enviar</button>
    		</fieldset>
    	</form>
    </div>

@endsection