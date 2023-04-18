<?php

namespace App\Http\Controllers;

use App\Services\AddTaskService;
use Illuminate\Http\Request;
use App\Services\TaskDtoMapperService;

class ManageToDoController extends Controller
{
    public function __construct(
        private AddTaskService $addTaskService,
        private TaskDtoMapperService $mapper
    ){}

    public function add(Request $request)
    {
        $this->addTaskService->handle(
            $this->mapper->handle($request)
        );

        return view(
            'todo.add',
            [
                'success' => 'Task Addes',
            ]
        );
    }
}
