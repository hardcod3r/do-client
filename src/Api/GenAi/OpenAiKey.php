<?php declare(strict_types=1);

namespace DigitalOceanV2\Api\GenAi;

use DigitalOceanV2\Api\AbstractApi;
use stdClass;

class OpenAiKey extends AbstractApi
{
    public function all(): stdClass
    {
        return $this->get('gen-ai/openai/keys');
    }

    public function create(array $data): stdClass
    {
        return $this->post('gen-ai/openai/keys', $data);
    }

    public function retrieve(string $uuid): stdClass
    {
        return $this->get("gen-ai/openai/keys/{$uuid}");
    }

    public function update(string $uuid, array $data): stdClass
    {
        return $this->put("gen-ai/openai/keys/{$uuid}", $data);
    }

    public function destroy(string $uuid): void
    {
        $this->delete("gen-ai/openai/keys/{$uuid}");
    }

    public function listAgents(string $uuid): stdClass
    {
        return $this->get("gen-ai/openai/keys/{$uuid}/agents");
    }
}
