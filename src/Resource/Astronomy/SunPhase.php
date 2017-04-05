<?php declare(strict_types=1);

namespace ApiClients\Client\WeatherUnderground\Resource\Astronomy;

use ApiClients\Foundation\Hydrator\Annotations\EmptyResource;
use ApiClients\Foundation\Hydrator\Annotations\Nested;
use ApiClients\Foundation\Resource\AbstractResource;

/**
 * @Nested(
 *     sunrise="Time",
 *     sunset="Time"
 * )
 * @EmptyResource("Astronomy\EmptySunPhase")
 */
abstract class SunPhase extends AbstractResource implements SunPhaseInterface
{
    /**
     * @var Time
     */
    protected $sunrise;

    /**
     * @var Time
     */
    protected $sunset;

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
}
