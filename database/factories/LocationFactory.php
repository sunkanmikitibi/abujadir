<?php

use Faker\Generator as Faker;

$factory->define(App\Location::class, function (Faker $faker) {
    return [
       'name'=>$faker->text(10),
    ];
});
