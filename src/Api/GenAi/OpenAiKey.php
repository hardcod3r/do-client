<?php

declare(strict_types=1);

namespace DigitalOceanV2\Api\GenAi;

use DigitalOceanV2\Api\AbstractApi;
use DigitalOceanV2\Entity\GenAi\OpenAiKey as OpenAiKeyEntity;

class OpenAiKey extends AbstractApi
{
    /**
     * @return OpenAiKeyEntity[]
     */
    public function all(): array
    {
        $response = $this->get('gen-ai/openai/keys');

        return array_map(
            fn ($key) => new OpenAiKeyEntity($key),
            $response->keys
        );
    }

    public function create(array $data): OpenAiKeyEntity
    {
        $response = $this->post('gen-ai/openai/keys', $data);

        return new OpenAiKeyEntity($response->key);
    }

    public function retrieve(string $uuid): OpenAiKeyEntity
    {
        $response = $this->get("gen-ai/openai/keys/{$uuid}");

        return new OpenAiKeyEntity($response->key);
    }

    public function update(string $uuid, array $data): OpenAiKeyEntity
    {
        $response = $this->put("gen-ai/openai/keys/{$uuid}", $data);

        return new OpenAiKeyEntity($response->key);
    }

    public function destroy(string $uuid): void
    {
        $this->delete("gen-ai/openai/keys/{$uuid}");
    }

    /**
     * @return AgentEntity[]
     */
    public function listAgents(string $uuid): array
    {
        $response = $this->get("gen-ai/openai/keys/{$uuid}/agents");

        return array_map(
            fn ($agent) => new \DigitalOceanV2\Entity\GenAi\Agent($agent),
            $response->agents
        );
    }
}
