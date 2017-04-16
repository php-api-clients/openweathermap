<?php declare(strict_types=1);

namespace ApiClients\Client\WeatherUnderground\Resource\Sync\Astronomy;

use ApiClients\Foundation\Hydrator\CommandBus\Command\BuildAsyncFromSyncCommand;
use ApiClients\Client\WeatherUnderground\Resource\Astronomy\MoonPhase as BaseMoonPhase;
use ApiClients\Client\WeatherUnderground\Resource\Astronomy\MoonPhaseInterface;

class MoonPhase extends BaseMoonPhase
{
    public function refresh() : MoonPhase
    {
        return $this->wait($this->handleCommand(
            new BuildAsyncFromSyncCommand(self::HYDRATE_CLASS, $this)
        )->then(function (MoonPhaseInterface $moonPhase) {
            return $moonPhase->refresh();
        }));
    }
}
