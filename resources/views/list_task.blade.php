@extends('layout')
@section('content')
    <div class="d-flex justify-content-between align-items-center">
        <h1>Danh sách công việc</h1>
        <div>
            <a href="{{ URL::to('/create-task') }}" class="btn btn-success">Tạo công việc</a>
        </div>
    </div>
    <table class="table">
        <thead>
            <tr>
                <th>ID</th>
                <th>Tiêu đề</th>
                <th>Mô tả</th>
                <th>Trạng thái</th>
                <th>Chức năng</th>
            </tr>
        </thead>
        <tbody>
            @if (count($tasks) > 0)
                @foreach ($tasks as $task)
                    <tr>
                        <td>{{ $task->id }}</td>
                        <td>{{ $task->title }}</td>
                        <td>{{ $task->description }}</td>
                        <td>{{ $task->completed }}</td>
                        <td class="d-flex ">
                            <a href={{ URL::to('update-task', $task->id) }} class="btn btn-primary me-2">Cập nhật</a>
                            <form action={{ URL::to('/delete-task', $task->id) }} method="POST">
                                @method('delete')
                                @csrf
                                <button class="btn btn-danger" type="submit">Xóa</button>
                            </form>
                        </td>
                    </tr>
                @endforeach
            @else
                <tr>
                    <td colspan="5">Không có công việc nào!</td>
                </tr>
            @endif
        </tbody>
    </table>
@endsection
