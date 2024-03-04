@extends('layouts.app')
@section('content')
<div class="d-grid form-control" style="height: 100vh; place-items: center;">
    <form action="{{ route('s-buku') }}" method="POST">
        @csrf

        <h3 class="display-6 text-center">TAMBAH DATA BUKU </h3>
        <table style="width: 40rem;" class="mt-5">
            <tr>
                <td colspan="2">
                    <label>Judul Buku</label>
                    <input name="judul_buku" type="text" placeholder="..." class="form-control">

                    <label class="mt-3">Kategori</label>
                    <select name="kategori" id="" class="form-control text-center">
                        <option selected>pilih kategori</option>
                        <option value="novel">Novel</option>
                        <option value="komik">Komik</option>
                        <option value="lainnya">Lainnya</option>
                    </select>
                </td>
            </tr>
            <tr>
                <td>
                    <label class="mt-3">Penulis</label>
                    <input type="text" name="penulis" class="form-control" placeholder="...">
                </td>
                <td>
                    <label class="mt-3">Penerbit</label>
                    <input type="text" name="penerbit" class="form-control" placeholder="...">
                </td>
            </tr>
            <tr>
                <td colspan="2">
                    <button type="submit" class="btn btn-success mt-2" style="width: 100%;">submit</button>
                </td>
            </tr>
        </table>
    </form>
</div>
<style>
    label {
        border: 4px solid #ffffff;
        width: 100%;
        text-align: center;
        padding: 3px;
        color: white;
        border-radius: 10px 10px 0px 10px;
        font-size: 14px;
        background-color: #9BCF53;
    }
</style>
@endsection