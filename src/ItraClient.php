<?php

namespace Sportic\Itra;

use ByTIC\RestClient\Client\BaseClient;

class ItraClient extends BaseClient
{
    use Traits\HasAuthentication;
    use Traits\HasConfiguration;
    use Traits\HasEndpoints;

    const API_VERSION = '1.0.1';

    const API_BASE_PATH = 'http://3.221.35.63:8080';

    const USER_AGENT_SUFFIX = "sportic-itra-client/" . self::API_VERSION . "/php";

    const SDK_VERSION = '1.0.1';
}