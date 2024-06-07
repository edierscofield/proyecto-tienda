@extends('layouts.app')

@section('content')
    <div class="container">
        <h1>Ventas</h1>
        <a href="{{ route('ventas.create') }}" class="btn btn-primary">Agregar Venta</a>
        <!-- Contenido de la vista de ventas -->
    </div>
@endsection
