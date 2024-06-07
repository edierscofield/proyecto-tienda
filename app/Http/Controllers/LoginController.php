<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class LoginController extends Controller
{
    public function login(Request $request)
    {
        // Simular validación de credenciales
        if ($request->input('email') && $request->input('password')) {
            // Establecer una variable de sesión para simular el inicio de sesión
            $request->session()->put('logged_in', true);
            return redirect()->route('home'); // Redirigir a la ruta 'home'
        }
        return redirect()->route('login')->withErrors('Credenciales incorrectas');
    }
}
