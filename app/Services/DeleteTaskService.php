<?php

declare(strict_types=1);

namespace App\Services;

use App\DataTransferObjects\TaskDto;
use Illuminate\Support\Facades\DB;

class DeleteTaskService
{
    public function handle(TaskDto $task)
    {
        DB::table('todo_list')
        ->where('id', $task->getId())
        ->delete();
    }
}
