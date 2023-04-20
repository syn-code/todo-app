<?php

namespace App\Http\Controllers;

use App\Services\AddTaskService;
use App\Services\CompleteTaskService;
use App\Services\DeleteTaskService;
use Illuminate\Http\Request;
use App\Services\TaskDtoMapperService;
use Illuminate\View\View;

class ManageToDoController extends Controller
{
    public function __construct(
        private AddTaskService $addTaskService,
        private CompleteTaskService $completeTaskService,
        private DeleteTaskService $deleteTaskService,
        private TaskDtoMapperService $mapper
    ){}

    public function add(Request $request)
    {
        $this->addTaskService->handle(
            $this->mapper->handle($request)
        );

        return redirect()->route('app.todo_list')->with(['success' => 'Task Added']);
    }

    public function complete(Request $request)
    {
       
        $this->completeTaskService->handle(
            $this->mapper->handle($request)
        );

        return redirect()->route('app.todo_list')->with(['success' => 'Task Completed']);
    }

    public function delete(Request $request)
    {
        $this->deleteTaskService->handle(
            $this->mapper->handle($request)
        );

        return redirect()->route('app.todo_list')->with(['success' => 'Task Deleted']);
    }
}
