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

/** @var \Illuminate\Database\Eloquent\Factory $factory */
$factory->define(App\User::class, function (Faker\Generator $faker) {
    static $password;

    return [
        'name' => $faker->name,
        'email' => $faker->unique()->safeEmail,
        'password' => $password ?: $password = bcrypt('secret'),
        'remember_token' => str_random(10),
    ];
});

$factory->define(App\cliente::class, function (Faker\Generator $faker) {
    return [
        //'nClieCod' => $faker->name,
        'cClieTdoc' => $faker->text(8),
        'cClieNdoc' => $faker->text(8),
        'cClieDesc' => $faker->text(30),
        'cClieDirec' => $faker->text(30),
        'cClieObs' => $faker->text(50)
    ];
});