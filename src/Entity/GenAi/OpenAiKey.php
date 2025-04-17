<?php

declare(strict_types=1);

namespace DigitalOceanV2\Entity\GenAi;

use DigitalOceanV2\Entity\AbstractEntity;

final class OpenAiKey extends AbstractEntity
{
    public string $uuid;
    public string $name;
    public string $provider;
    public string $createdAt;
    public ?string $updatedAt;
    public bool $active;
    public array $scopes;

    public function setCreatedAt(string $value): void
    {
        $this->createdAt = static::convertToIso8601($value);
    }

    public function setUpdatedAt(string $value): void
    {
        $this->updatedAt = static::convertToIso8601($value);
    }
}
