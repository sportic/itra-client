<?php

namespace Sportic\Itra\Api\Util;

use Sportic\Itra\Api\Exception\InvalidArgumentException;

class ValidateArray
{
    public static function assertArray($data)
    {
        if (false === is_array($data)) {
            throw new InvalidArgumentException('Data must be an array');
        }
    }

    public static function assertArrayContainsKey(array $data, string $key)
    {
        if (!isset($data[$key]) || empty($data[$key])) {
            throw new InvalidArgumentException('Data must contain ' . $key);
        }
    }

    public static function assertArrayContainsEitherKey(array $data, array $key)
    {
        $found = false;
        foreach ($key as $item) {
            if (isset($data[$item]) && !empty($data[$item])) {
                $found = true;
                break;
            }
        }
        if (!$found) {
            throw new InvalidArgumentException('Data must contain one of the following keys: ' . implode(', ', $key));
        }
    }
}
