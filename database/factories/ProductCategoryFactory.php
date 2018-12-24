<?php

use Faker\Generator as Faker;
use App\Model\User;
use App\Model\Company;

$factory->define(App\Model\ProductCategory::class, function (Faker $faker) {
    return [
       'name' => $faker->name,
        'short_name' => $faker->name,
        'description' => $faker->paragraph,  
        'parent_id' => null,
        'creator_user_id'=>function(){
            return User::all()->random();
        },
        'company_id'=>function(){
            return Company::all()->random();
        }
    ];
});
