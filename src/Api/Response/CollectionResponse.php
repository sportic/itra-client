<?php

namespace Sportic\Itra\Api\Response;

use Nip\Collections\AbstractCollection;
use Sportic\Itra\Api\Models\Athlete;

/**
 * @method AbstractCollection $data
 */
class CollectionResponse extends AbstractResponse
{
    public static function fromApiCollection($data, string $collectionClass): AbstractResponse
    {
        $data->resData = call_user_func($collectionClass . '::fromApiData', $data->resData);
        return parent::fromApiData($data);
    }

    /**
     * @return Athlete|false
     */
    public function getFirstResult()
    {
        return $this->data->current();
    }
}