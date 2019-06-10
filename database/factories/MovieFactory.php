<?php

/* @var $factory \Illuminate\Database\Eloquent\Factory */

use App\Movie;
use Faker\Generator as Faker;

$factory->define(Movie::class, function (Faker $faker) {
    $slump = mt_rand(1,6);
    return [
        'title' => $faker->sentence($nbWords = $slump, $variableNbWords = true),
        'year' => $faker->year(),
        'director' => $faker->name,
    ];
});
