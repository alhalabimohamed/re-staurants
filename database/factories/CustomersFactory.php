<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Model;
use Faker\Generator as Faker;

$factory->define(\App\Customers::class, function (Faker $faker) {
    return [
        'Name'=>$faker->name(),
        'LastName' => $faker->lastName,
        'FirstName' => $faker->firstName(),
        'Phone' => $faker->phoneNumber,
        'Addewss1' => $faker->address,
        'Addewss2' => $faker->address,
        'City' => $faker->city,
        'State' => $faker->state,
        'Country' => $faker->century,
        'CreditLimit' => $faker->creditCardNumber

    ];
});
