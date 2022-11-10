<?php

namespace Sportic\Itra\Api\Endpoints;

class EndpointRequest
{

    protected $data = [];

    /**
     * @param array $data
     */
    protected function __construct(array $data)
    {
        $this->data = $data;
    }

    public static function fromArray($data)
    {
        static::validateArray($data);

        return new static($data);
    }

    protected static function validateArray(&$data)
    {
        return;
    }

    /**
     * @return array
     */
    public function getData(): array
    {
        return $this->data;
    }

    public function toArray()
    {
        return $this->getData();
    }
}
