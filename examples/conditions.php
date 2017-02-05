<?php

use ApiClients\Client\WeatherUnderground\Client;
use function ApiClients\Foundation\resource_pretty_print;

require dirname(__DIR__) . DIRECTORY_SEPARATOR . 'vendor/autoload.php';

$client = new Client(require 'resolve_token.php');

resource_pretty_print($client->conditions('Broek_op_Langedijk'));
