<?php

namespace App\Http\Controllers\Api;

use App\Models\Buku;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Log;

class BukuController extends Controller
{
    public function index() {
        $data = Buku::all();
        return response()->json($data);
    }

    public function store(Request $request) {
        Buku::insert([
            'judul_buku'=>$request->judul_buku,
            'kategori'=>$request->kategori,
            'penulis'=>$request->penulis,
            'penerbit'=>$request->penerbit
        ]);
        return response()->json([
            'message' => 'success'
        ]);
    }

    public function delete(int $id) {
        Buku::where('id', $id)->delete();
        return response()->json([
            'message' => 'success'
        ]);
    }

    public function update(Request $request) {
        Buku::where('id', $request->id)->update([
            'judul_buku'=>$request->judul_buku,
            'kategori'=>$request->kategori,
            'penulis'=>$request->penulis,
            'penerbit'=>$request->penerbit
        ]);
        return response()->json([
            'message' => 'success'
        ]);
    }

}
