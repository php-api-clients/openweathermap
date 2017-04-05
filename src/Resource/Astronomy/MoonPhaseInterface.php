<?php declare(strict_types=1);

namespace ApiClients\Client\WeatherUnderground\Resource\Astronomy;

use ApiClients\Foundation\Resource\ResourceInterface;

interface MoonPhaseInterface extends ResourceInterface
{
    const HYDRATE_CLASS = 'Astronomy\\MoonPhase';

    /**
     * @return string
     */
    public function percentIlluminated() : string;

    /**
     * @return string
     */
    public function ageOfMoon() : string;

    /**
     * @return string
     */
    public function phaseofMoon() : string;

    /**
     * @return string
     */
    public function hemisphere() : string;

    /**
     * @return Time
     */
    public function currentTime() : Time;

    /**
     * @return Time
     */
    public function sunrise() : Time;

    /**
     * @return Time
     */
    public function sunset() : Time;

    /**
     * @return Time
     */
    public function moonrise() : Time;

    /**
     * @return Time
     */
    public function moonset() : Time;
}
