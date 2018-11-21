@extends('layouts.app')

@section('header', "Factura")

@section('content')

<div class="row">
  <div class="col-9">
    <section>
    Nombre del suscriptor:
    <br>
    Apellido del suscriptor:
    <br>
    Email del suscrptior:
    <br>
    </section>
  
  </div>
  <div class="col-4"><br>Nombre del paquete basico: <br>
                         Monto total a pagar:
  </div>
  <div class="col-6">Descripcion del paquete basico:<br>
  Internet:<br>
  Telefonia:<br>
  Cable:<br>
  </div>
</div>

@endsection