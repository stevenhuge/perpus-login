<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Peminjaman extends Model
{
    use HasFactory;
    protected $table = 'peminjaman';

    public function anggota() {
        return $this->belongsTo(Anggota::class, 'id_anggota', 'id');
    }

    public function buku() {
        return $this->belongsTo(Buku::class, 'id_buku', 'id');
    }
}
