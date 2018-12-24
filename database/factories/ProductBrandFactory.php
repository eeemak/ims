<?php

use Faker\Generator as Faker;

$factory->define(App\Model\ProductBrand::class, function (Faker $faker) {
    return [

        'name' => $faker->name,
        'short_name' => $faker->name,
        'description' => $faker->paragraph,
        'creator_user_id' => ,
        'company_id' => ,
    ];
});

