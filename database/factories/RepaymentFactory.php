<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Loan;
use App\Repayment;
use Faker\Generator as Faker;

$factory->define(Repayment::class, function (Faker $faker) {
	$loan = Loan::all()->first();

    return [
        'payer' => $loan->user_id,
        'loan_id' => $loan->loan_id,
        'payment_date' => $faker->dateTimeBetween($startDate = '-10 years', $endDate = 'now', $timezone = null),
        'amount' => $loan->amount_reqd/$loan->terms
    ];
});