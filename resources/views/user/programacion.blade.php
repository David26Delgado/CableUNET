@extends('layouts.app')

@section('header', "Programacion")

@section('content')

<select class="custom-select">
    <option selected>Dia</option>
    <option value="1">One</option>
    <option value="2">Two</option>
    <option value="3">Three</option>
    <br>
</select>
<br>
<div class="input-group mb-3">
  <div class="input-group-prepend">
    <label class="input-group-text" for="canal">Hora:</label>
  </div>
  <input type="time">
</div>

       
@endsection