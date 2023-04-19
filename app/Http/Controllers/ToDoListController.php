<?php

namespace App\Http\Controllers;

use App\Services\GetTasksService;
use Illuminate\Http\Request;

class ToDoListController extends Controller
{
    public function __construct(
        private GetTasksService $taskService
    ) {}

    public function index()
    { 
        return view('todo.list', [
            'tasks' => $this->taskService->getAllTasks(),
        ]);
    }
}
