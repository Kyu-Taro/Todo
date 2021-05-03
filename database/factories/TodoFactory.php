<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Models\Todo;
use Faker\Generator as Faker;

$factory->define(Todo::class, function (Faker $faker) {
    return [
        'user_id' => $faker->numberBetween($min = 1, $max = 1),
        'content' => $faker->realText(10)
    ];
});
