<?php

namespace Sportic\Itra\RunnerList;

use Sportic\Itra\Api\Endpoints\EndpointRequest;
use Sportic\Itra\Api\Util\ValidateArray;

class RunnerListRequest extends EndpointRequest
{
    public const FIELD_FIRST_NAME = 'FirstName';
    public const FIELD_LAST_NAME = 'LastName';

    /**
     * In yyyy-mm-dd format
     */
    public const FIELD_DOB = 'BirthDate';

    /**
     * In yyyy format – restricted to 1900-2020
     */
    public const FIELD_YOB = 'BirthYear';

    /**
     * INTEGER
     */
    public const FIELD_RUNNER_ID = 'RunnerID';
    /**
     * Optional
     * At least one of the three variables needs to be inputted
     */
    public const FIELD_MANDATORY_EITHER =
        [
            self::FIELD_DOB,
            self::FIELD_YOB,
        ];

    protected static function validateArray(&$data)
    {
        ValidateArray::assertArray($data);

        // ITRA SUPPORT ONLY STRINGS
        $data = array_map(function ($value) {
            return (string)$value;
        }, $data);

        if (isset($data[self::FIELD_RUNNER_ID]) && !empty($data[self::FIELD_RUNNER_ID])) {
            return;
        }

        ValidateArray::assertArrayContainsKey($data, self::FIELD_FIRST_NAME);
        ValidateArray::assertArrayContainsKey($data, self::FIELD_LAST_NAME);

        ValidateArray::assertArrayContainsEitherKey(
            $data,
            self::FIELD_MANDATORY_EITHER
        );
    }

}