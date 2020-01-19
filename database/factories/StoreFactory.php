<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Store;
use Faker\Generator as Faker;


$factory->define(Store::class, function (Faker $faker) {
    return [
        'name'=> $faker->name,
        'description'=>$faker->sentence(5),
        'phone'=>$faker->phoneNumber,
        'mobile_phone'=>$faker->phoneNumber,
        'slug'=>$faker->slug,
    ];
});
