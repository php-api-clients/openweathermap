<?php declare(strict_types=1);

namespace ApiClients\Client\WeatherUnderground\Resource\Sync;

use ApiClients\Foundation\Hydrator\CommandBus\Command\BuildAsyncFromSyncCommand;
use ApiClients\Client\WeatherUnderground\Resource\Time as BaseTime;
use ApiClients\Client\WeatherUnderground\Resource\TimeInterface;

class Time extends BaseTime
{
    public function refresh() : Time
    {
        return $this->wait($this->handleCommand(
            new BuildAsyncFromSyncCommand(self::HYDRATE_CLASS, $this)
        )->then(function (TimeInterface $time) {
            return $time->refresh();
        }));
    }
}
