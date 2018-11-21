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
<select class="custom-select">
    <option selected>Hora</option>
    <option value="1">One</option>
    <option value="2">Two</option>
    <option value="3">Three</option>
</select>
<br>
<select class="custom-select">
    <option selected>min</option>
    <option value="1">One</option>
    <option value="2">Two</option>
    <option value="3">Three</option>
</select>

       
@endsection

