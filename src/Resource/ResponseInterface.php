<?php declare(strict_types=1);

namespace ApiClients\Client\WeatherUnderground\Resource;

use ApiClients\Foundation\Resource\ResourceInterface;

interface ResponseInterface extends ResourceInterface
{
    const HYDRATE_CLASS = 'Response';

    /**
     * @return string
     */
    public function version() : string;

    /**
     * @return string
     */
    public function termsofService() : string;

    /**
     * @return array
     */
    public function features() : array;
}
