<?php declare(strict_types=1);

namespace ApiClients\Client\WeatherUnderground\Resource;

use ApiClients\Foundation\Resource\ResourceInterface;

interface LocationInterface extends ResourceInterface
{
    const HYDRATE_CLASS = 'Location';

    /**
     * @return string
     */
    public function full() : string;

    /**
     * @return string
     */
    public function city() : string;

    /**
     * @return string
     */
    public function state() : string;

    /**
     * @return string
     */
    public function stateName() : string;

    /**
     * @return string
     */
    public function country() : string;

    /**
     * @return string
     */
    public function countryIso3166() : string;

    /**
     * @return string
     */
    public function zip() : string;

    /**
     * @return string
     */
    public function magic() : string;

    /**
     * @return string
     */
    public function wmo() : string;

    /**
     * @return string
     */
    public function latitude() : string;

    /**
     * @return string
     */
    public function longitude() : string;

    /**
     * @return string
     */
    public function elevation() : string;
}
