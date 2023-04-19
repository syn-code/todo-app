<?php

declare(strict_types=1);

namespace App\DataTransferObjects;

use DateTimeInterface;
use App\Enums\Status\StatusEnum;

class TaskDto
{
    private string $name;
    private StatusEnum $status ;
    private DateTimeInterface $createdAt;
    private ?DateTimeInterface $completedAt = null;

    public function setName(string $name): self
    {
        $this->name = $name;
        return $this;
    }

    public function getName(): string
    {
        return $this->name;
    }

    public function setStatus(StatusEnum $status): self
    {
        $this->status = $status;
        return $this;
    }

    public function getStatus(): int
    {
        return $this->status->value;
    }

    public function setCreatedAt(DateTimeInterface $createdAt): self
    {
        $this->createdAt = $createdAt;
        return $this;
    }

    public function getCreatedAt(): DateTimeInterface
    {
        return $this->createdAt;
    }

    public function setCompletedAt(?DateTimeInterface $completedAt): self
    {
        $this->completedAt = $completedAt;
        return $this;
    }

    public function getCompletedAt(): ?DateTimeInterface
    {
        return $this->completedAt;
    }
}
