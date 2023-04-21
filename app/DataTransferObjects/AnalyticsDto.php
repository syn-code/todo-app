<?php

declare(strict_types=1);

namespace App\DataTransferObjects;

use DateTimeInterface;

class AnalyticsDto
{
    private int $searchBy;
    private DateTimeInterface $fromDate;
    private DateTimeInterface $toDate;

    public function setSearchBy(int $searchBy): self
    {
        $this->searchBy = $searchBy;
        return $this;
    }

    public function getSearchBy(): int
    {
        return $this->searchBy;
    }

    public function setFromDate(DateTimeInterface $fromDate): self
    {
        $this->fromDate = $fromDate;
        return $this;
    }

    public function getFromDate(): DateTimeInterface
    {
        return $this->fromDate;
    }

    public function setToDate(DateTimeInterface $toDate): self
    {
        $this->toDate = $toDate;
        return $this;
    }

    public function getToDate(): DateTimeInterface
    {
        return $this->toDate;
    }
}
