<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Model;
use App\Equipment;
use Faker\Generator as Faker;

$factory->define(Equipment::class, function (Faker $faker) {
    $randomNumber = rand(1,100);
    $cover = "https://picsum.photos/id/{$randomNumber}/200/300";
    return [
        'name' => $faker->sentence(3),
        'description' => $faker->sentence(50),
        'cover' => $cover,

    ];
});
