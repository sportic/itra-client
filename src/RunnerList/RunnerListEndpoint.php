<?php

namespace Sportic\Itra\RunnerList;

use ByTIC\RestClient\Endpoints\AbstractEndpoint;
use ByTIC\RestClient\Endpoints\Traits\DynamicMethod;
use ByTIC\RestClient\Endpoints\Traits\HasClient;
use ByTIC\RestClient\Utility\Traits\HasUri;
use Sportic\Itra\Api\Models\AthleteCollection;
use Sportic\Itra\Api\Response\CollectionResponse;
use Sportic\Itra\Api\Response\Response;
use Symfony\Component\Serializer\SerializerInterface;

class RunnerListEndpoint extends AbstractEndpoint
{
    use HasUri;
    use HasClient;
    use DynamicMethod;

    public const BASE_URI = '/api/API/getrunnerlist';

    public function find(RunnerListRequest $request): CollectionResponse
    {
        $this->bodyData = $request->toArray();
        return $this->execute();
    }

    /**
     * @inheritDoc
     */
    protected function transformResponseBody(
        string              $body,
        int                 $status,
        SerializerInterface $serializer,
        string              $contentType = null
    )
    {
        $format = $this->detectFormatFromContentType($contentType);

        $data = $serializer->deserialize($body, \stdClass::class, $format, [$contentType]);

        return CollectionResponse::fromApiCollection($data, AthleteCollection::class);
    }
}
