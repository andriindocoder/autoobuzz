<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class CarBrandModel extends Model
{
    protected $table = 'car_brand_model';

    public function modelYears()
    {
        return $this->hasMany(CarBrandModelYear::class, 'brandModelId', 'id');
    }
}