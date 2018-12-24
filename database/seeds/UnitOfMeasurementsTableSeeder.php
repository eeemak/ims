<?php

use Illuminate\Database\Seeder;
use App\Model\UnitOfMeasurement;

class UnitOfMeasurementsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
    	$item = new UnitOfMeasurement;
    	$item->name = 'name';
    	$item->short_name = 'name';
    	$item->short_name = 'name';
    	$item->description = 'name';
    	$item->company_id = 'name';
    	$item->creator_user_id = 'name';
    	$item->save();
    }
}
