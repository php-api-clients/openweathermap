<?php declare(strict_types=1);

namespace ApiClients\Tests\Client\WeatherUnderground\Resource\Async\Astronomy;

use ApiClients\Tools\ResourceTestUtilities\AbstractResourceTest;
use ApiClients\Client\WeatherUnderground\ApiSettings;
use ApiClients\Client\WeatherUnderground\Resource\Astronomy\SunPhase;

class SunPhaseTest extends AbstractResourceTest
{
    public function getSyncAsync() : string
    {
        return 'Async';
    }
    public function getClass() : string
    {
        return SunPhase::class;
    }
    public function getNamespace() : string
    {
        return ApiSettings::NAMESPACE;
    }
}
