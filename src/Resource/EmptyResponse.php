<?php declare(strict_types=1);

namespace ApiClients\Client\WeatherUnderground\Resource;

use ApiClients\Foundation\Resource\EmptyResourceInterface;

abstract class EmptyResponse implements ResponseInterface, EmptyResourceInterface
{
    /**
     * @return string
     */
    public function version() : string
    {
        return null;
    }

    /**
     * @return string
     */
    public function termsofService() : string
    {
        return null;
    }

    /**
     * @return array
     */
    public function features() : array
    {
        return null;
    }
}
