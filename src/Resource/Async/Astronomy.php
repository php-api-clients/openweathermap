<?php declare(strict_types=1);

namespace ApiClients\Client\WeatherUnderground\Resource\Async;

use ApiClients\Client\WeatherUnderground\Resource\Astronomy as BaseAstronomy;

class Astronomy extends BaseAstronomy
{
    public function refresh() : Astronomy
    {
        throw new \Exception('TODO: create refresh method!');
    }
}
