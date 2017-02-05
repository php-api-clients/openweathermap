<?php declare(strict_types=1);

namespace ApiClients\Client\WeatherUnderground\Resource\Async;

use ApiClients\Client\WeatherUnderground\Resource\Location as BaseLocation;

class Location extends BaseLocation
{
    public function refresh() : Location
    {
        throw new \Exception('TODO: create refresh method!');
    }
}
