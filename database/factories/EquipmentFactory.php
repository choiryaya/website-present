<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Model;
use App\Equipment;
use Faker\Generator as Faker;

$factory->define(Equipment::class, function (Faker $faker) {
    return [
        'name' => $faker->sentence(3),
        'description' => $faker->sentence(4),
        'photos' => $faker->sentence(4),
    ];
});
