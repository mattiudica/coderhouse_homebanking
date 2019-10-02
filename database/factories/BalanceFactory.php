<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Balance;
use Faker\Generator as Faker;

$factory->define(Balance::class, function (Faker $faker) {
    return [
       
        'descripcion' => function(){return factory(\App\Service::class)->create()->descripcion;},
        'importe' => $faker->numberBetween($min = 10000, $max = 20000),
        'comprobante' => $faker->swiftBicNumber,
    ];
});
