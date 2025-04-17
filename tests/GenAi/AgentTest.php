<?php

use DigitalOceanV2\Client;
use DigitalOceanV2\Api\GenAi\Agent;
use PHPUnit\Framework\TestCase;

final class AgentTest extends TestCase
{
    public function testAgentEntityStructure(): void
    {
        $agent = new \DigitalOceanV2\Entity\GenAi\Agent([
            'uuid' => 'abc-123',
            'name' => 'Test Bot',
            'type' => 'chat',
            'model' => 'gpt-4',
            'environment' => 'sandbox',
            'public' => false,
            'created_at' => '2024-01-01T00:00:00Z',
        ]);

        $this->assertSame('abc-123', $agent->uuid);
        $this->assertSame('Test Bot', $agent->name);
        $this->assertSame('sandbox', $agent->environment);
        $this->assertInstanceOf(\DigitalOceanV2\Entity\GenAi\Agent::class, $agent);
    }
}
