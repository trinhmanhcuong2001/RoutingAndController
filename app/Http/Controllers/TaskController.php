<?php

namespace App\Http\Controllers;

use App\Models\Task;
use Illuminate\Http\Request;

class TaskController extends Controller
{
    public function index()
    {
        $tasks = Task::all();

        return view('list_task', [
            'tasks' => $tasks
        ]);
    }

    public function create()
    {
        return view('create_task');
    }

    public function store(Request $request)
    {
        $task = Task::create($request->all());

        return redirect("/");
    }

    public function edit(Task $task)
    {
        return view('edit_task', [
            'task' => $task
        ]);
    }

    public function update(Request $request, Task $task)
    {
        $task->update($request->all());

        return redirect("/");
    }

    public function destroy(Task $task)
    {
        $task->delete();

        return redirect("/");
    }
}
