<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class BuzzCarmaker extends Model
{
    protected $table = 'buzz_carmaker';

    public function models()
    {
        return $this->hasMany(CarBrandModel::class, 'brandIdCode', 'id');
    }

    public function brandDescription() {
    	return $this->belongsTo(CarBrand::class, 'id', 'brandId');
    }
}