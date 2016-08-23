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
use app\User;
use app\Report;


$factory->define(User::class, function (Faker\Generator $faker) {
    return [
        'name' => $faker->name,
        'email' => $faker->safeEmail,
        'remember_token' => str_random(10),
    ];
});
$factory->define(Report::class, function (Faker\Generator $faker) {
    return array(
        'name' => $faker->name,
        'report' => $faker->realText($maxNbChars = 200, $indexSize = 2),
        'coorx' =>  $faker->randomFloat($nbMaxDecimals = 6, $min = -1000.0000000, $max = 1000.0000000),
        'coory' =>  $faker->randomFloat($nbMaxDecimals = 6, $min = -1000.0000000, $max = 1000.0000000),
        'user_id'=> $faker->randomDigitNotNull,
        'subsection_id'=> $faker->randomDigitNotNull,
        'remember_token' => str_random(10),
    ];
});
