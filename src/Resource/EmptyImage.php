<?php declare(strict_types=1);

namespace ApiClients\Client\WeatherUnderground\Resource;

use ApiClients\Foundation\Resource\EmptyResourceInterface;

abstract class EmptyImage implements ImageInterface, EmptyResourceInterface
{
    /**
     * @return string
     */
    public function url() : string
    {
        return null;
    }

    /**
     * @return string
     */
    public function title() : string
    {
        return null;
    }

    /**
     * @return string
     */
    public function link() : string
    {
        return null;
    }
}
