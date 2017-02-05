<?php declare(strict_types=1);

namespace ApiClients\Client\WeatherUnderground\Resource\Async;

use ApiClients\Client\WeatherUnderground\Resource\Image as BaseImage;

class Image extends BaseImage
{
    public function refresh() : Image
    {
        throw new \Exception('TODO: create refresh method!');
    }
}
