<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class LoginController extends Controller
{
    public function login()
    {
           return view('auth.login', [
            'active' => "login"
           ]);
    }

    public function register()
    {
        return view('auth.register', [
            'active' => "register",
            'title' => "Login"

        ]);
    }

}
