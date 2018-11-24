@extends('layouts.app')

@section('header', "Dashboard")

@section('content')

    Esta es una sesión de usuario. ¡Bienvenido {{ Auth::user()->name }} {{ Auth::user()->apellido }}!
    
@endsection