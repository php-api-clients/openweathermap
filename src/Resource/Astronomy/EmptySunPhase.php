<?php declare(strict_types=1);

namespace ApiClients\Client\WeatherUnderground\Resource\Astronomy;

use ApiClients\Foundation\Resource\EmptyResourceInterface;

abstract class EmptySunPhase implements SunPhaseInterface, EmptyResourceInterface
{
    /**
     * @return Time
     */
    public function sunrise() : Time
    {
        return null;
    }

    /**
     * @return Time
     */
    public function sunset() : Time
    {
        return null;
    }
}
