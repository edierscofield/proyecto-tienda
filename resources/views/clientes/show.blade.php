@extends('layouts.app')

@section('content')
<div class="container">
    <h1>Detalle del Cliente</h1>
    <div class="card">
        <div class="card-header">
            {{ $cliente->nombre }}
        </div>
        <div class="card-body">
            <p>Email: {{ $cliente->email }}</p>
            <p>Teléfono: {{ $cliente->telefono }}</p>
            <a href="{{ route('clientes.index') }}" class="btn btn-secondary">Volver</a>
        </div>
    </div>
</div>
@endsection
