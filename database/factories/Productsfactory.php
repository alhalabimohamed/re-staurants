<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Model;
use Faker\Generator as Faker;

$factory->define(\App\Product::class, function (Faker $faker) {
    return [
        'ProductlineID' =>$faker->text,

        'Scale' =>$faker->text(),
        'Vendor' =>$faker->text(),
        'PdtDescrption' =>$faker->text(),
        'BuyPrice' =>$faker->numberBetween(),
        'MSRP' =>$faker->title,
    ];
});
