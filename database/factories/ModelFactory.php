<?php

/*
|--------------------------------------------------------------------------
| Model Factories
|--------------------------------------------------------------------------
|
| Here you may define all of your model factories. Model factories give
| you a convenient way to create models for testing and seeding your
| database. Just tell the factory how a default model should look.
|
*/

$factory->define(App\User::class, function (Faker\Generator $faker) {
    $array = [
        'name' => $faker->name,
        'email' => $faker->email,
        'password' => bcrypt('estiven01'),
        'type' => 'member'
    ];
    return $array;
});

$factory->define(App\Category::class, function (Faker\Generator $faker) {
    $array = [
        'name' => $faker->name
    ];
    return $array;
});

$factory->define(App\Tag::class, function (Faker\Generator $faker) {
    $array = [
        'name' => $faker->name
    ];
    return $array;
});