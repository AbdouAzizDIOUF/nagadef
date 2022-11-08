<?php

use config\Config;
use InfluxDB2\Client;
use InfluxDB2\Model\WritePrecision;
use InfluxDB2\Point;

require "vendor/autoload.php";



$org = Config::ORG;
$bucket = Config::BUCKET;

$client = new Client([
    "url" => CONFIG::URL, //"http://localhost:8086",
    "token" => CONFIG::TOKEN,// "3T4fxytcO1QWuaBw9EDtjE5kwme3ZgJfLYhqbYzigXIwrH0Vi6DwQqvRFOlqp8hgfzEbDookGg_GpJy_xIgnmg==",
]);

dd("bonjour");

$writeApi = $client->createWriteApi();

$data = "mem,host=host1 used_percent=23.43234543";

$writeApi->write($data, WritePrecision::S, Config::BUCKET, Config::ORG);

$point = Point::measurement('mem')
    ->addTag('host', 'host1')
    ->addField('used_percent', 23.43234543)
    ->time(microtime(true));

$writeApi->write($point, WritePrecision::S, Config::BUCKET, Config::ORG);

$dataArray = ['name' => 'cpu',
    'tags' => ['host' => 'server_nl', 'region' => 'us'],
    'fields' => ['internal' => 5, 'external' => 6, 'temperature' => 10, 'ahmed' => 20, 'Dareine' => 20],
    'time' => microtime(true)];

$writeApi->write($dataArray, WritePrecision::S, Config::BUCKET, Config::ORG);



