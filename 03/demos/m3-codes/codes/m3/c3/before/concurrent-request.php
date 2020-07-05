<?php

require '../../../../vendor/autoload.php';
use GuzzleHttp\Client;
use GuzzleHttp\Exception\RequestException;
use GuzzleHttp\Psr7\Request;
use GuzzleHttp\Psr7\Response;

$client = new Client(['base_uri' => 'http://jsonplaceholder.typicode.com/']);

$promise = $client->getAsync('posts/1');
