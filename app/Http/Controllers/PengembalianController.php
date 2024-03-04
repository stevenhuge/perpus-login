<?php

namespace App\Http\Controllers;


use App\Models\Peminjaman;
use App\Models\Pengembalian;
use Carbon\Carbon;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Log;

class PengembalianController extends Controller
{
    public function index() {
        $data = Pengembalian::all();
        Log::debug($data);
        return view('pengembalian.index', compact('data'));
    }

    public function store(int $id) {
        $peminjaman = Peminjaman::where('id', $id)->first();

        $tanggal_seharusnya = Carbon::parse($peminjaman->tanggal_pengembalian);
        $aktual = Carbon::now()->subDays();
        $selisih = $tanggal_seharusnya->diffInDays($aktual);

        $denda_perhari = 5000;
        $denda = $selisih * $denda_perhari;


        Pengembalian::insert([
            'id_anggota'=>$peminjaman->id_anggota,
            'id_buku'=>$peminjaman->id_buku,
            'tanggal_kembali'=>$aktual,
            'denda'=>$denda
        ]);

        Peminjaman::where('id', $id)->delete();

        return redirect()->route('i-pengembalian');
    }

    public function destroy(int $id) {
        Pengembalian::where('id', $id)->delete();
        return redirect()->route('i-pengembalian');
    }
}
