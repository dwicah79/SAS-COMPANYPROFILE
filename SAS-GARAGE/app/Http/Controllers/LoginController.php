<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class LoginController extends Controller
{
    public function login()
    {
        return view('admin.login');
    }

    public function auth(Request $request)
    {

        $request->validate([
            'email' => 'required|email',
            'password' => 'required'
        ]);

        if (empty($request->email) || empty($request->password)) {
            return back()->withErrors([
                'kosong' => 'Email dan password harus diisi'
            ]);
        }


        $credentials = $request->only('email', 'password');

        if (Auth::attempt($credentials)) {
            $request->session()->regenerate();
            return redirect('dashboard');
        }

        return back()->withErrors([
            'loginError' => 'Email atau Password salah'
        ]);
    }

    public function logout()
    {
        Auth::logout();

        return redirect('login');
    }
}
