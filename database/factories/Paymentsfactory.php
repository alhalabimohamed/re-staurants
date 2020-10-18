<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Model;
use Faker\Generator as Faker;

$factory->define(\App\Payment::class, function (Faker $faker) {
    return [
        'CheckNum' =>$faker->text,
        'PaymentDate' =>$faker->dateTime,
        'Amount' =>$faker->text,

    ];
});
