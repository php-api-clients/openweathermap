<?php declare(strict_types=1);

namespace ApiClients\Client\WeatherUnderground\CommandBus\Handler;

use ApiClients\Client\WeatherUnderground\CommandBus\Command\AstronomyCommand;
use ApiClients\Client\WeatherUnderground\Resource\AstronomyInterface;
use ApiClients\Client\WeatherUnderground\Resource\ConditionInterface;
use ApiClients\Tools\Services\Client\FetchAndHydrateService;
use React\Promise\PromiseInterface;

final class AstronomyHandler
{
    /**
     * @var FetchAndHydrateService
     */
    private $service;

    /**
     * @param FetchAndHydrateService $service
     */
    public function __construct(FetchAndHydrateService $service)
    {
        $this->service = $service;
    }

    /**
     * Fetch the given repository and hydrate it
     *
     * @param AstronomyCommand $command
     * @return PromiseInterface
     */
    public function handle(AstronomyCommand $command): PromiseInterface
    {
        return $this->service->fetch(
            'astronomy/q/' . $command->getLocation() . '.json',
            '',
            AstronomyInterface::HYDRATE_CLASS
        );
    }
}
