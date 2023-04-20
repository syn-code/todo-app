<?php

declare(strict_types=1);

namespace App\Services;

use App\DataTransferObjects\TaskDto;
use Illuminate\Support\Facades\DB;

class AnalyticsService
{
    public function handle()
    {
        $total = DB::table('todo_list')->select('*')->count();

        return $total;
    }
}