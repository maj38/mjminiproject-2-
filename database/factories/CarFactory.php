<?php

use Faker\Generator as Faker;


$factory->define(App\Car::class, function (Faker $faker) {
    return [
        'make' => $faker->randomElement($array = array ('ford','honda','toyota')),
        'model' => $faker->randomElement($array = array ('sedan','civic','corolla')),
        'year' => $faker->numberBetween($min=1990, $max=2020),

    ];
});
