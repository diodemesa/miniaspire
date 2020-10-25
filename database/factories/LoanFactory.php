<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Loan;
use Faker\Generator as Faker;

$factory->define(Loan::class, function (Faker $faker) {
    return [
        'terms' => $faker->numberBetween($min = 1, $max = 100),
        'amount_reqd' => $faker->randomFloat($nbMaxDecimals = 5, $min = 0, $max = 10000),
        'user_id' => factory('App\User')->create()->id,
    ];
});