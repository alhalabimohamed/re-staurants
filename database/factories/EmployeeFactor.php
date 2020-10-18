<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Model;
use Faker\Generator as Faker;

$factory->define(\App\Employee::class, function (Faker $faker) {
    return [


        'reportsTo' =>$faker->company,
        'LastNmae' =>$faker->lastName,
        'FirstName' =>$faker->firstName,
        'Extension' =>$faker->text,
        'Email' =>$faker->email,
        'JobTitl' =>$faker->text,

    ];
});
