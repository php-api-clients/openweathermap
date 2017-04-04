<?php declare(strict_types=1);

namespace ApiClients\Client\WeatherUnderground\Resource\Sync\Astronomy;

use ApiClients\Foundation\Hydrator\CommandBus\Command\BuildAsyncFromSyncCommand;
use ApiClients\Client\WeatherUnderground\Resource\Astronomy\SunPhase as BaseSunPhase;
use ApiClients\Client\WeatherUnderground\Resource\Astronomy\SunPhaseInterface;

class SunPhase extends BaseSunPhase
{
    public function refresh() : SunPhase
    {
        return $this->wait($this->handleCommand(
            new BuildAsyncFromSyncCommand(self::HYDRATE_CLASS, $this)
        )->then(function (SunPhaseInterface $sunPhase) {
            return $sunPhase->refresh();
        }));
    }
}
