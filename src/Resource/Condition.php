<?php declare(strict_types=1);

namespace ApiClients\Client\WeatherUnderground\Resource;

use ApiClients\Foundation\Hydrator\Annotation\EmptyResource;
use ApiClients\Foundation\Hydrator\Annotation\Nested;
use ApiClients\Foundation\Resource\AbstractResource;

/**
 * @Nested(
 *     image="Image",
 *     display_location="Location",
 *     observation_location="Location"
 * )
 * @EmptyResource("EmptyCondition")
 */
abstract class Condition extends AbstractResource implements ConditionInterface
{
    /**
     * @var Image
     */
    protected $image;

    /**
     * @var Location
     */
    protected $display_location;

    /**
     * @var Location
     */
    protected $observation_location;

    /**
     * @var array
     */
    protected $estimated;

    /**
     * @var string
     */
    protected $station_id;

    /**
     * @var string
     */
    protected $observation_time;

    /**
     * @var string
     */
    protected $observation_time_rfc822;

    /**
     * @var string
     */
    protected $observation_epoch;

    /**
     * @var string
     */
    protected $local_time_rfc822;

    /**
     * @var string
     */
    protected $local_epoch;

    /**
     * @var string
     */
    protected $local_tz_short;

    /**
     * @var string
     */
    protected $local_tz_long;

    /**
     * @var string
     */
    protected $local_tz_offset;

    /**
     * @var string
     */
    protected $weather;

    /**
     * @var string
     */
    protected $temperature_string;

    /**
     * @var float
     */
    protected $temp_f;

    /**
     * @var float
     */
    protected $temp_c;

    /**
     * @var string
     */
    protected $relative_humidity;

    /**
     * @var string
     */
    protected $wind_string;

    /**
     * @var string
     */
    protected $wind_dir;

    /**
     * @var string
     */
    protected $wind_degrees;

    /**
     * @var string
     */
    protected $wind_mph;

    /**
     * @var string
     */
    protected $wind_gust_mph;

    /**
     * @var string
     */
    protected $wind_kph;

    /**
     * @var string
     */
    protected $wind_gust_kph;

    /**
     * @var string
     */
    protected $pressure_mb;

    /**
     * @var string
     */
    protected $pressure_in;

    /**
     * @var string
     */
    protected $pressure_trend;

    /**
     * @var string
     */
    protected $dewpoint_string;

    /**
     * @var int
     */
    protected $dewpoint_f;

    /**
     * @var int
     */
    protected $dewpoint_c;

    /**
     * @var string
     */
    protected $heat_index_string;

    /**
     * @var string
     */
    protected $heat_index_f;

    /**
     * @var string
     */
    protected $heat_index_c;

    /**
     * @var string
     */
    protected $windchill_string;

    /**
     * @var string
     */
    protected $windchill_f;

    /**
     * @var string
     */
    protected $windchill_c;

    /**
     * @var string
     */
    protected $feelslike_string;

    /**
     * @var string
     */
    protected $feelslike_f;

    /**
     * @var string
     */
    protected $feelslike_c;

    /**
     * @var string
     */
    protected $visibility_mi;

    /**
     * @var string
     */
    protected $visibility_km;

    /**
     * @var string
     */
    protected $solarradiation;

    /**
     * @var string
     */
    protected $UV;

    /**
     * @var string
     */
    protected $precip_1hr_string;

    /**
     * @var string
     */
    protected $precip_1hr_in;

    /**
     * @var string
     */
    protected $precip_1hr_metric;

    /**
     * @var string
     */
    protected $precip_today_string;

    /**
     * @var string
     */
    protected $precip_today_in;

    /**
     * @var string
     */
    protected $precip_today_metric;

    /**
     * @var string
     */
    protected $icon;

    /**
     * @var string
     */
    protected $icon_url;

    /**
     * @var string
     */
    protected $forecast_url;

    /**
     * @var string
     */
    protected $history_url;

    /**
     * @var string
     */
    protected $ob_url;

    /**
     * @var string
     */
    protected $nowcast;

    /**
     * @return Image
     */
    public function image() : Image
    {
        return $this->image;
    }

    /**
     * @return Location
     */
    public function displayLocation() : Location
    {
        return $this->display_location;
    }

    /**
     * @return Location
     */
    public function observationLocation() : Location
    {
        return $this->observation_location;
    }

    /**
     * @return array
     */
    public function estimated() : array
    {
        return $this->estimated;
    }

    /**
     * @return string
     */
    public function stationId() : string
    {
        return $this->station_id;
    }

    /**
     * @return string
     */
    public function observationTime() : string
    {
        return $this->observation_time;
    }

    /**
     * @return string
     */
    public function observationTimeRfc822() : string
    {
        return $this->observation_time_rfc822;
    }

    /**
     * @return string
     */
    public function observationEpoch() : string
    {
        return $this->observation_epoch;
    }

    /**
     * @return string
     */
    public function localTimeRfc822() : string
    {
        return $this->local_time_rfc822;
    }

    /**
     * @return string
     */
    public function localEpoch() : string
    {
        return $this->local_epoch;
    }

    /**
     * @return string
     */
    public function localTzShort() : string
    {
        return $this->local_tz_short;
    }

    /**
     * @return string
     */
    public function localTzLong() : string
    {
        return $this->local_tz_long;
    }

    /**
     * @return string
     */
    public function localTzOffset() : string
    {
        return $this->local_tz_offset;
    }

    /**
     * @return string
     */
    public function weather() : string
    {
        return $this->weather;
    }

    /**
     * @return string
     */
    public function temperatureString() : string
    {
        return $this->temperature_string;
    }

    /**
     * @return float
     */
    public function tempF() : float
    {
        return $this->temp_f;
    }

    /**
     * @return float
     */
    public function tempC() : float
    {
        return $this->temp_c;
    }

    /**
     * @return string
     */
    public function relativeHumidity() : string
    {
        return $this->relative_humidity;
    }

    /**
     * @return string
     */
    public function windString() : string
    {
        return $this->wind_string;
    }

    /**
     * @return string
     */
    public function windDir() : string
    {
        return $this->wind_dir;
    }

    /**
     * @return string
     */
    public function windDegrees() : string
    {
        return $this->wind_degrees;
    }

    /**
     * @return string
     */
    public function windMph() : string
    {
        return $this->wind_mph;
    }

    /**
     * @return string
     */
    public function windGustMph() : string
    {
        return $this->wind_gust_mph;
    }

    /**
     * @return string
     */
    public function windKph() : string
    {
        return $this->wind_kph;
    }

    /**
     * @return string
     */
    public function windGustKph() : string
    {
        return $this->wind_gust_kph;
    }

    /**
     * @return string
     */
    public function pressureMb() : string
    {
        return $this->pressure_mb;
    }

    /**
     * @return string
     */
    public function pressureIn() : string
    {
        return $this->pressure_in;
    }

    /**
     * @return string
     */
    public function pressureTrend() : string
    {
        return $this->pressure_trend;
    }

    /**
     * @return string
     */
    public function dewpointString() : string
    {
        return $this->dewpoint_string;
    }

    /**
     * @return int
     */
    public function dewpointF() : int
    {
        return $this->dewpoint_f;
    }

    /**
     * @return int
     */
    public function dewpointC() : int
    {
        return $this->dewpoint_c;
    }

    /**
     * @return string
     */
    public function heatIndexString() : string
    {
        return $this->heat_index_string;
    }

    /**
     * @return string
     */
    public function heatIndexF() : string
    {
        return $this->heat_index_f;
    }

    /**
     * @return string
     */
    public function heatIndexC() : string
    {
        return $this->heat_index_c;
    }

    /**
     * @return string
     */
    public function windchillString() : string
    {
        return $this->windchill_string;
    }

    /**
     * @return string
     */
    public function windchillF() : string
    {
        return $this->windchill_f;
    }

    /**
     * @return string
     */
    public function windchillC() : string
    {
        return $this->windchill_c;
    }

    /**
     * @return string
     */
    public function feelslikeString() : string
    {
        return $this->feelslike_string;
    }

    /**
     * @return string
     */
    public function feelslikeF() : string
    {
        return $this->feelslike_f;
    }

    /**
     * @return string
     */
    public function feelslikeC() : string
    {
        return $this->feelslike_c;
    }

    /**
     * @return string
     */
    public function visibilityMi() : string
    {
        return $this->visibility_mi;
    }

    /**
     * @return string
     */
    public function visibilityKm() : string
    {
        return $this->visibility_km;
    }

    /**
     * @return string
     */
    public function solarradiation() : string
    {
        return $this->solarradiation;
    }

    /**
     * @return string
     */
    public function uV() : string
    {
        return $this->UV;
    }

    /**
     * @return string
     */
    public function precip1hrString() : string
    {
        return $this->precip_1hr_string;
    }

    /**
     * @return string
     */
    public function precip1hrIn() : string
    {
        return $this->precip_1hr_in;
    }

    /**
     * @return string
     */
    public function precip1hrMetric() : string
    {
        return $this->precip_1hr_metric;
    }

    /**
     * @return string
     */
    public function precipTodayString() : string
    {
        return $this->precip_today_string;
    }

    /**
     * @return string
     */
    public function precipTodayIn() : string
    {
        return $this->precip_today_in;
    }

    /**
     * @return string
     */
    public function precipTodayMetric() : string
    {
        return $this->precip_today_metric;
    }

    /**
     * @return string
     */
    public function icon() : string
    {
        return $this->icon;
    }

    /**
     * @return string
     */
    public function iconUrl() : string
    {
        return $this->icon_url;
    }

    /**
     * @return string
     */
    public function forecastUrl() : string
    {
        return $this->forecast_url;
    }

    /**
     * @return string
     */
    public function historyUrl() : string
    {
        return $this->history_url;
    }

    /**
     * @return string
     */
    public function obUrl() : string
    {
        return $this->ob_url;
    }

    /**
     * @return string
     */
    public function nowcast() : string
    {
        return $this->nowcast;
    }
}
