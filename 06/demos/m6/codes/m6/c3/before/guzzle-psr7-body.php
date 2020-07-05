<?php
require '../../../../vendor/autoload.php';
use GuzzleHttp\Client;

$client = new Client(['base_uri' => 'http://jsonplaceholder.typicode.com/']);

$response = $client->request('GET', 'posts/2');
//echo $response->getBody();

echo $response->getStatusCode() . "\n\r"; // 200
echo $response->getReasonPhrase() . "\n\r"; // OK
