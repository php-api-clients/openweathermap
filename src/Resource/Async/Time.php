<?php declare(strict_types=1);

namespace ApiClients\Client\WeatherUnderground\Resource\Async;

use ApiClients\Client\WeatherUnderground\Resource\Time as BaseTime;

class Time extends BaseTime
{
    public function refresh() : Time
    {
        throw new \Exception('TODO: create refresh method!');
    }
}
