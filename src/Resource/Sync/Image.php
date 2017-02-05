<?php declare(strict_types=1);

namespace ApiClients\Client\WeatherUnderground\Resource\Sync;

use ApiClients\Foundation\Hydrator\CommandBus\Command\BuildAsyncFromSyncCommand;
use ApiClients\Client\WeatherUnderground\Resource\Image as BaseImage;
use ApiClients\Client\WeatherUnderground\Resource\ImageInterface;

class Image extends BaseImage
{
    public function refresh() : Image
    {
        return $this->wait($this->handleCommand(
            new BuildAsyncFromSyncCommand(self::HYDRATE_CLASS, $this)
        )->then(function (ImageInterface $image) {
            return $image->refresh();
        }));
    }
}
