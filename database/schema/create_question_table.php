<?php

require_once __DIR__ . "/../../vendor/autoload.php";
require_once __DIR__ ."/../../config/db.php";

use Illuminate\Database\Capsule\Manager as Capsule;

Capsule::schema()->create('questions', function ($table) {
    $table->id();
    $table->string('title');
    $table->string('question');
    $table->string('option1');
    $table->string('option2');
    $table->string('img');
    $table->timestamps();
});