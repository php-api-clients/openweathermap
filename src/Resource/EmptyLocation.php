<?php declare(strict_types=1);

namespace ApiClients\Client\WeatherUnderground\Resource;

use ApiClients\Foundation\Resource\EmptyResourceInterface;

abstract class EmptyLocation implements LocationInterface, EmptyResourceInterface
{
    /**
     * @return string
     */
    public function full() : string
    {
        return null;
    }

    /**
     * @return string
     */
    public function city() : string
    {
        return null;
    }

    /**
     * @return string
     */
    public function state() : string
    {
        return null;
    }

    /**
     * @return string
     */
    public function stateName() : string
    {
        return null;
    }

    /**
     * @return string
     */
    public function country() : string
    {
        return null;
    }

    /**
     * @return string
     */
    public function countryIso3166() : string
    {
        return null;
    }

    /**
     * @return string
     */
    public function zip() : string
    {
        return null;
    }

    /**
     * @return string
     */
    public function magic() : string
    {
        return null;
    }

    /**
     * @return string
     */
    public function wmo() : string
    {
        return null;
    }

    /**
     * @return string
     */
    public function latitude() : string
    {
        return null;
    }

    /**
     * @return string
     */
    public function longitude() : string
    {
        return null;
    }

    /**
     * @return string
     */
    public function elevation() : string
    {
        return null;
    }
}
