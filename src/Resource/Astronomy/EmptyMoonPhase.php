<?php declare(strict_types=1);

namespace ApiClients\Client\WeatherUnderground\Resource\Astronomy;

use ApiClients\Foundation\Resource\EmptyResourceInterface;

abstract class EmptyMoonPhase implements MoonPhaseInterface, EmptyResourceInterface
{
    /**
     * @return string
     */
    public function percentIlluminated() : string
    {
        return null;
    }

    /**
     * @return string
     */
    public function ageOfMoon() : string
    {
        return null;
    }

    /**
     * @return string
     */
    public function phaseofMoon() : string
    {
        return null;
    }

    /**
     * @return string
     */
    public function hemisphere() : string
    {
        return null;
    }

    /**
     * @return Time
     */
    public function currentTime() : Time
    {
        return null;
    }

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

    /**
     * @return Time
     */
    public function moonrise() : Time
    {
        return null;
    }

    /**
     * @return Time
     */
    public function moonset() : Time
    {
        return null;
    }
}
