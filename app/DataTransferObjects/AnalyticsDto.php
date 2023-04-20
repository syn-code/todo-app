<?php

declare(strict_types=1);

namespace App\DataTransferObjects;

use DateTimeInterface;

class AnalyticsDto
{
    private DateTimeInterface $fromDate;
    private DateTimeInterface $toDate;

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
