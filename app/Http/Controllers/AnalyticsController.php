<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Services\AnalyticsService;
use App\Services\AnalyticsMapperService;
use App\Enums\Status\StatusEnum;

class AnalyticsController extends Controller
{

    public function __construct(
       private AnalyticsService $analyticsService,
       private AnalyticsMapperService $mapper
    ) {}

    public function index(Request $request)
    {
        $result = $this->analyticsService->handle(
            $this->mapper->handle($request)
        );
        
        return view('todo.analytics.index', [
            'choices' => StatusEnum::getEnums(),
            'createdTotal' => $result['createdTotal'] ?? 0,
            'completedTotal' => $result['completedTotal'] ?? 0,
        ]);
    }
}
