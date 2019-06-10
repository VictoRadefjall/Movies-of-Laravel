<?php

/* @var $factory \Illuminate\Database\Eloquent\Factory */

use App\Actor;
use Faker\Generator as Faker;

$factory->define(Actor::class, function (Faker $faker) {
    $slump = mt_rand(1,6);
    return [
        'name' => $faker->sentence($nbWords = $slump, $variableNbWords = true),
        'birthday' => $faker->date(),
        'country' => $faker->country,
    ];
});
