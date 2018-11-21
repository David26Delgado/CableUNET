@extends('layouts.app')

@section('header', "Creación de Servicios")

@section('content')

    <div class="container">
    	<p>Seleccione uno de los servicios:</p>
    	<form action="{{ route('serviceForm') }}" method="POST">
    		{{csrf_field()}}
    		<fieldset class="form-group">
    			<div class="custom-control custom-radio">
				  <input type="radio" id="net" name="servicios" class="custom-control-input" value="Internet" checked>
				  <label class="custom-control-label" for="net">Internet</label>
				</div>
				<div class="custom-control custom-radio">
				  <input type="radio" id="cable" name="servicios" class="custom-control-input" value="Cable">
				  <label class="custom-control-label" for="cable">Cable</label>
				</div>
				<div class="custom-control custom-radio">
				  <input type="radio" id="tlf" name="servicios" class="custom-control-input" value="Telefonía">
				  <label class="custom-control-label" for="tlf">Telefonía</label>
				</div>
				<button type="submit" class="btn btn-primary mt-3">Confirmar</button>
    		</fieldset>
    	</form>
    </div>

    @if(isset($data))
    	<hr>
    	@if($data['servicios'] == 'Internet')
			<p>Especifique la nueva opción del servicio de Internet: </p>
			<form action="">
				<div class="form-group">
					<label for="velocidadInternet">
						Velocidad de Internet: 
						<select class="form-control" name="velocidadInternet" id="velocidadInternet">
							<optgroup label="Kbps">
								<option value="256">256</option>
								<option value="512">512</option>
							</optgroup>
							<optgroup label="Mbps">
								<option value="1">1</option>
								<option value="2">2</option>
								<option value="4">4</option>
								<option value="10">10</option>
								<option value="20">20</option>
							</optgroup>
						</select>
					</label>
				</div>
				<div class="form-group">
					<label for="precio">
						Precio: 
						<input type="number" id="precio" name="precio" class="form-control" min="0">
					</label>
				</div>
				<button type="submit" class="btn btn-primary">Enviar</button>
			</form>
		@elseif($data['servicios'] == 'Telefonía')
			<p>Especifique la nueva opción del servicio de Telefonía: </p>
			<form action="">
				<div class="form-group">
					<label for="megas">
						Minutos: 
						<input type="number" id="megas" name="megas" class="form-control" min="0">
					</label>
				</div>
				<div class="form-group">
					<label for="mensajes">
						Megas: 
						<input type="number" id="mensajes" name="mensajes" class="form-control" min="0">
					</label>
				</div>
				<div class="form-group">
					<label for="precio">
						Mensajes: 
						<input type="number" id="precio" name="precio" class="form-control" min="0">
					</label>
				</div>
				<div class="form-group">
					<label for="minutos">
						Precio: 
						<input type="number" id="minutos" name="minutos" class="form-control" min="0">
					</label>
				</div>
				<button type="submit" class="btn btn-primary">Enviar</button>
			</form>
		@elseif($data['servicios'] == 'Cable')
			<p>Especifique la nueva opción del servicio de Cable: </p>
			<form action="">
				<div class="form-group">
					<label for="nombreCable">
						Nombre del plan: <br>
						<input type="text" class="form-control" name="nombreCable" id="nombreCable" required>
					</label>
				</div>
				<div class="form-group">
					<label for="numeroCanales">
						Ingrese número de canales:
						<input type="number" class="form-control" id="numeroCanales" name="numeroCanales" min=0>
					</label>
				</div>
				<button type="submit" class="btn btn-primary">Enviar</button>
			</form>
		@endif
	@else

    @endif
@endsection