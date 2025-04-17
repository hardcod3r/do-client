<?php

declare(strict_types=1);

namespace DigitalOceanV2\Api\GenAi;

use DigitalOceanV2\Api\AbstractApi;
use DigitalOceanV2\Entity\GenAi\AnthropicKey as AnthropicKeyEntity;
use DigitalOceanV2\Entity\GenAi\Agent as AgentEntity;

class AnthropicKey extends AbstractApi
{
    /**
     * @return AnthropicKeyEntity[]
     */
    public function all(): array
    {
        $response = $this->get('gen-ai/anthropic/keys');

        return array_map(
            fn ($key) => new AnthropicKeyEntity($key),
            $response->keys
        );
    }

    public function create(array $data): AnthropicKeyEntity
    {
        $response = $this->post('gen-ai/anthropic/keys', $data);

        return new AnthropicKeyEntity($response->key);
    }

    public function retrieve(string $uuid): AnthropicKeyEntity
    {
        $response = $this->get("gen-ai/anthropic/keys/{$uuid}");

        return new AnthropicKeyEntity($response->key);
    }

    public function update(string $uuid, array $data): AnthropicKeyEntity
    {
        $response = $this->put("gen-ai/anthropic/keys/{$uuid}", $data);

        return new AnthropicKeyEntity($response->key);
    }

    public function destroy(string $uuid): void
    {
        $this->delete("gen-ai/anthropic/keys/{$uuid}");
    }

    /**
     * @return AgentEntity[]
     */
    public function listAgents(string $uuid): array
    {
        $response = $this->get("gen-ai/anthropic/keys/{$uuid}/agents");

        return array_map(
            fn ($agent) => new AgentEntity($agent),
            $response->agents
        );
    }
}
