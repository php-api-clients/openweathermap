<?php declare(strict_types=1);

namespace ApiClients\Tests\Client\WeatherUnderground\Resource\Sync;

use ApiClients\Tools\ResourceTestUtilities\AbstractResourceTest;
use ApiClients\Client\WeatherUnderground\ApiSettings;
use ApiClients\Client\WeatherUnderground\Resource\Astronomy;

class AstronomyTest extends AbstractResourceTest
{
    public function getSyncAsync() : string
    {
        return 'Sync';
    }
    public function getClass() : string
    {
        return Astronomy::class;
    }
    public function getNamespace() : string
    {
        return ApiSettings::NAMESPACE;
    }
}
