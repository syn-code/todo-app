<?php

declare(strict_types=1);

namespace App\Enums\Status;

enum StatusEnum: int
{
    case Todo = 1;
    case InProgress = 2;
    case Completed = 3;
}
