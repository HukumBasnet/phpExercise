<?php

require '../../../../vendor/autoload.php';
use GuzzleHttp\Client;

$client = new Client(['base_uri' => 'http://jsonplaceholder.typicode.com/']);

$response = $client->request('GET', 'users/1');

$body = $response->getBody();

$user_string = $body->getContents();

$users = json_decode($user_string);

print_r($users);
print_r($users->address->geo->lat);

$code = $response->getStatusCode(); // 200
$reason = $response->getReasonPhrase(); // OK

echo "$code -> $reason \r\n";

if ( 200 != $code )
    echo "sorry \r\n";

$headers = $response->getHeaders();
//print_r($headers);

foreach ($headers as $header => $value) {
    echo "$header: " . implode(',' , $value) . "\r\n";
}

if ($response->hasHeader('Content-length'))
    echo "Content exist \r\n";