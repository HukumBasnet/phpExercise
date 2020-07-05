<?php

require '../../../../vendor/autoload.php';
use GuzzleHttp\Client;

$client = new Client(['base_uri' => 'http://jsonplaceholder.typicode.com/']);

$response = $client->request('GET', 'posts/1');
echo $response->getBody() . "\r\n";