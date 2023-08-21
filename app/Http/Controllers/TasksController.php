<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Tasks;

class TasksController extends Controller
{
    public function submit(Request $request) {
        $task = new Tasks;
        $task->email = $request->input('email');
        $task->task = $request->input('task');
        $task->description = $request->input('description');
        $task->save();
        return redirect('form');
    }
}
