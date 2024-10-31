@extends('layout')
@section('content')
    <form action="" method="post">
        @method('PUT')
        @csrf

        <legend>Update Task</legend>
        <div class="mb-3">
            <label for="titleTextInput" class="form-label">Tiêu đề</label>
            <input type="text" id="titleTextInput" class="form-control" placeholder="Enter title" name="title"
                value={{ $task->title }}>
        </div>
        <div class="mb-3">
            <label for="descriptionTextInput" class="form-label">Tiêu đề</label>
            <input type="text" id="descriptionTextInput" class="form-control" placeholder="Enter description"
                name="description" value={{ $task->description }}>
        </div>
        <div class="mb-3">
            <label for="disabledSelect" class="form-label">Trạng thái</label>
            <select id="disabledSelect" class="form-select" name="completed">
                <option value="Chưa hoàn thành" {{ $task->completed == 'Chưa hoàn thành' ? 'selected' : '' }}>Chưa hoàn
                    thành
                </option>
                <option value="Hoàn thành" {{ $task->completed == 'Hoàn thành' ? 'selected' : '' }}>Hoàn thành</option>
            </select>
        </div>

        <button type="submit" class="btn btn-primary">Cập nhật</button>

    </form>
@endsection
