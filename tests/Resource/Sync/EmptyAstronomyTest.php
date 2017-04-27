<?php declare(strict_types=1);

namespace ApiClients\Tests\Client\WeatherUnderground\Resource\Sync;

use ApiClients\Tools\ResourceTestUtilities\AbstractEmptyResourceTest;
use ApiClients\Client\WeatherUnderground\Resource\Sync\EmptyAstronomy;

final class EmptyAstronomyTest extends AbstractEmptyResourceTest
{
    public function getSyncAsync() : string
    {
        return 'Sync';
    }
    public function getClass() : string
    {
        return EmptyAstronomy::class;
    }
}