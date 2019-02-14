<?php

use Faker\Generator as Faker;

$factory->define(App\Presentacion::class, function (Faker $faker) {
    return [
        'denominacion' => $faker->sentence,
    ];
});
