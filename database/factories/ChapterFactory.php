<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Chapter;
use Faker\Generator as Faker;

$factory->define(Chapter::class, function (Faker $faker) {
    return [
        'path' => $faker->numerify('#.#.#'),
        'parent_id' => Chapter::inRandomOrder()->limit(1)->first()->id,
    ];
});
