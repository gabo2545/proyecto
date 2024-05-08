<?php

namespace App\Http\Controllers;

use App\Models\usuarios;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Routing\Controller;

class UsuarioController extends Controller
{
    public function showLoginForm()
    {
        return view('login');
    }

    public function login(Request $request)
    {
        $nombre = $request->input('usuario');
        $contraseña = $request->input('contraseña');
        $usuario = usuarios::where('usuario', $nombre)->first();
        if ($usuario && $usuario->contraseña == $contraseña) {
            Auth::login($usuario);
            session(['isLoggedIn' => true]);
            return redirect()->intended('/admines');
        }
        return redirect()->intended('/');
    }

    public function logout()
    {
        Auth::logout();
        return redirect('/');
    }

    public function getUserData()
    {
        $usuario = Auth::user();
        if ($usuario) {
            return response()->json([
                'usuario' => $usuario->nombre_usuario,
                'contraseña' => $usuario->contrasena_plana,
                'ID' => $usuario->id
            ]);
        } else {
            return response()->json(['exito' => False], 401); // fallo de autenticación
        }
    }

}






