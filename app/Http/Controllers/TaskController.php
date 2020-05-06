<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Folder;
use App\Task;

class TaskController extends Controller
{
    public function index(int $id)
    {
        $folders = Folder::all();
        
        $current_folder = Folder::find($id);

        $tasks = $current_folder->tasks()->get();

        return view('tasks/index', [
            'folders' => $folders,
            'current_folder_id' => $current_folder->id,
            'tasks' => $tasks,
        ]);
    }
}
