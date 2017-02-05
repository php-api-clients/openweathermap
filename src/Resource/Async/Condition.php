<?php declare(strict_types=1);

namespace ApiClients\Client\WeatherUnderground\Resource\Async;

use ApiClients\Client\WeatherUnderground\Resource\Condition as BaseCondition;

class Condition extends BaseCondition
{
    public function refresh() : Condition
    {
        throw new \Exception('TODO: create refresh method!');
    }
}
