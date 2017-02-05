<?php declare(strict_types=1);

namespace ApiClients\Client\WeatherUnderground\Resource;

use ApiClients\Foundation\Resource\ResourceInterface;

interface ImageInterface extends ResourceInterface
{
    const HYDRATE_CLASS = 'Image';

    /**
     * @return string
     */
    public function url() : string;

    /**
     * @return string
     */
    public function title() : string;

    /**
     * @return string
     */
    public function link() : string;
}
