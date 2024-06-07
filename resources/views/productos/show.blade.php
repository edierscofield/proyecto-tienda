@extends('layouts.app')

@section('content')
    <div class="container">
        <h1>Detalle del Producto</h1>
        <ul>
            <li><strong>Nombre:</strong> {{ $producto->nombre }}</li>
            <li><strong>Precio:</strong> {{ $producto->precio }}</li>
            <li><strong>Cantidad:</strong> {{ $producto->cantidad }}</li>
        </ul>
    </div>
@endsection
