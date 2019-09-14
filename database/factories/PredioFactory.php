<?php

/* @var $factory \Illuminate\Database\Eloquent\Factory */

use App\Model;
use Faker\Generator as Faker;

$factory->define(App\Models\Predio::class, function (Faker $faker) {
    return [
        'nombre_predio' => $faker->citySuffix,
        'direccion' => $faker->address,
        'territorio' => [
            "ancho" => $faker->randomDigitNotNull,
            "alto" => $faker->randomDigitNotNull,
            "poblacion" => $faker->randomDigitNotNull 
        ],
        'municipio_id' => function (){
            return factory(App\Models\Municipio::class)->create()->id;
        }
    ];
});
