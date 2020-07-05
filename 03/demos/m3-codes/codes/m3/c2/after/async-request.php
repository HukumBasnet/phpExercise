<?php

require '../../../../vendor/autoload.php';
use GuzzleHttp\Client;
use GuzzleHttp\Exception\RequestException;
use GuzzleHttp\Psr7\Request;
use GuzzleHttp\Psr7\Response;

$client = new Client(['base_uri' => 'http://jsonplaceholder.typicode.com/']);

$promise = $client->requestAsync('GET', 'posts/1');

$promise = $client->getAsync('posts/2');

$request = new Request('GET', 'posts/3');
$promise = $client->sendAsync($request);

$promise->then(
    function (Response $res) {
        echo $res->getStatusCode() . "\r\n";
        echo $res->getBody();
    },
    function (RequestException $e) {
        echo $e->getMessage();
    }
);

$promise->wait();