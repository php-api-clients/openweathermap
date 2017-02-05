<?php declare(strict_types=1);

namespace ApiClients\Client\WeatherUnderground\Resource;

use ApiClients\Foundation\Resource\EmptyResourceInterface;

abstract class EmptyCondition implements ConditionInterface, EmptyResourceInterface
{
    /**
     * @return Image
     */
    public function image() : Image
    {
        return null;
    }

    /**
     * @return Location
     */
    public function displayLocation() : Location
    {
        return null;
    }

    /**
     * @return Location
     */
    public function observationLocation() : Location
    {
        return null;
    }

    /**
     * @return array
     */
    public function estimated() : array
    {
        return null;
    }

    /**
     * @return string
     */
    public function stationId() : string
    {
        return null;
    }

    /**
     * @return string
     */
    public function observationTime() : string
    {
        return null;
    }

    /**
     * @return string
     */
    public function observationTimeRfc822() : string
    {
        return null;
    }

    /**
     * @return string
     */
    public function observationEpoch() : string
    {
        return null;
    }

    /**
     * @return string
     */
    public function localTimeRfc822() : string
    {
        return null;
    }

    /**
     * @return string
     */
    public function localEpoch() : string
    {
        return null;
    }

    /**
     * @return string
     */
    public function localTzShort() : string
    {
        return null;
    }

    /**
     * @return string
     */
    public function localTzLong() : string
    {
        return null;
    }

    /**
     * @return string
     */
    public function localTzOffset() : string
    {
        return null;
    }

    /**
     * @return string
     */
    public function weather() : string
    {
        return null;
    }

    /**
     * @return string
     */
    public function temperatureString() : string
    {
        return null;
    }

    /**
     * @return float
     */
    public function tempF() : float
    {
        return null;
    }

    /**
     * @return float
     */
    public function tempC() : float
    {
        return null;
    }

    /**
     * @return string
     */
    public function relativeHumidity() : string
    {
        return null;
    }

    /**
     * @return string
     */
    public function windString() : string
    {
        return null;
    }

    /**
     * @return string
     */
    public function windDir() : string
    {
        return null;
    }

    /**
     * @return string
     */
    public function windDegrees() : string
    {
        return null;
    }

    /**
     * @return string
     */
    public function windMph() : string
    {
        return null;
    }

    /**
     * @return string
     */
    public function windGustMph() : string
    {
        return null;
    }

    /**
     * @return string
     */
    public function windKph() : string
    {
        return null;
    }

    /**
     * @return string
     */
    public function windGustKph() : string
    {
        return null;
    }

    /**
     * @return string
     */
    public function pressureMb() : string
    {
        return null;
    }

    /**
     * @return string
     */
    public function pressureIn() : string
    {
        return null;
    }

    /**
     * @return string
     */
    public function pressureTrend() : string
    {
        return null;
    }

    /**
     * @return string
     */
    public function dewpointString() : string
    {
        return null;
    }

    /**
     * @return int
     */
    public function dewpointF() : int
    {
        return null;
    }

    /**
     * @return int
     */
    public function dewpointC() : int
    {
        return null;
    }

    /**
     * @return string
     */
    public function heatIndexString() : string
    {
        return null;
    }

    /**
     * @return string
     */
    public function heatIndexF() : string
    {
        return null;
    }

    /**
     * @return string
     */
    public function heatIndexC() : string
    {
        return null;
    }

    /**
     * @return string
     */
    public function windchillString() : string
    {
        return null;
    }

    /**
     * @return string
     */
    public function windchillF() : string
    {
        return null;
    }

    /**
     * @return string
     */
    public function windchillC() : string
    {
        return null;
    }

    /**
     * @return string
     */
    public function feelslikeString() : string
    {
        return null;
    }

    /**
     * @return string
     */
    public function feelslikeF() : string
    {
        return null;
    }

    /**
     * @return string
     */
    public function feelslikeC() : string
    {
        return null;
    }

    /**
     * @return string
     */
    public function visibilityMi() : string
    {
        return null;
    }

    /**
     * @return string
     */
    public function visibilityKm() : string
    {
        return null;
    }

    /**
     * @return string
     */
    public function solarradiation() : string
    {
        return null;
    }

    /**
     * @return string
     */
    public function uV() : string
    {
        return null;
    }

    /**
     * @return string
     */
    public function precip1hrString() : string
    {
        return null;
    }

    /**
     * @return string
     */
    public function precip1hrIn() : string
    {
        return null;
    }

    /**
     * @return string
     */
    public function precip1hrMetric() : string
    {
        return null;
    }

    /**
     * @return string
     */
    public function precipTodayString() : string
    {
        return null;
    }

    /**
     * @return string
     */
    public function precipTodayIn() : string
    {
        return null;
    }

    /**
     * @return string
     */
    public function precipTodayMetric() : string
    {
        return null;
    }

    /**
     * @return string
     */
    public function icon() : string
    {
        return null;
    }

    /**
     * @return string
     */
    public function iconUrl() : string
    {
        return null;
    }

    /**
     * @return string
     */
    public function forecastUrl() : string
    {
        return null;
    }

    /**
     * @return string
     */
    public function historyUrl() : string
    {
        return null;
    }

    /**
     * @return string
     */
    public function obUrl() : string
    {
        return null;
    }

    /**
     * @return string
     */
    public function nowcast() : string
    {
        return null;
    }
}
