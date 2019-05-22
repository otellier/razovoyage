<?php

use Faker\Generator as Faker;

$factory->define(App\Voyage::class, function (Faker $faker) {
    return [
        'libelle' => $faker->name,
        'pays' => $faker->country,
        'ville' => $faker->city,
        'date_debut' => $faker->dateTimeThisYear('now', null),
        'date_fin' => $faker->dateTimeInInterval('1 years', '+ 5 days', null),
        'description' => $faker->sentence,
        'photo' => $faker->url,
        'cout' => $faker->numberBetween(1000, 9000),
        'disponibilite' => $faker->boolean
    ];
});
