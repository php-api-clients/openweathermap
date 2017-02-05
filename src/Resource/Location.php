<?php declare(strict_types=1);

namespace ApiClients\Client\WeatherUnderground\Resource;

use ApiClients\Foundation\Hydrator\Annotations\EmptyResource;
use ApiClients\Foundation\Resource\AbstractResource;

/**
 * @EmptyResource("EmptyLocation")
 */
abstract class Location extends AbstractResource implements LocationInterface
{
    /**
     * @var string
     */
    protected $full;

    /**
     * @var string
     */
    protected $city;

    /**
     * @var string
     */
    protected $state;

    /**
     * @var string
     */
    protected $state_name;

    /**
     * @var string
     */
    protected $country;

    /**
     * @var string
     */
    protected $country_iso3166;

    /**
     * @var string
     */
    protected $zip;

    /**
     * @var string
     */
    protected $magic;

    /**
     * @var string
     */
    protected $wmo;

    /**
     * @var string
     */
    protected $latitude;

    /**
     * @var string
     */
    protected $longitude;

    /**
     * @var string
     */
    protected $elevation;

    /**
     * @return string
     */
    public function full() : string
    {
        return $this->full;
    }

    /**
     * @return string
     */
    public function city() : string
    {
        return $this->city;
    }

    /**
     * @return string
     */
    public function state() : string
    {
        return $this->state;
    }

    /**
     * @return string
     */
    public function stateName() : string
    {
        return $this->state_name;
    }

    /**
     * @return string
     */
    public function country() : string
    {
        return $this->country;
    }

    /**
     * @return string
     */
    public function countryIso3166() : string
    {
        return $this->country_iso3166;
    }

    /**
     * @return string
     */
    public function zip() : string
    {
        return $this->zip;
    }

    /**
     * @return string
     */
    public function magic() : string
    {
        return $this->magic;
    }

    /**
     * @return string
     */
    public function wmo() : string
    {
        return $this->wmo;
    }

    /**
     * @return string
     */
    public function latitude() : string
    {
        return $this->latitude;
    }

    /**
     * @return string
     */
    public function longitude() : string
    {
        return $this->longitude;
    }

    /**
     * @return string
     */
    public function elevation() : string
    {
        return $this->elevation;
    }
}
