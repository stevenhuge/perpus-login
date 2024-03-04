@extends('layouts.app')
@section('content')
<table class="table table-striped">
    <thead>
        <tr>
            <th>nama anggota</th>
            <th>judul buku</th>
            <th>tanggal kembali</th>
            <th>denda</th>
        </tr>
    </thead>
    <tbody>
        @foreach ($data as $row)
            <tr>
                <td> {{ $row->anggota->name }} </td>
                <td> {{ $row->buku->judul_buku }} </td>
                <td> {{ $row->tanggal_kembali }} </td>
                <td> {{ $row->denda }} </td>
                <td>
                    <a href="{{ route('d-pengembalian', $row->id) }}" class="btn btn-danger"><i class="fa fa-trash"></i></a>
                </td>
            </tr>
        @endforeach
    </tbody>
</table>
@endsection