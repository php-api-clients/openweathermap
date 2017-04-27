<?php declare(strict_types=1);

namespace ApiClients\Client\WeatherUnderground\Resource;

use ApiClients\Foundation\Hydrator\Annotation\EmptyResource;
use ApiClients\Foundation\Hydrator\Annotation\Nested;
use ApiClients\Foundation\Resource\AbstractResource;

/**
 * @Nested(
 *     response="Response",
 *     moon_phase="Astronomy\MoonPhase",
 *     sun_phase="Astronomy\SunPhase"
 * )
 * @EmptyResource("EmptyAstronomy")
 */
abstract class Astronomy extends AbstractResource implements AstronomyInterface
{
    /**
     * @var Response
     */
    protected $response;

    /**
     * @var Astronomy\MoonPhase
     */
    protected $moon_phase;

    /**
     * @var Astronomy\SunPhase
     */
    protected $sun_phase;

    /**
     * @return Response
     */
    public function response() : Response
    {
        return $this->response;
    }

    /**
     * @return Astronomy\MoonPhase
     */
    public function moonPhase() : Astronomy\MoonPhase
    {
        return $this->moon_phase;
    }

    /**
     * @return Astronomy\SunPhase
     */
    public function sunPhase() : Astronomy\SunPhase
    {
        return $this->sun_phase;
    }
}
