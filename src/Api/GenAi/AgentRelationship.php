<?php declare(strict_types=1);

namespace DigitalOceanV2\Api\GenAi;

use DigitalOceanV2\Api\AbstractApi;
use stdClass;

class AgentRelationship extends AbstractApi
{
    public function list(string $uuid): stdClass
    {
        return $this->get("gen-ai/agents/{$uuid}/child_agents");
    }

    public function attach(string $parentUuid, string $childUuid): stdClass
    {
        return $this->post("gen-ai/agents/{$parentUuid}/child_agents/{$childUuid}");
    }

    public function detach(string $parentUuid, string $childUuid): void
    {
        $this->delete("gen-ai/agents/{$parentUuid}/child_agents/{$childUuid}");
    }
}
