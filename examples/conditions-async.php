<?php

use ApiClients\Client\WeatherUnderground\AsyncClient;
use ApiClients\Client\WeatherUnderground\Resource\ConditionInterface;
use React\EventLoop\Factory;
use function ApiClients\Foundation\resource_pretty_print;

require dirname(__DIR__) . DIRECTORY_SEPARATOR . 'vendor/autoload.php';

$loop = Factory::create();
$client = AsyncClient::create($loop, require 'resolve_token.php');

$client->conditions('Broek_op_Langedijk')->done(function (ConditionInterface $user) {
    resource_pretty_print($user);
});

$loop->run();
