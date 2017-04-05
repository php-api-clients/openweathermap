<?php declare(strict_types=1);

namespace ApiClients\Tests\Client\WeatherUnderground\Resource\Async\Astronomy;

use ApiClients\Tools\ResourceTestUtilities\AbstractEmptyResourceTest;
use ApiClients\Client\WeatherUnderground\Resource\Async\Astronomy\EmptySunPhase;

final class EmptySunPhaseTest extends AbstractEmptyResourceTest
{
    public function getSyncAsync() : string
    {
        return 'Async';
    }
    public function getClass() : string
    {
        return EmptySunPhase::class;
    }
}
