<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>

<body>
    <table border="1">
        <tr>
            <th>ID</th>
            <th>Tiêu đề</th>
            <th>Mô tả</th>
            <th>Trạng thái</th>
            <th>Chức năng</th>
        </tr>
        @if (count($tasks) > 0)
            @foreach ($tasks as $task)
                <tr>
                    <td>{{ $task->id }}</td>
                    <td>{{ $task->title }}</td>
                    <td>{{ $task->description }}</td>
                    <td>{{ $task->completed }}</td>
                    <td>
                        <a href='{{ route('task.edit', $task->id) }}'>Cập nhật</a>
                        <form action='{{ route('task.destroy', $task->id) }}' method="POST">
                            @method('delete')
                            @csrf
                            <button type="submit">Xóa</button>
                        </form>
                    </td>
                </tr>
            @endforeach
        @else
            <tr>
                <td colspan="5">Không có công việc nào!</td>
            </tr>
        @endif
    </table>
</body>

</html>
