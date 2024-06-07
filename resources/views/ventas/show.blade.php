@extends('layouts.app')

@section('content')
    <div class="container">
        <h1>Detalle de la Venta</h1>
        <ul>
            <li><strong>Cliente:</strong> {{ $venta->cliente->nombre }}</li>
            <li><strong>Total:</strong> {{ $venta->total }}</li>
        </ul>
    </div>
@endsection
