<?php declare(strict_types=1);

namespace ApiClients\Client\WeatherUnderground;

use ApiClients\Client\WeatherUnderground\Resource\AstronomyInterface;
use ApiClients\Client\WeatherUnderground\Resource\ConditionInterface;
use ApiClients\Client\WeatherUnderground\Resource\UserInterface;
use React\EventLoop\Factory;
use React\EventLoop\LoopInterface;
use function Clue\React\Block\await;

final class Client
{
    /**
     * @var LoopInterface
     */
    private $loop;

    /**
     * @var AsyncClient
     */
    private $client;

    public function __construct(string $token)
    {
        $this->loop = Factory::create();
        $this->client = AsyncClient::create($this->loop, $token);
    }

    public function astronomy(string $location): AstronomyInterface
    {
        return await(
            $this->client->astronomy($location),
            $this->loop
        );
    }

    public function conditions(string $location): ConditionInterface
    {
        return await(
            $this->client->conditions($location),
            $this->loop
        );
    }
}
