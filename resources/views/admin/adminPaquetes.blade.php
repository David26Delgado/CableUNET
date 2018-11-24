@extends('layouts.app')

@section('header', "Creación de Paquetes")

@section('content')

    <div class="container">
    	<p>Rellene el formulario para crear un paquete de servicios:</p>
    	<form action="{{ route('createPackage') }}" method="POST">
    		{{csrf_field()}}
    		<fieldset class="form-group">
    			
    			<div class="input-group mb-3">
				  <div class="input-group-prepend">
				    <span class="input-group-text" id="inputGroup-sizing-default">Nombre del paquete:</span>
				  </div>
				  <input type="text" min=0 name="packageName" class="form-control" aria-label="Sizing example input" aria-describedby="inputGroup-sizing-default" required>
				</div>

				<div class="input-group mb-3">
				  <div class="input-group-prepend">
				    <label class="input-group-text" for="internet">Internet:</label>
				  </div>
				  <select class="custom-select" name="internet" id="internet">
					@forelse($net as $key)
						<option value="{{ $key['descripcion'] }}">{{ $key['descripcion'] }}</option>
					@empty
						<option value="">Ninguno</option>
					@endforelse
				  </select>
				</div>

				<div class="input-group mb-3">
				  <div class="input-group-prepend">
				    <label class="input-group-text" for="cable">Cable:</label>
				  </div>
				  <select class="custom-select" name="cable" id="cable">
				    @forelse($cbl as $key)
						<option value="{{$key['nombre']}}">{{ $key['nombre'] }}</option>
					@empty
						<option value="">Ninguno</option>
					@endforelse
				  </select>
				</div>

				<div class="input-group mb-3">
				  <div class="input-group-prepend">
				    <label class="input-group-text" for="telefono">Telefonía:</label>
				  </div>
				  <select class="custom-select" name="telefono" id="telefono">
				    @forelse($tlf as $key)
						<option value="{{$key['descripcion']}}">{{ $key['descripcion'] }}</option>
					@empty
						<option value="">Ninguno</option>
					@endforelse
				  </select>
				</div>

				<button type="submit" class="btn btn-primary">Enviar</button>
    		</fieldset>
    	</form>
    </div>
                
@endsection