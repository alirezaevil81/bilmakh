<?php

require_once __DIR__ . "/../vendor/autoload.php";

use Alireza\Bilmakh\core\Router;

foreach (glob(__DIR__ . '/../config/*.php') as $file) {
    require_once $file;
}

foreach (glob(__DIR__ . '/../routes/*.php') as $file) {
    require_once $file;
}

Router::dispatch();