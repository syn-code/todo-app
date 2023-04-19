<?php

declare(strict_types=1);

namespace App\Services;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Collection;
use App\DataTransferObjects\TaskDto;
use App\Enums\Status\StatusEnum;
use DateTimeImmutable;

class GetTasksService
{
    public function getAllTasks(): Collection
    {
        $tasks = $this->findAllTasks();
        
        return $tasks->map(function ($task) {
            $dto = new TaskDto();
            return $dto
                ->setId($task->id)
                ->setName($task->name)
                ->setStatus(StatusEnum::matchStatus($task->status_id))
                ->setCreatedAt(new DateTimeImmutable($task->created_at))
                ->setCompletedAt($task->completed_at ?? null);
        });
    }

    private function findAllTasks(): Collection
    {
        return DB::table('todo_list')
        ->select(['todo_list.*', 'todo_status.name as status_name'])
        ->leftJoin('todo_status', 'todo_list.status_id', '=', 'todo_status.id')
        ->get();
    }
}
