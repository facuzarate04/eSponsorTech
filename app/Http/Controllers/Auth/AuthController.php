<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;

class AuthController extends Controller
{
    public function login(Request $request)
    {
        $field = filter_var($request['email'], FILTER_VALIDATE_EMAIL) ? 'email' : 'username';
        $request->merge([$field => $request['email']]);

        $credentials = $request->only($field, 'password');

        if (Auth::attempt($credentials)) {
            $request->session()->regenerate();
            return redirect()->intended('home');
        }
        return back()->with('message', 'Las credenciales provistas son incorrectas');
    }

    public function register(Request $request)
    {

        $validatedData = $request->validate([
            'name' => 'required|string|max:100',
            'email' => 'required|string|email|max:100|unique:users',
            'username' => 'required|string|max:100|unique:users',
            'password' => 'required|string|min:8'
        ]); 

        if (!$validatedData) {

            return back()->with('message', 'Los datos ingresados ya pertenecen a un usuario registrado.');
        
        } else {
            User::create([
                'name' => $validatedData['name'],
                'email' => $validatedData['email'],
                'username' => $validatedData['username'],
                'password' => Hash::make($validatedData['password']) //Pass encrypt
            ]); 

            $request->session()->regenerate();
            return redirect()->intended('home');
        }
    }

    public function logout(Request $request)
    {
        Auth::logout();
        $request->session()->invalidate();
        $request->session()->regenerateToken();
        return redirect('/');
    }
}
