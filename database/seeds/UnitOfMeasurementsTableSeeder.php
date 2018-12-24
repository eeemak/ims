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
    	$item->name = 'KiloGram';
    	$item->short_name = 'KG';
    	$item->description = 'Description';
    	$item->company_id = 1;
    	$item->creator_user_id = 1;
    	$item->save();
    }
}
