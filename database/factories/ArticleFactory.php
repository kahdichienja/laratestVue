<?php

use Faker\Generator as Faker;

$factory->define(App\Article::class, function (Faker $faker) {
    return [
        'username' => $faker->name(),
        'title' => $faker->text(50),
        'body' => $faker->text(250)
    ];
});
