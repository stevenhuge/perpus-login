<?php

namespace App\Http\Controllers;

use App\Models\Buku;
use Illuminate\Http\Request;

class BukuController extends Controller
{
    public function index() {
        $data = Buku::all();
        return view('buku.index', compact('data'));
    }

    public function create() {
        return view('buku.create');
    }

    public function store(Request $request) {
        Buku::insert([
            'judul_buku'=>$request->judul_buku,
            'kategori'=>$request->kategori,
            'penulis'=>$request->penulis,
            'penerbit'=>$request->penerbit
        ]);
        return redirect()->route('i-buku');
    }
}
