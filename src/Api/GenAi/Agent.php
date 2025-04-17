<?php declare(strict_types=1);

namespace DigitalOceanV2\Api\GenAi;

use DigitalOceanV2\Api\AbstractApi;
use stdClass;

class Agent extends AbstractApi
{
    public function all(): stdClass
    {
        return $this->get('gen-ai/agents');
    }

    public function create(array $data): stdClass
    {
        return $this->post('gen-ai/agents', $data);
    }

    public function retrieve(string $uuid): stdClass
    {
        return $this->get("gen-ai/agents/{$uuid}");
    }

    public function update(string $uuid, array $data): stdClass
    {
        return $this->put("gen-ai/agents/{$uuid}", $data);
    }

    public function destroy(string $uuid): void
    {
        $this->delete("gen-ai/agents/{$uuid}");
    }
}
