<?php declare(strict_types=1);

namespace ApiClients\Client\WeatherUnderground\Resource\Astronomy;

use ApiClients\Foundation\Hydrator\Annotation\EmptyResource;
use ApiClients\Foundation\Hydrator\Annotation\Nested;
use ApiClients\Foundation\Resource\AbstractResource;

/**
 * @Nested(
 *     current_time="Time",
 *     sunrise="Time",
 *     sunset="Time",
 *     moonrise="Time",
 *     moonset="Time"
 * )
 * @EmptyResource("Astronomy\EmptyMoonPhase")
 */
abstract class MoonPhase extends AbstractResource implements MoonPhaseInterface
{
    /**
     * @var string
     */
    protected $percentIlluminated;

    /**
     * @var string
     */
    protected $ageOfMoon;

    /**
     * @var string
     */
    protected $phaseofMoon;

    /**
     * @var string
     */
    protected $hemisphere;

    /**
     * @var Time
     */
    protected $current_time;

    /**
     * @var Time
     */
    protected $sunrise;

    /**
     * @var Time
     */
    protected $sunset;

    /**
     * @var Time
     */
    protected $moonrise;

    /**
     * @var Time
     */
    protected $moonset;

    /**
     * @return string
     */
    public function percentIlluminated() : string
    {
        return $this->percentIlluminated;
    }

    /**
     * @return string
     */
    public function ageOfMoon() : string
    {
        return $this->ageOfMoon;
    }

    /**
     * @return string
     */
    public function phaseofMoon() : string
    {
        return $this->phaseofMoon;
    }

    /**
     * @return string
     */
    public function hemisphere() : string
    {
        return $this->hemisphere;
    }

    /**
     * @return Time
     */
    public function currentTime() : Time
    {
        return $this->current_time;
    }

    /**
     * @return Time
     */
    public function sunrise() : Time
    {
        return $this->sunrise;
    }

    /**
     * @return Time
     */
    public function sunset() : Time
    {
        return $this->sunset;
    }

    /**
     * @return Time
     */
    public function moonrise() : Time
    {
        return $this->moonrise;
    }

    /**
     * @return Time
     */
    public function moonset() : Time
    {
        return $this->moonset;
    }
}
