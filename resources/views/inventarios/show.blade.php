@extends('layouts.app')

@section('content')
    <div class="container">
        <h1>Detalle del Inventario</h1>
        <ul>
            <li><strong>Producto:</strong> {{ $inventario->producto->nombre }}</li>
            <li><strong>Cantidad:</strong> {{ $inventario->cantidad }}</li>
        </ul>
    </div>
@endsection
