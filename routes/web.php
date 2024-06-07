<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ClienteController;
use App\Http\Controllers\ProductoController;
use App\Http\Controllers\InventarioController;
use App\Http\Controllers\ProveedorController;
use App\Http\Controllers\VentaController;
use App\Http\Controllers\LoginController;

Route::get('/', function () {
    return view('auth.login');
})->name('login');

Route::post('/login', [LoginController::class, 'login']);

Route::middleware(['web', 'sessionCheck'])->group(function () {
    Route::get('/home', function () {
        return view('home');
    })->name('home');

    Route::resource('clientes', ClienteController::class);
    Route::resource('productos', ProductoController::class);
    Route::resource('inventarios', InventarioController::class);
    Route::resource('proveedores', ProveedorController::class);
    Route::resource('ventas', VentaController::class);

    // Ruta explícita para el método 'edit' de proveedores
    Route::get('proveedores/{proveedor}/edit', [ProveedorController::class, 'edit'])->name('proveedores.edit');
});
