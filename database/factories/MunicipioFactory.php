<?php

/* @var $factory \Illuminate\Database\Eloquent\Factory */

use App\Model;
use Faker\Generator as Faker;

$factory->define(App\Models\Municipio::class, function (Faker $faker) {
    return [
        'nombre_municipio' => $faker->city,
        'estado_municipal' => rand(0,1),
        'departamento_id' => function (){
            return factory(App\Models\Departamento::class)->create()->id;
        }  
    ];
});
