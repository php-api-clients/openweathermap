<?php declare(strict_types=1);

namespace ApiClients\Client\WeatherUnderground\Resource\Async\Astronomy;

use ApiClients\Client\WeatherUnderground\Resource\Astronomy\SunPhase as BaseSunPhase;

class SunPhase extends BaseSunPhase
{
    public function refresh() : SunPhase
    {
        throw new \Exception('TODO: create refresh method!');
    }
}
