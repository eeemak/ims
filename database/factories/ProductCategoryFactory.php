<?php

use Faker\Generator as Faker;

$factory->define(App\Model\ProductCategory::class, function (Faker $faker) {
    return [
       'name' => $faker->name,
        'short_name' => $faker->name,
        'description' => $faker->paragraph,  
        'parent_id' => ,
        'creator_user_id' => ,
        'company_id' => ,
    ];
});
