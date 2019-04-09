<?php

use Faker\Generator as Faker;

$factory->define(Model::class, function (Faker $faker) {
    return [
        'make' => $faker->randomElement(['ford' ,'honda', 'toyota']),
        'model' => $faker->company,
        'year' => $faker->year,
    ];
});
