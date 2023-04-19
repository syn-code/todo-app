<?php

declare(strict_types=1);

namespace App\Enums\Status;

enum StatusEnum: int
{
    case Todo = 1;
    case InProgress = 2;
    case Completed = 3;

    public static function matchStatus(int $statusId)
    {
        return match($statusId) {
            1 => StatusEnum::Todo,
            2 => StatusEnum::InProgress,
            3 => StatusEnum::Completed
        };
    }
}
