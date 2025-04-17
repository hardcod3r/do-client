<?php

declare(strict_types=1);

namespace DigitalOceanV2\Entity\GenAi;

use DigitalOceanV2\Entity\AbstractEntity;

final class IndexingJob extends AbstractEntity
{
    public string $uuid;
    public string $knowledgeBaseUuid;
    public string $status;
    public string $createdAt;
    public ?string $completedAt;

    public function setCreatedAt(string $value): void
    {
        $this->createdAt = static::convertToIso8601($value);
    }

    public function setCompletedAt(?string $value): void
    {
        if ($value !== null) {
            $this->completedAt = static::convertToIso8601($value);
        }
    }
}
