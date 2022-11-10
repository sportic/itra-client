<?php

namespace Sportic\Itra\Tests;

use Sportic\Itra\Api\Models\Athlete;
use Sportic\Itra\ItraClient;
use PHPUnit\Framework\TestCase;
use Sportic\Itra\RunnerList\RunnerListEndpoint;
use Sportic\Itra\RunnerList\RunnerListRequest;

class ItraClientTest extends TestCase
{
    public function test_runnerList_success()
    {
        $endpoint = $this->client->runnerlist();
        self::assertInstanceOf(RunnerListEndpoint::class, $endpoint);

        $return = $endpoint->find(RunnerListRequest::fromArray([
            'RunnerID' => 2704,
        ]));
        self::assertTrue($return->isSuccess());

        $athlete = $return->getFirstResult();
        self::assertInstanceOf(Athlete::class, $athlete);
        self::assertSame(2704, $athlete->getId());
        self::assertSame('Kilian', $athlete->getFirstName());
        self::assertSame('JORNET BURGADA', $athlete->getLastName());
        self::assertSame(951, $athlete->getPerformanceIndex());
    }

    public function test_runnerList_dnx()
    {
        $endpoint = $this->client->runnerlist();
        $return = $endpoint->find(RunnerListRequest::fromArray([
            'RunnerID' => '99999999999999',
        ]));
        self::assertFalse($return->getFirstResult());
    }

    protected function setUp(): void
    {
        parent::setUp();
        $this->client = new ItraClient();
        $this->client->setAuthToken(envVar('ITRA_AUTH_TOKEN'));
    }
}
