<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Outdoor extends Model
{
    public function products()
    {
        return $this->hasMany(Product::class, 'outdoor_id', 'id');
    }
}
