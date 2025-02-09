<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\User;

class LoginAdmin extends Controller {
    public function index() {
        return view('login');
    }

    public function login(Request $request) {
        // Validar datos de entrada
        $request->validate([
            'username' => 'required',
            'password' => 'required',
        ]);

        // Recoger credenciales
        $credentials = $request->only('username', 'password');

        // Intentar autenticación
        if (Auth::attempt($credentials, $request->has('remember'))) {
            $request->session()->regenerate();
            return redirect()->intended('dashboard'); // Cambia si el dashboard tiene otra ruta
        }

        // Si falla, devolver error
        return back()->withErrors(['login' => 'Usuario o contraseña incorrectos'])->withInput();
    }

    public function logout(Request $request) {
        Auth::logout();
        $request->session()->invalidate();
        $request->session()->regenerateToken();
        return redirect('/login');
    }
}

?>



