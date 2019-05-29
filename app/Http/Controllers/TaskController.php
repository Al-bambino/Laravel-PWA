<?php

namespace App\Http\Controllers;

use App\Task;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class TaskController extends Controller
{
    public function index()
    {
        $tasks = Task::all();

        return view('task.index', ['tasks' => $tasks]);
    }

    public function create()
    {
        return view('task.create');
    }

    public function store(Request $request)
    {
        $task = new Task();
        $task->naizv = $request->input('naziv');
        $task->vreme = $request->input('vreme');
        $task->save();

        return redirect('/tasks');
    }

    public function edit(Request $request, $id)
    {
        $task = Task::where('id', '=', $id)->first();

        return view('task.edit', ['task' => $task]);

    }

    public function update(Request $request, $id)
    {
        $task = Task::where('id', '=', $id)->first();
        $task->update([
                'naizv' => $request->input('naziv'),
                'vreme' => $request->input('vreme'),
            ]
        );
        return redirect('/tasks');

    }



}
