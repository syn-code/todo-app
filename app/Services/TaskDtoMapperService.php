<?php

declare(strict_types=1);

namespace App\Services;

use App\DataTransferObjects\TaskDto;
use DateTimeImmutable;
use DateTime;
use Illuminate\Http\Request;
use App\Enums\Status\StatusEnum;

class TaskDtoMapperService
{
    public function __construct(
        private TaskDto $dto
    ) {}

    public function handle(Request $request): TaskDto
    {
        $this->dto->setName($request->get('name', ''));
        
        if ($request->get('task_created')) {
            $this->dto
                ->setStatus(StatusEnum::Todo)
                ->setCreatedAt(new DateTime());
        }
        
        if ($request->get('task_completed')) {
            $this->dto
                ->setId((int)$request->get('task_id'))
                ->setStatus(StatusEnum::Completed)
                ->setCompletedAt(new DateTimeImmutable());
        } 
    
        if ($request->get('task_delete')) {
            $this->dto
                ->setId((int)$request->get('task_id'));
        }        
        
        return $this->dto;
    }
}
