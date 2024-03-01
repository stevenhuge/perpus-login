@extends('layouts.app')
@section('content')
<div class="d-flex justify-content-center">
<table class="table" style="width: 50%">
    <form action="{{ route('s-user') }}" method="POST">
    @csrf
    <tbody>
        <tr>
            <td>
                <div class="form-floating">
                    <input name="name" class="form-control" type="text" placeholder="Leave a comment here" id="floatingTextarea">
                    <label for="floatingTextarea">Name</label>
                </div>
                <div class="mt-2">
                    <input name="email" class="form-control" type="text" placeholder="example@gmail.com">
                </div>
                <div class="form-floating mt-2">
                    <input name="password" class="form-control" type="password" placeholder="Leave a comment here" id="floatingTextarea">
                    <label for="floatingTextarea">Password</label>
                </div>
                <div class="form-floating mt-2">
                    <select name="role" class="form-control" type="password" placeholder="Leave a comment here" id="floatingTextarea">
                        <option selected>Pilih Role</option>
                        <option value="admin">Admin</option>
                        <option value="petugas">Petugas</option>
                    </select>
                    <label for="floatingTextarea">Role</label>
                </div>
                <button type="submit" class="btn btn-primary mt-2 form-control">Submit</button>
            </td>
        </tr>
    </tbody>
</table>      
</form>
</div>

@endsection