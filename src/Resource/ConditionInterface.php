<?php declare(strict_types=1);

namespace ApiClients\Client\WeatherUnderground\Resource;

use ApiClients\Foundation\Resource\ResourceInterface;

interface ConditionInterface extends ResourceInterface
{
    const HYDRATE_CLASS = 'Condition';

    /**
     * @return Image
     */
    public function image() : Image;

    /**
     * @return Location
     */
    public function displayLocation() : Location;

    /**
     * @return Location
     */
    public function observationLocation() : Location;

    /**
     * @return array
     */
    public function estimated() : array;

    /**
     * @return string
     */
    public function stationId() : string;

    /**
     * @return string
     */
    public function observationTime() : string;

    /**
     * @return string
     */
    public function observationTimeRfc822() : string;

    /**
     * @return string
     */
    public function observationEpoch() : string;

    /**
     * @return string
     */
    public function localTimeRfc822() : string;

    /**
     * @return string
     */
    public function localEpoch() : string;

    /**
     * @return string
     */
    public function localTzShort() : string;

    /**
     * @return string
     */
    public function localTzLong() : string;

    /**
     * @return string
     */
    public function localTzOffset() : string;

    /**
     * @return string
     */
    public function weather() : string;

    /**
     * @return string
     */
    public function temperatureString() : string;

    /**
     * @return float
     */
    public function tempF() : float;

    /**
     * @return float
     */
    public function tempC() : float;

    /**
     * @return string
     */
    public function relativeHumidity() : string;

    /**
     * @return string
     */
    public function windString() : string;

    /**
     * @return string
     */
    public function windDir() : string;

    /**
     * @return string
     */
    public function windDegrees() : string;

    /**
     * @return string
     */
    public function windMph() : string;

    /**
     * @return string
     */
    public function windGustMph() : string;

    /**
     * @return string
     */
    public function windKph() : string;

    /**
     * @return string
     */
    public function windGustKph() : string;

    /**
     * @return string
     */
    public function pressureMb() : string;

    /**
     * @return string
     */
    public function pressureIn() : string;

    /**
     * @return string
     */
    public function pressureTrend() : string;

    /**
     * @return string
     */
    public function dewpointString() : string;

    /**
     * @return int
     */
    public function dewpointF() : int;

    /**
     * @return int
     */
    public function dewpointC() : int;

    /**
     * @return string
     */
    public function heatIndexString() : string;

    /**
     * @return string
     */
    public function heatIndexF() : string;

    /**
     * @return string
     */
    public function heatIndexC() : string;

    /**
     * @return string
     */
    public function windchillString() : string;

    /**
     * @return string
     */
    public function windchillF() : string;

    /**
     * @return string
     */
    public function windchillC() : string;

    /**
     * @return string
     */
    public function feelslikeString() : string;

    /**
     * @return string
     */
    public function feelslikeF() : string;

    /**
     * @return string
     */
    public function feelslikeC() : string;

    /**
     * @return string
     */
    public function visibilityMi() : string;

    /**
     * @return string
     */
    public function visibilityKm() : string;

    /**
     * @return string
     */
    public function solarradiation() : string;

    /**
     * @return string
     */
    public function uV() : string;

    /**
     * @return string
     */
    public function precip1hrString() : string;

    /**
     * @return string
     */
    public function precip1hrIn() : string;

    /**
     * @return string
     */
    public function precip1hrMetric() : string;

    /**
     * @return string
     */
    public function precipTodayString() : string;

    /**
     * @return string
     */
    public function precipTodayIn() : string;

    /**
     * @return string
     */
    public function precipTodayMetric() : string;

    /**
     * @return string
     */
    public function icon() : string;

    /**
     * @return string
     */
    public function iconUrl() : string;

    /**
     * @return string
     */
    public function forecastUrl() : string;

    /**
     * @return string
     */
    public function historyUrl() : string;

    /**
     * @return string
     */
    public function obUrl() : string;

    /**
     * @return string
     */
    public function nowcast() : string;
}
