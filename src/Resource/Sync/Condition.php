<?php declare(strict_types=1);

namespace ApiClients\Client\WeatherUnderground\Resource\Sync;

use ApiClients\Foundation\Hydrator\CommandBus\Command\BuildAsyncFromSyncCommand;
use ApiClients\Client\WeatherUnderground\Resource\Condition as BaseCondition;
use ApiClients\Client\WeatherUnderground\Resource\ConditionInterface;

class Condition extends BaseCondition
{
    public function refresh() : Condition
    {
        return $this->wait($this->handleCommand(
            new BuildAsyncFromSyncCommand(self::HYDRATE_CLASS, $this)
        )->then(function (ConditionInterface $condition) {
            return $condition->refresh();
        }));
    }
}
