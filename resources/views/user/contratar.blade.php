@extends('layouts.app')
@section('header', "Contratar servicio")

@section('content')

<section> 
<blockquote class="blockquote">
  <p class="mb-0">
  Actualmente cuenta con un paquete de servicios activo.
Si desea cambiarlo seleccione uno de los paquetes
 y presione el boton cambiar, esto eniara una solicitud a un administrador
  y luego el podra autorizar su cambio.
  </p>
</blockquote>

  

<select class="custom-select">
    <option selected>Ninguno</option>
    <option value="1">One</option>
    <option value="2">Two</option>
    <option value="3">Three</option>
</select>
</section>


<br>
<button type="button" class="btn btn-primary btn-sm">Enviar</button>
<button type="button" class="btn btn-secondary btn-sm">Small button</button>

       
@endsection
