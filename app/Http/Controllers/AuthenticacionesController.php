<?php

namespace App\Http\Controllers;


use App\Http\Requests\LoginFormRequest;

class AuthenticacionesController extends Controller
{
    public function iniciarSesion(LoginFormRequest $request)
    {
        return response()->json($request->usuario, 200);
    }
}
