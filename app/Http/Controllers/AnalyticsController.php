<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Services\AnalyticsService;

class AnalyticsController extends Controller
{

    public function __construct(
       private AnalyticsService $analyticsService
    ) {}

    public function index()
    {

        $result = $this->analyticsService->handle();

        return view('todo.analytics.index', [
            'createdTotal' => $result['createdTotal'],
            'completedTotal' => $result['completedTotal'],
        ]);
    }
}
