@extends('layout')
@section('content')
    <form action="" method="post">
        @csrf
        <legend>Create Task</legend>
        <div class="mb-3">
            <label for="titleTextInput" class="form-label">Tiêu đề</label>
            <input type="text" id="titleTextInput" class="form-control" placeholder="Enter title" name="title">
        </div>
        <div class="mb-3">
            <label for="descriptionTextInput" class="form-label">Tiêu đề</label>
            <input type="text" id="descriptionTextInput" class="form-control" placeholder="Enter description"
                name="description">
        </div>
        <div class="mb-3">
            <label for="disabledSelect" class="form-label">Trạng thái</label>
            <select id="disabledSelect" class="form-select" name="completed">
                <option value="Chưa hoàn thành">Chưa hoàn thành</option>
                <option value="Hoàn thành">Hoàn thành</option>
            </select>
        </div>

        <button type="submit" class="btn btn-primary">Tạo</button>

    </form>
@endsection
