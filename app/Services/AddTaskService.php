<?php

declare(strict_types=1);

namespace App\Services;

use App\DataTransferObjects\TaskDto;
use Illuminate\Support\Facades\DB;

class AddTaskService
{

    public function handle(TaskDto $task): void
    {
        DB::table('todo_app.todo_list')->insert([
            'name' => $task->getName(),
            'status_id' => $task->getStatus(),
            'created_at' => $task->getCreatedAt(),
            'completed_at' => $task->getCompletedAt(),
        ]);
    }
}
