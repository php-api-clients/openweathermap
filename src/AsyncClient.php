<?php declare(strict_types=1);

namespace ApiClients\Client\WeatherUnderground;

use ApiClients\Client\WeatherUnderground\CommandBus\Command;
use ApiClients\Foundation\ClientInterface;
use ApiClients\Foundation\Factory;
use React\EventLoop\LoopInterface;
use React\Promise\PromiseInterface;
use Rx\Observable;
use function ApiClients\Tools\Rx\unwrapObservableFromPromise;
use function React\Promise\resolve;

final class AsyncClient
{
    /**
     * @var ClientInterface
     */
    private $client;

    /**
     * @param LoopInterface $loop
     * @param string $token
     * @param array $options
     * @return AsyncClient
     */
    public static function create(
        LoopInterface $loop,
        string $token,
        array $options = []
    ): self {
        $options = ApiSettings::getOptions($token, $options, 'Async');
        $client = Factory::create($loop, $options);
        return new self($client);
    }

    /**
     * @param ClientInterface $client
     */
    private function __construct(ClientInterface $client)
    {
        $this->client = $client;
    }

    public function conditions(string $location): PromiseInterface
    {
        return $this->client->handle(new Command\ConditionsCommand($location));
    }
}
