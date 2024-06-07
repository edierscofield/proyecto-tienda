<?php

namespace App\Http\Controllers;

use App\Models\Proveedor;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Log;

class ProveedorController extends Controller
{
    public function index()
    {
        $proveedores = Proveedor::all();
        return view('proveedores.index', compact('proveedores'));
    }

    public function create()
    {
        return view('proveedores.create');
    }

    public function store(Request $request)
    {
        $request->validate([
            'nombre' => 'required',
            'correo' => 'required|email|unique:proveedores',
            'direccion' => 'required',
            'telefono' => 'required',
        ]);

        Proveedor::create($request->all());
        return redirect()->route('proveedores.index')->with('success', 'Proveedor agregado exitosamente.');
    }

    public function edit($id)
{
    $proveedor = Proveedor::find($id);

    if ($proveedor) {
        return view('proveedores.edit', compact('proveedor'));
    } else {
        return redirect()->route('proveedores.index')->with('error', 'Proveedor no encontrado.');
    }
}




public function update(Request $request, $id)
{
    $proveedor = Proveedor::find($id);

    if ($proveedor) {
        $request->validate([
            'nombre' => 'required',
            'correo' => 'required|email|unique:proveedores,correo,' . $proveedor->id,
            'direccion' => 'required',
            'telefono' => 'required',
        ]);

        $proveedor->update($request->all());
        return redirect()->route('proveedores.index')->with('success', 'Proveedor actualizado exitosamente.');
    } else {
        return redirect()->route('proveedores.index')->with('error', 'Proveedor no encontrado.');
    }
}


    public function destroy($id)
{
    $proveedor = Proveedor::find($id);

    if ($proveedor) {
        $proveedor->delete();
        return redirect()->route('proveedores.index')->with('success', 'Proveedor eliminado exitosamente.');
    } else {
        return redirect()->route('proveedores.index')->with('error', 'Proveedor no encontrado.');
    }
}

}
