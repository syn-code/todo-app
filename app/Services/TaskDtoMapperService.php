<?php

declare(strict_types=1);

namespace App\Services;

use App\DataTransferObjects\TaskDto;
use DateTimeImmutable;
use Illuminate\Http\Request;

class TaskDtoMapperService
{
    public function __construct(
        private TaskDto $dto
    ) {}

    public function handle(Request $request): TaskDto
    {

        $this->dto
        ->setName($request->name)
        ->setCreatedAt(new DateTimeImmutable());


        return $this->dto;
    }
}
