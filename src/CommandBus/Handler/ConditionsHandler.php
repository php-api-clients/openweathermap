<?php declare(strict_types=1);

namespace ApiClients\Client\WeatherUnderground\CommandBus\Handler;

use ApiClients\Client\WeatherUnderground\CommandBus\Command\ConditionsCommand;
use ApiClients\Client\WeatherUnderground\Resource\ConditionInterface;
use ApiClients\Tools\Services\Client\FetchAndHydrateService;
use React\Promise\PromiseInterface;
use function React\Promise\resolve;
use function WyriHaximus\React\futureFunctionPromise;

final class ConditionsHandler
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
     * @param ConditionsCommand $command
     * @return PromiseInterface
     */
    public function handle(ConditionsCommand $command): PromiseInterface
    {
        return $this->service->fetch(
            'conditions/q/' . $command->getLocation() . '.json',
            'current_observation',
            ConditionInterface::HYDRATE_CLASS
        );
    }
}
