<?php declare(strict_types=1);

namespace ApiClients\Client\WeatherUnderground\Resource;

use ApiClients\Foundation\Resource\EmptyResourceInterface;

abstract class EmptyAstronomy implements AstronomyInterface, EmptyResourceInterface
{
    /**
     * @return Response
     */
    public function response() : Response
    {
        return null;
    }

    /**
     * @return Astronomy\MoonPhase
     */
    public function moonPhase() : Astronomy\MoonPhase
    {
        return null;
    }

    /**
     * @return Astronomy\SunPhase
     */
    public function sunPhase() : Astronomy\SunPhase
    {
        return null;
    }
}
