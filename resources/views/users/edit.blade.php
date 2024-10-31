@extends('layout')
@section('content')
    <form action="{{ route('user.update', $user->id) }}" method="POST">
        @method('PUT')
        @csrf
        <legend>Update User</legend>
        <div class="mb-3">
            <label for="nameTextInput" class="form-label">Tên</label>
            <input type="text" id="nameTextInput" class="form-control" placeholder="Enter name" name="name"
                value="{{ $user->name }}">
        </div>
        <div class="mb-3">
            <label for="emailTextInput" class="form-label">Email</label>
            <input type="text" id="emailTextInput" class="form-control" placeholder="Enter email" name="email"
                value="{{ $user->email }}">
        </div>
        <div class="mb-3">
            <label for="passwordTextInput" class="form-label">Mật khẩu (Để trống mật khẩu sẽ giữ lại mật khẩu cũ)</label>
            <input type="password" id="passwordTextInput" class="form-control" placeholder="Enter password" name="password">
        </div>

        <button type="submit" class="btn btn-primary">Cập nhật</button>

    </form>
@endsection
