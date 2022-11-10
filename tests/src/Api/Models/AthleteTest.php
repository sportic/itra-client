<?php

namespace Sportic\Itra\Tests\Api\Models;

use Sportic\Itra\Api\Models\Athlete;
use Sportic\Itra\Tests\AbstractTest;

class AthleteTest extends AbstractTest
{
    public function test_array_conversion()
    {
        $data = [
            'id' => 1,
            'login' => 'test@login',
            'firstName' => 'first',
            'lastName' => 'last',
            'gender' => 'male',
            'nationality' => 'RO',
            'birthDate' => '1990-01-01',
            'idVerified' => 1,
            'nbRes' => 3,
            'town' => 'town',
            'pi' => 100,
            'memberId' => 2
        ];
        $athlete = Athlete::fromApiData($data);
        self::assertInstanceOf(Athlete::class, $athlete);
        self::assertSame($data, $athlete->toArray());
    }
}
