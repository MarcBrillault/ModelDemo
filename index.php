<?php

require_once __DIR__ . '/vendor/autoload.php';

$object = new \ModelDemo\Object();

$object->id       = 3;
$object->prefixed = 'MyValue';

echo $object->id . PHP_EOL;
echo $object->prefixed . PHP_EOL;