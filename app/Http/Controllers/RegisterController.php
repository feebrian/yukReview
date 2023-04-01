<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Auth\Events\Validated;
use Illuminate\Contracts\Support\ValidatedData;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;

class RegisterController extends Controller
{
    public function login()
    {
           return view('auth.login', [
            'active' => "login",
            'title' => "Login"
           ]);
    }

    public function register()
    {
        return view('auth.register', [
            'active' => "register",
            'title' => "Register"

        ]);
    }

    public function store(Request $request){

        $validatedData = $request->validate([
            'name' => 'required|max:255',
            'username' => 'required|unique:users|min:3|max:255',
            'email' => 'required|unique:users|email:dns',
            'password' => 'required|min:8|max:255',
        ]);

        $validatedData['password'] = Hash::make($validatedData['password']);

        User::create($validatedData);

        $request->session()->flash('success', 'Berhasil mendaftar silahkan login...');

        return redirect('/login');

    }

}
