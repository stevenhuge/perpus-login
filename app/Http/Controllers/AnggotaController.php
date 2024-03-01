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
}
