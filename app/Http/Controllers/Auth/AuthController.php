<?php

namespace App\Http\Controllers\Auth;

use Illuminate\Http\Request;
use App\Actions\Auth\AuthHandler;
use App\Http\Controllers\Controller;

class AuthController extends Controller
{
    public function login(Request $request){
        $request->validate([
            'email' => ['required', 'string', 'email'],
            'password' => ['required', 'string']
        ]);

        return AuthHandler::login($request);
    }

    public function logout(Request $request){
        return AuthHandler::logout($request);
    }
}
