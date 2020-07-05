<?php
require '../../../../vendor/autoload.php';
use GuzzleHttp\Psr7;

$my_stream = Psr7\stream_for('Welcome to Pluralsight');

echo $my_stream . "\r\n";

echo $my_stream->getSize() . "\r\n";

echo $my_stream->read(8) . "\r\n";

echo $my_stream->eof() . "\r\n";

$my_stream->rewind();

echo $my_stream->read(8) . "\r\n";

echo $my_stream->isReadable() . "\r\n";
echo $my_stream->isWritable() . "\r\n";
echo $my_stream->isSeekable() . "\r\n";