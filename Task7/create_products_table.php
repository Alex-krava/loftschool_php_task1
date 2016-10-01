<?php
require_once "config.php";

use Illuminate\Database\Capsule\Manager as Capsule;

Capsule::schema()->create('products', function ($table) {
    $table->increments('id')->unique();
    $table->string('product');
    $table->string('price');
    $table->string('characteristics');
    $table->string('category');
});