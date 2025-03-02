<?php

require_once __DIR__ . "/../../vendor/autoload.php";
require_once __DIR__ ."/../../config/db.php";

use Illuminate\Database\Capsule\Manager as Capsule;

Capsule::schema()->create('users', function ($table) {
    $table->increments('id');
    $table->string('name')->unique();
    $table->enum('score',range(0,10))->default(0);
    $table->timestamps();
});