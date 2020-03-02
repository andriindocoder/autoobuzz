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
}