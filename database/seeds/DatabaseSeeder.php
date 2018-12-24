<?php

use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        // $this->call(UsersTableSeeder::class);
       

        //factory
        factory(App\Model\User::class,10)->create();
        factory(App\Model\Company::class,10)->create();
        factory(App\Model\ProductBrand::class,50)->create();
        factory(App\Model\ProductCategory::class,50)->create();
        factory(App\Model\ProductGroup::class,10)->create();
        //Seeder
        $this->call(UnitOfMeasurementsTableSeeder::class);
    }
}
