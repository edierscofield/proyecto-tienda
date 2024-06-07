<?php

namespace App\Http\Controllers;

use App\Models\Inventario;
use App\Models\Producto;
use Illuminate\Http\Request;

class InventarioController extends Controller
{
    public function index()
    {
        $inventarios = Inventario::with('producto')->get();
        return view('inventarios.index', compact('inventarios'));
    }

    public function create()
    {
        return view('inventarios.create');
    }

    public function store(Request $request)
    {
        $request->validate([
            'nombre' => 'required',
            'precio' => 'required|numeric',
            'stock' => 'required|integer',
        ]);

        $producto = Producto::create([
            'nombre' => $request->nombre,
            'precio' => $request->precio,
            'stock' => $request->stock,
        ]);

        Inventario::create([
            'producto_id' => $producto->id,
            'stock' => $request->stock,
        ]);

        return redirect()->route('inventarios.index')->with('success', 'Producto e inventario creados exitosamente.');
    }

    public function show(Inventario $inventario)
    {
        $inventario->load('producto');
        return view('inventarios.show', compact('inventario'));
    }

    public function edit(Inventario $inventario)
    {
        $productos = Producto::all();
        return view('inventarios.edit', compact('inventario', 'productos'));
    }

    public function update(Request $request, Inventario $inventario)
    {
        $request->validate([
            'nombre' => 'required',
            'precio' => 'required|numeric',
            'stock' => 'required|integer',
        ]);

        $inventario->producto->update([
            'nombre' => $request->nombre,
            'precio' => $request->precio,
        ]);

        $inventario->update([
            'stock' => $request->stock,
        ]);

        return redirect()->route('inventarios.index')->with('success', 'Inventario actualizado exitosamente.');
    }

    public function destroy(Inventario $inventario)
    {
        $inventario->producto->delete();
        $inventario->delete();
        return redirect()->route('inventarios.index')->with('success', 'Inventario eliminado exitosamente.');
    }
}
