<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use Faker\Generator as Faker;
use Illuminate\Support\Str;

$factory->define(App\Post::class, function (Faker $faker) {
    $title = $faker->word.' '.$faker->word;
    return [
        'title' => $title,
        'content' => $faker->text,
    ];
});
