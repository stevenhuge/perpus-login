@extends('layouts.app')
@section('content')
<table class="table table-striped">
    <thead>
        <tr>
            <th>name anggota</th>
            <th>jenis kelamin</th>
            <th>alamat</th>
            <th>no telepon</th>
        </tr>
    </thead>
    <tbody>
        @foreach ($data as $row)
            <tr>
                <td> {{ $row->judul_buku }} </td>
                <td> {{ $row->kategori }} </td>
                <td> {{ $row->penulis }} </td>
                <td> {{ $row->penerbit }} </td>
            </tr>       
        @endforeach
    </tbody>
</table>
@endsection