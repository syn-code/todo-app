<?php

declare(strict_types=1);

namespace App\Services;

use App\DataTransferObjects\AnalyticsDto;
use Illuminate\Http\Request;
use DateTimeImmutable;

class AnalyticsMapperService
{
    public function __construct(
        private AnalyticsDto $dto
    ) {}

    public function handle(Request $request): AnalyticsDto
    {
        $fromDate = $request->filled('date_from') ? new DateTimeImmutable($request->get('date_from')) : new DateTimeImmutable('-7 days');
        $toDate = $request->filled('date_to') ? new DateTimeImmutable($request->get('date_to')) : new DateTimeImmutable('');
    
        $this->dto
            ->setSearchBy((int)$request->get('search_by'))
            ->setFromDate($fromDate)
            ->setToDate($toDate);

        return $this->dto;
    }
}
