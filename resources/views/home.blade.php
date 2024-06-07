@extends('layouts.app')

@section('title', 'Bienvenido a la Tienda de Abarrotes Django')

@section('content')
    <div class="container text-center">
        <h1 class="mb-4">Bienvenido a la Tienda de Abarrotes Django</h1>
        <div class="row">
            <div class="col-md-4 mb-4">
                <a href="{{ route('clientes.index') }}" class="btn btn-primary btn-lg btn-block">Clientes</a>
            </div>
            <div class="col-md-4 mb-4">
                <a href="{{ route('productos.index') }}" class="btn btn-primary btn-lg btn-block">Productos</a>
            </div>
            <div class="col-md-4 mb-4">
                <a href="{{ route('inventarios.index') }}" class="btn btn-primary btn-lg btn-block">Inventarios</a>
            </div>
            <div class="col-md-4 mb-4">
                <a href="{{ route('proveedores.index') }}" class="btn btn-primary btn-lg btn-block">Proveedores</a>
            </div>
            <div class="col-md-4 mb-4">
                <a href="{{ route('ventas.index') }}" class="btn btn-primary btn-lg btn-block">Ventas</a>
            </div>
        </div>
        <div id="carouselExampleIndicators" class="carousel slide" data-bs-ride="carousel">
            <div class="carousel-indicators">
                <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="0" class="active" aria-current="true" aria-label="Slide 1"></button>
                <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="1" aria-label="Slide 2"></button>
                <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="2" aria-label="Slide 3"></button>
            </div>
            <div class="carousel-inner">
                <div class="carousel-item active">
                    <img src="{{ asset('images/aseo.png') }}" class="d-block w-100 carousel-image" alt="Productos de Aseo">
                </div>
                <div class="carousel-item">
                    <img src="{{ asset('images/verduras.jpg') }}" class="d-block w-100 carousel-image" alt="Frutas y Verduras">
                </div>
                <div class="carousel-item">
                    <img src="{{ asset('images/despensa.jpeg') }}" class="d-block w-100 carousel-image" alt="Productos de Despensa">
                </div>
            </div>
            <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide="prev">
                <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                <span class="visually-hidden">Previous</span>
            </button>
            <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide="next">
                <span class="carousel-control-next-icon" aria-hidden="true"></span>
                <span class="visually-hidden">Next</span>
            </button>
        </div>
    </div>
@endsection

@section('scripts')
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.10.2/dist/umd/popper.min.js" integrity="sha384-oBqDVmMz4fnFO9gybKj01XJd0dBIflEyFLFYkrk5ljM2xhukMqq5RvcXW65deEkR" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.min.js" integrity="sha384-QJHtvGhmr9K9sCZ+e3FF5xKa19Xh1rZ/bsmxiIjCA/6FkskF74jDWRR+8OeKnukm" crossorigin="anonymous"></script>
@endsection
