@extends('layouts.app')

@section('content')
    <div class="container">
        <h1>Editar Inventario</h1>
        <form action="{{ route('inventarios.update', $inventario->id) }}" method="POST">
            @csrf
            @method('PUT')
            <div class="mb-3">
                <label for="producto_id" class="form-label">Producto</label>
                <select class="form-control" id="producto_id" name="producto_id" required>
                    @foreach($productos as $producto)
                        <option value="{{ $producto->id }}" {{ $inventario->producto_id == $producto->id ? 'selected' : '' }}>{{ $producto->nombre }}</option>
                    @endforeach
                </select>
            </div>
            <div class="mb-3">
                <label for="cantidad" class="form-label">Cantidad</label>
                <input type="number" class="form-control" id="cantidad" name="cantidad" value="{{ $inventario->cantidad }}" required>
            </div>
            <button type="submit" class="btn btn-primary">Actualizar</button>
        </form>
    </div>
@endsection
