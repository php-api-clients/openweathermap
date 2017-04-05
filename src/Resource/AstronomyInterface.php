<?php declare(strict_types=1);

namespace ApiClients\Client\WeatherUnderground\Resource;

use ApiClients\Foundation\Resource\ResourceInterface;

interface AstronomyInterface extends ResourceInterface
{
    const HYDRATE_CLASS = 'Astronomy';

    /**
     * @return Response
     */
    public function response() : Response;

    /**
     * @return Astronomy\MoonPhase
     */
    public function moonPhase() : Astronomy\MoonPhase;

    /**
     * @return Astronomy\SunPhase
     */
    public function sunPhase() : Astronomy\SunPhase;
}
