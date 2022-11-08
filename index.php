<?php

use InfluxDB2\Client;
use InfluxDB2\Model\WritePrecision;
use InfluxDB2\Point;

require "vendor/autoload.php";

$org = 'nagadef';
$bucket = 'tp_iot';

$client = new Client([
    "url" => "http://localhost:8086",
    "token" => "3T4fxytcO1QWuaBw9EDtjE5kwme3ZgJfLYhqbYzigXIwrH0Vi6DwQqvRFOlqp8hgfzEbDookGg_GpJy_xIgnmg==",
]);

$writeApi = $client->createWriteApi();

$data = "mem,host=host1 used_percent=23.43234543";

$writeApi->write($data, WritePrecision::S, $bucket, $org);

$point = Point::measurement('mem')
    ->addTag('host', 'host1')
    ->addField('used_percent', 23.43234543)
    ->time(microtime(true));

$writeApi->write($point, WritePrecision::S, $bucket, $org);

$dataArray = ['name' => 'cpu',
    'tags' => ['host' => 'server_nl', 'region' => 'us'],
    'fields' => ['internal' => 5, 'external' => 6],
    'time' => microtime(true)];

$writeApi->write($dataArray, WritePrecision::S, $bucket, $org);



