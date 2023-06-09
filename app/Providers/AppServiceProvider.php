<?php

namespace App\Providers;

use App\DataTransferObjects\TaskDto;
use Illuminate\Support\ServiceProvider;
use App\Services\TaskDtoMapperService;
use App\Services\GetTasksService;
use App\Services\AnalyticsMapperService;

class AppServiceProvider extends ServiceProvider
{
    /**
     * Register any application services.
     */
    public function register(): void
    {
        $this->app->bind(TaskDto::class);
        $this->app->bind(TaskDtoMapperService::class);
        $this->app->bind(GetTasksService::class);
        $this->app->bind(CompleteTaskService::class);
        $this->app->bind(DeleteTaskService::class);
        $this->app->bind(AnalyticsService::class);
        $this->app->bind(AnalyticsMapperService::class);
        $this->app->bind(AnalyticsDto::class);
    }

    /**
     * Bootstrap any application services.
     */
    public function boot(): void
    {
        //
    }
}
