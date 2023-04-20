<?php

declare(strict_types=1);

namespace App\Services;

use App\DataTransferObjects\TaskDto;
use Illuminate\Support\Facades\DB;

class CompleteTaskService
{
    public function handle(TaskDto $task): void
    {
        DB::table('todo_list')
        ->where('id', $task->getId())
        ->update([
            'status_id' => $task->getStatus(),
            'completed_at' => $task->getCompletedAt(),
        ]);
    }
}
