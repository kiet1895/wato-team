<?php

namespace App\Http\Controllers;

use App\Task;
use Illuminate\Http\Request;

class TasksController extends Controller
{
    public function index()
    {
        $tasks = Task::all();
        return view('tasks.index', [
            'tasks' => $tasks
            ]);
    }
    public function create()
    {
        return view('tasks.create');
    }
    public function store(Request $request)
    {
        Task::create($request->only(['title', 'content','category','status']));
        return redirect(route('tasks.index'));
    }
    public function show(Task $task)
    {
       
    }

    public function edit(Task $task)
    {
        return view('tasks.edit',[
            'tasks' => $task
            ]);
    }
    public function update(Request $request, Task $task)
    {
        $task->update($request->only(
            ['title', 'content','category','status']
        ));
        return redirect(route('tasks.index'));
    }
    public function destroy(Task $task)
    {
        $task->delete();
        return redirect(route('tasks.index'));
    }
}