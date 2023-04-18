<?php

namespace App\Providers;

use App\DataTransferObjects\TaskDto;
use Illuminate\Support\ServiceProvider;
use App\Services\TaskDtoMapperService;

class AppServiceProvider extends ServiceProvider
{
    /**
     * Register any application services.
     */
    public function register(): void
    {
        $this->app->bind(TaskDto::class);
        $this->app->bind(TaskDtoMapperService::class);
    }

    /**
     * Bootstrap any application services.
     */
    public function boot(): void
    {
        //
    }
}
