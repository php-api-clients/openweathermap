<?php declare(strict_types=1);

namespace ApiClients\Client\WeatherUnderground\Resource\Sync;

use ApiClients\Foundation\Hydrator\CommandBus\Command\BuildAsyncFromSyncCommand;
use ApiClients\Client\WeatherUnderground\Resource\Response as BaseResponse;
use ApiClients\Client\WeatherUnderground\Resource\ResponseInterface;

class Response extends BaseResponse
{
    public function refresh() : Response
    {
        return $this->wait($this->handleCommand(
            new BuildAsyncFromSyncCommand(self::HYDRATE_CLASS, $this)
        )->then(function (ResponseInterface $response) {
            return $response->refresh();
        }));
    }
}
