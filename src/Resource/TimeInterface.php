<?php declare(strict_types=1);

namespace ApiClients\Client\WeatherUnderground\Resource;

use ApiClients\Foundation\Resource\ResourceInterface;

interface TimeInterface extends ResourceInterface
{
    const HYDRATE_CLASS = 'Time';

    /**
     * @return string
     */
    public function hour() : string;

    /**
     * @return string
     */
    public function minute() : string;
}
