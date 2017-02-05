<?php declare(strict_types=1);

namespace ApiClients\Client\WeatherUnderground\Resource\Async;

use ApiClients\Client\WeatherUnderground\Resource\Response as BaseResponse;

class Response extends BaseResponse
{
    public function refresh() : Response
    {
        throw new \Exception('TODO: create refresh method!');
    }
}
