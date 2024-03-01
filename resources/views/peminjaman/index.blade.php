@extends('layouts.app')
@section('content')

<table class="table table-striped">
    <thead>
        <tr>
            <th>nama anggota</th>
            <th>judul buku</th>
            <th>tanggal peminjaman</th>
            <th>tanggal pengembalian</th>
        </tr>
    </thead>
    <tbody>
        @foreach ($data as $row)
            <tr>
                <td> {{ $row->anggota->name }} </td>
                <td> {{ $row->buku->judul_buku }} </td>
                <td> {{ $row->tanggal_peminjaman }} </td>
                <td> {{ $row->tanggal_pengembalian }} </td>
                <td>
                    <a class="btn btn-warning" href="{{ route('s-pengembalian', $row->id) }}">Dikembalikan</a>
                </td>
            </tr>
        @endforeach
    </tbody>
</table>

@endsection