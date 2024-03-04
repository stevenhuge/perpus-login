<?php

namespace App\Http\Controllers;

use App\Models\Anggota;
use Illuminate\Http\Request;

class AnggotaController extends Controller
{
    public function index() {
        $data = Anggota::all();
        return view('anggota.index', compact('data'));
    }

    public function create() {
        return view('anggota.create');
    }

    public function store(Request $request) {
        Anggota::insert([
            'name'=>$request->name,
            'jenis_kelamin'=>$request->jenis_kelamin,
            'alamat'=>$request->alamat,
            'telepon'=>$request->telepon
        ]);
        return redirect()->route('i-anggota');
    }

    public function destroy(int $id) {
        Anggota::where('id', $id)->delete();
        return redirect()->route('i-anggota');
    }
}
