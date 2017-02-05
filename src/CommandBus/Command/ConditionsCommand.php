<?php declare(strict_types=1);

namespace ApiClients\Client\WeatherUnderground\CommandBus\Command;

use WyriHaximus\Tactician\CommandHandler\Annotations\Handler;

/**
 * @Handler("ApiClients\Client\WeatherUnderground\CommandBus\Handler\ConditionsHandler")
 */
final class ConditionsCommand
{
    /**
     * @var string
     */
    private $location;

    /**
     * @param string $location
     */
    public function __construct(string $location = '')
    {
        $this->location = $location;
    }

    /**
     * @return string
     */
    public function getLocation(): string
    {
        return $this->location;
    }
}
