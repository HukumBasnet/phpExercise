<?php

require '../../../../vendor/autoload.php';
use GuzzleHttp\Client;
use GuzzleHttp\Exception\RequestException;
use GuzzleHttp\Psr7\Response;

$client = new Client(['base_uri' => 'http://jsonplaceholder.typicode.com/']);

$users_promise = $client->getAsync('users');

$users_promise->then(
    function (Response $res) {
        echo $res->getStatusCode() . "\r\n";
        $users = $res->getBody();
    },
    function (RequestException $e) {
        echo $e->getMessage();
    }
);

$users_promise->wait();