<?php

declare(strict_types=1);

namespace DigitalOceanV2\Api\GenAi;

use DigitalOceanV2\Api\AbstractApi;
use DigitalOceanV2\Entity\GenAi\IndexingJob as IndexingJobEntity;

class IndexingJob extends AbstractApi
{
    /**
     * @return IndexingJobEntity[]
     */
    public function all(): array
    {
        $response = $this->get('gen-ai/indexing_jobs');

        return array_map(
            fn ($job) => new IndexingJobEntity($job),
            $response->indexing_jobs
        );
    }
}
