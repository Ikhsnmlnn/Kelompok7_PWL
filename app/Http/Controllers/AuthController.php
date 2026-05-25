<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class AuthController extends Controller
{
    // =========================
    // HALAMAN LOGIN
    // =========================

    public function login()
    {
        return view('auth.login');
    }



    // =========================
    // PROSES LOGIN
    // =========================

    public function authenticate(Request $request)
    {
        $credentials = $request->validate([

            'email' => 'required|email',

            'password' => 'required'

        ]);


        if (Auth::attempt($credentials)) {

            $request->session()->regenerate();


            $role = Auth::user()->role;


            // =========================
            // REDIRECT ROLE
            // =========================

            if ($role == 'admin') {

                return redirect('/admin');

            } elseif ($role == 'manager') {

                return redirect('/manager');

            } elseif ($role == 'supervisor') {

                return redirect('/supervisor');

            } elseif ($role == 'kasir') {

                return redirect('/kasir');

            } elseif ($role == 'gudang') {

                return redirect('/gudang');
            }
        }


        return back()->withErrors([
            'email' => 'Email atau password salah.'
        ]);
    }



    // =========================
    // LOGOUT
    // =========================

    public function logout(Request $request)
    {
        Auth::logout();

        $request->session()->invalidate();

        $request->session()->regenerateToken();

        return redirect('/');
    }
}