<?php declare(strict_types=1);

namespace ApiClients\Client\WeatherUnderground\Resource\Async\Astronomy;

use ApiClients\Client\WeatherUnderground\Resource\Astronomy\MoonPhase as BaseMoonPhase;

class MoonPhase extends BaseMoonPhase
{
    public function refresh() : MoonPhase
    {
        throw new \Exception('TODO: create refresh method!');
    }
}
