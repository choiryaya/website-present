<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Model;
use App\RFID;
use Faker\Generator as Faker;

$factory->define(RFID::class, function (Faker $faker) {
    return [
        'name' => $faker->sentence(3),
        'school' => $faker->sentence(4),
    ];
});
