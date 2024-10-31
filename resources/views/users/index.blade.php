@extends('layout')
@section('content')
    <div class="d-flex justify-content-between align-items-center">
        <h1>Danh sách người dùng</h1>
        <div>
            <a href="{{ route('user.create') }}" class="btn btn-success">Tạo người dùng</a>
        </div>
    </div>
    <table class="table">
        <thead>
            <tr>
                <th>ID</th>
                <th>Tên</th>
                <th>Email</th>
                <th>Tính năng</th>
            </tr>
        </thead>
        <tbody>
            @if (count($users) > 0)
                @foreach ($users as $user)
                    <tr>
                        <td>{{ $user->id }}</td>
                        <td>{{ $user->name }}</td>
                        <td>{{ $user->email }}</td>
                        <td class="d-flex">
                            <a href="{{ route('user.edit', $user->id) }}" class="btn btn-primary me-2">Cập nhật</a>
                            <form action="{{ route('user.destroy', $user->id) }}" method="POST">
                                @csrf
                                @method('delete')
                                <button class="btn btn-danger" type="submit">Xóa</button>
                            </form>
                        </td>
                    </tr>
                @endforeach
            @else
                <tr>
                    <td colspan="4">Không có người dùng nào!</td>
                </tr>
            @endif
        </tbody>
    </table>
@endsection
