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
			<form action="{{ route('createNetService') }}" method="POST">
				{{csrf_field()}}
				<div class="input-group mb-3">
				  <div class="input-group-prepend">
				    <label class="input-group-text" for="velocidadInternet">Velocidad de Internet:</label>
				  </div>
				  <select class="custom-select" name="velocidadInternet" id="velocidadInternet">
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
				</div>

				<div class="input-group mb-3">
				  <div class="input-group-prepend">
				    <span class="input-group-text" id="inputGroup-sizing-default">Precio</span>
				  </div>
				  <input type="number" min=0 name="precio" class="form-control" aria-label="Sizing example input" aria-describedby="inputGroup-sizing-default" required>
				</div>

				<button type="submit" class="btn btn-primary">Enviar</button>

			</form>
		@elseif($data['servicios'] == 'Telefonía')
			<p>Especifique la nueva opción del servicio de Telefonía: </p>
			<form action="{{ route('createTlfService') }}" method="POST">
				{{csrf_field()}}
				<div class="input-group mb-3">
				  <div class="input-group-prepend">
				    <span class="input-group-text" id="inputGroup-sizing-default">Minutos:</span>
				  </div>
				  <input type="number" min=0 name="minutos" class="form-control" aria-label="Sizing example input" aria-describedby="inputGroup-sizing-default" required>
				</div>

				<div class="input-group mb-3">
				  <div class="input-group-prepend">
				    <span class="input-group-text" id="inputGroup-sizing-default">Megas:</span>
				  </div>
				  <input type="number" min=0 name="megas" class="form-control" aria-label="Sizing example input" aria-describedby="inputGroup-sizing-default" required>
				</div>

				<div class="input-group mb-3">
				  <div class="input-group-prepend">
				    <span class="input-group-text" id="inputGroup-sizing-default">Mensajes:</span>
				  </div>
				  <input type="number" min=0 name="mensajes" class="form-control" aria-label="Sizing example input" aria-describedby="inputGroup-sizing-default" required>
				</div>

				<div class="input-group mb-3">
				  <div class="input-group-prepend">
				    <span class="input-group-text" id="inputGroup-sizing-default">Precio:</span>
				  </div>
				  <input type="number" min=0 name="precio" class="form-control" aria-label="Sizing example input" aria-describedby="inputGroup-sizing-default" required>
				</div>

				<button type="submit" class="btn btn-primary">Enviar</button>
				
			</form>
		@elseif($data['servicios'] == 'Cable')
			@if(!isset($data['nombreCable']))
				<p>Especifique la nueva opción del servicio de Cable: </p>
				<form action="{{ route('createChannels') }}" method="POST">
					{{csrf_field()}}
					<div class="input-group mb-3">
					  <div class="input-group-prepend">
					    <span class="input-group-text" id="inputGroup-sizing-default">Nombre del plan:</span>
					  </div>
					  <input type="text" name="nombreCable" class="form-control" aria-label="Sizing example input" aria-describedby="inputGroup-sizing-default" required>
					</div>

					<div class="input-group mb-3">
					  <div class="input-group-prepend">
					    <span class="input-group-text" id="inputGroup-sizing-default">Número de canales:</span>
					  </div>
					  <input type="number" min=1 name="numeroCanales" class="form-control" aria-label="Sizing example input" aria-describedby="inputGroup-sizing-default" required>
					</div>

					<div class="input-group mb-3">
					  <div class="input-group-prepend">
					    <span class="input-group-text" id="inputGroup-sizing-default">Precio:</span>
					  </div>
					  <input type="number" min=0 name="precio" class="form-control" aria-label="Sizing example input" aria-describedby="inputGroup-sizing-default" required>
					</div>

					<input type="hidden" name="servicios" value="{{ $data['servicios'] }}">

					<button type="submit" class="btn btn-primary">Enviar</button>
				</form>
			@else
				<p>Ingrese nombre de los canales:</p>
				<form action="{{ route('createCblService') }}" method="POST">
					{{csrf_field()}}

					@for ($i = 0; $i < $data['numeroCanales']; $i++)
						<div class="input-group mb-3">
						  <div class="input-group-prepend">
						    <span class="input-group-text" id="inputGroup-sizing-default">Nombre del Canal {{ $i+1 }}:</span>
						  </div>
						  <input type="text" name="{{ $i+1 }}" class="form-control" aria-label="Sizing example input" aria-describedby="inputGroup-sizing-default" required>
						</div>
					@endfor

					<input type="hidden" name="nombreCable" value="{{ $data['nombreCable'] }}">
					<input type="hidden" name="numeroCanales" value="{{ $data['numeroCanales'] }}">
					<input type="hidden" name="precio" value="{{ $data['precio'] }}">

					<button type="submit" class="btn btn-primary">Enviar</button>
				</form>
			@endif
		@endif
	@else

    @endif
@endsection