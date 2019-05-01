<?php

/* @var $factory \Illuminate\Database\Eloquent\Factory */

use App\Model;
use Faker\Generator as Faker;

$factory->define(App\Firstapi::class, function (Faker $faker) {
    return [
        'name' => $faker->word,
        'title' => $faker->sentence,
        'descr' => $faker->paragraph
    ];
});
