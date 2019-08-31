<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Model;
use Faker\Generator as Faker;

$factory->define(App\Profile::class, function (Faker $faker) {
    return [
        'bio' => $faker->paragraph(5),
        'web' => $faker->url,
        'facebook' => 'https://www.facebook.com/' . $faker->unique()->firstName,
        'twitter' => 'https://www.twitter.com/' . $faker->unique()->firstName,
        'github' => 'https://www.github.com/' . $faker->unique()->lastName,
    ];

});
