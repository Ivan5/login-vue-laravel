<?php

namespace App\Http\Controllers;


use App\Http\Requests\LoginFormRequest;
use Illuminate\Support\Facades\Auth;

class AuthenticacionesController extends Controller
{
    public function iniciarSesion(LoginFormRequest $request)
    {
        //login propio
        if (Auth::attempt(['usuario' => $request->usuario, 'password' => $request->password], false)) {
            return response()->json('Has iniciado sesión', 200);
        } else {
            return response()->json(['errors' => ['login' => ['los datos que ingresaste son incorrectos']]], 422);
        }
    }
}
