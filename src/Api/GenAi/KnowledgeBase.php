<?php declare(strict_types=1);

namespace DigitalOceanV2\Api\GenAi;

use DigitalOceanV2\Api\AbstractApi;
use stdClass;

class KnowledgeBase extends AbstractApi
{
    public function all(): stdClass
    {
        return $this->get('gen-ai/knowledge_bases');
    }

    public function create(array $data): stdClass
    {
        return $this->post('gen-ai/knowledge_bases', $data);
    }

    public function retrieve(string $uuid): stdClass
    {
        return $this->get("gen-ai/knowledge_bases/{$uuid}");
    }

    public function destroy(string $uuid): void
    {
        $this->delete("gen-ai/knowledge_bases/{$uuid}");
    }
}
