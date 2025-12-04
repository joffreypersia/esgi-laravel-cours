<?php

namespace App\Http\Controllers;

use App\Models\Task;
use Illuminate\Http\Request;

class TaskController extends Controller
{
    public function toggle(Task $task)
    {
        $task->update([
            'is_done' => ! $task->is_done
        ]);

        return back();
    }
}