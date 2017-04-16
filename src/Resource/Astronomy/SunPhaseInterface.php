<?php declare(strict_types=1);

namespace ApiClients\Client\WeatherUnderground\Resource\Astronomy;

use ApiClients\Foundation\Resource\ResourceInterface;

interface SunPhaseInterface extends ResourceInterface
{
    const HYDRATE_CLASS = 'Astronomy\\SunPhase';

    /**
     * @return Time
     */
    public function sunrise() : Time;

    /**
     * @return Time
     */
    public function sunset() : Time;
}
