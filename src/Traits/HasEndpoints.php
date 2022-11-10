<?php

namespace Sportic\Itra\Traits;

use Sportic\Itra\RunnerList\RunnerListEndpoint;

trait HasEndpoints
{

    public function runnerList(): \ByTIC\RestClient\Endpoints\AbstractEndpoint
    {
        return $this->getEndpoint(RunnerListEndpoint::class);
    }
}