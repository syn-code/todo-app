<?php

declare(strict_types=1);

namespace App\Services;

use App\DataTransferObjects\AnalyticsDto;
use App\Enums\Status\StatusEnum;
use Illuminate\Support\Facades\DB;

class AnalyticsService
{
    public function handle(AnalyticsDto $dto): array
    {
        $fromDate = $dto->getFromDate()->format('Y-m-d 00:00:00');
        $toDate = $dto->getToDate()->format('Y-m-d 23:59:59');
        
        //dd($dto->getSearchBy(), $fromDate, $toDate);

        $result = null;
          
        if ($dto->getSearchBy() === StatusEnum::Completed->value) {
            $result = $this->getCompletedTasks($dto->getSearchBy(), $fromDate, $toDate);
        }
        
        if ($dto->getSearchBy() === StatusEnum::Todo->value) {
            $result = $this->getTodoTasks($dto->getSearchBy(), $fromDate, $toDate);
        }


        if (is_null($result)) {
            return [];
        }

        return [
            'createdTotal' => $result->where('status_id', StatusEnum::Todo->value)->count(),
            'completedTotal' => $result->where('status_id', StatusEnum::Completed->value)->count(),
        ];
    }

    private function getCompletedTasks(int $searchBy, string $fromDate, string $toDate)
    {
        return DB::table('todo_list')
            ->select('*')
            ->where('status_id', $searchBy)
            ->whereBetween('completed_at', [
                $fromDate,
                $toDate,
            ])
            ->get();
    }

    private function getTodoTasks(int $searchBy, string $fromDate, string $toDate)
    {
       return DB::table('todo_list')
            ->select('*')
            ->where('status_id', $searchBy)
            ->whereBetween('created_at', [
                $fromDate,
                $toDate,
            ])
            ->get();
    }
}
