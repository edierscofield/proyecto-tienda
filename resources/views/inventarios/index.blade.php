@extends('layouts.app')

@section('content')
    <div class="container">
        <h1>Inventarios</h1>
        <a href="{{ route('inventarios.create') }}" class="btn btn-primary">Agregar Inventario</a>
        <!-- Contenido de la vista de inventarios -->
    </div>
@endsection
