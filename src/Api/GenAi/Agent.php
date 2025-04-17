<?php

declare(strict_types=1);

namespace DigitalOceanV2\Api\GenAi;

use DigitalOceanV2\Api\AbstractApi;
use DigitalOceanV2\Entity\GenAi\Agent as AgentEntity;
use stdClass;

class Agent extends AbstractApi
{
    /**
     * @return AgentEntity[]
     */
    public function all(): array
    {
        $response = $this->get('gen-ai/agents');

        return array_map(
            fn ($agent) => new AgentEntity($agent),
            $response->agents
        );
    }

    public function create(array $data): AgentEntity
    {
        $response = $this->post('gen-ai/agents', $data);

        return new AgentEntity($response->agent);
    }

    public function retrieve(string $uuid): AgentEntity
    {
        $response = $this->get("gen-ai/agents/{$uuid}");

        return new AgentEntity($response->agent);
    }

    public function update(string $uuid, array $data): AgentEntity
    {
        $response = $this->put("gen-ai/agents/{$uuid}", $data);

        return new AgentEntity($response->agent);
    }

    public function destroy(string $uuid): void
    {
        $this->delete("gen-ai/agents/{$uuid}");
    }
}
