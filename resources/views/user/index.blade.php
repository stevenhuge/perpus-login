@extends('layouts.app')
@section('content')
<div>
    <table class="table table-striped">
        <thead>
            <th>Username</th>
            <th>Email</th>
            <th>Role</th>
        </thead>
        <tbody>
            @foreach ($data as $row)
            <tr>
                <td> {{ $row->name }} </td>
                <td> {{ $row->email }} </td>
                <td> {{ $row->role }} </td>      
            </tr>
            @endforeach
        </tbody>
    </table>
</div>
@endsection