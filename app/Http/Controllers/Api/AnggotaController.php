<?php

namespace App\Http\Controllers\Api;

use App\Models\Anggota;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class AnggotaController extends Controller
{
    public function index() {
        $data = Anggota::all();
        return response()->json($data);
    }

    public function store(Request $request) {
        Anggota::insert([
            'name'=>$request->name,
            'jenis_kelamin'=>$request->jenis_kelamin,
            'alamat'=>$request->alamat,
            'telepon'=>$request->telepon
        ]);
        return response()->json([
            'message' => 'success'
        ]);
    }

    public function delete(int $id) {
        Anggota::where('id', $id)->delete();
        return response()->json([
            'message' => 'success'
        ]);
    }

    public function update(Request $request) {
        Anggota::where('id', $request->id)->update([
            'name'=>$request->name,
            'jenis_kelamin'=>$request->jenis_kelamin,
            'alamat'=>$request->alamat,
            'telepon'=>$request->telepon
        ]);
        return response()->json([
            'message' => 'success'
        ]);
    }


}
