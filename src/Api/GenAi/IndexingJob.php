<?php declare(strict_types=1);

namespace DigitalOceanV2\Api\GenAi;

use DigitalOceanV2\Api\AbstractApi;
use stdClass;

class IndexingJob extends AbstractApi
{
    public function all(): stdClass
    {
        return $this->get('gen-ai/indexing_jobs');
    }
}
