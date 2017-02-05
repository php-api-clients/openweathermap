<?php declare(strict_types=1);

namespace ApiClients\Client\WeatherUnderground\Resource\Sync;

use ApiClients\Foundation\Hydrator\CommandBus\Command\BuildAsyncFromSyncCommand;
use ApiClients\Client\WeatherUnderground\Resource\Location as BaseLocation;
use ApiClients\Client\WeatherUnderground\Resource\LocationInterface;

class Location extends BaseLocation
{
    public function refresh() : Location
    {
        return $this->wait($this->handleCommand(
            new BuildAsyncFromSyncCommand(self::HYDRATE_CLASS, $this)
        )->then(function (LocationInterface $location) {
            return $location->refresh();
        }));
    }
}
