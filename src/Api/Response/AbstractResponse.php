<?php

namespace Sportic\Itra\Api\Response;

abstract class AbstractResponse
{
    public $code;
    public $message;
    public $data;

    public static function fromApiData($data): AbstractResponse
    {
        $response = new static();
        $response->code = $data->sCode ?? null;
        $response->message = $data->msg ?? null;
        $response->data = $data->resData ?? null;
        return $response;
    }

    public function isSuccess(): bool
    {
        return $this->code == 1 && $this->message == 'Success';
    }
}