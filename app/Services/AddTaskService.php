<?php

declare(strict_types=1);

namespace App\Services;

use App\DataTransferObjects\TaskDto;

class AddTaskService
{
    public function handle(TaskDto $task): void
    {
        dd($task);
    }
}
