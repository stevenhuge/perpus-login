<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;

class UserController extends Controller
{
    public function index() {
        $data = User::all();
        return view('user.index', compact('data'));
    }

    public function create() {
        return view('user.create');
    }

    public function store(Request $request) {
        User::insert([
            'name'=>$request->name,
            'email'=>$request->email,
            'password'=>Hash::make($request->password),
            'role'=>$request->role
        ]);
        return redirect()->route('i-user');
    }
}
