<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Users;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;

class AuthController extends Controller
{
    function showRegister()
    {
        return view('authentication.register');
    }

    function register(Request $request)
    {
        $request->validate([
            'name' => 'required|string|max:255',
            'email' => 'required|email|max:100|unique:users,email',
            'password' => 'required|min:5|confirmed',
        ]);

        Users::create([
            'name'     => $request->name,
            'email'    => $request->email,
            'password' => Hash::make($request->password),
        ]);

        return redirect()
            ->route('login.form')
            ->with('success', 'Registration Successful');
    }

    function showLogin()
    {
        return view('authentication.login');
    }
}
