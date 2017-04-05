<?php declare(strict_types=1);

namespace ApiClients\Client\WeatherUnderground\Resource\Sync;

use ApiClients\Foundation\Hydrator\CommandBus\Command\BuildAsyncFromSyncCommand;
use ApiClients\Client\WeatherUnderground\Resource\Astronomy as BaseAstronomy;
use ApiClients\Client\WeatherUnderground\Resource\AstronomyInterface;

class Astronomy extends BaseAstronomy
{
    public function refresh() : Astronomy
    {
        return $this->wait($this->handleCommand(
            new BuildAsyncFromSyncCommand(self::HYDRATE_CLASS, $this)
        )->then(function (AstronomyInterface $astronomy) {
            return $astronomy->refresh();
        }));
    }
}
