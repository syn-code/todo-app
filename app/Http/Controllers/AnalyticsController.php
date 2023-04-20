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
        return view('todo.analytics.index', [
            'total' => $this->analyticsService->handle()
        ]);
    }
}
