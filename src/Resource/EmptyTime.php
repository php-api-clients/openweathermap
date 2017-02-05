<?php declare(strict_types=1);

namespace ApiClients\Client\WeatherUnderground\Resource;

use ApiClients\Foundation\Resource\EmptyResourceInterface;

abstract class EmptyTime implements TimeInterface, EmptyResourceInterface
{
    /**
     * @return string
     */
    public function hour() : string
    {
        return null;
    }

    /**
     * @return string
     */
    public function minute() : string
    {
        return null;
    }
}
