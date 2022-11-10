<?php

namespace Sportic\Itra\Traits;

trait HasConfiguration
{
    /**
     * @inheritDoc
     */
    protected function discoverConfiguration()
    {
        $configuration = parent::discoverConfiguration();
        $configuration->addFormatSupport('json');

        $configuration->setUri(self::API_BASE_PATH);

        $headers = [
            'Content-Type' => 'application/json',
        ];

        $configuration->headers()->add($headers);
        return $configuration;
    }
}
