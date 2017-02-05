<?php declare(strict_types=1);

namespace ApiClients\Client\WeatherUnderground;

interface AuthenticationInterface
{
    public function getOptions(): array;
}
