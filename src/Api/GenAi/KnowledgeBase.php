<?php

declare(strict_types=1);

namespace DigitalOceanV2\Api\GenAi;

use DigitalOceanV2\Api\AbstractApi;
use DigitalOceanV2\Entity\GenAi\KnowledgeBase as KnowledgeBaseEntity;

class KnowledgeBase extends AbstractApi
{
    /**
     * @return KnowledgeBaseEntity[]
     */
    public function all(): array
    {
        $response = $this->get('gen-ai/knowledge_bases');

        return array_map(
            fn ($kb) => new KnowledgeBaseEntity($kb),
            $response->knowledge_bases
        );
    }

    public function create(array $data): KnowledgeBaseEntity
    {
        $response = $this->post('gen-ai/knowledge_bases', $data);

        return new KnowledgeBaseEntity($response->knowledge_base);
    }

    public function retrieve(string $uuid): KnowledgeBaseEntity
    {
        $response = $this->get("gen-ai/knowledge_bases/{$uuid}");

        return new KnowledgeBaseEntity($response->knowledge_base);
    }

    public function destroy(string $uuid): void
    {
        $this->delete("gen-ai/knowledge_bases/{$uuid}");
    }
}
