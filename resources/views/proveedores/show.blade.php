@extends('layouts.app')

@section('content')
    <div class="container">
        <h1>Detalle del Proveedor</h1>
        <ul>
            <li><strong>Nombre:</strong> {{ $proveedor->nombre }}</li>
            <li><strong>Teléfono:</strong> {{ $proveedor->telefono }}</li>
            <li><strong>Dirección:</strong> {{ $proveedor->direccion }}</li>
        </ul>
    </div>
@endsection
