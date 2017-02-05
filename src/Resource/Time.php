<?php declare(strict_types=1);

namespace ApiClients\Client\WeatherUnderground\Resource;

use ApiClients\Foundation\Hydrator\Annotations\EmptyResource;
use ApiClients\Foundation\Resource\AbstractResource;

/**
 * @EmptyResource("EmptyTime")
 */
abstract class Time extends AbstractResource implements TimeInterface
{
    /**
     * @var string
     */
    protected $hour;

    /**
     * @var string
     */
    protected $minute;

    /**
     * @return string
     */
    public function hour() : string
    {
        return $this->hour;
    }

    /**
     * @return string
     */
    public function minute() : string
    {
        return $this->minute;
    }
}
