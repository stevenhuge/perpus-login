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
                <td> {{ $row->name }} </td>
                <td> {{ $row->jenis_kelamin }} </td>
                <td> {{ $row->alamat }} </td>
                <td> {{ $row->telepon }} </td>
                <td>
                    <a href="{{ route('d-anggota', $row->id) }}" class="btn btn-danger"><i class="fa fa-trash"></i></a>
                </td>
            </tr>
        @endforeach
    </tbody>
</table>
@endsection