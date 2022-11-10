<?php

namespace Sportic\Itra\Traits;

trait HasAuthentication
{
    protected $authToken = null;

    /**
     * @return null
     */
    public function getAuthToken()
    {
        return $this->authToken;
    }

    /**
     * @param null $authToken
     */
    public function setAuthToken($authToken): void
    {
        $this->authToken = $authToken;
        $this->getConfiguration()->headers()->set('AuthToken', $authToken);
    }
}
