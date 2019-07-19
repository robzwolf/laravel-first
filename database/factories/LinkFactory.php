<?php

/* @var $factory Factory */

use App\Link;
use Faker\Generator as Faker;
use Illuminate\Database\Eloquent\Factory;

$factory->define(Link::class, function (Faker $faker) {
    return [
        'title' => substr($faker->sentence(2), 0, -1),
        'url' => $faker->url,
        'description' => $faker->paragraph
    ];
});
