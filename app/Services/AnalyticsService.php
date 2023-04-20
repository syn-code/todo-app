<?php

declare(strict_types=1);

namespace App\Services;

use App\DataTransferObjects\AnalyticsDto;
use App\DataTransferObjects\TaskDto;
use App\Enums\Status\StatusEnum;
use Illuminate\Support\Facades\DB;

class AnalyticsService
{
    public function handle(): array
    {
        $result = DB::table('todo_list')
            ->whereIn('status_id', [StatusEnum::Todo->value, StatusEnum::Completed->value])
            ->get('status_id');

        return [
            'createdTotal' => $result->where('status_id', StatusEnum::Todo->value)->count(),
            'completedTotal' => $result->where('status_id', StatusEnum::Completed->value)->count(),
        ];
    }
}
