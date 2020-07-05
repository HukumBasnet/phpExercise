<?php

require '../../../../vendor/autoload.php';
use GuzzleHttp\Client;
use GuzzleHttp\Psr7\Request;

$client = new Client(['base_uri' => 'http://jsonplaceholder.typicode.com/']);

