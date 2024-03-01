<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class LoginController extends Controller
{
    public function index() {
        return view('login');
    }

    public function store(Request $request) {
        if (!Auth::attempt($request->only('email', 'password'))) {
            return ('gagal');
        }

        if (Auth::user()->role == 'admin') {
            return redirect()->route('i-user');
        }

        if (Auth::user()->role == 'petugas') {
            return redirect()->route('i-peminjaman');
        }

        return redirect()->route('i-buku');
    }

    public function logout() {
        Auth::logout();
        return redirect()->route('login');
    }
}
