<?php

declare(strict_types=1);

namespace App\Services;

use App\DataTransferObjects\TaskDto;
use DateTimeImmutable;
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
        
        if ($request->has('task-completed')) {
            $this->dto
                ->setStatus(StatusEnum::Completed)
                ->setCompletedAt(new DateTimeImmutable());
        } else {
            $this->dto
                ->setStatus(StatusEnum::Todo)
                ->setCreatedAt(new DateTimeImmutable());
        }
        
        return $this->dto;
    }
}
