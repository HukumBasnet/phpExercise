<?php
require '../../../../vendor/autoload.php';
use GuzzleHttp\Client;

$client = new Client(['base_uri' => 'http://jsonplaceholder.typicode.com/']);

$response = $client->request('GET', 'posts/2');
$body = $response->getBody();

echo $body->getSize() . "\r\n";

echo $body->read(40) . "\r\n";


