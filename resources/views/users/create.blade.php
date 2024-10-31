@extends('layout')
@section('content')
    <form action="{{ route('user.store') }}" method="POST">
        @csrf
        <legend>Create User</legend>
        <div class="mb-3">
            <label for="nameTextInput" class="form-label">Tên</label>
            <input type="text" id="nameTextInput" class="form-control" placeholder="Enter name" name="name">
        </div>
        <div class="mb-3">
            <label for="emailTextInput" class="form-label">Email</label>
            <input type="text" id="emailTextInput" class="form-control" placeholder="Enter email" name="email">
        </div>
        <div class="mb-3">
            <label for="passwordTextInput" class="form-label">Mật khẩu</label>
            <input type="password" id="passwordTextInput" class="form-control" placeholder="Enter password" name="password">
        </div>

        <button type="submit" class="btn btn-primary">Tạo</button>

    </form>
@endsection
