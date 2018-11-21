@extends('layouts.app')

@section('header', "Creación de Paquetes")

@section('content')

    <div class="container">
    	<p>Rellene el formulario para crear un paquete de servicios:</p>
    	<form action="#" method="POST">
    		{{csrf_field()}}
    		<fieldset class="form-group">
    			<div class="input-group mb-3">
				  <div class="input-group-prepend">
				    <span class="input-group-text" id="inputGroup-sizing-default">Nombre del paquete:</span>
				  </div>
				  <input type="text" min=0 name="packageName" class="form-control" aria-label="Sizing example input" aria-describedby="inputGroup-sizing-default">
				</div>
				<div class="input-group mb-3">
				  <div class="input-group-prepend">
				    <label class="input-group-text" for="internet">Internet:</label>
				  </div>
				  <select class="custom-select" name="net" id="internet">
				    <option selected>Ninguno</option>
				    <option value="1">One</option>
				    <option value="2">Two</option>
				    <option value="3">Three</option>
				  </select>
				</div>
				<div class="input-group mb-3">
				  <div class="input-group-prepend">
				    <label class="input-group-text" for="cable">Cable:</label>
				  </div>
				  <select class="custom-select" name="cable" id="cable">
				    <option selected>Ninguno</option>
				    <option value="1">One</option>
				    <option value="2">Two</option>
				    <option value="3">Three</option>
				  </select>
				</div>
				<div class="input-group mb-3">
				  <div class="input-group-prepend">
				    <label class="input-group-text" for="tlf">Telefonía:</label>
				  </div>
				  <select class="custom-select" name="tlf" id="tlf">
				    <option selected>Ninguno</option>
				    <option value="1">One</option>
				    <option value="2">Two</option>
				    <option value="3">Three</option>
				  </select>
				</div>
				<!-- <div class="form-group">
				    <label for="internet">
						Internet: 
						<select class="form-control" name="net" id="internet">
							<option value="">Ninguno</option>
						</select>
					</label>
				</div>
				<div class="form-group">
				    <label for="cable">
						Cable: 
						<select class="form-control" name="cable" id="cable">
							<option value="">Ninguno</option>
						</select>
					</label>
				</div>
				<div class="form-group">
				    <label for="tlf">
						Teléfono: 
						<select class="form-control" name="tlf" id="tlf">
							<option value="">Ninguno</option>
						</select>
					</label>
				</div> -->
				<button type="submit" class="btn btn-primary">Enviar</button>
    		</fieldset>
    	</form>
    </div>
                
@endsection