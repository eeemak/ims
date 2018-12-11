<?php

namespace App\Model;

use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    public function unit_of_measurement(){
        return $this->belongsTo(UnitOfMeasurement::class);
    }
}
