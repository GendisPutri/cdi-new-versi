<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use App\Models\User;

class AuthController extends Controller
{
    public function showLoginForm() { return view('auth.login'); }
    public function login(Request $request) {
        if (Auth::attempt($request->only('email', 'password'))) {
            return redirect()->intended('/')->with('success', 'Login berhasil');
        }
        return back()->withErrors(['email' => 'Email atau password salah']);
    }

    public function showRegisterForm() { return view('auth.register'); }
    public function register(Request $request) {
        $request->validate([
            'name' => 'required', 'email' => 'required|email|unique:users',
            'password' => 'required|confirmed|min:6'
        ]);
        User::create([
            'name' => $request->name, 'email' => $request->email,
            'password' => Hash::make($request->password)
        ]);
        return redirect()->route('login')->with('success', 'Berhasil daftar, silakan login');
    }

    public function logout() {
        Auth::logout();
        return redirect()->route('login');
    }
}
?>